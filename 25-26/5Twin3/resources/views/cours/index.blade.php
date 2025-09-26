<h1>Liste des cours</h1>
<ul>
    @foreach($cours as $c)
        <li>{{ $c->name }} - {{ $c->description }}</li>
    @endforeach
</ul>
