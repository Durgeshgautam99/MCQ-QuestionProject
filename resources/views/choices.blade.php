<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Choice Question</title>
    <style>
        form{
            width: 50%;
            margin: auto;
            border: 1px solid black;
            padding: 3%;
            padding-top:1%;
        }
        h2{
            text-align: center;
        }
        #button{
            padding-left: 17px;
            padding-right: 17px;
            padding-top: 7.5px;
            padding-bottom: 7.5px;
            border: 1px solid black;
            color: #ffffff;
            border-radius: 10px;
            background-color: blue;
            text-decoration: none;
            margin-left: 42%;
        }
    </style>
</head>
<body>
    <form action="submitted" method="post">
    @csrf
        <h2>Choices Answer</h2>
        @foreach($data as $k=>$v)
        @if(!empty($v->q_option))
        <p>{{$v->question}}</p><br>
        @foreach($v->q_option as $ke=>$val)
        <input type="radio" name="ques[{{$v->id}}]" value="{{$val->id}}" required><label for="male">{{$val->option}}</label><br><br>
        @endforeach
        @endif
        @endforeach
        <br><br>
        <button type="submit" id="button">Submit</button>
    </form>
</body>
</html>