<div>
    <div class="navbar max-xl:px-5 max-lg:px-5 px-44 shadow-xl py-6">
        <div class="navbar-start">

            {{-- Menu Dropdown Mobile --}}
            <div class="dropdown">
                <label tabindex="0" class="btn btn-ghost xl:hidden">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" viewBox="0 0 24 24"
                        stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M4 6h16M4 12h8m-8 6h16" />
                    </svg>
                </label>
                <ul tabindex="0"
                    class="menu menu-compact dropdown-content mt-3 p-2 shadow bg-base-100 rounded-box w-52">
                    <li><a href="{{ URL::to('/') }}">Beranda</a></li>
                    <li tabindex="0">
                        <a class="justify-between">
                            Profil
                            <svg class="fill-current" xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                viewBox="0 0 24 24">
                                <path d="M8.59,16.58L13.17,12L8.59,7.41L10,6L16,12L10,18L8.59,16.58Z" />
                            </svg>
                        </a>
                        <ul class="p-2 bg-white">
                            <li><a>Sejarah IPDN</a></li>
                            <li><a>Visi Misi IPDN</a></li>
                        </ul>
                    </li>
                    <li><a href="{{ URL::to('berita/')}}">Berita</a></li>
                    <li><a>CAT</a></li>
                    <li><a href="https://spcp.ipdn.ac.id/" target="tab">SPCP IPDN</a></li>
                    </ul>
            </div>

            {{-- Title Navbar --}}
            <img src="https://kalbar.ipdn.ac.id/wp-content/uploads/2022/06/photo_2022-06-03_20-02-57.png"
                class="max-w-sm max-h-16">
            <a class="btn btn-ghost normal-case text-xl max-md:text-lg ">IPDN KAMPUS PAPUA</a>
        </div>

        {{-- Menu Item --}}
        <div class="navbar-center hidden xl:flex">
            <ul class="menu menu-horizontal px-1">
                {{-- Item 1 --}}
                <li><a href="{{ URL::to('/') }}">Beranda</a></li>

                {{-- Parent --}}
                <li tabindex="0">
                    <a>
                        Profil
                        <svg class="fill-current" xmlns="http://www.w3.org/2000/svg" width="20" height="20"
                            viewBox="0 0 24 24">
                            <path d="M7.41,8.58L12,13.17L16.59,8.58L18,10L12,16L6,10L7.41,8.58Z" />
                        </svg>
                    </a>
                    <ul class="p-2 bg-slate-50">
                        <li><a>Sejarah IPDN</a></li>
                        <li><a>Visi Misi IPDN</a></li>
                    </ul>
                </li>

                {{-- Item 3 --}}
                <li><a href="{{ URL::to('/berita')}}">Berita</a></li>
                <li><a>CAT</a></li>
                <li><a href="https://spcp.ipdn.ac.id/" target="tab">SPCP IPDN</a></li>
            </ul>
    </ul>
        </div>

        {{-- Menu Kanan --}}
        <div class="navbar-end">
            {{-- <a class="btn">Get started</a> --}}
        </div>
    </div>
</div>
