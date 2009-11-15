<h2>Articles</h2>
<ul>
<?php foreach ($articles as $article): ?>
  <li><a href="<?php e(url($article->slug())); ?>"><?php e($article->title()); ?> (<?php e($article->author()); ?>/<?php e($article->datetime(DATE_RSS)); ?>)</a></li>
<?php endforeach; ?>
</ul>