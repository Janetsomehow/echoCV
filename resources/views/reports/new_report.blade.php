<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
      <meta charset="utf-8">
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <title>New Report</title>
      <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
      <!-- <link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous"> -->
      <!-- Styles -->
      <link href="{{ asset('css/sidebar.css') }}" rel="stylesheet">
      <link href="{{ asset('css/report.css') }}" rel="stylesheet">
      <!-- Fonts -->
      <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
      <link ‎href="https://fonts.googleapis.com/css?family=europa:200,600" rel="stylesheet">

      <!-- Scripts -->
      <script src="{{ asset('js/app.js') }}" defer></script>
  </head>
  <body>
    <div class="wrapper">

  @include('layouts.sidebar')
    </div>
    <main class="wholeContent">

      <section class="newReport">
        <a href="/reports" class="btn btn-default">Back</a>
        <!-- <button type="button" name="button" class="btn btn-default">Back</button> -->
        <div class="">
          <button type="submit" name="button" class="btn btn-default">Save & Close</button>
          <button type="submit" name="button" class="btn btn-primary">Send now</button>
        </div>
      </section>
      <textarea name="name"></textarea>
    </main>
    </body>
</html>
