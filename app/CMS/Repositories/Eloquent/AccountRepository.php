<?php namespace CMS\Repositories\Eloquent;

use CMS\Repositories\AccountRepositoryInterface;
use CMS\Repositories\PlayerRepositoryInterface;
use CMS\Repositories\Eloquent\Account as Model;
use helpers\General;
use Auth;

class AccountRepository extends AbstractRepository implements AccountRepositoryInterface {

	public function __construct(Model $model, PlayerRepositoryInterface $player)
	{
		$this->model = $model;
		$this->player = $player;
	}

	public function create(array $data = array())
	{
		if (isset($data['password'])) // Just to be sure
		{
			$data['password'] = General::passwordHash($data['password']);
		}

		return $this->model->create($data)->toArray();	
	}

	public function find($id)
	{
		$result = $this->model->find($id);
		
		return $result != NULL ? $result->toArray() : NULL;
	}

	public function findByLogin($login)
	{
		$result = $this->model->where('login', '=', $login)->first();
	
		return $result != NULL ? $result->toArray() : NULL;
	}

	public function findByEmail($email)
	{
		return $this->model->where('email', '=', $email)->get()->toArray();
	}

	public function getPlayers($accountId)
	{
		return $this->player->findByAccount($accountId);
	}

	public function newSocialID($accountId)
	{

	}

	public function auth($account, $password = 'test')
	{
		$user = $this->model->where('id', '=', $account)
                             ->where('password', '=', $password)->get();
	}
}