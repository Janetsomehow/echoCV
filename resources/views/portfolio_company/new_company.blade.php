@extends('layouts.sidbar')
  @section('content')

            <div class="col-md-10 mt-5 mb-5 p-5">

               <div class="empty text-center">
          <img src="{{ asset('css/icons/company.png') }}" class="company-img" />
          <h3>Add a portfolio company</h3>
          <p>Manage your portfolio companies easily</p>
         <a href="/add_company"> <button type="button" name="button" class="btn btn-primary">&plus; New Company</button></a>
          </div>
</div>

@stop
