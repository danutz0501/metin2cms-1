<?php namespace CMS\Repositories\Eloquent;

use CMS\Repositories\AccountRepositoryInterface;
use CMS\Repositories\Eloquent\Account as Model;

class AccountRepository extends AbstractRepository implements AccountRepositoryInterface {

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
		$data = $this->model->find($id);
		
		return $data != NULL ? $data->toArray() : NULL;
	}

	public function findByLogin($login)
	{
		return $this->model->where('login', '=', $login)->first()->toArray();
	}

	public function findByEmail($email)
	{
		return $this->model->where('email', '=', $email)->get()->toArray();
	}
}