
  @extends('layouts.empty-sidbar')
  @section('content')


<div class="tag">Add Company</div>
<div class="onobard>
<form action="" method="post">
            <div class="form-group">
              <label for="name">Company Name</label>
    <input type="text" class="form-control" id="companyname">
    <label for="web">Company Website</label>
    <input type="text" class="form-control" id="companyweb">
              <div class="bigSe">
                <div class="">
                  <label for="country">Country</label>
                  <select class="form-control" name="">
                  <option selected>Select Country</option>
                    <option value=""></option>
                    <option value="First">First</option>
                    <option value="Second">Second</option>
                    <option value="Third">Third</option>
                  </select>
                </div>
                <div class="">
                  <label for="">Primary Contact</label>
                  <select class="form-control" name="">
                  <option selected>Select Contact</option>
                    <option value=""></option>
                    <option value="First">First</option>
                    <option value="Second">Second</option>
                    <option value="Third">Third</option>
                  </select>
                </div>

              <label for="tags">Tags</label>
    <input type="text" class="form-control" id="companyname">
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
                  </select>   </div>
   <div class="col-6">
       <label for="First Name">Lead</label><br>
       <input type="text" class="form-control">
   </div>
   
    <div class="col-6">
       <label for="Last Name">Analyst</label><br>
       <input type="text" class="form-control">
   </div>

            </div>
            <input type="submit" name="submit" value="Save" class="btn btn-primary btns">
            <input type="submit" name="submit" value="Cancel" class="btn btn-default btns btnCancel">
            </div>
          </form>
</div>
@stop