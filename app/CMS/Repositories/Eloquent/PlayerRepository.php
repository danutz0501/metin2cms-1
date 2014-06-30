<?php namespace CMS\Repositories\Eloquent;

use CMS\Repositories\PlayerRepositoryInterface;
use CMS\Repositories\Eloquent\Player as Model;

class PlayerRepository extends AbstractRepository implements PlayerRepositoryInterface {

	public function __construct(Model $model)
	{
		$this->model = $model;
	}

	public function create(array $data = array())
	{
		return $this->model->create($data)->toArray();	
	}

	public function find($id)
	{
		$result = $this->model->find($id);

		return $result != NULL ? $data->toArray() : NULL;
	}

	public function findByName($name)
	{
		$result = $this->model->where('name', '=', $name)->first();

		return $result != NULL ? $result->toArray() : NULL;
	}

	public function findByAccount($account)
	{
		return $this->model->where('account_id', '=', $account)->get()->toArray();
	}
}