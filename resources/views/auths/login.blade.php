<html>

<head>
    <meta charset="UTF-8">
    <title>Login</title>
    <meta name="description" content="Login - Register Template">
    <meta name="author" content="Lorenzo Angelino aka MrLolok">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="template/Login-Template-master/main.css">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <style>
        body {
            background-color: #F2F2F2;
        }
    </style>
</head>

<body class="login wall">
    <div>
      <div class="login_wrapper">
        <div class="animate form login_form">
          <section class="login_content">
            <br><br><center><img src="template/dist/img/pgn.png" style="height:117px;"></center>
            <br><br>
    <div id="container-login">
        <div id="title">
            <i class="fa fa-file-text"></i> Login Form
        </div>
        <br>
        <form action="/postlogin" method="POST">
            {{csrf_field()}}
            <div class="input">
                <div class="input-addon">
                    <i class="material-icons">face</i>
                </div>
                <input name="username" id="username" placeholder="Username" type="text" required class="validate" autocomplete="off">
            </div>

            <div class="clearfix"></div>

            <div class="input">
                <div class="input-addon">
                    <i class="material-icons">vpn_key</i>
                </div>
                <input name="password" id="password" placeholder="Password" type="password" required class="validate" autocomplete="off">
            </div>
            <br>

            <input type="submit" value="Log In" />
            
        </form>
        <br><br><br>
        <h5 style="color:grey;">
            <p>Copyright &copy; 2019 PT. Perusahaan Gas Negara. Tbk<br>All Rights Reserved.</p>
    </div>
</body>

</html>
