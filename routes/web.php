<?php

// @var \Laravel\Lumen\Routing\Router $router

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It is a breeze. Simply tell Lumen the URIs it should respond to
| and give it the Closure to call when that URI is requested.
|
*/

$router->get('/', function () use ($router) {
	return $router->app->version();
});

$router->get('key', 'ExampleController@generateKey');

$router->get('foo', 'ExampleController@fooExample');

$router->post('bar', 'ExampleController@barExample');

$router->get('user/{id}', function ($id) {
	return 'User dengan id : ' . $id;
});

$router->get('post/{postId}/comment/{commentId}', function ($postId, $commentId) {
	return 'Post dengan id : ' . $postId . ' dan comment dengan id : ' . $commentId;
});

$router->get('optional[/{param}]', function ($param = null) {
	return $param;
});

$router->get('profile', ['as' => 'route.profile', function () {
	return route('route.profile');
}]);

$router->group(['prefix' => 'admin', 'middleware' => 'age'], function ($router) {
	$router->get('home', function () {
		return 'Home Admin, Old enough';
	});

	$router->get('profile', function () {
		return 'Profile admin';
	});
});

$router->get('fail', ['as' => 'fail', function () {
	return 'Not yet mature';
}]);
