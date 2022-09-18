<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    @vite(['resources/sass/app.scss', 'resources/js/app.js'])
    <title>{{$heading}}</title>
    <style>
        .grid-container {
            grid-template-columns: auto auto auto auto;
            grid-auto-flow: column;
            gap: 10px;
        }

        .grid-item {
            width: 120px;
            height: auto;
            text-align: center;
        }

        .login-button {
            padding: 10px;
            margin: 10px;
            border-radius: 8px;
            width: 120px;
            background-color:darkblue;
        }

    </style>
</head>

<body>
    <a href="/login"><button class="btn btn-primary login-button" >{{_("login")}}</button></a>
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
                @endforeach
        @endforeach
        </div>
</body>

</html>