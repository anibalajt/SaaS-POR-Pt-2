<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <!-- form to create cars -->
    <form action="/cars" method="post">
        @csrf
        <div>
            <label for="code">Code</label>
            <input type="text" name="code" id="code">
        </div>
        <div>
            <label for="manufacturer">Manufacturer</label>
            <input type="text" name="manufacturer" id="manufacturer">
        </div>
        <div>
            <label for="model">Model</label>
            <input type="text" name="model" id="model">
        </div>
        <div>
            <label for="price">Price</label>
            <input type="text" name="price" id="price">
        </div>
        <button type="submit">Create</button>
    </form>


</body>

</html>