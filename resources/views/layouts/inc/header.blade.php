<header id="header" class="header d-flex align-items-center light-background sticky-top">
    <div class="container-fluid position-relative d-flex align-items-center justify-content-between">

        <a href="index.html" class="logo d-flex align-items-center me-auto me-xl-0">
            <!-- Uncomment the line below if you also wish to use an image logo -->
            <!-- <img src="assets/img/logo.png" alt=""> -->
        </a>

        <nav id="navmenu" class="navmenu">
            <ul>
                <li><a href="{{ url('dashboard/aboutview') }}">Profile</a></li>
                <li><a href="{{ url('dashboard/resumeview') }}">Experiences</a></li>
                <li><a href="{{ url('dashboard/scholl') }}">Education</a></li>
                <li><a href="{{ url('dashboard/profesional') }}">Skill</a></li>


            </ul>
            <i class="mobile-nav-toggle d-xl-none bi bi-list"></i>
        </nav>



    </div>
</header>
