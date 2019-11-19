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
<div class="Cform">
<form action="" method="post">
Company Name<br>
<input type="text" name="company" style= height:63%; ><br>
Company Website<br>
<input type="text" name="companyw" style= height:63%;><br>
Country<br>
<input list="browsers" name="browser" style= height:63%;><br>
  <datalist id="browsers">
    <option value="Internet Explorer">
    <option value="Firefox">
    <option value="Chrome">
    <option value="Opera">
    <option value="Safari">
  </datalist>
Primary contact<br>
<input list="browsers" name="browser" style= height:63%;>
  <datalist id="browsers">
    <option value="Internet Explorer">
    <option value="Firefox">
    <option value="Chrome">
    <option value="Opera">
    <option value="Safari">
  </datalist>
  Tags<br>
<input type="text" name="tag" style= height:63%;><br>

Fund stage
<input list="browsers" name="browser" style= height:63%;>
<datalist>
  <option value="volvo">1</option>
  <option value="saab">Saab</option>
  <option value="fiat">Fiat</option>
  <option value="audi">Audi</option>
  <option value="volvo">1</option>
  <option value="saab">Saab</option>
  <option value="fiat">Fiat</option>
  <option value="audi">Audi</option>
  <option value="volvo">1</option>
  <option value="saab">Saab</option>
  <option value="fiat">Fiat</option>
  <option value="audi">Audi</option>
</datalist>

Investment status
<input list="browsers" name="browser"style= height:63%;>
<datalist>
  <option value="volvo">1</option>
  <option value="saab">Saab</option>
  <option value="fiat">Fiat</option>
  <option value="audi">Audi</option>
  <option value="volvo">1</option>
  <option value="saab">Saab</option>
  <option value="fiat">Fiat</option>
  <option value="audi">Audi</option>
  <option value="volvo">1</option>
  <option value="saab">Saab</option>
  <option value="fiat">Fiat</option>
  <option value="audi">Audi</option>
</datalist>
<br> 
Lead
<input type="text" name="company" style= height:63%;>
analyst
<input type="text" name="company"style= height:63%;>  <br>     
<button>save</button>
<button>cancel</button>
</form>
</div>
