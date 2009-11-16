<h2><?php e($article->title()); ?></h2>
<h3><?php e($article->author()); ?> - <?php e($article->datetime('D, d M Y - H:i')); ?></h3>
<p><?php echo $article->body(); ?></p>