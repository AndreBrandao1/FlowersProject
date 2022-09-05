<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Insert Flower</title>
</head>

<body>
    <form method="post">
        @csrf
        <input type="text" name="nameInp" placeholder="Insert the flower Name">
        <input type="text" name="priceInp" placeholder="Insert the flower Price">
        <input type="submit" name="priceInp" value="Insert">
    </form>

</body>

</html>
