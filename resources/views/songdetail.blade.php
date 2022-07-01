@include('includes.header')
@foreach ($song as $songdetail)
<h1>{{$songdetail->name}}</h1>
<h2>{{$songdetail->artist}}</h2>
<img src="{{$songdetail->image}}" width="500px" heigth="500px">
<p>Song Duration: {{$songdetail->duration}} seconds</p>
<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Praesent lobortis, erat tempus viverra auctor, velit enim faucibus ipsum, sit amet malesuada magna massa at tellus. Vestibulum eget vestibulum urna. Maecenas lobortis a nisi quis vestibulum. Quisque vel pulvinar eros. Orci varius natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Cras blandit dictum risus, a condimentum ante scelerisque vitae. Duis eu tincidunt erat, vitae vulputate eros. Vestibulum varius arcu eget consequat mollis. Integer vitae erat sem. Donec eu felis aliquet est pretium convallis.</p>
@endforeach