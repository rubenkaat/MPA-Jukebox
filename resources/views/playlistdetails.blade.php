@include('includes.header')
<body>
    <h1>{{$playlist[0]->name}}</h1>
    <form action="/editPlaylistName" method="GET">
        @csrf
        <input type="hidden" name="playlistId" value="{{$playlist[0]->id}}">
        <input type="text" name="name" placeholder="enter new name">
        <input type="submit">
    </form>
    <p>Total time: {{$totalTime}}</p>
    @foreach($playlist[0]->songs as $song)
    <hr>
    <p>{{$song->name}} - {{$song->artist}} - {{gmdate("i:s", $song->duration)}}</p>
    <a href="{{route('deleteSongFromPlaylist', [$song->id, $playlist[0]->id])}}">Delete from Playlist</a>
    <hr>
    @endforeach
    <hr>
    @foreach($songs as $song)
    <a href="{{url('/songdetail', $song->id)}}">
        <h1>{{$song->name}} - {{$song->artist}}</h1>
        <div id="image_box" style="display: block">
            <img src="{{$song->image}}" width="300px" height="300px">
        </div>
    </a>
    <a href="{{route('addToPlaylist', [$song->id, $playlist[0]->id])}}">Add to Playlist</a>
    @endforeach
</body>