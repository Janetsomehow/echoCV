
@extends('layouts.empty-sidbar')
 @section('content')
 <div class="header">
<div class="d-flex">
<div class="p-2"><h4>Add Company</h4></div>
<div class="mt-4">
  <div class="row justify-content-center">
  <div class="col-md-8">
<form action="" method="post">
              <label for="name">Company Name</label>
    <input type="text" class="form-control" id="companyname">
    <label for="web">Company Website</label>
    <input type="text" class="form-control" id="companyweb">
              <div class="bigSe">
                <div>
                  <label for="country">Country</label>
                  <select class="form-control" name="">
                  <option selected>Select Country</option>
                    <option value=""></option>
                    <option value="First">First</option>
                    <option value="Second">Second</option>
                    <option value="Third">Third</option>
                  </select>
                </div>
                <div>
                  <label for="pcontact">Primary Contact</label>
                  <select class="form-control" name="pcontact">
                  <option selected>Select Contact</option>
                    <option value=""></option>
                    <option value="First">First</option>
                    <option value="Second">Second</option>
                    <option value="Third">Third</option>
                  </select>
                </div>

              <label for="tags">Tags</label>
    <input type="text" class="form-control" id="companyname" placeholder="type in one or more tags to select"><br>
              <div class="form-row">
   <div class="col-6">
       <label for="First Name">Fund Stage</label><br>
       <select class="form-control" name="">
                    <option value=""></option>
                    <option value="First">First</option>
                    <option value="Second">Second</option>
                    <option value="Third">Third</option>
                  </select>   </div>
   
    <div class="col-6">
       <label for="Last Name">Investment Status</label><br>
       <select class="form-control" name="">
                    <option value=""></option>
                    <option value="First">First</option>
                    <option value="Second">Second</option>
                    <option value="Third">Third</option>
                  </select><br>   </div>
   <div class="col-6">
       <label for="First Name">Lead</label><br>
       <input type="text" class="form-control">
   </div>
   
    <div class="col-6">
       <label for="Last Name">Analyst</label><br>
       <input type="text" class="form-control"><br>
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