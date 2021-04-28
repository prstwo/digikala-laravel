<footer class="digi-footer mt-13">
    @php
    $footerAdressImages = [
    ['src'=>'"images/google-play.png"'],
    ['src'=>'"images/bazaar.svg"'],
    [ 'src'=>'"images/myket.svg"']
    ,['src'=>'"images/sibapp.png"']
    ]
    @endphp
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
    <div class="middle-bar py-5 pb-4">
        <div class="flex flex-start flex-row justify-between mx-2 px-2 footer-links ">
            <nav class="footer-links-col">
                <div class="headline-links">
                    <a href="#buying-from-digikala" class="mb-5 headline-links-title">
                        راهنمای خرید از دیجی کالا
                    </a>
                </div>
                <ul class="mobile-footer-kinks-ul">
                    <?php
                    $mobileFooterLinksUl1=[
                        ['name'=>' نحوه ثبت سفارش'],
                        ['name'=>'راهنما'],
                        ['name'=>'درباره دیجی کالا'],
                        ['name'=>'راهنمای هویت بصری'],
                        ['name'=>'فرصت های شغلی'],
                        ['name'=>'گزارش باگ'],
                        ['name'=>'تماس با ما'],
                    ]
                    ?>
                    @foreach ($mobileFooterLinksUl1 as $mobilefooterlink1)
                        <li class="mt-3">
                            <a href="sefaresh">
                                {{$mobilefooterlink1['name']}}
                            </a>
                        </li>
                    @endforeach
                </ul>
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
                <ul class="mobile-footer-kinks-ul">
                    <?php
                    $mobileFooterLinksUl2=[
                        ['name'=>'فروش در دیجی کالا'],
                        ['name'=>'سوالات متداول'],
                        ['name'=>'  دانلود اپلیکیشن'],
                        ['name'=>'شرایط استفاده'],
                        ['name'=>'حریم خصوصی'],
                        ['name'=>'اتاق خبر دیجی کالا']
                    ]
                    ?>
                    @foreach ($mobileFooterLinksUl2 as $mobilefooterlink2)
                        <li class="mt-3">
                            <a href="sefaresh">
                                {{$mobilefooterlink2['name']}}
                            </a>
                        </li>
                    @endforeach
                </ul>

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
            <nav class="footer-links-col last-footer-links-col">
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
        <nav class="footer-form justify-between mt-3 mx-2 px-2">
            <div>
                <div class="mobile-footer-address-images flex flex-nowrap justify-center">
                    @foreach($footerAdressImages as $footeraddress)
                        <a href="#download" class="footer-address-googleplay ml-2">
                            <img src={!! $footeraddress['src'] !!} alt="" width="150px" loading="lazy">
                        </a>
                    @endforeach
                </div>
            </div>
            <form action="" class="form-newsletter mb-8">
                <fieldset>
                    <legend class="mb-5">
                        از تخفیف‌ها و جدیدترین‌های دیجی‌کالا باخبر
                        شوید:
                    </legend>
                    <div class="w-full m-0 inline-flex form-newsletter-row">
                        <input type="text" class="newsletter-input w-full " placeholder="آدرس ایمیل خود را وارد کنید">
                        <button class="newsletter-btn">ارسال
                        </button>
                        <button class="newsletter-btn-2">تایید ایمیل
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
    <hr>
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
            @foreach($footerAdressImages as $footeraddress)
                <a href="#download" class="footer-address-googleplay ml-2">
                    <img src={!! $footeraddress['src'] !!} alt="" width="150px" loading="lazy">
                </a>
            @endforeach
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
                <div class="footer-copyright-permission">
                    استفاده از مطالب فروشگاه اینترنتی دیجی‌کالا فقط برای مقاصد غیرتجاری و با ذکر منبع
                    بلامانع است.
                </div>
                کلیه حقوق این سایت متعلق به شرکت نوآوران فن آوازه (فروشگاه آنلاین دیجی‌کالا) می‌باشد.
            </div>
        </div>
    </div>
</footer>
