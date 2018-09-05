<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <title>Document</title>
        <link rel="stylesheet" href="{{asset('css/bootstrap.css')}}">
        <link rel="stylesheet" href="{{asset('css/article.css')}}">
        <link rel="stylesheet" href="{{asset('css/navbar_desktop.css')}}">
        <link rel="stylesheet" href="{{asset('css/back_to_top.css')}}">
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css" integrity="sha384-mzrmE5qonljUremFsqc01SB46JvROS7bZs3IO2EmfFsd15uHvIt+Y8vEf7N7fWAU" crossorigin="anonymous">
        <link href="https://fonts.googleapis.com/css?family=Oswald" rel="stylesheet">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet">
        @yield('style')
    </head>
    <body>
        <div class="content">
            <div class="menu">
                <div class="container">
                    <div class="site-branding">
                        <div class="col col-md-4 logo">
                            <div class="row">
                                <h3><a href="{{url('/index')}}">HoanTran</a></h3>
                            </div>
                        </div>
                        <div class="col col-md-8 site-header">
                            <ul>
                                <li>Posts</li>
                                <li>Posts</li>
                                <li>Posts</li>
                                <li>Posts</li>
                            </ul>
                        </div>
                    </div>
                    <div class="site-navigation">
                        <div class="col col-8 menu_post">
                            <ul>
                                <li>Posts</li>
                                <li>Posts</li>
                                <li>Posts</li>
                                <li>Posts</li>
                            </ul>
                        </div>
                        <div class="col col-md-4 form_search">
                            <div class="input-group mb-3 search_input">
                                <input type="text" class="form-control" placeholder="Tìm kiếm" aria-label="Recipient's username" aria-describedby="basic-addon2">
                                <div class="input-group-append">
                                    <span style="cursor: pointer;" class="input-group-text" id="basic-addon2"><i class="fab fa-searchengin" ></i></span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="header_mobile">
                    <div class="nav_bar">
                        <div class="logo">
                            <h2><a href="{{url('/index')}}">HoanTran</a></h2>
                        </div>
                        <div class="menuTitle">
                        </div>
                        <div class="menu1">
                            <i class="fa fa-bars nut"></i>
                        </div>
                    </div>
                </div>
            </div>
            <div class="content_post">
                @yield('content')
            </div>
            <div class="footer">
                <p>@2018 - Hoantran Blog. All Right Reserved</p>
            </div>
        </div>
        <div class="contentMenu menutrai">
            <i class="fa fa-times nut"></i>
            <ul>
                <li class="list_item"><i class="fa fa-home"></i>Trang Chủ</li>
                <li class="list_item"><i class="fa fa-cog"></i>Css Effect</li>
                <li class="list_item"><i class="fa fa-book"></i>Blog</li>
                <li class="list_item"><i class="fa fa-user"></i>About Me</li>
                <li class="list_item sep social_menu_mobile ">
                </li>
            </ul>
        </div>
        <a id="back-to-top" href="#"><i class="fa fa-angle-up"></i></a>
        @yield('script')
        <script src="{{asset('js/jquery-3.1.1.min.js')}}"></script>
        <script src="{{asset('js/index.js')}}"></script>
        <script src="{{asset('js/bootstrap.min.js')}}"></script>
    </body>
</html>