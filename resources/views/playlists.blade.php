@include('includes.header')
<body>
    @foreach($playlists as $playlist)
    <a href="{{url('/playlistdetails', $playlist->id)}}">
        <div>
            <h1>{{$playlist->name}}</h1>
            {{$playlist->songs}}
        </div>
    </a>
    @endforeach
</body>