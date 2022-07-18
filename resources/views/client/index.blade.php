@extends('client.layouts.master')


@section('client_content')
    <div class="fullwidth-template">
        <div class="slide-home-04">

            <div class="response-product product-list-owl owl-slick equal-container better-height"
                 data-slick="{&quot;arrows&quot;:false,&quot;slidesMargin&quot;:0,&quot;dots&quot;:true,&quot;infinite&quot;:false,&quot;speed&quot;:300,&quot;slidesToShow&quot;:1,&quot;rows&quot;:1}"
                 data-responsive="[{&quot;breakpoint&quot;:480,&quot;settings&quot;:{&quot;slidesToShow&quot;:1,&quot;slidesMargin&quot;:&quot;0&quot;}},{&quot;breakpoint&quot;:768,&quot;settings&quot;:{&quot;slidesToShow&quot;:1,&quot;slidesMargin&quot;:&quot;0&quot;}},{&quot;breakpoint&quot;:992,&quot;settings&quot;:{&quot;slidesToShow&quot;:1,&quot;slidesMargin&quot;:&quot;0&quot;}},{&quot;breakpoint&quot;:1200,&quot;settings&quot;:{&quot;slidesToShow&quot;:1,&quot;slidesMargin&quot;:&quot;0&quot;}},{&quot;breakpoint&quot;:1500,&quot;settings&quot;:{&quot;slidesToShow&quot;:1,&quot;slidesMargin&quot;:&quot;0&quot;}}]">
                @foreach($listBanners as $key=>$item)
                    <div class="slide-wrap">
                        <img src="{{'/storage/app/public/'.$item->image}}" alt="image">
                        <div class="slide-info">
                            <div class="container">
                                <div class="slide-inner">
                                    <h2>{{$item->name}}</h2>
                                    <h1>{!! $item->brief !!}</h1>
                                    {{--<h5>Price from:<strong>$75.00</strong></h5>--}}
                                    <a href="{{$item->link}}">Shop now</a>
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
        <div class="section-0211">
            <div class="container">
                <div class="row">
                    <div class="col-md-5">
                        <div class="kodory-banner style-01 left-top new">
                            <div class="banner-inner">
                                <figure class="banner-thumb">
                                    <img src="{{str_replace('/original/', '/new_collection/', '/storage/app/public/'.$getBannerNewCollection[0]->image)}}"
                                         class="attachment-full size-full" alt="img">
                                </figure>
                                <div class="banner-info ">
                                    <div class="banner-content">
                                        <div class="title-wrap">
                                            <h6 class="title">
                                                <a target="{{$getBannerNewCollection[0]->target}}" href="{{$getBannerNewCollection[0]->link}}">{{$getBannerNewCollection[0]->name}}</a>
                                            </h6>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-7">
                        <div class="kodory-banner style-01 left-center">
                            <div class="banner-inner">
                                <figure class="banner-thumb">
                                    <img src="{{str_replace('/original/', '/with_style/', '/storage/app/public/'.$getBannerWithStyle[0]->image)}}"
                                         class="attachment-full size-full" alt="img">
                                </figure>
                                <div class="banner-info ">
                                    <div class="banner-content">
                                        <div class="title-wrap">
                                            <h6 class="title">
                                                <a target="{{$getBannerWithStyle[0]->target}}" href="{{$getBannerWithStyle[0]->link}}">{{$getBannerWithStyle[0]->name}}</a>
                                            </h6>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            @foreach($getBannerSetStyle as $item)
                                <div class="col-6">
                                    <div class="kodory-banner style-01 left-top  kodory_custom_5d67efefec0b8 ">
                                        <div class="banner-inner">
                                            <figure class="banner-thumb">
                                                <img src="{{str_replace('/original/', '/set_style/', '/storage/app/public/'.$item->image)}}"
                                                     class="attachment-full size-full" alt="img"></figure>
                                            <div class="banner-info ">
                                                <div class="banner-content">
                                                    <div class="title-wrap">
                                                        <h6 class="title">
                                                            <a target="{{$item->target}}" href="#">{{$item->name}}</a>
                                                        </h6>
                                                    </div>
                                                    <div class="button-wrap">
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            @endforeach
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="section-022">
            <div class="container">
                <div class="kodory-tabs style-01">
                    <div class="tab-head">
                        <ul class="tab-link equal-container " data-loop="1">
                            <li class="active">
                                <a class="loaded" data-ajax="0" data-animate="" data-section="1547652538969-4e9e849f-123a"
                                   data-id="330" href="#1547652538969-4e9e849f-123a-5d80aefaa70e2">
                                    <span>New Arrival</span>
                                </a>
                            </li>
                            <li class="">
                                <a class="" data-ajax="0" data-animate="" data-section="1547652726354-2b0cdba5-80e9"
                                   data-id="330" href="#1547652726354-2b0cdba5-80e9-5d80aefaa70e2">
                                    <span>Top Rated</span>
                                </a>
                            </li>
                            <li class="">
                                <a class="" data-ajax="0" data-animate="" data-section="1547652725565-7e88bea3-ede2"
                                   data-id="330" href="#1547652725565-7e88bea3-ede2-5d80aefaa70e2">
                                    <span>Featured</span>
                                </a>
                            </li>
                        </ul>
                    </div>
                    <div class="tab-container">
                        <div class="tab-panel active" id="1547652538969-4e9e849f-123a-5d80aefaa70e2">
                            <div class="kodory-products style-01">
                                <div class="response-product product-list-grid row auto-clear equal-container better-height ">
                                    <div class="product-item recent-product style-01 rows-space-30 col-bg-3 col-xl-3 col-lg-4 col-md-4 col-sm-6 col-ts-6 post-93 product type-product status-publish has-post-thumbnail product_cat-light product_cat-table product_cat-new-arrivals product_tag-table product_tag-sock first instock shipping-taxable purchasable product-type-simple">
                                        <div class="product-inner tooltip-left">
                                            <div class="product-thumb">
                                                <a class="thumb-link"
                                                   href="single-product.html">
                                                    <img class="img-responsive"
                                                         src="client_asset/images/apro13-1-270x350.jpg"
                                                         alt="Hello Shirt" width="270" height="350">
                                                </a>
                                                <div class="flash">
                                                    <span class="onnew"><span class="text">New</span></span></div>
                                                <div class="group-button">
                                                    <div class="yith-wcwl-add-to-wishlist">
                                                        <div class="yith-wcwl-add-button show">
                                                            <a href="wishlist.html" class="add_to_wishlist">Add to Wishlist</a>
                                                        </div>
                                                    </div>
                                                    <div class="kodory product compare-button">
                                                        <a href="compare.html" class="compare button">Compare</a>
                                                    </div>
                                                    <a href="#" class="button yith-wcqv-button">Quick View</a>
                                                    <div class="add-to-cart">
                                                        <a href="cart.html"
                                                           class="button product_type_simple add_to_cart_button ajax_add_to_cart">Add
                                                            to cart</a>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="product-info equal-elem">
                                                <h3 class="product-name product_title">
                                                    <a href="single-product.html">Hello Shirt</a>
                                                </h3>
                                                <div class="rating-wapper nostar">
                                                    <div class="star-rating"><span style="width:0%">Rated <strong
                                                                class="rating">0</strong> out of 5</span></div>
                                                    <span class="review">(0)</span></div>
                                                <span class="price"><span class="kodory-Price-amount amount"><span
                                                            class="kodory-Price-currencySymbol">$</span>109.00</span></span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="product-item recent-product style-01 rows-space-30 col-bg-3 col-xl-3 col-lg-4 col-md-4 col-sm-6 col-ts-6 post-49 product type-product status-publish has-post-thumbnail product_cat-light product_cat-bed product_cat-sofas product_tag-multi product_tag-lamp  instock shipping-taxable purchasable product-type-simple">
                                        <div class="product-inner tooltip-left">
                                            <div class="product-thumb">
                                                <a class="thumb-link"
                                                   href="single-product.html">
                                                    <img class="img-responsive"
                                                         src="client_asset/images/apro302-270x350.jpg"
                                                         alt="Cute Shoes" width="270" height="350">
                                                </a>
                                                <div class="flash">
                                                    <span class="onnew"><span class="text">New</span></span></div>
                                                <div class="group-button">
                                                    <div class="yith-wcwl-add-to-wishlist">
                                                        <div class="yith-wcwl-add-button show">
                                                            <a href="wishlist.html" class="add_to_wishlist">Add to Wishlist</a>
                                                        </div>
                                                    </div>
                                                    <div class="kodory product compare-button">
                                                        <a href="compare.html" class="compare button">Compare</a>
                                                    </div>
                                                    <a href="#" class="button yith-wcqv-button">Quick View</a>
                                                    <div class="add-to-cart">
                                                        <a href="cart.html"
                                                           class="button product_type_simple add_to_cart_button ajax_add_to_cart">Add
                                                            to cart</a>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="product-info equal-elem">
                                                <h3 class="product-name product_title">
                                                    <a href="single-product.html">Cute Shoes</a>
                                                </h3>
                                                <div class="rating-wapper nostar">
                                                    <div class="star-rating"><span style="width:0%">Rated <strong
                                                                class="rating">0</strong> out of 5</span></div>
                                                    <span class="review">(0)</span></div>
                                                <span class="price"><span class="kodory-Price-amount amount"><span
                                                            class="kodory-Price-currencySymbol">$</span>79.00</span></span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="product-item recent-product style-01 rows-space-30 col-bg-3 col-xl-3 col-lg-4 col-md-4 col-sm-6 col-ts-6 post-37 product type-product status-publish has-post-thumbnail product_cat-chair product_cat-bed product_tag-light product_tag-hat product_tag-sock last instock shipping-taxable purchasable product-type-simple">
                                        <div class="product-inner tooltip-left">
                                            <div class="product-thumb">
                                                <a class="thumb-link" href="single-product.html">
                                                    <img class="img-responsive"
                                                         src="client_asset/images/apro31-1-270x350.jpg"
                                                         alt="Cute Girl Shirt" width="270" height="350">
                                                </a>
                                                <div class="flash">
                                                    <span class="onnew"><span class="text">New</span></span></div>
                                                <div class="group-button">
                                                    <div class="yith-wcwl-add-to-wishlist">
                                                        <div class="yith-wcwl-add-button show">
                                                            <a href="wishlist.html" class="add_to_wishlist">Add to Wishlist</a>
                                                        </div>
                                                    </div>
                                                    <div class="kodory product compare-button">
                                                        <a href="compare.html" class="compare button">Compare</a>
                                                    </div>
                                                    <a href="#" class="button yith-wcqv-button">Quick View</a>
                                                    <div class="add-to-cart">
                                                        <a href="cart.html"
                                                           class="button product_type_simple add_to_cart_button ajax_add_to_cart">Add
                                                            to cart</a>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="product-info equal-elem">
                                                <h3 class="product-name product_title">
                                                    <a href="single-product.html">Cute Girl Shirt</a>
                                                </h3>
                                                <div class="rating-wapper nostar">
                                                    <div class="star-rating"><span style="width:0%">Rated <strong
                                                                class="rating">0</strong> out of 5</span></div>
                                                    <span class="review">(0)</span></div>
                                                <span class="price"><span class="kodory-Price-amount amount"><span
                                                            class="kodory-Price-currencySymbol">$</span>120.00</span></span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="product-item recent-product style-01 rows-space-30 col-bg-3 col-xl-3 col-lg-4 col-md-4 col-sm-6 col-ts-6 post-36 product type-product status-publish has-post-thumbnail product_cat-table product_cat-bed product_tag-light product_tag-table product_tag-sock first instock sale shipping-taxable purchasable product-type-simple">
                                        <div class="product-inner tooltip-left">
                                            <div class="product-thumb">
                                                <a class="thumb-link"
                                                   href="single-product.html">
                                                    <img class="img-responsive"
                                                         src="client_asset/images/apro51012-1-270x350.jpg"
                                                         alt="Dazzling Toys" width="270" height="350">
                                                </a>
                                                <div class="flash">
                                                    <span class="onsale"><span class="number">-21%</span></span>
                                                    <span class="onnew"><span class="text">New</span></span></div>
                                                <div class="group-button">
                                                    <div class="yith-wcwl-add-to-wishlist">
                                                        <div class="yith-wcwl-add-button show">
                                                            <a href="wishlist.html" class="add_to_wishlist">Add to Wishlist</a>
                                                        </div>
                                                    </div>
                                                    <div class="kodory product compare-button">
                                                        <a href="compare.html" class="compare button">Compare</a>
                                                    </div>
                                                    <a href="#" class="button yith-wcqv-button">Quick View</a>
                                                    <div class="add-to-cart">
                                                        <a href="cart.html"
                                                           class="button product_type_simple add_to_cart_button ajax_add_to_cart">Add
                                                            to cart</a>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="product-info equal-elem">
                                                <h3 class="product-name product_title">
                                                    <a href="single-product.html">Dazzling Toys</a>
                                                </h3>
                                                <div class="rating-wapper nostar">
                                                    <div class="star-rating"><span style="width:0%">Rated <strong
                                                                class="rating">0</strong> out of 5</span></div>
                                                    <span class="review">(0)</span></div>
                                                <span class="price"><del><span class="kodory-Price-amount amount"><span
                                                                class="kodory-Price-currencySymbol">$</span>125.00</span></del> <ins><span
                                                            class="kodory-Price-amount amount"><span
                                                                class="kodory-Price-currencySymbol">$</span>99.00</span></ins></span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="product-item recent-product style-01 rows-space-30 col-bg-3 col-xl-3 col-lg-4 col-md-4 col-sm-6 col-ts-6 post-35 product type-product status-publish has-post-thumbnail product_cat-chair product_cat-new-arrivals product_cat-lamp product_tag-light product_tag-hat product_tag-sock  instock shipping-taxable purchasable product-type-simple">
                                        <div class="product-inner tooltip-left">
                                            <div class="product-thumb">
                                                <a class="thumb-link"
                                                   href="single-product.html">
                                                    <img class="img-responsive"
                                                         src="client_asset/images/apro41-1-270x350.jpg"
                                                         alt="Cute Shoes" width="270" height="350">
                                                </a>
                                                <div class="flash">
                                                    <span class="onnew"><span class="text">New</span></span></div>
                                                <div class="group-button">
                                                    <div class="yith-wcwl-add-to-wishlist">
                                                        <div class="yith-wcwl-add-button show">
                                                            <a href="wishlist.html" class="add_to_wishlist">Add to Wishlist</a>
                                                        </div>
                                                    </div>
                                                    <div class="kodory product compare-button">
                                                        <a href="compare.html" class="compare button">Compare</a>
                                                    </div>
                                                    <a href="#" class="button yith-wcqv-button">Quick View</a>
                                                    <div class="add-to-cart">
                                                        <a href="cart.html"
                                                           class="button product_type_simple add_to_cart_button ajax_add_to_cart">Add
                                                            to cart</a>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="product-info equal-elem">
                                                <h3 class="product-name product_title">
                                                    <a href="single-product.html">Cute Shoes</a>
                                                </h3>
                                                <div class="rating-wapper nostar">
                                                    <div class="star-rating"><span style="width:0%">Rated <strong
                                                                class="rating">0</strong> out of 5</span></div>
                                                    <span class="review">(0)</span></div>
                                                <span class="price"><span class="kodory-Price-amount amount"><span
                                                            class="kodory-Price-currencySymbol">$</span>134.00</span></span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="product-item recent-product style-01 rows-space-30 col-bg-3 col-xl-3 col-lg-4 col-md-4 col-sm-6 col-ts-6 post-34 product type-product status-publish has-post-thumbnail product_cat-light product_cat-new-arrivals product_tag-light product_tag-hat product_tag-sock last instock sale featured shipping-taxable product-type-grouped">
                                        <div class="product-inner tooltip-left">
                                            <div class="product-thumb">
                                                <a class="thumb-link"
                                                   href="single-product.html">
                                                    <img class="img-responsive"
                                                         src="client_asset/images/apro61-1-270x350.jpg"
                                                         alt="Shark Shirt" width="270" height="350">
                                                </a>
                                                <div class="flash">
                                                    <span class="onnew"><span class="text">New</span></span></div>
                                                <div class="group-button">
                                                    <div class="yith-wcwl-add-to-wishlist">
                                                        <div class="yith-wcwl-add-button show">
                                                            <a href="wishlist.html" class="add_to_wishlist">Add to Wishlist</a>
                                                        </div>
                                                    </div>
                                                    <div class="kodory product compare-button">
                                                        <a href="compare.html" class="compare button">Compare</a>
                                                    </div>
                                                    <a href="#" class="button yith-wcqv-button">Quick View</a>
                                                    <div class="add-to-cart">
                                                        <a href="cart.html"
                                                           class="button product_type_simple add_to_cart_button ajax_add_to_cart">Add
                                                            to cart</a>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="product-info equal-elem">
                                                <h3 class="product-name product_title">
                                                    <a href="single-product.html">Shark Shirt</a>
                                                </h3>
                                                <div class="rating-wapper nostar">
                                                    <div class="star-rating"><span style="width:0%">Rated <strong
                                                                class="rating">0</strong> out of 5</span></div>
                                                    <span class="review">(0)</span></div>
                                                <span class="price"><span class="kodory-Price-amount amount"><span
                                                            class="kodory-Price-currencySymbol">$</span>79.00</span> – <span
                                                        class="kodory-Price-amount amount"><span
                                                            class="kodory-Price-currencySymbol">$</span>139.00</span></span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="product-item recent-product style-01 rows-space-30 col-bg-3 col-xl-3 col-lg-4 col-md-4 col-sm-6 col-ts-6 post-32 product type-product status-publish has-post-thumbnail product_cat-light product_cat-chair product_cat-sofas product_tag-hat product_tag-sock first instock sale featured shipping-taxable purchasable product-type-simple">
                                        <div class="product-inner tooltip-left">
                                            <div class="product-thumb">
                                                <a class="thumb-link"
                                                   href="single-product.html">
                                                    <img class="img-responsive"
                                                         src="client_asset/images/apro71-1-270x350.jpg"
                                                         alt="Kid Backpack" width="270" height="350">
                                                </a>
                                                <div class="flash">
                                                    <span class="onsale"><span class="number">-18%</span></span>
                                                    <span class="onnew"><span class="text">New</span></span></div>
                                                <div class="group-button">
                                                    <div class="yith-wcwl-add-to-wishlist">
                                                        <div class="yith-wcwl-add-button show">
                                                            <a href="wishlist.html" class="add_to_wishlist">Add to Wishlist</a>
                                                        </div>
                                                    </div>
                                                    <div class="kodory product compare-button">
                                                        <a href="compare.html" class="compare button">Compare</a>
                                                    </div>
                                                    <a href="#" class="button yith-wcqv-button">Quick View</a>
                                                    <div class="add-to-cart">
                                                        <a href="cart.html"
                                                           class="button product_type_simple add_to_cart_button ajax_add_to_cart">Add
                                                            to cart</a>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="product-info equal-elem">
                                                <h3 class="product-name product_title">
                                                    <a href="single-product.html">Kid Backpack</a>
                                                </h3>
                                                <div class="rating-wapper nostar">
                                                    <div class="star-rating"><span style="width:0%">Rated <strong
                                                                class="rating">0</strong> out of 5</span></div>
                                                    <span class="review">(0)</span></div>
                                                <span class="price"><del><span class="kodory-Price-amount amount"><span
                                                                class="kodory-Price-currencySymbol">$</span>109.00</span></del> <ins><span
                                                            class="kodory-Price-amount amount"><span
                                                                class="kodory-Price-currencySymbol">$</span>89.00</span></ins></span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="product-item recent-product style-01 rows-space-30 col-bg-3 col-xl-3 col-lg-4 col-md-4 col-sm-6 col-ts-6 post-33 product type-product status-publish has-post-thumbnail product_cat-chair product_cat-table product_cat-lamp product_tag-light product_tag-table product_tag-hat  instock shipping-taxable purchasable product-type-variable has-default-attributes">
                                        <div class="product-inner tooltip-left">
                                            <div class="product-thumb">
                                                <a class="thumb-link"
                                                   href="single-product.html">
                                                    <img class="img-responsive"
                                                         src="client_asset/images/apro83-1-270x350.jpg"
                                                         alt="Glasses" width="270" height="350">
                                                </a>
                                                <div class="flash">
                                                    <span class="onnew"><span class="text">New</span></span></div>
                                                <form class="variations_form cart">
                                                    <table class="variations">
                                                        <tbody>
                                                        <tr>
                                                            <td class="value">
                                                                <select title="box_style" data-attributetype="box_style"
                                                                        data-id="pa_color"
                                                                        class="attribute-select " name="attribute_pa_color"
                                                                        data-attribute_name="attribute_pa_color"
                                                                        data-show_option_none="yes">
                                                                    <option data-type="" data-pa_color="" value="">Choose an
                                                                        option
                                                                    </option>
                                                                    <option data-width="30" data-height="30"
                                                                            data-type="color" data-pa_color="#000000"
                                                                            value="black" class="attached enabled">Black
                                                                    </option>
                                                                    <option data-width="30" data-height="30"
                                                                            data-type="color" data-pa_color="#b6b8ba"
                                                                            value="red" class="attached enabled">Red
                                                                    </option>
                                                                </select>
                                                                <div class="data-val attribute-pa_color"
                                                                     data-attributetype="box_style">
                                                                    <label>
                                                                        <input type="radio" name="color">
                                                                        <span class="change-value color"
                                                                              style="background: #3155e2;"
                                                                              data-value="blue">
                                                                    </span>
                                                                    </label>
                                                                    <label>
                                                                        <input type="radio" name="color">
                                                                        <span class="change-value color"
                                                                              style="background: #52b745;"
                                                                              data-value="green">
                                                                    </span>
                                                                    </label>
                                                                    <label>
                                                                        <input type="radio" name="color">
                                                                        <span class="change-value color"
                                                                              style="background: #ffe59e;"
                                                                              data-value="pink">
                                                                    </span>
                                                                    </label>
                                                                </div>
                                                                <a class="reset_variations" href="#"
                                                                   style="visibility: hidden;">Clear</a></td>
                                                        </tr>
                                                        </tbody>
                                                    </table>
                                                </form>
                                                <div class="group-button">
                                                    <div class="yith-wcwl-add-to-wishlist">
                                                        <div class="yith-wcwl-add-button show">
                                                            <a href="wishlist.html" class="add_to_wishlist">Add to Wishlist</a>
                                                        </div>
                                                    </div>
                                                    <div class="kodory product compare-button">
                                                        <a href="compare.html" class="compare button">Compare</a>
                                                    </div>
                                                    <a href="#" class="button yith-wcqv-button">Quick View</a>
                                                    <div class="add-to-cart">
                                                        <a href="cart.html"
                                                           class="button product_type_simple add_to_cart_button ajax_add_to_cart">Select
                                                            options</a>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="product-info equal-elem">
                                                <h3 class="product-name product_title">
                                                    <a href="single-product.html">Star Shoes</a>
                                                </h3>
                                                <div class="rating-wapper nostar">
                                                    <div class="star-rating"><span style="width:0%">Rated <strong
                                                                class="rating">0</strong> out of 5</span></div>
                                                    <span class="review">(0)</span></div>
                                                <span class="price"><span class="kodory-Price-amount amount"><span
                                                            class="kodory-Price-currencySymbol">$</span>56.00</span> – <span
                                                        class="kodory-Price-amount amount"><span
                                                            class="kodory-Price-currencySymbol">$</span>60.00</span></span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- OWL Products -->
                            </div>
                        </div>
                        <div class="tab-panel " id="1547652726354-2b0cdba5-80e9-5d80aefaa70e2">
                            <div class="kodory-products style-01   kodory_custom_5d67efefedff9 ">
                                <div class="response-product product-list-grid row auto-clear equal-container better-height ">
                                    <div class="product-item top-rated style-01 rows-space-30 col-bg-3 col-xl-3 col-lg-4 col-md-4 col-sm-6 col-ts-6 post-26 product type-product status-publish has-post-thumbnail product_cat-light product_cat-chair product_cat-sofas product_tag-light product_tag-hat last instock featured shipping-taxable product-type-external">
                                        <div class="product-inner tooltip-left">
                                            <div class="product-thumb">
                                                <a class="thumb-link"
                                                   href="single-product.html">
                                                    <img class="img-responsive"
                                                         src="client_asset/images/apro141-1-270x350.jpg"
                                                         alt="Red Car" width="270" height="350">
                                                </a>
                                                <div class="flash">
                                                    <span class="onnew"><span class="text">New</span></span></div>
                                                <div class="group-button">
                                                    <div class="yith-wcwl-add-to-wishlist">
                                                        <div class="yith-wcwl-add-button show">
                                                            <a href="wishlist.html" class="add_to_wishlist">Add to Wishlist</a>
                                                        </div>
                                                    </div>
                                                    <div class="kodory product compare-button">
                                                        <a href="compare.html" class="compare button">Compare</a>
                                                    </div>
                                                    <a href="#" class="button yith-wcqv-button">Quick View</a>
                                                    <div class="add-to-cart">
                                                        <a href="cart.html"
                                                           class="button product_type_simple add_to_cart_button ajax_add_to_cart">Buy
                                                            it on Amazon</a>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="product-info equal-elem">
                                                <h3 class="product-name product_title">
                                                    <a href="single-product.html">Dining Teddy Bear</a>
                                                </h3>
                                                <div class="rating-wapper ">
                                                    <div class="star-rating"><span style="width:100%">Rated <strong
                                                                class="rating">5.00</strong> out of 5</span></div>
                                                    <span class="review">(1)</span></div>
                                                <span class="price"><span class="kodory-Price-amount amount"><span
                                                            class="kodory-Price-currencySymbol">$</span>207.00</span></span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="product-item top-rated style-01 rows-space-30 col-bg-3 col-xl-3 col-lg-4 col-md-4 col-sm-6 col-ts-6 post-28 product type-product status-publish has-post-thumbnail product_cat-light product_cat-chair product_cat-sofas product_tag-light product_tag-sock first instock sale featured shipping-taxable purchasable product-type-simple">
                                        <div class="product-inner tooltip-left">
                                            <div class="product-thumb">
                                                <a class="thumb-link"
                                                   href="single-product.html">
                                                    <img class="img-responsive"
                                                         src="client_asset/images/apro1211-2-270x350.jpg"
                                                         alt="Blue Shoes" width="270" height="350">
                                                </a>
                                                <div class="flash">
                                                    <span class="onsale"><span class="number">-14%</span></span>
                                                    <span class="onnew"><span class="text">New</span></span></div>
                                                <div class="group-button">
                                                    <div class="yith-wcwl-add-to-wishlist">
                                                        <div class="yith-wcwl-add-button show">
                                                            <a href="wishlist.html" class="add_to_wishlist">Add to Wishlist</a>
                                                        </div>
                                                    </div>
                                                    <div class="kodory product compare-button">
                                                        <a href="compare.html" class="compare button">Compare</a>
                                                    </div>
                                                    <a href="#" class="button yith-wcqv-button">Quick View</a>
                                                    <div class="add-to-cart">
                                                        <a href="cart.html"
                                                           class="button product_type_simple add_to_cart_button ajax_add_to_cart">Add
                                                            to cart</a>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="product-info equal-elem">
                                                <h3 class="product-name product_title">
                                                    <a href="single-product.html">Blue Shoes</a>
                                                </h3>
                                                <div class="rating-wapper ">
                                                    <div class="star-rating"><span style="width:100%">Rated <strong
                                                                class="rating">5.00</strong> out of 5</span></div>
                                                    <span class="review">(1)</span></div>
                                                <span class="price"><del><span class="kodory-Price-amount amount"><span
                                                                class="kodory-Price-currencySymbol">$</span>138.00</span></del> <ins><span
                                                            class="kodory-Price-amount amount"><span
                                                                class="kodory-Price-currencySymbol">$</span>119.00</span></ins></span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="product-item top-rated style-01 rows-space-30 col-bg-3 col-xl-3 col-lg-4 col-md-4 col-sm-6 col-ts-6 post-20 product type-product status-publish has-post-thumbnail product_cat-light product_cat-new-arrivals product_cat-specials product_tag-table product_tag-hat product_tag-sock  instock sale featured shipping-taxable purchasable product-type-simple">
                                        <div class="product-inner tooltip-left">
                                            <div class="product-thumb">
                                                <a class="thumb-link"
                                                   href="single-product.html">
                                                    <img class="img-responsive"
                                                         src="client_asset/images/apro201-1-270x350.jpg"
                                                         alt="Red Car" width="270" height="350">
                                                </a>
                                                <div class="flash">
                                                    <span class="onsale"><span class="number">-7%</span></span>
                                                    <span class="onnew"><span class="text">New</span></span></div>
                                                <div class="group-button">
                                                    <div class="yith-wcwl-add-to-wishlist">
                                                        <div class="yith-wcwl-add-button show">
                                                            <a href="wishlist.html" class="add_to_wishlist">Add to Wishlist</a>
                                                        </div>
                                                    </div>
                                                    <div class="kodory product compare-button">
                                                        <a href="compare.html" class="compare button">Compare</a>
                                                    </div>
                                                    <a href="#" class="button yith-wcqv-button">Quick View</a>
                                                    <div class="add-to-cart">
                                                        <a href="cart.html"
                                                           class="button product_type_simple add_to_cart_button ajax_add_to_cart">Add
                                                            to cart</a>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="product-info equal-elem">
                                                <h3 class="product-name product_title">
                                                    <a href="single-product.html">Red Car</a>
                                                </h3>
                                                <div class="rating-wapper nostar">
                                                    <div class="star-rating"><span style="width:0%">Rated <strong
                                                                class="rating">0</strong> out of 5</span></div>
                                                    <span class="review">(0)</span></div>
                                                <span class="price"><del><span class="kodory-Price-amount amount"><span
                                                                class="kodory-Price-currencySymbol">$</span>150.00</span></del> <ins><span
                                                            class="kodory-Price-amount amount"><span
                                                                class="kodory-Price-currencySymbol">$</span>139.00</span></ins></span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="product-item top-rated style-01 rows-space-30 col-bg-3 col-xl-3 col-lg-4 col-md-4 col-sm-6 col-ts-6 post-33 product type-product status-publish has-post-thumbnail product_cat-chair product_cat-table product_cat-lamp product_tag-light product_tag-table product_tag-hat last instock shipping-taxable purchasable product-type-variable has-default-attributes">
                                        <div class="product-inner tooltip-left">
                                            <div class="product-thumb">
                                                <a class="thumb-link"
                                                   href="single-product.html">
                                                    <img class="img-responsive"
                                                         src="client_asset/images/apro83-1-270x350.jpg"
                                                         alt="Glasses" width="270" height="350">
                                                </a>
                                                <div class="flash">
                                                    <span class="onnew"><span class="text">New</span></span></div>
                                                <form class="variations_form cart">
                                                    <table class="variations">
                                                        <tbody>
                                                        <tr>
                                                            <td class="value">
                                                                <select title="box_style" data-attributetype="box_style"
                                                                        data-id="pa_color"
                                                                        class="attribute-select " name="attribute_pa_color"
                                                                        data-attribute_name="attribute_pa_color"
                                                                        data-show_option_none="yes">
                                                                    <option data-type="" data-pa_color="" value="">Choose an
                                                                        option
                                                                    </option>
                                                                    <option data-width="30" data-height="30"
                                                                            data-type="color" data-pa_color="#000000"
                                                                            value="black" class="attached enabled">Black
                                                                    </option>
                                                                    <option data-width="30" data-height="30"
                                                                            data-type="color" data-pa_color="#b6b8ba"
                                                                            value="red" class="attached enabled">Red
                                                                    </option>
                                                                </select>
                                                                <div class="data-val attribute-pa_color"
                                                                     data-attributetype="box_style">
                                                                    <label>
                                                                        <input type="radio" name="color">
                                                                        <span class="change-value color"
                                                                              style="background: #3155e2;"
                                                                              data-value="blue">
                                                                    </span>
                                                                    </label>
                                                                    <label>
                                                                        <input type="radio" name="color">
                                                                        <span class="change-value color"
                                                                              style="background: #52b745;"
                                                                              data-value="green">
                                                                    </span>
                                                                    </label>
                                                                    <label>
                                                                        <input type="radio" name="color">
                                                                        <span class="change-value color"
                                                                              style="background: #ffe59e;"
                                                                              data-value="pink">
                                                                    </span>
                                                                    </label>
                                                                </div>
                                                                <a class="reset_variations" href="#"
                                                                   style="visibility: hidden;">Clear</a></td>
                                                        </tr>
                                                        </tbody>
                                                    </table>
                                                </form>
                                                <div class="group-button">
                                                    <div class="yith-wcwl-add-to-wishlist">
                                                        <div class="yith-wcwl-add-button show">
                                                            <a href="wishlist.html" class="add_to_wishlist">Add to Wishlist</a>
                                                        </div>
                                                    </div>
                                                    <div class="kodory product compare-button">
                                                        <a href="compare.html" class="compare button">Compare</a>
                                                    </div>
                                                    <a href="#" class="button yith-wcqv-button">Quick View</a>
                                                    <div class="add-to-cart">
                                                        <a href="cart.html"
                                                           class="button product_type_simple add_to_cart_button ajax_add_to_cart">Select
                                                            options</a>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="product-info equal-elem">
                                                <h3 class="product-name product_title">
                                                    <a href="single-product.html">Star Shoes</a>
                                                </h3>
                                                <div class="rating-wapper nostar">
                                                    <div class="star-rating"><span style="width:0%">Rated <strong
                                                                class="rating">0</strong> out of 5</span></div>
                                                    <span class="review">(0)</span></div>
                                                <span class="price"><span class="kodory-Price-amount amount"><span
                                                            class="kodory-Price-currencySymbol">$</span>56.00</span> – <span
                                                        class="kodory-Price-amount amount"><span
                                                            class="kodory-Price-currencySymbol">$</span>60.00</span></span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="product-item top-rated style-01 rows-space-30 col-bg-3 col-xl-3 col-lg-4 col-md-4 col-sm-6 col-ts-6 post-21 product type-product status-publish has-post-thumbnail product_cat-light product_cat-bed product_cat-lamp product_tag-light product_tag-sock first outofstock featured shipping-taxable purchasable product-type-simple">
                                        <div class="product-inner tooltip-left">
                                            <div class="product-thumb">
                                                <a class="thumb-link"
                                                   href="single-product.html">
                                                    <img class="img-responsive"
                                                         src="client_asset/images/apro191-1-270x350.jpg"
                                                         alt="Baby Shirt" width="270" height="350">
                                                </a>
                                                <div class="flash">
                                                    <span class="sold-out"><span>Sold out</span></span>
                                                </div>
                                                <div class="group-button">
                                                    <div class="yith-wcwl-add-to-wishlist">
                                                        <div class="yith-wcwl-add-button show">
                                                            <a href="wishlist.html" class="add_to_wishlist">Add to Wishlist</a>
                                                        </div>
                                                    </div>
                                                    <div class="kodory product compare-button">
                                                        <a href="compare.html" class="compare button">Compare</a>
                                                    </div>
                                                    <a href="#" class="button yith-wcqv-button">Quick View</a>
                                                    <div class="add-to-cart">
                                                        <a href="cart.html"
                                                           class="button product_type_simple add_to_cart_button ajax_add_to_cart">Read
                                                            more</a>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="product-info equal-elem">
                                                <h3 class="product-name product_title">
                                                    <a href="single-product.html">Long
                                                        Sleeve Shirt</a>
                                                </h3>
                                                <div class="rating-wapper nostar">
                                                    <div class="star-rating"><span style="width:0%">Rated <strong
                                                                class="rating">0</strong> out of 5</span></div>
                                                    <span class="review">(0)</span></div>
                                                <span class="price"><span class="kodory-Price-amount amount"><span
                                                            class="kodory-Price-currencySymbol">$</span>35.00</span></span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="product-item top-rated style-01 rows-space-30 col-bg-3 col-xl-3 col-lg-4 col-md-4 col-sm-6 col-ts-6 post-34 product type-product status-publish has-post-thumbnail product_cat-light product_cat-new-arrivals product_tag-light product_tag-hat product_tag-sock  instock sale featured shipping-taxable product-type-grouped">
                                        <div class="product-inner tooltip-left">
                                            <div class="product-thumb">
                                                <a class="thumb-link"
                                                   href="single-product.html">
                                                    <img class="img-responsive"
                                                         src="client_asset/images/apro61-1-270x350.jpg"
                                                         alt="Shark Shirt" width="270" height="350">
                                                </a>
                                                <div class="flash">
                                                    <span class="onnew"><span class="text">New</span></span></div>
                                                <div class="group-button">
                                                    <div class="yith-wcwl-add-to-wishlist">
                                                        <div class="yith-wcwl-add-button show">
                                                            <a href="wishlist.html" class="add_to_wishlist">Add to Wishlist</a>
                                                        </div>
                                                    </div>
                                                    <div class="kodory product compare-button">
                                                        <a href="compare.html" class="compare button">Compare</a>
                                                    </div>
                                                    <a href="cart.html" class="button yith-wcqv-button">Quick View</a>
                                                    <div class="add-to-cart">
                                                        <a href="#"
                                                           class="button product_type_simple add_to_cart_button ajax_add_to_cart">View
                                                            products</a>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="product-info equal-elem">
                                                <h3 class="product-name product_title">
                                                    <a href="single-product.html">Shark Shirt</a>
                                                </h3>
                                                <div class="rating-wapper nostar">
                                                    <div class="star-rating"><span style="width:0%">Rated <strong
                                                                class="rating">0</strong> out of 5</span></div>
                                                    <span class="review">(0)</span></div>
                                                <span class="price"><span class="kodory-Price-amount amount"><span
                                                            class="kodory-Price-currencySymbol">$</span>79.00</span> – <span
                                                        class="kodory-Price-amount amount"><span
                                                            class="kodory-Price-currencySymbol">$</span>139.00</span></span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="product-item top-rated style-01 rows-space-30 col-bg-3 col-xl-3 col-lg-4 col-md-4 col-sm-6 col-ts-6 post-22 product type-product status-publish has-post-thumbnail product_cat-table product_cat-bed product_cat-lamp product_tag-table product_tag-hat product_tag-sock last instock featured downloadable shipping-taxable purchasable product-type-simple">
                                        <div class="product-inner tooltip-left">
                                            <div class="product-thumb">
                                                <a class="thumb-link"
                                                   href="single-product.html">
                                                    <img class="img-responsive"
                                                         src="client_asset/images/apro181-2-270x350.jpg"
                                                         alt="Soccer Shoes" width="270" height="350">
                                                </a>
                                                <div class="flash">
                                                    <span class="onnew"><span class="text">New</span></span></div>
                                                <div class="group-button">
                                                    <div class="yith-wcwl-add-to-wishlist">
                                                        <div class="yith-wcwl-add-button show">
                                                            <a href="wishlist.html" class="add_to_wishlist">Add to Wishlist</a>
                                                        </div>
                                                    </div>
                                                    <div class="kodory product compare-button">
                                                        <a href="compare.html" class="compare button">Compare</a>
                                                    </div>
                                                    <a href="#" class="button yith-wcqv-button">Quick View</a>
                                                    <div class="add-to-cart">
                                                        <a href="cart.html"
                                                           class="button product_type_simple add_to_cart_button ajax_add_to_cart">Add
                                                            to cart</a>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="product-info equal-elem">
                                                <h3 class="product-name product_title">
                                                    <a href="single-product.html">Soccer Shoes</a>
                                                </h3>
                                                <div class="rating-wapper nostar">
                                                    <div class="star-rating"><span style="width:0%">Rated <strong
                                                                class="rating">0</strong> out of 5</span></div>
                                                    <span class="review">(0)</span></div>
                                                <span class="price"><span class="kodory-Price-amount amount"><span
                                                            class="kodory-Price-currencySymbol">$</span>98.00</span></span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="product-item top-rated style-01 rows-space-30 col-bg-3 col-xl-3 col-lg-4 col-md-4 col-sm-6 col-ts-6 post-35 product type-product status-publish has-post-thumbnail product_cat-chair product_cat-new-arrivals product_cat-lamp product_tag-light product_tag-hat product_tag-sock first instock shipping-taxable purchasable product-type-simple">
                                        <div class="product-inner tooltip-left">
                                            <div class="product-thumb">
                                                <a class="thumb-link"
                                                   href="single-product.html">
                                                    <img class="img-responsive"
                                                         src="client_asset/images/apro41-1-270x350.jpg"
                                                         alt="Cute Shoes" width="270" height="350">
                                                </a>
                                                <div class="flash">
                                                    <span class="onnew"><span class="text">New</span></span></div>
                                                <div class="group-button">
                                                    <div class="yith-wcwl-add-to-wishlist">
                                                        <div class="yith-wcwl-add-button show">
                                                            <a href="wishlist.html" class="add_to_wishlist">Add to Wishlist</a>
                                                        </div>
                                                    </div>
                                                    <div class="kodory product compare-button">
                                                        <a href="compare.html" class="compare button">Compare</a>
                                                    </div>
                                                    <a href="#" class="button yith-wcqv-button">Quick View</a>
                                                    <div class="add-to-cart">
                                                        <a href="cart.html"
                                                           class="button product_type_simple add_to_cart_button ajax_add_to_cart">Add
                                                            to cart</a>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="product-info equal-elem">
                                                <h3 class="product-name product_title">
                                                    <a href="single-product.html">Cute Shoes</a>
                                                </h3>
                                                <div class="rating-wapper nostar">
                                                    <div class="star-rating"><span style="width:0%">Rated <strong
                                                                class="rating">0</strong> out of 5</span></div>
                                                    <span class="review">(0)</span></div>
                                                <span class="price"><span class="kodory-Price-amount amount"><span
                                                            class="kodory-Price-currencySymbol">$</span>134.00</span></span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- OWL Products -->
                            </div>
                        </div>
                        <div class="tab-panel " id="1547652725565-7e88bea3-ede2-5d80aefaa70e2">
                            <div class="kodory-products style-01   kodory_custom_5d67efefee7c9 ">
                                <div class="response-product product-list-grid row auto-clear equal-container better-height ">
                                    <div class="product-item featured_products style-01 rows-space-30 col-bg-3 col-xl-3 col-lg-4 col-md-4 col-sm-6 col-ts-6 post-34 product type-product status-publish has-post-thumbnail product_cat-light product_cat-new-arrivals product_tag-light product_tag-hat product_tag-sock  instock sale featured shipping-taxable product-type-grouped">
                                        <div class="product-inner tooltip-left">
                                            <div class="product-thumb">
                                                <a class="thumb-link"
                                                   href="single-product.html">
                                                    <img class="img-responsive"
                                                         src="client_asset/images/apro61-1-270x350.jpg"
                                                         alt="Shark Shirt" width="270" height="350">
                                                </a>
                                                <div class="flash">
                                                    <span class="onnew"><span class="text">New</span></span></div>
                                                <div class="group-button">
                                                    <div class="yith-wcwl-add-to-wishlist">
                                                        <div class="yith-wcwl-add-button show">
                                                            <a href="wishlist.html" class="add_to_wishlist">Add to Wishlist</a>
                                                        </div>
                                                    </div>
                                                    <div class="kodory product compare-button">
                                                        <a href="compare.html" class="compare button">Compare</a>
                                                    </div>
                                                    <a href="#" class="button yith-wcqv-button">Quick View</a>
                                                    <div class="add-to-cart">
                                                        <a href="cart.html"
                                                           class="button product_type_simple add_to_cart_button ajax_add_to_cart">Add
                                                            to cart</a>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="product-info equal-elem">
                                                <h3 class="product-name product_title">
                                                    <a href="single-product.html">Shark Shirt</a>
                                                </h3>
                                                <div class="rating-wapper nostar">
                                                    <div class="star-rating"><span style="width:0%">Rated <strong
                                                                class="rating">0</strong> out of 5</span></div>
                                                    <span class="review">(0)</span></div>
                                                <span class="price"><span class="kodory-Price-amount amount"><span
                                                            class="kodory-Price-currencySymbol">$</span>79.00</span> – <span
                                                        class="kodory-Price-amount amount"><span
                                                            class="kodory-Price-currencySymbol">$</span>139.00</span></span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="product-item featured_products style-01 rows-space-30 col-bg-3 col-xl-3 col-lg-4 col-md-4 col-sm-6 col-ts-6 post-32 product type-product status-publish has-post-thumbnail product_cat-light product_cat-chair product_cat-sofas product_tag-hat product_tag-sock last instock sale featured shipping-taxable purchasable product-type-simple">
                                        <div class="product-inner tooltip-left">
                                            <div class="product-thumb">
                                                <a class="thumb-link"
                                                   href="single-product.html">
                                                    <img class="img-responsive"
                                                         src="client_asset/images/apro71-1-270x350.jpg"
                                                         alt="Kid Backpack" width="270" height="350">
                                                </a>
                                                <div class="flash">
                                                    <span class="onsale"><span class="number">-18%</span></span>
                                                    <span class="onnew"><span class="text">New</span></span></div>
                                                <div class="group-button">
                                                    <div class="yith-wcwl-add-to-wishlist">
                                                        <div class="yith-wcwl-add-button show">
                                                            <a href="wishlist.html" class="add_to_wishlist">Add to Wishlist</a>
                                                        </div>
                                                    </div>
                                                    <div class="kodory product compare-button">
                                                        <a href="compare.html" class="compare button">Compare</a>
                                                    </div>
                                                    <a href="#" class="button yith-wcqv-button">Quick View</a>
                                                    <div class="add-to-cart">
                                                        <a href="cart.html"
                                                           class="button product_type_simple add_to_cart_button ajax_add_to_cart">Add
                                                            to cart</a>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="product-info equal-elem">
                                                <h3 class="product-name product_title">
                                                    <a href="single-product.html">Kid Backpack</a>
                                                </h3>
                                                <div class="rating-wapper nostar">
                                                    <div class="star-rating"><span style="width:0%">Rated <strong
                                                                class="rating">0</strong> out of 5</span></div>
                                                    <span class="review">(0)</span></div>
                                                <span class="price"><del><span class="kodory-Price-amount amount"><span
                                                                class="kodory-Price-currencySymbol">$</span>109.00</span></del> <ins><span
                                                            class="kodory-Price-amount amount"><span
                                                                class="kodory-Price-currencySymbol">$</span>89.00</span></ins></span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="product-item featured_products style-01 rows-space-30 col-bg-3 col-xl-3 col-lg-4 col-md-4 col-sm-6 col-ts-6 post-30 product type-product status-publish has-post-thumbnail product_cat-light product_cat-bed product_cat-specials product_tag-light product_tag-table product_tag-sock first instock featured downloadable shipping-taxable purchasable product-type-simple">
                                        <div class="product-inner tooltip-left">
                                            <div class="product-thumb">
                                                <a class="thumb-link"
                                                   href="single-product.html">
                                                    <img class="img-responsive"
                                                         src="client_asset/images/apro101-1-270x350.jpg"
                                                         alt="Penguin Hoodie" width="270" height="350">
                                                </a>
                                                <div class="flash">
                                                    <span class="onnew"><span class="text">New</span></span></div>
                                                <div class="group-button">
                                                    <div class="yith-wcwl-add-to-wishlist">
                                                        <div class="yith-wcwl-add-button show">
                                                            <a href="wishlist.html" class="add_to_wishlist">Add to Wishlist</a>
                                                        </div>
                                                    </div>
                                                    <div class="kodory product compare-button">
                                                        <a href="compare.html" class="compare button">Compare</a>
                                                    </div>
                                                    <a href="#" class="button yith-wcqv-button">Quick View</a>
                                                    <div class="add-to-cart">
                                                        <a href="cart.html"
                                                           class="button product_type_simple add_to_cart_button ajax_add_to_cart">Add
                                                            to cart</a>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="product-info equal-elem">
                                                <h3 class="product-name product_title">
                                                    <a href="single-product.html">Penguin Hoodie</a>
                                                </h3>
                                                <div class="rating-wapper nostar">
                                                    <div class="star-rating"><span style="width:0%">Rated <strong
                                                                class="rating">0</strong> out of 5</span></div>
                                                    <span class="review">(0)</span></div>
                                                <span class="price"><span class="kodory-Price-amount amount"><span
                                                            class="kodory-Price-currencySymbol">$</span>60.00</span></span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="product-item featured_products style-01 rows-space-30 col-bg-3 col-xl-3 col-lg-4 col-md-4 col-sm-6 col-ts-6 post-31 product type-product status-publish has-post-thumbnail product_cat-light product_cat-sofas product_tag-hat  instock sale featured shipping-taxable product-type-grouped">
                                        <div class="product-inner tooltip-left">
                                            <div class="product-thumb">
                                                <a class="thumb-link"
                                                   href="single-product.html">
                                                    <img class="img-responsive"
                                                         src="client_asset/images/apro91-1-270x350.jpg"
                                                         alt="Elegant Diamond" width="270" height="350">
                                                </a>
                                                <div class="flash">
                                                    <span class="onnew"><span class="text">New</span></span></div>
                                                <div class="group-button">
                                                    <div class="yith-wcwl-add-to-wishlist">
                                                        <div class="yith-wcwl-add-button show">
                                                            <a href="wishlist.html" class="add_to_wishlist">Add to Wishlist</a>
                                                        </div>
                                                    </div>
                                                    <div class="kodory product compare-button">
                                                        <a href="compare.html" class="compare button">Compare</a>
                                                    </div>
                                                    <a href="#" class="button yith-wcqv-button">Quick View</a>
                                                    <div class="add-to-cart">
                                                        <a href="cart.html"
                                                           class="button product_type_simple add_to_cart_button ajax_add_to_cart">Add
                                                            to cart</a>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="product-info equal-elem">
                                                <h3 class="product-name product_title">
                                                    <a href="single-product.html">Elegant Diamond</a>
                                                </h3>
                                                <div class="rating-wapper nostar">
                                                    <div class="star-rating"><span style="width:0%">Rated <strong
                                                                class="rating">0</strong> out of 5</span></div>
                                                    <span class="review">(0)</span></div>
                                                <span class="price"><span class="kodory-Price-amount amount"><span
                                                            class="kodory-Price-currencySymbol">$</span>89.00</span> – <span
                                                        class="kodory-Price-amount amount"><span
                                                            class="kodory-Price-currencySymbol">$</span>139.00</span></span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="product-item featured_products style-01 rows-space-30 col-bg-3 col-xl-3 col-lg-4 col-md-4 col-sm-6 col-ts-6 post-29 product type-product status-publish has-post-thumbnail product_cat-new-arrivals product_cat-specials product_tag-light product_tag-sock last instock featured downloadable shipping-taxable purchasable product-type-simple">
                                        <div class="product-inner tooltip-left">
                                            <div class="product-thumb">
                                                <a class="thumb-link"
                                                   href="single-product.html">
                                                    <img class="img-responsive"
                                                         src="client_asset/images/apro1113-270x350.jpg"
                                                         alt="Ethereal Toys" width="270" height="350">
                                                </a>
                                                <div class="flash">
                                                    <span class="onnew"><span class="text">New</span></span></div>
                                                <div class="group-button">
                                                    <div class="yith-wcwl-add-to-wishlist">
                                                        <div class="yith-wcwl-add-button show">
                                                            <a href="wishlist.html" class="add_to_wishlist">Add to Wishlist</a>
                                                        </div>
                                                    </div>
                                                    <div class="kodory product compare-button">
                                                        <a href="compare.html" class="compare button">Compare</a>
                                                    </div>
                                                    <a href="#" class="button yith-wcqv-button">Quick View</a>
                                                    <div class="add-to-cart">
                                                        <a href="cart.html"
                                                           class="button product_type_simple add_to_cart_button ajax_add_to_cart">Add
                                                            to cart</a>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="product-info equal-elem">
                                                <h3 class="product-name product_title">
                                                    <a href="single-product.html">Ethereal Toys</a>
                                                </h3>
                                                <div class="rating-wapper nostar">
                                                    <div class="star-rating"><span style="width:0%">Rated <strong
                                                                class="rating">0</strong> out of 5</span></div>
                                                    <span class="review">(0)</span></div>
                                                <span class="price"><span class="kodory-Price-amount amount"><span
                                                            class="kodory-Price-currencySymbol">$</span>129.00</span></span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="product-item featured_products style-01 rows-space-30 col-bg-3 col-xl-3 col-lg-4 col-md-4 col-sm-6 col-ts-6 post-28 product type-product status-publish has-post-thumbnail product_cat-light product_cat-chair product_cat-sofas product_tag-light product_tag-sock first instock sale featured shipping-taxable purchasable product-type-simple">
                                        <div class="product-inner tooltip-left">
                                            <div class="product-thumb">
                                                <a class="thumb-link"
                                                   href="single-product.html">
                                                    <img class="img-responsive"
                                                         src="client_asset/images/apro1211-2-270x350.jpg"
                                                         alt="Blue Shoes" width="270" height="350">
                                                </a>
                                                <div class="flash">
                                                    <span class="onsale"><span class="number">-14%</span></span>
                                                    <span class="onnew"><span class="text">New</span></span></div>
                                                <div class="group-button">
                                                    <div class="yith-wcwl-add-to-wishlist">
                                                        <div class="yith-wcwl-add-button show">
                                                            <a href="wishlist.html" class="add_to_wishlist">Add to Wishlist</a>
                                                        </div>
                                                    </div>
                                                    <div class="kodory product compare-button">
                                                        <a href="compare.html" class="compare button">Compare</a>
                                                    </div>
                                                    <a href="#" class="button yith-wcqv-button">Quick View</a>
                                                    <div class="add-to-cart">
                                                        <a href="cart.html"
                                                           class="button product_type_simple add_to_cart_button ajax_add_to_cart">Add
                                                            to cart</a>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="product-info equal-elem">
                                                <h3 class="product-name product_title">
                                                    <a href="single-product.html">Blue Shoes</a>
                                                </h3>
                                                <div class="rating-wapper ">
                                                    <div class="star-rating"><span style="width:100%">Rated <strong
                                                                class="rating">5.00</strong> out of 5</span></div>
                                                    <span class="review">(1)</span></div>
                                                <span class="price"><del><span class="kodory-Price-amount amount"><span
                                                                class="kodory-Price-currencySymbol">$</span>138.00</span></del> <ins><span
                                                            class="kodory-Price-amount amount"><span
                                                                class="kodory-Price-currencySymbol">$</span>119.00</span></ins></span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="product-item featured_products style-01 rows-space-30 col-bg-3 col-xl-3 col-lg-4 col-md-4 col-sm-6 col-ts-6 post-26 product type-product status-publish has-post-thumbnail product_cat-light product_cat-chair product_cat-sofas product_tag-light product_tag-hat  instock featured shipping-taxable product-type-external">
                                        <div class="product-inner tooltip-left">
                                            <div class="product-thumb">
                                                <a class="thumb-link"
                                                   href="single-product.html">
                                                    <img class="img-responsive"
                                                         src="client_asset/images/apro141-1-270x350.jpg"
                                                         alt="Red Car" width="270" height="350">
                                                </a>
                                                <div class="flash">
                                                    <span class="onnew"><span class="text">New</span></span></div>
                                                <div class="group-button">
                                                    <div class="yith-wcwl-add-to-wishlist">
                                                        <div class="yith-wcwl-add-button show">
                                                            <a href="wishlist.html" class="add_to_wishlist">Add to Wishlist</a>
                                                        </div>
                                                    </div>
                                                    <div class="kodory product compare-button">
                                                        <a href="compare.html" class="compare button">Compare</a>
                                                    </div>
                                                    <a href="#" class="button yith-wcqv-button">Quick View</a>
                                                    <div class="add-to-cart">
                                                        <a href="cart.html"
                                                           class="button product_type_simple add_to_cart_button ajax_add_to_cart">Add
                                                            to cart</a>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="product-info equal-elem">
                                                <h3 class="product-name product_title">
                                                    <a href="single-product.html">Dining Teddy Bear</a>
                                                </h3>
                                                <div class="rating-wapper ">
                                                    <div class="star-rating"><span style="width:100%">Rated <strong
                                                                class="rating">5.00</strong> out of 5</span></div>
                                                    <span class="review">(1)</span></div>
                                                <span class="price"><span class="kodory-Price-amount amount"><span
                                                            class="kodory-Price-currencySymbol">$</span>207.00</span></span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="product-item featured_products style-01 rows-space-30 col-bg-3 col-xl-3 col-lg-4 col-md-4 col-sm-6 col-ts-6 post-25 product type-product status-publish has-post-thumbnail product_cat-light product_cat-chair product_cat-specials product_tag-light product_tag-sock last instock sale featured shipping-taxable purchasable product-type-simple">
                                        <div class="product-inner tooltip-left">
                                            <div class="product-thumb">
                                                <a class="thumb-link"
                                                   href="single-product.html">
                                                    <img class="img-responsive"
                                                         src="client_asset/images/apro151-1-270x350.jpg"
                                                         alt="Modern Platinum" width="270" height="350">
                                                </a>
                                                <div class="flash">
                                                    <span class="onsale"><span class="number">-11%</span></span>
                                                    <span class="onnew"><span class="text">New</span></span></div>
                                                <div class="group-button">
                                                    <div class="yith-wcwl-add-to-wishlist">
                                                        <div class="yith-wcwl-add-button show">
                                                            <a href="wishlist.html" class="add_to_wishlist">Add to Wishlist</a>
                                                        </div>
                                                    </div>
                                                    <div class="kodory product compare-button">
                                                        <a href="compare.html" class="compare button">Compare</a>
                                                    </div>
                                                    <a href="#" class="button yith-wcqv-button">Quick View</a>
                                                    <div class="add-to-cart">
                                                        <a href="cart.html"
                                                           class="button product_type_simple add_to_cart_button ajax_add_to_cart">Add
                                                            to cart</a>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="product-info equal-elem">
                                                <h3 class="product-name product_title">
                                                    <a href="single-product.html">Modern Platinum</a>
                                                </h3>
                                                <div class="rating-wapper nostar">
                                                    <div class="star-rating"><span style="width:0%">Rated <strong
                                                                class="rating">0</strong> out of 5</span></div>
                                                    <span class="review">(0)</span></div>
                                                <span class="price"><del><span class="kodory-Price-amount amount"><span
                                                                class="kodory-Price-currencySymbol">$</span>89.00</span></del> <ins><span
                                                            class="kodory-Price-amount amount"><span
                                                                class="kodory-Price-currencySymbol">$</span>79.00</span></ins></span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- OWL Products -->
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        {{--Banner--}}
        <div class="section-023">
            <div class="kodory-banner style-11 left-center">
                @foreach($oneBanner as $item)
                    <div class="banner-inner">
                        <figure class="banner-thumb">
                            <img src="{{'/storage/app/public/'.$item->image}}"
                                 class="attachment-full size-full" alt="img"></figure>
                        <div class="banner-info container">
                            <div class="banner-content">
                                <div class="title-wrap">
                                    <div class="banner-label">
                                        {{ $item->name }}
                                    </div>
                                    <h6 class="title">{!! $item->brief !!}</h6>
                                </div>
                                <div class="button-wrap">
                                    <a class="button" target="{{$item->target}}" href="{{$item->link}}"><span>Shop now</span></a>
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach

            </div>
        </div>



        <div class="section-001">
            <div class="container">
                <div class="kodory-heading style-01">
                    <div class="heading-inner">
                        <h3 class="title">
                            Follow Us <span></span></h3>
                        <div class="subtitle">
                            @kodorystore
                        </div>
                    </div>
                </div>
                <div class="kodory-instagram style-01">
                    <div class="instagram-owl owl-slick"
                         data-slick="{&quot;arrows&quot;:true,&quot;slidesMargin&quot;:10,&quot;dots&quot;:false,&quot;infinite&quot;:false,&quot;speed&quot;:300,&quot;slidesToShow&quot;:4,&quot;rows&quot;:1}"
                         data-responsive="[{&quot;breakpoint&quot;:480,&quot;settings&quot;:{&quot;slidesToShow&quot;:2,&quot;slidesMargin&quot;:&quot;10&quot;}},{&quot;breakpoint&quot;:768,&quot;settings&quot;:{&quot;slidesToShow&quot;:2,&quot;slidesMargin&quot;:&quot;10&quot;}},{&quot;breakpoint&quot;:992,&quot;settings&quot;:{&quot;slidesToShow&quot;:3,&quot;slidesMargin&quot;:&quot;10&quot;}},{&quot;breakpoint&quot;:1200,&quot;settings&quot;:{&quot;slidesToShow&quot;:3,&quot;slidesMargin&quot;:&quot;10&quot;}},{&quot;breakpoint&quot;:1500,&quot;settings&quot;:{&quot;slidesToShow&quot;:4,&quot;slidesMargin&quot;:&quot;10&quot;}}]">
                        <div class="rows-space-0">
                            <a target="_blank" href="#" class="item" tabindex="0">
                                <img class="img-responsive lazy" src="client_asset/images/insta1.jpg" alt="Home 04">
                                <span class="instagram-info">
                                                 <span class="social-wrap">
                                                    <span class="social-info">1
                                                        <i class="pe-7s-chat"></i>
                                                    </span>
                                                    <span class="social-info">0
                                                        <i class="pe-7s-like2"></i>
                                                    </span>
                                                </span>
                                            </span>
                            </a>
                        </div>
                        <div class="rows-space-0">
                            <a target="_blank" href="#" class="item" tabindex="0">
                                <img class="img-responsive lazy" src="client_asset/images/insta2.jpg" alt="Home 04">
                                <span class="instagram-info">
                                                 <span class="social-wrap">
                                                    <span class="social-info">1
                                                        <i class="pe-7s-chat"></i>
                                                    </span>
                                                    <span class="social-info">0
                                                        <i class="pe-7s-like2"></i>
                                                    </span>
                                                </span>
                                            </span>
                            </a>
                        </div>
                        <div class="rows-space-0">
                            <a target="_blank" href="#" class="item" tabindex="0">
                                <img class="img-responsive lazy" src="client_asset/images/insta3.jpg" alt="Home 04">
                                <span class="instagram-info">
                                                 <span class="social-wrap">
                                                    <span class="social-info">1
                                                        <i class="pe-7s-chat"></i>
                                                    </span>
                                                    <span class="social-info">0
                                                        <i class="pe-7s-like2"></i>
                                                    </span>
                                                </span>
                                            </span>
                            </a>
                        </div>
                        <div class="rows-space-0">
                            <a target="_blank" href="#" class="item" tabindex="0">
                                <img class="img-responsive lazy" src="client_asset/images/insta4.jpg" alt="Home 04">
                                <span class="instagram-info">
                                                 <span class="social-wrap">
                                                    <span class="social-info">1
                                                        <i class="pe-7s-chat"></i>
                                                    </span>
                                                    <span class="social-info">0
                                                        <i class="pe-7s-like2"></i>
                                                    </span>
                                                </span>
                                            </span>
                            </a>
                        </div>
                        <div class="rows-space-0">
                            <a target="_blank" href="#" class="item" tabindex="0">
                                <img class="img-responsive lazy" src="client_asset/images/insta5.jpg" alt="Home 04">
                                <span class="instagram-info">
                                                 <span class="social-wrap">
                                                    <span class="social-info">1
                                                        <i class="pe-7s-chat"></i>
                                                    </span>
                                                    <span class="social-info">0
                                                        <i class="pe-7s-like2"></i>
                                                    </span>
                                                </span>
                                            </span>
                            </a>
                        </div>
                        <div class="rows-space-0">
                            <a target="_blank" href="#" class="item" tabindex="0">
                                <img class="img-responsive lazy" src="client_asset/images/insta6.jpg" alt="Home 04">
                                <span class="instagram-info">
                                                 <span class="social-wrap">
                                                    <span class="social-info">1
                                                        <i class="pe-7s-chat"></i>
                                                    </span>
                                                    <span class="social-info">0
                                                        <i class="pe-7s-like2"></i>
                                                    </span>
                                                </span>
                                            </span>
                            </a>
                        </div>
                        <div class="rows-space-0">
                            <a target="_blank" href="#" class="item" tabindex="0">
                                <img class="img-responsive lazy" src="client_asset/images/insta7.jpg" alt="Home 04">
                                <span class="instagram-info">
                                                 <span class="social-wrap">
                                                    <span class="social-info">1
                                                        <i class="pe-7s-chat"></i>
                                                    </span>
                                                    <span class="social-info">0
                                                        <i class="pe-7s-like2"></i>
                                                    </span>
                                                </span>
                                            </span>
                            </a>
                        </div>
                        <div class="rows-space-0">
                            <a target="_blank" href="#" class="item" tabindex="0">
                                <img class="img-responsive lazy" src="client_asset/images/insta8.jpg" alt="Home 04">
                                <span class="instagram-info">
                                         <span class="social-wrap">
                                            <span class="social-info">1
                                                <i class="pe-7s-chat"></i>
                                            </span>
                                            <span class="social-info">0
                                                <i class="pe-7s-like2"></i>
                                            </span>
                                        </span>
                                    </span>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="container">
            <div class="border-top-1"></div>
        </div>
        <div class="section-001 section-024">
            <div class="container">
                <div class="row">
                    <div class="col-md-12 col-lg-4">
                        <div class="kodory-products style-06">
                            <h3 class="title">
                                <span>Best selling</span>
                            </h3>
                            <div class="response-product product-list-owl owl-slick equal-container better-height"
                                 data-slick="{&quot;arrows&quot;:true,&quot;slidesMargin&quot;:30,&quot;dots&quot;:false,&quot;infinite&quot;:false,&quot;speed&quot;:300,&quot;slidesToShow&quot;:1,&quot;rows&quot;:3}"
                                 data-responsive="[{&quot;breakpoint&quot;:480,&quot;settings&quot;:{&quot;slidesToShow&quot;:1,&quot;slidesMargin&quot;:&quot;10&quot;}},{&quot;breakpoint&quot;:768,&quot;settings&quot;:{&quot;slidesToShow&quot;:1,&quot;slidesMargin&quot;:&quot;10&quot;}},{&quot;breakpoint&quot;:992,&quot;settings&quot;:{&quot;slidesToShow&quot;:2,&quot;slidesMargin&quot;:&quot;20&quot;}},{&quot;breakpoint&quot;:1200,&quot;settings&quot;:{&quot;slidesToShow&quot;:1,&quot;slidesMargin&quot;:&quot;20&quot;}},{&quot;breakpoint&quot;:1500,&quot;settings&quot;:{&quot;slidesToShow&quot;:1,&quot;slidesMargin&quot;:&quot;30&quot;}}]">
                                <div class="product-item best-selling style-06 rows-space-30 post-25 product type-product status-publish has-post-thumbnail product_cat-light product_cat-chair product_cat-specials product_tag-light product_tag-sock first instock sale featured shipping-taxable purchasable product-type-simple">
                                    <div class="product-inner">
                                        <div class="product-thumb">
                                            <a class="thumb-link"
                                               href="single-product.html"
                                               tabindex="0">
                                                <img class="img-responsive"
                                                     src="client_asset/images/apro151-1-90x90.jpg"
                                                     alt="Modern Platinum" width="90" height="90">
                                            </a>
                                        </div>
                                        <div class="product-info">
                                            <h3 class="product-name product_title">
                                                <a href="single-product.html"
                                                   tabindex="0">Modern Platinum</a>
                                            </h3>
                                            <div class="rating-wapper nostar">
                                                <div class="star-rating"><span
                                                        style="width:0%">Rated <strong
                                                            class="rating">0</strong> out of 5</span></div>
                                                <span class="review">(0)</span></div>
                                            <span class="price"><del><span
                                                        class="kodory-Price-amount amount"><span
                                                            class="kodory-Price-currencySymbol">$</span>89.00</span></del> <ins><span
                                                        class="kodory-Price-amount amount"><span
                                                            class="kodory-Price-currencySymbol">$</span>79.00</span></ins></span>
                                        </div>
                                    </div>
                                </div>
                                <div class="product-item best-selling style-06 rows-space-30 post-23 product type-product status-publish has-post-thumbnail product_cat-chair product_cat-lamp product_cat-sofas product_tag-hat  instock shipping-taxable purchasable product-type-variable has-default-attributes">
                                    <div class="product-inner">
                                        <div class="product-thumb">
                                            <a class="thumb-link"
                                               href="single-product.html"
                                               tabindex="0">
                                                <img class="img-responsive"
                                                     src="client_asset/images/apro171-1-90x90.jpg"
                                                     alt="Cute Girl Shirt" width="90" height="90">
                                            </a>
                                        </div>
                                        <div class="product-info">
                                            <h3 class="product-name product_title">
                                                <a href="single-product.html"
                                                   tabindex="0">Cute Girl Shirt</a>
                                            </h3>
                                            <div class="rating-wapper nostar">
                                                <div class="star-rating"><span
                                                        style="width:0%">Rated <strong
                                                            class="rating">0</strong> out of 5</span></div>
                                                <span class="review">(0)</span></div>
                                            <span class="price"><span
                                                    class="kodory-Price-amount amount"><span
                                                        class="kodory-Price-currencySymbol">$</span>105.00</span> – <span
                                                    class="kodory-Price-amount amount"><span
                                                        class="kodory-Price-currencySymbol">$</span>110.00</span></span>
                                        </div>
                                    </div>
                                </div>
                                <div class="product-item best-selling style-06 rows-space-30 post-32 product type-product status-publish has-post-thumbnail product_cat-light product_cat-chair product_cat-sofas product_tag-hat product_tag-sock last instock sale featured shipping-taxable purchasable product-type-simple">
                                    <div class="product-inner">
                                        <div class="product-thumb">
                                            <a class="thumb-link"
                                               href="single-product.html"
                                               tabindex="0">
                                                <img class="img-responsive"
                                                     src="client_asset/images/apro71-1-90x90.jpg"
                                                     alt="Kid Backpack" width="90" height="90">
                                            </a>
                                        </div>
                                        <div class="product-info">
                                            <h3 class="product-name product_title">
                                                <a href="single-product.html"
                                                   tabindex="0">Kid Backpack</a>
                                            </h3>
                                            <div class="rating-wapper nostar">
                                                <div class="star-rating"><span
                                                        style="width:0%">Rated <strong
                                                            class="rating">0</strong> out of 5</span></div>
                                                <span class="review">(0)</span></div>
                                            <span class="price"><del><span
                                                        class="kodory-Price-amount amount"><span
                                                            class="kodory-Price-currencySymbol">$</span>109.00</span></del> <ins><span
                                                        class="kodory-Price-amount amount"><span
                                                            class="kodory-Price-currencySymbol">$</span>89.00</span></ins></span>
                                        </div>
                                    </div>
                                </div>
                                <div class="product-item best-selling style-06 rows-space-30 post-20 product type-product status-publish has-post-thumbnail product_cat-light product_cat-new-arrivals product_cat-specials product_tag-table product_tag-hat product_tag-sock first instock sale featured shipping-taxable purchasable product-type-simple">
                                    <div class="product-inner">
                                        <div class="product-thumb">
                                            <a class="thumb-link"
                                               href="single-product.html"
                                               tabindex="-1">
                                                <img class="img-responsive"
                                                     src="client_asset/images/apro201-1-90x90.jpg"
                                                     alt="Red Car" width="90" height="90">
                                            </a>
                                        </div>
                                        <div class="product-info">
                                            <h3 class="product-name product_title">
                                                <a href="single-product.html"
                                                   tabindex="-1">Red Car</a>
                                            </h3>
                                            <div class="rating-wapper nostar">
                                                <div class="star-rating"><span
                                                        style="width:0%">Rated <strong
                                                            class="rating">0</strong> out of 5</span></div>
                                                <span class="review">(0)</span></div>
                                            <span class="price"><del><span
                                                        class="kodory-Price-amount amount"><span
                                                            class="kodory-Price-currencySymbol">$</span>150.00</span></del> <ins><span
                                                        class="kodory-Price-amount amount"><span
                                                            class="kodory-Price-currencySymbol">$</span>139.00</span></ins></span>
                                        </div>
                                    </div>
                                </div>
                                <div class="product-item best-selling style-06 rows-space-30 post-36 product type-product status-publish has-post-thumbnail product_cat-table product_cat-bed product_tag-light product_tag-table product_tag-sock  instock sale shipping-taxable purchasable product-type-simple">
                                    <div class="product-inner">
                                        <div class="product-thumb">
                                            <a class="thumb-link"
                                               href="single-product.html"
                                               tabindex="-1">
                                                <img class="img-responsive"
                                                     src="client_asset/images/apro51012-1-90x90.jpg"
                                                     alt="Dazzling Toys" width="90" height="90">
                                            </a>
                                        </div>
                                        <div class="product-info">
                                            <h3 class="product-name product_title">
                                                <a href="single-product.html"
                                                   tabindex="-1">Dazzling Toys</a>
                                            </h3>
                                            <div class="rating-wapper nostar">
                                                <div class="star-rating"><span
                                                        style="width:0%">Rated <strong
                                                            class="rating">0</strong> out of 5</span></div>
                                                <span class="review">(0)</span></div>
                                            <span class="price"><del><span
                                                        class="kodory-Price-amount amount"><span
                                                            class="kodory-Price-currencySymbol">$</span>125.00</span></del> <ins><span
                                                        class="kodory-Price-amount amount"><span
                                                            class="kodory-Price-currencySymbol">$</span>99.00</span></ins></span>
                                        </div>
                                    </div>
                                </div>
                                <div class="product-item best-selling style-06 rows-space-30 post-49 product type-product status-publish has-post-thumbnail product_cat-light product_cat-bed product_cat-sofas product_tag-multi product_tag-lamp last instock shipping-taxable purchasable product-type-simple">
                                    <div class="product-inner">
                                        <div class="product-thumb">
                                            <a class="thumb-link"
                                               href="single-product.html"
                                               tabindex="-1">
                                                <img class="img-responsive"
                                                     src="client_asset/images/apro302-90x90.jpg"
                                                     alt="Cute Shoes" width="90" height="90">
                                            </a>
                                        </div>
                                        <div class="product-info">
                                            <h3 class="product-name product_title">
                                                <a href="single-product.html"
                                                   tabindex="-1">Cute Shoes</a>
                                            </h3>
                                            <div class="rating-wapper nostar">
                                                <div class="star-rating"><span
                                                        style="width:0%">Rated <strong
                                                            class="rating">0</strong> out of 5</span></div>
                                                <span class="review">(0)</span></div>
                                            <span class="price"><span
                                                    class="kodory-Price-amount amount"><span
                                                        class="kodory-Price-currencySymbol">$</span>79.00</span></span>
                                        </div>
                                    </div>
                                </div>
                                <div class="product-item best-selling style-06 rows-space-30 post-93 product type-product status-publish has-post-thumbnail product_cat-light product_cat-table product_cat-new-arrivals product_tag-table product_tag-sock first instock shipping-taxable purchasable product-type-simple">
                                    <div class="product-inner">
                                        <div class="product-thumb">
                                            <a class="thumb-link"
                                               href="single-product.html"
                                               tabindex="-1">
                                                <img class="img-responsive"
                                                     src="client_asset/images/apro13-1-90x90.jpg"
                                                     alt="Hello Shirt" width="90" height="90">
                                            </a>
                                        </div>
                                        <div class="product-info">
                                            <h3 class="product-name product_title">
                                                <a href="single-product.html"
                                                   tabindex="-1">Hello Shirt</a>
                                            </h3>
                                            <div class="rating-wapper nostar">
                                                <div class="star-rating"><span
                                                        style="width:0%">Rated <strong
                                                            class="rating">0</strong> out of 5</span></div>
                                                <span class="review">(0)</span></div>
                                            <span class="price"><span
                                                    class="kodory-Price-amount amount"><span
                                                        class="kodory-Price-currencySymbol">$</span>109.00</span></span>
                                        </div>
                                    </div>
                                </div>
                                <div class="product-item best-selling style-06 rows-space-30 post-28 product type-product status-publish has-post-thumbnail product_cat-light product_cat-chair product_cat-sofas product_tag-light product_tag-sock  instock sale featured shipping-taxable purchasable product-type-simple">
                                    <div class="product-inner">
                                        <div class="product-thumb">
                                            <a class="thumb-link"
                                               href="single-product.html"
                                               tabindex="-1">
                                                <img class="img-responsive"
                                                     src="client_asset/images/apro1211-2-90x90.jpg"
                                                     alt="Blue Shoes" width="90" height="90">
                                            </a>
                                        </div>
                                        <div class="product-info">
                                            <h3 class="product-name product_title">
                                                <a href="single-product.html"
                                                   tabindex="-1">Blue Shoes</a>
                                            </h3>
                                            <div class="rating-wapper ">
                                                <div class="star-rating"><span
                                                        style="width:100%">Rated <strong
                                                            class="rating">5.00</strong> out of 5</span></div>
                                                <span class="review">(1)</span></div>
                                            <span class="price"><del><span
                                                        class="kodory-Price-amount amount"><span
                                                            class="kodory-Price-currencySymbol">$</span>138.00</span></del> <ins><span
                                                        class="kodory-Price-amount amount"><span
                                                            class="kodory-Price-currencySymbol">$</span>119.00</span></ins></span>
                                        </div>
                                    </div>
                                </div>
                                <div class="product-item best-selling style-06 rows-space-30 post-22 product type-product status-publish has-post-thumbnail product_cat-table product_cat-bed product_cat-lamp product_tag-table product_tag-hat product_tag-sock last instock featured downloadable shipping-taxable purchasable product-type-simple">
                                    <div class="product-inner">
                                        <div class="product-thumb">
                                            <a class="thumb-link"
                                               href="single-product.html"
                                               tabindex="-1">
                                                <img class="img-responsive"
                                                     src="client_asset/images/apro181-2-90x90.jpg"
                                                     alt="Soccer Shoes" width="90" height="90">
                                            </a>
                                        </div>
                                        <div class="product-info">
                                            <h3 class="product-name product_title">
                                                <a href="single-product.html"
                                                   tabindex="-1">Soccer Shoes</a>
                                            </h3>
                                            <div class="rating-wapper nostar">
                                                <div class="star-rating"><span
                                                        style="width:0%">Rated <strong
                                                            class="rating">0</strong> out of 5</span></div>
                                                <span class="review">(0)</span></div>
                                            <span class="price"><span
                                                    class="kodory-Price-amount amount"><span
                                                        class="kodory-Price-currencySymbol">$</span>98.00</span></span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-12 col-lg-4">
                        <div class="kodory-products style-06">
                            <h3 class="title">
                                <span>On Sale</span>
                            </h3>
                            <div class="response-product product-list-owl owl-slick equal-container better-height"
                                 data-slick="{&quot;arrows&quot;:true,&quot;slidesMargin&quot;:30,&quot;dots&quot;:false,&quot;infinite&quot;:false,&quot;speed&quot;:300,&quot;slidesToShow&quot;:1,&quot;rows&quot;:3}"
                                 data-responsive="[{&quot;breakpoint&quot;:480,&quot;settings&quot;:{&quot;slidesToShow&quot;:1,&quot;slidesMargin&quot;:&quot;10&quot;}},{&quot;breakpoint&quot;:768,&quot;settings&quot;:{&quot;slidesToShow&quot;:1,&quot;slidesMargin&quot;:&quot;10&quot;}},{&quot;breakpoint&quot;:992,&quot;settings&quot;:{&quot;slidesToShow&quot;:2,&quot;slidesMargin&quot;:&quot;20&quot;}},{&quot;breakpoint&quot;:1200,&quot;settings&quot;:{&quot;slidesToShow&quot;:1,&quot;slidesMargin&quot;:&quot;20&quot;}},{&quot;breakpoint&quot;:1500,&quot;settings&quot;:{&quot;slidesToShow&quot;:1,&quot;slidesMargin&quot;:&quot;30&quot;}}]">
                                <div class="product-item on_sale style-06 rows-space-30 post-36 product type-product status-publish has-post-thumbnail product_cat-table product_cat-bed product_tag-light product_tag-table product_tag-sock first instock sale shipping-taxable purchasable product-type-simple">
                                    <div class="product-inner">
                                        <div class="product-thumb">
                                            <a class="thumb-link"
                                               href="single-product.html"
                                               tabindex="0">
                                                <img class="img-responsive"
                                                     src="client_asset/images/apro51012-1-90x90.jpg"
                                                     alt="Dazzling Toys" width="90" height="90">
                                            </a>
                                        </div>
                                        <div class="product-info">
                                            <h3 class="product-name product_title">
                                                <a href="single-product.html"
                                                   tabindex="0">Dazzling Toys</a>
                                            </h3>
                                            <div class="rating-wapper nostar">
                                                <div class="star-rating"><span
                                                        style="width:0%">Rated <strong
                                                            class="rating">0</strong> out of 5</span></div>
                                                <span class="review">(0)</span></div>
                                            <span class="price"><del><span
                                                        class="kodory-Price-amount amount"><span
                                                            class="kodory-Price-currencySymbol">$</span>125.00</span></del> <ins><span
                                                        class="kodory-Price-amount amount"><span
                                                            class="kodory-Price-currencySymbol">$</span>99.00</span></ins></span>
                                        </div>
                                    </div>
                                </div>
                                <div class="product-item on_sale style-06 rows-space-30 post-32 product type-product status-publish has-post-thumbnail product_cat-light product_cat-chair product_cat-sofas product_tag-hat product_tag-sock  instock sale featured shipping-taxable purchasable product-type-simple">
                                    <div class="product-inner">
                                        <div class="product-thumb">
                                            <a class="thumb-link"
                                               href="single-product.html"
                                               tabindex="0">
                                                <img class="img-responsive"
                                                     src="client_asset/images/apro71-1-90x90.jpg"
                                                     alt="Kid Backpack" width="90" height="90">
                                            </a>
                                        </div>
                                        <div class="product-info">
                                            <h3 class="product-name product_title">
                                                <a href="single-product.html"
                                                   tabindex="0">Kid Backpack</a>
                                            </h3>
                                            <div class="rating-wapper nostar">
                                                <div class="star-rating"><span
                                                        style="width:0%">Rated <strong
                                                            class="rating">0</strong> out of 5</span></div>
                                                <span class="review">(0)</span></div>
                                            <span class="price"><del><span
                                                        class="kodory-Price-amount amount"><span
                                                            class="kodory-Price-currencySymbol">$</span>109.00</span></del> <ins><span
                                                        class="kodory-Price-amount amount"><span
                                                            class="kodory-Price-currencySymbol">$</span>89.00</span></ins></span>
                                        </div>
                                    </div>
                                </div>
                                <div class="product-item on_sale style-06 rows-space-30 post-28 product type-product status-publish has-post-thumbnail product_cat-light product_cat-chair product_cat-sofas product_tag-light product_tag-sock last instock sale featured shipping-taxable purchasable product-type-simple">
                                    <div class="product-inner">
                                        <div class="product-thumb">
                                            <a class="thumb-link"
                                               href="single-product.html"
                                               tabindex="0">
                                                <img class="img-responsive"
                                                     src="client_asset/images/apro1211-2-90x90.jpg"
                                                     alt="Blue Shoes" width="90" height="90">
                                            </a>
                                        </div>
                                        <div class="product-info">
                                            <h3 class="product-name product_title">
                                                <a href="single-product.html"
                                                   tabindex="0">Blue Shoes</a>
                                            </h3>
                                            <div class="rating-wapper ">
                                                <div class="star-rating"><span
                                                        style="width:100%">Rated <strong
                                                            class="rating">5.00</strong> out of 5</span></div>
                                                <span class="review">(1)</span></div>
                                            <span class="price"><del><span
                                                        class="kodory-Price-amount amount"><span
                                                            class="kodory-Price-currencySymbol">$</span>138.00</span></del> <ins><span
                                                        class="kodory-Price-amount amount"><span
                                                            class="kodory-Price-currencySymbol">$</span>119.00</span></ins></span>
                                        </div>
                                    </div>
                                </div>
                                <div class="product-item on_sale style-06 rows-space-30 post-25 product type-product status-publish has-post-thumbnail product_cat-light product_cat-chair product_cat-specials product_tag-light product_tag-sock first instock sale featured shipping-taxable purchasable product-type-simple">
                                    <div class="product-inner">
                                        <div class="product-thumb">
                                            <a class="thumb-link"
                                               href="single-product.html"
                                               tabindex="-1">
                                                <img class="img-responsive"
                                                     src="client_asset/images/apro151-1-90x90.jpg"
                                                     alt="Modern Platinum" width="90" height="90">
                                            </a>
                                        </div>
                                        <div class="product-info">
                                            <h3 class="product-name product_title">
                                                <a href="single-product.html"
                                                   tabindex="-1">Modern Platinum</a>
                                            </h3>
                                            <div class="rating-wapper nostar">
                                                <div class="star-rating"><span
                                                        style="width:0%">Rated <strong
                                                            class="rating">0</strong> out of 5</span></div>
                                                <span class="review">(0)</span></div>
                                            <span class="price"><del><span
                                                        class="kodory-Price-amount amount"><span
                                                            class="kodory-Price-currencySymbol">$</span>89.00</span></del> <ins><span
                                                        class="kodory-Price-amount amount"><span
                                                            class="kodory-Price-currencySymbol">$</span>79.00</span></ins></span>
                                        </div>
                                    </div>
                                </div>
                                <div class="product-item on_sale style-06 rows-space-30 post-20 product type-product status-publish has-post-thumbnail product_cat-light product_cat-new-arrivals product_cat-specials product_tag-table product_tag-hat product_tag-sock  instock sale featured shipping-taxable purchasable product-type-simple">
                                    <div class="product-inner">
                                        <div class="product-thumb">
                                            <a class="thumb-link"
                                               href="single-product.html"
                                               tabindex="-1">
                                                <img class="img-responsive"
                                                     src="client_asset/images/apro201-1-90x90.jpg"
                                                     alt="Red Car" width="90" height="90">
                                            </a>
                                        </div>
                                        <div class="product-info">
                                            <h3 class="product-name product_title">
                                                <a href="single-product.html"
                                                   tabindex="-1">Red Car</a>
                                            </h3>
                                            <div class="rating-wapper nostar">
                                                <div class="star-rating"><span
                                                        style="width:0%">Rated <strong
                                                            class="rating">0</strong> out of 5</span></div>
                                                <span class="review">(0)</span></div>
                                            <span class="price"><del><span
                                                        class="kodory-Price-amount amount"><span
                                                            class="kodory-Price-currencySymbol">$</span>150.00</span></del> <ins><span
                                                        class="kodory-Price-amount amount"><span
                                                            class="kodory-Price-currencySymbol">$</span>139.00</span></ins></span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-12 col-lg-4">
                        <div class="row">
                            @foreach($bannersSelling as $item)
                            <div class="col-lg-12 col-md-6 col-sm-12">
                                <div class="kodory-banner style-12 left-center">
                                    <div class="banner-inner">
                                        <figure class="banner-thumb">
                                            <img src="{{ '/storage/app/public/'.str_replace('/original/','/small/',$item->image )}}"
                                                 class="attachment-full size-full" alt="img"></figure>
                                        <div class="banner-info ">
                                            <div class="banner-content">
                                                <div class="title-wrap">
                                                    <h6 class="title">{{ $item->name }}</h6>
                                                </div>
                                                <div class="cate">{!! $item->brief !!}</div>
                                                <div class="button-wrap">
                                                    <a class="button" target="{{$item->target}}"
                                                       href="{{$item->link}}"><span>Show now</span></a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            @endforeach
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="section-001 section-009">
            <div class="container">
                <div class="kodory-slide">
                    <div class="owl-slick equal-container better-height"
                         data-slick="{&quot;arrows&quot;:true,&quot;slidesMargin&quot;:60,&quot;dots&quot;:false,&quot;infinite&quot;:false,&quot;speed&quot;:300,&quot;slidesToShow&quot;:5,&quot;rows&quot;:1}"
                         data-responsive="[{&quot;breakpoint&quot;:480,&quot;settings&quot;:{&quot;slidesToShow&quot;:3,&quot;slidesMargin&quot;:&quot;30&quot;}},{&quot;breakpoint&quot;:768,&quot;settings&quot;:{&quot;slidesToShow&quot;:3,&quot;slidesMargin&quot;:&quot;30&quot;}},{&quot;breakpoint&quot;:992,&quot;settings&quot;:{&quot;slidesToShow&quot;:4,&quot;slidesMargin&quot;:&quot;40&quot;}},{&quot;breakpoint&quot;:1200,&quot;settings&quot;:{&quot;slidesToShow&quot;:5,&quot;slidesMargin&quot;:&quot;50&quot;}},{&quot;breakpoint&quot;:1500,&quot;settings&quot;:{&quot;slidesToShow&quot;:5,&quot;slidesMargin&quot;:&quot;60&quot;}}]">
                        @foreach($brandsHome as $item)
                            <div class="dreaming_single_image dreaming_content_element az_align_center">
                                <figure class="dreaming_wrapper az_figure">
                                    <div class="az_single_image-wrapper   az_box_border_grey effect bounce-in ">
                                        <img src="{{ '/storage/app/public/'.str_replace('/original/','/small/',$item->image )}}"
                                            class="az_single_image-img attachment-full" alt="img" width="200" height="100">
                                    </div>
                                </figure>
                            </div>    
                        @endforeach
                    </div>
                </div>
            </div>
        </div>

        {{--List news--}}
        <div class="section-001">
            <div class="container">
                <div class="kodory-heading style-01">
                    <div class="heading-inner">
                        <h3 class="title">
                            From Our Blog<span></span></h3>
                        <div class="subtitle">
                            Lore ipsum dolor sit amet consectetur
                        </div>
                    </div>
                </div>
                <div class="kodory-blog style-01">
                    <div class="blog-list-owl owl-slick equal-container better-height"
                         data-slick="{&quot;arrows&quot;:true,&quot;slidesMargin&quot;:30,&quot;dots&quot;:true,&quot;infinite&quot;:false,&quot;speed&quot;:300,&quot;slidesToShow&quot;:3,&quot;rows&quot;:1}"
                         data-responsive="[{&quot;breakpoint&quot;:480,&quot;settings&quot;:{&quot;slidesToShow&quot;:1,&quot;slidesMargin&quot;:&quot;10&quot;}},{&quot;breakpoint&quot;:768,&quot;settings&quot;:{&quot;slidesToShow&quot;:1,&quot;slidesMargin&quot;:&quot;10&quot;}},{&quot;breakpoint&quot;:992,&quot;settings&quot;:{&quot;slidesToShow&quot;:2,&quot;slidesMargin&quot;:&quot;20&quot;}},{&quot;breakpoint&quot;:1200,&quot;settings&quot;:{&quot;slidesToShow&quot;:2,&quot;slidesMargin&quot;:&quot;20&quot;}},{&quot;breakpoint&quot;:1500,&quot;settings&quot;:{&quot;slidesToShow&quot;:3,&quot;slidesMargin&quot;:&quot;30&quot;}}]">
                        @foreach($newsHome as $key=> $item)
                            <article
                                class="post-item post-grid rows-space-0 post-{{$item->id}} post type-post status-publish format-standard has-post-thumbnail hentry category-light category-table category-life-style tag-light tag-life-style">
                                <div class="post-inner blog-grid">
                                    <div class="post-thumb">
                                        <a href="{{ route('client_detail_news', ['id' => $item->id, 'alias' => $item->alias]) }}" tabindex="0">
                                            <img src="{{ '/storage/app/public/'.str_replace('/original/','/small/',$item->image )}}"
                                                 class="img-responsive attachment-370x330 size-370x330" alt="img"
                                                 width="370" height="330"> </a>
                                    </div>
                                    <div class="post-content">
                                        <div class="post-meta">
                                            <div class="post-author">
                                                <a href="javascript:void(0);"> admin </a>
                                            </div>
                                            <div class="date">
                                                <a href="javascript:void(0);">{{ date('F j, Y, g:i a', strtotime($item->created_at)) }}</a>
                                            </div>
                                        </div>
                                        <div class="post-info equal-elem">
                                            <h2 class="post-title">
                                                <a href="{{ route('client_detail_news', ['id' => $item->id, 'alias' => $item->alias]) }}" tabindex="0">
                                                    {{$item->name}}
                                                </a>
                                            </h2>
                                            {{$item->brief}}
                                        </div>
                                    </div>
                                </div>
                            </article>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
