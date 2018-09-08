@extends('master')
@section('main')
  <div class="content_post">
      <div class="row">
        <div class="container">
          <div class="row">
            <div class="col-md-10 col-xl-10 post_author">
                <div class="col-md-6 info_post">
                   <div class="img_blogger">
                     <img src="https://www.atomix.com.au/media/2015/06/atomix_user31.png" alt="">
                   </div>
                   <div class="name_blogger_border">
                     <div class="name_blog">Hoan Tran</div>
                     <div class="text-muted">@hoan.tran.van</div>
                   </div>
                </div>
                <div class="col-md-6 publish_post">
                  <div class="text-muted-publish">
                    <div>Published about 2 hours ago</div>
                  </div>
                  <div class="post_meta_item">
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
      </div>
      <div class="row">
          <div class="container">
              <div class="row">
                  <div class="col-md-10 col-xl-10 post-body-left">
                      <div class="container">
                        <div class="title-post">
                          <span>{{$article -> title}}</span>
                        </div>
                        <div class="tags">
                          <button>Css</button>
                          <button>Laravel</button>
                          <button>Bootstrap</button>
                        </div>
                        <div class="article-content">
                            <p>
                                {!! $article -> content !!}
                            </p>
                        </div>
                      </div>
                  </div>
                  <!-- <div class="col-md-3 post-body-right">
                      <div class="row">
                         <div class="container">
                              <div class="summary">
                                  SUMMARY OF CONTENTS
                              </div>
                              <div class="summary-content">
                                  Tính toán vùng bounds bắt đầu và kết thúc của ImageView.
                                  Dịch chuyển 4 vị trí và kích cở của thuộc tính X, Y, SCALE_X và SCALE_Y từ vùng bound bắt đầu đến vùng bound kết thúc. Sẽ có 4 animation được thêm vào AnimatorSet để chúng có thể start cùng một thời điểm.
                                  Zoom trở về size thumbnail khi user touch vào ImageView hiển thị ảnh lớn.
                              </div>
                         </div>
                      </div>
                  </div> -->
              </div>
          </div>
      </div>
  </div>
  @component('components.relate_post')
  @endcomponent
@stop