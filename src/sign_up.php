<!DOCTYPE html>
<html lang="fr">
    <head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/index.css">
    <link href='https://fonts.googleapis.com/css?family=Comfortaa' rel='stylesheet'>
    <title>Sign Up</title>
</head>
<body>
    <header>
        <div class="header_infos">
            <h1>Blog Docker</h1>
            <h2>by VERITE Julien</h2>
        </div>
    </header>
<div class="big-form">
        <form class="form" action="treatment.php" method="post">
            <h2 id="tittle">Sign Up</h2>       
            <div>
                <input class="button" type="text" name="username" placeholder="Pseudo" required="required" autocomplete="off">
            </div>
            <div>
                <input class="button" type="password" name="password" placeholder="Mot de passe" required="required" autocomplete="off">
            </div>
            <div">
                <button id="submit" type="submit">Sign Up</button>
            </div>   
        </form>
    </body>
</html>