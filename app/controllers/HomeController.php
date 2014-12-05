<?php

class HomeController extends BaseController {

	/*
	|--------------------------------------------------------------------------
	| Default Home Controller
	|--------------------------------------------------------------------------
	|
	| You may wish to use controllers instead of, or in addition to, Closure
	| based routes. That's great! Here is an example controller method to
	| get you started. To route to this controller, just add the route:
	|
	|	Route::get('/', 'HomeController@showWelcome');
	|
	*/

	public function showWelcome()
	{
		$playlist = FiveMinuteGeekShow\YouTube\Playlist::fromPlaylistId('PLgJIx0-UaB9Q42Gthfg__0iynLVqcbXOQ');

		return View::make('hello')
			->with('playlist', $playlist);
	}

}
