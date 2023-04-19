
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="{{url('https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css')}}" integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous"> 
    <link
      href="{{url('https://fonts.googleapis.com/css2?family=Inter:wght@100;200;300;400;500;600;700;800&family=Open+Sans:ital,wght@0,300;0,400;0,500;0,600;0,700;0,800;1,800&display=swap')}}"
      rel="stylesheet"
    />
    
    <link rel="stylesheet" href="{{url('css/style.css')}}" />
    <title>Home</title>
  </head>
  <body>
    <!-- nav-bar area Start -->
    @include('website.partials.top')
  <!-- nav-bar area end -->

  <!-- body part start -->
   @yield('content')

   <!-- Body part end -->

    <!-- footer area start -->  
    
    @include('website.partials.footer')

<!-- footer area end -->
<script src="{{url('https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js')}}" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="{{url('https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js')}}" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
<script src="{{url('https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.min.js')}}" integrity="sha384-+sLIOodYLS7CIrQpBjl+C7nPvqq+FbNUBDunl/OZv93DB7Ln/533i8e/mZXLi/P+" crossorigin="anonymous"></script>
   
    <script src="{{url('js/script.js')}}"></script>
  </body>
</html>
