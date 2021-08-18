@extends('partial.template')

@section('title_web')
    Dashboard
@endsection

@section('content')
    <div class="card-body">
    <div class="container-fluid">

      <!-- Page Heading -->
      <div class="d-sm-flex align-items-center justify-content-center mb-5">
            <h1 class="h3 mb-0 text-gray-800 font-weight-bold">DASHBOARD</h1>
        </div>
        <!-- Content Row -->
        <div class="row justify-content-center">

            <!-- Earnings (Monthly) Card Example -->
            <div class="col-xl-4 col-md-6 mb-4">
                <div class="card border-left-primary shadow h-100 py-2">
                    <div class="card-body">
                        <div class="row no-gutters align-items-center">
                            <div class="col mr-2">
                                <div class="text-s font-weight-bold text-primary text-uppercase mb-1">
                                    Total Data Blogs</div>
                                <div class="h5 mb-0 font-weight-bold text-gray-800"> {{ $blogs -> total()}}</div>
                            </div>
                            <div class="col-auto">
                                <i class="fas fa-chart-bar fa-2x text-gray-300"></i>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Earnings (Monthly) Card Example -->
            <div class="col-xl-4 col-md-6 mb-4">
                <div class="card border-left-success shadow h-100 py-2">
                    <div class="card-body">
                        <div class="row no-gutters align-items-center">
                            <div class="col mr-2">
                                <div class="text-s font-weight-bold text-success text-uppercase mb-1">
                                    Total Data User</div>
                                <div class="h5 mb-0 font-weight-bold text-gray-800">{{ $user -> total()}}</div>
                            </div>
                            <div class="col-auto">
                                <i class="fas fa-users fa-2x text-gray-300"></i>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            </div>
        </div>
</div>
</div>
@endsection