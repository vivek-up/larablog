@extends('layout.app')

@section('content')
    
    <h3> Post </h3>
    @if(count($posts) > 0)
        @foreach($posts as $post)
           
             <div class="card card-body mb-2">
                <a href="/posts/{{$post->id}}">
                    <h5>{{$post->title}}</h5>
                </a>
                <small>Written at:{{$post->created_at}}</small>
             </div>
          
        @endforeach
    @else

        <p>There are no posts to show!!</p> 

    @endif
    
@endsection