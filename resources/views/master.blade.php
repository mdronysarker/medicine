<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>Dashboard - SB Admin</title>
        <link href="{{url('https://cdn.jsdelivr.net/npm/simple-datatables@latest/dist/style.css')}}" rel="stylesheet" />
        <link href="{{url('css/styles.css')}}" rel="stylesheet" />
         <link rel="stylesheet" href="{{url('from/style.css')}}">
        <script src="{{url('https://use.fontawesome.com/releases/v6.1.0/js/all.js')}}" crossorigin="anonymous"></script>
        <style type="text/css"> .notify{ z-index: 1000000; margin-top: 5%; } </style>
        @notifyCss
    </head>
    <body class="sb-nav-fixed">
        


 @include('partials.header')

 @include('notify::components.notify')
        <div id="layoutSidenav">
            

   @include('partials.sidebar')


            <div id="layoutSidenav_content">
                <main>
                    




                @yield('content')

                </main>
              
        @include('partials.footer')




            </div>
        </div>
        <script src="{{url('https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js')}}" crossorigin="anonymous"></script>
        <script src="{{url('js/scripts.js')}}"></script>
        <script src="{{url('https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.8.0/Chart.min.js')}}" crossorigin="anonymous"></script>
        <script src="{{url('assets/demo/chart-area-demo.js')}}"></script>
        <script src="{{url('assets/demo/chart-bar-demo.js')}}"></script>
        <script src="{{url('https://cdn.jsdelivr.net/npm/simple-datatables@latest')}}" crossorigin="anonymous"></script>
        <script src="{{url('js/datatables-simple-demo.js')}}"></script>
        @notifyJs
    </body>
</html>