<!DOCTYPE html>
<html>
<head>
    <title>Gadget Products</title>
    <link rel="stylesheet" href="{{ asset('css/styles.css') }}">
</head>
<body>

<div class="container">
    <h1>Gadget Product List</h1>

    @foreach($products as $product)
        <div class="card">
            <h3>{{ $product['name'] }}</h3>
            <p><strong>Brand:</strong> {{ $product['brand'] }}</p>
            <p><strong>Price:</strong> {{ $product['price'] }}</p>
        </div>
    @endforeach

</div>

</body>
</html>