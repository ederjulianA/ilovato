<?php namespace Eder\Repositories;
use App\Models\Article;
	
	class ArticleRepo extends BaseRepo {

	    public function getModel()
	    {
	        return new Article;
	    }	

	    public function  findLastest()
	    {
	    	$articles = Article::where('active','=',1)->orderBy('created_at','desc')->get();
	    	return $articles;
	    }

	    public function find($id)
	    {
	    	$a = Article::where('id','=',$id)->first();
	    	return $a;
	    }

	    public function newArticle($filename)
	    {
	    	$article = new Article();
	    	$article->img = '/blog/img/'.$filename;
			$article->active = 1;
			return $article;
	    }


	    public function getArticlesUser($user_id)
	    {
	    	return Article::where('user_id','=',$user_id)->get();
	    }

	}