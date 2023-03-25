<?php

	$article = $db->prepare('SELECT * FROM articles WHERE id_article = ?', [$_GET['id']], 'App\Table\Article', true);

	// echo "<pre>";
	// var_dump($articles);
	// echo "</pre>";
?>

<h1>Single</h1>

<h1>
	<?= $article->title; ?>
</h1>

<p>
	<?= $article->content; ?>
</p>

<p><a href="?p=home">Retour sur Home</a></p>