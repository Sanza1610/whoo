@extends ('frontend.master')
@section('meta')
    <title>{{ $data->title }}</title>
    <meta name="keywords" content="{{ $data->meta_keywords_tag }}">
    <meta name="description" content="{{ $data->meta_description_tag }}">
    <meta property="og:title" content="{{ $data->name }}"/>
    <meta property="og:url" content="{{ Request::url() }}"/>
    <link rel="canonical" href="{{ Request::url() }}" />
@endsection
@section ('content')
    <section class="detail-page">
        <div class="container">
            <div class="row">
                <div class="col-12 col-sm-12 col-md-12 col-lg-7 col-xl-7">
                    <h1>{{ $data->title }}</h1>
                    <div class="time">{{ $data->created_at }}</div>
                    <div>
                        {!! $data->content !!}
                    </div>
                </div>
                <div class="col-12 col-sm-12 col-md-12 col-lg-5 col-xl-5 relate-item">
                    <h2 class="text-center">TIN TỨC NỔI BẬT</h2>
                    @foreach($relate as $item)
                        <div class="row">
                            <div class="col-12 col-sm-12 col-md-5 col-lg-5 col-xl-5">
                                <a href="{{ route('new.detail', ['slug'=>$item->slug]) }}" title="{{ $item->title }}">
                                    <img src="{{ $item->image }}" alt="{{ $item->alt }}" title="{{ $item->title }}"/>
                                </a>
                            </div>
                            <div class="col-12 col-sm-12 col-md-7 col-lg-7 col-xl-7">
                                <h3><a href="{{ route('new.detail', ['slug'=>$item->slug]) }}" title="{{ $item->title }}">{{ $item->title }}</a></h3>
                                <span>{{ $item->created_at }}</span>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
    </section>
@endsection