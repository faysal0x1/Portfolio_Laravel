<div class="sidebar-wrapper" data-simplebar="true">
    <div class="sidebar-header">
        <div>
            <img src="{{ asset('adminBackend/assets/images/logo-icon.png') }}" class="logo-icon" alt="logo icon">
        </div>
        <div>
            <h4 class="logo-text">Admin</h4>
        </div>
        <div class="toggle-icon ms-auto"><i class='bx bx-arrow-to-left'></i>
        </div>
    </div>
    <!--navigation-->
    <ul class="metismenu" id="menu">
        <li>
            <a href="javascript:;" class="has-arrow">
                <div class="parent-icon"><i class='bx bx-home-circle'></i>
                </div>
                <div class="menu-title">Dashboard</div>
            </a>
        </li>

        <li>
            <a href="javascript:;" class="has-arrow">
                <div class="parent-icon"><i class='bx bx-cart'></i>
                </div>
                <div class="menu-title">Single Page</div>
            </a>
            <ul>
             
                <li> <a href="{{ route('about.index') }}"><i class="bx bx-right-arrow-alt"></i>About Details</a>
                </li>
                <li> <a href="{{ route('skills.index') }}"><i class="bx bx-right-arrow-alt"></i>Skills</a>
                </li>
                <li> <a href="{{ route('services.index') }}"><i class="bx bx-right-arrow-alt"></i>Services</a>
                </li>
                <li> <a href="{{ route('testimonials.index') }}"><i class="bx bx-right-arrow-alt"></i>Testimonials</a>
                </li>
                <li> <a href="{{ route('projects.index') }}"><i class="bx bx-right-arrow-alt"></i>Projects</a>
                </li>
                <li> <a href="{{ route('newsletter.index') }}"><i class="bx bx-right-arrow-alt"></i>Newsletter</a>
                </li>
            </ul>
        </li>

        
       
     
    </ul>
    <!--end navigation-->
</div>
