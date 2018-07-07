@extends ('frontend.master')
@section('meta')
    <title>{{ $config->name_site }}</title>
    <meta name="keywords" content="{{ $config->title }}">
    <meta name="description" content="{{ $config->description }}">
    <meta property="og:title" content="{{ $config->title }}"/>
    <meta property="og:url" content="{{ Request::url() }}"/>
    <link rel="canonical" href="{{ Request::url() }}"/>
@endsection
@section ('content')
    <div class="home-page">
        <form method="post" action="">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12 form-group">
                        <h1>Mã số khách hàng</h1>
                        <input class="form-control {{ $errors->has('name') ? 'is-invalid' : '' }}" type="text" name="code" value="@if (session('code')) {{ session('code') }} @endif" placeholder="Code"/>
                    </div>
                    <div class="col-lg-12">
                        <button class="btn btn-primary" type="submit">Kiểm tra</button>
                    </div>
                </div>
            </div>
            {!! csrf_field() !!}
        </form>
    </div>
    @if (session('user'))
        <div class="container">
            <div class="row">
                <div class="col-lg-12 form-group">
                    {{ session('user')->name }}
                    {{ session('user')->email }}
                    {{ session('user')->phone }}
                    {{ session('user')->code }}
                </div>
            </div>
        </div>
    @endif
    @if (session('message'))
        <div class="alert alert-success">
            {{ session('message') }}
        </div>
    @endif
    @if ($errors->any())
        <div class="popup">
            <div>
                <img class="btn-close" src="{!! asset('public/frontend/img/ic-close.png') !!}" alt="" title="" />
                <div class="dt wh100 text-center">
                    <div class="wh100">
                        @foreach($errors->all(':message') as $error)
                            <div class="text-danger">{{ $error }}</div>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
        <script>
            $(document).on('click', '.btn-close', function () {
                $('.popup').hide();
            });
        </script>
    @endif
@endsection