<?php
use CMS\Repositories\Eloquent\AccountRepository as Account;

class AccountController extends BaseController {
    
    public function __construct(Account $account)
    {
        $this->account = $account;
    }
    
    public function create()
    {
        // create account form - tmp as I make some tests
        
        echo '<pre>';
        print_r(Session::all());
        
        $form = '<form action="'.route('account.store').'" method="post">';
        $form .= 'Email: <input type="text" name="email"/><br/>';
        $form .= 'Username: <input type="text" name="username"/><br/>';
        $form .= 'Password: <input type="text" name="password"/><br/>';
        $form .= 'Security code: <input type="text" name="captcha"/><br/>';
        $form .= '<input type="submit" name="submit"/>';
        $form .= '</div>';
        
        return $form;
    }
    
    public function store()
    {
        $form = $this->account->getRegistrationForm();
        
        if ( ! $form->isValid())
        {
            return $this->redirectBack(array('errors' => $form->getErrors()));
        }
        
        if ($this->account->create($form->getInputData()))
        {
            $this->redirectRoute('home');
        }
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

