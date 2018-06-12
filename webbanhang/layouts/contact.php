

<section class="main-content col-lg-9 col-md-9 col-sm-9 col-lg-push-3 col-md-push-3 col-sm-push-3">
<div class="box" id="contact">
    <h1>Liên hệ</h1>
    <p class="lead">Bạn có băn khoăn về điều gì? Bạn có đánh giá như thế nào về sản phẩm của chúng tôi?</p>
    <p>Xin vui lòng liên hệ với <strong><em>Homeshop</em></strong>, dịch vụ chăm sóc khách hàng của chúng tôi luôn sẵn lòng phục vụ quý khách 24.7</p>
    <hr>
    <div class="row">
        <div class="col-sm-4">
            <h3><i class="fa fa-map-marker"></i> Địa chỉ</h3>
            <p>
                <strong>HomeShop</strong>
                <br>Tây Thạnh
                <br>Tân Phú
                <br>Ho Chi Minh City
                <br>
                <strong>Việt Nam</strong>
            </p>
        </div>
        <!-- /.col-sm-4 -->
        <div class="col-sm-4">
            <h3><i class="fa fa-phone"></i> Đường dây nóng </h3>
            <p class="text-muted">Nếu có bất cứ thắc mắc gì, hãy gọi đến số điện thoại dưới dây để được tư vấn.</p>
            <p>
                <strong>+84 975 645 410</strong>
            </p>
        </div>
        <!-- /.col-sm-4 -->
        <div class="col-sm-4">
            <h3><i class="fa fa-envelope"></i> Hỗ trợ kỹ thuật</h3>
            <p class="text-muted">Vui lòng gửi email cho chúng tôi để nhận được những trợ giúp.</p>
            <ul>
                <li><strong><a href="mailto:">HomeShop@gmail.com</a></strong></li>
            </ul>
        </div>
        <!-- /.col-sm-4 -->
    </div>
    <!-- /.row -->
    <hr>
    <div id="map" style="width:100%;height:400px;">
    </div>
    <hr>
</div>
<div id="googleMap" style="width:100%;height:400px;"></div>
</section>
<script>
    function initialize() {
        var mapOptions = {
            zoom: 15,
            center: new google.maps.LatLng(10.808620, 106.631839),
            mapTypeId: google.maps.MapTypeId.ROAD,
            scrollwheel: true
        }
        var map = new google.maps.Map(document.getElementById('map'),
            mapOptions);

        var myLatLng = new google.maps.LatLng(10.808620, 106.631839);
        var marker = new google.maps.Marker({
            position: myLatLng,
            map: map
        });
    }
    google.maps.event.addDomListener(window, 'load', initialize);
</script>


<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAKEMYTIWtjGFFwCpQSIZvfZORQLrgLgZ4&callback=initialize"></script>
