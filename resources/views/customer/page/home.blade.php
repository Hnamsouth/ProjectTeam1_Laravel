@extends('customer.layout3')

@section('before-css')
    <link rel="stylesheet" href="../../customer/dist/libs/owl.carousel/dist/assets/owl.carousel.min.css">
@endsection

@section('main-content')
    {{--  header  --}}
    <div id="myCarousel" class="carousel slide" data-bs-ride="carousel" >
        <div class="carousel-indicators">
            <button type="button" data-bs-target="#myCarousel" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
            <button type="button" data-bs-target="#myCarousel" data-bs-slide-to="1" aria-label="Slide 2"></button>
            <button type="button" data-bs-target="#myCarousel" data-bs-slide-to="2" aria-label="Slide 3"></button>
        </div>
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img  src="/customer/dist/images/img/cls1.webp" height="400px" style="width:100vw !important;">
                <div class="container">
                    <div class="carousel-caption text-start text-dark">
                        <img src="../../logo/logolong1.png" alt="" class="" height="60px">
                        <p>Expertise you need. Service you deserve!</p>
                        <p><a class="btn btn-lg bg-wn text-dark btn-wn fw-semibold" href="/login">Sign up today</a></p>
                    </div>
                </div>
            </div>
            <div class="carousel-item">
                <img  src="/customer/dist/images/img/cls2.webp" height="400px"  style="width:100vw !important;">
                <div class="container">
                    <div class="carousel-caption  text-light">
                        <h1 class="text-light">Banking Focused on You.</h1>
                        <p>Lifetime zero fee. We keep our promises to you.</p>
                        <p><a class="btn btn-lg bg-wn text-light btn-wn fw-semibold" href="#">Learn more</a></p>
                    </div>
                </div>
            </div>
            <div class="carousel-item">
                <img  src="/customer/dist/images/img/cls3.webp" height="400px"  style="width:100vw !important;">
                <div class="container">
                    <div class="carousel-caption text-start  text-dark">
                        <h1>Bank less. Live more.</h1>
                        <p>All of Our Customers Trust Their Success To Us</p>
                        <p><a class="btn btn-lg bg-wn text-dark btn-wn fw-semibold" href="account-list">Start your account today</a></p>
                    </div>
                </div>
            </div>
        </div>
        <a class="carousel-control-prev" type="button" data-bs-target="#myCarousel" data-bs-slide="prev">
            <span class="carousel-control-prev-icon" style="filter: invert(1);" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
        </a>
        <a class="carousel-control-next" type="button" data-bs-target="#myCarousel" data-bs-slide="next">
            <span class="carousel-control-next-icon" style="filter: invert(1);" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
        </a>
    </div>
    <style>
        #myCarousel .carousel-control-prev, .carousel-control-next:hover{
            background: none!important;
        }
    </style>

{{--    footer  --}}
    <div class="container">
        <footer class="py-5">
            <div class="row">
                <div class="col-6 col-md-2 mb-3">
                    <h5 class="fw-semibold">Section</h5>
                    <ul class="nav flex-column">
                        <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-body-secondary">Home</a></li>
                        <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-body-secondary">Features</a></li>
                        <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-body-secondary">Pricing</a></li>
                        <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-body-secondary">FAQs</a></li>
                        <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-body-secondary">About</a></li>
                    </ul>
                </div>

                <div class="col-6 col-md-2 mb-3">
                    <h5 class="fw-semibold">Section</h5>
                    <ul class="nav flex-column">
                        <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-body-secondary">Home</a></li>
                        <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-body-secondary">Features</a></li>
                        <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-body-secondary">Pricing</a></li>
                        <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-body-secondary">FAQs</a></li>
                        <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-body-secondary">About</a></li>
                    </ul>
                </div>

                <div class="col-6 col-md-2 mb-3">
                    <h5 class="fw-semibold">Section</h5>
                    <ul class="nav flex-column">
                        <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-body-secondary">Home</a></li>
                        <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-body-secondary">Features</a></li>
                        <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-body-secondary">Pricing</a></li>
                        <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-body-secondary">FAQs</a></li>
                        <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-body-secondary">About</a></li>
                    </ul>
                </div>

                <div class="col-md-5 offset-md-1 mb-3">
                    <form>
                        <h5 class="fw-semibold">Section</h5>
                        <p>Monthly digest of what's new and exciting from us.</p>
                        <div class="d-flex flex-column flex-sm-row w-100 gap-2">
                            <label for="newsletter1" class="visually-hidden">Email address</label>
                            <input id="newsletter1" type="text" class="form-control" placeholder="Email address">
                            <button class="btn btn-primary" type="button">Subscribe</button>
                        </div>
                    </form>
                </div>
            </div>

            <div class="d-flex flex-column flex-sm-row justify-content-between py-4 my-4 border-top">
                <p>© 2023 Company, Inc. All rights reserved.</p>
                <ul class="list-unstyled d-flex">
                    <li class="ms-3"><a class="link-body-emphasis" href="#"><svg class="bi" width="24" height="24"><use xlink:href="#twitter"></use></svg></a></li>
                    <li class="ms-3"><a class="link-body-emphasis" href="#"><svg class="bi" width="24" height="24"><use xlink:href="#instagram"></use></svg></a></li>
                    <li class="ms-3"><a class="link-body-emphasis" href="#"><svg class="bi" width="24" height="24"><use xlink:href="#facebook"></use></svg></a></li>
                </ul>
            </div>
        </footer>
    </div>

@endsection
