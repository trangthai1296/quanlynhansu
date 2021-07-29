@extends('layouts.master')
@section('content')
<div class="page-container">
    <header class="header-desktop">
        <div class="section__content section__content--p30">
            <div class="container-fluid">
                <div class="header-wrap" style='display: flex;justify-content: space-between;'>
                    <div>
                        <form class="form-header" action="" method="get">
                            <input class="au-input au-input--xl" type="text" name="search"
                                placeholder="Search for datas &amp; reports..." />
                            <button class="au-btn--submit" type="submit">
                                <i class="zmdi zmdi-search"></i>
                            </button>
                        </form>
                    </div>
                    <div>
                        <div class="header-button">
                            <div class="account-wrap">
                                <div class="account-item clearfix js-item-menu">
                                    <div class="content">
                                        <a class="js-acc-btn" href="#">{{Auth::user()->name}}</a>
                                    </div>
                                    <div class="account-dropdown js-dropdown">
                                        <div class="info clearfix">
                                            <h5 class="name">
                                                <a href="#">{{Auth::user()->name}}</a>
                                            </h5>
                                            <span class="email">{{Auth::user()->email}}</span>
                                        </div>
                                        <div class="account-dropdown__body">
                                            <div class="account-dropdown__item">
                                                <a href="{{route('profile')}}">
                                                    <i class="zmdi zmdi-account"></i>Profile</a>
                                            </div>
                                        </div>
                                        <div class="account-dropdown__item">
                                            <a href="{{route('changePassword')}}">
                                                <i class="zmdi zmdi-settings"></i>Change password</a>
                                        </div>
                                        <div class="account-dropdown__footer">
                                            <a href="{{route('logout')}}">
                                                <i class="zmdi zmdi-power"></i>Logout</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </header>
    <div class="main-content">
        <div class="section__content section__content--p30">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="card">
                            <div class="card-header">
                                <strong>Thêm mới</strong>
                            </div>
                            <div class="card-body card-block">
                                <form action="{{route('hopDongUpdate',['id'=>$hopdong->id])}}" method="post">
                                    {{@csrf_field()}}
                                    <div class="form-group">
                                        <label for="manhanvien" class=" form-control-label">Mã Nhân Viên</label>
                                        <input type="text" class="form-control" name="manhanvien" value="{{$hopdong->manhanvien}}">
                                    </div>
                                    <div class="form-group">
                                        <label for="luongcoban" class=" form-control-label">Lương Cơ Bản</label>
                                        <input type="text" class="form-control" name="luongcoban" value="{{$hopdong->luongcoban}}">
                                    </div>
                                    <div class="form-group">
                                        <label for="luongtangca" class=" form-control-label">Lương Tăng Ca</label>
                                        <input type="text" class="form-control" name="luongtangca" value="{{$hopdong->luongtangca}}">
                                    </div>
                                    <div class="form-group">
                                        <label for="phucap" class=" form-control-label">Phụ Cấp</label>
                                        <input type="text" class="form-control" name="phucap" value="{{$hopdong->phucap}}">
                                    </div>
                                    <div class="form-group">
                                        <label for="bhxh" class=" form-control-label">BHXH</label>
                                        <input type="text" class="form-control" name="bhxh" value="{{$hopdong->bhxh}}">
                                    </div>
                                    <div class="form-group">
                                        <label for="ngaybatdau" class=" form-control-label">Ngày BD</label>
                                        <input type="date" class="form-control" name="ngaybatdau" value="{{$hopdong->ngaybatdau}}">
                                    </div>
                                    <div class="form-group">
                                        <label for="ngayketthuc" class=" form-control-label">Ngày KT</label>
                                        <input type="date" class="form-control" name="ngayketthuc" value="{{$hopdong->ngayketthuc}}">
                                    </div>
                                
                                    <div class="card-footer">
                                        <button type="submit" name="save" class="btn btn-primary btn-sm"
                                            style="margin-left:385px;">
                                            <i class="fa fa-dot-circle-o"></i> Submit
                                        </button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    @endsection