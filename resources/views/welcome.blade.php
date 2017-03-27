@extends('layouts.app')

@section('content')

    <div class="container">
        <h2>A simple Module</h2>
        <p>Welcome to the maintenance module</p>
        <p>You need to create a new report to proceed</p>

        <button class="btn btn-info" data-toggle="modal" data-target="#myModal">Create Maintenance report?</button><br><br>

        <a href="{{url('/view_client_to_update')}}"><button class="btn btn-info">Update report</button></a><br><br>

        <a href="{{url('/view_client_to_delete')}}"><button class="btn btn-info">Delete Report</button></a>

        <div id="myModal" class="modal fade" role="dialog"><div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal">&times;</button>
                <h4 class="modal-title">Create report</h4>
            </div>
            <div class="modal-body">
                <form class="form-vertical" role="form" method="POST" action="{{ url('/create_report') }}">
                    {{ csrf_field() }}
                    <div class="form-group {{ $errors->has('name') ? ' has-error' : '' }}">
                        <label for="name"> Name</label>
                        <input type="string" class="form-control" id="name" name="name">
                        @if ($errors->has('crime_type'))
                            <span class="help-block">
                                <strong>{{ $errors->first('name') }}</strong>
                            </span>
                        @endif
                    </div>

                    <div class="form-group {{ $errors->has('problem') ? ' has-error' : '' }}">
                        <label for="problem"> Problem</label>
                        <input type="string" class="form-control" id="problem" name="problem">
                        @if ($errors->has('crime_type'))
                            <span class="help-block">
                                <strong>{{ $errors->first('problem') }}</strong>
                            </span>
                        @endif
                    </div>

                    <div class="form-group {{ $errors->has('date') ? ' has-error' : '' }}">
                        <label for="date"> Date</label>
                        <input type="date" class="form-control" id="date" name="date">
                        @if ($errors->has('crime_type'))
                            <span class="help-block">
                                <strong>{{ $errors->first('date') }}</strong>
                            </span>
                        @endif
                    </div>
                    <button type="submit" class="btn btn-default btn-success btn-block"> Submit</button>
                </form>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
            </div>
        </div>
                </div>
            </div>



    </div>
@endsection