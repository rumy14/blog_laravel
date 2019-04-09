@extends('main')

@section('title', '| Blog')

@section('content')
	<div class="row">
		<div class="col-md-1">
		</div>

		<div class="col-md-4">
			<br>
			<div class="row">
					<div class="dropdown">
						<button class="btn btn-primary dropdown-toggle" type="button" data-toggle="dropdown">Get By Category
							<span class="caret"></span></button>
						<ul class="dropdown-menu">
							@foreach ($categories as $category)
								<li><a href="{{ route('getcategory', $category->id) }}">{{ $category->name}} - <span class="badge badge-pill badge-dark">{{ $category->posts->count() }}</span></a></li>
							@endforeach
						</ul>
					</div>
			</div>
			<br>
			<div class="row">
					@forelse ($posts as $post)
						<div class="media">
							<a class="pull-left" href="{{ route('blog.single', $post->slug) }}">
								<img class="media-object img-thumbnail" src="{{{asset('/images/' . $post->image)}}}" height="150" width="150">
							</a>
{{--							<input type="hidden" name="view_count" value="{{ $post->view_count }}">--}}
							<div class="media-body">
								<h4 class="media-heading">{{ $post->title }}</h4>
								<h5>Published: {{ date('M j, Y', strtotime($post->created_at)) }}</h5>
								<p>{{ substr(strip_tags($post->body), 0, 250) }}{{ strlen(strip_tags($post->body)) > 250 ? '  ........' : "" }}
									<br><a href="{{ route('blog.single', $post->slug) }}" class="btn btn-primary btn-sm">Read More</a></p>
							</div>
						</div>
						<hr>
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

			<div class="row">
					<div class="text-center">
						{!! $posts->links() !!}
					</div>
			</div>
		</div>
		<br>
		<div class="col-md-2">
		</div>
		<div class="col-md-3">
			<div class="row">
				<ul class="list-group">
					<li class="list-group-item active">
						<h4>Popular Post</h4>
					</li>
{{--					@forelse ($popPosts->sortByDesc('view_count')->slice(0, 4) as $post)--}}
					@forelse ($popPosts as $post)
						<li class="list-group-item">
							<span class="badge"><i class="fas fa-eye"></i>  {{ $post->view_count }}</span>
							<h4 class="media-heading">{{ substr(strip_tags($post->title), 0, 25) }}{{ strlen(strip_tags($post->title)) > 25 ? '' : "" }}</h4>
						</li>
					@empty
						<li class="list-group-item">
							<span class="badge">&#128540;</span>
								No post
						</li>
					@endforelse
				</ul>
			</div>
		</div>
		<div class="col-md-2">
		</div>
	</div>
@endsection
