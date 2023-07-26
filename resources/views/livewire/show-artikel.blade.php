<div>
    {{-- @dump($artikels) --}}
    @foreach ($artikels as $artikel)
    <h1>{{ $artikel->title }}</h1>
    <p>{{ $artikel->id }}</p>
    <p>{{ $artikel->category }}</p>
    <p>{{ $artikel->is_publised }}</p>

    <a href="{{$artikel->id}}">show</a>
    <a href="edit/{{$artikel->id}}">Edit</a>

    @endforeach
</div>
