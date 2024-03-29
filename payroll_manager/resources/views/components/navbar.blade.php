<nav class="navbar navbar-header navbar-expand navbar-light col-md-12 nav-shadow">
    <a class="sidebar-toggler" href="#"><span class="navbar-toggler-icon"></span></a>
    <button class="btn navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent"
        aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav d-flex align-items-center navbar-light ms-auto">
            {{-- <li class="dropdown nav-icon">
                <a href="#" data-bs-toggle="dropdown" class="nav-link  dropdown-toggle nav-link-lg nav-link-user">
                    <div class="d-lg-inline-block">
                        <i data-feather="bell"></i><span class="badge bg-info">2</span>
                    </div>
                </a>
                <div class="dropdown-menu dropdown-menu-end dropdown-menu-large">
                     <h6 class='py-2 px-4'>Notifications</h6>
                     <ul class="list-group rounded-none">
                         <li class="list-group-item border-0 align-items-start">
                         <div class="row mb-2">
                         <div class="col-md-12 notif">
                                 <a href="leave_details.html"><h6 class='text-bold'>John Doe</h6>
                                 <p class='text-xs'>
                                     applied for leave at 05-21-2021
                                 </p></a>
                             </div>
                         <div class="col-md-12 notif">
                                 <a href="leave_details.html"><h6 class='text-bold'>Jane Doe</h6>
                                 <p class='text-xs'>
                                     applied for leave at 05-21-2021
                                 </p></a>
                             </div>
                           </div>
                         </li>
                     </ul>
                 </div>
            </li> --}}
            @auth
                <li class="dropdown">
                    <a href="#" data-bs-toggle="dropdown" class="nav-link dropdown-toggle nav-link-lg nav-link-user">
                        <div class="avatar me-1">
                            <img src="{{ asset('assets/images/admin.png') }}" alt="" srcset="">
                        </div>
                        <div class="d-none d-md-block d-lg-inline-block">Hi, {{ auth()->user()->username }}</div>
                    </a>
                    <div class="dropdown-menu dropdown-menu-end">
                        <a class="dropdown-item" href="#"><i data-feather="user"></i> Account</a>
                        <a class="dropdown-item" href="#"><i data-feather="settings"></i> Settings</a>
                        <div class="dropdown-divider"></div>
                        <form method="POST" action="/logout">
                            @csrf
                            <button class="dropdown-item" type="submit"><i data-feather="log-out"></i> Logout</button>

                        </form>
                    </div>
                </li>
            @endauth
        </ul>
    </div>
</nav>
