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
        <h1>{{ $questionnaire->title }}</h1>

        <form action="/surveys/{{ $questionnaire->id }}-{{ Str::slug($questionnaire->title) }}" method="post">
            @csrf

            @foreach($questionnaire->questions as $key => $question)
            <div class="card mt-4">
        <div class="card-header"><strong>{{ $key + 1 }}</strong>{{ $question->question }}</div>
        <div class="card-body">
        @error('responses.'. $key . '.answer_id')
            <small class="text-danger">{{ $message }}</small>
        @enderror
        <ul class="list-group">
            @foreach($question->answers as $answer)
                <label for="answer{{ $answer->id }}">
                <li class="list-group-item">
                    <input type="radio" name="responses[{{ $key }}][answer_id]" id="answer{{ $answer->id }}"
                    {{ (old('responses.'. $key . '.answer_id') == $answer->id) ? 'checked' : '' }}
                    class="mr-2" value="{{ $answer->id }}">
                    {{ $answer->answer }}

                    <input type="hidden" name="responses[{{ $key }}][question_id]" value="{{ $question->id }}"></input>
                </li>
                </label>
            @endforeach
        </ul>
        </div>
        </div>
            @endforeach      

  <div class="form-group">
    <label for="name">Your name</label>
    <input name="survey[name]" type="text" class="form-control" id="name" aria-describedby="nameHelp" placeholder="Enter name">
    <small id="nameHelp" class="form-text text-muted">give name.</small>

    @error('name')
      <small class="text-danger">{{ $message }}</small>
    @enderror
  </div>
  <div class="form-group">
    <label for="email">Email</label>
    <input name="survey[email]" type="email" class="form-control" id="email" aria-describedby="emailHelp" placeholder="Enter email">
    <small id="emailHelp" class="form-text text-muted">give email.</small>
    @error('email')
      <small class="text-danger">{{ $message }}</small>
    @enderror
  
  
    <button class="btn btn-dark" type="submit">submit survey</button>

  </div>

  </form


    </body>
</html>