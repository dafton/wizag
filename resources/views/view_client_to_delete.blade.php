@extends('layouts.app')

@section('content')

    <h2>Reports in the System</h2>
    <div class="col-md-10 col-md-offset-1">
        <table class="table table-hover" id="user_table">
            <thead>
            <tr>
                <th>All Reports</th>
                <th>Name</th>
                <th>Problem</th>
                <th>Date</th>
            </tr>
            </thead>
            @foreach($clients as $client)
                <tr id="{{$client->id}}">
                    <td><a class="btn btn-info" href="{{url('/delete_client/'. $client->id)}}">Delete report</a></td>
                    <td id="id">{{$client->name}}</td>
                    <td id="name">{{$client->problem}}</td>
                    <td id="email">{{$client->date}}</td>
                </tr>
            @endforeach
        </table>
    </div>

@endsection