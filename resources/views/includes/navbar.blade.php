    <header>
        <nav class="navbar navbar-expand navbar-light navbar-top">
            <div class="container-fluid">
                <!-- Burger Button -->
                <a href="#" class="burger-btn d-block">
                    <i class="bi bi-justify fs-3"></i>
                </a>
    
                <!-- Navbar Toggler -->
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
    
                <!-- Navbar Content -->
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav ms-auto mb-lg-0">
                        <!-- Time Widget -->
                        <li>
                            <a href="https://time.is/Tangerang" id="time_is_link" rel="nofollow" style="font-size:36px">Jam: </a>
                            <span id="Tangerang_z41c" style="font-size:36px"></span>
                            <script src="//widget.time.is/t.js"></script>
                            <script>
                                time_is_widget.init({Tangerang_z41c:{}});
                            </script>
                        </li>
    
                        <!-- Biohazard Icon -->
                        <li>
                            <i class="fa-solid fa-biohazard"></i>
                        </li>
                    </ul>
    
                    <!-- User Info and Avatar -->
                    <ul class="navbar-nav ms-auto mb-lg-0">
                        <li>
                            <i class="fa-solid fa-biohazard"></i>
                        </li>
                    </ul>
    
                    <!-- User Dropdown -->
                    <div>
                        <a href="#" data-bs-toggle="dropdown" aria-expanded="false">
                            <div class="user-menu d-flex">
                                <div class="user-name text-end me-3">
                                    <h6 class="mb-0 text-gray-600">{{ Auth::user()->name }}</h6>
                                    <p class="mb-0 text-sm text-gray-600">{{ Auth::user()->role }}</p>
                                </div>
                                <div class="user-img d-flex align-items-center">
                                    <div class="avatar avatar-md">
                                        <img src="images/logo.png" alt="User Avatar">
                                    </div>
                                </div>
                            </div>
                        </a>
                    </div>
                </div>
            </div>
        </nav>
    </header>
    