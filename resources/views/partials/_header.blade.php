    <!-- Toggle for mobile view -->
    <div id="mobile-navigation">
        <button id="nav-toggle" class="collapsed" data-toggle="collapse" data-target="#page-sidebar"><span></span></button>
        <a href="{{ route("home")}}" class="logo-content-small" title="MonarchUI"></a>
    </div>


    <!-- Logo goes here -->
    <div id="header-logo" class="logo-bg">
        <a href="{{ route("home") }}" class="logo-content-big" title="MonarchUI">
            IIC <i>CMS</i>
            <span>Student Information System</span>
        </a>
        <a href="{{ route("home") }}" class="logo-content-small" title="MonarchUI">
            IIC <i>CMS</i>
            <span>Student Information System</span>
        </a>
        <a id="close-sidebar" href="#" title="Close sidebar">
            <i class="glyph-icon icon-angle-left"></i>
        </a>
    </div>

    @include('partials._navright')
