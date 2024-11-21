{{-- navbar --}}
<header>
    <nav class="navbar navbar-expand navbar-light navbar-top">
        <div class="container-fluid">
            <a href="#" class="burger-btn d-block">
                <i class="bi bi-justify fs-3"></i>
            </a>

            <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav ms-auto mb-lg-0">
                  <li>
                    <a href="{{ route('login') }}"><button>Login</button></a>
                  </li>
                </ul>
                <ul class="navbar-nav ms-auto mb-lg-0">
                    <li>
                        <i class="fa-solid fa-biohazard"></i>
                    </li>
                  </ul>
                <div>
                    <a href="#" data-bs-toggle="dropdown" aria-expanded="false">
                        <div class="user-menu d-flex">
                            <div class="user-name text-end me-3">
                                <h6 class="mb-0 text-gray-600">Pasien</h6>
                                <p class="mb-0 text-sm text-gray-600">user</p>
                            </div>
                            <div class="user-img d-flex align-items-center">
                                <div class="avatar avatar-md">
                                    <img src="images/logo.png">
                                </div>
                            </div>
                        </div>
                    </a>
                </div>
            </div>
        </div>
    </nav>
</header>
