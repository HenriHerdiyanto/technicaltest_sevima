<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;

class PostController extends Controller
{
    /**
     * Menampilkan semua postingan.
     */
    public function index()
    {
        $posts = Post::with('user')->latest()->get();
        return view('posts.index', compact('posts'));
    }

    /**
     * Tampilkan form buat postingan.
     */
    public function create()
    {
        return view('posts.create');
    }

    /**
     * Simpan postingan baru.
     */
    public function store(Request $request)
    {
        $request->validate([
            'description' => 'required|string|max:1000',
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
        ]);

        $imagePath = null;

        if ($request->hasFile('image')) {
            $imagePath = $request->file('image')->store('posts', 'public');
        }

        Post::create([
            'user_id' => Auth::id(),
            'description' => $request->description,
            'image' => $imagePath,
            'likes' => 0,
        ]);

        return redirect()->back()->with('success', 'Postingan berhasil dibuat.');
    }

    /**
     * Tampilkan detail postingan (opsional).
     */
    public function show(Post $post)
    {
        return view('posts.show', compact('post'));
    }

    /**
     * Form edit post (opsional).
     */
    public function edit(Post $post)
    {
        // Pastikan user hanya bisa edit post miliknya
        if ($post->user_id !== Auth::id()) {
            abort(403);
        }

        return view('posts.edit', compact('post'));
    }

    /**
     * Simpan hasil edit post (opsional).
     */
    public function update(Request $request, Post $post)
    {
        if ($post->user_id !== Auth::id()) {
            abort(403);
        }

        $request->validate([
            'description' => 'required|string|max:1000',
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
        ]);

        if ($request->hasFile('image')) {
            if ($post->image) {
                Storage::disk('public')->delete($post->image);
            }
            $post->image = $request->file('image')->store('posts', 'public');
        }

        $post->description = $request->description;
        $post->save();

        return redirect()->route('posts.index')->with('success', 'Postingan berhasil diupdate.');
    }

    /**
     * Hapus postingan (opsional).
     */
    public function destroy(Post $post)
    {
        if ($post->user_id !== Auth::id()) {
            abort(403);
        }

        if ($post->image) {
            Storage::disk('public')->delete($post->image);
        }

        $post->delete();

        return redirect()->route('posts.index')->with('success', 'Postingan berhasil dihapus.');
    }
}
