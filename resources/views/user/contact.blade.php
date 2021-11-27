@extends('user.site')
@section('main')
<!------ Breadcrumbs Start ------>
<div class="impl_bread_wrapper">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 col-md-12">
                <h1>contact</h1>
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="#">Home</a></li>
                    <li class="breadcrumb-item active">contact</li>
                </ol>
            </div>
        </div>
    </div>
</div>
<!------ Contact Wrapper Start ------>
<div class="impl_contact_wrapper">
    <div class="container">
        <div class="row">
            <div class="col-lg-10 col-md-12 offset-lg-1">
                <div class="impl_con_form">
                    <div class="contact_map">
                        <div id="contact_map"></div>
                    </div>
                    <div class="col-lg-12 col-md-12">
                        <h1>BẠN MUỐN TƯ VẤN GÌ??</h1>
                        <h4>Hãy liên lạc với chúng tôi</h4>
                    </div>
                    <form action="{{route('contact')}}" method="POST">
                        @csrf
                        <div class="col-lg-12 col-md-12">
                            <div class="form-group">
                                <input type="text" name="name" class="form-control require" placeholder="Nhập tên của bạn">
                            </div>
                        </div>
                        <div class="col-lg-12 col-md-12">
                            <div class="form-group">
                                <input type="email" name="email" class="form-control require" placeholder="Nhập email" data-valid="email" data-error="Email should be valid.">
                            </div>
                        </div>
                        <div class="col-lg-12 col-md-12">
                            <div class="form-group">
                                <input type="phone" name="phone" class="form-control require" placeholder="Nhập SDT">
                            </div>
                        </div>
                        <div class="col-lg-12 col-md-12">
                            <div class="form-group">
                                <textarea name="content" rows="4" class="form-control" placeholder="Tin nhắn"></textarea>
                            </div>
                        </div>
                        <div class="response"></div>
                        <button type="submit" class="impl_btn submitForm">Gửi</button>
                    </form>
                </div>
            </div>
            <div class="col-lg-12 col-md-12">
                <div class="impl_contact_info">
                    <div class="row">
                        <div class="col-lg-4 col-md-4">
                            <div class="impl_contact_box">
                                <div class="impl_con_data">
                                    <i class="fa fa-phone" aria-hidden="true"></i>
                                    <h2>phone</h2>
                                    <p>+1-202-555-0137</p>
                                    <p>+1-202-555-0189</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-4">
                            <div class="impl_contact_box">
                                <div class="impl_con_data">
                                    <i class="fa fa-home" aria-hidden="true"></i>
                                    <h2>address</h2>
                                    <p>514 S. Magnolia St.<br>Orlando , US</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-4">
                            <div class="impl_contact_box">
                                <div class="impl_con_data">
                                    <i class="fa fa-envelope" aria-hidden="true"></i>
                                    <h2>E - mail</h2>
                                    <p><a href="#">dummymail@mail.com</a></p>
                                    <p><a href="#">yourmail@mail.com</a></p>
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