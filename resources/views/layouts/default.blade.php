
<!doctype html>
<html>
<head>
    @include('includes.head')
    @include('includes.header')
</head>
<body >

  <div id="wrapper">


            @yield('content')



  </div>
   <!-- /#wrapper -->
   <footer class="row">
       @include('includes.footer')
   </footer>

</body>
</html>
