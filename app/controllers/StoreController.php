<?php
	use Eder\Repositories\ArticleRepo;



	class 	StoreController extends BaseController {

		   protected $articleteRepo;

		    public function __construct(ArticleRepo $articleteRepo)
		    {
		        $this->articleteRepo = $articleteRepo;
		    }


		public function getHome()
		{
			

			return View::make('store/index');
		}
	}