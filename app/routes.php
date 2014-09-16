<?php

Route::get("/register",function()
{
    return View::make("register");
});
Route::post("/register",function()
{
    $user = new User;
    $user -> email = Input::get("email");
    $user -> username = Input::get("username");
    $user -> password = Hash::make(Input::get("username"));
    $user ->save();
    $theEmail = Input::get("email");
    return View::make("thanks")->with("theEmail",$theEmail);
});

Route::get("/login",function()
{
    return View::make('login');
});
Route::post("/login",function()
{
    $credentials = Input::only('username','password');
    if(Auth::attempt($credentials))
    {
        return Redirect::intended("/");
    }
    return Redirect::to("login");
});
Route::get("/logout",function(){
    Auth::logout();
    return View::make("logout");
});
Route::get("bappa",
    function()
{
    return View::make("hello");
});