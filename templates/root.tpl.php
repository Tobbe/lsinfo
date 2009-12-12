<body id="home">
	<div id="top">
		<div id="header">
			<h1><a href="">LiteStep.info<span>torium</span></a></h1>
		</div>
		<div id="navigation">
			<ul>
				<li class="currentpage"><a href="#">Home</a></li>
				<li><a href="<?php e($this->url('articles')); ?>">Articles</a></li>
				<li><a href="<?php e($this->url('faq')); ?>">FAQ</a></li>
			</ul>
		</div>
	</div>
	<div id="innercontent">
		<h2>Point Number 1</h2>
		<p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Suspendisse varius nibh eu urna. Cras justo odio, elementum id, euismod at, adipiscing malesuada, augue. Mauris mollis, nulla vitae tempus gravida, lorem nisi facilisis eros, id scelerisque nibh est eget odio. Quisque pulvinar, ligula vel fermentum eleifend, augue arcu sagittis eros, nec mattis metus neque a pede. Vestibulum ut tellus at metus varius luctus. Fusce at ante id urna dictum accumsan. Vestibulum sed mi fermentum nunc mattis viverra.</p>
		<h2>Point Number 2</h2>
		<p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Suspendisse varius nibh eu urna. Cras justo odio, elementum id, euismod at, adipiscing malesuada, augue. Mauris mollis, nulla vitae tempus gravida, lorem nisi facilisis eros, id scelerisque nibh est eget odio. Quisque pulvinar, ligula vel fermentum eleifend, augue arcu sagittis eros, nec mattis metus neque a pede. Vestibulum ut tellus at metus varius luctus. Fusce at ante id urna dictum accumsan. Vestibulum sed mi fermentum nunc mattis viverra.</p>
		<h2>Point Number 3</h2>
		<p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Suspendisse varius nibh eu urna. Cras justo odio, elementum id, euismod at, adipiscing malesuada, augue. Mauris mollis, nulla vitae tempus gravida, lorem nisi facilisis eros, id scelerisque nibh est eget odio. Quisque pulvinar, ligula vel fermentum eleifend, augue arcu sagittis eros, nec mattis metus neque a pede. Vestibulum ut tellus at metus varius luctus. Fusce at ante id urna dictum accumsan. Vestibulum sed mi fermentum nunc mattis viverra.</p>
	</div>
	<div id="bottom-wrapper">
		<div id="bottom">
			<div id="leftbox" class="box"><div>
				<h2>Latest Articles (at most five)</h2>
				<ul class="feeds">
					<?php foreach ($latestarticles as $article): ?>
						<li><a href="<?php e(url(array('articles', $article->slug()))); ?>"><?php e($article->title()); ?> (<?php e($article->author()); ?>/<?php e($article->datetime(DATE_RSS)); ?>)</a></li>
					<?php endforeach; ?>
				</ul>
			</div>
		</div>
		<div id="centerbox" class="box">
			<div>
				<h2>Five most popular questions from the FAQ</h2>
				<ul class="feeds">
					<li><a href="#">Does LiteStep work on Vista/7?</a></li>
					<li><a href="#">Does LiteStep work on 64-bit Windows?</a></li>
					<li><a href="#">This is a feed item.</a></li>
					<li><a href="#">This is a feed item.</a></li>
					<li><a href="#">This is a feed item.</a></li>
				</ul>
			</div>
		</div>
		<div id="rightbox" class="box">
			<div>
				<h2>LSP rss feed</h2>
				<ul class="feeds">
					<li><a href="#">This is a feed item.</a></li>
				</ul>
			</div>
		</div>
	</div>
</div>
<div id="footer">
	<p>Design &copy; <a href="http://darrin.roenfanz.info/">Darrin C. Roenfanz</a></p>
	<ul>
		<li class="currentpage"><a href="#">Home</a></li>
		<li><a href="<?php e($this->url('articles')); ?>">Articles</a></li>
		<li><a href="<?php e($this->url('faq')); ?>">FAQ</a></li>
	</ul>
</div>
</body>
</html>