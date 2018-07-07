@extends ('frontend.master')
@section('meta')
    <title>Tìm kiếm</title>
    <meta name="keywords" content="Tìm kiếm">
    <meta name="description" content="Tìm kiếm">
    <meta property="og:title" content="Tìm kiếm"/>
    <meta property="og:url" content="{{ Request::url() }}"/>
    <link rel="canonical" href="{{ Request::url() }}" />
@endsection
@section ('content')
    <section class="news-page">
        <div class="container">
            <div class="row">
                <div class="col-12 col-sm-12 col-md-12 col-lg-12 col-xl-12">
                    <h2 class="text-center">
                        <div class="sao"><span>Tìm kiếm</span></div>
                    </h2>
                </div>
            </div>
            @if (count($data) > 0)
                @foreach($data as $item)
                    <div class="row text-center">
                        <div class="col-12 col-sm-12 col-md-6 col-lg-6 col-xl-6">
                            <a href="{{ route('new.detail', ['slug'=>$item->slug]) }}" title="{{ $item->title }}">
                                <img class="img-fluid" src="{{ $item->image }}" alt="{{ $item->title }}" title="{{ $item->title }}"/>
                            </a>
                        </div>
                        <div class="col-12 col-sm-12 col-md-6 col-lg-6 col-xl-6">
                            <a class="tt-news" href="{{ route('new.detail', ['slug'=>$item->slug]) }}" title="{{ $item->title }}">
                                <h3>{{ $item->title }}</h3>
                            </a>
                            <span>{{ $item->created_at }}</span>
                            <div class="text-justify">
                                {!! $item->intro !!} <a href="{{ route('new.detail', ['slug'=>$item->slug]) }}" title="{{ $item->title }}">Xem thêm</a>
                            </div>
                        </div>
                    </div>
                @endforeach
                <div class="center">
                    {{ $data->links('vendor.pagination.bootstrap-4') }}
                </div>
            @else
                <div style="margin-bottom: 30px;" class="row">
                    <div class="col-12">
                        <h2>Không tìm thấy dữ liệu</h2>
                    </div>
                </div>
            @endif
        </div>
    </section>
@endsection