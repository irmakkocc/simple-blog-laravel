@extends('back.layouts.master')
@section('title', 'Tüm Makaleler')
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
                                            <th>Durum</th>
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
                                            <input class="switch" data-id="{{$articles->id}}" type="checkbox" data-on="Aktif" data-onstyle="success" data-off="Pasif" data-offstyle="danger" @if($articles->status==1) checked @endif data-toggle="toggle">
                                            </td>
                                            <td>
                                                <a target="_blank" href="{{route('single',[$articles->getCategory->slug, $articles->slug])}}" title ="Görüntüle" class="btn btn-sm btn-success"><i class="fa fa-eye"></i>  </a>
                                                <a href="{{route('admin.makaleler.edit', $articles->id)}}" title ="Düzenle" class="btn btn-sm btn-primary"><i class="fa fa-pencil"></i>  </a>
                                                <a href="{{route('admin.delete.article', $articles->id)}}" title ="Sil" class="btn btn-sm btn-danger"><i class="fa fa-times"></i>  </a>
                                            </td>
                                        </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                            </div>                      
                    </div>
        
                </main>
@endsection

@section('css')
<link href="https://gitcdn.github.io/bootstrap-toggle/2.2.2/css/bootstrap-toggle.min.css" rel="stylesheet">
@endsection
@section('js')
<script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
<script src="https://gitcdn.github.io/bootstrap-toggle/2.2.2/js/bootstrap-toggle.min.js"></script>
<script>
$(function(){
    $('.switch').change(function(){
        var id =  $(this).data('id');
        var statu = $(this).prop('checked') ? 1 : 0 ;
        $.get("{{route('admin.switch')}}", {id:id, statu:statu}, function(data, status){
            console.log(data);
        });
    })
})
</script>
@endsection