<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
      <meta charset="utf-8">
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <title>Investor Update</title>
      <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.11.2/css/all.min.css">
      <!-- <link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous"> -->
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.11.2/css/all.min.css">
      <!-- Styles -->
      <link href="{{ asset('css/app.css') }}" rel="stylesheet">
      <link href="{{ asset('css/sidebar.css') }}" rel="stylesheet">
      <link href="{{ asset('css/report.css') }}" rel="stylesheet">
      <link href="{{ asset('css/sample.css') }}" rel="stylesheet">
      <link href="{{ asset('css/dashboard.css') }}" rel="stylesheet">
      
      <!-- Fonts -->
      <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
      <link ‎href="https://fonts.googleapis.com/css?family=europa:200,600" rel="stylesheet">

      <!-- Scripts -->
      <script src="https://cdn.ckeditor.com/ckeditor5/16.0.0/classic/ckeditor.js"></script>
      <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.9.3/Chart.bundle.min.js"></script>
      <script src="{{ asset('js/app.js') }}" defer></script>
  </head>

  <style>
      .content{
        background: #FAFAFF;
        border-radius: 4px;
      }

      .wholeContent{
          width: 100%;

      }
      .content{
          padding: 4rem;
          width: 100%;
      }
      img{
            margin-bottom: 3em;
      }
      .center{
          margin-top: 1%;
          position: relative;
          left: 13%;
      }
  </style>
  <body>


    <main class="wholeContent mt-2  "> 
        <div class="col-6 d-flex justify-content-center center">
            <div class="content  text-center ">
                <img src="{{ asset('css/icons/echoVC (dark).png')}}" style=""/>
               
                <div class="update  text-left">
                    <h3 class=""> August Investee Update</h3>
                    <p class="text-wrap"> Lorem ipsum dolor sit amet consectetur adipisicing elit. 
                        Vitae corporis recusandae ratione sed voluptates sint est, eum vero eaque.
                         Eum et tempora nesciunt in quaerat eligendi earum unde dolore asperiores?</p>
                    <img src="{{ asset('css/icons/sample.png') }}" style="width: 100%" class="img-fluid" alt="">

                    <h4> Thanks</h4>

                    <p class="text-wrap ">
                        Ea sunt reprehenderit eiusmod pariatur aliqua ad esse eiusmod eiusmod irure et. Cupidatat aliquip ipsum aliquip officia ex amet
                    </p>

                    <hr>

                    
                <div class="monthly">
                    <h3> Monthly metrics</h3>
                    <p class="text-wrap">
                        Ea sunt reprehenderit eiusmod pariatur aliqua 
                        ad esse eiusmod eiusmod irure et. Cupidatat aliquip 
                        ipsum aliquip officia ex amet deserunt amet pariatur 
                        nisi quis nulla mollit. Ea culpa laborum sunt
                    </p>
                </div>
                <div class="kpi headed row align-form">
                    <div class=" col-elements">
                       <p>KPI name</p>
                       <p class="lead">Number of Walk-ins </p>
                       <p class="lead">Total Net Profit </p>
                    </div>
      
      
                    <div class="ml-auto text-right"> 
                      <p class="">KPI Value</p>
                      <input type="text" class="form-control " placeholder="Enter Value" >
                      <input type="text" class="form-control mt-4" placeholder="Enter Value" >
                    </div>
                    
                  </div>
      


            </div>
        </div>    
    </main> 


  </body>
  
</html>