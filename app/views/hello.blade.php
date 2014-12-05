<!doctype html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>The Five Minute Geek Show</title>
	<meta name="description" content="The Five-Minute Geek Show: Matt Stauffer, 5 minutes, often ish.">
	<meta name="author" content="Matt Stauffer">
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<style>
		@import url(//fonts.googleapis.com/css?family=Lato:700);

		body {
			margin:0;
			font-family:'Lato', sans-serif;
			text-align:center;
			color: #999;
		}

		.welcome {
			max-width: 90%;
			height: 200px;
			position: absolute;
			top: 50%;
			margin-top: -100px;
		}

		@media only screen and (min-width: 500px) {
			.welcome {
				left: 50%;
				margin-left: -250px;
				width: 500px;
			}
		}

		a, a:visited {
			text-decoration:none;
		}

		h1 {
			font-size: 32px;
			margin: 16px 0 0 0;
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
		<h1>The Five-Minute Geek Show</h1>
		
		<hr>

		<h2>YouTube:</h2>
		<a href="http://www.youtube.com/playlist?list=PLgJIx0-UaB9Q42Gthfg__0iynLVqcbXOQ"><h3>View Channel</h3></a>

		<h3>Episodes</h3>
		<ul class="videos-list">
			@foreach ($playlist->videos as $video)
				<li><a href="http://youtube.com/watch?v={{ $video->videoId }}">{{ $video->snippet->title }}</a><br>{{ $video->snippet->description }}</li>
			@endforeach
		</ul>
		</p>

		<hr>

		<h2>Github</h2>
		<p><a href="https://github.com/mattstauffer/fiveMinuteGeekShow/">mattstauffer/fiveMinuteGeekShow</a></p>
	</div>
</body>
</html>
