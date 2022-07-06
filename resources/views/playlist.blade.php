@include('includes.header')
<body>
    @if(isset($playlist))
    <p>total time: {{$totalTime}}</p>
    @foreach($playlist as $song)
    <div style="border-style: double;">
        <h1>{{$song->name}} - {{$song->artist}}</h1>
        <div class="image-box">
            <img src="{{$song->image}}" width="300px" height="300px">
        </div>
        <a href="{{url('/deleteFromPlaylist', $song->id)}}" class="btn btn-danger">Delete from Playlist</a>
    </div>
    @endforeach
    <form action='/savePlaylist' method='get'>
        <input type="text" placeholder="enter playlist name" name="name">
        <input class="btn btn-success" type="submit" value="Save">
    </form>
    @endif
</body>