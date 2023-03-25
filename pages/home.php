<?php

	$articles = $db->query('SELECT * FROM articles', 'App\Table\Article');

	// echo "<pre>";
	// var_dump($articles);
	// echo "</pre>";
?>

<h1>Home</h1>


<?php foreach ($articles as $key => $article) { ?>

<h1>
	<a href="<?= $article->url; ?>"><?= $article->title; ?></a>
</h1>

<p>
	<?= $article->extrait; ?>
</p>

<?php } ?>


<!-- <p><a href="?p=single">Vers la single</a></p> -->