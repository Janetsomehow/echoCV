<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
      <meta charset="utf-8">
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <title>Dashboard</title>
      <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.11.2/css/all.min.css">
      <!-- <link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous"> -->
      <!-- Styles -->
      <link href="{{ asset('css/report.css') }}" rel="stylesheet">
      <link href="{{ asset('css/sidebar.css') }}" rel="stylesheet">
      <link href="{{ asset('css/dashboard.css') }}" rel="stylesheet">
      
      <!-- Fonts -->
      <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
      <link ‎href="https://fonts.googleapis.com/css?family=europa:200,600" rel="stylesheet">

      <!-- Scripts -->
      <script src="https://cdn.ckeditor.com/ckeditor5/16.0.0/classic/ckeditor.js"></script>
      <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.9.3/Chart.bundle.min.js"></script>
      <script src="{{ asset('js/app.js') }}" defer></script>
  </head>

<body>
    <div class="wrapper">
      @include('layouts.sidebar')
    </div>
    
    <section class="title">
      <div class="heading row">
        <h3 > Dashboard</h3>
        <p class="text-info ml-auto"> Go Back</p>
      </div>
    <div class="headMobile">
      <div class="select-dash row">
        <select name="" id="" class="form-control selecteer" style="width: 40%"> 
          <option value=""> Dashboard 1</option>
          <option value=""> Dashboard 2</option>
        </select>

        <button class="btn btn-primary ml-auto"> Add Chart</button>
        <button class="btn btn-default border border-dark ml-1 rounded"> <i class="fas fa-share-alt"></i></button>
      </div>
      <hr class="shadow">
    </div>

    <div class="headTop " style="position: relative; top: 1em">
      <div class="d-flex justify-content-end">
        <button class="btn btn-primary ml-auto"> Add Chart</button>
        <button class="btn btn-default border border-dark ml-1 rounded"> Share</button>
      </div>

      <div class="">
        <ul class="row list-unstyled">
          <li> <a href=""> Dashboard 1</a></li>
          <li class="ml-3"> <a href=""> Dashboard 1</a></li>
          <li class="ml-3"> <a href=""> + </a></li>
        </ul>
      </div>
    </div>
      
      <div class="quarterly">
        <div class="head-region row">
          <p class="lead mr-auto"> Quarterly Overview</p>
          <button class="btn btn-default ml-auto btn-collapse"> <i class="fas fa-chevron-down"></i></button>
        </div>
        <div>
          <canvas id="myChart" width="400" height="400"></canvas>
          <script>
            var ctx = document.getElementById('myChart').getContext('2d');
            var myChart = new Chart(ctx, {
                type: 'bar',
                data: {
                    labels: ['Q1  2018', 'Q2 2018', 'Q3 2018', 'Q4 2018'],
                    datasets: [{
                      
                      minBarLength: 9,
                        label: 'Exit',
                        data: [300000, 370000, 370000, 600000],
                        backgroundColor: [
                          // RGBA(253,6,6,1)
                          'rgba(122,239,31,1)',
                          'rgba(122,239,31,1)',
                          'rgba(122,239,31,1)',
                          'rgba(122,239,31,1)'
                            // 'rgba(256, 46, 36, 1)'
                          
                        ],
                    
                        borderWidth: 1
                    },
                    {
                      
                      minBarLength: 9,
                        label: 'Investment',
                        data: [100000, 400000, 440000, 780000],
                        backgroundColor: [
                          'rgba(25,185,253,1)',
                          'rgba(25,185,253,1)',
                          'rgba(25,185,253,1)',
                          'rgba(25,185,253,1)'
                          
                        ],
          
                        borderWidth: 1
                    }
                  ]
                },
                options: {
                    scales: {
                        yAxes: [{
                            ticks: {
                                beginAtZero: true,
                                stacked: true
                            }
                        }]
                    }
                }
            });
            </script>
        </div>
        
      </div>
      <div class="quarterly mt-5">
        <div class="head-region row">
          <p class="lead mr-auto"> TVPI</p>
          <button class="btn btn-default ml-auto btn-collapse"> <i class="fas fa-chevron-down"></i></button>
        </div>

        <div>
          <canvas id="line-chart" height="400" width="400"> </canvas>
          <script> 
          let ctxc = document.getElementById('line-chart').getContext('2d');

            let lineChart = new Chart(ctxc, {
              type: 'line',
              data: {
                
                labels: [2010, 2011, 2012, 2013, 2014, 2015, 2016, 2017, 2018, 2019],
                datasets: [{
                  lineTension: 0,
                  label: 'TVPI',
                  data: [0.5, 2, 2.5, 1, 2.5, 3.5, 2, 3.7, 4, 4],
                  backgroundColor: [
                    // RGBA(122,239,31,1)
                    'rgba(255,255, 255, 1)',
                ],
                }]
              },
              options: {
                bezierCurve: false
              }
            })
            </script>

        </div>
      </div>
    </section>
</body>
</html>