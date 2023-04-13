@extends('customer.layout')

@section('after-css')
    <link rel="stylesheet" href="../../customer/dist/libs/datatables.net/css/dataTables.bootstrap5.min.css">
@endsection

@section('main-content')
    <div class="container-fluid mw-100">
{{--   account infomation     --}}
        <section>
            <h3 class="mb-4 ms-4">Account Infomation</h3>
            <div class="row w-75 mx-auto">
                <div class="col-sm-6">
                    <div class="mb-4"> <span class="fs-3 fw-semibold text-cl-gray me-2">ACCOUNT NUMBER:  </span> <span class="fs-3 text-bg-light-gray">{{$account->account_number}}</span></div>
                    <div class="mb-4"> <span class="fs-3 fw-semibold text-cl-gray me-2">BALANCE:  </span> <span class="fs-3 text-bg-light-gray">{{$account->BalanceCardAccount->balance}} ₫</span></div>
                    <div class="mb-4"> <span class="fs-3 fw-semibold text-cl-gray me-2">ACCOUNT TYPE:  </span> <span class="fs-3 text-bg-light-gray">{{$account->AccountType->name}}</span></div>
                    <div class="mb-4"> <span class="fs-3 fw-semibold text-cl-gray me-2">OPEN DATE:  </span> <span class="fs-3 text-bg-light-gray">{{$account->created_at->format('Y-m-d')}}</span></div>
                </div>
                <div class="col-sm-6">
                    <div class="mb-4"> <span class="fs-3 fw-semibold text-cl-gray me-2">CURRENCY:  </span> <span class="fs-3 text-bg-light-gray"> VND </span></div>
                    <div class="mb-4"> <span class="fs-3 fw-semibold text-cl-gray me-2">LINK Card:  </span>
                        <a href="#"> <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-credit-card" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                                <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                                <path d="M3 5m0 3a3 3 0 0 1 3 -3h12a3 3 0 0 1 3 3v8a3 3 0 0 1 -3 3h-12a3 3 0 0 1 -3 -3z"></path>
                                <path d="M3 10l18 0"></path>
                                <path d="M7 15l.01 0"></path>
                                <path d="M11 15l2 0"></path>
                            </svg>
                        </a>
                    </div>
                    <div class="mb-4"> <span class="fs-3 fw-semibold text-cl-gray me-2">LINK ACCOUNT:  </span> <span class="fs-3 text-bg-light-gray"> </span></div>
                </div>
            </div>
        </section>
{{--   transaction        --}}

        <section>
            <div class="card w-100 position-relative overflow-hidden">
                <div class="px-4 py-3 border-bottom">
                    <h5 class="card-title fw-semibold mb-0 lh-sm"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Transaction Information</font></font></h5>
                </div>
                <div class="card-body p-4">
                    <div class="table-responsive rounded-2 mb-4">
                        <table id="list-trans" class="table border table-striped table-bordered display text-nowrap dataTable" >
                            <thead class="text-dark fs-4">
                            <tr>
                                <th><h6 class="fs-4 fw-semibold mb-0"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Transaction Code</font></font></h6></th>
                                <th><h6 class="fs-4 fw-semibold mb-0"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Date</font></font></h6></th>
{{--                                <th><h6 class="fs-4 fw-semibold mb-0"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">From Number</font></font></h6></th>--}}
{{--                                <th><h6 class="fs-4 fw-semibold mb-0"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">To Number</font></font></h6></th>--}}
                                <th><h6 class="fs-4 fw-semibold mb-0"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Description</font></font></h6></th>
                                <th><h6 class="fs-4 fw-semibold mb-0"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Amount</font></font></h6></th>
{{--                                <th><h6 class="fs-4 fw-semibold mb-0"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Transaction Type</font></font></h6></th>--}}
{{--                                <th><h6 class="fs-4 fw-semibold mb-0"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Status</font></font></h6></th>--}}
                            </tr>
                            </thead>
                            <tbody>

                            @foreach($trans as $index=>$item)
                                    <tr>
                                        <td><p class="mb-0 fw-normal fs-4"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">{{$item->id}}</font></font></p></td>
                                        <td><p class="mb-0 fw-normal fs-4"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">{{$item->created_at}}</font></font></p></td>
{{--                                        <td><p class="mb-0 fw-normal fs-4"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">{{$item->from_number}}</font></font></p></td>--}}
{{--                                        <td><p class="mb-0 fw-normal fs-4"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">{{$item->to_number}}</font></font></p></td>--}}
                                        <td><p class="mb-0 fw-normal fs-4"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">{{$item->description}}</font></font></p></td>
                                        <td><p class="mb-0 fw-normal fs-4"><font style="vertical-align: inherit;">
                                                    <font style="vertical-align: inherit;">
                                                        {{ $item->from_number===$account->account_number?'-':'+' }}
                                                        {{number_format($item->amount,0) }} VND
                                                    </font></font></p></td>
{{--                                        <td><p class="mb-0 fw-normal fs-4"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">{{$item->TransactionType->name}}</font></font></p></td>--}}
{{--                                        <td>--}}
{{--                                           @if($item->status==1)--}}
{{--                                                <span class="badge bg-light-primary text-primary fw-semibold fs-2">Completed </span>--}}
{{--                                           @elseif($item->status==2)--}}
{{--                                                <span class="badge bg-light-warning text-warning fw-semibold fs-2">Pending </span>--}}
{{--                                           @else--}}
{{--                                                <span class="badge bg-light-danger text-dangery fw-semibold fs-2">Cancel</span>--}}
{{--                                           @endif--}}
                                    </tr>

                             @endforeach
                            </tbody>
                        </table>


                    </div>
                </div>
            </div>
        </section>


@endsection

@section('after-js')
            <script>
                var a={!! $json !!};
                console.log(a.data);
            </script>
            <script src="../../customer/dist/libs/datatables.net/js/jquery.dataTables.min.js"></script>
            <script>
                $('#list-trans').DataTable({
                    // responsive: true,
                    info:false,
                    order: [[1, "desc"]],
                    scrollCollapse: true,
                    searching:false,
                    language: {
                        decimal: ",",
                        thousands: ".",
                    },
                })

            </script>
@endsection
