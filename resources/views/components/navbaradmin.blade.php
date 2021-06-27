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
                <li><a class="text-white {{ Request::is('admin') ? 'fw-bold' : '' }}" href="{{ url('/admin') }}">BERANDA</a></li>
                <li><a class="text-white {{ Request::is('manage') ? 'fw-bold' : '' }}" href="{{ url('/manage') }}">KELOLA PRODUK</a></li>
                <li><a class="text-white {{ Request::is('payment') ? 'fw-bold' : '' }}" href="{{ url('/payment') }}">PEMBAYARAN</a></li>
                <li><a class="text-white {{ Request::is('request') ? 'fw-bold' : '' }}" href="{{ url('/request') }}">PERMINTAAN</a></li>
            </ul>
        </div>
        <a class="m-4" style="width: 40px; color: white">
            <img src="{{URL('/images/user.png')}}" alt="">
        </a>
        <div uk-dropdown="pos: top-right; mode: click">
            <ul class="uk-nav uk-dropdown-nav">
                <li class="uk-nav-header">Admin</li>
                <li class="uk-nav-divider"></li>
                <button class="uk-button uk-button-danger mt-2">Logout</button>
            </ul>
        </div>
    </nav>
</div>