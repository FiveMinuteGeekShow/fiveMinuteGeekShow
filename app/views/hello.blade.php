<!doctype html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>The Five Minute Geek Show</title>
	<meta name="description" content="The Five-Minute Geek Show: Matt Stauffer, 5 minutes, twice a week.">
	<meta name="author" content="Matt Stauffer">
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<style>
		img {
		    max-width: 100%;
		}

		body {
		    border-top: 140px solid #cee7d8;
			color: #666;
			font-family: arial, sans-serif;
			margin: 0;
			text-align: center;
		}

		.welcome {
			margin: 5em auto;
            max-width: 500px;
			width: 90%;
		}

		.logo {
		    margin-top: -175px;
		    width: 561px;
		}

		a, a:visited {
			text-decoration:none;
		}

		hr {
		    background: #ccc;
		    border: none;
		    height: 1px;
		}

		.videos-list {
			text-align: left;
		}
	</style>

	<script>
		(function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
		(i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
		m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
		})(window,document,'script','//www.google-analytics.com/analytics.js','ga');

		ga('create', 'UA-40114814-4', 'auto');
		ga('send', 'pageview');
	</script>
</head>
<body>
	<div class="welcome">
		<h1><img src="/assets/img/logo.png" class="logo" alt="The Five-Minute Geek Show"></h1>
		
		<h2>YouTube:</h2>
		<a href="http://www.youtube.com/playlist?list=PLgJIx0-UaB9Q42Gthfg__0iynLVqcbXOQ"><h3>View Channel</h3></a>

		<h3>Episodes</h3>
		<ul class="videos-list">
			@foreach ($playlist->videos as $video)
				<li><a href="http://youtube.com/watch?v={{ $video->videoId }}" style="font-weight: bold;">{{ $video->snippet->title }}</a><br>{{ $video->snippet->description }}<br><br></li>
			@endforeach
		</ul>
		</p>

		<hr>

		<h2>SoundCloud</h2>
		<p>I've applied to be a SoundCloud Podcaster, so eventually this will be an iTunes podcast. For now, they're online:</p>

		<p><a href="https://soundcloud.com/fiveminutegeekshow">soundcloud.com/fiveminutegeekshow</a></p>

		<hr>

		<h2>Twitter</h2>
		<p><a href="http://twitter.com/5minutegeekshow">@5minutegeekshow</a></p>

		<hr>

		<h2>Github</h2>
		<p><a href="https://github.com/mattstauffer/fiveMinuteGeekShow/">mattstauffer/fiveMinuteGeekShow</a></p>
	</div>
</body>
</html>
