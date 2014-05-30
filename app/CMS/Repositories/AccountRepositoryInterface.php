<?php namespace CMS\Repositories;

interface AccountRepositoryInterface {

	public function create(array $data = array());

	public function find($id);

	public function findByLogin($login);

	public function findByEmail($email);
}