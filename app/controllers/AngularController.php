<?php
	use Eder\Repositories\ArticleRepo;



	class AngularController extends BaseController {

		   protected $articleteRepo;

		    public function __construct(ArticleRepo $articleteRepo)
		    {
		        $this->articleteRepo = $articleteRepo;
		    }


		public function getIndex()
		{
			

			return View::make('angular.index');
		}

		public function getNewCat()
		{
			return View::make('angular.newCat');
		}
	}