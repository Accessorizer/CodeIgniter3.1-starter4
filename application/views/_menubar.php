<nav class="navbar navbar-expand-md navbar-light" id="menubar">
    <a class="navbar-brand" href="/">{menubrand}</a>

    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse">
        <ul class="navbar-nav mr-auto">
            {menudata}
                <li class="nav-item">
                    <a class="nav-link" href="{link}">{name}</a>
                </li>
            {/menudata}
        </ul>
    </div>
</nav>