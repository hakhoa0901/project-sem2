@extends('user.layouts.master')

@section('content')
    <!-- start slider -->
    <div id="fwslider">
        <div class="slider_container">
            <div class="slide">
                <!-- Slide image -->
                <img src="/user/images/banner.jpg" alt=""/>
                <!-- /Slide image -->
            </div>
            <!-- /Duplicate to create more slides -->
            <div class="slide">
                <img src="/user/images/banner1.jpg" alt=""/>
                <div class="slide_content">
                </div>
            </div>
            <!--/slide -->
        </div>
        <div class="timers"></div>
        <div class="slidePrev"><span></span></div>
        <div class="slideNext"><span></span></div>
    </div>
    <!--/slider -->
    <div class="main">
        <div class="wrap">
            <div class="section group">
                <div class="cont span_2_of_3">
                    <h2 class="head">Featured Products</h2>
                    <div class="top-box">
                        <div class="col_1_of_3 span_1_of_3">
                                <div class="inner_content clearfix">
                                    <a href="/detail">
                                    <div class="product_image" >
                                        <img src="/user/images/pic.jpg" alt=""/>
                                    </div>
                                    </a>
                                    <div class="sale-box"><span class="on_sale title_shop">New</span></div>
                                    <div class="price">
                                        <div class="cart-left">
                                            <p class="title">Lorem Ipsum simply</p>
                                            <div class="price1">
                                                <span class="actual">$12.00</span>
                                            </div>
                                        </div>
                                        <a href="/cart">
                                        <div class="cart-right"></div>
                                        </a>
                                        <div class="clear"></div>
                                    </div>
                                </div>
                        </div>
                        <div class="col_1_of_3 span_1_of_3">
                                <div class="inner_content clearfix">
                                    <a href="single.html">
                                    <div class="product_image">
                                        <img src="/user/images/pic1.jpg" alt=""/>
                                    </div>
                                    </a>
                                    <div class="price">
                                        <div class="cart-left">
                                            <p class="title">Lorem Ipsum simply</p>
                                            <div class="price1">
                                                <span class="actual">$12.00</span>
                                            </div>
                                        </div>
                                        <a href="single.html">
                                        <div class="cart-right"> </div>
                                        </a>
                                        <div class="clear"></div>
                                    </div>
                                </div>
                        </div>
                        <div class="col_1_of_3 span_1_of_3">
                                <div class="inner_content clearfix">
                                    <a href="single.html">
                                    <div class="product_image">
                                        <img src="/user/images/pic2.jpg" alt=""/>
                                    </div>
                                    </a>
                                    <div class="sale-box1"><span class="on_sale title_shop">Sale</span></div>
                                    <div class="price">
                                        <div class="cart-left">
                                            <p class="title">Lorem Ipsum simply</p>
                                            <div class="price1">
                                                <span class="reducedfrom">$66.00</span>
                                                <span class="actual">$12.00</span>
                                            </div>
                                        </div>
                                        <a href="single.html">
                                        <div class="cart-right"> </div>
                                        </a>
                                        <div class="clear"></div>
                                    </div>
                                </div>
                        </div>
                        <div class="clear"></div>
                    </div>
                    <div class="top-box">
                        <div class="col_1_of_3 span_1_of_3">
                                <div class="inner_content clearfix">
                                    <a href="single.html">
                                    <div class="product_image">
                                        <img src="/user/images/pic3.jpg" alt=""/>
                                    </div>
                                    </a>
                                    <div class="price">
                                        <div class="cart-left">
                                            <p class="title">Lorem Ipsum simply</p>
                                            <div class="price1">
                                                <span class="actual">$12.00</span>
                                            </div>
                                        </div>
                                        <a href="single.html">
                                        <div class="cart-right"> </div>
                                        </a>
                                        <div class="clear"></div>
                                    </div>
                                </div>
                            </a>
                        </div>
                        <div class="col_1_of_3 span_1_of_3">
                                <div class="inner_content clearfix">
                                    <a href="single.html">
                                    <div class="product_image">
                                        <img src="/user/images/pic4.jpg" alt=""/>
                                    </div>
                                    </a>
                                    <div class="sale-box"><span class="on_sale title_shop">New</span></div>
                                    <div class="price">
                                        <div class="cart-left">
                                            <p class="title">Lorem Ipsum simply</p>
                                            <div class="price1">
                                                <span class="actual">$12.00</span>
                                            </div>
                                        </div>
                                        <a href="single.html">
                                        <div class="cart-right"> </div>
                                        </a>
                                        <div class="clear"></div>
                                    </div>
                                </div>
                            </a>
                        </div>
                        <div class="col_1_of_3 span_1_of_3">
                                <div class="inner_content clearfix">
                                    <a href="single.html">
                                    <div class="product_image">
                                        <img src="/user/images/pic5.jpg" alt=""/>
                                    </div>
                                    </a>
                                    <div class="price">
                                        <div class="cart-left">
                                            <p class="title">Lorem Ipsum simply</p>
                                            <div class="price1">
                                                <span class="actual">$12.00</span>
                                            </div>
                                        </div>
                                        <a href="single.html">
                                        <div class="cart-right"> </div>
                                        </a>
                                        <div class="clear"></div>
                                    </div>
                                </div>
                        </div>
                        <div class="clear"></div>
                    </div>
                    <div class="top-box1">
                        <div class="col_1_of_3 span_1_of_3">
                                <div class="inner_content clearfix">
                                    <a href="single.html">
                                    <div class="product_image">
                                        <img src="/user/images/pic6.jpg" alt=""/>
                                    </div>
                                    </a>
                                    <div class="sale-box"><span class="on_sale title_shop">New</span></div>
                                    <div class="price">
                                        <div class="cart-left">
                                            <p class="title">Lorem Ipsum simply</p>
                                            <div class="price1">
                                                <span class="actual">$12.00</span>
                                            </div>
                                        </div>
                                        <a href="single.html">
                                        <div class="cart-right"> </div>
                                        </a>
                                        <div class="clear"></div>
                                    </div>
                                </div>
                        </div>
                        <div class="col_1_of_3 span_1_of_3">
                                <div class="inner_content clearfix">
                                    <a href="single.html">
                                    <div class="product_image">
                                        <img src="/user/images/pic7.jpg" alt=""/>
                                    </div>
                                    </a>
                                    <div class="sale-box1"><span class="on_sale title_shop">Sale</span></div>
                                    <div class="price">
                                        <div class="cart-left">
                                            <p class="title">Lorem Ipsum simply</p>
                                            <div class="price1">
                                                <span class="reducedfrom">$66.00</span>
                                                <span class="actual">$12.00</span>
                                            </div>
                                        </div>
                                        <a href="single.html">
                                        <div class="cart-right"> </div>
                                        </a>
                                        <div class="clear"></div>
                                    </div>
                                </div>
                        </div>
                        <div class="col_1_of_3 span_1_of_3">
                                <div class="inner_content clearfix">
                                    <a href="single.html">
                                    <div class="product_image">
                                        <img src="/user/images/pic8.jpg" alt=""/>
                                    </div>
                                    </a>
                                    <div class="sale-box"><span class="on_sale title_shop">New</span></div>
                                    <div class="price">
                                        <div class="cart-left">
                                            <p class="title">Lorem Ipsum simply</p>
                                            <div class="price1">
                                                <span class="actual">$12.00</span>
                                            </div>
                                        </div>
                                        <a href="single.html">
                                        <div class="cart-right"> </div>
                                        </a>
                                        <div class="clear"></div>
                                    </div>
                                </div>
                            </a>
                        </div>
                        <div class="clear"></div>
                    </div>
                    <h2 class="head">Staff Pick</h2>
                    <div class="top-box1">
                        <div class="col_1_of_3 span_1_of_3">
                                <div class="inner_content clearfix">
                                    <a href="single.html">
                                    <div class="product_image">
                                        <img src="/user/images/pic8.jpg" alt=""/>
                                    </div>
                                    </a>
                                    <div class="sale-box"><span class="on_sale title_shop">New</span></div>
                                    <div class="price">
                                        <div class="cart-left">
                                            <p class="title">Lorem Ipsum simply</p>
                                            <div class="price1">
                                                <span class="actual">$12.00</span>
                                            </div>
                                        </div>
                                        <a href="single.html">
                                        <div class="cart-right"> </div>
                                        </a>
                                        <div class="clear"></div>
                                    </div>
                                </div>
                            </a>
                        </div>
                        <div class="col_1_of_3 span_1_of_3">
                                <div class="inner_content clearfix">
                                    <a href="single.html">
                                    <div class="product_image">
                                        <img src="/user/images/pic4.jpg" alt=""/>
                                    </div>
                                    </a>
                                    <div class="price">
                                        <div class="cart-left">
                                            <p class="title">Lorem Ipsum simply</p>
                                            <div class="price1">
                                                <span class="actual">$12.00</span>
                                            </div>
                                        </div>
                                        <a href="single.html">
                                        <div class="cart-right"> </div>
                                        </a>
                                        <div class="clear"></div>
                                    </div>
                                </div>
                        </div>
                        <div class="col_1_of_3 span_1_of_3">
                                <div class="inner_content clearfix">
                                    <a href="single.html">
                                    <div class="product_image">
                                        <img src="/user/images/pic2.jpg" alt=""/>
                                    </div>
                                    </a>
                                    <div class="sale-box"><span class="on_sale title_shop">New</span></div>
                                    <div class="price">
                                        <div class="cart-left">
                                            <p class="title">Lorem Ipsum simply</p>
                                            <div class="price1">
                                                <span class="actual">$12.00</span>
                                            </div>
                                        </div>
                                        <a href="single.html">
                                        <div class="cart-right"> </div>
                                        </a>
                                        <div class="clear"></div>
                                    </div>
                                </div>
                            </a>
                        </div>
                        <div class="clear"></div>
                    </div>
                    <h2 class="head">New Products</h2>
                    <div class="section group">
                        <div class="col_1_of_3 span_1_of_3">
                                <div class="inner_content clearfix">
                                    <a href="single.html">
                                    <div class="product_image">
                                        <img src="/user/images/pic5.jpg" alt=""/>
                                    </div>
                                    </a>
                                    <div class="sale-box"><span class="on_sale title_shop">New</span></div>
                                    <div class="price">
                                        <div class="cart-left">
                                            <p class="title">Lorem Ipsum simply</p>
                                            <div class="price1">
                                                <span class="actual">$12.00</span>
                                            </div>
                                        </div>
                                        <a href="single.html">
                                        <div class="cart-right"> </div>
                                        </a>
                                        <div class="clear"></div>
                                    </div>
                                </div>
                            </a>
                        </div>
                        <div class="col_1_of_3 span_1_of_3">
                                <div class="inner_content clearfix">
                                    <a href="single.html">
                                    <div class="product_image">
                                        <img src="/user/images/pic2.jpg" alt=""/>
                                    </div>
                                    </a>
                                    <div class="sale-box"><span class="on_sale title_shop">New</span></div>
                                    <div class="price">
                                        <div class="cart-left">
                                            <p class="title">Lorem Ipsum simply</p>
                                            <div class="price1">
                                                <span class="actual">$12.00</span>
                                            </div>
                                        </div>
                                        <a href="single.html">
                                        <div class="cart-right"> </div>
                                        </a>
                                        <div class="clear"></div>
                                    </div>
                                </div>
                            </a>
                        </div>
                        <div class="col_1_of_3 span_1_of_3">
                                <div class="inner_content clearfix">
                                    <a href="single.html">
                                    <div class="product_image">
                                        <img src="/user/images/pic3.jpg" alt=""/>
                                    </div>
                                    </a>
                                    <div class="sale-box"><span class="on_sale title_shop">New</span></div>
                                    <div class="price">
                                        <div class="cart-left">
                                            <p class="title">Lorem Ipsum simply</p>
                                            <div class="price1">
                                                <span class="actual">$12.00</span>
                                            </div>
                                        </div>
                                        <a href="single.html">
                                        <div class="cart-right"> </div>
                                        </a>
                                        <div class="clear"></div>
                                    </div>
                                </div>
                            </a>
                        </div>
                        <div class="clear"></div>
                    </div>
                </div>
                <div class="rsidebar span_1_of_left">
                    <div class="top-border"> </div>
                    <div class="border">
                        <link href="/user/css/default.css" rel="stylesheet" type="text/css" media="all" />
                        <link href="/user/css/nivo-slider.css" rel="stylesheet" type="text/css" media="all" />
                        <script src="/user/js/jquery.nivo.slider.js"></script>
                        <script type="text/javascript">
                            $(window).load(function() {
                                $('#slider').nivoSlider();
                            });
                        </script>
                        <div class="slider-wrapper theme-default">
                            <div id="slider" class="nivoSlider">
                                <img src="/user/images/t-img1.jpg"  alt="" />
                                <img src="/user/images/t-img2.jpg"  alt="" />
                                <img src="/user/images/t-img3.jpg"  alt="" />
                            </div>
                        </div>
                        <div class="btn"><a href="single.html" style="width: 130px">Check it Out</a></div>
                    </div>
                    <div class="top-border"> </div>

                </div>
                <div class="clear"></div>
            </div>
        </div>
    </div>

@endsection
