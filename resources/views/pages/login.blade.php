<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8"/>
    <meta http-equiv="X-UA-Compatible" content="IE=edge"/>
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no"/>
    <meta name="description" content=""/>
    <meta name="author" content=""/>
    <title>Dashboard - SB Admin</title>
    <link href="https://cdn.jsdelivr.net/npm/simple-datatables@latest/dist/style.css" rel="stylesheet"/>
    <link href="{{url('/css/styles.css')}}" rel="stylesheet"/>
    <script src="https://use.fontawesome.com/releases/v6.1.0/js/all.js" crossorigin="anonymous"></script>
    <style type="text/css"> .notify{ z-index: 1000000; margin-top: 5%; } </style>
    @notifyCss
</head>
<body>
@include('notify::components.notify')
     <form action="{{route('do.login')}}" method="post">
            @csrf
            
<!DOCTYPE html>
<html>
  <head>
    <title>Login Page</title>
  </head>
  <body style="background-color: #f1f1f1; font-family: Arial, sans-serif">
    <div
      style="
        background-color: #fff;
        border-radius: 5px;
        box-shadow: 0px 0px 10px 0px rgba(0, 0, 0, 0.2);
        margin: auto;
        margin-top: 100px;
        padding: 20px;
        width: 400px;
      "
    >
      <form style="display: flex; flex-direction: column">
        <h2>Login</h2>
        <label
          style="font-size: 14px; font-weight: bold; margin-top: 10px"
          for="email"
          type = 'email'
          ><b>Email</b></label
        >
        <input
          style="
            border: 1px solid #ccc;
            border-radius: 4px;
            padding: 10px;
            margin-bottom: 15px;
            width: 100%;
          "
          type="text"
          placeholder="Enter Email"
          name="email"
          required
        />

        <label
          style="font-size: 14px; font-weight: bold; margin-top: 10px"
          for="password"
          ><b>Password</b></label
        >
        <input
          style="
            border: 1px solid #ccc;
            border-radius: 4px;
            padding: 10px;
            margin-bottom: 15px;
            width: 100%;
          "
          type="password"
          placeholder="Enter Password"
          name="password"
          required
        />

        <button
          style="
            background-color: #4caf50;
            border: none;
            border-radius: 4px;
            color: white;
            cursor: pointer;
            font-size: 16px;
            padding: 10px;
            margin-top: 20px;
          "
          type="submit"
        >
          Login
        </button>
      </form>
    </div>
  </body>
</html>

          
        </form>

   
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
        crossorigin="anonymous"></script>
<script src="{{url('/js/scripts.js')}}"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.8.0/Chart.min.js" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/simple-datatables@latest" crossorigin="anonymous"></script>
<script src="js/datatables-simple-demo.js"></script>
@notifyJs
</body>
</html>
