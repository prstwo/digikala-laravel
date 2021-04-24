<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="keyword" content="digikala, دیجی کالا">
    <meta name="description" content="this is home page of digikala">
    <title>digikala</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link href="https://unpkg.com/tailwindcss@^2/dist/tailwind.min.css" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="css/reset.css">
    <link rel="stylesheet" type="text/css" href="css/nav-menu.css">
    <link rel="stylesheet" type="text/css" href="css/bullets-slider.css">
    <link type="text/css" href="css/product-item.css" rel="stylesheet" >
    <link type="text/css" rel="stylesheet" href="css/incredible-specials.css">
    <link type="text/css" rel="stylesheet" href="css/category-products.css">
    <link rel="stylesheet" type="text/css" href="css/promotion-cats.css">
    <link rel="stylesheet" type="text/css" href="css/footer.css">
    <link rel="stylesheet" type="text/css" href="css/main-top.css">
    <link rel="stylesheet" type="text/css" href="css/special-brands.css">
    <link rel="stylesheet" type="text/css" href="css/carousel.css">
    <link rel="stylesheet" type="text/css" href="css/header.css">

</head>
<body>

<div>
    <!-- header component-->
    <header class="sticky top-0 righ-0 left-0 z-50 bg-white">
        <div class="px-4 py-3 flex flex-row flex-wrap justify-between">
            <div class="header-right-side flex content-center flex-grow">
                <div class="mr-2 ml-6 w-100 flex items-center">
                    <a href="digikala">
                        <img src="images/digikala.svg" alt="digikala">
                    </a>
                </div>
                <div class="px-0  header-search">
                    <i class="fa fa-search w-11 h-search-btn relative"></i>
                    <input type="text" class="w-full h-full py-3  pl-2 pr-1 search-input" placeholder="جستجو در دیجی&zwnj;کالا …">
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

    </header>
    <!-- navigation component -->
    <nav>
        <div class="nav-container">
            <div class="nav py-3 px-4" id="navbar">
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
                                    <div class="submenu-items js-nav-submenu-items js-kalaye-digital-menu  p-3">
                                        <div class="submenu-items-side w-full">
                                            <div class="submenu-top-bar">
                                                <a href="#link">
                                                    همه دسته‌بندی‌های کالای دیجیتال <i class="fa fa-angle-left"></i>
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
                                        <div class="nav-new-ads mt-0 mx-5 mb-5 flex flex-col justify-between">
                                            <div class="w-full">
                                                <a href="#banner">
                                                    <div class="banner-item">
                                                        <img src="images/beauty.jpg" alt="محصولات زیبایی">
                                                    </div>
                                                </a>
                                            </div>
                                            <div class="adplacement-badge-banner flex flex-row-reverse  bg-white">
                                                <img src="images/ad.svg">
                                                <span>Ad</span>
                                            </div>

                                        </div>
                                    </div>
                                    <div class="submenu-items js-nav-submenu-items js-abzar-sanati-menu p-3" style="display: none">
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
                                    <div class="submenu-items js-nav-submenu-items  js-mod-menu p-3"  style="display: none">
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
                                    <div class="submenu-items js-nav-submenu-items js-asbab-bazi-menu p-3"  style="display: none">
                                        <div class="submenu-top-bar">
                                            <a href="#link">
                                                همه دسته&zwnj;بندی&zwnj;های کالای دیجیتال <i class="fa fa-angle-left"></i>
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
                                    <div class="submenu-items js-nav-submenu-items js-salamet-menu p-3"  style="display: none">
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
                                    <div class="submenu-items js-nav-submenu-items js-khane-menu p-3"  style="display: none">
                                        <div class="submenu-top-bar">
                                            <a href="#link">
                                                همه دسته&zwnj;بندی&zwnj;های کالای دیجیتال <i class="fa fa-angle-left"></i>
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
                                    <div class="submenu-items js-nav-submenu-items js-ketab-menu p-3"  style="display: none">
                                        <div class="submenu-top-bar">
                                            <a href="#link">
                                                همه دسته&zwnj;بندی&zwnj;های کتاب& لوازم التحریر و هنر <i class="fa fa-angle-left"></i>
                                            </a>
                                        </div>
                                        <ul>
                                            <li class="submenu-lists">
                                                <div class="submenu-lists-title">
                                                    لوازم جانبی و گوشی <i class="fa fa-angle-left"></i>
                                                </div>
                                                <a href="#category" class="submenu-list-link">کیف و کاور گوشی</a>
                                                <a href="#category" class="submenu-list-link">\پاوربانک</a>
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
                                    <div class="submenu-items js-nav-submenu-items js-varzesh-menu p-3"  style="display: none">
                                        <div class="submenu-top-bar">
                                            <a href="#link">
                                                همه دسته&zwnj;بندی&zwnj;های ورزش و سفر <i class="fa fa-angle-left"></i>
                                            </a>
                                        </div>
                                        <ul>
                                            <li class="submenu-lists">
                                                <div class="submenu-lists-title">
                                                    لوازم جانبی و گوشی <i class="fa fa-angle-left"></i>
                                                </div>
                                                <a href="#category" class="submenu-list-link">کیف و کاور گوشی</a>
                                                <a href="#category" class="submenu-list-link">\پاوربانک</a>
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
    <main class="">
        <!-- main top container -->
        <article class="main-top-container">
            <div class="main-top">
                <div class="bullets-slider-container">
                    <!--bullets slider component attached-->
                    <div class="bullets-slider">
                        <div class="carousel relative ">
                            <div class="carousel-inner relative overflow-hidden bullets-slider">
                                <!--Slide 1-->
                                <input class="carousel-open" type="radio" id="carousel-1" name="carousel" aria-hidden="true" hidden="" checked="checked">
                                <div class="carousel-item absolute opacity-0 w-full h-full" >
                                    <div class="block h-full w-full bg-indigo-500 text-white text-5xl text-center">
                                        <img src="images/maintop-1.jpg" alt="product img" class="rounded-lg">

                                    </div>
                                </div>
                                <label for="carousel-3" class="prev control-1 w-10 h-10 ml-2 md:ml-10 absolute cursor-pointer hidden text-5xl font-bold text-gray-200	 transform hover:translate-x-0.5 rounded-full e leading-tight text-center z-9 inset-y-0 right-0 my-auto">‹</label>
                                <label for="carousel-2" class="next control-1 w-10 h-10 mr-2 md:mr-10 absolute cursor-pointer hidden text-5xl font-bold text-gray-200	transform hover:translate-x-0.5	 rounded-full  leading-tight text-center z-9 inset-y-0 left-0 my-auto">›</label>

                                <!--Slide 2-->
                                <input class="carousel-open" type="radio" id="carousel-2" name="carousel" aria-hidden="true" hidden="">
                                <div class="carousel-item absolute opacity-0 w-full h-full" >
                                    <div class="block h-full w-full bg-orange-500 text-white text-5xl text-center">
                                        <img src="images/maintop-2.jpg" alt="product img" class="rounded-lg">
                                    </div>
                                </div>
                                <label for="carousel-1" class="prev control-2 w-10 h-10 ml-2 md:ml-10 absolute cursor-pointer hidden text-5xl font-bold text-gray-200  transform hover:translate-x-0.5  rounded-full   leading-tight text-center z-9 inset-y-0 right-0 my-auto">‹</label>
                                <label for="carousel-3" class="next control-2 w-10 h-10 mr-2 md:mr-10 absolute cursor-pointer hidden text-5xl font-bold text-gray-200  transform hover:translate-x-0.5  rounded-full  leading-tight text-center z-9 inset-y-0 left-0 my-auto">›</label>

                                <!--Slide 3-->
                                <input class="carousel-open" type="radio" id="carousel-3" name="carousel" aria-hidden="true" hidden="">
                                <div class="carousel-item absolute opacity-0 w-full h-full">
                                    <div class="block h-full w-full bg-green-500 text-white text-5xl text-center">
                                        <img src="images/maintop-3.jpg" alt="product img" class="rounded-lg">

                                    </div>
                                </div>
                                <label for="carousel-2" class="prev control-3 w-10 h-10 ml-2 md:ml-10 absolute cursor-pointer hidden text-5xl font-bold text-gray-200 transform hover:translate-x-0.5 rounded-full  leading-tight text-center z-9 inset-y-0 right-0 my-auto">‹</label>
                                <label for="carousel-1" class="next control-3 w-10 h-10 mr-2 md:mr-10 absolute cursor-pointer hidden text-5xl font-bold text-gray-200 transform hover:translate-x-0.5 rounded-full leading-tight text-center z-9 inset-y-0 left-0 my-auto">›</label>

                                <!-- Add additional indicators for each slide-->
                                <ol class="carousel-indicators">
                                    <li class="inline-block mr-3">
                                        <label for="carousel-1" class="carousel-bullet cursor-pointer block text-4xl text-white transform hover:scale-125">•</label>
                                    </li>
                                    <li class="inline-block mr-3">
                                        <label for="carousel-2" class="carousel-bullet cursor-pointer block text-4xl text-white transform hover:scale-125">•</label>
                                    </li>
                                    <li class="inline-block mr-3">
                                        <label for="carousel-3" class="carousel-bullet cursor-pointer block text-4xl text-white transform hover:scale-125">•</label>
                                    </li>
                                </ol>

                            </div>
                        </div>

                    </div>
                </div>
                <div class="main-top-sides">
                    <div class="side">
                        <a href="side product page">
                            <img src="images/maintop-topside.gif" alt="product gif">
                        </a>
                    </div>
                    <div class="side">
                        <a href="side product page">
                            <img src="images/maintop-bottomside.gif" alt="product gif">
                        </a>
                    </div>
                </div>
            </div>
        </article>
        <!--incredible specials component-->
        <div class="">
            <section class="incredible-specials-container">
                <div class="incredible-specials">
                    <div class="specials-title">
                        <a href="#incredible-specials">
                            <div>
                                <img src="images/incredible-pic.png" alt="incredible product">
                                <div  class="specials-button">
                                    <div>مشاهده همه</div>
                                    <i class="fa fa-chevron-left"></i>
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="specials">
                        <div class="product-items">
                            <!--product item component-->
                            <?php
                            $productItemContainer3 = [
                                ['img'=>'"images/phone-1.jpg"','product-title'=>'گوشی موبایل شیائومی مدل POCO X3 M2007J20CG دو سیم‌ کارت ظرفیت 128 گیگابایت
                                            گوشی موبایل شیائومی مدل POCO X3 M2007J20CG دو سیم‌ کارت ظرفیت 128 گیگابایت', 'old-price'=>'۸,۰۰۰,۰۰۰',
                                    'discount'=>' ۱۵٪', 'new-price'=>'۷,۲۲۹,۰۰۰'],
                                ['img'=>'"images/phone-2.jpg"','product-title'=>' کاور جوی روم مدل JR-BP273 مناسب برای گوشی موبایل اپل iPhone 6 Plus', 'old-price'=>'۹۹,۰۰۰ ',
                                    'discount'=>' ٪۵۴', 'new-price'=>'۴۵,۵۰۰ '],
                                ['img'=>'"images/phone-3.jpg"','product-title'=>' کاور جوی روم مدل JR-BP273 مناسب برای گوشی موبایل اپل iPhone 6 Plus', 'old-price'=>'۹۹,۰۰۰ ',
                                    'discount'=>' ٪۶', 'new-price'=>'۴۵,۵۰۰ '],
                                ['img'=>'"images/phone-4.jpg"','product-title'=>'کاور نیلکین مدل Camshield مناسب برای گوشی موبایل شیائومی POCO X3 NFC', 'old-price'=>'۹۹,۰۰۰ ',
                                    'discount'=>'٪۳۰ ', 'new-price'=>'۲۰۴,۷۹۰ '],
                                ['img'=>'"images/phone-5.jpg"','product-title'=>' کاور جوی روم مدل JR-BP273 مناسب برای گوشی موبایل اپل iPhone 6 Plus', 'old-price'=>'۹۹,۰۰۰ ',
                                    'discount'=>' ٪۵۴', 'new-price'=>'۴۵,۵۰۰ '],
                                ['img'=>'"images/phone-6.jpg"','product-title'=>' کاور جوی روم مدل JR-BP273 مناسب برای گوشی موبایل اپل iPhone 6 Plus', 'old-price'=>'۹۹,۰۰۰ ',
                                    'discount'=>' ٪۵۴', 'new-price'=>'۴۵,۵۰۰ '],
                                ['img'=>'"images/phone-7.jpg"','product-title'=>' کاور جوی روم مدل JR-BP273 مناسب برای گوشی موبایل اپل iPhone 6 Plus', 'old-price'=>'۹۹,۰۰۰ ',
                                    'discount'=>' ٪۳۰', 'new-price'=>'۴۵,۵۰۰ '],
                                ['img'=>'"images/phone-8.jpg"','product-title'=>'کاور جویروم مدل Chi مناسب برای گوشی موبایل اپل iPhone 7 Plus', 'old-price'=>'۳۷,۰۰۰  ',
                                    'discount'=>' ٪۵۴', 'new-price'=>'۲۹,۵۰۰ ']
                            ]
                            ?>
                            @foreach($productItemContainer3 as $productItem3 )
                                <div class="product-item-container-3">
                                    <div class="product-item">
                                        <div>
                                            <a href="#product-page">
                                                <img src={!!$productItem3['img']!!}} alt="a product example" class="product-img">
                                            </a>
                                        </div>
                                        <div class="product-title">
                                            <a href="#product-page">
                                                {{$productItem3['product-title']}}
                                            </a>
                                        </div>
                                        <div class="product-price">
                                            <div class="product-old-price">
                                                <del> {{$productItem3['old-price']}}</del>
                                                <span class="old-price-discount">
                                                 {{$productItem3['discount']}}
                                            </span>
                                            </div>
                                            <div class="product-new-price">
                                                {{$productItem3['new-price']}}
                                                <span class="new-price-currency">تومان</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                            @endforeach

                        </div>
                        <div class="arrow-right-2">
                            <i class="fa fa-chevron-right" aria-hidden="true"></i>
                        </div>
                        <div class="arrow-left-2">
                            <i class="fa fa-chevron-left" aria-hidden="true"></i>
                        </div>
                    </div>
                </div>

            </section>
        </div>
        <!--products component-->
        <div class="page-section">
            <section class="products-container">
                <div class="products">
                    <div class="head">
                        <span class="head-title">
                            گوشی موبایل
                        </span>
                        <div class="head-link">
                            <a href="#products-page"> مشاهده همه</a>
                        </div>
                    </div>
                    <div class="boxes">
                        <div class="items">
                            <!-- product item component -->


                            <?php
                            $productItemContainer4 = [
                                ['img'=>'"images/phone-1.jpg"','product-title'=>'گوشی موبایل شیائومی مدل POCO X3 M2007J20CG دو سیم‌ کارت ظرفیت 128 گیگابایت
                                            گوشی موبایل شیائومی مدل POCO X3 M2007J20CG دو سیم‌ کارت ظرفیت 128 گیگابایت', 'old-price'=>'۸,۰۰۰,۰۰۰',
                                    'discount'=>' ٪۱۵', 'new-price'=>'۷,۲۲۹,۰۰۰'],
                                ['img'=>'"images/phone-7.jpg"','product-title'=>' کاور جوی روم مدل JR-BP273 مناسب برای گوشی موبایل اپل iPhone 6 Plus', 'old-price'=>'۹۹,۰۰۰ ',
                                    'discount'=>' ٪۳۰', 'new-price'=>'۴۵,۵۰۰ '],
                                ['img'=>'"images/phone-8.jpg"','product-title'=>'کاور جویروم مدل Chi مناسب برای گوشی موبایل اپل iPhone 7 Plus', 'old-price'=>'۳۷,۰۰۰  ',
                                    'discount'=>' ٪۵۴', 'new-price'=>'۲۹,۵۰۰ '],
                                ['img'=>'"images/phone-2.jpg"','product-title'=>' کاور جوی روم مدل JR-BP273 مناسب برای گوشی موبایل اپل iPhone 6 Plus', 'old-price'=>'۹۹,۰۰۰ ',
                                    'discount'=>' ٪۵۴', 'new-price'=>'۴۵,۵۰۰ '],
                                ['img'=>'"images/phone-7.jpg"','product-title'=>' کاور جوی روم مدل JR-BP273 مناسب برای گوشی موبایل اپل iPhone 6 Plus', 'old-price'=>'۹۹,۰۰۰ ',
                                    'discount'=>' ٪۳۰', 'new-price'=>'۴۵,۵۰۰ '],
                                ['img'=>'"images/phone-3.jpg"','product-title'=>' کاور جوی روم مدل JR-BP273 مناسب برای گوشی موبایل اپل iPhone 6 Plus', 'old-price'=>'۹۹,۰۰۰ ',
                                    'discount'=>' ٪۶', 'new-price'=>'۴۵,۵۰۰ '],
                                ['img'=>'"images/phone-4.jpg"','product-title'=>'کاور نیلکین مدل Camshield مناسب برای گوشی موبایل شیائومی POCO X3 NFC', 'old-price'=>'۹۹,۰۰۰ ',
                                    'discount'=>'٪۳۰ ', 'new-price'=>'۲۰۴,۷۹۰ '],
                                ['img'=>'"images/phone-5.jpg"','product-title'=>' کاور جوی روم مدل JR-BP273 مناسب برای گوشی موبایل اپل iPhone 6 Plus', 'old-price'=>'۹۹,۰۰۰ ',
                                    'discount'=>' ٪۵۴', 'new-price'=>'۴۵,۵۰۰ '],
                                ['img'=>'"images/phone-6.jpg"','product-title'=>' کاور جوی روم مدل JR-BP273 مناسب برای گوشی موبایل اپل iPhone 6 Plus', 'old-price'=>'۹۹,۰۰۰ ',
                                    'discount'=>' ٪۵۴', 'new-price'=>'۴۵,۵۰۰ '],
                                ['img'=>'"images/phone-7.jpg"','product-title'=>' کاور جوی روم مدل JR-BP273 مناسب برای گوشی موبایل اپل iPhone 6 Plus', 'old-price'=>'۹۹,۰۰۰ ',
                                    'discount'=>' ٪۳۰', 'new-price'=>'۴۵,۵۰۰ ']
                            ]
                            ?>
                            @foreach($productItemContainer4 as $productItem4 )
                                <div class="product-item-container-4">
                                    <div class="product-item">
                                        <div>
                                            <a href="#product-page">
                                                <img src={!!$productItem4['img']!!}} title="phone1" alt="a product example" class="product-img">
                                            </a>
                                        </div>
                                        <div class="product-title">
                                            <a href="#product-page">
                                                {{$productItem4['product-title']}}
                                            </a>
                                        </div>
                                        <div class="product-price">
                                            <div class="product-old-price">
                                                <del>{{$productItem4['old-price']}}</del>
                                                <span class="old-price-discount">
                                                 {{$productItem4['discount']}}
                                            </span>
                                            </div>
                                            <div class="product-new-price">
                                                {{$productItem4['new-price']}}
                                                <span class="new-price-currency">تومان</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                            @endforeach

                        </div>
                        <div class="arrow-right-3">
                            <i class="fa fa-chevron-right" aria-hidden="true"></i>
                        </div>
                        <div class="arrow-left-3">
                            <i class="fa fa-chevron-left" aria-hidden="true"></i>
                        </div>
                    </div>
                </div>
            </section>

        </div>
        <div class="page-section">
            <section class="swiper-brands-container pt-1">
                <div class="swiper-brands flex flex-row ">
                    <div class="swiper-brands-image-container">
                        <a href="#brand-page" class="banner-brand-link">
                            <img src="images/huawei.jpg" alt="brand">
                        </a>
                    </div>
                    <div class="swiper-brands-image-container">
                        <a href="#brand-page" class="banner-brand-link">
                            <img src="images/x-vision.png" alt="brand">
                        </a>
                    </div>
                    <div class="swiper-brands-image-container">
                        <a href="#brand-page" class="banner-brand-link">
                            <img src="images/tcl.jpg" alt="brand">
                        </a>
                    </div>
                    <div class="swiper-brands-image-container">
                        <a href="#brand-page" class="banner-brand-link">
                            <img src="images/casio.jpg" alt="brand">
                        </a>
                    </div>
                    <div class="swiper-brands-image-container">
                        <a href="#brand-page" class="banner-brand-link">
                            <img src="images/pakshoma.png" alt="brand">
                        </a>
                    </div>
                </div>

            </section>
        </div>
        <!--promotion categories component-->
        <div class="page-section">
            <div class="promotion-cats-container">
                <div class="cat-head">
                    <div class="cat-title">
                        بیش از ۲،۰۰۰،۰۰۰ کالا در دسته‌بندی‌های مختلف
                    </div>
                </div>
                <div class="promotion-cats">
                    <!--promotion cat section-->
                    <?php
                     $promotionSections = [
                         ['icon'=>'"fa fa-laptop"', 'cat-name'=>' کالای دیجیتال', 'cat-quantity'=>' + ۵۲۹۰۰۰ کالا'],
                         ['icon'=>'"fa fa-wrench"', 'cat-name'=>'خودرو، ابزار و تجهیزات صنعتی', 'cat-quantity'=>' + ۵۲۹۰۰۰ کالا'],
                         ['icon'=>'"fa fa-check"', 'cat-name'=>'مد و پوشاک', 'cat-quantity'=>'+ ۱۱۱۰۰۰ کالا'],
                         ['icon'=>'"fa fa-child"', 'cat-name'=>' اسباب بازی، کودک و نوزاد', 'cat-quantity'=>'+ ۴۸۸۰۰۰ کالا'],
                         ['icon'=>'"fa fa-shopping-basket"', 'cat-name'=>'کالاهای سوپرمارکتی', 'cat-quantity'=>'+ ۵۲۹۰۰۰ کالا'],
                         ['icon'=>'"fa fa-heart"', 'cat-name'=>'زیبایی و سلامت', 'cat-quantity'=>' + ۵۲۹۰۰۰ کالا'],
                         ['icon'=>'"fa fa-home"', 'cat-name'=>'خانه و آشپزخانه', 'cat-quantity'=>' + ۵۲۹۰۰۰ کالا'],
                         ['icon'=>'"fa fa-pencil"', 'cat-name'=>'کتاب، لوازم تحریر و هنر', 'cat-quantity'=>' + ۵۲۹۰۰۰ کالا'],
                         ['icon'=>'"fa fa-tree"', 'cat-name'=>'ورزش و سفر', 'cat-quantity'=>'+ ۲۰۰۰۰۰ کالا']
                     ]
                    ?>
                    @foreach($promotionSections as $promotionsection)
                        <a href="#category" class="promotion-cat-sec">
                            <div class="promotion-cat-icon">
                                <i class={!! $promotionsection['icon'] !!}></i>
                            </div>
                            <div class="promotion-cat-name">
                                {!! $promotionsection['cat-name'] !!}
                            </div>
                            <div class="promotion-cat-quantity">
                                {!! $promotionsection['cat-quantity'] !!}
                            </div>
                        </a>
                    @endforeach

                </div>
            </div>
        </div>

    </main>
    <!--footer component-->

    <footer class="digi-footer mt-13">
        <div class="footer-jumpup absolute w-full flex flex-row flex-wrap justify-center">
            <span>
                <a href="#navbar">
                    <i class="fa fa-chevron-circle-up w-9 h-9 footer-jumpup-icon"></i>
                برگشت به بالا
                </a>

            </span>
        </div>
        <div class="footer-innerbox flex flex-row flex-wrap justify-center">
            <a href="#navbar" class="footer-badge">
                <div class="footer-feature-item feature-item-1 flex flex-col content-center justify-center">
                    <img src="images/24hours.svg" class="pb-7 flex flex-row justify-center w-14 mx-auto my-0">
                    <div class="flex flex-row justify-center">تحویل اکسپرس</div>
                </div>
            </a>
            <a href="#navbar" class="footer-badge">
                <div class="footer-feature-item feature-item-1 flex flex-col content-center justify-center">
                    <img src="images/24hours.svg" class="pb-7 flex flex-row justify-center w-14 mx-auto my-0">
                    <div class="flex flex-row justify-center">پشتیبانی 24 ساعته</div>
                </div>
            </a>
            <a href="#navbar" class="footer-badge">
                <div class="footer-feature-item feature-item-1 flex flex-col content-center justify-center">
                    <img src="images/local-pay.svg" class="pb-7 flex flex-row justify-center w-14 mx-auto my-0">
                    <div class="flex flex-row justify-center">پرداخت در محل </div>
                </div>
            </a>
            <a href="#navbar" class="footer-badge">
                <div class="footer-feature-item feature-item-1 flex flex-col content-center justify-center">
                    <img src="images/7days.svg" class="pb-7 flex flex-row justify-center w-14 mx-auto my-0">
                    <div class="flex flex-row justify-center">7 روز ضمانت بازگشت</div>
                </div>
            </a>
            <a href="#navbar" class="footer-badge">
                <div class="footer-feature-item feature-item-1 flex flex-col content-center justify-center">
                    <img src="images/garranty.svg" class="pb-7 flex flex-row justify-center w-14 mx-auto my-0">
                    <div class="flex flex-row justify-center">ضمانت اصل بودن کالا </div>
                </div>
            </a>
        </div>
        <hr>
        <div class="middle-bar py-5 pb-4 flex justify-between ">
            <div class="flex flex-start flex-row justify-between px-2 footer-links ">
                <nav class="footer-links-col">
                    <div class="headline-links">
                        <a href="#buying-from-digikala" class="mb-5 headline-links-title">
                            راهنمای خرید از دیجی کالا
                        </a>
                    </div>
                    <ul class="footer-links-ul">
                        <?php
                        $footerLinksUl1=[
                            ['name'=>' نحوه ثبت سفارش'],
                            ['name'=>' رویه ارسال سفارش'],
                            ['name'=>'شیوه های پرداخت']
                        ]
                        ?>
                        @foreach ($footerLinksUl1 as $footerlink1)
                            <li class="mt-3">
                                <a href="sefaresh">
                                    {{$footerlink1['name']}}
                                </a>
                            </li>
                        @endforeach

                    </ul>
                </nav>
                <nav class="footer-links-col">
                    <div class="headline-links">
                        <a href="#buying-from-digikala" class="mb-5 headline-links-title">
                            خدمات مشتریان
                        </a>
                    </div>
                    <ul class="footer-links-ul">
                        <?php
                        $footerLinksUl2=[
                            ['name'=>' پاسخ به پرسش‌های متداول'],
                            ['name'=>' شرایط استفاده'],
                            ['name'=>' حریم خصوصی'],
                            ['name'=>' گزارش باگ'],
                        ]
                        ?>
                        @foreach ($footerLinksUl2 as $footerlink2)
                                <li class="mt-3">
                                    <a href="sefaresh">
                                        {{$footerlink2['name']}}
                                    </a>
                                </li>
                        @endforeach
                    </ul>
                </nav>
                <nav class="footer-links-col">
                    <div class="headline-links">
                        <a href="#buying-from-digikala" class="mb-5 headline-links-title">
                            با دیجی‌کالا
                        </a>
                    </div>
                    <ul class="footer-links-ul">
                        <?php
                        $footerLinksUl3 = [
                            ['name'=>' اتاق خبر دیجی‌کالا'],
                            ['name'=>' فروش در دیجی کالا  '],
                            ['name'=>' فرصت های شغلی  '],
                            ['name'=>' تماس با دیجی کالا    '],
                            ['name'=>'راهنمای هویت بصری ']
                        ];
                        ?>
                        @foreach ($footerLinksUl3 as $footerlink3)
                            <li class="mt-3">
                                <a href="sefaresh">
                                   {{$footerlink3['name']}}
                                </a>
                            </li>
                        @endforeach

                    </ul>
                </nav>
            </div>
            <nav class="footer-form justify-between">
                <form action="" class="form-newsletter mb-8">
                    <fieldset>
                        <legend class="mb-5">
                            از تخفیف‌ها و جدیدترین‌های دیجی‌کالا باخبر
                            شوید:
                        </legend>
                        <div class="w-full m-0 inline-flex form-newsletter-row">
                            <input type="text" class="newsletter-input w-full" placeholder="آدرس ایمیل خود را وارد کنید">
                            <button class="newsletter-btn">ارسال
                            </button>
                        </div>
                    </fieldset>
                </form>
                <div class="footer-community">
                    <div class="footer-social">
                        <span>
                            دیجی‌کالا را در شبکه‌های اجتماعی دنبال کنید:
                        </span>
                        <span class="footer-social-images flex">
                            <a href="#social" class="social-icon">
                                <i class="fa fa-linkedin-square"></i>
                            </a>
                            <a href="#social" class="social-icon mr-5">
                                <i class="fa fa-youtube-play"></i>
                            </a>
                            <a href="#social" class="social-icon mr-5">
                                <i class="fa fa-twitter-square"></i>
                            </a>
                            <a href="#social" class="social-icon mr-5">
                                <i class="fa fa-instagram"></i>
                            </a>
                        </span>
                    </div>
                </div>
            </nav>
        </div>
        <nav class="footer-address flex- align-center py-4 px-2 flex flex-col flex-wrap w-full justify-center align-center">
            <nav class="flex flex-col align-center justify-center">
                <ul class="footer-contact flex flex-row justify-center w-auto mt-2 ml-14 mr-0 mb-4">
                    <li>

                        هفت روز هفته ، ۲۴ ساعت شبانه‌روز پاسخگوی شما هستیم

                    </li>
                    <li class="mx-5">
                        شماره تماس :
                        <a href="#faq">۶۱۹۳۰۰۰۰ - ۰۲۱</a>
                    </li>
                    <li>

                        آدرس ایمیل :
                        <a href="#faq">info@digikala.com</a>

                    </li>
                </ul>
            </nav>
            <div class="footer-address-images flex flex-nowrap justify-center">
                <a href="#download" class="footer-address-googleplay ml-2">
                    <img src="images/google-play.png" alt="" width="150px" loading="lazy">
                </a>
                <a href="#download" class="footer-address-googleplay ml-2">
                    <img src="images/bazaar.svg" alt="" width="150px" loading="lazy">
                </a>
                <a href="#download" class="footer-address-googleplay ml-2">
                    <img src="images/myket.svg" alt="" width="150px" loading="lazy">
                </a>
                <a href="#download" class="footer-address-googleplay ml-2">
                    <img src="images/sibapp.png" alt="" width="150px" loading="lazy">
                </a>
            </div>

        </nav>
        <div class="footer-more-info px-3 py-5">
            <div class="footer-description-content flex flex-nowrap px-4	">
                <div class="footer-content ml-4">
                    <article class="mt-7 footer-seo" >
                        <h1 class="mb-4">فروشگاه اینترنتی دیجی‌کالا، بررسی، انتخاب و خرید آنلاین</h1>
                        <p>
                            دیجی‌کالا به عنوان یکی از قدیمی‌ترین فروشگاه های اینترنتی
                            با بیش از یک دهه تجربه، با پایبندی به سه اصل، پرداخت در محل،
                            7 روز ضمانت بازگشت کالا و تضمین اصل‌بودن کالا موفق شده تا همگام
                            با فروشگاه‌های معتبر جهان، به بزرگ‌ترین فروشگاه اینترنتی
                            ایران تبدیل شود. به محض ورود به سایت دیجی‌کالا با دنیایی از کالا رو به رو می‌شوید!
                            هر آنچه که نیاز دارید و به ذهن شما خطور می‌کند در اینجا پیدا خواهید کرد.
                        </p>
                    </article>
                </div>
                <aside>
                    <ul class="flex flex-row items-center footer-safety-partner">
                        <li class="safety-partner-1">
                            <img src="images/etehadiye.png" alt="">
                        </li>
                        <li class="safety-partner-2">
                            <img src="images/namad.aspx" alt="">

                        </li>
                        <li class="safety-partner-3">
                            <img src="images/sabt-neshan.aspx" alt="">
                        </li>
                    </ul>
                </aside>
            </div>
            <div class="footer-partners-container w-full">
                <nav class="w-full">
                    <ul class="my-2 w-full flex flex-row flex-nowrap justify-around">
                        <li>
                            <a href="#partner-page">
                                <img src="images/digikala-mag.svg" alt="partner">
                            </a>
                        </li>
                        <li>
                            <a href="#partner-page">
                                <img src="images/digikala-mag.svg" alt="partner">
                            </a>
                        </li>
                        <li>
                            <a href="#partner-page">
                                <img src="images/digipay.svg" alt="partner">
                            </a>
                        </li>
                        <li>
                            <a href="#partner-page">
                                <img src="images/digiclub.svg" alt="partner">
                            </a>
                        </li>
                        <li>
                            <a href="#partner-page">
                                <img src="images/digikala-affilaiate.svg" alt="partner">
                            </a>
                        </li>
                        <li>
                            <a href="#partner-page">
                                <img src="images/fidiboo.svg" alt="partner">
                            </a>
                        </li>
                    </ul>
                </nav>
            </div>
            <div class="footer-copyright px-3">
                <div class="footer-copyright-text pt-10 pb-4">

                    استفاده از مطالب فروشگاه اینترنتی دیجی‌کالا فقط برای مقاصد غیرتجاری و با ذکر منبع
                    بلامانع است. کلیه حقوق این سایت متعلق به شرکت نوآوران فن آوازه (فروشگاه آنلاین دیجی‌کالا) می‌باشد.

                </div>
            </div>
        </div>
    </footer>
</div>
<script src="js/nav-menu.js"></script>
<script src="js/icredible-specials.js"></script>
<script src="js/category-products.js"></script>
<script src="js/footer.js"></script>


</body>
</html>
