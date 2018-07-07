@extends ('frontend.master')
@section('meta')
    <title>{{ $category->name }}</title>
    <meta name="keywords" content="{{ $category->meta_keywords_tag }}">
    <meta name="description" content="{{ $category->meta_description_tag }}">
    <meta property="og:title" content="{{ $category->title_tag }}"/>
    <meta property="og:url" content="{{Request::url()}}"/>
    <link rel="canonical" href="{{Request::url()}}" />
@endsection
@section ('content')
    <section class="menu-page">
        <div class="container">
            <div class="row">
                <div class="col-12 col-sm-12 col-md-12 col-lg-12 col-xl-12">
                    <img class="img-fluid ck-menu" src="{{ $category->image }}" alt="">
                    <div class="d-none list-menu">
                        @foreach($banner as $image)
                            <a data-fancybox="{{ $category->slug }}" href="{{ $image->image }}" title="{{ $image->title }}">
                                <img src="{{ $image->image }}" alt="{{ $image->alt }}" title="{{ $image->title }}" />
                            </a>
                        @endforeach
                    </div>
                </div>
                <div class="col-12 col-sm-12 col-md-12 col-lg-12 col-xl-12 text-center">
                    <h2><div class="sao"><span>ĐẶC SẢN HÀU BIỂN</span></div></h2>
                </div>
            </div>
            <div class="row text-center">
                @foreach($menu as $item)
                    <div class="col-12 col-sm-6 col-md-6 col-lg-4 col-xl-4 lec-it">
                        <a data-min="33" data-fancybox="{{ $item->title }}" href="{{ $item->image }}">
                            <img class="img-fluid" src="{{ $item->image }}" alt="{{ $item->alt }}" title="{{ $item->title }}">
                            <div class="l-info">
                                <div class="dt wh100">
                                    <div class="wh100">
                                        <h3>{{ $item->title }}</h3>
                                        <span class="btn-page">Xem thêm</span>
                                    </div>
                                </div>
                            </div>
                        </a>
                        <div class="d-none">
                            @foreach($item->product_image as $image)
                                <a data-fancybox="{{ $item->title }}" href="{{ $image->images }}" title="{{ $item->title }}">
                                    <img src="{{ $image->images }}" alt="{{ $image->alt }}" title="{{ $item->title }}" />
                                </a>
                            @endforeach
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </section>
@endsection