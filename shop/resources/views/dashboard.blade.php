@extends('layouts.app')

@section('content')
    @include('layouts.headers.cards')
    <br>
    <div class="container-fluid mt--7">
        <div class="row">
            <div class="col-xl-8 mb-5 mb-xl-0">
                <div class="card shadow">
                    <div class="card-header bg-transparent">
                        <div class="row align-items-center">
                            <div class="col">
                                <h4 class="text-uppercase text-muted mb-0">Performance</h4>
                                <div class="row">
                                    <div class="col-4">
                                        <h5>Participant Name</h5>
                                    </div>
                                    <div class="col-4">
                                        <h5>Product Name</h5>
                                    </div>
                                    <div class="col-4">
                                        <h5>Performance</h5>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="card-body">
                        <!-- Chart -->
                        @foreach ($participants as $participant)
                        <div class="row">
                            <div class="col-4">
                                <h6>{{$participant["Name"]}}</h6>
                            </div>
                            <div class="col-4">
                                <h6>{{$participant["product"]}}</</h6>
                            </div>
                            <div class="col-4">
                                <h6>{{$participant["performance"]}}</</h6>
                            </div>
                        </div>
                        @endforeach
                    </div>
                </div>
            </div>
            <div class="col-xl-4">
                <div class="card shadow">
                    <div class="card-header bg-transparent">
                        <div class="row align-items-center">
                            <div class="col">
                                <h4 class="text-uppercase text-muted mb-0">Orders</h4>
                                <div class="row">
                                    <div class="col-4">
                                        <h5>Customer Name</h5>
                                    </div>
                                    <div class="col-4">
                                        <h5>Product Id</h5>
                                    </div>
                                    <div class="col-4">
                                        <h5>Quantity</h5>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="card-body">
                        <!-- Chart -->
                        @foreach ($receipts as $receipt)
                        <div class="row">
                            <div class="col-4">
                                <h6>{{$receipt["customerName"]}}</h6>
                            </div>
                            <div class="col-4">
                                <h6>{{$receipt["participantID"]}}</</h6>
                            </div>
                            <div class="col-4">
                                <h6>{{$receipt["quantity"]}}</</h6>
                            </div>
                        </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

@push('js')
    <script src="{{ asset('argon') }}/vendor/chart.js/dist/Chart.min.js"></script>
    <script src="{{ asset('argon') }}/vendor/chart.js/dist/Chart.extension.js"></script>
@endpush