<?php

if ( $date )
{
	$date_parts = explode('-',$date);
	$show_date = date('F j, Y',mktime(0,0,0,$date_parts[1],$date_parts[2],$date_parts[0]));
}

/*
if ( $hero )
{
	$hero = explode('||',$hero);
	$hero = '<img src="'.$hero[0].'" alt="'.$hero[1].'"/>';
}
*/

?><main>
	<article role="article" class="wrapper" itemscope itemtype="https://schema.org/BlogPosting" id="blog-post">
		<?php //echo $hero; ?>
		<h1 itemprop="headline"><?php echo $headline; ?></h1>
		<div itemprop="articleBody">
			<?php echo $article_content; ?>
			<!--a href="https://twitter.com/share" class="twitter-share-button">Tweet this post</a>
<script>!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0],p=/^http:/.test(d.location)?'http':'https';if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src=p+'://platform.twitter.com/widgets.js';fjs.parentNode.insertBefore(js,fjs);}}(document, 'script', 'twitter-wjs');</script-->
		<hr/>
		<p>Anyone can read the blog, but <strong>patrons get inside info. <a href="https://www.patreon.com/grawlixcomix?ty=h">Support our project!</a></strong></p>
		</div>
	</article>
	<aside role="complementary" class="sidenav">
		<h2><a href="/blog">&lt; Blog</a></h2><br/>
		<p class="article-meta">
			<?php if ( $date ) : ?>
				<time class="datestamp" itemprop="datePublished" datetime="<?php echo $date; ?>"><?php echo $show_date; ?></time><br/>
			<?php endif; ?>
			<?php if ( $byline ) : ?>
				by <a href="https://twitter.com/grawlixcomix/"><span itemprop="author" class="byline"><?php echo $byline; ?></span></a>
			<?php endif; ?>
		</p>
	</aside>
</main>