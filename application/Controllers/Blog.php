<?php namespace App\Controllers;

class Blog extends BaseController
{

	/**
	 * Directory that contains blog content files
	 */
	protected $content_path = 'Views/blog_content/';

	/**
	 * Data for views
	 */
	public $view_data = array(
		'meta_title' => 'Blog',
		'page_title' => 'Blog',
		'meta_description' => 'News and notes about webcomic production and the Grawlix CMS.',
	);

	//--------------------------------------------------------------------

	public function __construct(...$params)
	{
		// Need this
		parent::__construct(...$params);
	}

	//--------------------------------------------------------------------

	public function index()
	{
		$data = $this->view_data;

		echo view('site/header', $data);
		echo view('blog/main', $data);
		echo view('site/footer', $data);
	}

	//--------------------------------------------------------------------

	public function post($slug)
	{
		$data = $this->view_data;

		$article = APPPATH.$this->content_path.$slug.'/article.md';

		// Get and parse article
		if (file_exists($article))
		{
			$text = file($article);

			$data['meta_title'] = trim(array_shift($text));
			$data['headline'] = trim(array_shift($text));
			$data['description'] = trim(array_shift($text));
			$data['date'] = trim(array_shift($text));
			$data['byline'] = trim(array_shift($text));
			$data['tags'] = trim(array_shift($text));
			$data['extra'] = trim(array_shift($text));

			$content = implode("\n", $text);
			$data['content'] = $content;
		}
		// 404
		else
		{
			$data['meta_title'] = '404 not found';
			$data['content'] = '<h1>Article not found</h1><p>Sorry, I can’t find that post. <a href="/blog">Browse all posts</a> or <a href="/contact">ask us</a> about what you’re looking for.</p>';
		}

		echo view('site/header', $data);
		echo view('blog/post', $data);
		echo view('site/footer', $data);
	}

	//--------------------------------------------------------------------

}
