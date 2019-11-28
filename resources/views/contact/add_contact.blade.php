<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
      <meta charset="utf-8">
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <title>Create Contact</title>
      <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
      <!-- <link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous"> -->
      <!-- Styles -->
      <link href="{{ asset('css/sidebar.css') }}" rel="stylesheet">
      <link href="{{ asset('css/report.css') }}" rel="stylesheet">
      <!-- Fonts -->
      <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
      <link ‎href="https://fonts.googleapis.com/css?family=europa:200,600" rel="stylesheet">

            <script src="http://code.jquery.com/jquery-3.3.1.min.js"
                           integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8="
                           crossorigin="anonymous">
                  </script>
                  <!-- Latest compiled and minified JavaScript -->
            <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>

      <!-- Scripts -->
      <script src="{{ asset('js/app.js') }}" defer></script>

  </head>
  <body>
    <div class="wrapper">

  @include('layouts.sidebar')
    </div>

    <section class="onboard">
        <div class="rep">Contacts</div>
        <div class="newrep">
          <img src="{{ asset('css/icons/contactcentre.png') }}" />
          <h3 class="centreCon">Contacts</h3>
          <p>Add contacts to make sharing easier. You can also use tags
            for easier grouping</p>
            <!-- <a href="#" onclick="modalForm()" class="btn btn-primary searchContact"> Experience</a> -->
            <button type="button" class="btn btn-primary searchContact" data-toggle="modal" data-target="#myModal" id="open">Create Contact</button>
          <!-- <input type="submit" name="" class="btn btn-primary searchContact" value="Create Contact" /> -->
        </div>
      </section>
<br><br><br><br><br><br>


<!-- Modal to create new contact -->
      <div class="modal" tabindex="-1" role="dialog" id="myModal" aria-labelledby="details-l" aria-hidden="true">
        <div class="modal-dialog" role="document">
          <div class="modal-content">
            <div class="modal-header">


              <h5 class="modal-title">Create Contact</h5>
                      <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <div class="modal-body">
              <div class="container">
                <div class="row">
                    <div class="form-group col-md-12 mr-2 ml-2" style="display:flex; justify-content:space-between">
                      <div class="fname">
                        <label for="Name">First Name*:</label>
                        <input type="text" class="form-control" name="name" id="name" required style="
                        border: 0px solid #AAAAAA; border-bottom: 1.3px solid #666; border-radius:0">
                      </div>
                      <div class="lname">
                          <label for="Name">Last Name*:</label>
                          <input type="text" class="form-control" name="name" id="name" required style="
                          border: 0px solid #AAAAAA; border-bottom: 1.3px solid #666; border-radius:0">
                      </div>
                    </div>
                  </div>
                  <div class="row">
                      <div class="form-group col-md-12 mr-2 ml-2">
                        <label for="Club">Email*:</label>
                        <input type="email" class="form-control" name="club" id="email" required style="
                        border: 0px solid #AAAAAA; border-bottom: 1.3px solid #666; border-radius:0">
                      </div>
                  </div>
                  <div class="row">
                     <div class="form-group col-md-12 mr-2 ml-2">
                        <label for="Phone">Phone:</label>
                        <input type="tel" class="form-control" name="country" id="country" style="
                        border: 0px solid #AAAAAA; border-bottom: 1.3px solid #666; border-radius:0">
                      </div>
                  </div>
                  <div class="row">
                    <div class="form-group col-md-12 mr-2 ml-2">
                      <label for="Company">Company:</label>
                      <input type="text" class="form-control" name="score" id="score" style="
                      border: 0px solid #AAAAAA; border-bottom: 1.3px solid #666; border-radius:0">
                    </div>
                  </div>
                  <div class="row">
                    <div class="form-group col-md-12 mr-2 ml-2">
                      <label for="Title">Title:</label>
                      <input type="text" class="form-control" name="score" id="score" style="
                      border: 0px solid #AAAAAA; border-bottom: 1.3px solid #666; border-radius:0">
                    </div>
                  </div>
                  <div class="row">
                    <div class="form-group col-md-12 mr-2 ml-2">
                      <label for="Tags">Tags:</label>
                      <input type="text" class="form-control" name="score" id="score" style="
                      border: 0px solid #AAAAAA; border-bottom: 1.3px solid #666; border-radius:0">
                    </div>
                  </div>
              </div>

            </div>
            <div class="modal-footer" style="justify-content:flex-start!important; padding:1.5rem!important">
              <button type="submit" class="btn btn-save" id="ajaxSubmit" style="background:#ddd; float:left!important">Save</button>
              <button type="button" class="btn btn-cancel" data-dismiss="modal">Cancel</button>
              </div>
          </div>
        </div>
      </div>
        <!-- </form>
      </div> -->

  <script>
               jQuery(document).ready(function(){
                  jQuery('#ajaxSubmit').click(function(e){
                     e.preventDefault();
                     $.ajaxSetup({
                        headers: {
                            'X-CSRF-TOKEN': $('meta[name="_token"]').attr('content')
                        }
                    });
                     jQuery.ajax({
                        url: "{{ url('/') }}",
                        method: 'post',
                        data: {
                           name: jQuery('#name').val(),
                           club: jQuery('#club').val(),
                           country: jQuery('#country').val(),
                           score: jQuery('#score').val(),
                        },
                        success: function(result){
                        	if(result.errors)
                        	{
                        		jQuery('.alert-danger').html('');

                        		jQuery.each(result.errors, function(key, value){
                        			jQuery('.alert-danger').show();
                        			jQuery('.alert-danger').append('<li>'+value+'</li>');
                        		});
                        	}
                        	else
                        	{
                        		jQuery('.alert-danger').hide();
                        		$('#open').hide('show');
                        		$('#myModal').modal('hide');
                        	}
                        }});
                     });
                  });
            </script>
    </body>
</html>
