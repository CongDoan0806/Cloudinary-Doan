<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <form action="upload" method="post" enctype="multipart/form-data">
        @csrf
        <input type="file" name="file" id="file">
        <button type="submit">Upload</button>
    </form>
    <img src="https://res.cloudinary.com/dprawkbjt/image/upload/v1747296544/una3yosrwyqdkcnbjebt.jpg" alt="">
</body>
</html>