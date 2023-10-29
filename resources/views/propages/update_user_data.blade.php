<!DOCTYPE html>
<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>update page </title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@200;600&display=swap" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css2?family=Chelsea+Market&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Chelsea+Market&family=Montserrat+Alternates&display=swap"
        rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Piedra&family=Titillium+Web:wght@300&display=swap"
        rel="stylesheet">

    <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="css/main.css">
    <link rel="stylesheet" href="css/login.css">
    <link rel="stylesheet" href="css/owl.carousel.min.css">
    <link rel="stylesheet" href="css/owl.theme.default.min.css">
    <link rel="stylesheet" type="text/css" href="css/hover.css  ">
    <link rel="stylesheet" type="text/css" href="css/animate.css  ">

        <!-- Styles -->
        <style>
            html, body {
                background-color: #fff;
                color: #636b6f;
                font-family: 'Nunito', sans-serif;
                font-weight: 200;
                height: 100vh;
                margin: 0;
            }

            .full-height {
                height: 100vh;
            }

            .flex-center {
                align-items: center;
                display: flex;
                justify-content: center;
            }

            .position-ref {
                position: relative;
            }

            .top-right {
                position: absolute;
                right: 10px;
                top: 18px;
            }

            .content {
                text-align: center;
            }

            .title {
                font-size: 84px;
            }

            .links > a {
                color: #636b6f;
                padding: 0 25px;
                font-size: 13px;
                font-weight: 600;
                letter-spacing: .1rem;
                text-decoration: none;
            }

            .m-b-md {
                margin-bottom: 30px;
            }
            .form-group input{
                width: 300px;
                border: 1px solid #ccc;
                padding: 10px;
                margin: 10px;
                color: red;
                background-color: #ccc;
            }
            .form-group button{
                width: 80px;
                border: 1px solid #ccc;
                padding: 10px;
                margin: 10px;
                color: blue;
                background-color: #aaa;
            }
            .alert alert-success{
                width: 300px;
                padding: 10px;
                margin: 10px;
                border: 1px solid #ccc;  
            }
            .form-text text-danger{
                color: red;
                padding: 10px;
                margin: 10px;
            }
            .title m-b-md{
                color: red;
                padding: 10px;
                margin: 10px;
                width: 300px;
            }
        </style>
    </head>
    <body>
        
        <div class="flex-center position-ref full-height">

            <div class="content">
                <div class="title m-b-md">
                    update user data
                </div>
                @if(Session::has('stored'))
                <div class="alert alert-success" role="alert">
                    {{Session::get('stored')}}
                </div>
                @endif
                <div class="login-form  col-offset-2 col-12 col-lg-4 text-center col-sm-12 col-md-12">
                    <form method ="post" action="{{route('updated',$up_user->user_id)}}">
                        @csrf
                        <h5>update user data</h5>
                        <div class="form-group">
                            <input type="text" class="form-control" name ='name' value="{{$up_user->name}}" placeholder="enter user name">
                            @error('name')
                            <small class="form-text text-danger">{{$message}}</small>
                            @enderror
                        </div>
                        <div class="form-group">
                            <input type="password" class="form-control" name ='password' value="{{$up_user->password}}" placeholder="enter user password">
                            @error('password')
                            <small class="form-text text-danger">{{$message}}</small>
                            @enderror
                        </div>
                        <div class="form-group">
                            <input type="text" class="form-control" name ='phone' value="{{$up_user->phone}}" placeholder="enter user phone">
                            @error('phone')
                            <small class="form-text text-danger">{{$message}}</small>
                            @enderror
                        </div>
                        <div class="form-group">
                            <input type="email" class="form-control" name="email" value="{{$up_user->email}}" placeholder="enter user email">
                            @error('email')
                            <small class="form-text text-danger">{{$message}}</small>
                            @enderror
                        </div>
                        
                        <div class="form-group">
                            <button>update</button> 
                        </div>
                    </form>
                </div>

                

            </div>
        </div>
    </body>
</html>
