<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">

        <link rel="stylesheet" href="css/navbar-styles.css">
        <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
        <link href="//netdna.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">

        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
        <script src="//netdna.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>
        <script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
        
        <title>Starter Rijschool</title>
    </head>
    <body>

        <div>{{ $questionnaire->title }}</div>
        <a class="btn btn-dark" href="/questionnaires/{{ $questionnaire->id }}/questions/create">add new question</a>
        <a class="btn btn-dark" href="/surveys/{{ $questionnaire->id }}-{{ Str::slug($questionnaire->title) }}">take survey</a>
        @foreach($questionnaire->questions as $question)
        <div class="card mt-4">
        <div class="card-header">{{ $question->question }}</div>
        <div class="card-body">
        <ul class="list-group">
            @foreach($question->answers as $answer)
                <li class="list-group-item">{{ $answer->answer }}</li>
            @endforeach
        </ul>
        </div>
        </div>
        @endforeach
    </body>
</html>