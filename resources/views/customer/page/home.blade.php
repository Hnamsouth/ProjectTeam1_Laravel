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
                <img class="img-home"  src="/customer/dist/images/img/cls1.webp" height="400px" >
                <div class="container">
                    <div class="carousel-caption text-start text-dark">
                        <img src="../../logo/logolong1.png" alt="" class="" height="60px">
                        <p>Expertise you need. Service you deserve!</p>
                        <p><a class="btn btn-lg bg-wn text-dark btn-wn fw-semibold" href="/login">Sign up today</a></p>
                    </div>
                </div>
            </div>
            <div class="carousel-item">
                <img class="img-home"   src="/customer/dist/images/img/cls2.webp" height="400px"  >
                <div class="container">
                    <div class="carousel-caption  text-light">
                        <h1 class="text-light">Banking Focused on You.</h1>
                        <p>Lifetime zero fee. We keep our promises to you.</p>
                        <p><a class="btn btn-lg bg-wn text-light btn-wn fw-semibold" href="#">Learn more</a></p>
                    </div>
                </div>
            </div>
            <div class="carousel-item">
                <img class="img-home"   src="/customer/dist/images/img/cls3.webp" height="400px"  >
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
        .img-home{
            width:100vw !important;
            object-fit: cover;
        }
        .text-cmt{
            max-height: 126px;
            overflow: hidden;
            display: -webkit-box;
            -webkit-line-clamp: 4;
            -webkit-box-orient: vertical;
        }
    </style>
{{--   service --}}
    <div class="container">
        <div class="row mt-5">
            <div class="col-sm-6 col-lg-4 col-xl-2">
                <a href="#" class="p-4 text-center card shadow-none rounded-2">
                    <img src="../../customer/dist/images/service/debit-icon.png" width="100" height="100" class="mb-6 mx-auto" alt="">
                    <p class="fw-semibold text-primary mb-1">Debit Card</p>
                </a>
            </div> <div class="col-sm-6 col-lg-4 col-xl-2">
                <a href="#" class="p-4 text-center card shadow-none rounded-2">
                    <img src="../../customer/dist/images/service/card-icon.png" width="100" height="100" class="mb-6 mx-auto" alt="">
                    <p class="fw-semibold text-primary mb-1">Card Service</p>
                </a>
            </div> <div class="col-sm-6 col-lg-4 col-xl-2">
                <a href="#" class="p-4 text-center card shadow-none rounded-2">
                    <img src="../../customer/dist/images/service/acc-icon.png" width="100" height="100" class="mb-6 mx-auto" alt="">
                    <p class="fw-semibold text-primary mb-1">Account</p>
                </a>
            </div> <div class="col-sm-6 col-lg-4 col-xl-2">
                <a href="#" class="p-4 text-center card shadow-none rounded-2">
                    <img src="../../customer/dist/images/service/savings-icon.png" width="100" height="100" class="mb-6 mx-auto" alt="">
                    <p class="fw-semibold text-primary mb-1">Savings</p>
                </a>
            </div> <div class="col-sm-6 col-lg-4 col-xl-2">
                <a href="#" class="p-4 text-center card shadow-none rounded-2">
                    <img src="../../customer/dist/images/service/loans-icon.png" width="100" height="100" class="mb-6 mx-auto" alt="">
                    <p class="fw-semibold text-primary mb-1">Loans</p>
                </a>
            </div> <div class="col-sm-6 col-lg-4 col-xl-2">
                <a href="#" class="p-4 text-center card shadow-none rounded-2">
                    <img src="../../customer/dist/images/service/insuan-icon.png" width="100" height="100" class="mb-6 mx-auto" alt="">
                    <p class="fw-semibold text-primary mb-1">Insurance</p>
                </a>
            </div>
        </div>
    </div>


{{--   Promotion --}}
   <div class="container">
       <div class="row mt-5">
           <h2 class="fw-semibold mb-3">Promotion</h2>
           <div class="col-lg-8 d-flex align-items-strech">
               <div class="card w-100">
                   <div class="card-body">

                   </div>
               </div>
           </div>
           <div class="col-lg-4">
               <div class="row">
                   <div class="col-lg-12 col-md-6 col-sm-12">
                       <!-- Yearly Breakup -->
                       <div class="card overflow-hidden">
                           <div class="card-body">
                           </div>
                       </div>
                   </div>
                   <div class="col-lg-12 col-md-6 col-sm-12">
                       <!-- Monthly Earnings -->
                       <div class="card">
                           <div class="card-body">

                           </div>
                       </div>
                   </div>
               </div>
           </div>
       </div>
   </div>
{{--  news  --}}

    <div class="container">
        <div class="row mt-5">
            <h2 class="fw-semibold mb-3">News</h2>
            <div class="col-lg-5 d-flex align-items-stretch">
                <div class="card w-100">
                    <div class="card-body">
                    </div>
                </div>
            </div>
            <div class="col-lg-7 d-flex align-items-stretch">
                <div class="card w-100 bg-light-primary overflow-hidden">
                    <div class="card-body">

                    </div>
                </div>
            </div>
        </div>

    </div>

{{--  person  --}}
   <div class="container">
       <div class="row mt-5">
           <h2 class="fw-semibold mb-3">What Our Customers Are Saying ?</h2>
           <div class="col-md-4">
               <div class="card hover-img">
                   <div class="card-body p-4 border-bottom d-flex align-items-center">
                       <div class="text-center">
                           <img src="../../customer/dist/images/avat/user-1.jpg" alt="" class="rounded-circle mb-3" width="80" height="80">
                       </div>
                       <div class="ps-3">
                           <h5 class="fw-semibold mb-2 fs-5">Betty Adams</h5>
                           <p class="text-cmt">As the main breadwinner in the family, I always want my children to study and have a full life. Therefore, I choose to use AIA Life Insurance product in association with SouthBank to ensure my children have the most perfect future...</p>
                       </div>
                   </div>
               </div>
           </div>
           <div class="col-md-4">
               <div class="card hover-img">
                   <div class="card-body p-4 d-flex align-items-center border-bottom">
                       <div class="text-center">
                            <img src="../../customer/dist/images/avat/user-2.jpg" alt="" class="rounded-circle mb-3" width="80" height="80">
                       </div>
                       <div class="ps-3">
                           <h5 class="fw-semibold mb-2 fs-5">Leo Pratt
                           </h5>
                           <p class="text-cmt">
                               I lost my credit card while traveling in France last year and had absolutely no cash on me. I was lucky because I had purchased credit card insurance before and was very supportive. This is truly an unforgettable memory for me.
                           </p>
                       </div>
                   </div>
               </div>
           </div>
           <div class="col-md-4">
               <div class="card hover-img">
                   <div class="card-body p-4 d-flex align-items-center border-bottom">
                       <div class="text-center">
                            <img src="../../customer/dist/images/avat/user-3.jpg" alt="" class="rounded-circle mb-3" width="80" height="80">
                       </div>
                       <div class="ps-3">
                           <h5 class="fw-semibold mb-2 fs-5">Charles Nunez</h5>
                           <p class="text-cmt">
                               I was paid the full amount of the hospital bill when I was in an accident last year and am very satisfied with the dedication of the counselors as well as the accompanying benefits of the associated GIC Hospital Support Insurance. with SouthBank.
                           </p>
                       </div>
                   </div>
               </div>
           </div>
       </div>
   </div>

{{--    --}}
    <div class="row mt-5" style="box-shadow: 0px 4px 6px 0px #92929240;">
        <div class="col-md-4 border-end">
            <div class="p-4 py-3 py-md-4 d-flex justify-content-end">
                <img class="img-responsive me-3" src="../../customer/dist/images/icon/phone.png" width="40">
                <h3 class=" mt-2 mb-0">0123456789</h3>

            </div>
        </div>
        <div class="col-md-4 border-end ">
            <div class="p-4 py-3 py-md-4 d-flex justify-content-center">
                <img class="img-responsive me-3" src="../../customer/dist/images/icon/location.png" width="40">
                <h3 class=" mt-2 mb-0">Find ATMs and Branches</h3>
            </div>
        </div>
        <div class="col-md-4  border-end">
            <div class="p-4 py-3 py-md-4 d-flex justify-content-start">
                <img class="img-responsive me-3" src="../../customer/dist/images/icon/email.png" width="40">
                <h3 class=" mt-2 mb-0">Email Us</h3>
            </div>
        </div>
    </div>
{{--    footer  --}}
    <div class="container">
        <footer class="py-5">
            <div class="row">
                <div class="col-sm-6 col-md-2 mb-3 text-center">
                    <h4 class="fw-semibold">Credit Cards</h4>
                    <ul class="nav flex-column">
                        @foreach($credit as $item)
                            <li class="nav-item mb-2 ps-2"><a href="#" class="nav-link p-0 text-body-secondary">{{ substr($item->name,11) }}</a></li>
                        @endforeach
                    </ul>
                </div>

                <div class="col-sm-6 col-md-2 mb-3 ps-2 text-center">
                    <h4 class="fw-semibold">Debit Cards</h4>
                    <ul class="nav flex-column">
                        @foreach($debit as $item)
                            <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-body-secondary">{{ substr($item->name,11) }}</a></li>
                        @endforeach
                    </ul>
                </div>

                <div class="col-sm-6 col-md-2 pb-3 text-center">
                    <h4 class="fw-semibold">Account</h4>
                    <ul class="nav flex-column">
                        @foreach($accs as $item)
                            <li class="nav-item mb-2 ms-2"><a href="#" class="nav-link p-0 text-body-secondary">{{ substr($item->name,12)}}</a></li>
                        @endforeach
                    </ul>
                </div>
                <div class="col-sm-6 col-md-2 mb-3 text-center">
                    <h4 class="fw-semibold">Savings</h4>
                    <ul class="nav flex-column">
                        @foreach($sv as $item)
                            <li class="nav-item mb-2 ps-2"><a href="#" class="nav-link p-0 text-body-secondary">{{ substr($item->name,12)}}</a></li>
                        @endforeach
                    </ul>
                </div>
                <div class="col-sm-6 col-md-2 mb-3 text-center">
                    <h4 class="fw-semibold">Others</h4>
                    <ul class="nav flex-column">
                        <li class="nav-item mb-2 ps-2"><a href="#" class="nav-link p-0 text-body-secondary">Promotions</a></li>
                        <li class="nav-item mb-2 ps-2"><a href="#" class="nav-link p-0 text-body-secondary">Documents and Fees</a></li>
                        <li class="nav-item mb-2 ps-2"><a href="#" class="nav-link p-0 text-body-secondary">FAQs</a></li>
                        <li class="nav-item mb-2 ps-2"><a href="#" class="nav-link p-0 text-body-secondary">Tools and Utility</a></li>
                    </ul>
                </div>
                <div class="col-sm-6 col-md-2 mb-3 text-center">
                    <img src="../../logo/logolong1.png" alt="" class="" width="160px">
                    <button type="button" class="btn btn-outline-primary mt-3 ps-2">Dowload App</button>
                </div>

            </div>

            <div class="d-flex flex-column flex-sm-row justify-content-between py-4 my-4 border-top">
                <p>© 2023 SouthBank. All rights reserved.</p>
                <ul class="list-unstyled d-flex">
                    <li class="ms-3"><a class="link-body-emphasis" href="#"><svg class="bi" width="24" height="24"><use xlink:href="#twitter"></use></svg></a></li>
                    <li class="ms-3"><a class="link-body-emphasis" href="#"><svg class="bi" width="24" height="24"><use xlink:href="#instagram"></use></svg></a></li>
                    <li class="ms-3"><a class="link-body-emphasis" href="#"><svg class="bi" width="24" height="24"><use xlink:href="#facebook"></use></svg></a></li>
                </ul>
            </div>
        </footer>
    </div>

@endsection

@section('after-js')
    <script src="../../customer/dist/libs/owl.carousel/dist/owl.carousel.min.js"></script>
    <script src="../../customer/dist/libs/apexcharts/dist/apexcharts.min.js"></script>
    <script src="../../customer/dist/js/dashboard.js">
@endsection
