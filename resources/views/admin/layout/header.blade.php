<!-- Header-->
<header id="header" class="header">
    <div class="header-menu">
        <div class="col-sm-7">
            {{-- style.css --}}
            <a id="menuToggle" class="menutoggle pull-left bg-theme"><i class="fa-solid fa-angles-left"></i></a>

            <div class="header-left">
                <div class="row">
                    <div class="col-sm-1">
                        <a class="" href="/dashboard"><i class="fa-solid fa-house icon-color icon-home"></i></a>
                    </div>
                    <div class="col-sm-1">
                        <a href="">
                            <i class="fa-solid fa-bell icon-color"></i>
                        </a>
                    </div>
                    <div class="col-sm-1">
                        <a href="">
                            <i class="fa-solid fa-envelope icon-color"></i>
                        </a>
                    </div>
                </div>
            </div>
        </div>

        <div class="col-sm-5">
            <div class="user-area dropdown float-right">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true"
                    aria-expanded="false">
                    <img class="user-avatar rounded-circle" src="{{ asset('images/admin.jpg') }}" alt="User Avatar">
                </a>

                <div class="user-menu dropdown-menu">
                    <a class="nav-link" href="#"><i class="fa fa-user"></i> My Profile</a>

                    <a class="nav-link" href="#"><i class="fa fa-user"></i> Notifications </a>

                    <a class="nav-link" href="#"><i class="fa fa-cog"></i> Settings</a>
                    <form method="POST" action="{{ route('logout') }}">
                        @csrf

                        <a class="nav-link" href="/logout"
                            onclick="event.preventDefault();
                    this.closest('form').submit();"><i
                                class="fa fa-power-off"></i> Logout</a>
                    </form>
                </div>
            </div>

            <div class="language-select dropdown" id="language-select">
                <a class="dropdown-toggle" href="#" data-toggle="dropdown" id="language" aria-haspopup="true"
                    aria-expanded="true">
                    <i class="flag-icon flag-icon-id"></i>
                </a>
            </div>
        </div>
    </div>
</header><!-- /header -->
