@extends('back.layouts.master')
@section('title', 'Tüm Kategoriler')
@section('content')
            <div id="layoutSidenav_content">
                <main>
                    <div class="container-fluid px-4">
                        <h1 class="mt-4">@yield('title')</h1>
                        <ol class="breadcrumb mb-4">
                        </ol>
                        <div class="row">
                            <div class="col-md-4">
                                <div class="card shadow mb-4">
                                    <div class="card-header py-3">
                                        <h6 class="m-0 font-weight-bold">Yeni Kategori Oluştur</h6>
                                    </div>
                                <div class="card-body">
                                    <form method="post" action="{{route('admin.category.create')}}">
                                        @csrf
                                        <div class="form-group mb-3">
                                            <label class="mb-1"><b>Kategori Adı</b></label>
                                            <input type="text" class="form-control" name="category" required/>
                                        </div>
                                        <div class="form-group">
                                            <button type="submit" class="btn btn-success btn-block">Ekle </button>
                                        </div>
                                    </form>
                                </div>
                                </div>
                            </div>
                            <div class="col-md-8">
                                <div class="card shadow mb-4">
                                    <div class="card-header py-3">
                                        <h6 class="m-0 font-weight-bold">@yield('title')</h6>
                                    </div>
                                <div class="card-body">
                                <div class="card-body">
                                <table id="datatablesSimple">
                                    <thead>
                                        <tr>
                                            <th>Kategori Adı</th>
                                            <th>Makale Sayısı</th>
                                            <th>Durum</th>
                                            <th>İşlemler</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach($categories as $category)
                                        <tr>
                                            <td>{{$category->name}}</td>
                                            <td>{{$category->articleCount()}}</td>
                                            <td>
                                            <input class="switch" data-id="{{$category->id}}" type="checkbox" data-on="Aktif" data-onstyle="success" data-off="Pasif" data-offstyle="danger" @if($category->status==1) checked @endif data-toggle="toggle">
                                            </td>
                                            <td>
                                            <a href="{{ route('admin.category.deleteData', ['id' => $category->id]) }}" title ="Sil" class="btn btn-sm btn-danger"><i class="fa fa-times"></i> </a>

                                            </td>
                                        </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                            </div>    
                                </div>
                                </div>
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

$(document).ready(function(){
    $('.remove-click').click(function(){
        var id = $(this).data('id');
        var confirmDelete = confirm("Bu kategoriyi ve ilgili tüm makaleleri silmek istediğinizden emin misiniz?");
        if (confirmDelete) {
            $.ajax({
                type: 'GET',
                url: '{{ route('admin.category.deleteData') }}',
                data: { id: id },
                success: function(data) {
                    if(data.success) {
                        location.reload(); // Sayfayı yenile
                    }
                }
            });
        }
    });

    $('.switch').change(function(){
        var id = $(this).data('id');
        var statu = $(this).prop('checked') ? 1 : 0;
        $.get("{{ route('admin.category.switch') }}", { id: id, statu: statu }, function(data, status){
            console.log(data);
        });
    });
});
</script>
@endsection