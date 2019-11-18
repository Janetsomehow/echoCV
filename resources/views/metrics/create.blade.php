<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Create Metrics</title>
        <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
        <!-- <link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous"> -->
        <!-- Styles -->
        <link href="{{ asset('css/sidebar.css') }}" rel="stylesheet">
        <link href="{{ asset('css/report.css') }}" rel="stylesheet">
        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
        <link ‎href="https://fonts.googleapis.com/css?family=europa:200600" rel="stylesheet">

  </head>
  <body>
@include('layouts.sidebar')
      <main class="wholeContent">

        <section class="header">
          <div class="rep">Metrics</div>
          <button type="button" name="button" class="btn btn-primary">New Metric</button>
        </section>
        <form class="searchReport" action="" method="post">
          <input type="text" class="form-control form-group" placeholder="Search for metric">
          <button type="button" name="button"><img src={{ asset('css/icons/grsearch.png') }} /></button>
        </form>
        <section class="newMetr">
          <div class="newData">
            <a href="#"class="">+ New data source</a>
          </div><hr>
          <label for="">Custom</label>
          <div class="formMett custom">
            User provided metric
            <a href="#"class="btn btn-default">Create</a>
          </div>
            <label for="">Link</label>
              <div class="formG">
                <div class="formMett ">
                  <img src="{{ asset('css/icons/sheet.png') }}" />
                  Google Sheets
                  <a href="#"class="btn btn-default">Link</a>
                </div>
                <div class="formMett ">
                  <img src="{{ asset('css/icons/xero.png') }}" />
                  Xero
                  <a href="#"class="btn btn-default">Link</a>
                </div>
                <div class="formMett ">
                  <img src="{{ asset('css/icons/airtable.png') }}" />
                  Airtable
                  <a href="#"class="btn btn-default">Link</a>
                </div>
                <div class="formMett ">
                  <img src="{{ asset('css/icons/trello.png') }}" />
                  Trello
                  <a href="#"class="btn btn-default">Link</a>
                </div>
              </div>

        </section>
      </main>

  </body>
</html>
