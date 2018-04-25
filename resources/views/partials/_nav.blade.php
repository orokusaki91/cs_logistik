<div id="navigation">
    <header style="background: url({{ asset('storage/uploads/home/' . $homeHeader->image) }}) no-repeat 50% 50%">
        <nav>
            <div class="menu-icon">
                <i class="fa fa-bars fa-2x"></i>
            </div>
            <div class="logo">
                <a href="{{ url('/') }}"><img src="{{ asset('img/logo.png') }}" alt=""></a>
            </div>
            <div class="menu">
                <ul>
                    <li><a href="#navigation">Home</a></li>
                    <li><a href="#sredina">Über uns</a></li>
                    <li><a href="#services">Dienstleistungen</a></li>
                    <li><a href="#contact">Kontakt</a></li>
                </ul>
            </div>
        </nav>
        <div class="header_text">{!! $homeHeader->text !!}</div>
    </header>
</div>