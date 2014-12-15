<?php namespace FiveMinuteGeekShow\YouTube;

use Illuminate\Support\ServiceProvider;

class YouTubeProvider extends ServiceProvider
{
    /**
     * Register bindings
     */
    public function register()
    {
        $this->app->bindShared('YouTubeService', function() {
            return new \Madcoda\Youtube([
                'key' => getenv('YOUTUBE_API_KEY')
            ]);
        });
    }
}
