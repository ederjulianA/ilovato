<?php namespace Eder\Repositories;
use App\Models\Category;
	
	class CategoryRepo extends BaseRepo {
		public function getModel()
	    {
	        return new Category;
	    }	

	    public function getCategories()
	    {
	    	return Category::lists('cat_name', 'id');
	    }

	    public function all()
	    {
	    	return Category::all();
	    }

	}