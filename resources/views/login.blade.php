<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="css/app.css">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <link rel="stylesheet" href="css/regis.css">
    <style>
        #grup > .row > .input-container, #member1 > .row > .input-container{
            padding: 2em;
            border-radius: inherit;
            background: white;
            border-top-right-radius: 20px;
            border-bottom-right-radius: 20px;
        }
    </style>
</head>
<body>
    <form action="google.com" method="get">
        <div class="container-fluid form-container shadow" id="grup">
            <div class="row">
                <div class="container-fluid gambar-input col-lg-4 col-md-4 col-sm-12 col-xs-12 "> <img src="image/team.png" class="img-fluid" alt="hello"> </div>
                <div class="container input-container col-lg-8 col-md-8 col-sm-12 col-xs-12 order-sm-last order-xs-last">
                    <h1>Login</h1>
                    <div class="row">
                        <div class="form-group col-12">
                            <label for="username">Username</label>
                            <input type="text" class="form-control" id="username" placeholder="Username" required>
                            <span style="color:red; font-size:0; font-weight:700;  " class="line_wrong" ></span>
                        </div>
                        <div class="form-group col-12">
                            <label for="password">Password</label>
                            <input type="password" class="form-control" id="password" placeholder="Enter Password" required>
                            <span style="color:red; font-size:0; font-weight:700;" class="pass_wrong" ></span>
                        </div>
                    </div>
                    <button class="btn btn-regis" id="btn-login">Login</button>
                </div>
            </div>
        </div>
    </form>
    <script src="js/app.js"></script>
    <script src="js/login.js"></script>
</body>
</html>