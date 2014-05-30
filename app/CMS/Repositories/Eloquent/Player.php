<?php namespace CMS\Repositories\Eloquent;

use Illuminate\Database\Eloquent\Model;

class Player extends Model
{
	protected $table = 'player';
	protected $connection = 'player';
	protected $fillable = array('name', 'account_id', 'level');
	public $timestamps = false;
}