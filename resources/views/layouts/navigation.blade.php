<div class="mobile__menu">
    <nav class="menu">
        {{menu('Main menu','partials.menus.main')}}
    </nav>
    {{--    <div class="mobile-search-form">--}}
    {{--        <div class="container">--}}
    {{--            <div class="search-form__inner">--}}
    {{--                <form>--}}
    {{--                    <input type="search" id="search" name="search" placeholder="Entrez un terme de recherche" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Entrez un terme de recherche'">--}}
    {{--                    <button value="Search">Recherche</button>--}}
    {{--                </form>--}}
    {{--            </div>--}}
    {{--        </div>--}}
    {{--    </div>--}}
</div>
<header class="header">
    <div class="header__inner">
        <div class="search-form" style="display: none">
            <div class="container">
                <div class="search-form__inner">
                    <form>
                        <input type="search" id="search" name="search" placeholder="Entrez un terme de recherche"
                               onfocus="this.placeholder = ''"
                               onblur="this.placeholder = 'Entrez un terme de recherche'">
                        <button value="Search">Recherche</button>
                    </form>
                </div>
            </div>
        </div>
        <div class="container">
            <div class="header__top">
                <div class="header__mentel">
                    <button class="burger-menu"></button>
                    <div class="phone">
                        <span>{{setting('site.header_phone_text')}}</span>
                        <a href="tel:{{setting('site.header_phone_text')}}">{{setting('site.header_phone')}}</a>
                    </div>
                </div>
                <a href="{{ url('/') }}" class="logo">
                    <img src="{{ URL::to('/storage/'.setting('site.logo')) }}" alt="">
                </a>
                <div class="header__srlng" style="display: none">
                    <button class="search"></button>
                    {{--                    <div class="lang-select">--}}
                    {{--                        <button class="lang">FR</button>--}}
                    {{--                        <div class="lang-list">--}}
                    {{--                            <a href="#">EN</a>--}}
                    {{--                            <a href="#">RU</a>--}}
                    {{--                        </div>--}}
                    {{--                    </div>--}}
                </div>
            </div>
            <div class="header__menu">
                <nav class="menu">
                    {{menu('Main menu','partials.menus.main')}}

                </nav>
            </div>
        </div>
    </div>
    </div>
</header>
