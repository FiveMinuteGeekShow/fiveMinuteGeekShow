<?php  namespace FiveMinuteGeekShow\SoundCloud;

use Exception;
use Soundcloud\Exception\InvalidHttpResponseCodeException;
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
        $result = $this->callQuery($query);

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
        $result = $this->callQuery($query);

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
        $result = $this->callQuery($query);

        return json_decode($result);
    }

    /**
     * Call a query
     *
     * @param string $query
     * @throws InvalidHttpResponseCodeException
     * @throws Exception if HTTP response code has a custom exception we want to throw
     * @return string JSON
     */
    private function callQuery($query)
    {
        try {
            return $this->api->get($query);
        } catch (InvalidHttpResponseCodeException $e) {
            switch ($e->getHttpCode()) {
                case 0:
                    throw new Exception('No Internet access.', $e->getCode(), $e);
                    break;
                default:
                    throw $e;
            }
        }
    }
}
