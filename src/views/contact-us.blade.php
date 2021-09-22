<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>

<body>
    <h1>Hello Contact PHP 😍</h1>

    <form action="{{ route("contact") }}" method="post">
        @csrf
        <input type="text" name="name" placeholder="Your Name...">
        <input type="email" name="email" placeholder="Your Email...">
        <textarea name="message" id="message" ></textarea>
        <button>Submit</button>
    </form>
</body>

</html>
