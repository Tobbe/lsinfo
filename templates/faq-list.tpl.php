<h2>FAQ</h2>
<ul>
<?php foreach ($faq as $qa): ?>
  <li><a href="<?php e(url($qa->slug())); ?>"><?php e($qa->question()); ?></a></li>
<?php endforeach; ?>
</ul>