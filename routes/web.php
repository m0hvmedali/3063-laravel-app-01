<?php

use Illuminate\Support\Facades\Route;

$users = [
    1 => ['id' => 1, 'name' => 'Ali', 'email' => 'ali@mail.com', 'phone' => '0100000001', 'role' => 'admin'],
    2 => ['id' => 2, 'name' => 'Sara', 'email' => 'sara@mail.com', 'phone' => '0100000002', 'role' => 'guest'],
    3 => ['id' => 3, 'name' => 'Omar', 'email' => 'omar@mail.com', 'phone' => '0100000003', 'role' => 'manager'],
    4 => ['id' => 4, 'name' => 'Ahmed', 'email' => 'EMAIL', 'phone' => '0100000004', 'role' => 'admin'],
    5 => ['id' => 5, 'name' => 'Sayed', 'email' => 'EMAIL', 'phone' => '0100000005', 'role' => 'guest'],
    6 => ['id' => 6, 'name' => 'Mohamed', 'email' => 'EMAIL', 'phone' => '0100000006', 'role' => 'manager'],
];

Route::get('/', function () {
    return view('welcome');
});

Route::prefix('/users')->group(function () use ($users) {

    Route::get('/', function () use ($users) {
        return view('users.index', ['users' => $users]);
    });

    Route::get('/create', function () {
        return view('users.create');
    });

    Route::get('/show/{id}', function ($id) use ($users) {
        return view('users.show', ['user' => $users[$id]]);
    })->whereNumber('id');


    Route::get('/edit/{id}', function ($id) use ($users) {
        return view('users.edit', ['user' => $users[$id]]);
    });

    // /users/role/{role}
    Route::get('/role/{role}', function ($role) {
        return view('users.role', ['role' => ($role)]);
    });
})->where('role', 'admin|manager|guest');



Route::fallback(function () {
    return redirect('/users');
});