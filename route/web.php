<?php

use Xcholars\Support\Proxies\Route;

use Xcholars\Support\Proxies\RouteGroup as Group;

use Xcholars\Http\Request;

use Xcholars\Http\Response;

Route::view('/home', 'welcome/home');

Route::view('/', 'welcome/home');

Route::get('home/{partial}', 'HomeController@show');

Route::view('/terms_and_conditions', 'terms&conditions');

Route::view('/summary', 'summary');

Group::middleware('auth')->members(function ()
{
    //signup
    Route::view('/signup', 'auth/signup');

    Route::post('/signup', 'SignupController@create');

    //signin
    Route::view('/signin', 'auth/signin');

    Route::post('/signin', 'LoginController@authenticate');

    //forgotPassword
    Route::view('/forgotPassword', 'auth/forgotPassword');

    Route::post('/forgotPassword', 'forgotPasswordController@verify');

    //resetCode
    Route::view('/confirmResetCode', 'auth/confirmResetCode');

    Route::post('/confirmResetCode', 'ResetPasswordController@verifyResetCode');

    //resetPassword
    Route::view('/resetPassword', 'auth/resetPassword');

    Route::post('/resetPassword', 'ResetPasswordController@reset');
});

Group::middleware('guest')->members(function ()
{
    // profile
    Route::get('/profile', 'ProfileController@show');

    // Change Password
    Route::view('/changepassword', 'client/changepassword');

    Route::post('/changepassword', 'ChangepasswordController@change');

    // sign Out
    Route::get('/logout', 'LogoutController@logout');

    Route::post('/logout', 'LogoutController@logout');

    // overview
    Route::get('/overview', 'OverviewController@show');

    // Withdraw
    Route::view('/withdraw', 'client/withdraw');

    Route::post('/withdraw', 'WithdrawalController@withdraw');

    // deposit
    Route::view('/deposit', 'client/deposit');

    Route::post('/deposit', 'DepositsController@deposit');

    // Transactions
    Route::get('/transactions', 'TransactionsController@show');

    // network
    Route::get('/network', 'NetworksController@show');

    // sponsor
    Route::view('/sponsor', 'client/sponsor');

    Route::post('/sponsor', 'SponsorController@pay');

    // send Money
    Route::view('/sendmoney', 'client/sendmoney');

    Route::post('/sendmoney', 'SendMoneyController@pay');

    // upgarade
    Route::view('/upgrade', 'client/upgrade');

    // Pledge
    Route::view('/pledge', 'client/pledge');

    // blog
    Route::view('/blog', 'client/blog');

    // contact
    Route::view('/contact', 'client/contact');

    // FOR ADMIN ONLY
    Group::middleware('admin')->members(function ()
    {
        // withdrawals
        Route::get('/withdrawals', 'WithdrawalController@show');

        // deposits
        Route::get('/deposits', 'DepositsController@show');


    });

});

Route::fallback(function (Response $response)
{
    return $response->withView('404');
});
