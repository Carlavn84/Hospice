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
    <link href="style.css" rel="stylesheet" />
</head>
<body>
    <div class="admin-news">
        <div class="landing-text">
            <div class="col-sm-12">
                <form action="/add" method="POST" class="news_form">
                    <div class="form-group">
                        <div class="col-md-12">
                            <label>Title</label><br>
                            <input type="text" name="txt_title" required><br><br>
                            <!-- class="form-control" -->
                            <label>Description</label><br>
                            <textarea name="txt_description" class="form-control"></textarea><br><br>
                            <input type="hidden" name="admin_id" value="<?= $this->session->userdata('id'); ?> "><br>
                            <input type="submit" name="btnSave" value="Save" class="btn btn-default btn-lg"><br><br>
                            <a href="/allnews" class="btn btn-default btn-lg" >All News</a><br/><br/>
                            <a href="/logout" class="btn btn-default btn-lg" >Logout</a><br/><br/>
                        </div>
                    </div>
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
