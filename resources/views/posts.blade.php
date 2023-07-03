@extends('layouts.app')

@section('content')
    
<div class="d-flex flex-wrap gap-4 mt-5 px-3">
    @foreach ($posts as $post)
    <article class="">
        <div class="card" style="width: 18rem;">
            <div class="card-body">
              <h5 class="card-title">{{ $post->title }}</h5>
              <h6 class="card-subtitle mb-2 text-body-secondary">Card subtitle</h6>
              <ul class="nav flex-row">
                <li class="nav-item">
                  <a class="nav-link p-0" aria-current="page" href="/categories/{{$post->category->id}}/posts"><span class="badge text-bg-primary">{{$post->category->name}}</span></a>
                </li>
              </ul>
              <p class="card-text">{{ $post->excerpt }}</p>
              <a href="/posts/{{ $post->slug}}" class="card-link">Read more</a>
            </div>
          </div>
    </article>
@endforeach
</div>

@endsection

