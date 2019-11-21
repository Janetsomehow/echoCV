<!DOCTYPE html>
<html>
<head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
        <!-- <link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous"> -->
        <!-- Styles -->
        <link href="{{ asset('css/sidebar.css') }}" rel="stylesheet">
        <link href="{{ asset('css/home.css') }}" rel="stylesheet">
        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
        <link Ã¢â‚¬Å½href="https://fonts.googleapis.com/css?family=europa:200600" rel="stylesheet">
        <!--responsiveness-->
        <meta name="viewport" content="width=device-width,initial-scale=1,maximum-scale=1,user-scalable=no">
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
        <title>echoCV</title>
</head>
<body>
@include('layouts.sidebar')
<div class="tag">Add Company</div>
<form action="" method="post">
            <div class="form-group">
              <label for="">Select spreadsheets</label>
              <select class="form-control form-group" name="">
                <option value=""></option>
                <option value="First">First</option>
                <option value="Second">Second</option>
                <option value="Third">Third</option>
              </select>
              <label for="">Select sheets</label>
              <select class="form-control" name="">
                <option value=""></option>
                <option value="First">First</option>
                <option value="Second">Second</option>
                <option value="Third">Third</option>
              </select>
              <div class="bigSe">
                <div class="">
                  <label for="">Select rows(date and time period)</label>
                  <select class="form-control" name="">
                    <option value=""></option>
                    <option value="First">First</option>
                    <option value="Second">Second</option>
                    <option value="Third">Third</option>
                  </select>
                </div>
                <div class="">
                  <label for="">Select metrics column (name)</label>
                  <select class="form-control" name="">
                    <option value=""></option>
                    <option value="First">First</option>
                    <option value="Second">Second</option>
                    <option value="Third">Third</option>
                  </select>
                </div>
                
              </div>
              <div class"form-row">
   <div class="col-6">
       <label>First Name<\label><br>
       <input type="text" class="form-control">
   </div>
   
    <div class="col-6">
       <label>Last Name<\label><br>
       <input type="text" class="form-control">
   </div>
<\div>
            </div>
            <input type="submit" name="submit" value="Save" class="btn btn-primary btns">
            <input type="submit" name="submit" value="Cancel" class="btn btn-default btns btnCancel">

          </form>
