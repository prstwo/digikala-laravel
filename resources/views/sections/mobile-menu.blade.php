<div class="mobile-menu-container hide absolute top-0 right-0" id="mobile-menu-container">
    <div class="content-container flex flex-col p-6">
        <div class="mobile-menu-icon mb-3">
            <div class="digikala-icon-container">
                <a href="#digikala">
                    <img src={{asset("images/digikala.svg")}} alt="digikala">
                </a>
            </div>
        </div>
        <div class="mobile-menu-items mb-3 list-none">

            @foreach($mobileMenuItems as $mobileMenuItem)
                @if($loop->index===1)
                    <li class="nav-link mobile-toggle-li js-mobile-toggle ">
                        <a href="#page" class="nav-link-title">
                            <div>
                                <i class='{{$mobileMenuItem['icon_class']}}'></i>{{$mobileMenuItem['title']}}
                            </div>
                        </a>
                        <ul class="mobile-nav-link-sub flex flex-col  hide bg-gray-100">
                            @foreach($mobileMenuItem['sublist'] as $msubmenu)
                                <li >
                                    <a href="#page-link" class="">
                                        {{$msubmenu['item']}}
                                    </a>
                                </li>
                            @endforeach
                        </ul>
                    </li>
                @else
                    <li class="nav-link  ">
                        <a href="#page" class="nav-link-title">
                            <div>
                                <i class='{{$mobileMenuItem['icon_class']}}'></i>{{$mobileMenuItem['title']}}
                            </div>
                        </a>
                    </li>
                @endif
            @endforeach
            {{--
            <ul class="mobile-nav-link-sub flex flex-col  hide bg-gray-100">
                    @foreach($salesMobileSub as $msubmenu)
                        <li>
                            <a href="#page-link" class="">
                                {{$msubmenu['item']}}
                            </a>
                        </li>
                    @endforeach
                </ul>
                --}}

        </div>
        <div class="mobile-menu-cats mb-3"></div>
    </div>
</div>
