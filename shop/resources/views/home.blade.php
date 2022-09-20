@extends('layouts.app')

@section('content')
<style>
    .grid-container {
        gap: 10px;
        display: grid;
        margin-top: 10px;
        grid-template-columns: 200px 200px;
    }

    .grid-item {
        width: 700px;
        height: auto;
    }
</style>
<div class="container">
<center><div><h1>{{_("Anka Business Support Services")}}</h1></div> </center>
    <div class="grid-container">
        @foreach ($participants as $participant)
            @foreach($products as $product)
                @if($participant['participantID'] == $product['participantID'])
                    <div class="grid-item">
                        <a href="/items/{{$participant['participantID']}}/{{$product['productID']}}">
                            <div class="card w-25">
                                <div class="card-body">
                                    <h5 class="card-title text-uppercase text-muted mb-0">{{$product["ProductName"]}}</</h5>
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