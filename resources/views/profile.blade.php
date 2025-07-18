@extends('layouts.users')
@section('content')
    <div class="page-content-wrapper py-3">
        <div class="container">
            <!-- User Information-->
            <div class="card user-info-card mb-3">
                <div class="card-body d-flex align-items-center">
                    <div class="user-info">
                        <div class="d-flex align-items-center">
                            <h5 class="mb-1">{{ $user->name }}</h5><span class="badge bg-warning ms-2 rounded-pill">Pro</span>
                        </div>
                        <p class="mb-0">UX/UI Designer</p>
                    </div>
                </div>
            </div>
            <div class="card">
                <div class="card-body">
                    <!-- User Meta Data-->
                    <h2>Buat Postingan Baru</h2>
                    
                    @if (session('success'))
                        <div class="alert alert-success">
                            {{ session('success') }}
                        </div>
                    @endif
                    <form action="{{ route('posts.store') }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        <div class="mb-3">
                            <label for="description" class="form-label">Deskripsi</label>
                            <textarea name="description" class="form-control" id="description" rows="3">{{ old('description') }}</textarea>
                            @error('description')
                                <small class="text-danger">{{ $message }}</small>
                            @enderror
                        </div>
                        
                        <div class="mb-3">
                            <label for="image" class="form-label">Upload Gambar</label>
                            <input type="file" name="image" class="form-control" id="image">
                            @error('image')
                                <small class="text-danger">{{ $message }}</small>
                            @enderror
                        </div>
                        
                        <button type="submit" class="btn btn-primary">Posting</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection