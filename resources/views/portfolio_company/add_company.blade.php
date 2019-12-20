<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
      <meta charset="utf-8">
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <title>Create Report</title>

      <!-- Scripts -->
      <script src="{{ asset('js/app.js') }}" defer></script>
      <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
      <!-- <link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous"> -->
      <!-- Styles -->
      <link href="{{ asset('css/sidebar.css') }}" rel="stylesheet">
      <link href="{{ asset('css/report.css') }}" rel="stylesheet">
      <link href="{{ asset('css/company.css') }}" rel="stylesheet">
      <!-- Fonts -->
      <link href="https://fonts.googleapis.com/css?family=Nunito:300,600" rel="stylesheet">
      <link ‎href="https://fonts.googleapis.com/css?family=europa:200,600" rel="stylesheet">

  </head>
  <body>

    <div class="wrapper">
      @include('layouts.sidebar')
    </div>

      <section class="onboard">
        <div class="rep">Add Company</div>
        <div class="newrep ">
          <div class="form">
            <form action="">
              <div class="form-group">
                <label for=""> Company Name </label>
                <input type="text" class="form-control" required>
              </div>
              <div class="form-group">
                <label for=""> Company Website </label>
                <input type="url" class="form-control" >
              </div>
              <div class="form-group">
                <label for=""> Country </label>
                <select class="form-control" id="nationality" placeholder="Select Country">
                    <option  selected disabled hidden>Select Country</option>
                </select>
              </div> 
              
              <div class="form-group">
                <label for=""> Primary Contact</label>
                <select class="form-control" id="nationality" placeholder="Select Country">
                    <option  selected disabled hidden>Select contact</option>
                </select>
              </div> 

              <div class="form-group">
                <label for=""> Tags </label>
                <input type="url" class="form-control" placeholder="Type in one or more tags to select" >
              </div>

              <div class="row form-group">
                <div class="col-md-6">
                  <label for=""> Fund Stage</label>
                  <select class="form-control" id="nationality" placeholder="Select Country">
                    <option  selected disabled hidden>Seed</option>
                </select>
                </div>

                <div class="col-md-6">
                  <label for=""> Investment status</label>
                  <select class="form-control" id="nationality" placeholder="Select Country">
                    <option  selected disabled hidden>Seed</option>
                </select>
                </div>
              </div>

              <div class="form-group">
                <label for=""> Lead </label>
                <input type="text" class="form-control" >
              </div>
              
              <div class="form-group">
                <label for=""> Analyst </label>
                <input type="text" class="form-control" >
              </div>

              <div class="mb-4">
                <button class="btn btn-primary btn-company  "> Save </button>
                <button class="btn  btn-default" style="margin-left: 3px"> Cancel </button>
              </div>
            </form>

          </div>
          
        </div>
      </section>

      <script>
        const nationality = document.querySelector('#nationality')
        nationality.length = 0;

        let defaultOption = document.createElement('option');
        defaultOption.text = 'Select Country'

        nationality.add(defaultOption)
        nationality.selectedIndex = 0 

        const url = 'https://api.myjson.com/bins/7xq2x';

      fetch(url)  
        .then(  
          function(response) {  
            if (response.status !== 200) {  
              console.warn('Looks like there was a problem. Status Code: ' + 
                response.status);  
              return;  
            }

            // Examine the text in the response  
            response.json().then(function(data) {  
              let option;
          
            for (let i = 0; i < data.length; i++) {
                option = document.createElement('option');
                option.text = data[i].name;
                option.value = data[i].abbreviation;
                nationality.add(option);
            }    
            });  
          }  
        )  
        .catch(function(err) {  
          console.error('Fetch Error -', err);  
        });
      </script>


    </body>
</html>
