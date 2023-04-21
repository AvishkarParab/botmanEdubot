<!DOCTYPE html>
<html lang="en">
  <head>
    <title>About Page</title>
    <link rel="icon" type="image/x-icon" href="./assets/favicon.ico" />
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
  </head>

  <body>

  <x-header componentName="About"/>
    <h1 class="text-center">
        About Page
    </h1>

    <div class="text-danger text-center">
        <a href="{{URL::to('/about')}}">About</a>
        <br>
        <a href="{{URL::to('/user')}}">Home</a>
    </div>
  </body>
</html>



