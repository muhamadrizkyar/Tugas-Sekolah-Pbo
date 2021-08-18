@extends('partial.template')

@section('title_web')
    Data Blogs
@endsection

@section('content')
        <!-- Begin Page Content -->
        <div class="container-fluid">

        <!-- Page Heading -->
        <div class="d-sm-flex align-items-center justify-content-between mb-4">
            <h1 class="h3 mb-0 text-gray-800 font-weight-bold">Data Blogs</h1>

            <a href="/blog/create" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm">
                <i class="fas fa-plus"></i> 
                Tambah Data Blogs
            </a>
        </div>
                   
    <!-- DataTales Example -->
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <div class="row">
                <div class="col-sm-12 col-md-8">
                    <i class="fas fa-folder-open h2 text-primary"></i>
                </div>
            </div>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered table-striped table-hover" id="dataTable">
                    <thead>
                        <tr class="text-center text-primary">
                            <th>No</th>
                            <th>Gambar</th>
                            <th>Judul</th>
                            <th>Content</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                    @forelse ($blogs as $key => $blog)
                            <tr class="text-center">
                                <td>{{$blogs->firstItem() + $key }}</td>
                                <td><img src="{{ Storage::url('public/blogs/').$blog->image }}" class="rounded" style="width: 120px; height:120px;"></td>
                                <td>{{ $blog->title }}</td>
                                <td>{!! $blog->content !!}</td>
                                
                                <td>
                                    <a href="{{ route('blog.edit', $blog->id) }}" class="btn btn-warning btn-circle btn-sm">
                                        <i class="fas fa-pen-square"></i>
                                    </a>
                                    <a href="{{ route('blog.show', $blog->id) }}" class="btn btn-info btn-circle btn-sm">
                                        <i class="fas fa-clipboard"></i>
                                    </a>
                                    <button class="btn btn-danger btn-circle btn-sm" data-toggle="modal" data-target="#deleteModal">
                                        <i class="fas fa-trash"></i>
                                    </button>
                                </td>
                                <div class="modal fade" id="deleteModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"aria-hidden="true">
                                    <div class="modal-dialog modal-dialog-centered" role="document">
                                        <div class="modal-content">
                                            <div class="modal-header text-center mx-auto">
                                                <h5 id="exampleModalLabel">
                                                    Yakin ingin menghapus data?
                                                </h5>
                                            </div>
                                            <div class="modal-body text-center">
                                                <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
                                                <form action="{{ route('blog.destroy', $blog->id) }}" class="d-inline" method="POST">
                                                    @csrf
                                                    @method('DELETE')
                                                    <button class="btn btn-primary">Delete</button>
                                                </form>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </tr>
                            @endforeach
                        </tbody>
                        <tfoot>
                            <tr class="text-center text-primary">
                                <th>No</th>
                                <th>Gambar</th>
                                <th>Judul</th>
                                <th>Content</th>
                                <th>Action</th>
                            </tr>
                        </tfoot>
                </table>
            </div>
            </div>
        </div> 
    </div>
    </div>
    <!-- /.container-fluid -->
@endsection