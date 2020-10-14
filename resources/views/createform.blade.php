<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Create Form</title>
    <style>
    body{
        background-color: #ccc;
    }
        form{
            width: 40%;
            margin: auto;
            border: 1px solid black;
            padding: 3%;
            padding-top:1%;
        }
        h1{
            margin: 0%;
            padding: 0%;
            margin-bottom: 1%;
            text-align: center; 
        }
        p{
            margin:0%;
        }
        h2{
            text-align: center; 
        }
       
    </style>
</head>
<body>
<form action="submit" method="post">
        @csrf
        <h1>Create Form</h1>
        <label for="name">Full Name</label>
        <input type="text" name="name"><br><br>
        <label for="form_id">ID</label>
        <input type="text" name="form_id"><br><br><br><br>
        <button type="submit">Create</button>
    </form>
</body>
</html>