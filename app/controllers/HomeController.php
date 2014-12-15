<?php

class HomeController extends BaseController
{
    public function showWelcome()
    {
        //		$soundCloudUserId = 126321492;
        $soundCloudPlaylistId = 63272990;

        $trackService = App::make('SoundCloudTrackService');

        $soundCloudTracks = $trackService->getTracksByPlaylist($soundCloudPlaylistId);

        $youtubePlaylistId = 'PLgJIx0-UaB9Q42Gthfg__0iynLVqcbXOQ';

        $playlist = FiveMinuteGeekShow\YouTube\Playlist::fromPlaylistId($youtubePlaylistId);

        return View::make('hello')
            ->with('playlist', $playlist)
            ->with('soundCloudTracks', $soundCloudTracks);
    }
}
