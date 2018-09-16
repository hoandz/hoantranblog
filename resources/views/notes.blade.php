@extends('master')
@section('main')
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
        </div>
    </div>
</div>
@stop
