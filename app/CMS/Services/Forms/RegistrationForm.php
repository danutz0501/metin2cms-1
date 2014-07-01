<?php
namespace CMS\Services\Forms;

class RegistrationForm extends AbstractForm {
    
    protected $rules = array(
        'username'  => 'required|min:4|max:16|alpha_num|unique:account,login',
        'email'     => 'required|email|min:5',
        'password'  => 'required|min:6|confirmed'
    );
}