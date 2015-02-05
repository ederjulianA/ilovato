<?php
use Eder\Repositories\ArticleRepo;
use Eder\Repositories\CategoryRepo;

class HomeController extends BaseController {

	/*
	|--------------------------------------------------------------------------
	| Default Home Controller
	|--------------------------------------------------------------------------
	|
	| You may wish to use controllers instead of, or in addition to, Closure
	| based routes. That's great! Here is an example controller method to
	| get you started. To route to this controller, just add the route:
	|
	|	Route::get('/', 'HomeController@showWelcome');
	|
	*/

	   protected $articleteRepo;
	   protected $categoriesRepo;

    public function __construct(ArticleRepo $articleteRepo, CategoryRepo $categoriesRepo)
    {
        $this->articleteRepo = $articleteRepo;
        $this->categoriesRepo = $categoriesRepo;
    }

	public function getHome()
	{
		

		$articles = $this->articleteRepo->findLastest();
		return View::make('blog.index',compact('articles'));
	}

	public function getArticle($id,$slug)
	{
		$categories = $this->categoriesRepo->getCategories();
		$a = $this->articleteRepo->find($id);

		if($a->count())
		{
			return View::make('blog.article', compact('a','categories'));
		}

	}

	public function areumissd()
	{
		 
		return View::make('missd.index');
	}


	public function getAddres($id)
	{
		return View::make('blog.addres');
	}

	public function postAddres()
	{
		if(isset($_POST['id']))
		{
			
			$address = $_POST['address'];
			$user = User::where('id','=',$_POST['id'])->first();
		
			
		}
	}

	public function getSitemap()
	{
			 // create new sitemap object
		    $sitemap = App::make("sitemap");

		    // set cache (key (string), duration in minutes (Carbon|Datetime|int), turn on/off (boolean))
		    // by default cache is disabled
		    $sitemap->setCache('laravel.sitemap', 7000);

		    // check if there is cached sitemap and build new only if is not
		    if (!$sitemap->isCached())
		    {
		         // add item to the sitemap (url, date, priority, freq)
		         $sitemap->add(URL::to('/'), '2014-11-25T20:10:00+02:00', '1.0', 'weekly');
		         

		         // get all posts from db
		         $posts = DB::table('articles')->orderBy('created_at', 'desc')->get();

		         // add every post to the sitemap
		         foreach ($posts as $post)
		         {
		            $sitemap->add($post->slug, $post->updated_at);
		         }
		    }

		    // show your sitemap (options: 'xml' (default), 'html', 'txt', 'ror-rss', 'ror-rdf')
		    return $sitemap->render('xml');
	}

}
