<?php namespace App\Models;

	class Category extends \Eloquent {
		protected $table = 'categories';

		public function article()
		{
			return $this->hasMany('App\Models\Article');
		}

	}