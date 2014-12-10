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
		$soundcloudUserId = 126321492;
//		$soundcloudPlaylistId = 1171437;

		$client = new Soundcloud\Service(getenv('SOUNDCLOUD_API_ID'), getenv('SOUNDCLOUD_API_SECRET'));

		// there HAS to be a better way to get this playlist
		$tracks = $client->get('users/126321492/tracks', array('tag' => 'theFiveMinuteGeekShow'));

		$playlist = FiveMinuteGeekShow\YouTube\Playlist::fromPlaylistId('PLgJIx0-UaB9Q42Gthfg__0iynLVqcbXOQ');

		return View::make('hello')
			->with('playlist', $playlist)
			->with('soundcloudTracks', json_decode($tracks));
	}

}
