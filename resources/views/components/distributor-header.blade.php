@php
    /**
     * Distributor共通 ヘッダー
     */
@endphp

<header>
    <div class="header-menu">
        <div class="icon-hamburger"><span></span></div><button class="logouut" onclick="location.href='{{ route('start.page') }}'"><img src="{{ asset('/images/logout.png') }}" alt=""><br><span class="logout-text">LOGOUT</span></button>
    </div>
    <nav class="header-container">
        <ul class="hamburger-menu distributor-menu">
            <li class="hamburger-menu-item"><a href="">ホーム</a></li>
            <li class="hamburger-menu-item"><a href="">プロフィール</a></li>
            <li class="hamburger-menu-item"><a href="">ラウンド登録</a></li>
            <li class="hamburger-menu-item"><a href="">過去ラウンド</a></li>
            <li class="hamburger-menu-item"><a href="">お知らせ一覧</a></li>
            <li class="hamburger-menu-item"><a href="">ランキング</a></li>
            <li class="hamburger-menu-item"><a href="">問い合わせ</a></li>
            <li class="hamburger-menu-item"><a href="">意見箱</a></li>
        </ul>
    </nav>
    <div id="popup-bg-cover"></div>
</header>
