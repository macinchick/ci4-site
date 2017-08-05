<div class="wrapper">
	<header>
		<h1 class="major" itemprop="headline"><?php echo $headline; ?></h1>
	</header>
	<main itemscope itemtype="https://schema.org/Article" class="docs l-group">
		<article role="article" class="docs__content l-4" itemscope itemtype="https://schema.org/BlogPosting" id="blog-post">
			<div itemprop="articleBody">
				<?php echo $article_content; ?>
			</div>
			<hr/>
			<p>Didn’t answer your question? <a href="/search">Search this site</a> or <a href="mailto:grawlixcomix@gmail.com">tell us what you’re looking for</a>.</p>
		</article>

	<aside class="sidenav l-2">
		<div class="tool-search">
<?php echo form_open('/docs/search'); ?>
			<div class="l-group">
				<div class="l-1">
<?php //echo form_input('keyword', $keyword); ?>
				</div>
				<div class="l-1">
<?php echo form_submit('submit', 'Search','class="cta-minor"'); ?>
				</div>
			</div>
<?php echo form_close(); ?>
		</div>

		<h2><a href="/docs">&lsaquo; Documentation</a></h2>
		<h3 itemprop="articleSection"><?php echo $topics['title']; ?></h3>
		<ul class="nav">
<?php
foreach ($topics['content'] as $slug => $arr)
{
	$link = site_url('docs/1/'.$slug);
	$item = $arr['title'];

	if ($current_slug == $slug)
	{
		$item = '<li class="yah">'.$item.'</li>';
	}
	else
	{
		$item = '<li><a href="'.$link.'">'.$item.'</a></li>';
	}
	echo $item;
}
?>
		</ul>
	</aside>
</main>
</div>