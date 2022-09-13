<div class="mobile-menu-container md:hidden hide absolute top-0 right-0" id="mobile-menu-container">
    <div class="content-container flex flex-col p-6">
        <div class="mobile-menu-icon mb-3">
            <div class="digikala-icon-container">
                <a href="/">
                    <img src={{asset("images/digikala.svg")}} alt="digikala">
                </a>
            </div>
        </div>
        <ul class="mobile-menu-items mb-3 list-none">

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

        </ul>

        <ul class="mobile-menu-cats mb-3">
            <li>
                <div class="c-burger-menu-title">دسته&zwnj;بندی&zwnj;
                    کالاها
                </div>
            </li>
            {{-- mobile-menu-categories--}}
            @foreach($mobileMenuCats as $mobileMenuCat)
            <li class="nav-link mobile-toggle-li js-mobile-toggle">
                <a href="#page" class="nav-link-title w-full">
                    <div>
                        {{$mobileMenuCat['cat']}}
                    </div>
                </a>
                <ul class="mobile-nav-link-sub flex flex-col bg-gray-100 hide">

                    <li class="">
                        <a class="c-burger-menu-subcategory c-burger-menu-subcategory-all-link" href="#all_cats">
                            همه موارد این دسته
                        </a>
                    </li>
                    @foreach($mobileMenuCat['submenu'] as $mobileMenuCat)
                        <li class="{{$mobileMenuCat['class']}}">
                            @if($mobileMenuCat['chevron']===true)
                                <a class="c-burger-menu-subcategory with-chevron" href="#all_cats">
                                    {{$mobileMenuCat['title']}}
                                </a>
                                <ul class="hide">
                                    @foreach($mobileMenuCat['sublists'] as $sublist)
                                        <li>
                                            {{$sublist}}
                                        </li>
                                    @endforeach
                                </ul>
                            @else
                                <a  href="#cats" class="c-burger-menu-subcategory">
                                    {{$mobileMenuCat['title']}}
                                </a>
                                @endif
                        </li>
                    @endforeach

                </ul>
            </li>
            @endforeach
        </ul>
    </div>
</div>
