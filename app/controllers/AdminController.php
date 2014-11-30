<?php
	use Eder\Repositories\ArticleRepo;



	class AdminController extends BaseController {

		   protected $articleteRepo;

		    public function __construct(ArticleRepo $articleteRepo)
		    {
		        $this->articleteRepo = $articleteRepo;
		    }


		public function getIndex()
		{
			$user = User::where('id','=',Auth::user()->id)->first();
			$articles = $this->articleteRepo->getArticlesUser($user->id);

			return View::make('admin/index', compact('user','articles'));
		}
	}