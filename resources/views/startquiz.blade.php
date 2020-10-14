<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Start Quize</title>
    <style>
        body{
            background-color: #ccc;
        }
        form{
            width: 40%;
            margin: auto;
            margin-top: 6%;
            border: 1px solid #ccc;
            padding: 3%;
            padding-top:1%;
            box-shadow: 1px 1px 19px 6px rgba(0,0,0,0.75);
            font-family: arial;
        }
        #fill{
            padding-left: 17px;
            padding-right: 17px;
            padding-top: 7.5px;
            padding-bottom: 7.5px;
            border: 1px solid black;
            color: #ffffff;
            border-radius: 10px;
            background-color: blue;
            text-decoration: none;
            margin-left: 35%;
        }
    </style>
</head>
<body>
    <form action="">
        <h1>Welcome <span>{{$model->name}}</span></h1>
        <h2>Start the Quiz</h2>
        <p>Good luck!</p>
        <a href="questionpaper" id="fill">Start Quiz</a>
    </form>
</body>
</html>