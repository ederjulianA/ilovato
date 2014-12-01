<?php
	namespace Eder\Managers;

	abstract class BaseManager {

		protected $model;
		protected $data;
		protected $errors;

		public function __construct($model, $data)
		{
			$this->model = $model;
			$this->data  = array_only($data, array_keys($this->getRules()));
		}

		abstract public function getRules();

		public function isValid()
		{
			$rules = $this->getRules();
			$validation = \Validator::make($this->data, $rules);
			$isValid = $validation->passes();
			$this->errors = $validation->messages();

			return $isValid;
		}

		public function save()
		{
			if(! $this->isValid())
			{
				return false;
			}
			$this->model->fill($this->data);
			$this->model->save();

			return true;
		}

		public function getErrors()
		{
			return $this->errors;
		}
	}