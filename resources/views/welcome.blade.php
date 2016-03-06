@extends('layouts.app')

@section('title', 'Welcome')

@section('content')
    <div class="container content">
        <!-- Service Blocks -->
        <div id="summary" class="headline"><h2>Product Summary</h2></div>
        <div class="row margin-bottom-30">
            <div class="col-md-4">
                <div class="service">
                    <i class="fa fa-compress service-icon"></i>
                    <div class="desc">
                        <h4>Fully Responsive</h4>
                        <p>Donec id elit non mi porta gravida at eget metus. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus etiam sem...</p>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="service">
                    <i class="fa fa-cogs service-icon"></i>
                    <div class="desc">
                        <h4>HTML5 + CSS3</h4>
                        <p>Donec id elit non mi porta gravida at eget metus. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus etiam sem...</p>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="service">
                    <i class="fa fa-rocket service-icon"></i>
                    <div class="desc">
                        <h4>Launch Ready</h4>
                        <p>Donec id elit non mi porta gravida at eget metus. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus etiam sem...</p>
                    </div>
                </div>
            </div>
        </div>
        <!-- End Service Blokcs -->

        <!-- Recent Works -->
        <div id="features" class="headline"><h2>Features</h2></div>
        <div class="row margin-bottom-20">
            <div class="col-md-3 col-sm-6">
                <div class="thumbnails thumbnail-style thumbnail-kenburn">
                    <div class="thumbnail-img">
                        <div class="overflow-hidden">
                            <img class="img-responsive" src="/images/main/img2.jpg" alt="">
                        </div>
                        <a class="btn-more hover-effect" href="#">read more +</a>
                    </div>
                    <div class="caption">
                        <h3><a class="hover-effect" href="#">Project One</a></h3>
                        <p>Donec id elit non mi porta gravida at eget metus. Fusce dapibus, justo sit amet risus etiam porta sem.</p>
                    </div>
                </div>
            </div>
            <div class="col-md-3 col-sm-6">
                <div class="thumbnails thumbnail-style thumbnail-kenburn">
                    <div class="thumbnail-img">
                        <div class="overflow-hidden">
                            <img class="img-responsive" src="/images/main/img3.jpg" alt="">
                        </div>
                        <a class="btn-more hover-effect" href="#">read more +</a>
                    </div>
                    <div class="caption">
                        <h3><a class="hover-effect" href="#">Project Two</a></h3>
                        <p>Donec id elit non mi porta gravida at eget metus. Fusce dapibus, justo sit amet risus etiam porta sem.</p>
                    </div>
                </div>
            </div>
            <div class="col-md-3 col-sm-6">
                <div class="thumbnails thumbnail-style thumbnail-kenburn">
                    <div class="thumbnail-img">
                        <div class="overflow-hidden">
                            <img class="img-responsive" src="/images/main/img9.jpg" alt="">
                        </div>
                        <a class="btn-more hover-effect" href="#">read more +</a>
                    </div>
                    <div class="caption">
                        <h3><a class="hover-effect" href="#">Project Three</a></h3>
                        <p>Donec id elit non mi porta gravida at eget metus. Fusce dapibus, justo sit amet risus etiam porta sem.</p>
                    </div>
                </div>
            </div>
            <div class="col-md-3 col-sm-6">
                <div class="thumbnails thumbnail-style thumbnail-kenburn">
                    <div class="thumbnail-img">
                        <div class="overflow-hidden">
                            <img class="img-responsive" src="/images/main/img10.jpg" alt="">
                        </div>
                        <a class="btn-more hover-effect" href="#">read more +</a>
                    </div>
                    <div class="caption">
                        <h3><a class="hover-effect" href="#">Project Four</a></h3>
                        <p>Donec id elit non mi porta gravida at eget metus. Fusce dapibus, justo sit amet risus etiam porta sem.</p>
                    </div>
                </div>
            </div>
        </div>
        <!-- End Recent Works -->

        <!-- Info Blokcs -->
        <div class="row">
            <!-- Welcome Block -->
            <div class="col-md-8 md-margin-bottom-40" id="images">
                <div class="headline"><h2>Welcome To klinikAs</h2></div>
                <div class="row">
                    <div class="col-sm-4">
                        <img class="img-responsive margin-bottom-20" src="/images/main/img6.jpg" alt="">
                    </div>
                    <div class="col-sm-8">
                        <p>Unify is an incredibly beautiful responsive Bootstrap Template for corporate and creative professionals. It works on all major web browsers, tablets and phone.</p>
                        <ul class="list-unstyled margin-bottom-20">
                            <li><i class="fa fa-check color-green"></i> Donec id elit non mi porta gravida</li>
                            <li><i class="fa fa-check color-green"></i> Corporate and Creative</li>
                            <li><i class="fa fa-check color-green"></i> Responsive Bootstrap Template</li>
                            <li><i class="fa fa-check color-green"></i> Corporate and Creative</li>
                        </ul>
                    </div>
                </div>

                <blockquote class="hero-unify">
                    <p>Award winning digital agency. We bring a personal and effective approach to every project we work on, which is why. Unify is an incredibly beautiful responsive Bootstrap Template for corporate professionals.</p>
                    <small>CEO, Jack Bour</small>
                </blockquote>
            </div><!--/col-md-8-->

            <!-- Latest Shots -->
            <div class="col-md-4">
                <div class="headline"><h2>Latest Shots</h2></div>
                <div id="myCarousel" class="carousel slide carousel-v1">
                    <div class="carousel-inner">
                        <div class="item">
                            <img src="/images/main/img5.jpg" alt="">
                            <div class="carousel-caption">
                                <p>Facilisis odio, dapibus ac justo acilisis gestinas.</p>
                            </div>
                        </div>
                        <div class="item">
                            <img src="/images/main/img4.jpg" alt="">
                            <div class="carousel-caption">
                                <p>Cras justo odio, dapibus ac facilisis into egestas.</p>
                            </div>
                        </div>
                        <div class="item active">
                            <img src="/images/main/img3.jpg" alt="">
                            <div class="carousel-caption">
                                <p>Justo cras odio apibus ac afilisis lingestas de.</p>
                            </div>
                        </div>
                    </div>

                    <div class="carousel-arrow">
                        <a class="left carousel-control" href="#myCarousel" data-slide="prev">
                            <i class="fa fa-angle-left"></i>
                        </a>
                        <a class="right carousel-control" href="#myCarousel" data-slide="next">
                            <i class="fa fa-angle-right"></i>
                        </a>
                    </div>
                </div>
            </div><!--/col-md-4-->
        </div>
        <!-- End Info Blokcs -->

        <div class="row">
            <div id="about" class="container content-sm">
                <div class="headline"><h2>About Us</h2></div>
                <div class="row">
                    <div class="col-md-4 service-desc md-margin-bottom-50">
                        <i class="icon-diamond"></i>
                        <h3>Design</h3>
                        <p class="no-margin-bottom">Morbi ac placerat nibh, in vestibulum odio cras vel orci non dolor sagittis sollicitudin et eu jeriu ntesque.<br> Curabitur vitae augue </p>
                    </div>
                    <div class="col-md-4 service-desc md-margin-bottom-50">
                        <i class="icon-rocket"></i>
                        <h3>Development</h3>
                        <p class="no-margin-bottom">Morbi ac placerat nibh, in vestibulum odio cras vel orci non dolor sagittis sollicitudin et eu jeriu ntesque.<br> Curabitur vitae augue </p>
                    </div>
                    <div class="col-md-4 service-desc">
                        <i class="icon-support"></i>
                        <h3>Support</h3>
                        <p class="no-margin-bottom">Morbi ac placerat nibh, in vestibulum odio cras vel orci non dolor sagittis sollicitudin et eu jeriu ntesque.<br> Curabitur vitae augue </p>
                    </div>
                </div><!--/end row-->
            </div>
        </div>

        <div class="row">
            <div id="contact" class="container content-sm">
                <div class="headline"><h2>Contact Us</h2></div>
                <div class="row">
                    <div class="col-md-4 service-desc md-margin-bottom-50">
                        <i class="icon-diamond"></i>
                        <h3>Design</h3>
                        <p class="no-margin-bottom">Morbi ac placerat nibh, in vestibulum odio cras vel orci non dolor sagittis sollicitudin et eu jeriu ntesque.<br> Curabitur vitae augue </p>
                    </div>
                    <div class="col-md-4 service-desc md-margin-bottom-50">
                        <i class="icon-rocket"></i>
                        <h3>Development</h3>
                        <p class="no-margin-bottom">Morbi ac placerat nibh, in vestibulum odio cras vel orci non dolor sagittis sollicitudin et eu jeriu ntesque.<br> Curabitur vitae augue </p>
                    </div>
                    <div class="col-md-4 service-desc">
                        <i class="icon-support"></i>
                        <h3>Support</h3>
                        <p class="no-margin-bottom">Morbi ac placerat nibh, in vestibulum odio cras vel orci non dolor sagittis sollicitudin et eu jeriu ntesque.<br> Curabitur vitae augue </p>
                    </div>
                </div><!--/end row-->
            </div>
        </div>
        </div>
    </div>
@stop

@section('footer')
    <div class="copyright">
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <p>
                        2015 © All Rights Reserved.
                        <a href="#">Privacy Policy</a> | <a href="#">Terms of Service</a>
                    </p>
                </div>

                <!-- Social Links -->
                <div class="col-md-6">
                    <ul class="footer-socials list-inline">
                        <li>
                            <a href="#" class="tooltips" data-toggle="tooltip" data-placement="top" title="" data-original-title="Facebook">
                                <i class="fa fa-facebook"></i>
                            </a>
                        </li>
                        <li>
                            <a href="#" class="tooltips" data-toggle="tooltip" data-placement="top" title="" data-original-title="Skype">
                                <i class="fa fa-skype"></i>
                            </a>
                        </li>
                        <li>
                            <a href="#" class="tooltips" data-toggle="tooltip" data-placement="top" title="" data-original-title="Google Plus">
                                <i class="fa fa-google-plus"></i>
                            </a>
                        </li>
                        <li>
                            <a href="#" class="tooltips" data-toggle="tooltip" data-placement="top" title="" data-original-title="Linkedin">
                                <i class="fa fa-linkedin"></i>
                            </a>
                        </li>
                        <li>
                            <a href="#" class="tooltips" data-toggle="tooltip" data-placement="top" title="" data-original-title="Pinterest">
                                <i class="fa fa-pinterest"></i>
                            </a>
                        </li>
                        <li>
                            <a href="#" class="tooltips" data-toggle="tooltip" data-placement="top" title="" data-original-title="Twitter">
                                <i class="fa fa-twitter"></i>
                            </a>
                        </li>
                        <li>
                            <a href="#" class="tooltips" data-toggle="tooltip" data-placement="top" title="" data-original-title="Dribbble">
                                <i class="fa fa-dribbble"></i>
                            </a>
                        </li>
                    </ul>
                </div>
                <!-- End Social Links -->
            </div>
        </div>
    </div>
@stop
@section('js')
@stop