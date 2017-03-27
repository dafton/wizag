<!DOCTYPE html>
<html>
<head>
    <title>Laravel</title>

    <link href="https://fonts.googleapis.com/css?family=Lato:100" rel="stylesheet" type="text/css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>


</head>

    <body>

        @yield('content')
        @yield('footer')
        @if (session('flash_message'))
            <div class="col-md-8 col-md-offset-2">
                <div class="alert alert-success">
                    {{ session('flash_message') }}
                </div>
            </div>
        @endif
        @if(Session::has('success'))
            <div class="container">
                <div class="alert alert-success col-md-10 col-md-offset-2" >
                    <button type="button" class="close" data-dismiss="alert" aria-hidden="false">&times;</button>
                    <strong>Success!</strong> {{Session::get('success')}}
                </div>
            </div>
        @endif

    </body>

</html>