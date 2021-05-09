
<header class="page-main-header sticky top-0 righ-0 left-0 z-50 bg-white relative">
    <div class="mobile-header px-4 py-3">
        <div class="header-one py-2 mb-2 border-b border-gray-100 ">
            <div class="sandwich-menu js-m-sandwich-menu ">

                <a href="#mobile-menu-container"  onclick="mobileMenu()">
                    <i class="fa fa-align-justify "></i>

                </a>
            </div>
            <div class="digikala-icon-container">
                <a href="#digikala">
                    <img src="images/digikala.svg" alt="digikala">
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

    <div class="desktop-header-container px-4 py-3 flex flex-row flex-wrap justify-between">

        <div class="desktop-header header-right-side flex content-center flex-grow">
            <div class="mr-2 ml-6 w-100 flex items-center">
                <a href="digikala">
                    <img src="images/digikala.svg" alt="digikala">
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
    <x-navbar/>
</header>
<div class="nav-overlay"></div>

