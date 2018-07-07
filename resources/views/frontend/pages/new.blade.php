@extends ('frontend.master')
@section('meta')
    <title>{{ $category->name }}</title>
    <meta name="keywords" content="{{ $category->meta_keywords_tag }}">
    <meta name="description" content="{{ $category->meta_description_tag }}">
    <meta property="og:title" content="{{ $category->name }}"/>
    <meta property="og:url" content="{{ Request::url() }}"/>
    <link rel="canonical" href="{{ Request::url() }}" />
@endsection
@section ('content')
    <section class="news-page">
        <div class="container">
            <div class="row">
                <div class="col-12 col-sm-12 col-md-12 col-lg-12 col-xl-12">
                    <h2 class="text-center">
                        <div class="sao"><span>{{ $category->title_tag }}</span></div>
                    </h2>
                </div>
            </div>
            @foreach($news as $item)
                <div class="row text-center">
                    <div class="col-12 col-sm-12 col-md-12 col-lg-6 col-xl-6">
                        <a href="{{ route('new.detail', ['slug'=>$item->news->slug]) }}" title="{{ $item->news->title }}">
                            <img class="img-fluid" src="{{ $item->news->image }}" alt="{{ $item->news->title }}" title="{{ $item->news->title }}"/>
                        </a>
                    </div>
                    <div class="col-12 col-sm-12 col-md-12 col-lg-6 col-xl-6">
                        <a class="tt-news" href="{{ route('new.detail', ['slug'=>$item->news->slug]) }}" title="{{ $item->news->title }}">
                            <h3>{{ $item->news->title }}</h3>
                        </a>
                        <span>{{ $item->news->created_at }}</span>
                        <div class="text-justify">
                            {!! $item->news->intro !!} <a href="{{ route('new.detail', ['slug'=>$item->news->slug]) }}" title="{{ $item->news->title }}">Xem thêm</a>
                        </div>
                    </div>
                </div>
            @endforeach
            <div class="center">
                {{ $news->links('vendor.pagination.bootstrap-4') }}
            </div>
        </div>
    </section>
@endsection