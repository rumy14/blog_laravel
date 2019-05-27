@extends('main')
<?php $titleTag = htmlspecialchars($post->title); ?>
@section('title', "| $titleTag")

@section('content')
	<div id="fb-root"></div>
	<script async defer crossorigin="anonymous" src="https://connect.facebook.net/en_GB/sdk.js#xfbml=1&version=v3.2&appId=1447509242045173&autoLogAppEvents=1"></script>
	<div class="row">
		<div class="col-md-8 col-md-offset-2">
			@if(!empty($post->image))
				<img class="img-fluid" src="{{asset('/images/' . $post->image)}}" width="1000" height="200" />
			@endif
			<h1 id="title">{{ $post->title }}</h1>
			<p>{!! $post->body !!}</p>
			<hr>
				@if(Auth::user())
			{{ Form::open(['route' => ['like', $post->id], 'method' => 'POST']) }}

			<div class="row">
				<div class="col-md-3">
					@if(!$like->isEmpty())
						@if($like[0]['likeposts'] == 0)
							{{ Form::submit('Like', ['class' => 'btn btn-success btn-block', 'style' => 'margin-top:15px;']) }}
						@else
							{{ Form::submit('Unlike', ['class' => 'btn btn-danger btn-block', 'style' => 'margin-top:15px;']) }}
						@endif
					@else
						{{ Form::submit('Like', ['class' => 'btn btn-success btn-block', 'style' => 'margin-top:15px;']) }}
					@endif
				</div>
				<div class="col-md-6"><span class="badge badge-pill badge-info" style='margin-top:15px;'>{{$likecount}}</span></div>
			</div>

			{{ Form::close() }}
				@endif

			<p>Posted In: {{ $post->category->name }}</p>
		</div>
	</div>
	<div class="row">
		<div class="col-md-8 col-md-offset-2">
			<div class="sharethis-inline-share-buttons"></div>
		</div>
		</div>
	</div>

	<div class="row">
		<div class="col-md-8 col-md-offset-2">
			<h3 class="comments-title"><span class="glyphicon glyphicon-comment"></span>  {{ $post->comments()->count() }} Comments</h3>
			@foreach($post->comments as $comment)
				<div class="comment">
					<div class="author-info">
						<img src="{{ "https://www.gravatar.com/avatar/" . md5(strtolower(trim($comment->email))) . "?s=50&d=monsterid" }}" class="author-image">
						<div class="author-name">
							<h4>{{ $comment->name }}</h4>
							<p class="author-time">{{ date('F dS, Y - g:iA' ,strtotime($comment->created_at)) }}</p>
						</div>
					</div>
					<div class="comment-content">
						{{ $comment->comment }}
					</div>

				</div>
			@endforeach
		</div>
	</div>

	<div class="row">
		<div id="comment-form" class="col-md-8 col-md-offset-2" style="margin-top: 50px;">
			{{ Form::open(['route' => ['comments.store', $post->id], 'method' => 'POST']) }}

				<div class="row">
					<div class="col-md-6">
						{{ Form::label('name', "Name:") }}
						{{ Form::text('name', null, ['class' => 'form-control']) }}
					</div>

					<div class="col-md-6">
						{{ Form::label('email', 'Email:') }}
						{{ Form::text('email', null, ['class' => 'form-control']) }}
					</div>

					<div class="col-md-12">
						{{ Form::label('comment', "Comment:") }}
						{{ Form::textarea('comment', null, ['class' => 'form-control', 'rows' => '5']) }}

						{{ Form::submit('Add Comment', ['class' => 'btn btn-success btn-block', 'style' => 'margin-top:15px;']) }}
					</div>
				</div>

			{{ Form::close() }}
		</div>
	</div>

@endsection
