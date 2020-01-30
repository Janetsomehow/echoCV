<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Archives</title>
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    {{-- <link ‎href="https://fonts.adobe.com/fonts/europa" rel="stylesheet"> --}}
    <link rel="stylesheet" href="{{ asset('css/report.css') }}">
    <link href="https://fonts.googleapis.com/css?family=Nunito:300,600" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('css/files.css') }}">
    <link href="{{ asset('css/sidebar.css') }}" rel="stylesheet">
    {{-- <link rel="stylesheet" href="{{ asset('css/account.css') }}" rel="stylesheet"> --}}
    <script src="{{ asset('js/app.js') }}" defer></script>
    <style>
      .center{
        margin-left: 1rem;
      }
    </style>
</head>
<body>

      <section class="onboard"> 
            <div class="header row mt-4">
                  <h3 class="account_header mr-auto"> Archive</h3>
                  <button class="mt-n1 btn btn-primary ml-auto btn-upload" data-target="#uploadModal" data-toggle="modal"> Upload File</button>
              </div>

            
              <div  class="col-md-12 mt-5 mb-5 p-5 pt-5 wrap" >
                  {{-- <h3> Archive</h3> --}}
                  <div class="center">
                    <img src="{{ asset('css/icons/archive.png') }}" class="img-fluid" />
                     <p class="mt-5 text-center text-wrap  lead" style="font-weight: 500"> Nothing is in your archive yet</p>
                  </div>
               </div>



               {{-- modal code --}}
               <div class="modal" tabindex="-1" role="dialog" id="uploadModal">
                     <div class="modal-dialog  modal-dialog-centered" role="document">
                       <div class="modal-content">
                         <div class="modal-header">
                           <h5 class="modal-title">File Upload</h5>
                           <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                             <span aria-hidden="true">&times;</span>
                           </button>
                         </div>
                         <div class="modal-body">
                           <div class="form">
                              <form action="" class="form-group">
                                 <div>
                                    <label for="" aria-label> Name: </label>
                                    <input type="text" class="form-control" placeholder="Name">
                                 </div>

                                 <div class="mt-4">
                                    <label for="select_file"> Select File: </label>
                                    <input type="file" class="form-control">
                                 </div>
                              </form>
                           </div>
                         </div>
                         <div class="modal-footer">
                           <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
                           <button type="button" class="btn btn-primary">Upload</button>
                         </div>
                       </div>
                     </div>
                   </div>
               {{--  --}}
      </section>
  

      <div class="wrapper">

            @include('layouts.sidebar')
        </div>
        <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
</body>


</html>