<!doctype html>
<html>
<head>
    @include('includes.head')
</head>
<body background="{{ asset('public/background/bg7.jpg') }}">
<div class="container">

    <header class="row">

    </header>

    <div id="main" class="row">
        <!-- main content -->
        <div id="content" class="col-md-12" style="margin-top:10%">
            @yield('content')
        </div>

    </div>

  

</div>
</body>
</html>
