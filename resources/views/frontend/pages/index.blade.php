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
        <div class="banner">
            <img class="img-fluid" src="{{ asset('public/frontend/img/banner.png') }}" alt="">
        </div>
        <div class="container-fluid">
            <div class="row text-center store">
                <div class="col-12 col-sm-12 col-md-12 col-lg-12 col-xl-12">
                    <h2>BIỆT ĐÃI TẠI CỬA HÀNG</h2>
                </div>
                <div class="col-12 col-sm-12 col-md-6 col-lg-6 col-xl-6">
                    <img class="img-fluid" src="{{ asset('public/frontend/img/ch-1.jpg') }}" alt="">
                    <p>Chỉ 4 ngày để cảm nhận làn da trở nên khỏe mạnh, đầy sinh khí cùng Bichup! Tặng bạn cơ hội trải
                        nghiệm đủ cả 3 sản phẩm tinh túy của Bichup trong Mặt nạ Bichup Royal 3-step Mask và tinh chất
                        tuần hoàn First Care khi đăng ký thông tin và ghé thăm cửa hàng.
                    </p>
                </div>
                <div class="col-12 col-sm-12 col-md-6 col-lg-6 col-xl-6">
                    <img class="img-fluid" src="{{ asset('public/frontend/img/ch-2.jpg') }}" alt="">
                    <p>Phân tích da toàn diện 6 bước - xem đầy đủ những phản hồi của da không thể thấy bằng mắt thường
                        như độ đàn hồi, độ cân bằng dầu ẩm, đốm nâu ẩn, độ lão hóa da so với tuổi… và được tư vấn phương
                        pháp dưỡng da tối ưu nhất. Hoạt động phân tích da diễn ra vào mỗi thứ 7 và chủ nhật hàng tuần.
                    </p>
                </div>
            </div>
            <div class="row text-center">
                <div class="col-12 col-sm-12 col-md-4 col-lg-4 col-xl-4">
                    <img class="img-fluid" src="{{ asset('public/frontend/img/g-1.jpg') }}" alt="">
                    <h3>Khi mua <span>bộ Soon Hwan Special</span></h3>
                    <div class="gift">
                        <h4>Quà tặng</h4>
                        <img class="img-fluid" src="{{ asset('public/frontend/img/g-4.png') }}" alt="">
                    </div>
                    <p>Whoo GJY Royeal Anti-Aging 3-Step Sheet 27ml</p>
                </div>
                <div class="col-12 col-sm-12 col-md-4 col-lg-4 col-xl-4">
                    <img class="img-fluid" src="{{ asset('public/frontend/img/g-2.jpg') }}" alt="">
                    <h3>Khi mua <span>sản phẩm Bichup Self Generating</span></h3>
                    <div class="gift">
                        <h4>Quà tặng</h4>
                        <img class="img-fluid" src="{{ asset('public/frontend/img/g-5.png') }}" alt="">
                    </div>
                    <p>Whoo GJY Royeal Anti-Aging 3-Step Sheet 27ml và <br/>Whoo Gongjinhyang Mi Lipstick 4 colors 6.4g
                    </p>
                </div>
                <div class="col-12 col-sm-12 col-md-4 col-lg-4 col-xl-4">
                    <img class="img-fluid" src="{{ asset('public/frontend/img/g-3.jpg') }}" alt="">
                    <h3>Khi mua <span>sản phẩm Bichup Ya Yoon Cream bất kỳ</span></h3>
                    <div class="gift">
                        <h4>Quà tặng</h4>
                        <img class="img-fluid" src="{{ asset('public/frontend/img/g-5.png') }}" alt="">
                    </div>
                    <p>Whoo GJY Royeal Anti-Aging 3-Step Sheet 27ml và <br/>Whoo Gongjinhyang Mi Lipstick 4 colors 6.4g
                    </p>
                </div>
            </div>
            <div class="row text-center register">
                <div class="col-12 col-sm-12 col-md-12 col-lg-12 col-xl-12">
                    <h2>ĐĂNG KÝ THAM GIA</h2>
                    <form method="post" action="">
                        <div class="form-group">
                            <input class="form-control {{ $errors->has('name') ? 'is-invalid' : '' }}" type="text"
                                   name="name" value="{{ old('name') }}" placeholder="Họ và tên:"/>
                        </div>
                        <div class="form-group">
                            <input class="form-control datepicker {{ $errors->has('dob') ? 'is-invalid' : '' }}"
                                   type="text"
                                   name="dob" value="{{ old('dob') }}" placeholder="Năm sinh:"/>
                        </div>
                        <div class="form-group">
                            <input class="form-control {{ $errors->has('phone') ? 'is-invalid' : '' }}" type="text"
                                   name="phone" value="{{ old('phone') }}" placeholder="Số điện thoại:"/>
                        </div>
                        <div class="form-group">
                            <input class="form-control {{ $errors->has('email') ? 'is-invalid' : '' }}" type="text"
                                   name="email" value="{{ old('email') }}" placeholder="Email:"/>
                        </div>
                        <input type="hidden" name="code"/>
                        <div class="col-lg-12">
                            <button class="btn btn-primary" type="submit">Đăng kí</button>
                        </div>
                        {!! csrf_field() !!}
                    </form>
                    <div class="rule">
                        <h4>THỂ LỆ</h4>
                        <p>
                            Sau khi điền thông tin đăng ký, bạn sẽ nhận được mã code từ The history of Whoo.<br/>
                            Dùng mã số này đến tham gia chương trình tại cửa hàng bạn sẽ nhận bộ mẫu thử với 3 bước chăm
                            sóc da của <br/>
                            Bichup cũng như miễn phí phân tích da toàn diện 6 bước bằng công nghệ nhập khẩu Hàn Quốc
                            cùng rất nhiều <br/>ưu đãi khác.<br/>
                            (Vui lòng xem danh sách hệ thống cửa hàng áp dụng chương trình tại đây.)
                        </p>
                    </div>
                </div>
            </div>
            <div class="row text-center collection">
                <div class="col-12 col-sm-12 col-md-12 col-lg-12 col-xl-12">
                    <h2>3 BƯỚC TRIỆU HỒI LÀN DA NGUYÊN BẢN</h2>
                    <h3>BỘ SƯU TẬP ĐỂ HOÀN THIỆN DUNG NHAN VƯƠNG HẬU</h3>
                </div>
                <div class="col-12 col-sm-12 col-md-4 col-lg-4 col-xl-4">
                    <img class="img-fluid" src="{{ asset('public/frontend/img/col-1.jpg') }}" alt="">
                    <h4>TINH CHẤT TUẦN HOÀN</h4>
                    <h5>FIRST CARE MOITURE ANTI AGING ECENSE</h5>
                    <p>Giúp thanh lọc, thải độc, hạ nhiệt và giảm sưng hiệu quả cho làn da. Với hai bài thuốc Đông y
                        tiêu biểu là Cống thần bí đơn và Giải uất hoàn, làn da được tăng cường tuần hoàn sinh khí, bổ
                        sung ẩm dồi dào ngay sau bước rửa mặt và tối ưu hóa hiệu quả dưỡng cho các bước sau.</p>
                </div>
                <div class="col-12 col-sm-12 col-md-4 col-lg-4 col-xl-4">
                    <img class="img-fluid" src="{{ asset('public/frontend/img/col-2.jpg') }}" alt="">
                    <h4>TINH CHẤT TỰ SINH</h4>
                    <h5>SELF-GENERATING ANTI-AGING ESSENCE</h5>
                    <p>Là sản phẩm ngăn ngừa lão hóa tiêu biểu của The history of Whoo. Với hàm lượng Siêu tử hà bí đơn
                        đậm đặc cùng đông trùng hạ hảo, sức đề kháng của làn da được cải thiện, tạo tiền đề cho làn da
                        khỏe, có khả năng tự phục hồi và tái sinh mạnh mẽ.</p>
                </div>
                <div class="col-12 col-sm-12 col-md-4 col-lg-4 col-xl-4">
                    <img class="img-fluid" src="{{ asset('public/frontend/img/col-3.jpg') }}" alt="">
                    <h4>KEM DƯỠNG TỰ NHUẬN</h4>
                    <h5>JA YOON CREAM</h5>
                    <p>Ngăn ngừa lão hóa vượt trội, cho làn da săn chắc, mịn màng và tỏa ánh hồng nhuận. Chất kem thẩm
                        thấu nhanh chóng vào từng nếp da, cung cấp dưỡng chất tối đa và cho da ẩm mượt ngay từ lần sử
                        dụng đầu tiên.</p>
                </div>
                <div class="col-6 col-sm-6 col-md-6 col-lg-6 col-xl-6">
                    <img class="img-fluid" src="{{ asset('public/frontend/img/col-4.png') }}" alt="">
                </div>
                <div class="col-6 col-sm-6 col-md-6 col-lg-6 col-xl-6">
                    <h4>MẶT NẠ 3 BƯỚC DƯỠNG</h4>
                    <h5>ROYAL ANTI-AGING 3-STEP MASK</h5>
                    <p>Mang lại sự trải nghiệm trọn vẹn cả 3 sản phẩm tinh túy của Bichup: tinh chất tuần hoàn thấm đẫm
                        trong chiếc mặt nạ, cùng tinh chất tự sinh và kem dưỡng tự nhuận.</p>
                </div>
            </div>
            <div class="row text-center collection">
                <div class="col-6 col-sm-6 col-md-6 col-lg-6 col-xl-6">
                    <h3>Bichup First Care Moisture
                        Anti-Aging Essence Special
                        Edition</h3>
                    <p>Được thiết kế theo kiểu dáng bình gốm sứ cung đình với với màu xanh-trắng làm chủ đạo, Bichup
                        First Care Moisture Anti-Aging phiên bản đặc biệt mang trên mình dáng vẻ của một tác phẩm nghệ
                        thuật thanh khiết, đầy tao nhã với những hoạt tiết trang trí vô cùng sống động</p>
                    <p>Hơn tất cả, ẩn chứa bên trong vẻ đẹp hoàn hảo bên ngoài chính là những giọt tinh chất Đông y
                        hoàng cung giúp đánh thức sức mạnh tuần hoàn, tự phục hồi cho làn da, đem lại cho bạn một làn da
                        sáng bừng sinh khí.</p>
                </div>
                <div class="col-6 col-sm-6 col-md-6 col-lg-6 col-xl-6">
                </div>
            </div>
            <div class="row text-center list-store">
                <div class="col-12 col-sm-12 col-md-12 col-lg-12 col-xl-12">
                    <h2>DANH SÁCH CỬA HÀNG</h2>
                </div>
                <div class="col-12 col-sm-12 col-md-4 col-lg-4 col-xl-4">
                    <img class="img-fluid" src="{{ asset('public/frontend/img/ic-list-store.png') }}" alt="">
                    <h3>Diamond Plaza</h3>
                    <h4>34 Lê Duẩn, Quận 1, TPHCM</h4>
                </div>
                <div class="col-12 col-sm-12 col-md-4 col-lg-4 col-xl-4">
                    <img class="img-fluid" src="{{ asset('public/frontend/img/ic-list-store.png') }}" alt="">
                    <h3>Takashimaya</h3>
                    <h4>92-94 Nam Kì Khởi Nghĩa, Quận 1, TPHCM</h4>
                </div>
                <div class="col-12 col-sm-12 col-md-4 col-lg-4 col-xl-4">
                    <img class="img-fluid" src="{{ asset('public/frontend/img/ic-list-store.png') }}" alt="">
                    <h3>LOTTE Center</h3>
                    <h4>54 Liễu Giai, Quận Ba Đình, Hà Nội</h4>
                </div>
            </div>
        </div>
    </div>
    @if (session('message'))
        <div class="alert alert-success">
            {{ session('message') }}
        </div>
    @endif
    @if ($errors->any())
        <div class="popup">
            <div>
                <img class="btn-close" src="{!! asset('public/frontend/img/ic-close.png') !!}" alt="" title=""/>
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