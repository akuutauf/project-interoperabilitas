<!-- Left Panel -->
<aside id="left-panel" class="left-panel">
    <nav class="navbar navbar-expand-sm navbar-default">

        <div class="navbar-header">
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#main-menu"
                aria-controls="main-menu" aria-expanded="false" aria-label="Toggle navigation">
                <i class="fa fa-bars"></i>
            </button>
            <a class="navbar-brand" href="/dashboard">Interoperabilitas</a>
            <a class="navbar-brand hidden" href="/admin"><img src="{{ asset('img/logo-poliwangi.png') }}"
                    alt="Logo"></a>
        </div>

        <div id="main-menu" class="main-menu collapse navbar-collapse">
            <ul class="nav navbar-nav">
                <li class="active">
                    <a href="{{ url('/dashboard') }}"> <i class="menu-icon fa-solid fa-house"></i></i>Dashboard </a>
                    <a href="{{ url('/kategori') }}"> <i class="menu-icon fa-solid fa-bookmark"></i></i></i>Manajemen
                        Kategori
                    </a>
                    <a href="{{ url('/tugas') }}"> <i class="menu-icon fa-solid fa-book"></i></i>Manajemen Tugas </a>
                </li>
            </ul>
        </div><!-- /.navbar-collapse -->
    </nav>
</aside><!-- /#left-panel -->
<!-- Left Panel -->
