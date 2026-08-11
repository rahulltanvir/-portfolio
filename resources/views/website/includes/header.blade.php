
<header class="site-header">

    <nav class="navbar navbar-expand-lg navbar-dark">

        <div class="container">

            {{-- Logo --}}
            <a class="navbar-brand" href="{{ route('home') }}">
                <span class="logo-bracket"></span>
                <span class="logo-name">Tanvir</span>
                <span class="logo-bracket"></span>
            </a>


            {{-- Mobile Toggle --}}
            <button class="navbar-toggler"
                    type="button"
                    data-bs-toggle="collapse"
                    data-bs-target="#mainNavbar"
                    aria-controls="mainNavbar"
                    aria-expanded="false"
                    aria-label="Toggle navigation">

                <span class="navbar-toggler-icon"></span>

            </button>


            {{-- Navigation --}}
            <div class="collapse navbar-collapse" id="mainNavbar">

                <ul class="navbar-nav ms-auto align-items-lg-center">

                    <li class="nav-item">
                        <a class="nav-link active" href="#home">
                            Home
                        </a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link" href="#about">
                            About
                        </a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link" href="#skills">
                            Skills
                        </a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link" href="#services">
                            Services
                        </a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link" href="#projects">
                            Projects
                        </a>
                    </li>

                    <li class="nav-item nav-contact">
                        <a class="btn btn-hire" href="#contact">
                            <i class="fa-solid fa-paper-plane me-2"></i>
                            Hire Me
                        </a>
                    </li>

                </ul>

            </div>

        </div>

    </nav>

</header>

