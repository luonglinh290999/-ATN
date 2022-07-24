<!DOCTYPE html>
<html lang="en">

<head>
	<title>Hỗ trợ tìm phòng trọ uy tín tại Hà Nội</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="csrf-token" content="{{ csrf_token() }}">
	<base href="{{asset('')}}">
	<link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
	<link rel="stylesheet" href="assets/style.css">
	<link rel="stylesheet" href="assets/awesome/css/fontawesome-all.css">
	<link rel="stylesheet" href="assets/toast/toastr.min.css">
	<script src="assets/jquery.min.js"></script>
	<script src="assets/bootstrap/js/bootstrap.min.js"></script>
	<script src="assets/myjs.js"></script>
	<link rel="stylesheet" href="assets/selectize.default.css" data-theme="default">
	<script src="assets/js/fileinput/fileinput.js" type="text/javascript"></script>
	<script src="assets/js/fileinput/vi.js" type="text/javascript"></script>
	<link rel="stylesheet" href="assets/fileinput.css">
	<script src="assets/pgwslider/pgwslider.min.js" type="text/javascript"></script>
	<link rel="stylesheet" href="assets/pgwslider/pgwslider.min.css">
	<!-- sortable.min.js is only needed if you wish to sort / rearrange files in initial preview. 
    This must be loaded before fileinput.min.js -->
	<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-fileinput/4.4.8/js/plugins/sortable.min.js" type="text/javascript"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-fileinput/4.4.8/js/plugins/purify.min.js" type="text/javascript"></script>
	<link rel="stylesheet" href="assets/bootstrap/bootstrap-select.min.css">

	<!-- Latest compiled and minified JavaScript -->
	<script src="assets/bootstrap/bootstrap-select.min.js"></script>
</head>

<body>
	<div class="navbar" style="background-color: #FA8072; font-family: cursive;">
	  <a href="/"><b>TRANG CHỦ</b></a>
	  @foreach($categories as $category)
	  <a href="category/{{$category->id}}"><b>{{ $category->name }}</b></a>
		@endforeach
		@if(Auth::user())
		<a href="user/dangtin"><i class="fas fa-edit"></i><b>ĐĂNG TIN</b></a>
		<a href="user/profile"><b>THÔNG TIN CHI TIẾT</b></a>
		<a href="user/logout"><b>ĐĂNG XUẤT</b></a>
		@if(Auth::user()->right==1)
		<a href="/admin"><b>ĐẾN TRANG QUẢN TRỊ</b></a>
		@endif
		@else
		<a href="user/dangtin"><i class="fas fa-edit"></i><b>ĐĂNG TIN</b></a>
		<a href="user/login"><i class="fas fa-user-circle"><b></i>ĐĂNG NHẬP</b></a>
		<a href="user/register"><i class="fas fa-sign-in-alt"><b></i>ĐĂNG KÍ</b></a>
		@endif
	</div>
	@yield('content')
	<div class="gap"></div>
	<footer>
		<div class="container" style="font-family: cursive;">
			<div class="row">
				<div class="col-md-12">
					<div class="row">
					<div class="logo-footer">
						<div style="padding-top: 20px; width: 50%; float: left; padding-right:75px ">
							<b>
							<p class="tit">THUÊ PHÒNG TRỌ</p>
							<p style="padding-top: 10px">Trang web hỗ trợ tìm nhà trọ cho sinh viên nhanh chóng, hiệu quả, không mất nhiều thời gian đi lại</p>
							<p>Địa điểm: Quanh khu vực thành phố Hà Nội</p>
							</b>
						</div>
						<div style="padding: 20px; width: 50%; float: left">
							<b><p class="tit">THÔNG TIN LIÊN HỆ</p>
							<p style="padding-top: 10px">Người thực hiện: Lương Thị Thùy Linh - K62 - Đại học Bách Khoa Hà Nội</p>
							<p>Số điện thoại liên hệ: 0392280128</p>
							<p>Email: luonglinh29091999@gmail.com</p>
						</b>
						</div>
					</div>
				</div>
				<div class="footer">
					<b>
					<p>Mọi thắc mắc xin vui lòng liên hệ để được giải đáp kịp thời</p>
					<p>----------------------------------------------------------------------------------</p>
					</b>
				</div>
				</div>
			</div>
		</div>

	</footer>

	<script type="text/javascript" src="assets/toast/toastr.min.js"></script>
</body>

</html>