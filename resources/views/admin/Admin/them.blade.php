@extends('admin.layout.master')
@section('admin_content')
<meta name="csrf-token" content="{{ csrf_token() }}">
<style>
  label.error {
        display: inline-block;
        color:red;
        width: 200px;
    }

</style>
<div class="row">
  <div class="col-lg-12">

      <section class="panel">
          <header class="panel-heading">
              Thêm Admin
          </header>
          <div class="panel-body">
            <div class="form" >
            <form  class="cmxform form-horizontal" enctype="multipart/form-data" id="formDemo1" method="post" action="{{route('Admin_XLThem')}}" novalidate="novalidate">
            @csrf
            <div class="form-group ">
                      <label for="firstname" class="control-label col-lg-3">Tài khoản</label>
                      <div class="col-lg-6">
                          <input class=" form-control" id="ad_username"  name="ad_username" type="text">

                        @if($errors->has('ad_username'))
                        <div style="color:red">{{ $errors->first('ad_username')}}</div>
                        @endif
                      </div>
                    </div>
             <div class="form-group ">
                      <label for="firstname" class="control-label col-lg-3">Mật khẩu</label>
                      <div class="col-lg-6">
                          <input class=" form-control" id="ad_password"  name="ad_password" type="password">

                        @if($errors->has('ad_password'))
                        <div style="color:red">{{ $errors->first('ad_password')}}</div>
                        @endif
                      </div>
                    </div>
                    <div class="form-group">
                          <div class="col-lg-offset-3 col-lg-6">
                              <button class="btn btn-primary" type="submit">Lưu</button>
                          <a href="{{route('Admin_DS')}}"><button class="btn btn-default" type="button">Trở về</button></a>
                          </div>
                      </div>
                </form>
        </section>
@endsection