<div class="boundary-align uk-sticky" uk-sticky="sel-target: .uk-navbar-container; cls-active: uk-navbar-sticky;">
    <nav class="uk-navbar-container" uk-navbar style="position: relative; z-index: 980; background-color:#0B5DC8">
        <div class="uk-navbar-left" style="margin-left: 15px;">

            <ul class="uk-navbar-nav">
                <a href="{{ url('/') }}">
                    <img src="{{URL('/images/logo.png')}}" style="width: 6.8em">
                </a>
            </ul>

        </div>

        <div class="nav-overlay uk-navbar-right">
            <ul class="uk-navbar-nav">
                <li><a class="text-white {{ Request::is('/') ? 'fw-bold' : '' }}" href="{{ url('/') }}">BERANDA</a></li>
                <li>
                    <a class="text-white {{ Request::is('custom') ? 'fw-bold' : '' }}" href="#">CUSTOM</a>
                    <div uk-dropdown="pos: bottom-center; boundary: .boundary-align; boundary-align: true; mode: click" style="width: 100vw">
                        <div class="uk-child-width-1-4@m ms-0" uk-grid>
                            <ul class="uk-nav uk-dropdown-nav">
                                <li class="uk-nav-header">Fashionwear</li>
                                <li><a href="{{ url('/custom') }}">Tshirt</a></li>
                                <li><a href="#">Kemeja</a></li>
                                <li><a href="#">Topi</a></li>
                                <li><a href="#">Piyama</a></li>
                                <li><a href="#">Hijab</a></li>
                                <li><a href="#">Tas</a></li>
                            </ul>
                            <ul class="uk-nav uk-dropdown-nav">
                                <li class="uk-nav-header">Stickers and Labels</li>
                                <li><a href="#">Cutting Sticker</a></li>
                                <li><a href="#">Sticker Safety</a></li>
                                <li><a href="#">Label</a></li>
                            </ul>
                            <ul class="uk-nav uk-dropdown-nav">
                                <li class="uk-nav-header">Merchandises</li>
                                <li><a href="#">E-Money</a></li>
                                <li><a href="#">USB and Powerbanks</a></li>
                                <li><a href="#">ID Cards and Lanyard</a></li>
                                <li><a href="#">Mugs</a></li>
                                <li><a href="#">Tumbler</a></li>
                                <li><a href="#">Touchless Finger</a></li>
                                <li><a href="#">Cake Topper</a></li>
                            </ul>
                            <ul class="uk-nav uk-dropdown-nav">
                                <li class="uk-nav-header">Home Decor</li>
                                <li><a href="#">Sarung Bantal</a></li>
                            </ul>
                        </div>
                    </div>
                </li>
                
                <li><a class="text-white {{ Request::is('harga') ? 'fw-bold' : '' }}" href="{{ url('/harga') }}">HARGA</a></li>
                <li><a class="text-white {{ Request::is('about') ? 'fw-bold' : '' }}" href="{{ url('/about') }}">TENTANG KAMI</a></li>
                <a class="uk-navbar-toggle text-white" uk-search-icon uk-toggle="target: .nav-overlay; animation: uk-animation-fade" href="#"></a>

            </ul>
        </div>

        <div class="nav-overlay uk-navbar-left uk-flex-1" hidden>

            <div class="uk-navbar-item uk-width-expand">
                <form class="uk-search uk-search-navbar uk-width-1-1">
                    <input class="uk-search-input text-white" type="search" placeholder="Search..." autofocus>
                </form>
            </div>
    
            <a class="uk-navbar-toggle text-white" uk-close uk-toggle="target: .nav-overlay; animation: uk-animation-fade" href="#"></a>
    
        </div>
        <a class="m-4" style="width: 40px; color: white">
            <img src="{{URL('/images/user.png')}}" alt="">
        </a>
        <div uk-dropdown="pos: top-right; mode: click">
            <ul class="uk-nav uk-dropdown-nav">
                <li class="uk-nav-header">Username</li>
                <li><a class="{{ Request::is('profil') ? 'fw-bold' : '' }}" href="{{ url('/profil') }}">Profil</a></li>
                <li><a class="{{ Request::is('riwayat') ? 'fw-bold' : '' }}" href="{{ url('/riwayat') }}">Riwayat</a></li>
                <li class="uk-nav-divider"></li>
                <button class="uk-button uk-button-danger mt-2">Logout</button>
            </ul>
        </div>
    </nav>
</div>