@extends('layout.app')

@section('content')
    
    <h3> Post </h3>
    @if(count($posts) > 0)
        @foreach($posts as $post)

             <div class="card card-body mb-2">
                <h4>{{$post->title}}</h4>
                <p>{{$post->body}}</p>
                <small>Written at:{{$post->created_at}}</small>
             </div>

        @endforeach
    @else

        <p>There are no posts to show!!</p> 

    @endif
    
@endsection