<!DOCTYPE html>
<html lang="de">
<head>
    <meta charset="UTF-8">
    <title>Meine Seite</title>
		<link rel="stylesheet" href="style.css">
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
		<div class="form-field">
			<label for="message" class="title" >Link zu einem Bild:</label>
			<textarea type="text" id="link" name="link"></textarea>
		</div>



<input type="submit" value="Absenden">
<a href="blj-blogs.php">Zu den anderen Blogs</a>

<h2 class="eintreage">Blog-Einträge:</h2>

<div class="blog-list">
	<?php foreach ($entries as $entry) {?>
    <div class="blog-entry">
		<?php 
		$entry = preg_replace("/(.{80})/mi","$1\n", $entry);
		
	

		 
		?>
        <h3><?= htmlspecialchars($entry['name'] , ENT_QUOTES, 'UTF-8'); ?></h3>
        <div><?= htmlspecialchars($entry['message'], ENT_QUOTES, 'UTF-8'); ?></div><br><br>
				<div><?= htmlspecialchars($entry['date'], ENT_QUOTES, 'UTF-8'); ?></div><br>
				<?php if( htmlspecialchars($entry['image'], ENT_QUOTES, "UTF-8") !== ''){
        ?><img class= "images" src= <?=htmlspecialchars($entry['image'], ENT_QUOTES, "UTF-8");?> alt="Bild">
    

				<?php } ?>	
</div>

	
	
	
	</div>
	</form>


</body>
</html>