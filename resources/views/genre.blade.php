@include ('includes.header')
<body>
    <h1>Jukebox</h1>
        <div id="genrebox">
            
            @foreach($genres as $genre)
            <li>{{$genre->name}}</li>
            @endforeach
        </div>
</body>