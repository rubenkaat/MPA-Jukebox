@include('includes.header')
<body>
    @foreach($playlist as $song)
    {{$song->name}}
    @endforeach
</body>
