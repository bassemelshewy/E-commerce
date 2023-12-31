<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    <title>Update Product</title>
</head>

<body>
    <h2>Update Product</h2>
    <form action="{{ route('product.update', $product->id)}}" method="POST" enctype="multipart/form-data">
        @csrf
        @method('PUT')

        <input type="hidden" name="id" value="{{$product->id}}">

        <div class="form-row">
            <img src="{{ asset('uploads/' . $product->product_image) }}" alt="Product Image" width="200">
        </div>

        <div class="form-row">
            <label for="product_name">Category Name</label>
            <input type="text" name="product_name" value="{{$product->product_name}}">
        </div>
        @error('product_name')
            <div class="error-message">{{ $message }}</div>
        @enderror

        <div class="form-row">
            <label for="product_price">Product Price</label>
            <input type="number" min="0" name="product_price" value="{{$product->product_price}}">
        </div>
        @error('product_price')
            <div class="error-message">{{ $message }}</div>
        @enderror

        <div class="form-row">
            <label for="product_availability">Product Availability</label>
            <select name="product_availability" value="{{$product->product_availability}}">
                <option value="Available">Available</option>
                <option value="Unavailable">Unavailable</option>
            </select>
        </div>
        @error('product_availability')
            <div class="error-message">{{ $message }}</div>
        @enderror

        <div class="form-row">
            <label for="product_image">Product Image</label>
            <input type="file" name="product_image">
        </div>
        @error('product_image')
            <div class="error-message">{{ $message }}</div>
        @enderror

        <div class="form-row">
            <label for="category_id">Category ID</label>
            <input type="text" name="category_id" value="{{$product->category_id}}" readonly class="readonly">
        </div>
        @error('category_id')
            <div class="error-message">{{ $message }}</div>
        @enderror
        <button type="submit">Update</button>
    </form>
</body>

</html>
