@extends('main')

@section('title', '| Blog')

@section('content')
	<div class="row">
		<div class="col-md-1">
		</div>
		<div class="col-md-10">
			<div class="row">
				<div class="col-md-2">
					<div class="dropdown">
						<button class="btn btn-primary dropdown-toggle" type="button" data-toggle="dropdown" style="margin-top: 10px;">Get By Category
							<span class="caret"></span></button>
						<ul class="dropdown-menu">
							@foreach ($categories as $category)
								<li><a href="{{ route('getcategory', $category->id) }}">{{ $category->name}} - <span class="badge badge-pill badge-dark">{{ $category->posts->count() }}</span></a></li>
							@endforeach
						</ul>
					</div>
				</div>
				<div class="col-md-8">
					{{ Form::open(['route' => ['searchpost'], 'method' => 'POST', 'class' => 'navbar-form navbar-left', 'role' => 'search']) }}
						<div class="form-group">
							{{ Form::text('title', null, ['class' => 'form-control', 'placeholder' => 'Search By Title']) }}
						</div>
						<button type="submit" class="btn btn-default">
							<span class="glyphicon glyphicon-search"></span>
						</button>
					{{ Form::close() }}
				</div>
			</div>
		</div>
	</div>
	<div class="row">
		<div class="col-md-1">
		</div>
		<div class="col-md-7">
			<div class="row">
				<br>
				@forelse ($posts as $post)
					<div class="thumbnail">
						<div class="caption">
							<a class="pull-left" href="{{ route('blog.single', $post->slug) }}" style="margin-right: 10px;">
								<img class="media-object img-thumbnail" src="{{{asset('/images/' . $post->image)}}}" height="180" width="190">
							</a>
							<h4 class="media-heading">{{ ucfirst($post->title) }}</h4>
							<h6>Published: {{ date('M j, Y', strtotime($post->created_at)) }}</h6>
							<p>{{ substr(strip_tags($post->body), 0, 120) }}{{ strlen(strip_tags($post->body)) > 250 ? '  ........' : "" }}
								<a href="{{ route('blog.single', $post->slug) }}">Read More</a></p>
						</div>
					</div>
					<hr>
				@empty
					<div class="row">
						<br>
						<div class="alert alert-danger" role="alert">
							<p>List is empty!! &nbsp;&nbsp;&nbsp;&nbsp;<span style="font-size:30px">&#128540;&#128540;&#128540;</span></p>
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
{{--		<br>--}}
{{--		<div class="col-md-1">--}}

{{--		</div>--}}
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
							<h4 class="media-heading">{{ substr(strip_tags($post->title), 0, 25) }}{{ strlen(strip_tags(ucfirst($post->title))) > 25 ? '' : "" }}</h4>
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
		<div class="col-md-1">
		</div>
	</div>
@endsection
