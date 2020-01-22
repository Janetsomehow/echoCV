<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
      <meta charset="utf-8">
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <title>Report Sample</title>
      <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
      <!-- <link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous"> -->
      <!-- Styles -->
      <link href="{{ asset('css/sidebar.css') }}" rel="stylesheet">
      <link href="{{ asset('css/report.css') }}" rel="stylesheet">
      <link href="{{ asset('css/sample.css') }}" rel="stylesheet">
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

      <section class="">
        <div class="heading container mt-4 ml-4">
          <h3> August Investor Update</h3>
          <p> To: <span class="text-info"> Jane Magnesys for Netflix</span></p>
          
        </div>
        <hr class="shadow">

        <div class="container sample-content">
          <p class="text-wrap">
            Lorem ipsum dolor sit amet consectetur adipisicing elit. 
            Earum asperiores eos adipisci at, cum magnam repellendus, 
            aliquid perferendis ad explicabo molestiae nulla deserunt? 
            Autem ipsam labore nihil nam accusantium maxime.

            Lorem ipsum dolor sit amet consectetur adipisicing elit. 
            Earum asperiores eos adipisci at, cum magnam repellendus, 
            aliquid perferendis ad explicabo molestiae nulla deserunt? 
            Autem ipsam labore nihil nam accusantium maxime.

          </p>
        </div>

        <div class="container">
          <img src="{{ asset('css/icons/sample.png') }}" class="img-fluid" alt="">
        </div>
       
        <div class="thanks container mt-4">
          <h4> Thanks</h4>
          <p class="text-wrap">
            Lorem ipsum dolor sit amet consectetur adipisicing elit. Animi optio facere accusantium
             neque consectetur ea incidunt perspiciatis est. Necessitatibus perspiciatis aliquid eaque
              sapiente asperiores consequuntur tempora quia voluptatum earum fuga.
          </p>
        </div>
        <hr class="shadow">

        <div class="container row recieved">
          <h5 class="ml-3"> Recieved</h5>
          <h6 class="ml-auto">Year: 
          <select name="" id="">
            <option value=""> 2019</option>
            <option value=""> 2019</option>
          </select>
          </h6>
        </div>
        <div class="scrolling-wrapper  container">
          <div class="cal ml-0"><p> Sep 2019</p></div>
          <div class="cal "><p> Jan 2019</p></div>
          <div class="cal "><p> Feb 2019</p></div>
          <div class="cal "><p> Mar 2019</p></div>
          <div class="cal"><p> Apr 2019</p></div>
          <div class="cal"><p> May 2019</p></div>
          <div class="cal"><p> Jun 2019</p></div>
          <div class="cal"><p> Jul 2019</p></div>
          <div class="cal"><p> Aug 2019</p></div>
          <div class="cal"><p> Sep 2019</p></div>
          <div class="cal"><p> Oct 2019</p></div>
          <div class="cal"><p> Nov 2019</p></div>
          <div class="cal"><p> Dec 2019</p></div>
        </div>

        <div class="container  row">
          <div class="sent ml-3">
            <p> Not sent</p>
            <p class="text-info"> Send</p>
          </div>

          <div class="view ml-5">
            <p> View</p>
          </div>

          <div class="view ml-4">
            <p> View</p>
          </div>

         
        </div>

        <div class="container row  calc">
          <div class="d-flex justify-content-start"> <p> Number of Walk ins</p></div>
           <p> Number </p>
           <input type="text" placeholder="Enter Value">
        </div>
      </section>
    </main>
    </body>
</html>
