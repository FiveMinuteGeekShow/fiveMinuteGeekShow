@extends('layouts.master')

@section('content')
<div class="wrapper">
    <h1>Admin stuff</h1>

    <h2>All playlists for this user</h2>

    <table>
	<tr><th>Title</th><th>ID</th></tr>
    @foreach ($playlists as $playlist)
	<tr><td>{{ $playlist->title }}</td><td>{{ $playlist->id }}</td></tr>
    @endforeach
    </table>
    </div>
@stop
