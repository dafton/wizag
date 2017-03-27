@extends('layouts.app')

@section('content')

    <form class="form-vertical" role="form" method="POST" action="{{ url('/update_client/{$id}') }}">
        {{ csrf_field() }}
        <div class="form-group">
            <label for="name"> Name</label>
            <input type="string" class="form-control" id="name" name="name" value ="{{$client->name}}" >
        </div>

        <div class="form-group">
            <label for="problem"> Problem</label>
            <input type="string" class="form-control" id="problem" name="problem" value ="{{$client->problem}}">
        </div>

        <div class="form-group">
            <label for="date"> Date</label>
            <input type="date" class="form-control" id="date" name="date" value ="{{$client->date}}" >
        </div>
        <button type="submit" class="btn btn-default btn-success btn-block"> Submit</button>
    </form>

@endsection