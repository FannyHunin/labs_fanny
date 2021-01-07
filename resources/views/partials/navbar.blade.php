<header class="header-section">
    <div class="logo">
        <img src="{{asset('images/smallIcon.png')}}" alt="">
    </div>
    <!-- Navigation -->
    <div class="responsive"><i class="fa fa-bars"></i></div>
    <nav>
        <ul class="menu-list">
            <li class="active"><a href="/">{{$linkData->link1}}</a></li>
            <li><a href="/service">{{$linkData->link2}}</a></li>
            <li><a href="/blog">{{$linkData->link3}}</a></li>
            <li><a href="/contact">{{$linkData->link4}}</a></li>
        </ul>
    </nav>
</header>