<!DOCTYPE html>
<html>

<head>
    <title>Shopping Cart</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
        }

        header {
            background-color: #333;
            color: #fff;
            padding: 10px;
            text-align: center;
        }

        .container {
            max-width: 1200px;
            margin: 0 auto;
            padding: 20px;
        }

        .cart {
            display: flex;
            flex-direction: column;
            align-items: center;
            padding: 20px;
            background-color: #f5f5f5;
            border-radius: 10px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.2);
        }

        .cart h2 {
            margin-bottom: 20px;
        }

        .cart table {
            width: 100%;
            border-collapse: collapse;
        }

        .cart th,
        .cart td {
            padding: 10px;
            text-align: left;
        }

        .cart th {
            background-color: #333;
            color: #fff;
        }

        .cart tr:nth-child(even) {
            background-color: #f9f9f9;
        }

        .cart tr:hover {
            background-color: #ddd;
        }

        .cart td:nth-child(2) {
            width: 40%;
        }

        .cart td:nth-child(3) {
            width: 15%;
            text-align: center;
        }

        .cart td:nth-child(4) {
            width: 15%;
            text-align: center;
        }

        .cart td:nth-child(5) {
            width: 15%;
            text-align: center;
        }

        .cart td:nth-child(6) {
            width: 15%;
            text-align: center;
        }

        .cart input[type="number"] {
            width: 50px;
            text-align: center;
            border: none;
            border-radius: 5px;
            background-color: #f5f5f5;
        }

        .cart button {
            padding: 10px 20px;
            background-color: #333;
            color: #fff;
            border: none;
            border-radius: 5px;
            cursor: pointer;
        }

        .cart button:hover {
            background-color: #555;
        }
    </style>
</head>

<body>
    <header>
        <h1>Shopping Cart</h1>
    </header>
    <div class="container">
        <div class="cart">
            <h2>Your Cart</h2>
            <table>
                <thead>
                    <tr>
                        <th>Item</th>
                        <th>Description</th>
                        <th>Price</th>
                        <th>Quantity</th>
                        <th>Total</th>
                        <th>Remove</th>
                    </tr>
                </thead>
                <tbody>
                    @if ($products)
                        @foreach ($products as $product)
                            <tr>
                                <td>{{$loop->index+1}}</td>
                                <td>
                                    <p>{{$product->name}}</p>
                                    <select>
                                        @foreach ($sizes as $size)
                                            @if ($size == $product['size'])
                                                <option selected value="{{ $size }}">{{ $size }}</option>
                                            @else
                                                <option value="{{ $size }}">{{ $size }}</option>
                                            @endif
                                        @endforeach
                                    </select>
                                </td>
                                <td>${{ $product['price'] }}</td>
                                <td><input type="number" value="1" disabled></td>
                                <td>${{ $product['price'] }}</td>
                                <td><a href="{{ route('cart.removeItem', $loop->index) }}">
                                        <button>Remove</button>
                                    </a></td>
                            </tr>
                        @endforeach
                    @endif

                </tbody>
                <tfoot>
                    @if ($products)
                        <tr>
                            <td colspan="4" align="right">Subtotal:</td>
                            <td>${{ $subTotal }}</td>
                            <td></td>
                        </tr>
                        <tr>
                            <td colspan="4" align="right">Tax:</td>
                            <td>${{ $tax }}</td>
                            <td></td>
                        </tr>
                        <tr>
                            <td colspan="4" align="right">Shipping:</td>
                            <td>${{ $shipping }}</td>
                            <td></td>
                        </tr>
                        <tr>
                            <td colspan="4" align="right">Total:</td>
                            <td>${{ $total }}</td>
                            <td></td>
                        </tr>
                    @endif
                </tfoot>
            </table>
            <div style="margin-top:10px">
                <button class="checkout-btn">Checkout</button>
                <a href="{{ route('home') }}" class="checkout-btn">Back</a>
            </div>
        </div>
        <script src="{{ asset('assets/js/cart.js') }}"></script>
</body>

</html>
