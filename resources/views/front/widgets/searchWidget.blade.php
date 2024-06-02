<div class="card mb-4">
    <div class="card-header"><b>Makale Arayın</b></div>
    <div class="card-body">
        <form method="GET" action="{{route('search')}}">
            @csrf
        <div class="input-group">
            <input class="form-control" type="text" name="query" placeholder="Başlık girin..." aria-label="Enter search term..." aria-describedby="button-search" />
            <button class="btn btn-primary" id="button-search" type="submit">Ara</button>
        </div>
        </form>
    </div>
</div>