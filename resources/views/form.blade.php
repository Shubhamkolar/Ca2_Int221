<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

    <title></title>
  </head>
  <body>
  <br>
<div class="container">
  <div class="col-sm-8 ml-5">
  <h3 class="text-dark ml-5"><b class="text-danger">STUDENT DETAIL FORM </b></h3>
    <form action="formset" method="POST">
@csrf
        <div class="form-group pt-5" >
          <label for="exampleInputEmail1">Enter The Name :</label>
          <input type="text" class="form-control" id="exampleInputEmail1"  name="name">
        </div>
        <div class="form-group " >
          <label for="exampleInputEmail1">Enter Registration No :</label>
          <input type="number" class="form-control" id="exampleInputEmail1"   name="reg">
        </div>
        <div class="form-group " >
          <label for="exampleInputEmail1">Enter The CGPA :</label>
          <input type="text" class="form-control" id="exampleInputEmail1" name="cgpa">
        </div>
        <div class="form-group">
          <label for="exampleInputPassword1">Enter The Specilization :</label>
          <input type="text" class="form-control" id="exampleInputPassword1" name="pass" >
        </div>

        <div class="form-group">
            <label for="exampleInputPassword1">Select The Resume :</label>
            <input type="file" class="form-control" id="exampleInputPassword1" name="file1"\>
          </div>
        <button type="submit" class="btn btn-danger">Submit</button>
      </form>
      </div>
</div>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
  </body>
</html>
