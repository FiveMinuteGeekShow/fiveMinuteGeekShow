@extends('layouts.master')

@section('content')
<div class="wrapper">

    <h1><img src="/assets/img/logo.png" class="logo" alt="The Five-Minute Geek Show"></h1>

    <h2>YouTube:</h2>
    <a href="http://www.youtube.com/playlist?list=PLgJIx0-UaB9Q42Gthfg__0iynLVqcbXOQ"><h3>View Channel</h3></a>

    <h3>Episodes</h3>
    <ul class="videos-list">
    @foreach ($playlist->videos as $video)
        <li><a href="http://youtube.com/watch?v={{ $video->videoId }}" style="font-weight: bold;">{{ $video->snippet->title }}</a><br>{{ $video->snippet->description }}<br><br></li>
    @endforeach
    </ul>

    <hr>

    <h2>SoundCloud</h2>
    <p>I've applied to be a SoundCloud Podcaster, so eventually this will be an iTunes podcast. For now, they're online:</p>

    <p><img src="/assets/img/feed.png" style="width: 17px; height: 16px; margin-right: 0.25em;"><b>RSS feed for manual subscription:</b><br><a href="http://feeds.feedburner.com/FiveMinuteGeekShow">feeds.feedburner.com/FiveMinuteGeekShow</a></p>
    <p><b>Soundcloud:</b><br><a href="https://soundcloud.com/fiveminutegeekshow">soundcloud.com/fiveminutegeekshow</a></p>

    <h3>Episodes</h3>
    <ul class="videos-list">
    @foreach ($soundCloudTracks as $track)
        <li><a href="{{ $track->permalink_url }}" style="font-weight: bold;">{{ $track->title }}</a><br>{{ $track->description }}<br><br></li>
    @endforeach
    </ul>

    <hr>

    <h2>Twitter</h2>
    <p><a href="http://twitter.com/5minutegeekshow">@5minutegeekshow</a></p>

    <hr>

    <h2>Github</h2>
    <p><a href="https://github.com/mattstauffer/fiveMinuteGeekShow/">mattstauffer/fiveMinuteGeekShow</a></p>

</div>
@stop
