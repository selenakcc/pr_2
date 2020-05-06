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
        <form href="/questionnaires" method="post">
        
        @csrf

        <form>
  <div class="form-group">
    <label for="title">Title</label>
    <input name="title" type="text" class="form-control" id="title" aria-describedby="titleHelp" placeholder="Enter title">
    <small id="titleHelp" class="form-text text-muted">give title.</small>

    @error('title')
      <small class="text-danger">{{ $message }}</small>
    @enderror
  </div>
  <div class="form-group">
    <label for="purpose">Title</label>
    <input name="purpose" type="text" class="form-control" id="purpose" aria-describedby="purposeHelp" placeholder="Enter purpose">
    <small id="purposeHelp" class="form-text text-muted">give purpose.</small>
    @error('purpose')
      <small class="text-danger">{{ $message }}</small>
    @enderror
  
  </div>
  <button type="submit" class="btn btn-primary">create questionnaire</button>
</form>
        
        </form>
    </body>
</html>