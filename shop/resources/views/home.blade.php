@extends('layouts.app')

@section('content')
<style>
    .grid-container {
        gap: 10px;
        display: grid;
        margin-top: 10px;
        grid-template-columns: 200px 200px 200px 200px 200px 200px;
    }

    .grid-item {
        width: 700px;
        height: auto;
    }
    a {
        text-decoration: none;
    }
</style>
<div class="container">
<center>
    <div>
        <h1>{{_("Anka Business Support Services")}}</h1>
        <h2>Best Seller: <b><span>{{_($winner->{"Name"})}}</span></b></h2>
        <h3>Award:&nbsp;{{_("Trip to Hawaii.")}}</h3>
    </div>
</center>
    <div class="grid-container">
        @foreach ($participants as $participant)
            @foreach($products as $product)
                @if($participant['participantID'] == $product['participantID'])
                    <div class="grid-item">
                        <a href="/items/{{$participant['participantID']}}/{{$product['productID']}}">
                            <div class="card w-25">
                                <div class="card-body">
                                    <u><h5 class="card-title text-muted mb-0">{{$product["ProductName"]}}</</h5></u><br>
                                    <p>{{$product["description"]}}</p>
                                </div>
                            </div>
                        </a>
                    </div>
                @endif
                @endforeach
        @endforeach
    </div>
</div>
@endsection