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
    <section class="promotion-page">
        <div class="container">
            <div class="row">
                <div class="col-12 col-sm-12 col-md-12 col-lg-12 col-xl-12">
                    <h2 class="text-center">
                        <div class="sao"><span>{{ $category->title_tag }}</span></div>
                    </h2>
                </div>
            </div>
            <div class="row">
                <div class="col-12 col-sm-12 col-md-12 col-lg-12 col-xl-12">
                    <div class="wrap-promotion">
                        @foreach($promotion as $item)
                            <div class="row">
                                <div class="col-12 col-sm-12 col-md-12 col-lg-5 col-xl-5 text-center">
                                    <img class="img-fluid" src="{{ $item->news->image }}" alt="{{ $item->news->title }}" title="{{ $item->news->title }}" />
                                </div>
                                <div class="col-12 col-sm-12 col-md-12 col-lg-7 col-xl-7">
                                    <h3>{{ $item->news->title }}</h3>
                                    <div>
                                        {!! $item->news->content !!}
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    </div>
                </div>
            </div>
            <div class="center">
                {{ $promotion->links('vendor.pagination.bootstrap-4') }}
            </div>
        </div>
    </section>
@endsection