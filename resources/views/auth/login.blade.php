<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Admin Panel | User Login</title>
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <link rel="shortcut icon" href="{{asset('assets/frontend/images/logo/logo-1.png')}}"/>
    <link rel="stylesheet" type="text/css" href="{{asset('assets/admin/bootstrap/css/bootstrap.min.css')}}" />
    <link rel="stylesheet" type="text/css" href="{{asset('assets/admin/css/font-awesome.min.css')}}" />
    <link rel="stylesheet" type="text/css" href="{{asset('assets/admin/css/admin_custom.css')}}" />

    <script type="text/javascript" src="{{asset('assets/admin/js/jquery.js')}}"></script>
    <script type="text/javascript" src="{{asset('assets/admin/bootstrap/js/bootstrap.min.js')}}"></script>
</head>
<body style="background-color: #a3d7ff;">
<div class="container">
    <div class="row">
        <div id="login_box" class="col-md-offset-4 col-md-4">
            <h3>ADMIN LOGIN</h3>
            <form method="post" action="{{url('/admin/login')}}">
                {{csrf_field()}}
                <div class="input-group">
                  <div class="input-group-addon"><i class="fa fa-envelope"></i></div>
                  <input type="email" class="form-control" name="email" id="email" placeholder="Email">
                </div>
                <hr/>
                <div class="input-group">
                  <div class="input-group-addon"><i class="fa fa-key"></i></div>
                  <input type="password" class="form-control" name="password" id="password" placeholder="Password">
                </div>
                
                <hr/>
                <button type="submit" name="login" class="btn btn-success"><i class="fa fa-lock"></i> LogIn</button>
            </form>
        </div>
        <div class="col-md-offset-4 col-md-4">
            <br/>
            <p style="text-align: center;">&copy; Happy Smile - 2018<br/> Powered By: <a href="http://radiantnepal.com/" target="_blank">Radiant InfoTech Nepal</a></p>
        </div>
    </div>
</div>
</body>
</html>
