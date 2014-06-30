<?php
use CMS\Repositories\Eloquent\AccountRepository as Account;

class AccountController extends Controller {
    
    public function __construct(Account $user)
    {
        
    }
    
    public function create()
    {
        // create account form
    }
    
    public function store()
    {
       // add to database & redirect after creation
    }
    
    public function login()
    {
       // login form
    }

    public function doLogin()
    {
       // make login session & redirect
    }    
    
    public function confirm($code)
    {
        // confirm account
    }
    
    public function forgotPassword()
    {
        // forgot password form
    }
    
    public function doForgotPassword()
    {
        // forgot password logic
    }
    
    public function resetPassword()
    {
        // password reset form
    }
    
    public function doResetPassword()
    {
        // password reset logic
    }
    
    public function logout()
    {
        // delete user session and redirect
    }
}

