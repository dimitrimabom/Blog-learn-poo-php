<?php

	$articles = $db->query('SELECT * FROM articles');

	// echo "<pre>";
	// var_dump($articles);
	// echo "</pre>";
?>

<h1>Home</h1>


<ul>

	<?php foreach ($articles as $key => $article) { ?>
	<li>
		<a href="?p=post&id=<?= $article['id_article']; ?>"><?= $article['title']; ?></a>
	</li>
	<?php } ?>
	
</ul>

<p><a href="?p=single">Vers la single</a></p>