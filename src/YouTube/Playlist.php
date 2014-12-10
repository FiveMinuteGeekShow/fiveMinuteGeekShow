<?php namespace FiveMinuteGeekShow\YouTube;

use Illuminate\Support\Collection;

class Playlist
{
	public $kind;
	public $etag;
	public $id;

	/**
	 * @var stClass
	 */
	public $snippet;
	public $privacyStatus;

	/**
	 * @var array
	 */
	public $videos;

	private function __construct(array $fields, $snippet, Collection $videos)
	{
		foreach ($fields as $key => $value) {
			$this->$key = $value;
		}

		// @todo: Convert to VOs
		$this->snippet = $snippet;
		$this->videos = $videos;
	}
	
	/**
	 * Create new object from MadCoda Playlist Response
	 * 
	 * @param  \stdClass $playlist
	 * @param  array     $videos
	 * @return static
	 */
	public static function fromMadcoda(\stdClass $playlist, array $videos)
	{
		$fields = [];
		
		foreach (['kind', 'etag', 'id'] as $key) {
			$fields[$key] = $playlist->$key;
		}

		$fields['privacyStatus'] = $playlist->status->privacyStatus;

		$videos = Video::collectionFromMadCoda($videos);

		return new static(
			$fields,
			$playlist->snippet,
			$videos
		);
	}

	/**
	 * Create new object from playlist ID
	 * 
	 * @param  string $playlistId
	 * @return static
	 */
	public static function fromPlaylistId($playlistId)
	{
		// This is a bit smelly: I'd prefer we instead inject the service in
		$youtubeService = \App::make('YouTubeService');

		$videos = $youtubeService->getPlaylistItemsByPlaylistId($playlistId);
		$playlist = $youtubeService->getPlaylistById($playlistId);

		return static::fromMadcoda(
			$playlist,
			$videos
		);
	}
}
