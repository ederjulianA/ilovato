<?php
use Eder\Repositories\ArticleRepo;
use Eder\Repositories\CategoryRepo;
use App\Models\Article;

	class ArticleController extends BaseController {

		protected $articleteRepo;
		protected $categoriesRepo;

		    public function __construct(ArticleRepo $articleteRepo, CategoryRepo $categoriesRepo)
		    {
		        $this->articleteRepo = $articleteRepo;
		        $this->categoriesRepo = $categoriesRepo;
		    }



		public function getNew()
		{
			$categories = $this->categoriesRepo->getCategories();
			return View::make('admin.new',compact('categories'));
		}  

		public function postNew()
		{
			//dd(Input::all());

			$data = Input::all();
			$rules =[
				'title' 				=>	'required|max:200',
				'slug' 					=>	'required|max:200',
				'category' 				=>	'required|integer',
				'teaser' 				=>	'required|max:250',
				'meta_description'		=>	'required|max:250',
				'content'				=>	'required|min:5|max:4000',
				'img' 					=>	'required|image|mimes:jpeg,jpg,bmp,png,gif'

			];

			$validation = Validator::make($data, $rules);
			if($validation->passes())
			{
				$idU = Auth::user()->id;
				$imagen = Input::file('img');
				$codigoIMG = str_random(5);
				$filename = date('Y-m-d-H-m-s')."-".$codigoIMG.".jpg";
				Image::make($imagen->getRealPath())->save(public_path().'/blog/img/'.$filename);
				$article = new Article;
				$article->user_id = $idU;
				$article->title = Input::get('title');
				$article->slug = Input::get('slug');
				$article->category_id = Input::get('category');
				$article->teaser = Input::get('teaser');
				$article->meta_description = Input::get('meta_description');
				$article->content = Input::get('content');
				$article->img = '/blog/img/'.$filename;
				$article->active = 1;
				if($article->save())
				{
					return Redirect::to('/adminpanel')->with('message','New article created');
				}
			}else{
				return Redirect::back()->withInput()->withErrors($validation->messages());
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