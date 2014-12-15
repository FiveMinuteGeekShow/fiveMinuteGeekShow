<?php namespace FiveMinuteGeekShow\SoundCloud;

use Illuminate\Support\ServiceProvider;

class SoundCloudProvider extends ServiceProvider
{
	/**
	 * Register bindings
	 */
	public function register()
	{
		$this->app->bindShared('SoundCloudService', function() {
			return new \Soundcloud\Service(
				getenv('SOUNDCLOUD_API_ID'),
				getenv('SOUNDCLOUD_API_SECRET')
			);
		});

		$this->app->bindShared('SoundCloudTrackService', function() {
			return new TrackService(app('SoundCloudService'));
		});
	}
}
