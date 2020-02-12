<!DOCTYPE html>
<html>
<head>
  <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" rel="stylesheet"
  integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  <title>Testing Sent Report</title>
</head>
<body>
<br><br><br><br><br>
    <form method="post" action="{{ route('compose.store') }}">
      @csrf
      <div class="container">
        <div class="row mr-2">
          <div class="form-group col-md-3 ml-2">
            <label for="subject">Subject</label>
            <input type="text" class="form-control" name="subject" required>
          </div>
          <div class="form-group col-md-3 ml-2">
            <label for="title">Title</label>
            <input type="text" class="form-control" name="title" required>
          </div>
          <div class="form-group col-md-4 ml-2">
            <label for="body">Body</label>
            <input type="text" class="form-control" name="body" required>
          </div>
        </div>
        <button class="btn btn-success ml-4" type="submit" name="btn1" value="1">Save</button>
        <button class="btn btn-info ml-1" type="submit" name="btn1" value="2">Save & Close</button>
      </div>
    </form>

</body>
</html>
