<?php

class UserController extends BaseController {

/**
*Have to be a guest, ie: not logged on
*/
public function __construct() {

$this->beforeFilter('guest', array('only' => array('getLogin','getSignup')));

}


/**
* Show the new user signup form
* @return View
*/
public function getSignup() {

return View::make('signup');

}

/**
* Process the new user signup
* @return Redirect
*/
public function postSignup() {

# Step 1) Define the rules - VALIDATION
#Apply multiple rules separated by | character
#users table, email field for email address
$rules = array(
'email' => 'required|email|unique:users,email',
'password' => 'required|min:6'
);

# Step 2)
#Take all form data and run through validator
#$rules are the rules above
#Can add another array param, $messages for custom messages
$validator = Validator::make(Input::all(), $rules);

# Step 3
#Check if validation fails, if so, redirect to form
if($validator->fails()) {

return Redirect::to('/signup')
->with('flash_message', 'Sign up failed; please fix the errors listed below.')
->withInput()   #re-populates fields with user input
->withErrors($validator); #Shows errors
}

$user = new User;
$user->email    = Input::get('email');
$user->password = Hash::make(Input::get('password'));

try {
$user->save();
}
catch (Exception $e) {
return Redirect::to('/signup')
->with('flash_message', 'Sign up failed; please try again.')
->withInput();
}

# Log in
Auth::login($user);

return Redirect::to('/')->with('flash_message', 'Welcome to Foobooks!');

}

/**
* Display the login form
* @return View
*/
public function getLogin() {

return View::make('login');

}

/**
* Process the login form
* @return View
*/
public function postLogin() {

$credentials = Input::only('email', 'password');

if (Auth::attempt($credentials, $remember = false)) {
return Redirect::intended('/')->with('flash_message', 'Welcome Back!');
}
else {
return Redirect::to('/login')
->with('flash_message', 'Log in failed; please try again.')
->withInput();
}

return Redirect::to('login');

}


/**
* Logout
* @return Redirect
*/
public function getLogout() {

# Log out
Auth::logout();

# Send them to the homepage
return Redirect::to('/');

}

}
