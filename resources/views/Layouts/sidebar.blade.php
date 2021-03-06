<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="au theme template">
    <meta name="author" content="Hau Nguyen">
    <meta name="keywords" content="au theme template">

    <title>Dashboard</title>
    <base href="{{asset('')}}">
    <link href="css/font-face.css" rel="stylesheet" media="all">
    <link href="vendor/font-awesome-4.7/css/font-awesome.min.css" rel="stylesheet" media="all">
    <link href="vendor/font-awesome-5/css/fontawesome-all.min.css" rel="stylesheet" media="all">
    <link href="vendor/mdi-font/css/material-design-iconic-font.min.css" rel="stylesheet" media="all">

    <link href="vendor/bootstrap-4.1/bootstrap.min.css" rel="stylesheet" media="all">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>

    <link href="vendor/animsition/animsition.min.css" rel="stylesheet" media="all">
    <link href="vendor/bootstrap-progressbar/bootstrap-progressbar-3.3.4.min.css" rel="stylesheet" media="all">
    <link href="vendor/wow/animate.css" rel="stylesheet" media="all">
    <link href="vendor/css-hamburgers/hamburgers.min.css" rel="stylesheet" media="all">
    <link href="vendor/slick/slick.css" rel="stylesheet" media="all">
    <link href="vendor/select2/select2.min.css" rel="stylesheet" media="all">
    <link href="vendor/perfect-scrollbar/perfect-scrollbar.css" rel="stylesheet" media="all">

    <link href="css/theme.css" rel="stylesheet" media="all">

</head>

<body class="animsition">
    <div class="page-wrapper">
        <aside class="menu-sidebar d-none d-lg-block">
            <div class="logo">
                <a href="{{route('index')}}">
                    <img src="images/icon/logo.png" alt=" Admin" />
                </a>
            </div>
            <div class="menu-sidebar__content js-scrollbar1">
                <nav class="navbar-sidebar">
                    <ul class="list-unstyled navbar__list">
                        <li class="has-sub">
                            <a class="js-arrow" href="#">
                                <i class="fas fa-desktop"></i>Qu???n l?? nh??n vi??n</a>
                            <ul class="list-unstyled navbar__sub-list js-sub-list">
                                <li>
                                    <a href="{{route('nhanVienIndex')}}">Nh??n vi??n</a>
                                </li>
                                <li>
                                    <a href="{{route('phongBanIndex')}}">Ph??ng ban</a>
                                </li>
                                <li>
                                    <a href="{{route('chucVuIndex')}}">Ch???c v???</a>
                                </li>
                                <li>
                                    <a href="{{route('hopDongIndex')}}">H???p ?????ng</a>
                                </li>
                            </ul>
                        </li>
                        <li class="has-sub">
                            <a class="js-arrow" href="#">
                                <i class="fas fa-desktop"></i>Ch???m c??ng v?? l????ng</a>
                            <ul class="list-unstyled navbar__sub-list js-sub-list">
                                <li>
                                    <a href="{{route('chamCongIndex')}}">B???ng ch???m c??ng</a>
                                </li>
                                <li>
                                    <a href="{{route('bangCongIndex')}}">B???ng c??ng</a>
                                </li>
                                <li>
                                    <a href="{{route('tangCaIndex')}}">T??ng ca</a>
                                </li>
                                <li>
                                    <a href="{{route('bangLuongIndex')}}">B???ng l????ng</a>
                                </li>
                            </ul>
                        </li>
                        <li class="has-sub">
                            <a class="js-arrow" href="#">
                                <i class="fas fa-desktop"></i>Qu???n l?? tuy???n d???ng</a>
                            <ul class="list-unstyled navbar__sub-list js-sub-list">
                                <li>
                                    <a href="{{route('dotTuyenDungIndex')}}">?????t tuy???n d???ng</a>
                                </li>
                                <li>
                                    <a href="{{route('dotPhongVanIndex')}}">?????t ph???ng v???n</a>
                                </li>
                            </ul>
                        </li>
                        <li class="has-sub">
                            <a class="js-arrow" href="#">
                                <i class="fas fa-desktop"></i>Th???ng k?? b??o c??o</a>
                            <ul class="list-unstyled navbar__sub-list js-sub-list">
                                <li>
                                    <a href="{{route('khenThuongIndex')}}">Khen th?????ng</a>
                                </li>
                                <li>
                                    <a href="{{route('kyLuatIndex')}}">K??? lu???t</a>
                                </li>
                                <li>
                                    <a href="{{route('chiLuongIndex')}}">Chi l????ng</a>
                                </li>
                                <li>
                                    <a href="{{route('chiTietTuyenDungIndex')}}">K???t qu??? tuy???n d???ng</a>
                                </li>
                            </ul>
                        </li>
                        <li class="has-sub">
                            <a class="js-arrow" href="#">
                                <i class="fas fa-desktop"></i>Qu???n l?? t??i kho???n</a>
                            <ul class="list-unstyled navbar__sub-list js-sub-list">
                                <li>
                                    <a href="{{route('userIndex')}}">Ng?????i d??ng</a>
                                </li>
                                <li>
                                    <a href="{{route('roleIndex')}}">Quy???n truy c???p</a>
                                </li>
                            </ul>
                        </li>
                    </ul>
                </nav>
            </div>
        </aside>