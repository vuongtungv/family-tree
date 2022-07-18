{{ $client_url_base = URL::to('/') }}

<header id="header" class="header style-02 header-dark header-sticky header-transparent">
    <div class="header-wrap-stick">
        <div class="header-position">
            <div class="header-middle">
                <div class="kodory-menu-wapper"></div>
                <div class="header-middle-inner">
                    <div class="header-search-menu">
                        <div class="block-menu-bar">
                            <a class="menu-bar menu-toggle" href="#">
                                <span></span>
                                <span></span>
                                <span></span>
                            </a>
                        </div>
                    </div>
                    <div class="header-logo-nav">
                        <div class="header-logo">
                            <a href="{{route("client_home")}}">
                                <img alt="Kogitr" src="logo_text_151_41.png" class="logo">
                            </a>
                        </div>
                        <div class="box-header-nav menu-nocenter">
                            <ul id="menu-primary-menu" class="clone-main-menu kodory-clone-mobile-menu kodory-nav main-menu">
                                @foreach($listMenus as $key => $item)
                                    @if($item->level == 0)
                                        <li id="menu-item-{{$item->id}}"
                                            class="menu-item menu-item-type-post_type menu-item-object-megamenu menu-item-{{$item->id}} parent parent-megamenu item-megamenu menu-item-has-children">
                                            <a class="kodory-menu-item-title" title="{{$item->name}}" href="{{$client_url_base.$item->link}}" target="{{$item->target}}">{{$item->name}}</a>
                                            @if($item->child)
                                                <span class="toggle-submenu"></span>
                                                <div class="submenu megamenu megamenu-{{strtolower($item->alias)}}">
                                                    <div class="row">
                                                        <div class="col-md-4">
                                                            <div class="kodory-listitem style-01">
                                                                <div class="listitem-inner">
                                                                    <h4 class="title">
                                                                        {{ ucfirst($item->name) }} categories </h4>
                                                                    <ul class="listitem-list">
                                                                        @foreach($item->child as $cl)
                                                                        <li>
                                                                            <a href="{{ str_replace('{$id}', $cl->id, $client_url_base.$cl->link )}}" target="{{$cl->target}}">{{$cl->name}}</a>
                                                                        </li>
                                                                        @endforeach
                                                                    </ul>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            @endif
                                        </li>
                                    @endif
                                @endforeach
                            </ul>
                        </div>
                    </div>
                    <div class="header-control">
                        <div class="header-control-inner">
                            <div class="meta-dreaming">
                                <ul class="wpml-menu">
                                    {{--<li class="menu-item kodory-dropdown block-language">--}}
                                        {{--<a href="#" data-kodory="kodory-dropdown">--}}
                                            {{--<img src="client_asset/images/en.png"--}}
                                                 {{--alt="en" width="18" height="12">--}}
                                            {{--English--}}
                                        {{--</a>--}}
                                        {{--<span class="toggle-submenu"></span>--}}
                                        {{--<ul class="sub-menu">--}}
                                            {{--<li class="menu-item">--}}
                                                {{--<a href="#">--}}
                                                    {{--<img src="client_asset/images/it.png"--}}
                                                         {{--alt="it" width="18" height="12">--}}
                                                    {{--Italiano--}}
                                                {{--</a>--}}
                                            {{--</li>--}}
                                        {{--</ul>--}}
                                    {{--</li>--}}
                                    {{--<li class="menu-item">--}}
                                        {{--<div class="wcml-dropdown product wcml_currency_switcher">--}}
                                            {{--<ul>--}}
                                                {{--<li class="wcml-cs-active-currency">--}}
                                                    {{--<a class="wcml-cs-item-toggle">USD</a>--}}
                                                    {{--<ul class="wcml-cs-submenu">--}}
                                                        {{--<li>--}}
                                                            {{--<a>EUR</a>--}}
                                                        {{--</li>--}}
                                                    {{--</ul>--}}
                                                {{--</li>--}}
                                            {{--</ul>--}}
                                        {{--</div>--}}
                                    {{--</li>--}}
                                </ul>
                                <div class="header-search kodory-dropdown">
                                    <div class="header-search-inner" data-kodory="kodory-dropdown">
                                        <a href="#" class="link-dropdown block-link">
                                            <span class="flaticon-magnifying-glass-1"></span>
                                        </a>
                                    </div>
                                    <div class="block-search">
                                        <form role="search" method="get"
                                              class="form-search block-search-form kodory-live-search-form">
                                            <div class="form-content search-box results-search">
                                                <div class="inner">
                                                    <input autocomplete="off" class="searchfield txt-livesearch input"
                                                           name="s" value="" placeholder="Search here..." type="text">
                                                </div>
                                            </div>
                                            <input name="post_type" value="product" type="hidden">
                                            <input name="taxonomy" value="product_cat" type="hidden">
                                            <div class="category">
                                                <select title="product_cat" name="product_cat" id="64788262"
                                                        class="category-search-option"
                                                        tabindex="-1" style="display: none;">
                                                    <option value="0">All Categories</option>
                                                    <option class="level-0" value="Toy">Toys</option>
                                                    <option class="level-0" value="Teddy Bear">Teddy Bear</option>
                                                    <option class="level-0" value="Clothing">Clothing</option>
                                                    <option class="level-0" value="Backpack">Backpack</option>
                                                    <option class="level-0" value="new-arrivals">New arrivals</option>
                                                    <option class="level-0" value="Footwear">Footwear</option>
                                                    <option class="level-0" value="T-shirt">T-shirt</option>
                                                    <option class="level-0" value="Hoodie">Hoodie</option>
                                                </select>
                                            </div>
                                            <button type="submit" class="btn-submit">
                                                <span class="flaticon-magnifying-glass-1"></span>
                                            </button>
                                        </form><!-- block search -->
                                    </div>
                                </div>
                                <div class="kodory-dropdown-close">x</div>
                                {{--<div class="menu-item block-user block-dreaming kodory-dropdown">--}}
                                    {{--<a class="block-link" href="my-account.html">--}}
                                        {{--<span class="flaticon-profile"></span>--}}
                                    {{--</a>--}}
                                    {{--<ul class="sub-menu">--}}
                                        {{--<li class="menu-item kodory-MyAccount-navigation-link kodory-MyAccount-navigation-link--dashboard is-active">--}}
                                            {{--<a href="#">Dashboard</a>--}}
                                        {{--</li>--}}
                                        {{--<li class="menu-item kodory-MyAccount-navigation-link kodory-MyAccount-navigation-link--orders">--}}
                                            {{--<a href="#">Orders</a>--}}
                                        {{--</li>--}}
                                        {{--<li class="menu-item kodory-MyAccount-navigation-link kodory-MyAccount-navigation-link--downloads">--}}
                                            {{--<a href="#">Downloads</a>--}}
                                        {{--</li>--}}
                                        {{--<li class="menu-item kodory-MyAccount-navigation-link kodory-MyAccount-navigation-link--edit-address">--}}
                                            {{--<a href="#">Addresses</a>--}}
                                        {{--</li>--}}
                                        {{--<li class="menu-item kodory-MyAccount-navigation-link kodory-MyAccount-navigation-link--edit-account">--}}
                                            {{--<a href="#">Account details</a>--}}
                                        {{--</li>--}}
                                        {{--<li class="menu-item kodory-MyAccount-navigation-link kodory-MyAccount-navigation-link--customer-logout">--}}
                                            {{--<a href="#">Logout</a>--}}
                                        {{--</li>--}}
                                    {{--</ul>--}}
                                {{--</div>--}}
                                <div class="block-minicart block-dreaming kodory-mini-cart kodory-dropdown">
                                    <div class="shopcart-dropdown block-cart-link" data-kodory="kodory-dropdown">
                                        <a class="block-link link-dropdown" href="cart.html">
                                            <span class="flaticon-shopping-bag-1"></span>
                                            <span class="count">3</span>
                                        </a>
                                    </div>
                                    <div class="widget kodory widget_shopping_cart">
                                        <div class="widget_shopping_cart_content">
                                            <h3 class="minicart-title">Your Cart<span
                                                    class="minicart-number-items">3</span></h3>
                                            <ul class="kodory-mini-cart cart_list product_list_widget">
                                                <li class="kodory-mini-cart-item mini_cart_item">
                                                    <a href="#" class="remove remove_from_cart_button">×</a>
                                                    <a href="#">
                                                        <img src="client_asset/images/apro134-1-600x778.jpg"
                                                             class="attachment-kodory_thumbnail size-kodory_thumbnail"
                                                             alt="img" width="600" height="778">T-shirt with skirt –
                                                        Pink&nbsp;
                                                    </a>
                                                    <span class="quantity">1 × <span
                                                            class="kodory-Price-amount amount"><span
                                                                class="kodory-Price-currencySymbol">$</span>150.00</span></span>
                                                </li>
                                                <li class="kodory-mini-cart-item mini_cart_item">
                                                    <a href="#" class="remove remove_from_cart_button">×</a>
                                                    <a href="#">
                                                        <img src="client_asset/images/apro1113-600x778.jpg"
                                                             class="attachment-kodory_thumbnail size-kodory_thumbnail"
                                                             alt="img" width="600" height="778">Ethereal Toys&nbsp;
                                                    </a>
                                                    <span class="quantity">1 × <span
                                                            class="kodory-Price-amount amount"><span
                                                                class="kodory-Price-currencySymbol">$</span>129.00</span></span>
                                                </li>
                                                <li class="kodory-mini-cart-item mini_cart_item">
                                                    <a href="#" class="remove remove_from_cart_button">×</a>
                                                    <a href="#">
                                                        <img src="client_asset/images/apro201-1-600x778.jpg"
                                                             class="attachment-kodory_thumbnail size-kodory_thumbnail"
                                                             alt="img" width="600" height="778">Red Car&nbsp;
                                                    </a>
                                                    <span class="quantity">1 × <span
                                                            class="kodory-Price-amount amount"><span
                                                                class="kodory-Price-currencySymbol">$</span>139.00</span></span>
                                                </li>
                                            </ul>
                                            <p class="kodory-mini-cart__total total"><strong>Subtotal:</strong>
                                                <span class="kodory-Price-amount amount"><span
                                                        class="kodory-Price-currencySymbol">$</span>418.00</span>
                                            </p>
                                            <p class="kodory-mini-cart__buttons buttons">
                                                <a href="cart.html" class="button kodory-forward">Viewcart</a>
                                                <a href="checkout.html"
                                                   class="button checkout kodory-forward">Checkout</a>
                                            </p>
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




    <div class="header-mobile">
        <div class="header-mobile-left">
            <div class="block-menu-bar">
                <a class="menu-bar menu-toggle" href="#">
                    <span></span>
                    <span></span>
                    <span></span>
                </a>
            </div>
            <div class="header-search kodory-dropdown">
                <div class="header-search-inner" data-kodory="kodory-dropdown">
                    <a href="#" class="link-dropdown block-link">
                        <span class="flaticon-magnifying-glass-1"></span>
                    </a>
                </div>
                <div class="block-search">
                    <form role="search" method="get"
                          class="form-search block-search-form kodory-live-search-form">
                        <div class="form-content search-box results-search">
                            <div class="inner">
                                <input autocomplete="off" class="searchfield txt-livesearch input" name="s" value=""
                                       placeholder="Search here..." type="text">
                            </div>
                        </div>
                        <input name="post_type" value="product" type="hidden">
                        <input name="taxonomy" value="product_cat" type="hidden">
                        <div class="category">
                            <select title="product_cat" name="product_cat"
                                    class="category-search-option" tabindex="-1"
                            >
                                <option value="0">All Categories</option>
                                <option class="level-0" value="Toy">Toys</option>
                                <option class="level-0" value="Teddy Bear">Teddy Bear</option>
                                <option class="level-0" value="Clothing">Clothing</option>
                                <option class="level-0" value="Backpack">Backpack</option>
                                <option class="level-0" value="new-arrivals">New arrivals</option>
                                <option class="level-0" value="Footwear">Footwear</option>
                                <option class="level-0" value="T-shirt">T-shirt</option>
                                <option class="level-0" value="Hoodie">Hoodie</option>
                            </select>
                        </div>
                        <button type="submit" class="btn-submit">
                            <span class="flaticon-magnifying-glass-1"></span>
                        </button>
                    </form><!-- block search -->
                </div>
            </div>
            <ul class="wpml-menu">
                <li class="menu-item kodory-dropdown block-language">
                    <a href="#" data-kodory="kodory-dropdown">
                        <img src="client_asset/images/en.png"
                             alt="en" width="18" height="12">
                        English
                    </a>
                    <span class="toggle-submenu"></span>
                    <ul class="sub-menu">
                        <li class="menu-item">
                            <a href="#">
                                <img src="client_asset/images/it.png"
                                     alt="it" width="18" height="12">
                                Italiano
                            </a>
                        </li>
                    </ul>
                </li>
                <li class="menu-item">
                    <div class="wcml-dropdown product wcml_currency_switcher">
                        <ul>
                            <li class="wcml-cs-active-currency">
                                <a class="wcml-cs-item-toggle">USD</a>
                                <ul class="wcml-cs-submenu">
                                    <li>
                                        <a>EUR</a>
                                    </li>
                                </ul>
                            </li>
                        </ul>
                    </div>
                </li>
            </ul>
        </div>
        <div class="header-mobile-mid">
            <div class="header-logo">
                <a href="index.html"><img alt="Kodory" src="client_asset/images/logo.png" class="logo"></a>
            </div>
        </div>
        <div class="header-mobile-right">
            <div class="header-control-inner">
                <div class="meta-dreaming">
                    <div class="menu-item block-user block-dreaming kodory-dropdown">
                        <a class="block-link" href="my-account.html">
                            <span class="flaticon-profile"></span>
                        </a>
                        <ul class="sub-menu">
                            <li class="menu-item kodory-MyAccount-navigation-link kodory-MyAccount-navigation-link--dashboard is-active">
                                <a href="#">Dashboard</a>
                            </li>
                            <li class="menu-item kodory-MyAccount-navigation-link kodory-MyAccount-navigation-link--orders">
                                <a href="#">Orders</a>
                            </li>
                            <li class="menu-item kodory-MyAccount-navigation-link kodory-MyAccount-navigation-link--downloads">
                                <a href="#">Downloads</a>
                            </li>
                            <li class="menu-item kodory-MyAccount-navigation-link kodory-MyAccount-navigation-link--edit-address">
                                <a href="#">Addresses</a>
                            </li>
                            <li class="menu-item kodory-MyAccount-navigation-link kodory-MyAccount-navigation-link--edit-account">
                                <a href="#">Account details</a>
                            </li>
                            <li class="menu-item kodory-MyAccount-navigation-link kodory-MyAccount-navigation-link--customer-logout">
                                <a href="#">Logout</a>
                            </li>
                        </ul>
                    </div>
                    <div class="block-minicart block-dreaming kodory-mini-cart kodory-dropdown">
                        <div class="shopcart-dropdown block-cart-link" data-kodory="kodory-dropdown">
                            <a class="block-link link-dropdown" href="cart.html">
                                <span class="flaticon-shopping-bag-1"></span>
                                <span class="count">3</span>
                            </a>
                        </div>
                        <div class="widget kodory widget_shopping_cart">
                            <div class="widget_shopping_cart_content">
                                <h3 class="minicart-title">Your Cart<span class="minicart-number-items">3</span></h3>
                                <ul class="kodory-mini-cart cart_list product_list_widget">
                                    <li class="kodory-mini-cart-item mini_cart_item">
                                        <a href="#" class="remove remove_from_cart_button">×</a>
                                        <a href="#">
                                            <img src="client_asset/images/apro134-1-600x778.jpg"
                                                 class="attachment-kodory_thumbnail size-kodory_thumbnail"
                                                 alt="img" width="600" height="778">T-shirt with skirt – Pink&nbsp;
                                        </a>
                                        <span class="quantity">1 × <span
                                                class="kodory-Price-amount amount"><span
                                                    class="kodory-Price-currencySymbol">$</span>150.00</span></span>
                                    </li>
                                    <li class="kodory-mini-cart-item mini_cart_item">
                                        <a href="#" class="remove remove_from_cart_button">×</a>
                                        <a href="#">
                                            <img src="client_asset/images/apro1113-600x778.jpg"
                                                 class="attachment-kodory_thumbnail size-kodory_thumbnail"
                                                 alt="img" width="600" height="778">Ethereal Toys&nbsp;
                                        </a>
                                        <span class="quantity">1 × <span
                                                class="kodory-Price-amount amount"><span
                                                    class="kodory-Price-currencySymbol">$</span>129.00</span></span>
                                    </li>
                                    <li class="kodory-mini-cart-item mini_cart_item">
                                        <a href="#" class="remove remove_from_cart_button">×</a>
                                        <a href="#">
                                            <img src="client_asset/images/apro201-1-600x778.jpg"
                                                 class="attachment-kodory_thumbnail size-kodory_thumbnail"
                                                 alt="img" width="600" height="778">Red Car&nbsp;
                                        </a>
                                        <span class="quantity">1 × <span
                                                class="kodory-Price-amount amount"><span
                                                    class="kodory-Price-currencySymbol">$</span>139.00</span></span>
                                    </li>
                                </ul>
                                <p class="kodory-mini-cart__total total"><strong>Subtotal:</strong>
                                    <span class="kodory-Price-amount amount"><span
                                            class="kodory-Price-currencySymbol">$</span>418.00</span>
                                </p>
                                <p class="kodory-mini-cart__buttons buttons">
                                    <a href="cart.html" class="button kodory-forward">Viewcart</a>
                                    <a href="checkout.html" class="button checkout kodory-forward">Checkout</a>
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</header>
