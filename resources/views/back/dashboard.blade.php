@extends('back.layouts.master')
@section('title', 'Panel')
@section('content')
            <div id="layoutSidenav_content">
                <main>
                    <div class="container-fluid px-4">
                        <h1 class="mt-4">@yield('title')</h1>
                        <ol class="breadcrumb mb-4">
                        </ol>
                        <div class="row">
                            <div class="col-xl-3 col-md-6 mb-4">
                                <div class="card border-left-primary shadow h-100 py-2">
                                    <div class="card-body">
                                        <div class="row no-gutters align-items-center">
                                            <div class="col mr-2">
                                                <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">Toplam Makale Sayısı</div>
                                                <div class="h5-mb-0 font-weight-bold text-gray-800">{{$article}}</div>
                                            </div>
                                            <div class="col-auto">
                                                <i class="fa fa-book fa-2x text-gray-300"></i>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-3 col-md-6 mb-4">
                                <div class="card border-left-primary shadow h-100 py-2">
                                    <div class="card-body">
                                        <div class="row no-gutters align-items-center">
                                            <div class="col mr-2">
                                                <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">Toplam Kategori Sayısı</div>
                                                <div class="h5-mb-0 font-weight-bold text-gray-800">{{$category}}</div>
                                            </div>
                                            <div class="col-auto">
                                                <i class="fa fa-clone fa-2x text-gray-300"></i>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-3 col-md-6 mb-4">
                                <div class="card border-left-green shadow h-100 py-2">
                                    <div class="card-body">
                                        <div class="row no-gutters align-items-center">
                                            <div class="col mr-2">
                                                <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">Aktif Makele Sayısı</div>
                                                <div class="h5-mb-0 font-weight-bold text-gray-800">{{$activeArticle}}</div>
                                            </div>
                                            <div class="col-auto">
                                                <i class="fa fa-check fa-2x text-gray-300"></i>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-3 col-md-6 mb-4">
                                <div class="card border-left-green shadow h-100 py-2">
                                    <div class="card-body">
                                        <div class="row no-gutters align-items-center">
                                            <div class="col mr-2">
                                                <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">Aktif Kategori Sayısı</div>
                                                <div class="h5-mb-0 font-weight-bold text-gray-800">{{$activeCategory}}</div>
                                            </div>
                                            <div class="col-auto">
                                                <i class="fa fa-check fa-2x text-gray-300"></i>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </main>
@endsection