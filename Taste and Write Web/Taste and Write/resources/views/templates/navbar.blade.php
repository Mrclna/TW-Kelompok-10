<section id="lg-nav">
    <div class="navbar">
        <nav>
            <div class="logo">
                <img class="food-logo" src="{{ asset('img/Logo/TW(2)-fotor-bg-remover-2024102314830.ico') }}"
                    alt="food-logo" />
                <p class="com-name">
                    <span class="com-1">Taste</span>
                    <span class="com-2">&</span>
                    <span class="com-3">Write</span>
                </p>
                <div class="dot"></div>
            </div>
            <div class="navbar-toggler">
                <span></span>
                <span></span>
                <span></span>
            </div>
            <ul>
                <div class="mobile-search">
                    <div class="search-icon">
                        <i class="fa-solid fa-magnifying-glass"></i>
                    </div>
                    <input class="mb-search" type="text" name="search" id="search" required="required" />
                    <span class="mb-label">Search Here</span>
                </div>
                <li class="top-li">
                    <a href="/" class="{{ $title == 'index' ? 'active' : 'ac-2' }}">Home <i class="fa-solid fa-arrow-up mb-arrow"></i></a>
                </li>
                <li>
                    <a href="/about" class="{{ $title == 'about' ? 'active' : 'ac-2' }}">About <i class="fa-solid fa-arrow-up mb-arrow"></i></a>
                </li>
                <li>
                    <a href="/gallery" class="gallery {{ $title == 'gallery' ? 'active' : 'ac-4' }}">Gallery <i class="fa-solid fa-arrow-up mb-arrow"></i>
                    </a>
                </li>
                <li id="login-nav">
                    <a href="/login" class="contact {{ $title == 'login' ? 'active' : 'ac-7' }}">Login/Register <i
                            class="fa-solid fa-arrow-up mb-arrow"></i></a>
                </li>
            </ul>
        </nav>
    </div>
</section>
