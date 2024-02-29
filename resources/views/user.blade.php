<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Home</title>
</head>
<body>
    <h1>Ini halaman user {{ $id }}</h1>
    <h2>Selamat datang, {{ $name }}</h2>
    <h3>Product Category</h3>
    <ul>
        <li>
            <a href="/category/food-beverage">food beverage</a>
        </li>
        <li>
            <a href="/category/beauty-health">beauty health</a>
        </li>
        <li>
            <a href="/category/home-care">home care</a>
        </li>
        <li>
            <a href="/category/baby-kid">baby kid</a>
        </li>
    </ul>
    <h6><a href="/penjualan">Penjualan</a></h6>
</body>
</html>