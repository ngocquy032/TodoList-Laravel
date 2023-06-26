<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<style>
    body{
        text-align: center
    }
</style>

<body>

    <h1>Product Details</h1>
    <form action="/show">
            <p><strong>Name:</strong> {{ $product->name }}</p>
            <p ><strong>Color:</strong> {{ $product->color }}</p>
            <p><strong>Weight:</strong> {{ $product->weight }}</p>
            <p><strong>Price:</strong> {{ $product->price }}</p>
    </form>

    {{-- <a href="index.php">Back to Product List</a> --}}
    <button type="button" onclick="window.location='{{ '/' }}'">Exit</button>


</body>

</html>
