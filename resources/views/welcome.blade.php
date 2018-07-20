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
    <link href="{{ asset('css/_app.css') }}" rel="stylesheet">
</head>
<body>

<section class="form-element">
    <div class="logo-container">
        <img src="{{ url('logo/logo.png') }}" alt="">
    </div>
    <form action="{{ url('/add-item') }}" method="POST">
        {{ csrf_field() }}
        <h3 class="heading-deatils">Enter value</h3>
        <div class="specifications form-group">
            <h3>Specification</h3>
            <div class="flex-details">
                <h2 class="flex-details-header flex-heade-1">
                    <span>Item 1</span>
                    <a class="z-depth-1 close-itemlist"><i class="fa fa-pencil" aria-hidden="true"></i></a>
                </h2>
                <div class="items">
                    <div class="item-details">
                        <div class="quantity details-input">
                            <span>Value</span>
                            <input type="text" class="input-quantity" name="value[]" placeholder="Quantity">
                        </div>
                        <div class="quantity details-input">
                            <span>Overview</span>
                            <select class="input-quantity" name="overview[]">
                                <option value="For" selected>For</option>
                                <option value="Against">Against</option>
                            </select>
                        </div>
                    </div>
                </div>
            </div>
            <div class="add-btn">
                <a href="#" class="btn btn-add add-item">+</a>
            </div>
        </div>
        <div>
            <input type="submit" class="btn btn-submit" value="Submit">
            <a href="{{ url('/') }}" class="btn btn-submit">reset</a>
        </div>
    </form>
</section>
<section id="cloning-child" style="display: none">
    <h2 class="flex-details-header flex-header-type">
        <span>Item 2</span>
        <a class="z-depth-1 close-itemlist"><i class="fa fa-times" aria-hidden="true"></i>
        </a>
    </h2>
    <div class="item-type">
        <div class="item-details">
            <div class="quantity details-input">
                <span>Value</span>
                <input type="text" class="input-quantity" name="value[]" placeholder="Quantity">
            </div>
            <div class="quantity details-input">
                <span>Overview</span>
                <select class="input-quantity" name="overview[]">
                    <option value="For" selected>For</option>
                    <option value="Against">Against</option>
                </select>
            </div>
        </div>
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
