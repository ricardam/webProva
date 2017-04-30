<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('/', function () {
    return view('index');
});

Route::get('missatges/add', function () {
    return view('missatges.add');
});

Route::get('reserves/add', function () {
    return view('reserves.add');
});

Route::get('cases/add', function () {
    return view('cases.add');
});

Route::get('quisom/add', function () {
    return view('quisom.add');
});

Route::get('afegeix/add', function () {
    return view('afegeix.add');
});

Route::get('signUp/add', function () {
    return view('signUp.add');
});

Route::get('login/add', function () {
    return view('login.add');
});






/*Route::get('llibres', function () {
	$llibres = App\Llibre::all();
	return view('llibres.index')->with('llibres', $llibres);
});

Route::get('llibres/temes', function () {
	$temes = App\Tema::all();
	return view('temes.index')->with('temes', $temes);
});

Route::get('llibres/crea', function () {
	$temes = App\Tema::all()->lists('nom', 'nom');
    return view('llibres.add2')->with('temes', $temes);
});

Route::get('llibres/{id}', function ($id) {
	$llibre = App\Llibre::find($id);
	return view('llibres.show')->with('llibre', $llibre);
});

Route::get('llibres/temes/{id}', function ($id) {
	$tema = App\Tema::find($id);
	return view('temes.show')->with('tema', $tema);
});

Route::post('llibres', function () {
	$llibre = App\Llibre::create(Request::all());
	return redirect('llibres/'.$llibre->id);
});*/


/*Route::get('/llibres/{id}', function ($id) {
    return view('llibre-id');
})->where('id','[0-9]+');