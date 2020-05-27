@extends('layout')

@section('header-featured')
	<div id="header-featured">
		<div id="banner-wrapper">
			<div id="banner" class="container">
				<h2>Articles</h2>
		</div>
	</div>
@endsection

@section('content')
<div id="wrapper">
    <div id="page" class="container">
        @foreach ($articles as $article)
            <div class="content">
                <div class="title">
                    <h2><a href="/articles/{{ $article->id }}">{{ $article->title }}</a></h2>
                </div>
                <p>
                    <img src="images/banner.jpg" alt="banner" class="image image-full">
                </p>
                {{ $article->excerpt }}
            </div>
        @endforeach
    </div>
</div>
@endsection
