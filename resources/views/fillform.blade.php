<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Fill Form</title>
    <style>
    body{
        background-color: #ccc;
    }
        form{
            width: 40%;
            margin: auto;
            border: 1px solid #ccc;
            padding: 3%;
            padding-top:1%;
            margin-top: 6%;
            box-shadow: 1px 1px 19px 6px rgba(0,0,0,0.75);
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
        #fill{
            padding-left: 17px;
            padding-right: 17px;
            padding-top: 7.5px;
            padding-bottom: 7.5px;
            border: 1px solid blue;
            color: #ffffff;
            border-radius: 10px;
            font-size: 16px;
            background-color: blue;
            text-decoration: none;
            margin-left: 20%;
            margin-top:2%;
        }
       
    </style>
</head>
<body>
       <form action="openquestion" method="post">
        {{csrf_field()}}
        <h2>Fill Form</h2>
        <label for="form_id">ID</label>
        <input type="text" name="form_id"><br><br>
        <button type="submit" id="fill">Next</button>
    </form>
</body>
</html>