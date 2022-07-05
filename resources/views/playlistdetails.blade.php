@include('includes.header')
<body>
    <h1>{{$playlist->name}}</h1>
    @foreach($playlist as $song)
    <p>{{$song->name}} - {{$song->artist}}</p>
    @endforeach
</body>