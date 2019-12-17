{{-- @extends('layouts.sidbar')
  @section('content')

      
@stop --}}

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Account Settings</title>
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    {{-- <link ‎href="https://fonts.adobe.com/fonts/europa" rel="stylesheet"> --}}
    <link rel="stylesheet" href="{{ asset('css/report.css') }}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.11.2/css/all.min.css">
    <link href="https://fonts.googleapis.com/css?family=Nunito:300,600" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('css/files.css') }}">
    <link href="{{ asset('css/sidebar.css') }}" rel="stylesheet">
    {{-- <link rel="stylesheet" href="{{ asset('css/account.css') }}" rel="stylesheet"> --}}
    <script src="{{ asset('js/app.js') }}" defer></script>
</head>
<body>

      <section class="onboard"> 
        <div class="col-md-10 mt-5 mb-5 p-5">

          <div class="empty text-center">
              <img src="{{ asset('css/icons/company.png') }}"  class="mx-auto d-block"  />
              <h3>Build your Dashboard</h3>
              <p>Your latest activity and report will automatically
              be shown here. Click the button below to create a chart</p>
            <a href="/add_company"> <button type="button" name="button" class="btn btn-primary">New Company</button></a>
          </div>
        </div>

      </section>


      <div class="wrapper">

            @include('layouts.sidbar')
        </div>
    
</body>
</html>