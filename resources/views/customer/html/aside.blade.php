<aside class="left-sidebar">
    <!-- Sidebar scroll-->
    <div>
        <div class="brand-logo d-flex align-items-center justify-content-between">
            <a href="./index.html" class="text-nowrap logo-img">
                <img src="../../logo/logo1.png" class="dark-logo" width="38" alt="" style="padding-top: 24px" />
                <img src="../../logo/logolong1.png" class="light-logo"  height="40" alt="" />
            </a>
            <div class="close-btn d-lg-none d-block sidebartoggler cursor-pointer" id="sidebarCollapse">
                <i class="ti ti-x fs-8"></i>
            </div>
        </div>
        <!-- Sidebar navigation-->
        <nav class="sidebar-nav scroll-sidebar" data-simplebar>
            <ul id="sidebarnav">
                <li class="nav-small-cap">
                    <i class="ti ti-dots nav-small-cap-icon fs-4"></i>
                    <span class="hide-menu">User</span>
                </li>

                <li class="sidebar-item">
                    <a class="sidebar-link has-arrow" href="#" aria-expanded="false">
                  <span class="d-flex">
                    <i class="ti ti-users"></i>
                  </span>
                        <span class="hide-menu">Account</span>
                    </a>
                    <ul aria-expanded="false" class="collapse first-level">
                        <li class="sidebar-item">
                            <a href="{{ route('user.account.list') }}" class="sidebar-link">
                                <div class="round-16 d-flex align-items-center justify-content-center">
                                    <i class="ti ti-list-details" style="font-size: 21.21px"></i>
                                </div>
                                <span class="hide-menu">Account list</span>
                            </a>
                        </li>
                        <li class="sidebar-item">
                            <a href="./authentication-login2.html" class="sidebar-link">
                                <div class="round-16 d-flex align-items-center justify-content-center">
                                    <i class="ti ti-lock" style="font-size: 21.21px"></i>
                                </div>
                                <span class="hide-menu">Online payment lock</span>
                            </a>
                        </li>
                    </ul>
                </li>
                <li class="sidebar-item">
                    <a class="sidebar-link has-arrow" href="#" aria-expanded="false">
                  <span class="d-flex">
                    <i class="ti ti-coin"></i>
                  </span>
                        <span class="hide-menu">Transfer</span>
                    </a>
                    <ul aria-expanded="false" class="collapse first-level">
                        <li class="sidebar-item">
                            <a href="{{ route('user.transfer.within-bank') }}" class="sidebar-link">
                                <div class="round-16 d-flex align-items-center justify-content-center">
                                    <i class="ti ti-user-check" style="font-size: 21.21px"></i>
                                </div>
                                <span class="hide-menu">To Account</span>
                            </a>
                        </li>
                        <li class="sidebar-item">
                            <a href="#" class="sidebar-link">
                                <div class="round-16 d-flex align-items-center justify-content-center">
                                    <i class="ti ti-credit-card" style="font-size: 21.21px"></i>
                                </div>
                                <span class="hide-menu">To Card</span>
                            </a>
                        </li>
                        <li class="sidebar-item">
                            <a href="#" class="sidebar-link">
                                <div class="round-16 d-flex align-items-center justify-content-center">
                                    <i class="ti ti-home-dollar" style="font-size: 21.21px"></i>
                                </div>
                                <span class="hide-menu">To My Account</span>
                            </a>
                        </li>
                    </ul>
                </li>
                <li class="sidebar-item">
                    <a class="sidebar-link has-arrow" href="#" aria-expanded="false">
                  <span class="d-flex">
                    <i class="ti ti-building-bank"></i>
                  </span>
                        <span class="hide-menu">Saving</span>
                    </a>
                    <ul aria-expanded="false" class="collapse first-level">
                        <li class="sidebar-item">
                            <a href="{{route('user.saving-acc-list')}}" class="sidebar-link">
                                <div class="round-16 d-flex align-items-center justify-content-center">
                                    <i class="ti ti-moneybag" style="font-size: 21.21px"></i>
                                </div>
                                <span class="hide-menu">Open Saving Account</span>
                            </a>
                        </li>
                        <li class="sidebar-item">
                            <a href="{{route('settle-term-dep')}}" class="sidebar-link">
                                <div class="round-16 d-flex align-items-center justify-content-center">
                                    <i class="ti ti-receipt" style="font-size: 21.21px"></i>
                                </div>
                                <span class="hide-menu"> Settle Term Deposit</span>
                            </a>
                        </li>
                    </ul>
                </li>
                <li class="sidebar-item">
                    <a class="sidebar-link has-arrow" href="#" aria-expanded="false">
                  <span class="d-flex">
                    <i class="ti ti-report-money"></i>
                  </span>
                        <span class="hide-menu">Loans</span>
                    </a>
                    <ul aria-expanded="false" class="collapse first-level">
                        <li class="sidebar-item">
                            <a href="./authentication-forgot-password.html" class="sidebar-link">
                                <div class="round-16 d-flex align-items-center justify-content-center">
                                    <i class="ti ti-cash-banknote" style="font-size: 21.21px"></i>
                                </div>
                                <span class="hide-menu">Personnal Loans</span>
                            </a>
                        </li>
                        <li class="sidebar-item">
                            <a href="./authentication-forgot-password2.html" class="sidebar-link">
                                <div class="round-16 d-flex align-items-center justify-content-center">
                                    <i class="ti ti-businessplan" style="font-size: 21.21px"></i>
                                </div>
                                <span class="hide-menu">Business Loan</span>
                            </a>
                        </li>
                    </ul>
                </li>
                <li class="sidebar-item">
                    <a class="sidebar-link sidebar-link" href="./authentication-maintenance.html" aria-expanded="false">
                  <span class="rounded-3">
                    <i class="ti ti-news"></i>
                  </span>
                        <span class="hide-menu">News</span>
                    </a>
                </li>
                <li class="sidebar-item">
                    <a class="sidebar-link sidebar-link" href="./authentication-maintenance.html" aria-expanded="false">
                  <span class="rounded-3">
                    <i class="ti ti-phone"></i>
                  </span>
                        <span class="hide-menu">Contact</span>
                    </a>
                </li>
            </ul>
            <div class="unlimited-access hide-menu bg-light-primary position-relative my-7 rounded">
                <div class="d-flex">
                    <div class="unlimited-access-title">
                        <h6 class="fw-semibold fs-4 mb-6 text-dark w-85">Smart Banking for the Good Life</h6>
                        <button class="btn btn-primary fs-2 fw-semibold lh-sm">Oink oink</button>
                    </div>
                    <div class="unlimited-access-img">
                        <img src="../../bg/pig1.png" alt="" height="150px">
                    </div>
                </div>
            </div>
        </nav>
        <div class="fixed-profile p-3 bg-light-secondary rounded sidebar-ad mt-3">
            <div class="hstack gap-3">
                <div class="john-img">
                    <img src="../../bg/doge1.png" class="rounded-circle" width="40" height="40" alt="">
                </div>
                <div class="john-title">
                    <h6 class="mb-0 fs-4 fw-semibold">Mathew</h6>
                    <span class="fs-2 text-dark">Designer</span>
                </div>
                <button class="border-0 bg-transparent text-primary ms-auto" tabindex="0" type="button" aria-label="logout" data-bs-toggle="tooltip" data-bs-placement="top" data-bs-title="logout">
                    <i class="ti ti-power fs-6"></i>
                </button>
            </div>
        </div>
        <!-- End Sidebar navigation -->
    </div>
    <!-- End Sidebar scroll-->
</aside>
