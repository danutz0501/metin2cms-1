<?php namespace CMS\Repositories;

interface PlayerRepositoryInterface {

	public function find($id);

	public function findByName($name);

	public function findByAccount($account);

}