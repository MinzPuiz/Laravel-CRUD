<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <title>Creating Products</title>
    <style>
        h1, label{
            text-align: center;
            font-family:'Times New Roman', Times, serif;
            font-weight: bold;
        }
        .form-container{
            border: 1px solid #ddd; /* định dạng đường viền */
            border-radius: 5px; /* làm mềm góc */
            padding: 20px; /* tạo khoảng cách bên trong khung */
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1); /* tạo bóng cho khung */
            width: 400px; /* hoặc bất kỳ giá trị chiều rộng nào khác bạn muốn */
            margin: 0 auto; /* căn giữa form */
        }
        button{
            margin-top: 15px;
        }
    </style>
</head>
<body>
    <div class="container">
        <div class="col-md-3"></div>
        <div class="col-md-6 mx-auto">
            <h1>Edit a Product</h1>
            @if ($errors->any())
                <div class="alert alert-danger">
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif
            <div class="form-container">
                <form action="{{ route('product.update', ['product' => $product]) }}" method="post">
                    @method('PUT')
                    @csrf
                    <div class="form-group">
                        <label for="name">Product Name: </label>
                        <input type="text" class="form-control" name="name" placeholder="Enter Product Name" id="product-name" value="{{ $product->name }}" required>
                    </div>
                    <div class="form-group">
                        <label for="qty">Quantity: </label>
                        <input type="text" class="form-control" name="qty" placeholder="Enter Product QTY" id="product-qty" value="{{ $product->qty }}" >
                    </div>
                    <div class="form-group">
                        <label for="price">Price: </label>
                        <input type="text" class="form-control" name="price" placeholder="Enter Product Price" id="product-price" value="{{ $product->price }}" >
                    </div>
                    <div class="form-group">
                        <label for="description">Description: </label>
                        <input type="text" class="form-control" name="description" placeholder="Enter Product Price" id="product-description" value="{{ $product->description }}" >
                    </div>
                    <div>
                        <button type="submit" class="btn btn-primary">Update Product</button>
                    </div>
                </form>
            </div>
        </div>
        <div class="col-md-3"></div>
    </div>
</body>
</html>