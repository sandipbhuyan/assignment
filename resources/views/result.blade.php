<!doctype html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>CryptX</title>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Raleway:300,400,600" rel="stylesheet" type="text/css">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link href="{{ asset('css/jquery-ui.css') }}" rel="stylesheet">
    <style>
        .reset-button {
            display: flex;
            align-items: center;
            justify-content: center;
        }
        .logo-container {
            display: flex;
            justify-content: center;
            background: gainsboro;
            margin-bottom: 20px;
        }
    </style>
</head>
<body>
<section class="container">
    <div class="logo-container">
        <img src="{{ url('logo/logo.png') }}" alt="">
    </div>
    <div class="row">
        <div class="for col-sm-4">
            <div class="card border-primary mb-3" style="max-width: 20rem;">
                <div class="card-header">For</div>
                <div class="card-body">
                    <table class="table table-hover">
                        <thead>
                            <tr>
                                <th scope="col">Id</th>
                                <th scope="col">Value</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($forData as $data)
                                <tr>
                                    <td>{{ $data->id }}</td>
                                    <td>{{ $data->value }}</td>
                                </tr>
                            @endforeach
                            <tr>
                                <th>Total</th>
                                <td>{{ $forTotal }}</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
        <div class="against col-sm-4">
            <div class="card border-primary mb-3" style="max-width: 20rem;">
                <div class="card-header">Against</div>
                <div class="card-body">
                    <table class="table table-hover">
                        <thead>
                        <tr>
                            <th scope="col">Id</th>
                            <th scope="col">Value</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($againstData as $data)
                            <tr>
                                <td>{{ $data->id }}</td>
                                <td>{{ $data->value }}</td>
                            </tr>
                        @endforeach
                            <tr>
                                <th>Total</th>
                                <td>{{ $againstTotal }}</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
        <div class="canceled col-sm-4">
            <div class="card border-primary mb-3" style="max-width: 20rem;">
                <div class="card-header">Closed</div>
                <div class="card-body">
                    <table class="table table-hover">
                        <thead>
                        <tr>
                            <th scope="col">Id</th>
                            <th scope="col">Value</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($close as $data)
                            <tr>
                                <td>{{ $data->id }}</td>
                                <td>{{ $data->value }}</td>
                            </tr>
                        @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
    <div class="reset-button">
        <a href="{{ url('/') }}" class="btn btn-primary btn-lg">Reset</a>
    </div>
</section>

<!-- Scripts -->
<script src="{{ asset('js/app.js') }}" defer></script>
<script
    src="https://code.jquery.com/jquery-3.3.1.min.js"
    integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8="
    crossorigin="anonymous"></script>
<script src="{{ asset('js/jquery-ui.js') }}" defer></script>
<script src="{{ asset('js/page-function.js') }}"></script>
</body>
</html>
