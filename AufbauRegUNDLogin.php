<!DOCTYPE html>
<html lang="en">

<head>
    <title>yourBox - Login</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
    <link rel="stylesheet" href="RegUNDLogin.css">


    <nav class="navbar navbar-default navbar-fixed-top">
        <div class="container-fluid">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="#">yourBox</a>
            </div>
            <div class="collapse navbar-collapse" id="myNavbar">
                <ul class="nav navbar-nav navbar-right">
                    <li><a href="#MeineDokumente">Meine Dokumente</a></li>
                    <li><a class="active" href="#MeineFotos">Meine Fotos</a></li>
                    <li><a href="#GeteilteDateien">Geteilte Dateien</a></li>
                    <li><a href="#"><span class="profilePicture"></span></a></li>
                    <li class="dropdown">
                        <a class="dropdown-toggle" data-toggle="dropdown" href="#">PROFIL
                            <span class="caret"></span>
                        </a>
                        <ul class="dropdown-menu">
                            <li><a href="#">Profil bearbeiten</a></li>
                            <li><a href="#">Abmelden</a></li>
                        </ul>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
</head>


<body>
    <div class="bg">
        <div <img src="Webprojekt Rebecca/wood2.jpg" alt="wood">>

<div class="text-center">
<div class="header-1"><p>Registrierung</p></div>
    <form class="form-reg">
Vorname:
        <div class="form-group">
<input class="form-control" type="text" placeholder="Max" name="vorname" />
        </div>
Nachname:
            <div class="form-group">
<input class="form-control" type="text" placeholder="Mustermann" name="nachname" />
            </div>
Benutzername:
        <div class="form-group">
<input class="form-control" type="text" placeholder="MaxMu123" name="benutzername" />
        </div>
Passwort:
        <div class="form-group">
<input class="form-control" type="password" placeholder="123456" name="passwort" />
        </div>
Email-Adresse:
            <div class="form-group">
<input class="form-control" type="email" placeholder="max.muster@mail.de" name="email" />
            </div>
Geburtsdatum:<br>
<label>Tag
    <select class="form-control" name="tag" size="1">
        <?php
        $tag=1;
        while($tag<=31){                                 //Schleife zählt von 01 bis 31 Tage
            $tag2 = $tag;
            if ($tag<10){
                $tag2= "0".$tag;
            }
            echo"<option value=\"$tag2\">$tag2</option>";
            $tag++;
        }
        ?>
    </select>
</label>

<label>Monat
    <select class="form-control" name="monat" size="1">
        <option value="01">Januar</option>
        <option value="02">Februar</option>
        <option value="03">März</option>
        <option value="04">April</option>
        <option value="05">Mai</option>
        <option value="06">Juni</option>
        <option value="07">Juli</option>
        <option value="08">August</option>
        <option value="09">September</option>
        <option value="10">Oktober</option>
        <option value="11">November</option>
        <option value="12">Dezember</option>
    </select>
</label>

<label>Jahr
    <select class="form-control" name="jahr" size="1">
        <?php
        $jahr=1900;
        while($jahr<=date("Y",time())){                                 //Schleife zählt von 1900 bis aktuelles Jahr
            echo"<option value=\"$jahr\">$jahr</option>";
            $jahr++;
        }
        ?>
    </select>
</label><br><br>

<input class="form-control" type="submit" value="Jetzt registrieren"/>


</form>
</div>
</div>
</div>
</body>

<footer>
    <div class="fo">
    <p>Impressum</p>
    </div>
</footer>

</html>
