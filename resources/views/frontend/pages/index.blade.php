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
                    <div class="col-lg-6 form-group">
                        <input class="form-control {{ $errors->has('name') ? 'is-invalid' : '' }}" type="text" name="name" value="{{ old('name') }}" placeholder="Họ và tên:"/>
                    </div>
                    <div class="col-lg-6 form-group">
                        <input class="form-control datepicker {{ $errors->has('dob') ? 'is-invalid' : '' }}" type="text" name="dob" value="{{ old('dob') }}" placeholder="Năm sinh:"/>
                    </div>
                    <div class="col-lg-6 form-group">
                        <input class="form-control {{ $errors->has('phone') ? 'is-invalid' : '' }}" type="text" name="phone" value="{{ old('phone') }}" placeholder="Số điện thoại:"/>
                    </div>
                    <div class="col-lg-6 form-group">
                        <input class="form-control {{ $errors->has('email') ? 'is-invalid' : '' }}" type="text" name="email" value="{{ old('email') }}" placeholder="Email:"/>
                    </div>
                    <input type="hidden" name="code" />
                    <div class="col-lg-12">
                        <button class="btn btn-primary" type="submit">Đăng kí</button>
                    </div>
                </div>
            </div>
            {!! csrf_field() !!}
        </form>
    </div>
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