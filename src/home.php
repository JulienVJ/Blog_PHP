<?php
    session_start();
    require_once 'config.php';

    if(!isset($_SESSION['user']))
        header('Location: index.php');
    
    $check = $bdd->prepare('SELECT * FROM user WHERE token = ?');
    $check->execute(array($_SESSION['user']));
    $data = $check->fetch();

    $check = $bdd->prepare('SELECT * FROM post p INNER JOIN user u WHERE p.userId = u.id ORDER BY `date` DESC');
    $check->execute();
    $posts = $check->fetchAll(PDO::FETCH_ASSOC);

?>


<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/home.css">
    <link href='https://fonts.googleapis.com/css?family=Comfortaa' rel='stylesheet'>
    <title>Home - Post's Wall</title>
</head>
<body>
    <div class="logout">
        <a href="logout.php">Logout</a>
    </div>
    <div id="tittle">
        <h1>Welcome <?php echo $data['username']?> ! </h1>
    </div>
<div class="big-form">
    <form action="post.php" method="post">
        <div>
            <textarea id="textarea"type="text" name="post" placeholder="Type something.." required="required" autocomplete="off"></textarea>
        </div>
        <div">
            <button id="submit" type="submit">Post</button>
        </div>   
    </form>
</div>
    <?php foreach($posts as $post):?>
        <div class="post">
            <p class="name"><?= $post["username"] ?></p>
            <p><?= $post["post"] ?></p>
            <?php if($post["userId"] === $data['id']):?>
                <a href="update.php?id=<?php echo $post['post_id'];?>">Edit</a>
                <a href="delete.php?id=<?php echo $post['post_id'];?>">Delete</a>
            <?php endif?>
        </div>
    <?php endforeach; ?>

</body>
</html>