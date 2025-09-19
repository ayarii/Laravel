<h1>Add a new product</h1>
Le prix est: {{ $price }}
@if ($price >0 )
    <p>test 1</p>

@elseif ($price == 0)
    <p>test 2</p>
@else
    <p>test 3</p>
@endif
