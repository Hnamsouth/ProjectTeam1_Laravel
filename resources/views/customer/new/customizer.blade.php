{{--<button class="btn btn-primary p-3 rounded-circle d-flex align-items-center justify-content-center customizer-btn" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasExample" aria-controls="offcanvasExample">--}}
{{--    <i class="ti ti-settings fs-7" data-bs-toggle="tooltip" data-bs-placement="top" data-bs-title="Settings"></i>--}}
{{--</button>--}}
<div class="offcanvas offcanvas-start customizer" tabindex="-1" id="offcanvasExample" aria-labelledby="offcanvasExampleLabel" data-simplebar="">
    <div class="d-flex align-items-center justify-content-between p-3 border-bottom">
        <a href=""><img src="../../logo/logolong1.png" class="dark-logo" height="40" alt="" /></a>
        <h4 class="offcanvas-title fw-semibold" id="offcanvasExampleLabel">Menu</h4>
        <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
    </div>
    <div class="offcanvas-body p-4">
        <nav class="sidebar-nav scroll-sidebar" data-simplebar>
            <ul id="sidebarnav">
                <li class="nav-small-cap">
                    <i class="ti ti-dots nav-small-cap-icon fs-4"></i>
                    <span class="hide-menu">AUTH</span>
                </li>

                <li class="sidebar-item">
                    <a class="sidebar-link has-arrow" href="{{ route('account.list') }}" aria-expanded="false">
                  <span class="d-flex">
                    <i class="ti ti-credit-card"></i>
                  </span>
                        <span class="hide-menu">Card</span>
                    </a>
                    <ul aria-expanded="false" class="collapse first-level">
                        <li class="sidebar-item">
                            <a href="{{ route('account.list') }}" class="ms-4 sidebar-link">
                                <div class="round-16 d-flex align-items-center justify-content-center">
                                    <i class="ti ti-credit-card" style="font-size: 20px"></i>
                                </div>
                                <span class="hide-menu">Credit Cards</span>
                            </a>
                        </li>
                        <li class="sidebar-item">
                            <a href="#" class="ms-4 sidebar-link">
                                <div class="round-16 d-flex align-items-center justify-content-center">
                                    <i class="ti ti-credit-card-off" style="font-size: 20px"></i>
                                </div>
                                <span class="hide-menu">Debit Cards</span>
                            </a>
                        </li>
                    </ul>
                </li>
                <li class="sidebar-item">
                    <a class="sidebar-link has-arrow" href="#" aria-expanded="false">
                  <span class="d-flex">
                    <i class="ti ti-users"></i>
                  </span>
                        <span class="hide-menu">Account </span>
                    </a>
                    <ul aria-expanded="false" class="collapse first-level">
                        <li class="sidebar-item">
                            <a href="{{ route('account.list') }}" class="ms-4 sidebar-link">
                                <div class="round-16 d-flex align-items-center justify-content-center">
                                    <i class="ti ti-user" style="font-size: 20px;"></i>
                                </div>
                                <span class="hide-menu">Account list</span>
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
                            <a href="#" class="ms-4 sidebar-link">
                                <div class="round-16 d-flex align-items-center justify-content-center">
                                    <i class="ti ti-receipt-2" style="font-size: 20px"></i>
                                </div>
                                <span class="hide-menu">Personnal Loans</span>
                            </a>
                        </li>
                        <li class="sidebar-item">
                            <a href="#" class="ms-4 sidebar-link">
                                <div class="round-16 d-flex align-items-center justify-content-center">
                                    <i class="ti ti-coin" style="font-size: 20px"></i>
                                </div>
                                <span class="hide-menu">Business Loan</span>
                            </a>
                        </li>
                    </ul>
                </li>
                <li class="sidebar-item">
                    <a class="sidebar-link has-arrow" href="#" aria-expanded="false">
                  <span class="d-flex">
                    <i class="ti ti-zoom-code"></i>
                  </span>
                        <span class="hide-menu">Living styles</span>
                    </a>
                    <ul aria-expanded="false" class="collapse first-level">
                        <li class="sidebar-item">
                            <a href="#" class="ms-4 sidebar-link">
                                <div class="round-16 d-flex align-items-center justify-content-center">
                                    <i class="ti ti-wallet" style="font-size: 20px"></i>
                                </div>
                                <span class="hide-menu">SouthBank E-Wallet</span>
                            </a>
                        </li>
                        <li class="sidebar-item">
                            <a href="#" class="ms-4 sidebar-link">
                                <div class="round-16 d-flex align-items-center justify-content-center">
                                    <i class="ti ti-discount-2" style="font-size: 20px"></i>
                                </div>
                                <span class="hide-menu">Coupon</span>
                            </a>
                        </li>
                    </ul>
                </li>
                <li class="sidebar-item">
                    <a class="sidebar-link sidebar-link" href="#" aria-expanded="false">
                  <span class="rounded-3">
                    <i class="ti ti-news"></i>
                  </span>
                        <span class="hide-menu">News</span>
                    </a>
                </li>
                <li class="sidebar-item">
                    <a class="sidebar-link sidebar-link" href="#" aria-expanded="false">
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
                        <a href="login"><button class="btn btn-primary fs-2 fw-semibold lh-sm">Sign Up</button></a>
                    </div>
                    <div class="unlimited-access-img">
                        <img src="../../bg/pig1.png" alt="" class="" height="150px">
                    </div>
                </div>
            </div>
        </nav>
    </div>
</div>
