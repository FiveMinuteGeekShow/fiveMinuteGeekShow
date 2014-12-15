<?php  namespace FiveMinuteGeekShow\SoundCloud;

use SoundCloud\Service as ApiCaller;

class TrackService
{
	/**
	 * @var ApiCaller
	 */
	private $api;

	public function __construct(ApiCaller $api)
	{
		$this->api = $api;
	}

	/**
	 * Get all tracks by a user
	 *
	 * @param $userId
	 * @return array
	 */
	public function getTracksByUser($userId)
	{
		$query = "users/$userId/tracks";
		$result = $this->api->get($query);

		return json_decode($result);
	}

	/**
	 * Get all tracks by a playlist
	 *
	 * @param $playlistId
	 * @return array
	 */
	public function getTracksByPlaylist($playlistId)
	{
		$query = "playlists/$playlistId";
		$result = $this->api->get($query);

		$playlist = json_decode($result);

		return $playlist->tracks;
	}

	/**
	 * Get all playlists by a user
	 *
	 * @param $userId
	 * @return array
	 */
	public function getPlaylistsByUser($userId)
	{
		$query = "users/$userId/playlists";
		$result = $this->api->get($query);

		return json_decode($result);
	}
}
