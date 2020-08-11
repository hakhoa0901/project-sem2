@extends('user.layouts.master')

@section('content')
    <div class="mens">
        <div class="main">
            <div class="wrap">
                <div class="cont span_2_of_3">
                    <h2 class="head">Kính Nam</h2>
                    <div class="mens-toolbar">
                        <div class="sort">
                            <div class="sort-by">
                                <label>Xếp theo</label>
                                <select>
                                    <option value="">
                                        Tên                </option>
                                    <option value="">
                                        Giá                </option>
                                </select>
                                <a href=""><img src="/user/images/arrow2.gif" alt="" class="v-middle"></a>
                            </div>
                        </div>
                        <div class="pager">

                            <ul class="dc_pagination dc_paginationA dc_paginationA06">
                                <li><a href="#" class="previous">Pages</a></li>
                                <li><a href="#">1</a></li>
                                <li><a href="#">2</a></li>
                                <li><a href="#">3</a></li>
                                <li><a href="#">4</a></li>
                                <li><a href="#">5</a></li>
                                <li><a href="#">6</a></li>
                                <li><a href="#">7</a></li>
                                <li><a href="#">8</a></li>
                                <li><a href="#">9</a></li>
                            </ul>
                            <div class="clear"></div>
                        </div>
                        <div class="clear"></div>
                    </div>
                    <div class="top-box">
                        @foreach($products as $prd)
                        <div class="col_1_of_3 span_1_of_3">
                                <div class="inner_content clearfix">
                                    <a href="single.html">
                                    <div class="product_image">
                                        <img src="/user/images/{{$prd->images}}" alt=""/>
                                    </div>
                                    </a>
                                    <div class="sale-box"><span class="on_sale title_shop">New</span></div>
                                    <div class="price">
                                        <div class="cart-left">
                                            <p class="title">{{$prd->name}}</p>
                                            <div class="price1">
                                                <span class="actual">{{$prd->price}} VND</span>
                                            </div>
                                        </div>
                                        <a href="single.html">
                                        <div class="cart-right"> </div>
                                        </a>
                                        <div class="clear"></div>
                                    </div>
                                </div>
                        </div>
                        @endforeach
{{--                        <div class="col_1_of_3 span_1_of_3">--}}
{{--                            <div class="inner_content clearfix">--}}
{{--                                <a href="single.html">--}}
{{--                                    <div class="product_image">--}}
{{--                                        <img src="/user/images/pic.jpg" alt=""/>--}}
{{--                                    </div>--}}
{{--                                </a>--}}
{{--                                <div class="sale-box"><span class="on_sale title_shop">New</span></div>--}}
{{--                                <div class="price">--}}
{{--                                    <div class="cart-left">--}}
{{--                                        <p class="title">Lorem Ipsum simply</p>--}}
{{--                                        <div class="price1">--}}
{{--                                            <span class="actual">$12.00</span>--}}
{{--                                        </div>--}}
{{--                                    </div>--}}
{{--                                    <a href="single.html">--}}
{{--                                        <div class="cart-right"> </div>--}}
{{--                                    </a>--}}
{{--                                    <div class="clear"></div>--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                        <div class="col_1_of_3 span_1_of_3">--}}
{{--                            <div class="inner_content clearfix">--}}
{{--                                <a href="single.html">--}}
{{--                                    <div class="product_image">--}}
{{--                                        <img src="/user/images/pic.jpg" alt=""/>--}}
{{--                                    </div>--}}
{{--                                </a>--}}
{{--                                <div class="sale-box"><span class="on_sale title_shop">New</span></div>--}}
{{--                                <div class="price">--}}
{{--                                    <div class="cart-left">--}}
{{--                                        <p class="title">Lorem Ipsum simply</p>--}}
{{--                                        <div class="price1">--}}
{{--                                            <span class="actual">$12.00</span>--}}
{{--                                        </div>--}}
{{--                                    </div>--}}
{{--                                    <a href="single.html">--}}
{{--                                        <div class="cart-right"> </div>--}}
{{--                                    </a>--}}
{{--                                    <div class="clear"></div>--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                        </div>--}}
                        <div class="clear"></div>
                    </div>
                    <div class="top-box">
                        <div class="col_1_of_3 span_1_of_3">
                            <div class="inner_content clearfix">
                                <a href="single.html">
                                    <div class="product_image">
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
                                    <a href="single.html">
                                        <div class="cart-right"> </div>
                                    </a>
                                    <div class="clear"></div>
                                </div>
                            </div>
                        </div>
                        <div class="clear"></div>
                    </div>
                    <h2 class="head">Staff Pick</h2>
                    <div class="top-box1">
                        <div class="col_1_of_3 span_1_of_3">
                            <div class="inner_content clearfix">
                                <a href="single.html">
                                    <div class="product_image">
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
                                    <a href="single.html">
                                        <div class="cart-right"> </div>
                                    </a>
                                    <div class="clear"></div>
                                </div>
                            </div>
                        </div>
                        <div class="clear"></div>
                    </div>
                    <h2 class="head">New Products</h2>
                    <div class="section group">
                        <div class="col_1_of_3 span_1_of_3">
                            <div class="inner_content clearfix">
                                <a href="single.html">
                                    <div class="product_image">
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
                                    <a href="single.html">
                                        <div class="cart-right"> </div>
                                    </a>
                                    <div class="clear"></div>
                                </div>
                            </div>
                        </div>
                        <div class="clear"></div>
                    </div>
                </div>
                <div class="rsidebar span_1_of_left">
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
                </div>
                <div class="clear"></div>
            </div>
        </div>
    </div>
    <script src="/user/js/jquery.easydropdown.js"></script>




@endsection
