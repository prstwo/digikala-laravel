
<header class="page-main-header static md:sticky top-0 righ-0 left-0 z-50 bg-white relative">
    <div class="mobile-header px-4 py-3">
        <div class="header-one py-2 mb-2 border-b border-gray-100 ">
            <div class="sandwich-menu js-m-sandwich-menu ">

                <a href="#mobile-menu-container" class="js-sandwich-btn">
                    <i class="fa fa-align-justify "></i>
                </a>
            </div>
            <div class="digikala-icon-container">
                <a href="#digikala">
                    <img src={{asset("images/digikala.svg")}} alt="digikala">
                </a>
            </div>
            <div class="question-mark">
                <i class="fa fa-question text-lg"></i>
            </div>
        </div>
        <div class="header-two py-2 mb-2  border-b border-gray-100">
            <div class="px-0  header-search">
                <i class="fa fa-search w-11 h-search-btn relative"></i>
                <input type="text" class="w-full h-full py-3  pl-2 pr-1 search-input " placeholder="جستجو در دیجی&zwnj;کالا …" >
            </div>
            <div class="flex flex-row justify-center items-center content-center">
                <div class="m-header-login px-3 py-0 flex flex-row justify-center items-center content-center ">
                    <i class="fa fa-sign-in text-2xl	leading-7 ml-2"></i>
                    ورود
                </div>
                <div class="header-btn-container header-btn-cart-container px-3 py-0 flex items-center">
                    <i class="fa fa-shopping-cart text-2xl	leading-7 ml-2"></i>
                </div>
            </div>
        </div>
        <div class="header-three flex flex-row justify-between py-2 mb-2 mt-2 border-b border-gray-100">
            <div class="nav-location-link">
                <div class="nav-location">
                    <i class="fa fa-map-marker mr-2 ml-3 text-yellow-500 text-2xl"></i>
                    لطفا شهر و استان خود را انتخاب کنید
                </div>
            </div>
            <div>
                <x-angles.angle-left/>
            </div>
        </div>

    </div>

    <div class="desktop-header-container hidden md:flex  px-4 py-3 flex-row flex-wrap justify-between">

        <div class="desktop-header header-right-side flex content-center flex-grow">
            <div class="mr-2 ml-6 w-100 flex items-center">
                <a href="digikala">
                    <img src={{asset("images/digikala.svg")}} alt="digikala">
                </a>
            </div>
            <div class="px-0  header-search">
                <i class="fa fa-search w-11 h-search-btn relative"></i>
                <input type="text" class="w-full h-full py-3  pl-2 pr-1 search-input js-search-input" placeholder="جستجو در دیجی&zwnj;کالا …">
            </div>
        </div>
        <div class="header-action  flex flex-row">
            <div class="header-btn-container px-3 py-0">
                <div class="header-btn">
                    <a href="#account" class="header-btn-a py-3 px-3 text-sm rounded-md flex items-center flex-shrink-0">
                        <i class="fa fa-user-o leading-7 ml-2"></i>
                        ورود به حساب کاربری
                    </a>
                </div>
            </div>
            <div class="header-btn-container header-btn-cart-container px-3 py-0 flex items-center">
                <i class="fa fa-shopping-cart text-2xl	leading-7 ml-2"></i>
            </div>

        </div>
    </div>
    <!-- desktop navbar-->
    <nav class="desktop-nav js-desktop-nav   hidden md:block ">
        <div class="nav-container ">
            <div class="nav pt-3 px-4" id="navbar">
                <div class="nav-items">
                    <ul class="nav-ul flex relative h-12">
                        <li class="nav-link js-nav-link">
                            <a href="#categories-page" class="  nav-link-title mega-menu-link toggle" >
                                <i class="fa fa-list-ul"></i>
                                دسته بندی کالاها
                            </a>
                            <div class="submenu top-12 absolute " >
                                <div class="submenu-titles flex flex-col">
                                    {{--مطلع نیستم که این دیتای گلوبال رو کجا تعریف کنم. احتمال میدم یک layout کنترولر نداره. --}}
                                    @foreach($categoriesSubmenu as $categorysubmenu)
                                        <a href="#submenu" class="submenu-title {{$categorysubmenu['class']}}" >
                                            <i class="fa  {!! $categorysubmenu['fa-class']!!}"></i>
                                            {{$categorysubmenu['cat']}}
                                        </a>
                                    @endforeach
                                </div>
                                <div class="submenu-items-container flex flex-col w-full">
                                    <div class="submenu-items-one js-nav-submenu-items js-kalaye-digital-menu  p-3">
                                        <div class="submenu-items-side w-full">
                                            <div class="submenu-top-bar">
                                                <a href="#link">
                                                    همه دسته‌بندی‌های کالای دیجیتال  <x-angle-left/>

                                                </a>
                                            </div>
                                            <ul>
                                                <li class="submenu-lists">
                                                    <div class="submenu-lists-title">
                                                        لوازم جانبی و گوشی @section('angle-left')
                                                        @show
                                                    </div>
                                                    <a href="#category" class="submenu-list-link">کیف و کاور گوشی</a>
                                                    <a href="#category" class="submenu-list-link">پاوربانک</a>
                                                    <a href="#category" class="submenu-list-link">پایه نگهدانرنده گوشی</a>

                                                </li>
                                                <li class="submenu-lists">
                                                    <div class="submenu-lists-title">
                                                        گوشی موبایل <x-angle-left/>
                                                    </div>
                                                    <a href="#category" class="submenu-list-link">سامسونگ</a>
                                                    <a href="#category" class="submenu-list-link">اپل</a>
                                                    <a href="#category" class="submenu-list-link">هواوی</a>
                                                    <a href="#category" class="submenu-list-link">شیاُومی</a>
                                                    <a href="#category" class="submenu-list-link">نوکیا</a>
                                                    <a href="#category" class="submenu-list-link">آنر</a>
                                                </li>
                                                <li class="submenu-lists">
                                                    <div class="submenu-lists-title">
                                                        واقعیت مجازی <x-angle-left/>
                                                    </div>

                                                </li>
                                                <li class="submenu-lists">
                                                    <div class="submenu-lists-title">
                                                        مچ بند و ساعت هوشمند <x-angle-left/>
                                                    </div>
                                                </li>

                                            </ul>
                                        </div>
                                        <!-- inja az yield estefade konam -->
                                        <div class="nav-new-ads mt-0 mx-5 mb-5 flex flex-col justify-between">
                                            <div class="w-full ">
                                                <a href="#banner">
                                                    <div class="banner-item relative">
                                                        <img src="images/beauty.jpg" alt="محصولات زیبایی">
                                                        <div class="adplacement-badge-banner flex flex-row-reverse  bg-white">
                                                            <img src="images/ad.svg">
                                                            <span>Ad</span>
                                                        </div>
                                                    </div>
                                                </a>

                                            </div>
                                            <x-navbar-new-brands-sec/>

                                        </div>
                                    </div>
                                    <div class="submenu-items-one js-nav-submenu-items js-abzar-sanati-menu p-3" style="display: none">
                                        <div class="submenu-items-side w-full">
                                            <div class="submenu-top-bar">
                                                <a href="#link">
                                                    همه دسته‌بندی‌های وسایل نقلیه و صنعتی<i class="fa fa-angle-left"></i>
                                                </a>
                                            </div>
                                            <ul>
                                                <li class="submenu-lists">
                                                    <div class="submenu-lists-title">
                                                        خودروهای ایرانی و خارجی <i class="fa fa-angle-left"></i>
                                                    </div>
                                                    <div class="submenu-lists-title">
                                                        موتور سیکلت <i class="fa fa-angle-left"></i>
                                                    </div>
                                                    <div class="submenu-lists-title">
                                                        لوازم جانبی خودرو و موتور سیکلت <i class="fa fa-angle-left"></i>
                                                    </div>
                                                    <x-submenu-list-link.submenu-list-link innerText="کیف و کاور گوشی"/>
                                                    <x-submenu-list-link.submenu-list-link innerText="پاوربانک"/>
                                                    <x-submenu-list-link.submenu-list-link innerText="پایه نگهدانرنده گوشی"/>

                                                </li>
                                                <li class="submenu-lists">
                                                    <div class="submenu-lists-title">
                                                        گوشی موبایل <i class="fa fa-angle-left"></i>
                                                    </div>
                                                    <x-submenu-list-link.submenu-list-link innerText="سامسونگ"/>
                                                    <x-submenu-list-link.submenu-list-link innerText="اپل"/>
                                                    <x-submenu-list-link.submenu-list-link innerText="اپل"/>
                                                    <x-submenu-list-link.submenu-list-link innerText="شیاُومی"/>
                                                    <x-submenu-list-link.submenu-list-link innerText="نوکیا"/>
                                                    <x-submenu-list-link.submenu-list-link innerText="آنر"/>
                                                </li>
                                                <li class="submenu-lists">
                                                    <div class="submenu-lists-title">
                                                        واقعیت مجازی <i class="fa fa-angle-left"></i>
                                                    </div>

                                                </li>
                                                <li class="submenu-lists">
                                                    <div class="submenu-lists-title">
                                                        مچ بند و ساعت هوشمند <i class="fa fa-angle-left"></i>
                                                    </div>
                                                </li>

                                            </ul>
                                        </div>
                                        <!-- inja az yield estefade konam -->
                                        <div class="nav-new-ads mt-0 mx-5 mb-5 flex flex-col justify-between">
                                            <div class="w-full ">
                                                <a href="#banner">
                                                    <div class="banner-item relative">
                                                        <img src="images/beauty.jpg" alt="محصولات زیبایی">
                                                        <div class="adplacement-badge-banner flex flex-row-reverse  bg-white">
                                                            <img src="images/ad.svg">
                                                            <span>Ad</span>
                                                        </div>
                                                    </div>
                                                </a>

                                            </div>
                                            <x-navbar-new-brands-sec/>
                                        </div>
                                    </div>
                                    <div class="submenu-items-one js-nav-submenu-items  js-mod-menu p-3"  style="display: none">
                                        <div class="submenu-items-side w-full">
                                            <div class="submenu-top-bar">
                                                <a href="#link">
                                                    همه دسته&zwnj;بندی&zwnj;های مد و پوشاک <i class="fa fa-angle-left"></i>
                                                </a>
                                            </div>
                                            <ul>
                                                <li class="submenu-lists">
                                                    <div class="submenu-lists-title">
                                                        لوازم جانبی و گوشی <i class="fa fa-angle-left"></i>
                                                    </div>
                                                    <x-submenu-list-link.submenu-list-link innerText="کیف و کاور گوشی"/>
                                                    <x-submenu-list-link.submenu-list-link innerText="پاوربانک"/>
                                                    <x-submenu-list-link.submenu-list-link innerText="پایه نگهدانرنده گوشی"/>

                                                </li>
                                                <li class="submenu-lists">
                                                    <div class="submenu-lists-title">
                                                        گوشی موبایل <i class="fa fa-angle-left"></i>
                                                    </div>
                                                    <x-submenu-list-link.submenu-list-link innerText="سامسونگ"/>
                                                    <x-submenu-list-link.submenu-list-link innerText="اپل"/>
                                                    <x-submenu-list-link.submenu-list-link innerText="اپل"/>
                                                    <x-submenu-list-link.submenu-list-link innerText="شیاُومی"/>
                                                    <x-submenu-list-link.submenu-list-link innerText="نوکیا"/>
                                                    <x-submenu-list-link.submenu-list-link innerText="آنر"/>
                                                </li>
                                                <li class="submenu-lists">
                                                    <div class="submenu-lists-title">
                                                        واقعیت مجازی <i class="fa fa-angle-left"></i>
                                                    </div>

                                                </li>
                                                <li class="submenu-lists">
                                                    <div class="submenu-lists-title">
                                                        مچ بند و ساعت هوشمند <i class="fa fa-angle-left"></i>
                                                    </div>
                                                </li>

                                            </ul>
                                        </div>
                                        <!-- inja az yield estefade konam -->
                                        <div class="nav-new-ads mt-0 mx-5 mb-5 flex flex-col justify-between">
                                            <div class="w-full ">
                                                <a href="#banner">
                                                    <div class="banner-item relative">
                                                        <img src="images/beauty.jpg" alt="محصولات زیبایی">
                                                        <div class="adplacement-badge-banner flex flex-row-reverse  bg-white">
                                                            <img src="images/ad.svg">
                                                            <span>Ad</span>
                                                        </div>
                                                    </div>
                                                </a>

                                            </div>
                                            <x-navbar-new-brands-sec/>
                                        </div>
                                    </div>
                                    <div class="submenu-items-one js-nav-submenu-items js-asbab-bazi-menu p-3 "  style="display: none">
                                        <div class="submenu-items-side w-full">
                                            <div class="submenu-top-bar">
                                                <a href="#link">
                                                    همه دسته‌بندی‌های وسایل نقلیه و صنعتی<i class="fa fa-angle-left"></i>
                                                </a>
                                            </div>
                                            <ul>
                                                <li class="submenu-lists">
                                                    <div class="submenu-lists-title">
                                                        خودروهای ایرانی و خارجی <i class="fa fa-angle-left"></i>
                                                    </div>
                                                    <div class="submenu-lists-title">
                                                        موتور سیکلت <i class="fa fa-angle-left"></i>
                                                    </div>
                                                    <div class="submenu-lists-title">
                                                        لوازم جانبی خودرو و موتور سیکلت <i class="fa fa-angle-left"></i>
                                                    </div>
                                                    <x-submenu-list-link.submenu-list-link innerText="کیف و کاور گوشی"/>
                                                    <x-submenu-list-link.submenu-list-link innerText="پایه نگهدانرنده گوشی"/>
                                                    <x-submenu-list-link.submenu-list-link innerText="پاوربانک"/>

                                                </li>
                                                <li class="submenu-lists">
                                                    <div class="submenu-lists-title">
                                                        گوشی موبایل <i class="fa fa-angle-left"></i>
                                                    </div>
                                                    <x-submenu-list-link.submenu-list-link innerText="سامسونگ"/>
                                                    <x-submenu-list-link.submenu-list-link innerText="اپل"/>
                                                    <x-submenu-list-link.submenu-list-link innerText="اپل"/>
                                                    <x-submenu-list-link.submenu-list-link innerText="شیاُومی"/>
                                                    <x-submenu-list-link.submenu-list-link innerText="نوکیا"/>
                                                    <x-submenu-list-link.submenu-list-link innerText="آنر"/>
                                                </li>
                                                <li class="submenu-lists">
                                                    <div class="submenu-lists-title">
                                                        واقعیت مجازی <i class="fa fa-angle-left"></i>
                                                    </div>

                                                </li>
                                                <li class="submenu-lists">
                                                    <div class="submenu-lists-title">
                                                        مچ بند و ساعت هوشمند <i class="fa fa-angle-left"></i>
                                                    </div>
                                                </li>

                                            </ul>
                                        </div>
                                        <!-- inja az yield estefade konam -->
                                        <div class="nav-new-ads mt-0 mx-5 mb-5 flex flex-col justify-between">
                                            <div class="w-full ">
                                                <a href="#banner">
                                                    <div class="banner-item relative">
                                                        <img src="images/beauty.jpg" alt="محصولات زیبایی">
                                                        <div class="adplacement-badge-banner flex flex-row-reverse  bg-white">
                                                            <img src="images/ad.svg">
                                                            <span>Ad</span>
                                                        </div>
                                                    </div>
                                                </a>

                                            </div>
                                            <x-navbar-new-brands-sec/>
                                        </div>

                                    </div>
                                    <div class="submenu-items-one js-nav-submenu-items js-salamet-menu p-3"  style="display: none">
                                        <div class="submenu-items-side w-full">
                                            <div class="submenu-top-bar">
                                                <a href="#link">
                                                    همه دسته&zwnj;بندی&zwnj;های آرایشی و بهداشتی <i class="fa fa-angle-left"></i>
                                                </a>
                                            </div>
                                            <ul>
                                                <li class="submenu-lists">
                                                    <div class="submenu-lists-title">
                                                        لوازم جانبی و گوشی <i class="fa fa-angle-left"></i>
                                                    </div>
                                                    <x-submenu-list-link.submenu-list-link innerText="کیف و کاور گوشی"/>
                                                    <x-submenu-list-link.submenu-list-link innerText="پاوربانک"/>
                                                    <x-submenu-list-link.submenu-list-link innerText="پایه نگهدانرنده گوشی"/>

                                                </li>
                                                <li class="submenu-lists">
                                                    <div class="submenu-lists-title">
                                                        لوازم آرایشی <i class="fa fa-angle-left"></i>
                                                    </div>
                                                    <x-submenu-list-link.submenu-list-link innerText="سامسونگ"/>
                                                    <x-submenu-list-link.submenu-list-link innerText="اپل"/>
                                                    <x-submenu-list-link.submenu-list-link innerText="اپل"/>
                                                    <x-submenu-list-link.submenu-list-link innerText="شیاُومی"/>
                                                    <x-submenu-list-link.submenu-list-link innerText="نوکیا"/>
                                                    <x-submenu-list-link.submenu-list-link innerText="آنر"/>
                                                </li>
                                                <li class="submenu-lists">
                                                    <div class="submenu-lists-title">
                                                        واقعیت مجازی <i class="fa fa-angle-left"></i>
                                                    </div>

                                                </li>
                                                <li class="submenu-lists">
                                                    <div class="submenu-lists-title">
                                                        مچ بند و ساعت هوشمند <i class="fa fa-angle-left"></i>
                                                    </div>
                                                </li>

                                            </ul>
                                        </div>
                                        <div class="nav-new-ads mt-0 mx-5 mb-5 flex flex-col justify-between">
                                            <div class="w-full ">
                                                <a href="#banner">
                                                    <div class="banner-item relative">
                                                        <img src="images/beauty.jpg" alt="محصولات زیبایی">
                                                        <div class="adplacement-badge-banner flex flex-row-reverse  bg-white">
                                                            <img src="images/ad.svg">
                                                            <span>Ad</span>
                                                        </div>
                                                    </div>
                                                </a>

                                            </div>
                                            <x-navbar-new-brands-sec/>
                                        </div>


                                    </div>
                                    <div class="submenu-items-one js-nav-submenu-items js-khane-menu p-3"  style="display: none">
                                        <div class="submenu-items-side w-full">
                                            <div class="submenu-top-bar">
                                                <a href="#link">
                                                    همه دسته&zwnj;بندی&zwnj;های مد و پوشاک <i class="fa fa-angle-left"></i>
                                                </a>
                                            </div>
                                            <ul>
                                                <li class="submenu-lists">
                                                    <div class="submenu-lists-title">
                                                        لوازم جانبی و گوشی <i class="fa fa-angle-left"></i>
                                                    </div>
                                                    <x-submenu-list-link.submenu-list-link innerText="کیف و کاور گوشی"/>
                                                    <x-submenu-list-link.submenu-list-link innerText="پاوربانک"/>
                                                    <x-submenu-list-link.submenu-list-link innerText="پایه نگهدانرنده گوشی"/>

                                                </li>
                                                <li class="submenu-lists">
                                                    <div class="submenu-lists-title">
                                                        گوشی موبایل <i class="fa fa-angle-left"></i>
                                                    </div>
                                                    <x-submenu-list-link.submenu-list-link innerText="سامسونگ"/>
                                                    <x-submenu-list-link.submenu-list-link innerText="اپل"/>
                                                    <x-submenu-list-link.submenu-list-link innerText="اپل"/>
                                                    <x-submenu-list-link.submenu-list-link innerText="شیاُومی"/>
                                                    <x-submenu-list-link.submenu-list-link innerText="نوکیا"/>
                                                    <x-submenu-list-link.submenu-list-link innerText="آنر"/>
                                                </li>
                                                <li class="submenu-lists">
                                                    <div class="submenu-lists-title">
                                                        واقعیت مجازی <i class="fa fa-angle-left"></i>
                                                    </div>

                                                </li>
                                                <li class="submenu-lists">
                                                    <div class="submenu-lists-title">
                                                        مچ بند و ساعت هوشمند <i class="fa fa-angle-left"></i>
                                                    </div>
                                                </li>

                                            </ul>
                                        </div>
                                        <!-- inja az yield estefade konam -->
                                        <div class="nav-new-ads mt-0 mx-5 mb-5 flex flex-col justify-between">
                                            <div class="w-full ">
                                                <a href="#banner">
                                                    <div class="banner-item relative">
                                                        <img src="images/beauty.jpg" alt="محصولات زیبایی">
                                                        <div class="adplacement-badge-banner flex flex-row-reverse  bg-white">
                                                            <img src="images/ad.svg">
                                                            <span>Ad</span>
                                                        </div>
                                                    </div>
                                                </a>

                                            </div>
                                            <x-navbar-new-brands-sec/>
                                        </div>

                                    </div>
                                    <div class="submenu-items-one js-nav-submenu-items js-ketab-menu p-3"  style="display: none">
                                        <div class="submenu-items-side w-full">
                                            <div class="submenu-top-bar">
                                                <a href="#link">
                                                    همه دسته&zwnj;بندی&zwnj;های مد و پوشاک <i class="fa fa-angle-left"></i>
                                                </a>
                                            </div>
                                            <ul>
                                                <li class="submenu-lists">
                                                    <div class="submenu-lists-title">
                                                        لوازم جانبی و گوشی <i class="fa fa-angle-left"></i>
                                                    </div>
                                                    <x-submenu-list-link.submenu-list-link innerText="کیف و کاور گوشی"/>
                                                    <x-submenu-list-link.submenu-list-link innerText="پاوربانک"/>
                                                    <x-submenu-list-link.submenu-list-link innerText="پایه نگهدانرنده گوشی"/>

                                                </li>
                                                <li class="submenu-lists">
                                                    <div class="submenu-lists-title">
                                                        گوشی موبایل <i class="fa fa-angle-left"></i>
                                                    </div>
                                                    <x-submenu-list-link.submenu-list-link innerText="سامسونگ"/>
                                                    <x-submenu-list-link.submenu-list-link innerText="اپل"/>
                                                    <x-submenu-list-link.submenu-list-link innerText="اپل"/>
                                                    <x-submenu-list-link.submenu-list-link innerText="شیاُومی"/>
                                                    <x-submenu-list-link.submenu-list-link innerText="نوکیا"/>
                                                    <x-submenu-list-link.submenu-list-link innerText="آنر"/>
                                                </li>
                                                <li class="submenu-lists">
                                                    <div class="submenu-lists-title">
                                                        واقعیت مجازی <i class="fa fa-angle-left"></i>
                                                    </div>

                                                </li>
                                                <li class="submenu-lists">
                                                    <div class="submenu-lists-title">
                                                        مچ بند و ساعت هوشمند <i class="fa fa-angle-left"></i>
                                                    </div>
                                                </li>

                                            </ul>
                                        </div>
                                        <!-- inja az yield estefade konam -->
                                        <div class="nav-new-ads mt-0 mx-5 mb-5 flex flex-col justify-between">
                                            <div class="w-full ">
                                                <a href="#banner">
                                                    <div class="banner-item relative">
                                                        <img src="images/beauty.jpg" alt="محصولات زیبایی">
                                                        <div class="adplacement-badge-banner flex flex-row-reverse  bg-white">
                                                            <img src="images/ad.svg">
                                                            <span>Ad</span>
                                                        </div>
                                                    </div>
                                                </a>

                                            </div>
                                            <x-navbar-new-brands-sec/>
                                        </div>

                                    </div>
                                    <div class="submenu-items-one js-nav-submenu-items js-varzesh-menu p-3"  style="display: none">
                                        <div class="submenu-items-side w-full">
                                            <div class="submenu-top-bar">
                                                <a href="#link">
                                                    همه دسته&zwnj;بندی&zwnj;های مد و پوشاک <i class="fa fa-angle-left"></i>
                                                </a>
                                            </div>
                                            <ul>
                                                <li class="submenu-lists">
                                                    <div class="submenu-lists-title">
                                                        لوازم جانبی و گوشی <i class="fa fa-angle-left"></i>
                                                    </div>
                                                    <x-submenu-list-link.submenu-list-link innerText="کیف و کاور گوشی"/>
                                                    <x-submenu-list-link.submenu-list-link innerText="پاوربانک"/>
                                                    <x-submenu-list-link.submenu-list-link innerText="پایه نگهدانرنده گوشی"/>

                                                </li>
                                                <li class="submenu-lists">
                                                    <div class="submenu-lists-title">
                                                        گوشی موبایل <i class="fa fa-angle-left"></i>
                                                    </div>
                                                    <x-submenu-list-link.submenu-list-link innerText="سامسونگ"/>
                                                    <x-submenu-list-link.submenu-list-link innerText="اپل"/>
                                                    <x-submenu-list-link.submenu-list-link innerText="اپل"/>
                                                    <x-submenu-list-link.submenu-list-link innerText="شیاُومی"/>
                                                    <x-submenu-list-link.submenu-list-link innerText="نوکیا"/>
                                                    <x-submenu-list-link.submenu-list-link innerText="آنر"/>
                                                </li>
                                                <li class="submenu-lists">
                                                    <div class="submenu-lists-title">
                                                        واقعیت مجازی <i class="fa fa-angle-left"></i>
                                                    </div>

                                                </li>
                                                <li class="submenu-lists">
                                                    <div class="submenu-lists-title">
                                                        مچ بند و ساعت هوشمند <i class="fa fa-angle-left"></i>
                                                    </div>
                                                </li>

                                            </ul>
                                        </div>
                                        <!-- inja az yield estefade konam -->
                                        <div class="nav-new-ads mt-0 mx-5 mb-5 flex flex-col justify-between">
                                            <div class="w-full ">
                                                <a href="#banner">
                                                    <div class="banner-item relative">
                                                        <img src="images/beauty.jpg" alt="محصولات زیبایی">
                                                        <div class="adplacement-badge-banner flex flex-row-reverse  bg-white">
                                                            <img src="images/ad.svg">
                                                            <span>Ad</span>
                                                        </div>
                                                    </div>
                                                </a>

                                            </div>
                                            <x-navbar-new-brands-sec/>

                                        </div>

                                    </div>

                                </div>

                            </div>

                        </li>
                        <!--اینا خودشون یه کامئوننت جدا هستن که باید بعد روشون کار کنم - شروع-->
                        <li class="nav-link border-right-add">
                            <a href="#supermarket" class="nav-link-title">
                                <i class="fa fa-shopping-basket"></i> سوپرمارکت
                            </a>
                        </li>
                        <li class="nav-link js-nav-link">
                            <a href="#offers" class="nav-link-title toggle">
                                <i class="fa fa-percent"></i> تخفیف ها و پشنهادها
                            </a>
                            <div class="submenu submenu-promotion  top-12 absolute w-207 py-3 pr-4 pl-3">
                                <div class="submenu-items ">
                                    <div class="submenu-top-bar">
                                        <a href="#link">
                                            همه دسته‌بندی‌های کالای دیجیتال <i class="fa fa-angle-left"></i>
                                        </a>
                                    </div>
                                    <div class="nav-promotion-uls">
                                        <ul class="nav-promotion-ul">
                                            <li class="submenu-lists">
                                                <div class="submenu-lists-title">
                                                    کالاهای شگفت انگیز <i class="fa fa-angle-left"></i>

                                                </div>
                                            </li>
                                            <li class="submenu-lists">
                                                <div class="submenu-lists-title">
                                                    شگفت انگیز سوپرمارکتی<i class="fa fa-angle-left"></i>

                                                </div>
                                            </li>
                                            <li class="submenu-lists">
                                                <div class="submenu-lists-title">
                                                    فروش ویژه <i class="fa fa-angle-left"></i>

                                                </div>
                                            </li>

                                            <li class="submenu-lists">
                                                <x-submenu-list-link.submenu-list-link innerText="کالای دیجیتال"/>

                                            </li>
                                            <li class="submenu-lists">
                                                <x-submenu-list-link.submenu-list-link innerText="خودرو، ابزار، تجهیزات صنعتی "/>
                                            </li>
                                            <li class="submenu-lists">
                                                <x-submenu-list-link.submenu-list-link innerText=" مد و پوشاک "/>
                                            </li>
                                            <li class="submenu-lists">
                                                <x-submenu-list-link.submenu-list-link innerText="اسباب بازی، کودک، نوزاد"/>
                                            </li>
                                            <li class="submenu-lists">
                                                <x-submenu-list-link.submenu-list-link innerText="کالاهای سوپرمارکتی"/>
                                            </li>
                                            <li class="submenu-lists">
                                                <x-submenu-list-link.submenu-list-link innerText="زیبایی و سلامت"/>
                                            </li>
                                            <li class="submenu-lists">
                                                <x-submenu-list-link.submenu-list-link innerText="خانه و آشپزخانه"/>
                                            </li>
                                            <li class="submenu-lists">
                                                <x-submenu-list-link.submenu-list-link innerText="کتاب، لوازم تحریر، هنر"/>
                                            </li>
                                            <li class="submenu-lists">
                                                <x-submenu-list-link.submenu-list-link innerText="ورزش و سفر "/>
                                            </li>
                                        </ul>
                                        <ul class="nav-promotion-ul">
                                            <li class="submenu-list-new">
                                                <a href="#category">
                                                    شمش و پلاک طلا و نقره کمتر از ۲۰۰ هزار تومان
                                                </a>
                                            </li>
                                            <li class="submenu-list-new">
                                                <a href="#category">
                                                    کتاب چاپی تا ۷۰ درصد تخقیف
                                                </a>
                                            </li>
                                            <div class="submenu-divider"></div>
                                            <li class="submenu-promotion-links">
                                                <a href="#category">
                                                    <i class="fa fa-angle-left"></i> پرفروش ترین کالاها
                                                </a>
                                            </li>
                                            <li class="submenu-promotion-links">
                                                <a href="#category">
                                                    <i class="fa fa-angle-left"></i> با هر خرید هدیه بگیرید
                                                </a>
                                            </li>
                                            <li class="submenu-promotion-links">
                                                <a href="#category">
                                                    <i class="fa fa-angle-left"></i>  تخفیف پایان فصل
                                                </a>
                                            </li>
                                            <li class="submenu-promotion-links">
                                                <a href="#category">
                                                    <i class="fa fa-angle-left"></i>  کارت هدیه خرید از دیجی کالا
                                                </a>
                                            </li>
                                            <li class="submenu-promotion-links">
                                                <a href="#category">
                                                    <i class="fa fa-angle-left"></i>  تازه های فروشنده های جدید
                                                </a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>

                                <div class="submenu-banner">
                                    <a href="#promotion-page">
                                        <img src="images/nav-promotion.png" alt="promotion">
                                    </a>
                                </div>
                            </div>
                        </li>
                        <li class="nav-link ">
                            <a href="#supermarket" class="nav-link-title">
                                <i class="fa fa-check-circle-o"></i>  دیجی کالای من
                            </a>

                        </li>
                        <!--digi plus-->
                        <li class="nav-link js-nav-link">
                            <a href="#supermarket" class="nav-link-title toggle nav-digiplus">
                                <img src="images/digiplus-minicon.svg" class="w-4 h-4 ml-1 inline-block" alt="digiplus mini icon"> دیجی پلاس
                            </a>
                            <div class="submenu submenu-digiplus  top-12 absolute py-3 pr-4 pl-3">
                                <div class="submenu-items ml-6 ">
                                    <div class="submenu-lists-title">
                                        خدمات ویژه کاربران <img src="images/digiplus-icon.svg" alt='digiplus' class="h-auto mx-1">
                                    </div>
                                    <div class="submenu-subtitle pr-1">
                                        ارسال رایگان بدون محدودیت قیمت، هدیه نقدی و بازگشت کالا تا ۳۰ روز پس از تحویل
                                    </div>
                                    <ul class="nav-digiplus-ul">
                                        <li class="submenu-lists">
                                            <a class="submenu-lists-title digiplus-register">
                                                اطلاعات بیشتر و عضویت
                                                <i class="fa fa-angle-left"></i>
                                            </a>
                                        </li>
                                        <li class="submenu-lists submenu-lists-digiplus pt-3 mt-3 ">
                                            <a href="#digiplus" class="px-1 py-0 ">
                                                کالاهای
                                            </a>
                                            <img src="images/digiplus-icon.svg" alt="digiplus" class=" h-auto mx-1 ">

                                            </a>
                                        </li>
                                    </ul>
                                </div>

                                <div class="submenu-banner-digiplus">
                                    <a href="#digiplus-page">
                                        <img src="images/digiplus.jpg" alt="promotion">
                                    </a>
                                </div>
                            </div>
                            <!--digi club-->
                        <li class="nav-link  js-nav-link">
                            <a href="#supermarket" class="nav-link-title toggle">
                                <i class="fa fa-random"></i>  دیجی کلاب
                            </a>
                            <div class="submenu submenu-digiclub justify-between top-12 absolute w-180 py-3 pt-4 pl-3">
                                <div class="submenu-items ml-6 flex flex-col flex-initial align-center px-3">
                                    <div class="submenu-lists-title">
                                        <img src="images/digiclub-icon.svg" alt='digiclub' class="h-6 mx-1">
                                    </div>

                                    <ul class="nav-digi-ul w-full">
                                        <li>
                                            <a href="" class="submenu-lists-title">
                                                صفحه اصلی دیجی کلاب<i class="fa fa-angle-left"></i>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="" class="submenu-lists-title">
                                                <i class="fa fa-gift"></i> جوایز دیجی کلاب

                                            </a>
                                        </li>
                                        <li class="submenu-lists-title">
                                            <a href="#category" class="submenu-list-link digiclub-history-text"> <i class="fa fa-clock-o"></i>تاریخچه امتیازات دیجی کلاب </a>
                                        </li>
                                        <li>
                                            <a href="" class="submenu-lists-title">
                                                <i class="fa fa-flag"></i>    ماموریت های دیجی کلابی

                                            </a>
                                        </li>


                                        <li class="flex flex-flow justify-between">
                                            <a href="" class="submenu-lists-title">
                                                <i class="fa fa-gift"></i> قرعه کشی

                                            </a>
                                            <!--counter componment-->
                                            <div class="submenu-lists-counter flex flex-row flex-wrap">
                                                <div class="counter-second ml-1">
                                                </div>
                                                <div class=" counter-minute ml-1">
                                                </div>
                                                <div class=" counter-hour ml-1">
                                                </div>
                                                <div class=" counter-day"></div>
                                            </div>
                                        </li>
                                    </ul>
                                </div>

                                <div class="submenu-banner-digiplus w-96 h-48">
                                    <a href="#digiplus-page" class=" flex flex-row justify-center align-center digiplus-banner h-full">
                                        <img src="images/digiclub.jpg" alt="promotion" class="min-h-full w-full">
                                    </a>
                                </div>
                            </div>


                        </li>
                        <li class="nav-link">
                            <a href="#supermarket" class="nav-link-title">
                                <i class="fa fa-paypal"></i> دیجی پی
                            </a>
                        </li>
                        <li class="nav-link">
                            <a href="#supermarket" class="nav-link-title">
                                سوالی دارید؟
                            </a>
                        </li>
                        <li class="nav-link">
                            <a href="#supermarket" class="nav-link-title">
                                فروشنده شوید
                            </a>
                        </li>
                        <!--اینا خودشون یه کامئوننت جدا هستن که باید بعد روشون کار کنم- پایان-->

                    </ul>
                    <div class="free-space"></div>
                    <div class="nav-location-link">
                        <div class="nav-location">
                            لطفا شهر و استان خود را انتخاب کنید
                            <i class="fa fa-map-marker mr-2"></i>
                        </div>
                        <div class="nav-location-icon">
                            <i class="fa fa-location"></i>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </nav>

</header>
<div class="nav-overlay"></div>

