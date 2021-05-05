@php
    $salesMobileSub = [
        ['item'=>'مشاهده همه پیشنهاد ها'],
        ['item'=> 'پرفروش ترین کالاها '],
        ['item'=>'کالاهای شگفت انگیز'],
        ['item'=>'شگفت انگیز سوپرمارکتی'],
        ['item'=>'فروش ویژه'],
        ['item'=>'با هر خرید هدیه بگیرید'],
        ['item'=>'تخفیف پایان فصل'],
        ['item'=>'مشاهدهکارت هدیه خرید از دیجی کالا'],
        ['item'=>'تازه های فروشنده های جدید']
    ];
@endphp
<div class="mobile-menu-container hide absolute top-0 right-0" id="mobile-menu-container">
    <div class="content-container flex flex-col p-6">
        <div class="mobile-menu-icon mb-3">
            <div class="digikala-icon-container">
                <a href="digikala">
                    <img src="images/digikala.svg" alt="digikala">
                </a>
            </div>
        </div>
        <div class="mobile-menu-items mb-3 list-none">
            <li class="nav-link  border-right-add ">
                <a href="#supermarket" class="nav-link-title">
                    <div>
                        <i class='fa fa-shopping-basket ml-2'></i>سوپرمارکت
                    </div>
                </a>
            </li>
            <!-- منوهایی که toggle میشوند& باید دارای کلاس js-mobile-toggle باشند -->
            <li class="nav-link  border-right-add js-offers-mobile-toggle" >
                <a href="#supermarket" class="nav-link-title" style=" pointer-events: none">
                    <div style=" pointer-events: none">
                        <i class='fa fa-percent ml-2' style=" pointer-events: none"></i>تخفیف ها و پشنهادها
                    </div>
                </a>
                <ul class="mobile-nav-link-sub flex flex-col  hide bg-gray-100">
                    @foreach($salesMobileSub as $msubmenu)
                        <li>
                            <a href="#page-link" class="">
                                {{$msubmenu['item']}}
                            </a>
                        </li>
                    @endforeach
                </ul>

            </li>

            <li class="nav-link  border-right-add">
                <a href="#supermarket" class="nav-link-title">
                    <div>
                        <i class='fa fa-check-circle-o ml-2'></i>دیجی کالای من
                    </div>
                </a>
            </li>
            <li class="nav-link  border-right-add">
                <a href="#supermarket" class="nav-link-title">
                    <div>
                        <i class='fa fa-random ml-2'></i>دیجی کلاب
                    </div>
                </a>
            </li>
            <li class="nav-link  border-right-add">
                <a href="#supermarket" class="nav-link-title">
                    <div>
                        <i class='fa fa-paypal ml-2'></i>دیجی پی
                    </div>
                </a>
            </li>
            <li class="nav-link  border-right-add">
                <a href="#supermarket" class="nav-link-title">
                    <div>
                        <i class='fa fa-list-ul ml-2'></i>سوالی دارید؟
                    </div>

                </a>
            </li>
            <li class="nav-link  border-right-add">
                <a href="#supermarket" class="nav-link-title">
                    <div>
                        <i class='fa fa-list-ul ml-2'></i>فروشنده شوید
                    </div>

                </a>
            </li>
        </div>
        <div class="mobile-menu-cats mb-3"></div>
    </div>
</div>
