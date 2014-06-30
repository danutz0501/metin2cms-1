<?php

use CMS\Repositories\AccountRepositoryInterface;
use CMS\Repositories\PlayerRepositoryInterface;

Event::listen('auth.attempt', function($user)
{
    var_dump($user);
});

class HomeController extends BaseController {

	private $account;
	private $player;

	public function __construct(AccountRepositoryInterface $account, PlayerRepositoryInterface $player)
	{
		$this->account = $account;
		$this->player = $player;

		var_dump($this->account->find(1));
	}

	public function index()
	{
            return '<h1>Metin2CMS</h1><p>Work in progress !</p>';
	}

}
