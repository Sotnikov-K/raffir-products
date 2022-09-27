<?php // routes/breadcrumbs.php

use Diglactic\Breadcrumbs\Breadcrumbs;
use Diglactic\Breadcrumbs\Generator as BreadcrumbTrail;
use App\Models\Lot;


// Home
Breadcrumbs::for('home', function (BreadcrumbTrail $trail) {
    $trail->push('Home', 'http://raffir-mammoth-dev.com/', ['icon' => 'home-icon-white.png' ]);
    // dd($trail);
});

// Home > Cultural Herritage
Breadcrumbs::for('cultHeritage', function (BreadcrumbTrail $trail) {
    $trail->parent('home');
    $trail->push('> Heritage', 'http://raffir-mammoth-dev.com/cultural-heritage', ['icon' => 'cultural-herritage-icon-white.png']);
});

// Home > Database
Breadcrumbs::for('database', function (BreadcrumbTrail $trail) {
    $trail->parent('home');
    $trail->push('> Database', 'http://raffir-mammoth-dev.com/database', ['icon' => 'database-icon-white.png']);
});

// Home > Database > Lot
Breadcrumbs::for('databaseItem', function (BreadcrumbTrail $trail, $slug) {
    $lot = Lot::where('slug', $slug)->first(); 
    $slug = $lot -> getAttribute('slug');
    $trail->parent('database');
    $trail->push('> ' . $slug , route('databaseItem', $lot ), ['icon' => 'database-lot-icon-white.png']);
});

// Home > Contacts
Breadcrumbs::for('contacts', function (BreadcrumbTrail $trail) {
    $trail->parent('home');
    $trail->push('> Contacts', 'http://raffir-mammoth-dev.com/contacts', ['icon' => 'contact-icon-white.png']);
});

// Home > Login
Breadcrumbs::for('user.login', function (BreadcrumbTrail $trail) {
    $trail->parent('home');
    $trail->push('> Login', 'http://raffir-mammoth-dev.com/login', ['icon' => 'login-icon-white.png']);
});

// Home > Registration
Breadcrumbs::for('user.registration', function (BreadcrumbTrail $trail) {
    $trail->parent('home');
    $trail->push('> Registration', 'http://raffir-mammoth-dev.com/registration', ['icon' => 'login-icon-white.png']);
});

// Home > User.Private
Breadcrumbs::for('user.private', function (BreadcrumbTrail $trail) {
    $trail->parent('home');
    $trail->push('> Administration', 'http://raffir-mammoth-dev.com/private', ['icon' => 'admin-icon-white.png']);
});

// Home > User.Private -> Create
Breadcrumbs::for('user.private/create', function (BreadcrumbTrail $trail) {
    $trail->parent('user.private');
    $trail->push('> Create new lot', 'http://raffir-mammoth-dev.com/private/create', ['icon' => 'add-icon-white.png']);
});