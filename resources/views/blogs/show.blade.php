<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="../app1.css">
</head>



<body>
    <div class="continer">
 

<h1>{{$blog->title}}</h1>

<p>Intro: {!!$blog->intro!!} </p>

<p>Body: {!!$blog->body!!} </p>

<p>Public date: {!!$blog->create_at!!} </p>
     
    </div>
</body>
</html>