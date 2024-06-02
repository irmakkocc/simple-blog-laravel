@extends('back.layouts.master')
@section('title', 'Silinen Makaleler')
@section('content')
            <div id="layoutSidenav_content">
                <main>
                    <div class="container-fluid px-4">
                        <h1 class="mt-4">@yield('title')</h1>
                        <ol class="breadcrumb mb-4">
                        </ol>
                        <div class="card mb-4">
                            <div class="card-header">
                                <i class="fas fa-table me-1"></i>
                                <strong>{{$article->count()}}</strong> makale bulundu.
                            </div>
                            <div class="card-body">
                                <table id="datatablesSimple">
                                    <thead>
                                        <tr>
                                            <th>Fotoğraf</th>
                                            <th>Makale Başlığı</th>
                                            <th>Kategori</th>
                                            <th>Oluşturma Tarihi</th>
                                            <th>İşlemler</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach($article as $articles)
                                        <tr>
                                            <td><img src="{{$articles->image}}" width="200"></td>
                                            <td>{{$articles->title}}</td>
                                            <td>{{$articles->getCategory->name}}</td>
                                            <td>{{$articles->created_at}}</td>
                                            <td>
                                            <a href="{{route('admin.recover.article', $articles->id)}}" title ="Geri Dönüştür" class="btn btn-sm btn-primary"><i class="fa fa-recycle"></i>  </a>
                                                <a href="{{route('admin.hard.delete.article', $articles->id)}}" title ="Sil" class="btn btn-sm btn-danger"><i class="fa fa-times"></i>  </a>
                                            </td>
                                        </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                            </div>                      
                    </div>
        
                </main>
@endsection