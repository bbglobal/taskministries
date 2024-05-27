<div class="mdk-drawer  js-mdk-drawer" id="default-drawer" data-align="start">
    <div class="mdk-drawer__content">
        <div class="sidebar sidebar-dark sidebar-left bg-dark-gray" data-perfect-scrollbar>

            <div class="d-flex align-items-center sidebar-p-a sidebar-account flex-shrink-0">
                <a href="{{ route('home') }}" class="flex d-flex align-items-center text-underline-0">
                    <span class="mr-3">
                        <!-- LOGO -->
                        <img src="{{ url('assets/images/logos/logo_2.png') }}" alt="Logo" width="65px">
                    </span>
                    <span class="flex d-flex flex-column">
                        <span class="sidebar-brand">TASK Ministries</span>
                        <small>Next Generation</small>
                    </span>
                </a>
            </div>

            <ul class="sidebar-menu">
                <li class="sidebar-menu-item active">
                    <a class="sidebar-menu-button" href="#">

                        <i class="sidebar-menu-icon sidebar-menu-icon--left material-icons">photo_filter</i>
                        <span class="sidebar-menu-text">Overview</span>
                    </a>
                </li>
            </ul>

            <div class="sidebar-heading">Student</div>
            <div class="sidebar-block p-0">
                <ul class="sidebar-menu mt-0">
                    <li class="sidebar-menu-item">
                        <a class="sidebar-menu-button" href="{{ route('student') }}">
                            <i class="sidebar-menu-icon sidebar-menu-icon--left material-icons">star_half</i>
                            <span class="sidebar-menu-text">Dashboard</span>
                        </a>
                    </li>
                    <li class="sidebar-menu-item">
                        <a class="sidebar-menu-button" href="{{ route('student.courses') }}">
                            <i class="sidebar-menu-icon sidebar-menu-icon--left material-icons">layers</i>
                            <span class="sidebar-menu-text">Courses</span>
                        </a>
                    </li>
                    <li class="sidebar-menu-item">
                        <a class="sidebar-menu-button" href="{{ route('student.teachers') }}">
                            <i class="sidebar-menu-icon sidebar-menu-icon--left material-icons">people</i>
                            <span class="sidebar-menu-text">Instructors</span>
                        </a>
                    </li>
                    <li class="sidebar-menu-item">
                        <a class="sidebar-menu-button" href="{{ route('student.classes') }}">
                            <i class="sidebar-menu-icon sidebar-menu-icon--left material-icons">event</i>
                            <span class="sidebar-menu-text">Classes</span>
                        </a>
                    </li>
                    <li class="sidebar-menu-item">
                        <a class="sidebar-menu-button" href="{{ route('student.shop') }}">
                            <i class="sidebar-menu-icon sidebar-menu-icon--left material-icons">add_shopping_cart</i>
                            <span class="sidebar-menu-text">Shop</span>
                        </a>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</div>
