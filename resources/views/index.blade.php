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
    <link rel="stylesheet" href="{{asset('css/article.css')}}">
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css" rel="stylesheet">
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
                            <h3><a href="{{url('/index')}}">HoanTran</a></h3>
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
                            <li>Tricks ide</li>
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
                        <h4><a href="{{url('/index')}}">HoanTran</a></h4>
                    </div>
                    <div class="iconMenu">
                        <i class="fa fa-bars nut"></i>
                    </div>
                </div>
            </div>
        </div>
        <div class="phanLayout"></div>
        <div class="noidung">
            <!-- Post desktop -->
            <div class="container">
                <div class="row">
                    <div class="col-md-9 post_feed">
                        @foreach ($articles as $a)
                        <div class="post-feed-item">
                            <div class="img_admin_post">
                                <img src="https://www.atomix.com.au/media/2015/06/atomix_user31.png" alt="">
                            </div>
                            <div class="post-feed-item-info">
                                <div class="post-meta-inline">
                                    <div class="user-inline">
                                        <span>Hoan Tran</span>
                                    </div>
                                    <div class="post-meta">
                                        <span>about 3 hours ago</span>
                                    </div>
                                </div>
                                <div class="post-title-inline">
                                    <a href="{{url('/article/'.$a -> id)}}"><h4>{{$a->title}}</h4></a>
                                </div>
                                <div class="tags" style="margin-bottom: 5px">
                                  <button>Css</button>
                                  <button>Laravel</button>
                                  <button>Bootstrap</button>
                                </div>
                                <div class="justify-content-between">
                                    <div class="post_status">
                                        <ul style="margin: 0;">
                                          <li><i class="far fa-eye"></i> 566</li>
                                          <li><i class="fas fa-comments"></i> 23</li>
                                          <li><i class="fa fa-paperclip"></i> 2</li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                        @endforeach
                    </div>
                    <div class="col-md-3">
                        <div class="watch-more">
                            <div class="hot_news">
                                <span>Hot News</span>
                            </div>
                            <div class="item">
                                <div class="title_item_related">
                                  <h4>Tính toán vùng bounds bắt đầu và kết thúc của ImageView.
                                  </h4>
                                </div>
                                <div class="post_status">
                                    <ul>
                                      <li><i class="far fa-eye"></i> 566</li>
                                      <li><i class="fas fa-comments"></i> 23</li>
                                      <li><i class="fa fa-paperclip"></i> 2</li>
                                    </ul>
                                </div>
                            </div>
                            <div class="item">
                                <div class="title_item_related">
                                  <h4>Tính toán vùng bounds bắt đầu và kết thúc của ImageView.
                                  </h4>
                                </div>
                                <div class="post_status">
                                    <ul>
                                      <li><i class="far fa-eye"></i> 566</li>
                                      <li><i class="fas fa-comments"></i> 23</li>
                                      <li><i class="fa fa-paperclip"></i> 2</li>
                                    </ul>
                                </div>
                            </div>
                            <div class="item">
                                <div class="title_item_related">
                                  <h4>Tính toán vùng bounds bắt đầu và kết thúc của ImageView.
                                  </h4>
                                </div>
                                <div class="post_status">
                                    <ul>
                                      <li><i class="far fa-eye"></i> 566</li>
                                      <li><i class="fas fa-comments"></i> 23</li>
                                      <li><i class="fa fa-paperclip"></i> 2</li>
                                    </ul>
                                </div>
                            </div>
                            <div class="item">
                                <div class="title_item_related">
                                  <h4>Tính toán vùng bounds bắt đầu và kết thúc của ImageView.
                                  </h4>
                                </div>
                                <div class="post_status">
                                    <ul>
                                      <li><i class="far fa-eye"></i> 566</li>
                                      <li><i class="fas fa-comments"></i> 23</li>
                                      <li><i class="fa fa-paperclip"></i> 2</li>
                                    </ul>
                                </div>
                            </div>
                            <div class="item">
                                <div class="title_item_related">
                                  <h4>Tính toán vùng bounds bắt đầu và kết thúc của ImageView.
                                  </h4>
                                </div>
                                <div class="post_status">
                                    <ul>
                                      <li><i class="far fa-eye"></i> 566</li>
                                      <li><i class="fas fa-comments"></i> 23</li>
                                      <li><i class="fa fa-paperclip"></i> 2</li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- @foreach ($articles as $a)
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
            @endforeach -->
            <!-- end Post desktop -->
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