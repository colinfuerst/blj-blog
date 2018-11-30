<!DOCTYPE html>
<html lang="de">
<head>
    <meta charset="UTF-8">
    <title>Blog</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.0.0-alpha/css/bootstrap.min.css">
    <link rel="stylesheet" href="style.css">
</head>
<body id="center">
    <div class="wrapper">

        <h1 class="form-title">Andere Blogs</h1>
        <p>Liste der Blogs meiner Kollegen:</p>
<?php
    $user = 'guest';
    $pass = 'blj12345';
    $dbh = new PDO('mysql:host=10.20.16.102;dbname=blogdb', $user, $pass);
    
    $stmt = $dbh->prepare('SELECT * FROM andereblogs');
    $stmt->execute();
    
    foreach($stmt as $output){?>
       
            <a href="http://<?= htmlspecialchars($output['ip'], ENT_QUOTES, "UTF-8");?><?= htmlspecialchars($output['pfad'], ENT_QUOTES, "UTF-8");?>"><?= htmlspecialchars($output['name'], ENT_QUOTES, "UTF-8"); ?></a><br>
       
        <?php
    }
    ?>

            <div class="form-actions">
                <form method="get" action="blog.view.php">
                    <button class="btn btn-primary" type="submit">Blog schreiben</button>
                    
                </form>
            </div>

        </form>
    </div>
</body>
</html>