<?php 
    require_once 'config.php'; 
    
    if(!empty($_GET['id']))
    { 
        $id = intval($_GET['id']);
    
        $insert = $bdd->prepare('SELECT * FROM post WHERE post.post_id = :id');
        $insert->execute(array(
            ':id' => $id,
        ));
        $post = $insert->fetch();
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/update.css">
    <title>Update Post</title>
</head>
<body>
    <div class="logout">
        <a href="logout.php">Logout</a>
    </div>
    <div id="tittle">
        <h1>Update</h1>
    </div>
    <div class="big-form">
        <form action="update_treatment.php?id=<?php echo $post['post_id'];?>" method="post">
            <div>
                <textarea id="textarea" type="text" name="post" placeholder="Texte ...." required="required" autocomplete="off"><?= $post["post"]?></textarea>
            </div>
            <div">
                <button id="submit" type="submit">Update</button>
            </div>   
        </form>
    </div>
</body>
</html>