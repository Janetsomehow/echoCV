
@extends('layouts.empty-sidbar')
 @section('content')
 <style> 
    .page-wrapper{
      position: absolute !important;
      right: 35% !important;
    }
    h4{
      position: relative;
      /* right: 6rem; */
      left: 6rem;
      font-size: 2rem;
      top: 1.5rem;
    }
    .form-wrap{
     position: relative;
     left: 33%;

    }
    @media (max-width: 425px){
      h4{
        position: relative;
        left: 2.9rem;
        top: 1.4rem;
      }
      .form-wrap{
        position: relative;
        left: 13%;
        width: 130%;
      }
      label{
        font-size: 1.1rem;
        margin-top: 1.2rem;
      }
    }

 </style>
 <div class="page-wrapper">
<div class="">

<div class="p-2"><h4>Add Company</h4></div>
<div class="mt-5 form-wrap">
  <div class="row justify-content-center">
  <div class="col-md-8">
<form action="CompanyController@store" method="post">



               @if ($message = Session::get('success'))
        <div class="alert alert-success alert-block">
            <button type="button" class="close" data-dismiss="alert">×</button>
                <strong>{{ $message }}</strong>
        </div>
        {{-- <img src="uploads/{{ Session::get('file') }}"> --}}
        @endif
  
        @if (count($errors) > 0)
            <div class="alert alert-danger">
                <strong>Whoops!</strong> There were some problems with your input.
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif




@csrf
    <label for="c_name">Company Name</label>
    <input type="text" class="form-control" name="name" id="companyname">
    <label for="website">Company Website</label>
    <input type="text" class="form-control" name="website" id="companyweb">
              <div class="bigSe">
                <div>
                  <label for="country">Country</label>
                  <select class="form-control" name="country">
                  <option selected>Select Country</option>
                    <option value=""></option>
                    <option value="First">First</option>
                    <option value="Second">Second</option>
                    <option value="Third">Third</option>
                  </select>
                </div>
                <div>
                  <label for="pcontact" class="mt-4">Primary Contact</label>
                  <select class="form-control" name="pcontact">
                  <option selected>Select Contact</option>
                    <option value=""></option>
                    <option value="First">First</option>
                    <option value="Second">Second</option>
                    <option value="Third">Third</option>
                  </select>
                </div>

              <label for="tags" class="mt-4">Tags</label>
    <input type="text" class="form-control" name="tags" placeholder="type in one or more tags to select"><br>
              <div class="form-row">
   <div class="col-md-6 col-sm-12">
       <label for="stage">Fund Stage</label><br>
       <select class="form-control" name="stage">
                    <option value=""></option>
                    <option value="First">First</option>
                    <option value="Second">Second</option>
                    <option value="Third">Third</option>
                  </select>   </div>
   
    <div class="col-md-6 col-sm-12">
       <label for="status">Investment Status</label><br>
       <select class="form-control" name="status">
                    <option value=""></option>
                    <option value="First">First</option>
                    <option value="Second">Second</option>
                    <option value="Third">Third</option>
                  </select><br>   </div>
   <div class="col-md-6 col-sm-12">
       <label for="lead">Lead</label><br>
       <input type="text" class="form-control" name="lead">
   </div>
   
    <div class="col-md-6 col-sm-12">
       <label for="analyst">Analyst</label><br>
       <input type="text" class="form-control" name="analyst"><br>
   </div>
               <input type="submit" name="submit" value="Save" class="btn btn-primary btns">
            <input type="submit" name="submit" value="Cancel" class="btn btn-default btns btnCancel">
</div>
          </div>
</form>
</div>
</div>
</div>
</div>
<div style="height: 5rem"></div>
</div>
@stop