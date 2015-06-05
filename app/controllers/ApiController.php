<?php
	use Eder\Repositories\CategoryRepo;
	use App\Models\Category;



	class ApiController extends BaseController {

		   protected $categoryRepo;

		    public function __construct(CategoryRepo $categoryRepo)
		    {
		        $this->categoryRepo = $categoryRepo;
		    }


		    public function getCat()
		    {
		    	$cats = $this->categoryRepo->all();
		    	return Response::json($cats);
		    }

		    public function newCat()
		    {

		    	
		    		$cat = new Category;
		    		$cat->cat_name = Input::get('name_cat');
		    		if($cat->save())
		    		{
		    			$estado = "okay";

		    			return Response::json(array('estado'=>$estado,'newcate'=>$cat));
		    		}
		    	
		    }
	}