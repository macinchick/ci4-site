<main class="docs">
<?php
foreach ($topics as $topic => $list)
{
	echo '<section class="l-1">';
	echo '<h2>'.$list['title'].'</h2>';
	$items = array();
	foreach ($list['content'] as $slug => $arr)
	{
		$link = site_url('docs/1/'.$slug);
		$items[] = '<a href="'.$link.'">'.$arr['title'].'</a>';
	}
	echo ul($items);
	echo '</section>';
}
?>
	<section class="l-1">
		<h2>Resources</h2>
		<ul>
			<li><a href="/forum/categories/help-support">The forum</a></li>
			<li><a href="/search">Search this site</a></li>
			<li><a href="http://gumroad.com/l/SACCb">Learn to code</a></li>
			<li><a href="https://www.patreon.com/grawlixcomix/posts">Insider info</a></li>
		</ul>
	</section>
</main>
