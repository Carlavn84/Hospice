<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Volunteer_register</title>
    <style>

    </style>
  </head>
  <body>
    <h1>Stiching Hospice Amsterdam Zuidoost</h1>
    <a href="/home">Home</a>
  <hr/>
  <div>

    <?php   if ($this->session->flashdata("register_successful")) {
    echo $this->session->flashdata("register_successful");
} ?>

    <form action="/volunteer_register" method="POST">
      <?php if (isset($error)) {
    echo($error);
} ?>
<input type="text" name="fullname" placeholder="Naam"/>
<label>Geboortedatum</label>
<input type="date" name="birthday" placeholder="Geboortedatum"/><br/>
<label>Gender</label>
<select name="Gender">
  <option value="male">Male</option>
  <option value="female">Female</option>
  <option value="other">Other</option>
</select>
<input type="text" name="address" placeholder="Uv anders"/>
<input type="text" name="address" placeholder="Postcode "/>
<input type="text" name="address" placeholder="E-mailadres "/>
<input type="text" name="telephone" placeholder="Telefoonnummer"/>
<input type="text" name="mobile" placeholder="Mobiel"/>
<input type="text" name="profession" placeholder="Beroep/ Opleiding"/>
<input type="text" name="working_experience" placeholder="Hoeveel uur werkzaam in
eigen betrekking"/>
<input type="text" name="working_hour_volunteer" placeholder="werkuren per week"/>
<input type="text" name="life_conviction" placeholder="Levensovertuiging"/>
<input type="text" name="marial_status" placeholder="Burgerlijke staat/Gezinssamenstelling"/>
<p>Enkele inventariserende vragen</p>
<label>1. Waarom wilt u vrijwilligerswerk doen in het Hospice
Amsterdam Zuidoost?</label>
<textarea name="question_1"></textarea><br/><br/>
<label>2.Heeft u ervaring met vrijwilligerswerk? Zo ja, welk/wat?</label>
<textarea name="question_2"></textarea><br/><br/>
<label>3.Heeft u ervaring in de zorgsector of zorg voor een ander? Zo ja, graag een omschrijving wat deze
ervaring inhoudt</label>
<textarea name="question_3"></textarea><br/><br/>
<label>4.Heeft u zelf ervaring met het verliezen van een dierbare? Welke rol speelt dit bij uw keuze?</label>
<textarea name="question_4"></textarea><br/><br/>
<label>5.Wat zou voor u belangrijk zijn in de laatste levensfase?</label><br/><br/>
<textarea name="question_5"></textarea><br/><br/>
<label>6.Wat zou u kunnen bieden binnen het hospice? Welke werkzaamheden binnen het hospice hebben
uw voorkeur?</label>
<textarea name="question_6"> </textarea><br/><br/>
<lebel>7.Wat verwacht u van het werk binnen het hospice?</label>
<textarea name="question_7"></textarea><br/><br/>
<input type="submit" name="submit"/>
    </form>

  </div>



  </body>
</html>
