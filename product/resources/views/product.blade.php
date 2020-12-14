<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Product</title>
</head>
<body>
<h1>Product</h1>

<form method="post">
    <p>@csrf</p>
    <div class="login">
        <p><b>Product</b>
            <input type="text" name="product" placeholder="status"></p>
        <p><b>List Price</b>
            <input type="text" name="list" placeholder="List Price">
        </p>
        <p><b>Discount Percent</b>
            <input type="text" name="discount" placeholder="Discount Percent">
        </p>
        <input type="submit" value="check">
    </div>
</form>
</body>
</html>
