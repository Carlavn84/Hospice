<!DOCTYPE html>
<html>
<head>
    <title>Stichting Hospice Amsterdam Zuidoost</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <link href='https://fonts.googleapis.com/css?family=Satisfy' rel='stylesheet'>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <!-- <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.13/css/all.css" integrity="sha384-DNOHZ68U8hZfKXOrtjWvjxusGo9WQnrNx2sqG0tfsghAvtVlRW3tvkXWZh58N9jp" crossorigin="anonymous"> -->
    <!-- <link href="style.css" rel="stylesheet" /> -->
    <style>
    *{
        text-align: center;
        background-image: url('img/background3.jpg');
        /* background-color: rgb(214, 214, 214); */
    }

    * .col-sm-12 .btn-default {
        background-color:rgb(249, 175, 54);
        width: 100px;
    }

    * .col-sm-12 h1,h4{
        background-color: rgb(249, 175, 54, 0.9);
        border-radius: 10px;
        padding: 20px;
    }
    * .navbar-default .btn-default {
        background-color:rgb(0, 0, 0, 0.5);
        margin-top: 10px;
        color: white;
    }
    * .navbar-default{
        background-color:rgb(168, 168, 168);
        padding: 20px;
    }
    
    </style>
</head>
<body>
    <nav class="navbar navbar-default navbar-fixed-top" role="navigation">
        <div class="collapse navbar-collapse" id="navbar-collapse-main">
            <h3>Stichting Hospice Amsterdam Zuidoost</h3>
            <a href="/backAdd" class="btn btn-default btn-lg">Back</a> &nbsp; &nbsp; 
            <a href="/logout" class="btn btn-default btn-lg">Logout</a><br/><br/>
        </div>
    </nav><br><br><br><br><br><br><br><br><br>
      <div class="admin-news">
        <div class="landing-text">
            <div class="col-sm-12">
                <?php
                if(isset($article)){ 
                    foreach($article as $item){ ?>
                        <h1><?= $item['title']; ?> <br></h1>
                        <h4><?=$item['description']; ?><br></h4>
                        <a href="/admin/delete/<?= $item['newsId']?>" class="btn btn-default btn-lg">Delete</a> &nbsp;&nbsp; 
                        <a href="/admin/edit/<?= $item['newsId']?>" class="btn btn-default btn-lg"> Edit </a> <br> <br>
                <?php } }?>
            </div>
        </div>
    </div>
</body>
</html>