<!DOCTYPE html>
<html lang="de">
<head>
    <meta charset="UTF-8">
    <title>Meine Seite</title>
		<link rel="stylesheet" href="public/css/app.css">
		<link href="https://fonts.googleapis.com/css?family=Antic+Slab|Monoton|Rokkitt" rel="stylesheet">
</head>
<body>

	
<div calss="blog">
		<h1 class="title">Colin's Blog</h1>
	<form action="add" method="POST">

		<h4 class="title">Neuen Eintrag erstellen</h4>
		
		<div class="form-field">
			<label for="name" class="title" >Name:</label>
			<input type="text" id="name" name="name" required>
		</div>
		<div class="form-field">
			<label for="message" class="title" >Nachricht:</label>
			<textarea type="text" id="message" name="message" required></textarea>
		</div>

<div class="form-actions">
<input class="btn btn-primary" type="submit" value="Absenden">
</div>
<div>
<h2 class="eintreage">Blog-Einträge:</h2>

<div class="guestbook-list">
	<?php foreach ($entries as $entry) {

		if(strpos($entry," ")!==false)
		{
			?>
    <div class="guestbook-entry">
        <h3><?= htmlspecialchars($entry['name'] , ENT_QUOTES, 'UTF-8'); ?></h3>
        <div><?= htmlspecialchars($entry['message'], ENT_QUOTES, 'UTF-8'); ?></div>
		</div>
		<?php 
		} 
		else
		{
				echo "Falsche Eingabe";
		}
	  } ?>
	</div>
	</div>
	</div>
	</form>


</body>
</html>