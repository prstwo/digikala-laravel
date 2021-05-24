<nav class="mobile-breadcrumb-container">
    <ol class="mobile-breadcrumb">
        @foreach($breadcrumb as $breadItem )
            <li>
                <a href={{$breadItem['href']}}>
                    <span>
                        {{$breadItem['cat']}}
                    </span>
                </a>
            </li>
        @endforeach
    </ol>
</nav>
