<?php namespace CMS\Repositories\Eloquent;

use Illuminate\Database\Eloquent\Model;

class Account extends Model
{
	protected $table = 'account';
	protected $fillable = array('login', 'password', 'email');
	public $timestamps = false;
}