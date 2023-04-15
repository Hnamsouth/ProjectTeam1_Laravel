@extends('customer.layout3')

@section('main-content')
    <div class="container">
        <section>
        <div class="row">
            @foreach($acc as $index=>$item)
            <div class="col-12">
                <div class="card">
                    <div class="card-body">
                        <div class="mb-2">
                            <h3 class="mb-0">{{$item->name}}</h3>
                        </div>
{{--                        <p class="mb-3 card-subtitle">{{$item->name_dev}}</p>--}}
                        <div class="row">
                            <div class="col-sm-6 col-lg-4 col-xl-3">
                                    <img
{{--                                        src="../../customer/dist/images/big/img8.jpg"--}}
                                        src="{{$item->img}}"
                                        alt="image"
                                        class="rounded mb-3"
                                        width="250"
                                    />
                            </div>
                            <div class="col-sm-12 col-lg-8 col-xl-9 ">
                                <div class="row">
                                    <div class="col-md-12 col-xl-3">
                                        <h5>BENEFIT</h5>
                                        @if($index==0)
                                            <p>Open acount quickly and get desired account number when registering at counter.</p>
                                        @elseif($index==1)
                                            <p>Open 1 get 3 with many offers. Online verification within 1 minute.</p>
                                        @else
                                            <p>Enjoy a world of exclusive privileges: financial privileges, experience privileges and lifestyle privileges</p>
                                        @endif

                                    </div>
                                    <div class="col-md-12 col-xl-3">
                                        <h5>OUTSTANDING OFFER</h5>
                                        <p>{{$item->special_offer}}</p>
                                    </div>
                                    <div class="col-md-12 col-xl-3">
                                        <h5>CONDITIONS</h5>
                                        <p>{{$item->target_customers}}</p>
                                    </div>
                                    <div class="col-md-12 col-xl-3">
                                        <a href="{{ route('acc.register',['acc_type'=>$item->name_dev])}}" class="btn btn-primary w-100">Apply now</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </section>
    </div>
@endsection
