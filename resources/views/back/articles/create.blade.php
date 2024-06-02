@extends('back.layouts.master')
@section('title', 'Makale Oluştur')
@section('content')
            <div id="layoutSidenav_content">
                <main>
                    <div class="container-fluid px-4">
                        <h1 class="mt-4">@yield('title')</h1>
                        <ol class="breadcrumb mb-4">
                        </ol>
                        <div class="card mb-4">

                            <div class="card-body">
                                @if($errors->any())
                                <div class="alert alert-danger">
                                    @foreach($errors->all() as $error)
                                    <li>{{$error}}</li>
                                    @endforeach
                                </div>
                                @endif
                                <form method="post" action="{{route('admin.makaleler.store')}}" enctype="multipart/form-data">
                                    @csrf
                                    <div class="form-group mb-3">
                                        <label class="mb-1"><b>Makale Başlığı</b></label>
                                        <input type="text" name="title" class="form-control" required></input>
                                    </div>
                                    <div class="form-group mb-3">
                                        <label class="mb-1"><b>Makale Kategorisi</b></label>
                                        <select name="category" class="form-control" required>
                                            <option value="" required>Seçim Yapınız</option>
                                            @foreach($category as $categories)
                                            <option value="{{$categories->id}}">{{$categories->name}}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                    <div class="form-group mb-3">
                                        <label class="mb-1"><b>Makale Fotoğrafı</b></label>
                                        <input type="file" name="image" class="form-control" required></input>
                                    </div>
                                    <div class="form-group mb-3">
                                        <label class="mb-1"><b>Makale İçeriği</b></label>
                                        <textarea id="editor" name="content" class="form-control" rows="5"></textarea>
                                    </div>
                                    <div class="form-group mb-3">
                                        <button type="submit" class="btn btn-success btn-block">Makaleyi Oluştur</button>
                                    </div>
                                </form>
                            </div>                      
                    </div>
                </main>
@endsection
@section('css')
<link href="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote.min.css" rel="stylesheet">
@endsection
@section('js')

<script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote.min.js"></script>
<script>
    $(document).ready(function(){
        $('#editor').summernote({
            'height':300,
        });
    });
</script>
@endsection