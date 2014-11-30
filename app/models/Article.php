<?php namespace App\Models;

	class Article extends \Eloquent {
		protected $table = 'articles';

		public function user()
		{
			return $this->belongsTo('User');
		}

		public function category()
		{
			return $this->belongsTo('App\Models\Category');
		}


		public function getArticles()
		{
			$articles = Article::where('active','=',1)->orderBy('created_at','desc')->get();
			return $articles;
		}
	}