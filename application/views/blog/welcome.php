<!DOCTYPE html>
<html>
<head>
    <title>Admin page</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <link href='https://fonts.googleapis.com/css?family=Satisfy' rel='stylesheet'>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <!-- <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.13/css/all.css" integrity="sha384-DNOHZ68U8hZfKXOrtjWvjxusGo9WQnrNx2sqG0tfsghAvtVlRW3tvkXWZh58N9jp" crossorigin="anonymous"> -->
    <link href="style.css" rel="stylesheet" />
</head>
<body>
    <div class="home-admin">
        <div class="landing-text">
            <div class="col-sm-12">
                <div class="loginuser">
                    <form method="post" action="/login" class="login_form">
                        <p>Admin page</p><br><br>
                        <input type="text" name="email_login" placeholder="Email"><br><br>
                        <input type="password" name="password_login" placeholder="Password"><br><br>
                        <input type="submit" name="submit" value="Login" class="btn btn-default btn-lg">
                    </form>
                </div>
            </div>
        </div>
    </div>
</body>
</html>