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
        <form href="/questionnaires/{{ $questionnaire->id }}/questions" method="post">
        
        @csrf

        <form>
  <div class="form-group">
    <label for="question">question</label>
    <input  name="question[question]" type="text" class="form-control" 
            value="{{ old('question.question') }}"
            id="question" aria-describedby="questionHelp" placeholder="Enter question">
    <small  id="questionHelp" class="form-text text-muted">ask simple questions.</small>

    @error('question.question')
      <small class="text-danger">{{ $message }}</small>
    @enderror
  </div>
  
  <div class="form-group">
    <fieldset>
        <legend>Choices</legend>
        <small  id="choicesHelp" class="form-text text-muted">give choices.</small>

        <div>
        <div class="form-group">
            <label for="answer1">Choice 1</label>
            <input  name="answers[][answer]" type="text" class="form-control" 
                    value="{{ old('answers.0.answer') }}"
                    id="answer1" aria-describedby="choicesHelp" placeholder="Enter choice 1">
            
    @error('answers.0.answer')
      <small class="text-danger">{{ $message }}</small>
    @enderror
        </div>
        </div>

        <div>
        <div class="form-group">
            <label for="answer2">Choice 1</label>
            <input  name="answers[][answer]" type="text" class="form-control" 
                    value="{{ old('answers.1.answer') }}"
                    id="answer2" aria-describedby="choicesHelp" placeholder="Enter choice 2">
            
    @error('answers.1.answer')
      <small class="text-danger">{{ $message }}</small>
    @enderror
        </div>
        </div>

        <div>
        <div class="form-group">
            <label for="answer3">Choice 1</label>
            <input  name="answers[][answer]" type="text" class="form-control" 
                    value="{{ old('answers.2.answer') }}"
                    id="answer3" aria-describedby="choicesHelp" placeholder="Enter choice 3">
            
    @error('answers.2.answer')
      <small class="text-danger">{{ $message }}</small>
    @enderror
        </div>
        </div>

        <div>
        <div class="form-group">
            <label for="answer4">Choice 1</label>
            <input  name="answers[][answer]" type="text" class="form-control" 
                    value="{{ old('answers.3.answer') }}"
                    id="answer4" aria-describedby="choicesHelp" placeholder="Enter choice 4">
            
    @error('answers.3.answer')
      <small class="text-danger">{{ $message }}</small>
    @enderror
        </div>
        </div>

    </fieldset>
  </div>

  <button type="submit" class="btn btn-primary">add question</button>
</form>
        
        </form>
    </body>
</html>