@extends('partial.template')

@section('title_web')
    Detail Data Blog
@endsection

@section('content')
        <!-- Begin Page Content -->
        <div class="container-fluid">

        <!-- Page Heading -->
        <div class="d-sm-flex align-items-center justify-content-between mb-4">
            <h1 class="h3 mb-0 text-gray-800 font-weight-bold">Detail Data Blogs</h1>
            <a href="/blog" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm">
                <i class="fas fa-arrow-left"></i>
                Kembali
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
                <table class="table table-bordered table-striped table-hover">
                    <thead>
                        <tr class="text-center text-primary">
                            <th>No</th>
                            <th>GAMBAR</th>
                            <th>JUDUL</th>
                            <th>CONTENT</th>
                        </tr>
                    </thead>
                    <tbody>
                                <tr class="text-center">
                                        <td>1</td>
                                        <td><img src="{{ Storage::url('public/blogs/').$detail->image }}" class="rounded" style="width: 120px; height:120px;"></td>
                                        <td>{{ $detail->title }}</td>
                                        <td>{!! $detail->content !!}</td>
                                    </div>
                                    </div>
                                    </div>
                                </div>
                            </tr>
                        
                        </tbody>
                </table>
            </div>
            </div>
        </div> 
    </div>
    </div>
    <!-- /.container-fluid -->
@endsection