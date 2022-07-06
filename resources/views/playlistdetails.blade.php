@include('includes.header')
<body>
    <h1>{{$playlist[0]->name}}</h1>
    <p>Total time: {{$totalTime}}</p>
    @foreach($playlist[0]->songs as $song)
    <p>{{$song->name}} - {{$song->artist}} - {{gmdate("i:s", $song->duration)}}</p>
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