<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Document</title>
    <link rel="stylesheet" href="{{asset('css/bootstrap.css')}}">
    <link rel="stylesheet" href="{{asset('css/index.css')}}">
    <link rel="stylesheet" href="{{asset('css/navbar_desktop.css')}}">
    <link rel="stylesheet" href="{{asset('css/post_desktop.css')}}">
    <link rel="stylesheet" href="{{asset('css/post_mobile.css')}}">
    <link rel="stylesheet" href="{{asset('css/back_to_top.css')}}">
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Oswald" rel="stylesheet">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet">
</head>

<body>
    <div class="content">
        <div class="Menu" style="background-image: url('img/background3.jpg');">
            <div class="header_desktop">
                <div class="nav_bar">
                    <div class="logo">
                        <h2><a href="{{url('/index')}}">HoanTran</a></h2>                       
                    </div>
                    <div class="menuTitle">
                        <ul>
                            <li>Trang Chủ</li>
                            <li>Css Effect</li>
                            <li>Blog</li>
                            <li>About Me</li>
                        </ul>
                    </div>
                    <div class="social">
                        <div class="box-container">
                            <div class="iconSub"><i class="fa fa-reply"></i></div>
                            <div class="social-thump">
                                <div class="icon twi"><i class="fa fa-twitter"></i></div>
                                <div class="icon fb"><i class="fa fa-facebook"></i></div>
                                <div class="icon gg"><i class="fa fa-google-plus"></i></div>
                                <div class="icon ig"><i class="fa fa-instagram"></i></div>
                            </div>
                        </div>
                    </div>
                    <!-- <div class="menu1">
                        <input class="burger-check" id="burger-check" type="checkbox">
                        <label for="burger-check" class="burger"></label>
                    </div> -->
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
        <div class="phanLayout"></div>
        <div class="noidung">
            <!-- Post desktop -->
            @foreach ($articles as $a)
                <div class="post">
                    <div class="img_post">
                        <img src="https://cdn-images-1.medium.com/max/1600/1*IJlgGsOIpq0lKTdf6lZATA.png" alt="">
                    </div>
                    <div class="content_element">
                        <a href="{{url('/article/'.$a -> id)}}"><h3>{{$a->title}}</h3></a>
                        <p class="limiting_post">{!! $a->quote_content !!}</p>
                        <div class="admin_post">
                            <div class="img_admin">
                                <img src="https://cdn.wccftech.com/wp-content/uploads/2018/04/spidey_selfie.jpg" alt="">
                            </div>
                            <div class="information">
                                <div class="name_admin">
                                    <p>Carl Tashian</p>
                                </div>
                                <div class="create_at">
                                    <p>Apr 22, 2018</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            @endforeach
            <!-- end Post desktop -->
            <!-- post Mobile -->
            @foreach ($articles as $a)
            <div class="post_mobile">
                <div class="img_post_mobile">
                    <img src="https://cdn-images-1.medium.com/max/1600/1*IJlgGsOIpq0lKTdf6lZATA.png" alt="">
                </div>
                <div class="content_element_mobile">
                    <a href="{{url('/article/'.$a -> id)}}"><h3>{{$a->title}}</h3></a>
                    <p>{!! $a->quote_content !!}</p>
                    <div class="admin_post_mobile">
                        <div class="img_admin_mobile">
                            <img src="https://cdn.wccftech.com/wp-content/uploads/2018/04/spidey_selfie.jpg" alt="">
                        </div>
                        <div class="information_mobile">
                            <div class="name_admin_mobile">
                                <p>Carl Tashian</p>
                            </div>
                            <div class="create_at_mobile">
                                <p>Apr 22, 2018</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>           
            @endforeach
            <!-- end Post mobile -->
            
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
            <li class="list_item sep"><i class="fa fa-user"></i>About Me</li>
            <li class="list_item ">
                
            </li>
        </ul>
    </div>
    <a id="back-to-top" href="#"><i class="fa fa-angle-up"></i></a>
    <script src="{{asset('js/jquery-3.1.1.min.js')}}"></script>
    <script src="{{asset('js/index.js')}}"></script>
    <script src="{{asset('js/bootstrap.min.js')}}"></script>
</body>

</html>