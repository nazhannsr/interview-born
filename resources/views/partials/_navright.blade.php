<div id="header-nav-right">
    <div class="user-account-btn dropdown">
        <a href="#" title="My Account" class="user-profile clearfix" data-toggle="dropdown">
            <img width="28" src="../../assets/image-resources/avatar.jpg" alt="Profile image">
                <!-- pull name from database -->
            <span>{{Auth::user()->name}}</span>
            <i class="glyph-icon icon-angle-down"></i>
        </a>
        <div class="dropdown-menu float-right">
            <div class="box-sm">
                <div class="login-box clearfix">
                    <div class="user-img">
                        <a href="#" title="" class="change-img">Change photo</a>
                        <img src="../../assets/image-resources/avatar.jpg" alt="">
                    </div>
                    <div class="user-info">
                        <!-- Name and course here -->
                        <span>
                            <i>Bachelor of Information Technology</i>
                        </span>
                        <a href="#" title="Edit profile">My Profile</a>
                    </div>
                </div>
                <div class="pad5A button-pane button-pane-alt text-center">
                    <form action="{{route('logout')}}" method="post">
                        @csrf
                        <button type="submit" class="btn display-block font-normal btn-danger">
                            <i class="glyph-icon icon-power-off"></i>
                            Logout
                        </button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div><!-- #header-nav-right -->