<?php
//dd(Input::all());

			/*$data = Input::all();
			$rules =[
				'title' 					=>	'required|max:200',
				'slug' 						=>	'required|max:200',
				'category_id' 				=>	'required|integer',
				'teaser' 					=>	'required|max:250',
				'meta_description'			=>	'required|max:250',
				'content'					=>	'required|min:5|max:4000',
				'img' 						=>	'required|image|mimes:jpeg,jpg,bmp,png,gif'

			];*/

			$imagen = Input::file('img');
				$codigoIMG = str_random(5);
				$filename = date('Y-m-d-H-m-s')."-".$codigoIMG.".jpg";
			$article = $this->articleteRepo->newArticle($filename);
			$manager = new ArticleManager($article, Input::all());


			//$validation = Validator::make($data, $rules);
			//if($validation->passes())
			if($manager->save())
			{

				//$idU = Auth::user()->id;
				
				Image::make($imagen->getRealPath())->save(public_path().'/blog/img/'.$filename);
				/*$article = new Article($data);
				$article->user_id = $idU;
				//$article->title = Input::get('title');
				//$article->slug = Input::get('slug');
				//$article->category_id = Input::get('category');
				//$article->teaser = Input::get('teaser');
				//$article->meta_description = Input::get('meta_description');
				//$article->content = Input::get('content');
				$article->img = '/blog/img/'.$filename;
				$article->active = 1;
				if($article->save())
				{
					return Redirect::to('/adminpanel')->with('message','New article created');
				}*/
				return Redirect::to('/adminpanel')->with('message','New article created');
			}else{
				//return Redirect::back()->withInput()->withErrors($validation->messages());
				return Redirect::back()->withInput()->withErrors($manager->getErrors());
			}