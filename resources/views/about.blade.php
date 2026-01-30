@extends('layouts.app')

@section('content')
<main class="pt-90">
    <div class="mb-4 pb-4"></div>
    <section class="about-us container">
        <div class="mw-930">
            <h2 class="page-title">ABOUT FSHOP</h2>
        </div>
        <div class="about-us__content pb-5 mb-5">
            <p class="mb-5">
                <img loading="lazy" class="w-100 h-auto d-block" src="{{ asset('assets/images/about/about-1.jpg') }}" width="1410" height="550" alt="About Fshop">
            </p>
            <div class="mw-930">
                <h3 class="mb-4">OUR STORY</h3>
                <p class="fs-6 fw-medium mb-4">Fshop được xây dựng với một sứ mệnh đơn giản: mang thời trang chất lượng cao đến gần hơn với mọi người. Chúng tôi tin rằng phong cách không nên quá tốn kém, và mỗi cá nhân đều xứng đáng cảm thấy tự tin và thoải mái trong những gì mình mặc.</p>
                <p class="mb-4">Khởi đầu từ một cửa hàng nhỏ tại Hà Nội, chúng tôi đã phát triển thành một điểm đến thời trang trực tuyến hàng đầu, phục vụ khách hàng trên khắp cả nước. Đội ngũ của chúng tôi luôn đam mê tuyển chọn những xu hướng mới nhất và kiểm định chất lượng của từng sản phẩm chúng tôi bán.</p>
                <div class="row mb-3">
                    <div class="col-md-6">
                        <h5 class="mb-3">Our Mission</h5>
                        <p class="mb-3">Chúng tôi cung cấp nhiều phong cách đa dạng đáp ứng mọi sở thích và mọi dịp.</p>
                    </div>
                    <div class="col-md-6">
                        <h5 class="mb-3">Our Vision</h5>
                        <p class="mb-3">Trở thành nhà bán lẻ thời trang được tin cậy và yêu thích nhất tại Việt Nam, nổi tiếng với dịch vụ khách hàng xuất sắc và trải nghiệm mua sắm sáng tạo.</p>
                    </div>
                </div>
            </div>
            <div class="mw-930 d-lg-flex align-items-lg-center">
                <div class="image-wrapper col-lg-6">
                    <img class="h-auto" loading="lazy" src="{{ asset('assets/images/about/about-2.jpg') }}" width="250" height="350" alt="Our Team">
                </div>
                <div class="content-wrapper col-lg-6 px-lg-4">
                    <h5 class="mb-3">The Shop</h5>
                    <p>Chúng tôi làm việc không ngừng nghỉ để đảm bảo trải nghiệm mua sắm của bạn là liền mạch, từ việc duyệt bộ sưu tập đến việc nhận được gói hàng tại cửa nhà bạn.</p>
                </div>
            </div>
        </div>
    </section>
</main>
@endsection
