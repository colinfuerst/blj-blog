<!DOCTYPE html>
<html lang="de">
<head>
		<meta charset="UTF-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Meine Seite</title>
		<link rel="stylesheet" href="style.css">
		<link href="https://fonts.googleapis.com/css?family=Antic+Slab|Monoton|Rokkitt" rel="stylesheet">
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
</head>
<body id="center">
<h1 class="titel">Kommentar zum Blog schreiben</h1>

    <form action="add" method="POST">
    <?php
    echo $_POST["kommentar-id"];
    ?>

        
            <div class="form-field">
                <label for="name">Name:</label>
                <input type="text" id="name" name="name" required>
            </div>

            <div class="form-field">
                <label for="message">Kommentar:</label>
                <textarea type="text" id="message" name="message" required></textarea>
            </div>


    <input type="submit" value="Speichern">


    <?php foreach ($rating as $rating):?>

    <div class="blog-entry">
        <?php 
            $rating = preg_replace("/(.{80})/mi","$1\n", $rating);?>

            <p class="eintreage"><?= htmlspecialchars($rating['name'] , ENT_QUOTES, 'UTF-8'); ?>

            <div><?= htmlspecialchars($rating['message'], ENT_QUOTES, 'UTF-8'); ?></div><br><br>
            <div class="date"><?= htmlspecialchars($rating['date'], ENT_QUOTES, 'UTF-8'); ?></div>
    </div>
        <?php endforeach; ?>




    </form>

</body>
</html>