<?php namespace helpers;

class General {

	public static function passwordHash($input, $hex = true)
	{
  		$sha1_stage1 = sha1($input, true);
  		$output = sha1($sha1_stage1, !$hex);
  		return '*' . strtoupper($output);
	}
}