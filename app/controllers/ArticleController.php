<?php
use Eder\Repositories\ArticleRepo;
use Eder\Repositories\CategoryRepo;
use App\Models\Article;
use Eder\Managers\ArticleManager;

	class ArticleController extends BaseController {

		protected $articleteRepo;
		protected $categoriesRepo;
		protected $article;

		    public function __construct(ArticleRepo $articleteRepo, CategoryRepo $categoriesRepo)
		    {
		        $this->articleteRepo = $articleteRepo;
		        $this->categoriesRepo = $categoriesRepo;
		    }


		// FUNCTION THAT RETURNS THE VIEW FOR CREATE A NEW ARTICLE 
		public function getNew()
		{
			$categories = $this->categoriesRepo->getCategories();
			return View::make('admin.new',compact('categories'));
		}  
		// FUNCTION THAT PROCCESS THE NEW ARTICLE
		public function postNew()
		{
			

			$imagen = Input::file('img');
			$codigoIMG = str_random(5);
			$filename = date('Y-m-d-H-m-s')."-".$codigoIMG.".jpg";
			$article = $this->articleteRepo->newArticle($filename);
			$manager = new ArticleManager($article, Input::all());


		
			if($manager->save())
			{

				
				
				Image::make($imagen->getRealPath())->save(public_path().'/blog/img/'.$filename);
				
				return Redirect::to('/adminpanel')->with('message','New article created');
			}else{
				
				return Redirect::back()->withInput()->withErrors($manager->getErrors());
			}

		}  

		public function editArticle($id,$slug)
		{
			$article = $this->articleteRepo->find($id);
			$categories = $this->categoriesRepo->getCategories();
			if($article->count())
			{
				return View::make('admin.editArticle', compact('article','categories'));
			}

			return Redirect::to('adminpanel');
		}


		public function postEditArticle()
		{
			$article = Article::where('id','=',Input::get('id_post'))->first();
			if($article->count())
			{
				
				$article->title = Input::get('title');
				$article->slug = Input::get('slug');
				$article->meta_description = Input::get('meta_description');
				$article->teaser = Input::get('teaser');
				$article->content = Input::get('content');
				if($article->save())
				{
					return Redirect::to('/adminpanel')->with('message','Article edited');
				}
			}
		}
	}