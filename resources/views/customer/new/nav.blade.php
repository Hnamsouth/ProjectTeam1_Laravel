<nav class="navbar navbar-expand-lg navbar-light">
    {{--    icon sidenav mobile--}}
    <div class="navbar-nav d-lg-none d-block justify-content-start align-items-center">
        <div class="d-inline-block">
            <a href="javascript:void(0)" class="nav-link" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasExample" aria-controls="offcanvasExample">
                <i class="ti ti-align-justified fs-7"></i>
            </a>
        </div>
        <div class="d-inline block">
            <a href=""><img src="../../logo/logolong1.png" class="dark-logo my-3 ms-3" height="40" alt="" /></a>
            <img src="../../logo/logolong1.png" class="light-logo"  height="40" alt="" />
        </div>
    </div>
    {{--    end icon mobile--}}
{{--    icon sidenav desktop--}}
    <ul class="navbar-nav">
        <li class="nav-item aside-list">
            <a class=" nav-link nav-icon-hover ms-n3" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasExample" aria-controls="offcanvasExample">
                <i class="ti ti-menu-2 fs-6"></i>
            </a>
        </li>
    </ul>
{{--    end icon sidenav desktop--}}
    <div class="d-flex d-lg-none justify-content-between align-items-center">
        {{--    button topnav mobile--}}
        <button class="navbar-toggler d-lg-none p-0 border-0" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
              <span class="p-2">
                <i class="ti ti-dots fs-7"></i>
              </span>
        </button>
        {{--    end button topnav mobile--}}
    </div>
    <div class="collapse navbar-collapse justify-content-end" id="navbarNav">
        <div class="d-flex align-items-center justify-content-between">
            <ul class="navbar-nav flex-row ms-auto align-items-center justify-content-center">
                <li class="nav-item">
                    <a class="nav-link nav-icon-hover" href="javascript:void(0)" data-bs-toggle="modal" data-bs-target="#exampleModal">
                        <i class="ti ti-search"></i>
                    </a>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link nav-icon-hover" href="javascript:void(0)" id="drop2" data-bs-toggle="dropdown" aria-expanded="false">
                        <img src="../../customer/dist/images/svgs/icon-flag-en.svg" alt="" class="rounded-circle object-fit-cover round-20">
                    </a>
                    <div class="dropdown-menu dropdown-menu-end dropdown-menu-animate-up" aria-labelledby="drop2">
                        <div class="message-body" data-simplebar>
                            <a href="javascript:void(0)" class="d-flex align-items-center gap-2 py-3 px-4 dropdown-item">
                                <div class="position-relative">
                                    <img src="../../customer/dist/images/svgs/icon-flag-en.svg" alt="" class="rounded-circle object-fit-cover round-20">
                                </div>
                                <p class="mb-0 fs-3">English (UK)</p>
                            </a>
                            <a href="javascript:void(0)" class="d-flex align-items-center gap-2 py-3 px-4 dropdown-item">
                                <div class="position-relative">
                                    {{--                                    <img src="../../customer/dist/images/svgs/icon-flag-fr.svg" alt="" class="rounded-circle object-fit-cover round-20">--}}
                                    <img src="https://cdn-icons-png.flaticon.com/512/5373/5373331.png" class="rounded-circle object-fit-cover round-20" alt="Vietnam free icon" title="Vietnam free icon">
                                </div>
                                <p class="mb-0 fs-3">Vietnamese (VN)</p>
                            </a>
                        </div>
                    </div>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link pe-0" href="javascript:void(0)" id="drop1" data-bs-toggle="dropdown" aria-expanded="false">
                        <div class="d-flex align-items-center">
                            <div class="user-profile-img">
                                <img src="../../bg/doge1.png" class="rounded-circle" width="35" height="35" alt="" />
                            </div>
                        </div>
                    </a>
                    <div class="dropdown-menu content-dd dropdown-menu-end dropdown-menu-animate-up" aria-labelledby="drop1">
                        <div class="profile-dropdown position-relative" data-simplebar>
                            <div class="py-3 px-7 pb-0">
                                <h5 class="mb-0 fs-5 fw-semibold text-center">User Profile</h5>
                            </div>
                            <div class="message-body">
                                <a href="{{ route('login') }}" class="py-8 px-7 mt-8 d-flex align-items-center">
                                                <span class="d-flex align-items-center justify-content-center bg-light rounded-1 p-6">
                                                  <img src="../../customer/dist/images/svgs/icon-account.svg" alt="" width="24" height="24">
                                                </span>
                                    <div class="w-75 d-inline-block v-middle ps-3">
                                        <h6 class="mb-1 bg-hover-primary fw-semibold"> Personal </h6>
                                    </div>
                                </a>
                                <a href="#" class="py-8 px-7 d-flex align-items-center">
                                                <span class="d-flex align-items-center justify-content-center bg-light rounded-1 p-6">
                                                  <img src="../../customer/dist/images/svgs/icon-inbox.svg" alt="" width="24" height="24">
                                                </span>
                                    <div class="w-75 d-inline-block v-middle ps-3">
                                        <h6 class="mb-1 bg-hover-primary fw-semibold"> Business </h6>
                                    </div>
                                </a>
                            </div>
                        </div>
                    </div>
                </li>
            </ul>
        </div>
    </div>
</nav>
