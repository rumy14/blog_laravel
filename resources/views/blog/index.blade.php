@extends('main')

@section('title', '| Blog')

@section('content')


	{{--<div class="row">--}}
		{{--<div class="col-md-8 col-md-offset-2">--}}
			{{--<h1>Blog</h1>--}}
		{{--</div>--}}
	{{--</div>--}}
	<div class="row">
		<div class="col-md-9">
			@foreach ($posts as $post)
				<div class="row">
					<div class="col-md-8 col-md-offset-1">
						<br>
						<div class="media">
							<a class="pull-left" href="#">
								<img class="media-object" src="{{{asset('/images/' . $post->image)}}}" height="100" width="110">
							</a>
							<div class="media-body">
								<h4 class="media-heading">{{ $post->title }}</h4>
								<h5>Published: {{ date('M j, Y', strtotime($post->created_at)) }}</h5>
								<p>{{ substr(strip_tags($post->body), 0, 250) }}{{ strlen(strip_tags($post->body)) > 250 ? '  ........' : "" }}
									<a href="{{ route('blog.single', $post->slug) }}" class="btn btn-primary btn-sm">Read More</a></p>

							</div>
						</div>
						<hr>
					</div>
				</div>
			@endforeach
		</div>
		<div class="col-md-2 col-md-offset-1">
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
