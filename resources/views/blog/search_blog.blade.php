@extends('main')
@section('title', '| Search Blog')

@section('content')
     <div class="row">
         <div class="col-md-8 col-md-offset-2">
             <h3>Results for: ""</h3>
             <br>
             @forelse ($posts as $post)
                 <div class="thumbnail">
                     <div class="caption">
                         <a class="pull-left" href="{{ route('blog.single', $post->slug) }}" style="margin-right: 10px;">
                             <img class="media-object img-thumbnail" src="{{{asset('/images/' . $post->image)}}}" height="100" width="100">
                         </a>
                         <h4 class="media-heading">{{ ucfirst($post->title) }}</h4>
                         <p>{{ substr(strip_tags($post->body), 0, 100) }}{{ strlen(strip_tags($post->body)) > 50 ? '....' : "" }}
                         <a href="{{ route('blog.single', $post->slug) }}">Read More</a></p>
                     </div>
                 </div>
             @empty
                 <div class="row">
                     <div class="col-md-8">
                         <br>
                         <div class="alert alert-danger" role="alert">
                             <p>List is empty!! &nbsp;&nbsp;&nbsp;&nbsp;<span style="font-size:30px">&#128540;&#128540;&#128540;</span></p>
                         </div>
                     </div>
                 </div>
             @endforelse
        </div>
     </div>
@endsection
