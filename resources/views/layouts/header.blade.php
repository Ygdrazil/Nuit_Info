<!-- HEADER -->
<div class="wrapper">
    <nav>
    <input type="checkbox" id="show-search">
    <input type="checkbox" id="show-menu">
    <label for="show-menu" class="menu-icon"><i class="fas fa-bars"></i></label>
    <div class="nav-content">
    <div class="logo"><a href="#">LOGO</a></div>
        <ul class="links">
            <li>
                <a href="#" class="desktop-link">Menu1</a>
                <input type="checkbox" id="show-services">
                <label for="show-services">Menu1</label>
                <ul>
                <li><a href="#">Drop Menu1 1</a></li>
                <li><a href="#">Drop Menu1 2</a></li>
                <li><a href="#">Drop Menu1 3</a></li>
                <li>
                    <a href="#" class="desktop-link">More Items</a>
                    <input type="checkbox" id="show-items">
                    <label for="show-items">More Items</label>
                    <ul>
                    <li><a href="#">Sub Menu 1</a></li>
                    <li><a href="#">Sub Menu 2</a></li>
                    <li><a href="#">Sub Menu 3</a></li>
                    </ul>
                </li>
                </ul>
            </li>
            <li><a href="#">Menu2</a></li>
            <li><a href="#">Menu3</a></li>
            <li><a href="{{ route('register') }}">S'inscrire</a></li>
            <li><a href="{{ route('login') }}">Se connecter</a></li>
        </ul>
    </div>
    <label for="show-search" class="search-icon"><i class="fas fa-search"></i></label>
    <form action="#" class="search-box">
        <input type="text" placeholder="Rechercher...">
        <button type="submit" class="go-icon"><i class="fas fa-long-arrow-alt-right"></i></button>
    </form>
    </nav>
</div>