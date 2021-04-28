<nav>
    <div class="nav-container">
        <div class="nav pt-3 px-4" id="navbar">
            <div class="nav-items">
                <ul class="nav-ul flex relative h-12">
                    <li class="nav-link">
                        <a href="#categories-page" class="  nav-link-title mega-menu-link toggle" >
                            <i class="fa fa-list-ul"></i>
                            دسته بندی کالاها
                        </a>
                        <div class="submenu top-12 absolute " >
                            <div class="submenu-titles flex flex-col">
                                <a href="#submenu" class="submenu-title" onmouseover="kalayeDigital()">
                                    <i class="fa fa-laptop"></i>
                                    کالای دیجیتال
                                </a>
                                <a href="#submenu" class="submenu-title"  onmouseover="sanati()">
                                    <i class="fa fa-wrench"></i>
                                    خودرو، ابزار و تجهیزات صنعتی
                                </a>
                                <a href="#submenu" class="submenu-title" onmouseover="mod()">
                                    <i class="fa fa-check"></i>
                                    مد و پوشاک
                                </a>
                                <a href="#submenu" class="submenu-title" onmouseover="asbabBazi()">
                                    <i class="fa fa-child"></i>
                                    اسباب بازی، کودک، نوزاد
                                </a>
                                <a href="#submenu" class="submenu-title" onmouseover="zibayie()">
                                    <i class="fa fa-heart"></i>
                                    زیبایی و سلامت
                                </a>
                                <a href="#submenu" class="submenu-title" onmouseover="khane()">
                                    <i class="fa fa-home"></i>
                                    خانه و آشپزخانه
                                </a>
                                <a href="#submenu" class="submenu-title" onmouseover="ketab()">
                                    <i class="fa fa-pencil"></i>
                                    کتاب، لوازم تحریر و هنر
                                </a>
                                <a href="#submenu" class="submenu-title" onmouseover="varzesh()">
                                    <i class="fa fa-tree"></i>
                                    ورزش و سفر
                                </a>

                            </div>
                            <div class="submenu-items-container flex flex-col w-full">
                                <div class="submenu-items-one js-nav-submenu-items js-kalaye-digital-menu  p-3">
                                    <div class="submenu-items-side w-full">
                                        <div class="submenu-top-bar">
                                            <a href="#link">
                                                همه دسته‌بندی‌های کالای دیجیتال  @section('angle-left')
                                                @show
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
                                                    گوشی موبایل @section('angle-left')
                                                    @show
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
                                                    واقعیت مجازی @section('angle-left')
                                                    @show
                                                </div>

                                            </li>
                                            <li class="submenu-lists">
                                                <div class="submenu-lists-title">
                                                    مچ بند و ساعت هوشمند @section('angle-left')
                                                    @show
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
                                        <div class="new-brands-holder h-22 flex flex-col justify-center ">
                                            <h3>ّبرندهای ویژه</h3>
                                            <div class="new-ads-brands flex flex-row">
                                                <a href="">
                                                    <div class="ml-2 p-2 text-center"><img src="images/ex-brand-1.jpg" class="h-full w-full" alt=""></div>
                                                </a><a href="">
                                                    <div class=" ml-2 p-2 text-center"><img src="images/ex-brand-2.jpg" class="h-full w-full" alt=""></div>
                                                </a><a href="">
                                                    <div class="ml-2 p-2 text-center"><img src="images/ex-brand-3.jpg" class="h-full w-full" alt=""></div>
                                                </a>
                                            </div>
                                        </div>

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
                                                <a href="#category" class="submenu-list-link">کیف و کاور گوشی</a>
                                                <a href="#category" class="submenu-list-link">پاوربانک</a>
                                                <a href="#category" class="submenu-list-link">پایه نگهدانرنده گوشی</a>

                                            </li>
                                            <li class="submenu-lists">
                                                <div class="submenu-lists-title">
                                                    گوشی موبایل <i class="fa fa-angle-left"></i>
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
                                        <div class="new-brands-holder h-22 flex flex-col justify-center ">
                                            <h3>ّبرندهای ویژه</h3>
                                            <div class="new-ads-brands flex flex-row">
                                                <a href="">
                                                    <div class="ml-2 p-2 text-center"><img src="images/ex-brand-1.jpg" class="h-full w-full" alt=""></div>
                                                </a><a href="">
                                                    <div class=" ml-2 p-2 text-center"><img src="images/ex-brand-2.jpg" class="h-full w-full" alt=""></div>
                                                </a><a href="">
                                                    <div class="ml-2 p-2 text-center"><img src="images/ex-brand-3.jpg" class="h-full w-full" alt=""></div>
                                                </a>
                                            </div>
                                        </div>

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
                                                <a href="#category" class="submenu-list-link">کیف و کاور گوشی</a>
                                                <a href="#category" class="submenu-list-link">پاوربانک</a>
                                                <a href="#category" class="submenu-list-link">پایه نگهدانرنده گوشی</a>

                                            </li>
                                            <li class="submenu-lists">
                                                <div class="submenu-lists-title">
                                                    گوشی موبایل <i class="fa fa-angle-left"></i>
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
                                        <div class="new-brands-holder h-22 flex flex-col justify-center ">
                                            <h3>ّبرندهای ویژه</h3>
                                            <div class="new-ads-brands flex flex-row">
                                                <a href="">
                                                    <div class="ml-2 p-2 text-center"><img src="images/ex-brand-1.jpg" class="h-full w-full" alt=""></div>
                                                </a><a href="">
                                                    <div class=" ml-2 p-2 text-center"><img src="images/ex-brand-2.jpg" class="h-full w-full" alt=""></div>
                                                </a><a href="">
                                                    <div class="ml-2 p-2 text-center"><img src="images/ex-brand-3.jpg" class="h-full w-full" alt=""></div>
                                                </a>
                                            </div>
                                        </div>

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
                                                <a href="#category" class="submenu-list-link">کیف و کاور گوشی</a>
                                                <a href="#category" class="submenu-list-link">پاوربانک</a>
                                                <a href="#category" class="submenu-list-link">پایه نگهدانرنده گوشی</a>

                                            </li>
                                            <li class="submenu-lists">
                                                <div class="submenu-lists-title">
                                                    گوشی موبایل <i class="fa fa-angle-left"></i>
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
                                        <div class="new-brands-holder h-22 flex flex-col justify-center ">
                                            <h3>ّبرندهای ویژه</h3>
                                            <div class="new-ads-brands flex flex-row">
                                                <a href="">
                                                    <div class="ml-2 p-2 text-center"><img src="images/ex-brand-1.jpg" class="h-full w-full" alt=""></div>
                                                </a><a href="">
                                                    <div class=" ml-2 p-2 text-center"><img src="images/ex-brand-2.jpg" class="h-full w-full" alt=""></div>
                                                </a><a href="">
                                                    <div class="ml-2 p-2 text-center"><img src="images/ex-brand-3.jpg" class="h-full w-full" alt=""></div>
                                                </a>
                                            </div>
                                        </div>

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
                                                <a href="#category" class="submenu-list-link">کیف و کاور گوشی</a>
                                                <a href="#category" class="submenu-list-link">پاوربانک</a>
                                                <a href="#category" class="submenu-list-link">پایه نگهدانرنده گوشی</a>

                                            </li>
                                            <li class="submenu-lists">
                                                <div class="submenu-lists-title">
                                                    لوازم آرایشی <i class="fa fa-angle-left"></i>
                                                </div>
                                                <a href="#category" class="submenu-list-link">آرایش چشم و ابرو</a>
                                                <a href="#category" class="submenu-list-link">آرایش لب</a>
                                                <a href="#category" class="submenu-list-link">مواد آرایشی مو</a>
                                                <a href="#category" class="submenu-list-link">شیاُومی</a>
                                                <a href="#category" class="submenu-list-link">نوکیا</a>
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
                                        <div class="new-brands-holder h-22 flex flex-col justify-center ">
                                            <h3>ّبرندهای ویژه</h3>
                                            <div class="new-ads-brands flex flex-row">
                                                <a href="">
                                                    <div class="ml-2 p-2 text-center"><img src="images/ex-brand-1.jpg" class="h-full w-full" alt=""></div>
                                                </a><a href="">
                                                    <div class=" ml-2 p-2 text-center"><img src="images/ex-brand-2.jpg" class="h-full w-full" alt=""></div>
                                                </a><a href="">
                                                    <div class="ml-2 p-2 text-center"><img src="images/ex-brand-3.jpg" class="h-full w-full" alt=""></div>
                                                </a>
                                            </div>
                                        </div>

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
                                                <a href="#category" class="submenu-list-link">کیف و کاور گوشی</a>
                                                <a href="#category" class="submenu-list-link">پاوربانک</a>
                                                <a href="#category" class="submenu-list-link">پایه نگهدانرنده گوشی</a>

                                            </li>
                                            <li class="submenu-lists">
                                                <div class="submenu-lists-title">
                                                    گوشی موبایل <i class="fa fa-angle-left"></i>
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
                                        <div class="new-brands-holder h-22 flex flex-col justify-center ">
                                            <h3>ّبرندهای ویژه</h3>
                                            <div class="new-ads-brands flex flex-row">
                                                <a href="">
                                                    <div class="ml-2 p-2 text-center"><img src="images/ex-brand-1.jpg" class="h-full w-full" alt=""></div>
                                                </a><a href="">
                                                    <div class=" ml-2 p-2 text-center"><img src="images/ex-brand-2.jpg" class="h-full w-full" alt=""></div>
                                                </a><a href="">
                                                    <div class="ml-2 p-2 text-center"><img src="images/ex-brand-3.jpg" class="h-full w-full" alt=""></div>
                                                </a>
                                            </div>
                                        </div>

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
                                                <a href="#category" class="submenu-list-link">کیف و کاور گوشی</a>
                                                <a href="#category" class="submenu-list-link">پاوربانک</a>
                                                <a href="#category" class="submenu-list-link">پایه نگهدانرنده گوشی</a>

                                            </li>
                                            <li class="submenu-lists">
                                                <div class="submenu-lists-title">
                                                    گوشی موبایل <i class="fa fa-angle-left"></i>
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
                                        <div class="new-brands-holder h-22 flex flex-col justify-center ">
                                            <h3>ّبرندهای ویژه</h3>
                                            <div class="new-ads-brands flex flex-row">
                                                <a href="">
                                                    <div class="ml-2 p-2 text-center"><img src="images/ex-brand-1.jpg" class="h-full w-full" alt=""></div>
                                                </a><a href="">
                                                    <div class=" ml-2 p-2 text-center"><img src="images/ex-brand-2.jpg" class="h-full w-full" alt=""></div>
                                                </a><a href="">
                                                    <div class="ml-2 p-2 text-center"><img src="images/ex-brand-3.jpg" class="h-full w-full" alt=""></div>
                                                </a>
                                            </div>
                                        </div>

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
                                                <a href="#category" class="submenu-list-link">کیف و کاور گوشی</a>
                                                <a href="#category" class="submenu-list-link">پاوربانک</a>
                                                <a href="#category" class="submenu-list-link">پایه نگهدانرنده گوشی</a>

                                            </li>
                                            <li class="submenu-lists">
                                                <div class="submenu-lists-title">
                                                    گوشی موبایل <i class="fa fa-angle-left"></i>
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
                                        <div class="new-brands-holder h-22 flex flex-col justify-center ">
                                            <h3>ّبرندهای ویژه</h3>
                                            <div class="new-ads-brands flex flex-row">
                                                <a href="">
                                                    <div class="ml-2 p-2 text-center"><img src="images/ex-brand-1.jpg" class="h-full w-full" alt=""></div>
                                                </a><a href="">
                                                    <div class=" ml-2 p-2 text-center"><img src="images/ex-brand-2.jpg" class="h-full w-full" alt=""></div>
                                                </a><a href="">
                                                    <div class="ml-2 p-2 text-center"><img src="images/ex-brand-3.jpg" class="h-full w-full" alt=""></div>
                                                </a>
                                            </div>
                                        </div>

                                    </div>

                                </div>

                            </div>

                        </div>
                        <div class="overlay"></div>

                    </li>
                    <!--اینا خودشون یه کامئوننت جدا هستن که باید بعد روشون کار کنم - شروع-->
                    <li class="nav-link  border-right-add">
                        <a href="#supermarket" class="nav-link-title">
                            <i class="fa fa-shopping-basket"></i> سوپرمارکت
                        </a>
                    </li>
                    <li class="nav-link">
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
                                            <a href="#category" class="submenu-list-link">کالای دیجیتال</a>
                                        </li>
                                        <li class="submenu-lists">
                                            <a href="#category" class="submenu-list-link">خودرو، ابزار، تجهیزات صنعتی </a>
                                        </li>
                                        <li class="submenu-lists">
                                            <a href="#category" class="submenu-list-link">مد و پوشاک </a>
                                        </li>
                                        <li class="submenu-lists">
                                            <a href="#category" class="submenu-list-link">اسباب بازی، کودک، نوزاد </a>
                                        </li>
                                        <li class="submenu-lists">
                                            <a href="#category" class="submenu-list-link">کالاهای سوپرمارکتی </a>
                                        </li>
                                        <li class="submenu-lists">
                                            <a href="#category" class="submenu-list-link">زیبایی و سلامت  </a>
                                        </li>
                                        <li class="submenu-lists">
                                            <a href="#category" class="submenu-list-link">خانه و آشپزخانه </a>
                                        </li>
                                        <li class="submenu-lists">
                                            <a href="#category" class="submenu-list-link">کتاب، لوازم تحریر، هنر  </a>
                                        </li>
                                        <li class="submenu-lists">
                                            <a href="#category" class="submenu-list-link">ورزش و سفر </a>
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
                        <div class="overlay"></div>
                    </li>
                    <li class="nav-link">
                        <a href="#supermarket" class="nav-link-title">
                            <i class="fa fa-check-circle-o"></i>  دیجی کالای من
                        </a>

                    </li>
                    <!--digi plus-->
                    <li class="nav-link">
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
                        <div class="overlay"></div>
                        <!--digi club-->
                    <li class="nav-link ">
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
                                            <div class="counter-second ml-2">

                                            </div>
                                            <div class=" counter-minute ml-2">

                                            </div>
                                            <div class=" counter-hour ml-2">

                                            </div>

                                            <div class=" counter-day">

                                            </div>
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
                        <div class="overlay"></div>


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
