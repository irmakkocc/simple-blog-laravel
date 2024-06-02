<div class="col-md-6">
@if(count($articles)>0)
    <div class="row">
        @foreach($articles as $article)
        <div class="col-lg-6">
            <div class="card mb-4">
                <img class="card-img-top" src="{{ $article->image }}" alt="..." />
                <div class="card-body">
                    <div class="small text-muted">{{$article->created_at->format('d M Y')}}</div>
                    <div class="small text-muted">{{$article->getCategory->name}}</div>
                    <h2 class="card-title h4">{{$article->title}}</h2>
                    <p class="card-text">{{$article->content}}</p>
                    <a class="btn btn-primary" href="{{route('single', [$article->getCategory->slug,$article->slug])}}">Read more →</a>
                </div>
            </div>
        </div>
        @endforeach
    </div>
    @else
        <h3 class="card-title">Bu kategoriye ait bir yazı bulunamadı..</h3>
        <br/>
    @endif 
                                    
</div>