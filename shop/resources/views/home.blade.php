<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{$heading}}</title>
    <style>
        .grid-container {
            display: inline-grid;
            grid-template-columns: auto auto auto auto;
            gap: 100px;

        }

        .grid-item {
            width: 200px;
            height: auto;
        }
    </style>
</head>

<body>
    <a href="/login"><div>{{_("login")}}</div></a>
    <center><div><h1>{{$heading}}</h1></div> </center>
        <div class="grid-container">
            @foreach ($participants as $participant)
                @foreach($products as $product)
                    <div class="grid-item">
                        @if($participant['participantID'] == $product['participantID'])
                            <a href="/items/{{$participant['participantID']}}/{{$product['productID']}}"><h2>{{$participant['Name']}}</h2></a>
                            <p>{{$product["description"]}}</p>
                        @endif
                    </div>
                    <div class="grid-item">
                        @if($participant['participantID'] == $product['participantID'])
                            <a href="/items/{{$participant['participantID']}}/{{$product['productID']}}"><h2>{{$participant['Name']}}</h2></a>
                            <p>{{$product["description"]}}</p>
                        @endif
                    </div>
                    <div class="grid-item">
                        @if($participant['participantID'] == $product['participantID'])
                            <a href="/items/{{$participant['participantID']}}/{{$product['productID']}}"><h2>{{$participant['Name']}}</h2></a>
                            <p>{{$product["description"]}}</p>
                        @endif
                    </div>
                @endforeach
        @endforeach
        </div>
</body>

</html>