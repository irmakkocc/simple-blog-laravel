@extends('back.layouts.master')
@section('title', 'Ayarlar')
@section('content')
            <div id="layoutSidenav_content">
                <main>
                    <div class="container-fluid px-4">
                        <h1 class="mt-4">@yield('title')</h1>
                        <ol class="breadcrumb mb-4">
                        </ol>
                        <div class="card mb-4">
                            <div class="card-body">
                                DataTables is a third party plugin that is used to generate the demo table below. For more information about DataTables, please visit the
                                <a target="_blank" href="https://datatables.net/">official DataTables documentation</a>
                                .
                            </div>
                        </div>
                        <div class="card mb-4">
                            <div class="card-body">
                                <form method="POST" action="{{route('admin.config.update')}}" enctype="multipart/form-data">
                                    @csrf
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label>Site Başlığı</label>
                                            <input value="{{$config->title}}" type="text" name="title" required class="form-control"/>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label>Site Aktiflik Durumu</label>
                                            <select name="active" required class="form-control">
                                                <option @if($config->active==1) selected @endif value="1">Açık</option>
                                                <option @if($config->active==0) selected @endif value="0">Kapalı</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label>Site Logo</label>
                                            <input type="file" name="logo" class="form-control"/>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label>Site Fav Icon</label>
                                            <input type="file" name="favicon" class="form-control"/>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label>Twitter</label>
                                            <input type="text" name="twitter" class="form-control" value="{{$config->twitter}}"/>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label>Instagram</label>
                                            <input type="text" name="instagram" class="form-control" value="{{$config->instagram}}"/>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label>GitHub</label>
                                            <input type="text" name="github" class="form-control" value="{{$config->github}}"/>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label>Linkedln</label>
                                            <input type="text" name="linkedln" class="form-control" value="{{$config->linkedln}}"/>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <button type="submit" class="btn btn-block btn-md btn-success">Güncelle</button>
                                </div>
                                </form>
                            </div>                      
                    </div>
        
                </main>
@endsection
