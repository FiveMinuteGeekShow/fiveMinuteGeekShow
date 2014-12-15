<?php namespace FiveMinuteGeekShow\YouTube;

use Illuminate\Support\Collection;

class Video
{
    public $kind;
    public $etag;
    public $id;
    public $videoId;
    public $privacyStatus;

    /**
     * @var stClass
     */
    public $snippet;

    private function __construct(array $fields, $snippet)
    {
        foreach ($fields as $key => $value) {
            $this->$key = $value;
        }

        // @todo: Convert to VOs
        $this->snippet = $snippet;
    }

    /**
     * Create new object from MadCoda Video Response
     *
     * @param  \stdClass $video
     * @return static
     */
    public static function fromMadcoda(\stdClass $video)
    {
        $fields = [];

        foreach (['kind', 'etag', 'id'] as $key) {
            $fields[$key] = $video->$key;
        }

        $fields['videoId'] = $video->contentDetails->videoId;
        $fields['privacyStatus'] = $video->status->privacyStatus;

        return new static(
            $fields,
            $video->snippet
        );
    }

    /**
     * Return a collection of videos from an array of Madcode Stdclass
     *
     * @param  stdClass[]  $videos
     * @return Collection of statics
     */
    public static function collectionFromMadcoda(array $videos)
    {
        $collection = new Collection;

        foreach ($videos as $video) {
            $collection->push(static::fromMadcoda($video));
        }

        return $collection;
    }
}
