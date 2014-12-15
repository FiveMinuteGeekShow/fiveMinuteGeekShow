<?php

class AdminController extends BaseController
{
    public function showSoundcloudPlaylists()
    {
        $soundCloudUserId = 126321492;

        $trackService = App::make('SoundCloudTrackService');

        $playlists = $trackService->getPlaylistsByUser($soundCloudUserId);

        return View::make('admin.playlists')
            ->with('playlists', $playlists);
    }
}
