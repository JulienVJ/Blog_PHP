<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/index.css">
    <link href='https://fonts.googleapis.com/css?family=Comfortaa' rel='stylesheet'>
    <title>Docker Blog</title>
</head>
<body>
    <header>
        <div class="header_infos">
            <h1>Blog Docker</h1>
            <h2>by VERITE Julien</h2>
        </div>
    </header>
<div class="big-form">
    <form class="form" action="connection.php" method="post">
                <h2 id="tittle">Connection</h2>       
                <div>
                    <input class="button" type="text" name="username" placeholder="Username" required="required">
                </div>
                <div>
                    <input class="button" type="password" name="password" placeholder="Password" required="required">
                </div>
                <div>
                    <button id="submit" type="submit">Connect</button>
                </div>   
            </form>
            <a href="sign_up.php">Sign Up</a>
    </form>
</div>
</body>
</html>