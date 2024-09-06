<div class="br-logo"><a href=""><span>[</span><i>BLUE</i>BELL<span>]</span></a></div>

<div class="br-sideleft sideleft-scrollbar">
    <label class="sidebar-label pd-x-10 mg-t-20 op-3">Navigation</label>
    <ul class="br-sideleft-menu">
        <li class="br-menu-item">
            <a href="{{ route('dashboard') }}" class="br-menu-link {{ Route::currentRouteName() == 'dashboard' ? 'active' : ''}}">
                <i class="menu-item-icon icon fa fa-home tx-16"></i>
                <span class="menu-item-label">Dashboard</span>
            </a><!-- br-menu-link -->
        </li><!-- br-menu-item -->

        <li class="br-menu-item">
            <a href="#" class="br-menu-link with-sub {{ in_array(Route::currentRouteName(), ['employees.create', 'employees.index']) ? 'active' : ''}}">
                <i class="menu-item-icon icon ion-person-stalker tx-20"></i>
                <span class="menu-item-label">Employee</span>
            </a><!-- br-menu-link -->
            <ul class="br-menu-sub">
                <li class="sub-item"><a href="{{ route('employees.create') }}" class="sub-link {{ Route::currentRouteName() == 'employees.create' ? 'active' : ''}}">Add Employee</a></li>
                <li class="sub-item"><a href="{{ route('employees.index') }}" class="sub-link {{ Route::currentRouteName() == 'employees.index' ? 'active' : ''}}">Manage Employee</a></li>
            </ul>
        </li>

    </ul>
    <!-- br-sideleft-menu -->
    <br>
</div>
<!-- br-sideleft -->
