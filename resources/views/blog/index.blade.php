@extends('main')

@section('title', '| Blog')

@section('content')


	<div class="row">
		<div class="col-md-8 col-md-offset-2">
			<h1>Blog</h1>
		</div>
	</div>

	@foreach ($posts as $post)
	<div class="row">
		<div class="col-md-8 col-md-offset-2">
			<h2>{{ $post->title }}</h2>
			<h5>Published: {{ date('M j, Y', strtotime($post->created_at)) }}</h5>

			<p>{{ substr(strip_tags($post->body), 0, 250) }}{{ strlen(strip_tags($post->body)) > 250 ? '...' : "" }}</p>

			<a href="{{ route('blog.single', $post->slug) }}" class="btn btn-primary">Read More</a>
			<hr>
		</div>
	</div>
	@endforeach
	<div class="row">
		<div class="col-md-8 col-md-offset-2">
			<div>
				<ul class="pagination pagination-sm">
					<li class="page-item disabled">
						<a class="page-link" href="#">&laquo;</a>
					</li>
					<li class="page-item active">
						<a class="page-link" href="#">1</a>
					</li>
					<li class="page-item">
						<a class="page-link" href="#">2</a>
					</li>
					<li class="page-item">
						<a class="page-link" href="#">3</a>
					</li>
					<li class="page-item">
						<a class="page-link" href="#">4</a>
					</li>
					<li class="page-item">
						<a class="page-link" href="#">5</a>
					</li>
					<li class="page-item">
						<a class="page-link" href="#">&raquo;</a>
					</li>
				</ul>
			</div>
		</div>
	</div>
	<div class="row">
		<div class="col-md-12">
			<div class="text-center">
				{!! $posts->links() !!}
			</div>
		</div>
	</div>


@endsection
