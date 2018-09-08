<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Document</title>
    <link rel="stylesheet" href="{{asset('css/bootstrap.css')}}">
    <link rel="stylesheet" href="{{asset('css/index.css')}}">
    <link rel="stylesheet" href="{{asset('css/navbar_desktop.css')}}">
    <link rel="stylesheet" href="{{asset('css/post_desktop.css')}}">
    <link rel="stylesheet" href="{{asset('css/back_to_top.css')}}">
    <link rel="stylesheet" href="{{asset('css/article.css')}}">
    <link href="https://fonts.googleapis.com/css?family=Oswald" rel="stylesheet">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css" integrity="sha384-mzrmE5qonljUremFsqc01SB46JvROS7bZs3IO2EmfFsd15uHvIt+Y8vEf7N7fWAU" crossorigin="anonymous">
</head>

<body>
    <div class="content">
        <div class="menu">
            <div class="container">
                <div class="site-branding">
                    <div class="col col-md-4 logo">
                        <div class="row">
                            <a href="{{url('/index')}}"><h3>HoanTran</h3></a>
                        </div>
                    </div>
                    <div class="col col-md-8 site-header">
                        <ul>
                            <li>Posts</li>
                            <li>Notes</li>
                            <li>About Me</li>
                        </ul>
                    </div>
                </div>
                <div class="site-navigation">
                    <div class="col col-8 menu_post">
                        <ul>
                            <li>Css Tricks</li>
                            <li>Ide Tricks</li>
                            <li>Jquery</li>
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
        </div>
        <div class="header_mobile">
            <div class="container">
                <div class="nav_bar">
                    <div class="logo_mobile">
                        <a href="{{url('/index')}}"><h4>HoanTran</h4></a>
                    </div>
                    <div class="iconMenu">
                        <i class="fa fa-bars nut"></i>
                    </div>
                </div>
            </div>
        </div>
        <div class="phanLayout"></div>
        @yield('main')
        <div class="footer">
            <p>@2018 - Hoantran Blog. All Right Reserved</p>
        </div>
    </div>
    <div class="content-menu-mobile menutrai">
        <i class="fa fa-times nut"></i>
        <ul>
            <li class="list_item">Posts</li>
            <li class="list_item">Notes</li>
            <li class="list_item">About Me</li>
            <li class="list_item sep">Css Tricks</li>
            <li class="list_item">Ide Tricks</li>
            <li class="list_item">Jquery</li>
        </ul>
    </div>
    <a id="back-to-top" href="#"><i class="fa fa-angle-up"></i></a>
    <script src="{{asset('js/jquery-3.1.1.min.js')}}"></script>
    <script src="{{asset('js/index.js')}}"></script>
    <script src="{{asset('js/bootstrap.min.js')}}"></script>
</body>

</html>