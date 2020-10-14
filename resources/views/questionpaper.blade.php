<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Question Paper</title>
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
        h2{
            text-align: center;
        }
        #create{
            padding-left: 17px;
            padding-right: 17px;
            padding-top: 7.5px;
            padding-bottom: 7.5px;
            border: 1px solid blue;
            color: #ffffff;
            border-radius: 10px;
            background-color: blue;
            text-decoration: none;
            margin-left: 40%;
        }
    </style>
</head>
<body>
    <form action="questionsubmit" method="POST">
        @csrf
        <h2>your choice</h2>
        @foreach($data as $k=>$v)
        @if(!empty($v->q_option))
        <p>{{$v->question}}</p><br>
        @foreach($v->q_option as $ke=>$val)
        <input type="radio" name="ques[{{$v->id}}][]" value="{{$val->id}}" required><label for="male">{{$val->option}}</label><br><br>
        @endforeach
        @endif
        @endforeach
        <button type="submit" id="create">Submit</button>
    </form>
    </form>
</body>
</html>