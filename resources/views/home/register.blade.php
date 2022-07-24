@extends('layouts.master')
@section('content')
<div class="container" style="padding-left: 0px;padding-right: 0px; font-family: cursive;">
	<div class="gap"></div>
	<div class="row">
		<div class="col-md-8 col-md-offset-2">
			<div class="panel panel-primary" style="border-color: pink">
				<div class="panel-heading" style="background-color: #FF6347; border-color: pink">Đăng kí thành viên mới</div>
				<div class="panel-body">
					@if ($errors->any())
					    <div class="alert alert-danger">
					        <ul>
					            @foreach ($errors->all() as $error)
					                <li>{{ $error }}</li>
					            @endforeach
					        </ul>
					    </div>
					@endif
					@if(session('success'))
		                        <div class="alert bg-success">
									<button type="button" class="close" data-dismiss="alert"><span>×</span><span class="sr-only">Close</span></button>
									<span class="text-semibold">Done!</span>  {{session('success')}}
								</div>
		            @endif
					<form class="form-horizontal" method="POST" action="{{ route('user.register') }}" >
						<input type="hidden" name="_token" value="{{ csrf_token() }}">
						<div class="form-group">
							<label class="control-label col-sm-3" for="email" style="color: #B22222">Tài khoản:</label>
							<div class="col-sm-9">
								<input type="text" class="form-control" name="txtuser" placeholder="Tài khoản đăng nhập hệ thống">
							</div>
						</div>
						<div class="form-group">
							<label class="control-label col-sm-3" for="pwd" style="color: #B22222">Mật khẩu:</label>
							<div class="col-sm-9"> 
								<input type="password" class="form-control" name="txtpass" placeholder="Nhập mật khẩu">
							</div>
						</div>
						<div class="form-group">
							<label class="control-label col-sm-3" for="pwd" style="color: #B22222">Nhập lại mật khẩu:</label>
							<div class="col-sm-9"> 
								<input type="password" class="form-control" name="txt-repass" placeholder="Nhập lại mật khẩu">
							</div>
						</div>
						<div class="form-group">
							<label class="control-label col-sm-3" for="pwd" style="color: #B22222">Email:</label>
							<div class="col-sm-9"> 
								<input type="email" class="form-control" name="txtmail" placeholder="Email của bạn">
							</div>
						</div>
						<div class="form-group">
							<label class="control-label col-sm-3" for="pwd" style="color: #B22222">Tên hiển thị:</label>
							<div class="col-sm-9"> 
								<input type="text" class="form-control" name="txtname" placeholder="Tên hiển thị">
							</div>
						</div>
						<div class="form-group"> 
							<div class="col-sm-offset-6 col-sm-9">
								<button type="submit" class="btn btn-primary" style="background-color: #FF6347; border-color: pink">Đăng kí</button>
							</div>
						</div>
					</form>
				</div>
			</div>
		</div>
	</div>

</div>
@endsection