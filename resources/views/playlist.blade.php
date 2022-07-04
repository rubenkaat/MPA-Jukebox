@include('includes.header')
<body>
    @foreach($playlist as $song)
    {{dd($song)}}
    <div style="border-style: double;">
        <h1>{{$song->name}} - {{$song->artist}}</h1>
        <div class="image-box">
            <img src="{{$song->image}}" width="300px" height="300px">
        </div>
        <a href="{{url('/deleteFromPlaylist', $song->id)}}" class="btn btn-danger">Delete from Playlist</a>
    </div>
    @endforeach
</body>
