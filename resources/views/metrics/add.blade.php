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
        <!-- Scripts -->
        <script src="{{ asset('js/app.js') }}" defer></script>

  </head>
  <body>

    <div class="wrapper">

  @include('layouts.sidebar')
    </div>
      <main class="wholeContent">

        <section class="header">
          <!-- <div class="dropdownIcon">
            <a href="javascript:void(0);" onclick="dropdownMenu()">&#9776;</a>
          </div> -->
          <div class="rep">Metrics</div>

        </section>
        <form class="searchReport" action="" method="post">
          <input type="text" class="form-control form-group" placeholder="Search for metric">
          <button type="button" name="button"><img src={{ asset('css/icons/grsearch.png') }} /></button>
        </form>
        <section class="newMetr">
          <div class="newData">
            <a href="#"class="">+ New data source</a>
          </div><hr>
          <div>Google Sheets<a class="metricDel" href="#" style="display:none"><img src={{ asset('css/icons/metricdel.png') }} /></a>
          </div>

          <form class="" action="" method="post">
            <div class="forLabel">
              <label for="">Select spreadsheets</label>
              <select class="form-control bigSe" name="">
                <option value=""></option>
                <option value="First">First</option>
                <option value="Second">Second</option>
                <option value="Third">Third</option>
              </select>
              <label for="">Select sheets</label>
              <select class="form-control bigSe" name="">
                <option value=""></option>
                <option value="First">First</option>
                <option value="Second">Second</option>
                <option value="Third">Third</option>
              </select>
              <div class="bigSe">
                <div class="">
                  <label for="">Select rows(date and time period)</label>
                  <select class="form-control smallSe" name="">
                    <option value=""></option>
                    <option value="First">First</option>
                    <option value="Second">Second</option>
                    <option value="Third">Third</option>
                  </select>
                </div>
                <div class="">
                  <label for="">Select metrics column (name)</label>
                  <select class="form-control smallSe" name="">
                    <option value=""></option>
                    <option value="First">First</option>
                    <option value="Second">Second</option>
                    <option value="Third">Third</option>
                  </select>
                </div>
              </div>
            </div>
            <input type="submit" name="submit" value="Save" class="btn btn-primary btns">
            <!-- <input value="Cancel" class="btn btn-default btns btnCancel"> -->

            <button class="btn btn-default btns btnCancel"><a href="/create_metrics">Cancel</a></button>
            <!-- <a type="submit" href="/create_metrics" class="btn btn-default btns btnCancel">Cancel</a> -->

          </form>

        </section>
      </main>

  </body>
</html>
