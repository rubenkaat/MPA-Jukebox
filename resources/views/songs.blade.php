@include ('includes.header')
<body>
    @foreach($songs as $song)
    <a href="{{url('/songdetail', $song->id)}}">
        <h1>{{$song->name}} - {{$song->artist}}</h1>
        <div id="image_box" style="display: block">
            <img src="{{$song->image}}" width="300px" height="300px">
        </div>
    </a>
    <a href="{{url('/addToPlaylist', $song->id)}}">Add to Playlist</a>
    @endforeach
</body>