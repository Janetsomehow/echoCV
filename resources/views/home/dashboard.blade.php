@extends('layouts.empty-sidbar')
  @section('content')

            <div class="col-md-10 mt-5 mb-5 p-5">

               <div class="empty text-center">
                 <img src="{{ asset('css/icons/vector.png') }}" class="mx-auto d-block" />
                  <h3>Build your Dashboard</h3>
                    <p>Put together a personal dashboard consisting of metrics that matter to you</p>
                     <a class="btn btn-primary" href="/add_chart">Create dashboard</a>
               </div>
            </div>

@stop