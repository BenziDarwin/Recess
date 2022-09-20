@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-6">
            <h2>{{$product["ProductName"]}}</h2>
            <p>{{$product["description"]}}</p>
        </div>
        <div class="col-6">
            <form method="POST" action="{{route('purchase')}}">
                @csrf
                <label for="name" class="col-md-4 col-form-label text-md-end">{{ __('Quantity') }}</label>

                <div>
                    <input id="quantity" type="text" class="form-control" name="quantity" value="{{ old('name') }}" required>
                </div>
                <div>
                    <input id="participantID" type="hidden"  name="participantID" value={{$product["participantID"]}}>
                </div>
                <button type="submit" class="btn btn-primary">
                    {{ __('Purchase') }}
                </button>
            </form>
        </div>

    </div>
</div>
@endsection