@include('includes.header')
<body>
    <h1>{{$playlist[0]->name}}</h1>
    <p>Total time: {{$totalTime}}</p>
    @foreach($playlist[0]->songs as $song)
    <p>{{$song->name}} - {{$song->artist}} - {{gmdate("i:s", $song->duration)}}</p>
    @endforeach
</body>