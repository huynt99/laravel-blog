<nav class="menu-desktop">
    <ul class="main-menu">
        @foreach($menu as $key => $item)
        <li class="{{array_key_first($menu) == $key ? __('main-menu') : __('mega-menu-item')}}">
            <!--Add main menu-->
            <a href="{{$item['url_key']}} ">{{$item['name']}}</a>
            @if(isset($item['children']))
            <!--Submenu-->
            <ul class="sub-menu">
                @foreach($item['children'] as $k => $i)
                <li><a href="{{$i['url_key']}}">{{$i['name']}}</a></li>
                @endforeach
            </ul>
            <!--    -->
            @endif
        </li>
        @endforeach
    </ul>
</nav>
