<?php namespace CMS\Repositories\Eloquent;

use Illuminate\Database\Eloquent\Model;

class AbstractRepository {

	public function __construct(Model $model)
	{
		$this->model = $model;
	}

	/**
	 * Creates a new instance for our Eloquent model
	 * @param  array  $params
	 * @return Eloquent instance
	 */
	public function getNew(array $params = array())
	{
		return $this->model->newInstance($params);
	}
}