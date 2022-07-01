@include ('includes.header')
<body>
    <h1>Genres</h1>
        <div id="genrebox">  
            @foreach($genres as $genre)
            <a href="{{url('/songs', $genre->id)}}"><li>{{$genre->name}}</li></a>
            @endforeach
        </div>
</body>