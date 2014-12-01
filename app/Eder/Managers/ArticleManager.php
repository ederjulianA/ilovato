<?php

	namespace Eder\Managers;

	class ArticleManager extends BaseManager{

		public function getRules()
		{
			$rules =[
				'title' 					=>	'required|max:200',
				'slug' 						=>	'required|max:200',
				'category_id' 				=>	'required|integer',
				'user_id' 					=>	'required|integer',
				'teaser' 					=>	'required|max:250',
				'meta_description'			=>	'required|max:250',
				'content'					=>	'required|min:5|max:4000',
				'img' 						=>	'required|image|mimes:jpeg,jpg,bmp,png,gif'

			];

			return $rules;
		}

	}