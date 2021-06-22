
     {{-- ALL THE SIDEBAR MENU GOES HERE    --}}

    <ul id="sidebar-menu">
        <li>
            <a href="{{ route('home')}}" title="Admin Dashboard">
                <i class="glyph-icon icon-linecons-tv"></i>
                <span>Main Menu</span>
            </a>
        </li>
        <li class="divider"></li>
        <li>
            <a href="{{ route('university.index') }}">
                <i class="glyph-icon icon-graduation-cap"></i>
                University Management
            </a>
        </li>
        {{-- <li>
            <a href="{{ route('department.index') }}">
                <i class="glyph-icon icon-book"></i>
                Department Management
            </a>
        </li> --}}
        <li>
            <a href="{{ route('staff.index') }}">
                <i class="glyph-icon icon-group"></i>
                Staff Management
            </a>
        </li>
        
    </ul><!-- #sidebar-menu -->
    
    
    