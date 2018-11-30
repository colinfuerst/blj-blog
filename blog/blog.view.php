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

<div calss="blog">
		<p class="titel">Colin's Blog</p>
	<form action="add" method="POST">

		<p class="ueberbegriff">Neuen Eintrag erstellen</p>
		
		<div class="form-field">
			<label for="name" class="title" >Name:</label>
			<input type="text" id="name" name="name" required>
		</div>
		<div class="form-field">
			<label for="name" class="title" >Titel:</label>
			<input type="text" id="titel" name="titel" required>
		</div>
		<div class="form-field">
			<label for="message" class="title" >Nachricht:</label>
			<textarea type="text" id="message" name="message" required></textarea>
		</div>
		<div class="form-field">
			<label for="message" class="title" >Link zu einem Bild:</label>
			<textarea type="text" id="link" name="link"></textarea>
		</div>

		<div class="form-actions">
        <input class="btn btn-primary" type="submit" value="Absenden">
				</form>
        <a href="blj-blogs.php" class="btn">Zu den anderen Blogs</a>

<p class="titel">Blog-Einträge:</p>

<div class="blog-list">
		<?php foreach ($entries as $entry):?>
  <div class="blog-entry">
		<?php 
			$entry = preg_replace("/(.{80})/mi","$1\n", $entry);
		?>
				<p class="eintreage"><?= htmlspecialchars($entry['name'] , ENT_QUOTES, 'UTF-8'); ?></p>

				<p class="eintrag"><?= htmlspecialchars($entry['titel'] , ENT_QUOTES, 'UTF-8'); ?></p>

        <div>
				<?= htmlspecialchars($entry['message'], ENT_QUOTES, 'UTF-8'); ?>
				</div>
				<br>
				<br>

				<?php if(htmlspecialchars($entry['image'], ENT_QUOTES, "UTF-8") !== ''):?>

				<img class= "images" src= <?=htmlspecialchars($entry['image'], ENT_QUOTES, "UTF-8");?> alt="Bild zu gross!">
				
				<?php endif; ?>
				
				<p class="eintrag">Rating:</p>

				<button type="button" name="like" value="like"><img class="button-image" src="images/daumen-hoch.jpg" alt="Upvote">
				
				<button type="button" name="dislike" value="dislike"><img class="button-image2" src="images/daumen-runter.png" alt="Downvote"></button>
			
			
			<div class="button">
				<form action="kommentar.php" method="post">
        	<button>Kommentar abgeben</button>
					<input type="hidden" name="kommentar-id" value="<?= $entry["id"] ?> "/>
				</form>
			</div>
		

				<div class="date"><?= htmlspecialchars($entry['date'], ENT_QUOTES, 'UTF-8'); ?></div>
				</div><?php endforeach; ?>

</div>

	
</body>
</html>