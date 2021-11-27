@extends('user.site')
@section('main')

<!------ Breadcrumbs Start ------>
<div class="impl_bread_wrapper">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 col-md-12">
                <h1>blog single</h1>
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="#">Home</a></li>
                    <li class="breadcrumb-item active">blog single</li>
                </ol>
            </div>
        </div>
    </div>
</div>
<!------ Blog section Start ------>
<div class="impl_blog_wrapper impl_blog_page">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 col-md-12">
                <div class="impl_blog_inner">
                    <div class="row">
                        <div class="col-lg-3 col-md-3">
                            <div class="impl_sidebar">
                                <div class="impl_product_search widget woocommerce">
                                    <h2 class="widget-title">looking for</h2>
                                    <div class="impl_footer_subs">
                                        <input type="text" class="form-control" placeholder="Search...">
                                        <button class="foo_subs_btn"><i class="fa fa-search" aria-hidden="true"></i></button>
                                    </div>
                                </div>
                                <!--Categories-->
                                <div class="widget widget_categories">
                                    <h2 class="widget-title">Categories</h2>
                                    <ul>
                                        <li><a href="#"> Changing Oil</a></li>
                                        <li><a href="#"> Saving Fuel</a></li>
                                        <li><a href="#"> Antilock Brakes</a></li>
                                        <li><a href="#"> Battery</a></li>
                                        <li><a href="#"> Tips On Long Car Trips</a></li>
                                        <li><a href="#"> Air Pressure</a></li>
                                        <li><a href="#"> Tire Replacement</a></li>
                                    </ul>
                                </div>
                                <!--Recent Post-->
                                <div class="widget widget_recent_entries">
                                    <h2 class="widget-title">Recent Posts</h2>
                                    <ul>
                                        <li>
                                            <div class="recent_cmnt_img">
                                                <img src="http://via.placeholder.com/70x70" alt="">
                                            </div>
                                            <div class="recent_cmnt_data">
                                                <h4><a href="#">Things To Keep In Mind While Travelling.</a></h4>
                                                <span>07 October 2017</span>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="recent_cmnt_img">
                                                <img src="http://via.placeholder.com/70x70" alt="">
                                            </div>
                                            <div class="recent_cmnt_data">
                                                <h4><a href="#">Jaguar Launches New F-Type Sports Car</a></h4>
                                                <span>11 Apr, 2017</span>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="recent_cmnt_img">
                                                <img src="http://via.placeholder.com/70x70" alt="">
                                            </div>
                                            <div class="recent_cmnt_data">
                                                <h4><a href="#">Tips To Save Fuel Efficiently</a></h4>
                                                <span>24 Apr, 2017</span>
                                            </div>
                                        </li>
                                    </ul>
                                </div>
                                <!--Tag Cloud-->
                                <div class="widget widget_tag_cloud">
                                    <h2 class="widget-title">Tags</h2>
                                    <ul>
                                        <li><a href="#">Reviews</a></li>
                                        <li><a href="#">Latest Lauches</a></li>
                                        <li><a href="#">Rolls Royce</a></li>
                                        <li><a href="#">Safety</a></li>
                                        <li><a href="#">Sedan </a></li>
                                        <li><a href="#">Selling Your Car</a></li>
                                        <li><a href="#">Travelling Tips</a></li>
                                    </ul>
                                </div>
                                <!--Instagram-->
                                <div class="widget widget_instagram_feed">
                                    <h2 class="widget-title">instagram feed</h2>
                                    <ul>
                                        <li><a href="#"><img src="http://via.placeholder.com/70x70" alt=""></a></li>
                                        <li><a href="#"><img src="http://via.placeholder.com/70x70" alt=""></a></li>
                                        <li><a href="#"><img src="http://via.placeholder.com/70x70" alt=""></a></li>
                                        <li><a href="#"><img src="http://via.placeholder.com/70x70" alt=""></a></li>
                                        <li><a href="#"><img src="http://via.placeholder.com/70x70" alt=""></a></li>
                                        <li><a href="#"><img src="http://via.placeholder.com/70x70" alt=""></a></li>
                                    </ul>
                                </div>
                                <!--Follow us-->
                                <div class="widget widget_social_links">
                                    <h2 class="widget-title">Connect and Follow</h2>
                                    <ul>
                                        <li><a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
                                        <li><a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
                                        <li><a href="#"><i class="fa fa-linkedin" aria-hidden="true"></i></a></li>
                                        <li><a href="#"><i class="fa fa-google-plus" aria-hidden="true"></i></a></li>
                                        <li><a href="#"><i class="fa fa-pinterest-p" aria-hidden="true"></i></a></li>
                                        <li><a href="#"><i class="fa fa-instagram" aria-hidden="true"></i></a></li>
                                        <li><a href="#"><i class="fa fa-youtube-play" aria-hidden="true"></i></a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <!--sidebar end-->
                        <div class="col-lg-9 col-md-9 impl_blog_section">
                            <div class="row">
                                <div class="col-lg-12 col-md-12">
                                    <!--blog1-->
                                    <div class="impl_blog_box single_blog">
                                        <div class="impl_post_img">
                                            <img src="http://via.placeholder.com/870x450" alt="" class="img-fluid" />
                                            <span class="impl_pst_date">
                                                16 sep
                                            </span>
                                            <div class="impl_pst_img_icon"><a href="#"><i class="fa fa-link" aria-hidden="true"></i></a></div>
                                        </div>
                                        <div class="impl_post_data">
                                            <h2><a href="#">Stories Behind Car Brand Names </a></h2>
                                            <p>It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using 'Content here, content here', making it look like readable English. Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text, and a search for 'lorem ipsum' will uncover many web sites still in their infancy. Various versions have evolved over the years, sometimes by accident, sometimes on purpose (injected humour and the like). There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour.</p>
                                            <div class="impl_blockquotes">
                                                <blockquote cite="">
                                                    Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text, and a search for 'lorem ipsum' will uncover many web sites still in their infancy. Various versions have evolved over the years, sometimes by accident, sometimes on purpose (injected humour and the like). There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour.
                                                </blockquote>
                                            </div>
                                            <p>The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters. Lorem Ipsum as their default model text, and a search for 'lorem ipsum' will uncover many web sites still in their infancy. Various versions have evolved over the years, sometimes by accident, sometimes on purpose (injected humour and the like). There are many variations of passages of Lorem Ipsum available, but the majority have suffered.</p>
                                            <div class="impl_pst_info impl_toppadder10">
                                                <div class="impl_pst_admin">
                                                    <span><a href="#">admin</a></span>
                                                    <span><a href="#">16 September 2017</a></span>
                                                </div>
                                                <ul class="impl_pst_views">
                                                    <li><a href="#"><i class="fa fa-eye" aria-hidden="true"></i> 413</a></li>
                                                    <li><a href="#"><i class="fa fa-comments" aria-hidden="true"></i> 251</a></li>
                                                    <li><a href="#"><i class="fa fa-share-alt" aria-hidden="true"></i> 5</a></li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                    <!--comments area start-->
                                    <div class="comments-area">
                                        <div class="comments-area-title">
                                            <h3 class="comments-title"> Comments (251)</h3>
                                        </div>
                                        <ol class="commentlist">
                                            <li class="comment">
                                                <div class="impl_comments">
                                                    <div class="comment_img">
                                                        <img src="http://via.placeholder.com/100x100" alt="">
                                                    </div>
                                                    <div class="comment_data">
                                                        <div class="comment_data_info">
                                                            <h3><a href="#">Joseph Hartley</a></h3>
                                                            <p class="cmnt_date">16 September 2017 | 21:00</p>
                                                        </div>
                                                        <p class="comment_para">
                                                            "But I must explain to you how all this mistaken idea of denouncing pleasure and praising pain was born and I will give you a complete account of the system, and expound the actual teachings."
                                                        </p>
                                                        <span class="comment-reply"><a href="#"> <i class="fa fa-reply" aria-hidden="true"></i></a></span>
                                                    </div>
                                                </div>
                                                <ul class="children">
                                                    <li class="comment">
                                                        <div class="impl_comments">
                                                            <div class="comment_img">
                                                                <img src="http://via.placeholder.com/100x100" alt="">
                                                            </div>
                                                            <div class="comment_data">
                                                                <div class="comment_data_info">
                                                                    <h3><a href="#">peter nevil</a></h3>
                                                                    <p class="cmnt_date">16 September 2017 | 21:00</p>
                                                                </div>
                                                                <p class="comment_para">
                                                                    "But I must explain to you how all this mistaken idea of denouncing pleasure and praising pain was born and I will give you a complete account of the system, and expound the actual teachings."
                                                                </p>
                                                                <a href="" class="comment-reply">
                                                                    <span><i class="fa fa-reply" aria-hidden="true"></i></span>
                                                                </a>
                                                            </div>
                                                        </div>
                                                    </li>
                                                </ul>
                                            </li>
                                            <li class="comment">
                                                <div class="impl_comments">
                                                    <div class="comment_img">
                                                        <img src="http://via.placeholder.com/100x100" alt="">
                                                    </div>
                                                    <div class="comment_data">
                                                        <div class="comment_data_info">
                                                            <h3><a href="#">lena adms</a></h3>
                                                            <p class="cmnt_date">16 September 2017 | 21:00</p>
                                                        </div>
                                                        <p class="comment_para">
                                                            "But I must explain to you how all this mistaken idea of denouncing pleasure and praising pain was born and I will give you a complete account of the system, and expound the actual teachings."
                                                        </p>
                                                        <span class="comment-reply"><a href="#"> <i class="fa fa-reply" aria-hidden="true"></i></a></span>
                                                    </div>
                                                </div>
                                        </ol>
                                    </div>
                                    <!--comments area end-->
                                    <div class="comment-respond">
                                        <h3 id="reply-title" class="comments-title">leave a comment</h3>
                                        <form>
                                            <div class="row">
                                                <div class="col-lg-6 col-md-6">
                                                    <div class="comment_input_wrapper">
                                                        <input name="name" value="" type="text" class="cmnt_field" placeholder="YOUR NAME">
                                                    </div>
                                                </div>
                                                <div class="col-lg-6 col-md-6">
                                                    <div class="comment_input_wrapper">
                                                        <input name="email" value="" type="email" class="cmnt_field" placeholder="YOUR EMAIL">
                                                    </div>
                                                </div>
                                                <div class="col-lg-12 col-md-12">
                                                    <div class="comment_input_wrapper">
                                                        <textarea id="comment" name="comment" class="cmnt_field" placeholder="YOUR COMMENT"></textarea>
                                                    </div>
                                                </div>
                                                <div class="col-lg-12 col-md-12">
                                                    <div class="comment-form-submit">
                                                        <input name="submit" type="submit" id="comment-submit" class="submit impl_btn" value="Post Comment">
                                                    </div>
                                                </div>

                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

@stop()