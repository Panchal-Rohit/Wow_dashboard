<aside class="sidebar">
        <button type="button" class="sidebar-close-btn">
            <iconify-icon icon="radix-icons:cross-2"></iconify-icon>
        </button>
        <div>
            <a href="{{ url('dashboard') }}" class="sidebar-logo">
                <img src="{{ asset('admin/assets/images/logo.png') }}" alt="site logo" class="light-logo">
                <img src="{{ asset('admin/assets/images/logo-light.png') }}" alt="site logo" class="dark-logo">
                <img src="{{ asset('admin/assets/images/logo-icon.png') }}" alt="site logo" class="logo-icon">
            </a>
        </div>
        <div class="sidebar-menu-area">
            <ul class="sidebar-menu" id="sidebar-menu">
                <li class="dropdown">
                    <a href="javascript:void(0)">
                        <iconify-icon icon="solar:home-smile-angle-outline" class="menu-icon"></iconify-icon>
                        <span>Dashboard</span>
                    </a>
                    <ul class="sidebar-submenu">
                        <li>
                            <a href="index.html"><i class="ri-circle-fill circle-icon text-primary-600 w-auto"></i>
                                AI</a>
                        </li>
                       
                    </ul>
                </li>
                
                <li class="dropdown">
                    <a href="javascript:void(0)">
                        <iconify-icon icon="icon-park-outline:setting-two" class="menu-icon"></iconify-icon>
                        <span>Settings</span>
                    </a>
                    <ul class="sidebar-submenu">
                        <li>
                            <a href="{{ route('profile.edit') }}"><i class="ri-circle-fill circle-icon text-primary-600 w-auto"></i>
                                Profile</a>
                        </li>
                    </ul>
                </li>
            </ul>
        </div>
    </aside>