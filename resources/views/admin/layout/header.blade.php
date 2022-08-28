<!-- Header-->
<header id="header" class="header">
    <div class="header-menu">
        <div class="col-sm-7">
            {{-- style.css --}}
            <a id="menuToggle" class="menutoggle pull-left bg-theme"><i class="fa-solid fa-angles-left"></i></a>
        </div>

        <div class="col-sm-5">
            <div class="user-area dropdown float-right">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true"
                    aria-expanded="false">
                    <span class="text-dark">{{ Auth::user()->name }} &ensp; <i
                            class="fa-solid fa-caret-down"></i></span>
                </a>

                <div class="user-menu dropdown-menu">
                    <a class="nav-link" href="/admin"> Dashboard</a>
                    <form method="POST" action="{{ route('logout') }}">
                        @csrf

                        <a class="nav-link" href="/logout"
                            onclick="event.preventDefault();
                    this.closest('form').submit();">Logout</a>
                    </form>
                </div>
            </div>
        </div>
    </div>
</header><!-- /header -->
