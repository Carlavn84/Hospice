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
    <link rel="shortcut icon" href="img/logof.png">
    <!-- <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.13/css/all.css" integrity="sha384-DNOHZ68U8hZfKXOrtjWvjxusGo9WQnrNx2sqG0tfsghAvtVlRW3tvkXWZh58N9jp" crossorigin="anonymous"> -->
    <link href="style.css" rel="stylesheet"/>
</head>
<body>
    <nav class="navbar navbar-default navbar-fixed-top" role="navigation">
        <div class="container-fluid">
            <div class="navbar header">
                <button type="button" class="navbar-toggle" data-toggle="collapse"
                    data-target="#navbar-collapse-main">
                    <span class="sr-only">toggle-navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <div class="navbar-brand"> 
                <a href="home"> <img src="img/logoff.png" alt="logo"  width="160" height="160"></a>
                </div>
                <div class="navbar-brand">
                    <h2> Stichting Hospice <br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Amsterdam Zuidoost</h2>
                </div>
            </div>
            <div class="collapse navbar-collapse" id="navbar-collapse-main">
                <ul class="nav navbar-nav navbar-right">
                    <li><a class="active" href="home">Home</a></li>
                    <li><a href="orga">De Organisatie</a></li>
                    <li><a href="news">Nieuw</a></li>
                    <li><a href="contact">Contact</a></li>
                    <li><a class="btn-btn" href="volunteer">Vrijwilliger Worden</a></li>
                    <li><a class="btn btn-default btn-lg" href="steun-ons">Steun Ons</a>&nbsp;&nbsp;</li>
                </ul>
            </div>
        </div>
    </nav><br><br>
    <div class="padding"><br><br><br>
        <div class="container">
            <div class="row">
                <?php
                    if(isset($article)){ 
                        foreach($article as $item){ ?>
                <div class="col-lg-2 col-md-2 col-sm-6 col-xs-12">
                    <img src="img/vrijwilliger.jpg" class="img-responsive">
                </div>
                <div class="col-lg-4 col-md-5 col-sm-6 col-xs-12">
                    <h2><?= $item['title']; ?></h2>
                    <p><?=$item['description']; ?></p>
                </div>
                <?php } }?>     
            </div>
        </div>
    </div>
   <footer class="container-fulid text-center">
        <div class="row">
            <div class="col-sm-3">
                <h3>Contact Ons</h3>
                <h5>(06) 442 70 584</h5>
                 <a class="email" href="mailto:info@hospiceamsterdamzuidoost.nl" id="2C5FD394-EA0F-4E2F-A9D2-79B0A061BA15">info@hospiceamsterdamzuidoost.nl</a>
            </div>
            <div class="col-sm-3">
                <h3>Adres</h3>
                <h5>Kelbergen 189</h5>
                <h5>1104 LJ  Amsterdam</h5>
            </div>
            <div class="col-sm-3">
                <h3>Openingstijden</h3>
                <h5>Ma-Vrij: 9:00 - 17:30</h5>
                <h5>(na opening is het hospice 24 uur bereikbaar)</h5>
            </div>
            <div class="col-sm-3">
                    <h3>Social</h3>
                    <a href="https://www.facebook.com/hospiceamsterdamzuidoost/" class="fa fa-facebook"></a>
                    <a href="https://www.linkedin.com/company/hospice-amsterdam-zuidoost/" class="fa fa-linkedin"></a>
                    <a href="#" class="fa fa-google"></a>
                </div>
        </div>
    </footer> 
</body>
</html>