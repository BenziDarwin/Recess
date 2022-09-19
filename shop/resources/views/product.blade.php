@extends('layouts.app')

@section('content')
    <h2>{{$product["ProductName"]}}</h2>
    <p>{{$product["description"]}}</p>
@endsection