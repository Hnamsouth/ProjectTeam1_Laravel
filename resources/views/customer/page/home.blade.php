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
@endsection
