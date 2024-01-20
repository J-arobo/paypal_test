<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Laravel PayPal Intergration</title>
</head>
<body>
    <h2>Product: Phone</h2>
    <h3>Price</h3>

    <form method="POST" action="{{url('paypal')}}" >
        @csrf
        <input type="hidden" name="price" value="10">
        <input type="hidden" name="product_name" value="phone">
        <input type="hidden" name="product_quantity" value="1">
        <button type="submit">Pay with paypal</button>
    </form>
    

</body>
</html>