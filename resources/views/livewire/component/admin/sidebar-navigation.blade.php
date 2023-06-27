<div>
    {{-- If your happiness depends on money, you will never be happy with yourself. --}}

    <aside class="sidebar-left border-right bg-white shadow" id="leftSidebar" data-simplebar>
        <a href="#" class="btn collapseSidebar toggle-btn d-lg-none text-muted ml-2 mt-3" data-toggle="toggle">
            <i class="fe fe-x"><span class="sr-only"></span></i>
        </a>
        <nav class="vertnav navbar navbar-light">
            <!-- nav bar -->
            <div class="w-100 mb-4 d-flex">
                <a class="navbar-brand mx-auto mt-2 flex-fill text-center" href="./index.html">
                    <svg version="1.1" id="logo" class="navbar-brand-img brand-sm"
                        xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px"
                        y="0px" viewBox="0 0 120 120" xml:space="preserve">
                        <g>
                            <polygon class="st0" points="78,105 15,105 24,87 87,87 	" />
                            <polygon class="st0" points="96,69 33,69 42,51 105,51 	" />
                            <polygon class="st0" points="78,33 15,33 24,15 87,15 	" />
                        </g>
                    </svg>
                </a>
            </div>

            <ul class="navbar-nav flex-row w-100 mb-2">
                <li class="nav-item dropdown">
                    <a href="{{ route('home') }}" class="nav-link">
                        <i class="fe fe-home fe-16"></i>
                        <span class="ml-3 item-text">Dashboard</span><span class="sr-only">(current)</span>
                    </a>
                </li>
            </ul>

            @foreach ($menu as $item)
                <ul class="navbar-nav flex-row w-100 mb-2">
                    <li class="nav-item dropdown">
                        <a href="#{{ $item->MENU_NAME }}" data-toggle="collapse" aria-expanded="false"
                            class="dropdown-toggle nav-link">
                            <i class="{{ $item->MENU_ICON }} fe-16"></i>
                            <span class="ml-3 item-text">{{ $item->MENU_NAME }}</span><span
                                class="sr-only">(current)</span>
                        </a>
                        <ul class="collapse list-unstyled pl-4 w-100" id="{{ $item->MENU_NAME }}">
                            @foreach ($item->submenu as $submenu)
                                <li class="nav-item">
                                    <a class="nav-link pl-3" href="{{ url($submenu->SUBMENU_URL) }}"><span
                                            class="ml-1 item-text"> {{ $submenu->SUBMENU_NAME }} </span></a>
                                </li>
                            @endforeach
                        </ul>
                    </li>
                </ul>
            @endforeach

        </nav>
    </aside>

</div>
