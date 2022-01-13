@extends('frontlayout')
@section('title','Главная страница')
@section('content')
		<div class="row">
			<div class="col-md-8">
				<div class="row mb-5"> 
					@if(count($posts)>0)
						@foreach($posts as $post)
						<div class="col-md-4">
							<div class="card">
							  <a href="{{url('detail/'.Str::slug($post->title).'/'.$post->id)}}"><img src="{{asset('imgs/thumb/'.$post->thumb)}}" class="card-img-top" alt="{{$post->title}}" /></a>
							  <div class="card-body">
							    <h5 class="card-title text-center"><a href="{{url('detail/'.Str::slug($post->title).'/'.$post->id)}}">{{$post->title}}</a></h5>
							  </div>
							</div>
						</div>
						@endforeach
					@else
					<p class="alert alert-danger">Новостей не найдено</p>
					@endif
				</div>
				<!-- Pagination -->
				{{$posts->links()}}
			</div>
			<!-- Right SIdebar -->
			<div class="col-md-4">
				<!-- Recent Posts -->
				<div class="card mb-4">
					<h5 class="card-header">Последние новости</h5>
					<div class="list-group list-group-flush">
						@if($recent_posts)
							@foreach($recent_posts as $post)
								<a href="{{url('detail/'.Str::slug($post->title).'/'.$post->id)}}" class="list-group-item">{{$post->title}}</a>
							@endforeach
						@endif
					</div>
				</div>
			</div>
		</div>
@endsection('content')