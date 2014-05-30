<?php

use CMS\Repositories\AccountRepositoryInterface;
use CMS\Repositories\PlayerRepositoryInterface;

class HomeController extends BaseController {

	private $account;
	private $player;

	public function __construct(AccountRepositoryInterface $account, PlayerRepositoryInterface $player)
	{
		$this->account = $account;
		$this->player = $player;
	}

	public function index()
	{
		$a = $this->account->findByLogin('ionut');
		
		if ( ! $a)
		{
			$a = $this->account->create([
				'login' 	=> 'ionut',
				'password'	=> 'test'
			]);
		}

		$this->player->create([
			'name'	=> 'test',
			'account_id' => $a['id'] 
		]);
		var_dump($this->player->findByAccount($a['id']));


		return '<h1>Metin2CMS</h1><p>Work in progress !</p>';
	}

}
