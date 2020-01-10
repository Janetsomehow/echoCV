
@extends('layouts.empty-sidbar')
 @section('content')
 <style> 
    .page-wrapper{
      position: absolute !important;
      right: 35% !important;
    }
    h4{
      position: relative;
      right: 6rem;
      font-size: 2rem;
      top: 1.5rem;
    }
    .form-wrap{
     position: relative;
     left: 5rem;
    }
 </style>
 <div class="page-wrapper">
<div class="">

<div class="p-2"><h4>Add Company</h4></div>
<div class="mt-5 form-wrap">
  <div class="row justify-content-center">
  <div class="col-md-8">
<<<<<<< HEAD
<form action="companies.store" class="form-group" method="post">
@csrf
    <label for="name">Company Name</label>
    <input type="text" class="form-control" id="companyname">
    <label for="website " class="mt-3" >Company Website</label>
    <input type="url" class="form-control" id="companyweb">
              <div class="bigSe mt-3">
=======
<form action="add_company" method="post">
@csrf
    <label for="name">Company Name</label>
    <input type="text" class="form-control" name="name" id="companyname">
    <label for="website">Company Website</label>
    <input type="text" class="form-control" name="website" id="companyweb">
              <div class="bigSe">
>>>>>>> f4f45833c6f7e010adf77f0cf79ee92087befebe
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
   <div class="col-6">
       <label for="Fund_stage">Fund Stage</label><br>
       <select class="form-control" name="stage">
                    <option value=""></option>
                    <option value="First">First</option>
                    <option value="Second">Second</option>
                    <option value="Third">Third</option>
                  </select>   </div>
   
    <div class="col-6">
       <label for="inv_status">Investment Status</label><br>
       <select class="form-control" name="status">
                    <option value=""></option>
                    <option value="First">First</option>
                    <option value="Second">Second</option>
                    <option value="Third">Third</option>
                  </select><br>   </div>
   <div class="col-6">
       <label for="lead">Lead</label><br>
       <input type="text" class="form-control" name="lead">
   </div>
   
    <div class="col-6">
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
</div>
@stop