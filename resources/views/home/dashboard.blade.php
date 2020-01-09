@extends('layouts.empty-sidbar')
  @section('content')

            <div class="col-md-10 mt-5 mb-5 p-5 wrapper">

               <div class=" text-center">
                 <img src="{{ asset('css/icons/Vector.png') }}" class="mx-auto d-block" />
                  <h3 class="text-wrap">Build your Dashboard</h3>
                    <p class="text-wrap">Put together a personal dashboard consisting of metrics that matter to you</p>
                     <button type="button" class="btn btn-primary" href="/add_chart">Create dashboard</button>
               </div>
            </div>
        
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
    <script src="{{asset('js/sidebar.js')}}" defer></script>
@stop
