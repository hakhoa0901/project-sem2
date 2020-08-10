<!DOCTYPE HTML>
<html>
<head>
    <title>Leo Shop</title>
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <link href="/user/css/style.css" rel="stylesheet" type="text/css" media="all" />
    <link href="/user/css/form.css" rel="stylesheet" type="text/css" media="all" />
    <link href='http://fonts.googleapis.com/css?family=Exo+2' rel='stylesheet' type='text/css'>
    <script src="/user/js/jquery1.min.js"></script>
    <!-- start menu -->
    <link href="/user/css/megamenu.css" rel="stylesheet" type="text/css" media="all" />
    <script type="text/javascript" src="/user/js/megamenu.js"></script>
    <script>$(document).ready(function(){$(".megamenu").megamenu();});</script>
    <script type="text/javascript" src="/user/js/jquery.jscrollpane.min.js"></script>
    <script type="text/javascript" id="sourcecode">
        $(function()
        {
            $('.scroll-pane').jScrollPane();
        });
    </script>
    <!-- start details -->
    <script src="/user/js/slides.min.jquery.js"></script>
    <script>
        $(function(){
            $('#products').slides({
                preload: true,
                preloadImage: 'img/loading.gif',
                effect: 'slide, fade',
                crossfade: true,
                slideSpeed: 350,
                fadeSpeed: 500,
                generateNextPrev: true,
                generatePagination: false
            });
        });
    </script>
    <link rel="stylesheet" href="/user/css/etalage.css">
    <script src="/user/js/jquery.etalage.min.js"></script>
    <script>
        jQuery(document).ready(function($){

            $('#etalage').etalage({
                thumb_image_width: 360,
                thumb_image_height: 360,
                source_image_width: 900,
                source_image_height: 900,
                show_hint: true,
                click_callback: function(image_anchor, instance_id){
                    alert('Callback example:\nYou clicked on an image with the anchor: "'+image_anchor+'"\n(in Etalage instance: "'+instance_id+'")');
                }
            });

        });
    </script>
</head>
<body>
<div class="header-top">
    <div class="wrap">

        <div class="cssmenu">
            <ul>

                <li><a href="/login">Đăng nhập</a></li> |
                <li><a href="/register">Đăng ký</a></li>
            </ul>
        </div>
        <div class="clear"></div>
    </div>
</div>
<div class="header-bottom">
    <div class="wrap">
        <div class="header-bottom-left">
            <div class="logo">
                <a href="/"><img src="{{asset('user/images/logo.png')}}" alt=""/></a>
            </div>
            <div class="menu">
                <ul class="megamenu skyblue">
                    <li class="active grid"><a href="/">Trang chủ</a></li>
                    <li><a class="color4" href="#">Kính Nam</a>
                        <div class="megapanel">
                            <div class="row">
                                <div class="col1">
                                    <div class="h_nav">
                                        <h4>Kính dâm</h4>
                                        <ul>
                                            <li><a href="/men">Heart-Shaped</a></li>
                                            <li><a href="/men">Square-Shaped</a></li>
                                            <li><a href="/men">Round-Shaped</a></li>
                                            <li><a href="/men">Oval-Shaped</a></li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="col1">
                                    <div class="h_nav">
                                        <h4>Kính mắt</h4>
                                        <ul>
                                            <li><a href="/men">Anti Reflective</a></li>
                                            <li><a href="/men">Aspheric</a></li>
                                            <li><a href="/men">Bifocal</a></li>
                                            <li><a href="/men">Hi-index</a></li>
                                            <li><a href="/men">Progressive</a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </li>
                    <li><a class="color5" href="#">Kính Nữ</a>
                        <div class="megapanel">
                            <div class="row">
                                <div class="col1">
                                    <div class="h_nav">
                                        <h4>Kính râm</h4>
                                        <ul>
                                            <li><a href="/men">Rayban</a></li>
                                            <li><a href="/men">Oakley</a></li>
                                            <li><a href="/men">Xiaomi</a></li>
                                            <li><a href="/men">Parim</a></li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="col1">
                                    <div class="h_nav">
                                        <h4>Kính mắt</h4>
                                        <ul>
                                            <li><a href="/men">GUCCI</a></li>
                                            <li><a href="/men">DIOR</a></li>
                                            <li><a href="/men">PRADA</a></li>
                                            <li><a href="/men">FENDI</a></li>
                                            <li><a href="/men">TOM FORD</a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </li>
                    <li><a class="color6" href="/contact">Liên hệ</a></li>
                    <li><a class="color6" href="/delivery">Điều khoản sử dụng</a></li>
                </ul>
            </div>
        </div>
        <div class="header-bottom-right">
            <div class="search">
                <input type="text" name="s" class="textbox" value="Search" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Search';}">
                <input type="submit" value="Subscribe" id="submit" name="submit">
                <div id="response"> </div>
            </div>
            <div class="tag-list">
                <ul class="icon1 sub-icon1 profile_img">
                    <li><a class="active-icon c2" href="#"> </a>
                        <ul class="sub-icon1 list">
                            <li><h3></h3><a href=""></a></li>
                            <li><p><a></a></p></li>
                        </ul>
                    </li>
                </ul>
                <ul class="last"><li><a href="#">Giỏ hàng</a></li></ul>
            </div>
        </div>
        <div class="clear"></div>
    </div>
</div>
<div class="mens">
    <div class="main">
        <div class="wrap">
            <ul class="breadcrumb breadcrumb__t"><a class="home" href="#">Trang chủ</a>  / Sản phẩm</ul>
            <div class="cont span_2_of_3">
                <div class="grid images_3_of_2">
                    <ul id="etalage">
                        <li>
                            <a href="optionallink.html">
                                <img class="etalage_thumb_image" src="/user/images/s-img.jpg" class="img-responsive" />
                                <img class="etalage_source_image" src="/user/images/s1.jpg" class="img-responsive" title="" />
                            </a>
                        </li>
                        <li>
                            <img class="etalage_thumb_image" src="/user/images/s-img1.jpg" class="img-responsive" />
                            <img class="etalage_source_image" src="/user/images/s2.jpg" class="img-responsive" title="" />
                        </li>
                        <li>
                            <img class="etalage_thumb_image" src="/user/images/s-img2.jpg" class="img-responsive"  />
                            <img class="etalage_source_image" src="/user/images/s3.jpg" class="img-responsive"  />
                        </li>
                        <li>
                            <img class="etalage_thumb_image" src="/user/images/s4.jpg" class="img-responsive"  />
                            <img class="etalage_source_image" src="/user/images/s-img3.jpg" class="img-responsive"  />
                        </li>
                    </ul>
                    <div class="clearfix"></div>
                </div>
                <div class="desc1 span_3_of_2">
                    <h3 class="m_3">Lorem ipsum dolor sit amet</h3>
                    <p class="m_5">Rs. 888 <span class="reducedfrom">Rs. 999</span> <a href="#">click for offer</a></p>
                    <div class="btn_form">
                        <form>
                            <input type="submit" value="buy" title="">
                        </form>
                    </div>
                    <span class="m_link"><a href="#">login to save in wishlist</a> </span>
                    <p class="m_text2">Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper suscipit lobortis nisl ut aliquip ex ea commodo consequat. Duis autem vel eum iriure dolor in hendrerit in vulputate velit esse molestie consequat, vel illum dolore eu feugiat nulla facilisis at vero eros et accumsan et iusto odio dignissim qui blandit </p>
                </div>
                <div class="clear"></div>
                <div class="clients">
                    <h3 class="m_3">10 Other Products in the same category</h3>
                    <ul id="flexiselDemo3">
                        <li><img src="/user/images/s5.jpg" /><a href="#">Category</a><p>Rs 600</p></li>
                        <li><img src="/user/images/s6.jpg" /><a href="#">Category</a><p>Rs 850</p></li>
                        <li><img src="/user/images/s7.jpg" /><a href="#">Category</a><p>Rs 900</p></li>
                        <li><img src="/user/images/s8.jpg" /><a href="#">Category</a><p>Rs 550</p></li>
                        <li><img src="/user/images/s9.jpg" /><a href="#">Category</a><p>Rs 750</p></li>
                    </ul>
                    <script type="text/javascript">
                        $(window).load(function() {
                            $("#flexiselDemo1").flexisel();
                            $("#flexiselDemo2").flexisel({
                                enableResponsiveBreakpoints: true,
                                responsiveBreakpoints: {
                                    portrait: {
                                        changePoint:480,
                                        visibleItems: 1
                                    },
                                    landscape: {
                                        changePoint:640,
                                        visibleItems: 2
                                    },
                                    tablet: {
                                        changePoint:768,
                                        visibleItems: 3
                                    }
                                }
                            });

                            $("#flexiselDemo3").flexisel({
                                visibleItems: 5,
                                animationSpeed: 1000,
                                autoPlay: false,
                                autoPlaySpeed: 3000,
                                pauseOnHover: true,
                                enableResponsiveBreakpoints: true,
                                responsiveBreakpoints: {
                                    portrait: {
                                        changePoint:480,
                                        visibleItems: 1
                                    },
                                    landscape: {
                                        changePoint:640,
                                        visibleItems: 2
                                    },
                                    tablet: {
                                        changePoint:768,
                                        visibleItems: 3
                                    }
                                }
                            });

                        });
                    </script>
                    <script type="text/javascript" src="/user/js/jquery.flexisel.js"></script>
                </div>
                <div class="toogle">
                    <h3 class="m_3">Product Details</h3>
                    <p class="m_text">Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper suscipit lobortis nisl ut aliquip ex ea commodo consequat. Duis autem vel eum iriure dolor in hendrerit in vulputate velit esse molestie consequat, vel illum dolore eu feugiat nulla facilisis at vero eros et accumsan et iusto odio dignissim qui blandit praesent luptatum zzril delenit augue duis dolore te feugait nulla facilisi. Nam liber tempor cum soluta nobis eleifend option congue nihil imperdiet doming id quod mazim placerat facer possim assum.</p>
                </div>
                <div class="toogle">
                    <h3 class="m_3">More Information</h3>
                    <p class="m_text">Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper suscipit lobortis nisl ut aliquip ex ea commodo consequat. Duis autem vel eum iriure dolor in hendrerit in vulputate velit esse molestie consequat, vel illum dolore eu feugiat nulla facilisis at vero eros et accumsan et iusto odio dignissim qui blandit praesent luptatum zzril delenit augue duis dolore te feugait nulla facilisi. Nam liber tempor cum soluta nobis eleifend option congue nihil imperdiet doming id quod mazim placerat facer possim assum.</p>
                </div>
            </div>
            <div class="rsingle span_1_of_single">
                <h5 class="m_1">Categories</h5>
                <select class="dropdown" tabindex="8" data-settings='{"wrapperClass":"metro"}'>
                    <option value="1">Mens</option>
                    <option value="2">Sub Category1</option>
                    <option value="3">Sub Category2</option>
                    <option value="4">Sub Category3</option>
                </select>
                <select class="dropdown" tabindex="8" data-settings='{"wrapperClass":"metro"}'>
                    <option value="1">Womens</option>
                    <option value="2">Sub Category1</option>
                    <option value="3">Sub Category2</option>
                    <option value="4">Sub Category3</option>
                </select>
                <ul class="kids">
                    <li><a href="#">Kids</a></li>
                    <li class="last"><a href="#">Glasses Shop</a></li>
                </ul>
                <section  class="sky-form">
                    <h4>Price</h4>
                    <div class="row row1 scroll-pane">
                        <div class="col col-4">
                            <label class="checkbox"><input type="checkbox" name="checkbox" checked=""><i></i>Rs 500 - Rs 700</label>
                        </div>
                        <div class="col col-4">
                            <label class="checkbox"><input type="checkbox" name="checkbox"><i></i>Rs 700 - Rs 1000</label>
                            <label class="checkbox"><input type="checkbox" name="checkbox"><i></i>Rs 1000 - Rs 1500</label>
                            <label class="checkbox"><input type="checkbox" name="checkbox"><i></i>Rs 1500 - Rs 2000</label>
                            <label class="checkbox"><input type="checkbox" name="checkbox"><i></i>Rs 2000 - Rs 2500</label>
                            <label class="checkbox"><input type="checkbox" name="checkbox" ><i></i>Rs 2500 - Rs 3000</label>
                            <label class="checkbox"><input type="checkbox" name="checkbox"><i></i>Rs 3500 - Rs 4000</label>
                            <label class="checkbox"><input type="checkbox" name="checkbox"><i></i>Rs 4000 - Rs 4500</label>
                            <label class="checkbox"><input type="checkbox" name="checkbox"><i></i>Rs 4500 - Rs 5000</label>
                            <label class="checkbox"><input type="checkbox" name="checkbox"><i></i>Rs 5000 - Rs 5500</label>
                            <label class="checkbox"><input type="checkbox" name="checkbox"><i></i>Rs 5500 - Rs 6000</label>
                            <label class="checkbox"><input type="checkbox" name="checkbox"><i></i>Rs 6000 - Rs 6500</label>
                            <label class="checkbox"><input type="checkbox" name="checkbox"><i></i>Rs 6500 - Rs 7000</label>
                            <label class="checkbox"><input type="checkbox" name="checkbox"><i></i>Rs 7000 - Rs 7500</label>
                            <label class="checkbox"><input type="checkbox" name="checkbox"><i></i>Rs 7500 - Rs 8000</label>
                            <label class="checkbox"><input type="checkbox" name="checkbox"><i></i>Rs 8000 - Rs 8500</label>
                        </div>
                    </div>
                </section>
                <section  class="sky-form">
                    <h4>Brand Name</h4>
                    <div class="row row1 scroll-pane">
                        <div class="col col-4">
                            <label class="checkbox"><input type="checkbox" name="checkbox" checked=""><i></i>John Jacobs</label>
                        </div>
                        <div class="col col-4">
                            <label class="checkbox"><input type="checkbox" name="checkbox"><i></i>Tag Heuer</label>
                            <label class="checkbox"><input type="checkbox" name="checkbox"><i></i>Lee Cooper</label>
                            <label class="checkbox"><input type="checkbox" name="checkbox"><i></i>Mikli</label>
                            <label class="checkbox"><input type="checkbox" name="checkbox"><i></i>S Oliver</label>
                            <label class="checkbox"><input type="checkbox" name="checkbox" ><i></i>Hackett</label>
                            <label class="checkbox"><input type="checkbox" name="checkbox"><i></i>Killer</label>
                            <label class="checkbox"><input type="checkbox" name="checkbox"><i></i>IDEE</label>
                            <label class="checkbox"><input type="checkbox" name="checkbox"><i></i>Vogue</label>
                            <label class="checkbox"><input type="checkbox" name="checkbox"><i></i>Gunnar</label>
                            <label class="checkbox"><input type="checkbox" name="checkbox"><i></i>Accu Reader</label>
                            <label class="checkbox"><input type="checkbox" name="checkbox"><i></i>CAT</label>
                            <label class="checkbox"><input type="checkbox" name="checkbox"><i></i>Excellent</label>
                            <label class="checkbox"><input type="checkbox" name="checkbox"><i></i>Feelgood</label>
                            <label class="checkbox"><input type="checkbox" name="checkbox"><i></i>Odysey</label>
                            <label class="checkbox"><input type="checkbox" name="checkbox"><i></i>Animal</label>
                        </div>
                    </div>
                </section>
                <section  class="sky-form">
                    <h4>Frame Shape</h4>
                    <div class="row row1 scroll-pane">
                        <div class="col col-4">
                            <label class="checkbox"><input type="checkbox" name="checkbox" checked=""><i></i>Pilot</label>
                        </div>
                        <div class="col col-4">
                            <label class="checkbox"><input type="checkbox" name="checkbox"><i></i>Rectangle</label>
                            <label class="checkbox"><input type="checkbox" name="checkbox"><i></i>Square</label>
                            <label class="checkbox"><input type="checkbox" name="checkbox"><i></i>Round</label>
                            <label class="checkbox"><input type="checkbox" name="checkbox" ><i></i>Others</label>
                            <label class="checkbox"><input type="checkbox" name="checkbox"><i></i>Cat Eyes</label>
                            <label class="checkbox"><input type="checkbox" name="checkbox" ><i></i>Wrap Around</label>
                        </div>
                    </div>
                </section>
                <section  class="sky-form">
                    <h4>Frame Size</h4>
                    <div class="row row1 scroll-pane">
                        <div class="col col-4">
                            <label class="checkbox"><input type="checkbox" name="checkbox" checked=""><i></i>Small</label>
                        </div>
                        <div class="col col-4">
                            <label class="checkbox"><input type="checkbox" name="checkbox"><i></i>Medium</label>
                            <label class="checkbox"><input type="checkbox" name="checkbox"><i></i>Large</label>
                            <label class="checkbox"><input type="checkbox" name="checkbox"><i></i>Medium</label>
                            <label class="checkbox"><input type="checkbox" name="checkbox"><i></i>Large</label>
                        </div>
                    </div>
                </section>
                <section  class="sky-form">
                    <h4>Frame Type</h4>
                    <div class="row row1 scroll-pane">
                        <div class="col col-4">
                            <label class="checkbox"><input type="checkbox" name="checkbox" checked=""><i></i>Full Rim</label>
                        </div>
                        <div class="col col-4">
                            <label class="checkbox"><input type="checkbox" name="checkbox"><i></i>Rim Less</label>
                            <label class="checkbox"><input type="checkbox" name="checkbox"><i></i>Half Rim</label>
                            <label class="checkbox"><input type="checkbox" name="checkbox"><i></i>Rim Less</label>
                            <label class="checkbox"><input type="checkbox" name="checkbox"><i></i>Half Rim</label>
                        </div>
                    </div>
                </section>
                <section  class="sky-form">
                    <h4>Colors</h4>
                    <ul class="color-list">
                        <li><a href="#"> <span class="color1"> </span><p class="red">Red</p></a></li>
                        <li><a href="#"> <span class="color2"> </span><p class="red">Green</p></a></li>
                        <li><a href="#"> <span class="color3"> </span><p class="red">Blue</p></a></li>
                        <li><a href="#"> <span class="color4"> </span><p class="red">Yellow</p></a></li>
                        <li><a href="#"> <span class="color5"> </span><p class="red">Violet</p></a></li>
                        <li><a href="#"> <span class="color6"> </span><p class="red">Orange</p></a></li>
                        <li><a href="#"> <span class="color7"> </span><p class="red">Gray</p></a></li>
                    </ul>
                </section>
                <script src="/user/js/jquery.easydropdown.js"></script>
            </div
            <div class="clear"></div>
        </div>
        <div class="clear"></div>
    </div>
</div>
<div class="footer">
    <div class="footer-top">
        <div class="wrap">
            <div class="section group example">
                <div class="col_1_of_2 span_1_of_2">
                    <ul class="f-list">
                        <li><img src="{{asset('user/images/2.png')}}"><span class="f-text">Miễn phí ship những đơn hàng trên $ 100</span><div class="clear"></div></li>
                    </ul>
                </div>
                <div class="col_1_of_2 span_1_of_2">
                    <ul class="f-list">
                        <li><img src="{{asset('user/images/3.png')}}"><span class="f-text">Số Hotline 0866588098 </span><div class="clear"></div></li>
                    </ul>
                </div>
                <div class="clear"></div>
            </div>
        </div>
    </div>
    <div class="footer-middle">
        <div class="wrap">
            <div class="section group example">
                <div class="col_1_of_f_1 span_1_of_f_1">
                    <div class="section group example">
                        <div class="col_1_of_f_2 span_1_of_f_2">
                            <h3>Facebook</h3>
                            <script>(function(d, s, id) {
                                    var js, fjs = d.getElementsByTagName(s)[0];
                                    if (d.getElementById(id)) return;
                                    js = d.createElement(s); js.id = id;
                                    js.src = "//connect.facebook.net/en_US/all.js#xfbml=1";
                                    fjs.parentNode.insertBefore(js, fjs);
                                }(document, 'script', 'facebook-jssdk'));</script>
                            <div class="like_box">
                                <div class="fb-like-box" data-href="https://www.facebook.com/Leo-Shop-108647564280507" data-colorscheme="light" data-show-faces="true" data-header="true" data-stream="false" data-show-border="true">

                                </div>
                            </div>
                        </div>
                        <div class="col_1_of_f_2 span_1_of_f_2">
                            <h3>Twitter</h3>
                            <div class="recent-tweet">
                                <div class="recent-tweet-icon">
                                    <span> </span>
                                </div>
                                <div class="recent-tweet-info">
                                    <p><a href="https://twitter.com/Khoa95987466">Leo Shop</a></p>
                                </div>
                                <div class="clear"> </div>
                            </div>
                        </div>
                        <div class="clear"></div>
                    </div>
                </div>
                <div class="col_1_of_f_1 span_1_of_f_1">
                    <div class="section group example">
                        <div class="col_1_of_f_2 span_1_of_f_2">

                        </div>
                        <div class="col_1_of_f_2 span_1_of_f_2">
                            <h3>Liên hệ</h3>
                            <div class="company_address">
                                <p>Số 8, Tôn Thất Thuyết, Mỹ Đình,</p>
                                <p> Từ Liêm, Hà Nội.</p>
                                <p>Việt Nam</p>
                                <p>Hotline:0866588098</p>
                                <p>Fax: (000) 000 00 00 0</p>
                                <p>Email: <span>khoaphth1907037@fpt.edu.vn</span></p>

                            </div>
                            <div class="social-media">
                                <ul>
                                    <li> <span class="simptip-position-bottom simptip-movable" data-tooltip="Google"><a href="mailto:khoaphth1907037@fpt.edu.vn"></a><br></span></li>
                                    <li><span class="simptip-position-bottom simptip-movable" data-tooltip="Linked in"><a href="https://www.facebook.com/Leo-Shop-108647564280507" target="_blank"> </a> </span></li>
                                    <li><span class="simptip-position-bottom simptip-movable" data-tooltip="Rss"><a href="https://www.facebook.com/Leo-Shop-108647564280507" target="_blank"> </a></span></li>
                                    <li><span class="simptip-position-bottom simptip-movable" data-tooltip="Facebook"><a href="https://www.facebook.com/Leo-Shop-108647564280507" target="_blank"> </a></span></li>
                                </ul>
                            </div>
                        </div>
                        <div class="clear"></div>
                    </div>
                </div>
                <div class="clear"></div>
            </div>
        </div>
    </div>
    <div class="footer-bottom">
        <div class="wrap">
            <div class="f-list2">
                <ul>
                    <li><a href="/delivery1">Câu hỏi thường gặp</a></li> |
                    <li><a href="/delivery">Điều khoản sử dụng</a></li> |
                    <li><a href="/delivery1">Quyền riêng tư</a></li> |
                    <li><a href="/contact">Liên hệ</a></li>
                </ul>
            </div>
            <div class="clear"></div>
        </div>
    </div>
</div>

</body>
</html>
