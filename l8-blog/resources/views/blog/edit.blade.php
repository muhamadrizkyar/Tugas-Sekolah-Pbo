@extends('partial.template')

@section('title_web')
    Edit Blogs
@endsection

@section('content')
    <!-- Begin Page Content -->
    <div class="container-fluid">
        <!-- Page Heading -->
        <div class="d-sm-flex align-items-center justify-content-between mb-4">
            <h1 class="h3 mb-0 text-gray-800 font-weight-bold">Edit Data Blogs</h1>
            <a href="/blog" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm">
                <i class="fas fa-arrow-left"></i>
                Kembali
            </a>
        </div>

        <!-- DataTales Example -->
        <div class="card shadow mb-4 p-3">
            <div class="card-body">
                <form method="POST" action="{{ route('blog.update', $blog->id) }}" enctype="multipart/form-data">
                    @csrf
                    @method('PUT')
                    <div class="mb-3">

                        <label for="image" class="form-label">Gambar</label>
                        <input type="file" class="form-control @error('image') is-invalid @enderror" name="image">

                        @error('image')
                            <div class="alert alert-danger mt-2">Gambar wajib diisi!</div>
                        @enderror
                    </div>

                    <div class="mb-3">
                        <label for="title" class="form-label">Judul</label>
                        <input type="text" name="title" class="form-control @error('title') is-invalid @enderror" id="title"  value="{{ old('title', $blog->title) }}">

                        @error('title')
                            <div class="alert alert-danger mt-2">Judul Harap Diisi!</div>
                        @enderror
                    </div>

                    <div class="mb-3">
                    <label for="content" class="form-label">Konten</label>
                            <textarea class="form-control" id="content" name="konten" style="height: 100px" rows="7" placeholder="Masukkan Konten Blog">{{ old('konten', $blog->content ) }}</textarea>
                        
                            @error('konten')
                            <div class="alert alert-danger mt-2">Konten Harap Diisi!</div>
                        @enderror
                    </div>
                    <button type="submit" class="btn btn-primary float-end">Submit</button>
                </form>
            </div>
        </div>
    </div>
    @push('script')
    <script src="https://cdn.ckeditor.com/4.13.1/standard/ckeditor.js"></script>
    <script>
        CKEDITOR.replace( 'konten' );
    </script>
    @endpush
@endsection