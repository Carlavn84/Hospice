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
    <!-- <link href="style/style.css" rel="stylesheet" /> -->
    <style>
    *{
        text-align: center;
        background-color:rgb(183, 183, 183);
        /* background-color: rgb(214, 214, 214); */
    }

    * .col-sm-12 .btn-default {
        background-color:rgb(249, 175, 54);
        width: 100px;
    }

    * .col-sm-12 h2{
      color: black;
        border-radius: 10px;
        padding: 5px;
    }

     * .col-sm-12 textarea{
        height: 100px ;
        border-radius: 10px;
        padding: 20px;
    }

    * .navbar-default{
        background-color:rgb(168, 168, 168);
        padding: 20px;
    }
    
    </style>
</head>
<body>
    <div class="edit-page">
        <div class="landing-text">
        <br><br>
            <div class="col-sm-12">
                <form action="/admin/editnew" method="POST" class="edit_form">
                    <h2>Title</h2>
                    <input type="text" value="<?= $new['title'] ?>" name="title"  class="form-control" required><br>
                    <h2>Description</h2>
                    <textarea name="description" class="form-control"><?= $new['description'] ?></textarea><br><br>
                    <input type="hidden" name="id" value="<?= $new['id'] ?> "><br>
                    <input type="submit" name="btnSave" value="Save" class="btn btn-default btn-lg"><br><br>
                    <a href="/backNews" class="btn btn-default btn-lg" >Back</a><br/><br/>
                    <a href="/logout" class="btn btn-default btn-lg" >Logout</a><br/><br/>
                </form> 
            </div>
        </div>
    </div>
</body>
</html>




<?php
if(isset($article)){ 
    foreach($article as $item){ ?>
        <?=$item['title']; ?> <br> 
        <?=$item['description']; ?> <br> 
<?php } }?>









