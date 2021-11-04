<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css" integrity="sha384-zCbKRCUGaJDkqS1kPbPd7TveP5iyJE0EjAuZQTgFLD2ylzuqKfdKlfG/eSrtxUkn" crossorigin="anonymous">
  <link rel="stylesheet" href="https://cdn.datatables.net/1.11.3/css/jquery.dataTables.min.css">
  <script type="text/javascript" src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
  <script type="text/javascript" src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-fQybjgWLrvvRgtW6bFlB7jaZrFsaBXjsOMm/tB9LTS58ONXgqbR9W8oWht/amnpF" crossorigin="anonymous"></script>
  <script type="text/javascript" src="https://cdn.datatables.net/1.11.3/js/jquery.dataTables.min.js"></script>
  <script type="text/javascript" src="<?= base_url('assets/js/app.js'); ?>"></script>
  <title>Celebrities database - PHP Test</title>
</head>
<body>
  <div class="container">
    <div class="row">
      <div class="col-md-12 m-4">
        <h1 class="text-center">New user form</h1>        
      </div>
    </div>
    <div class="row">      
      <div class="col-md-8 offset-md-2">
        <?= form_open('user/create'); ?>
        <div class="card">
          <div class="card-body">
            <div class="form-group">
              <label for="firstname">First name <sup class="text-danger">*</sup></label>
              <input type="text" class="form-control" id="firstname" name="firstname" placeholder="Your name here" required>              
            </div>
            <div class="form-group">
              <label for="lastname">Last name <sup class="text-danger">*</sup></label>
              <input type="text" class="form-control" id="lastname" name="lastname" placeholder="Your last name here" required>              
            </div>
            <div class="form-group">
              <label for="age">Age</label>
              <input type="text" class="form-control" id="age" name="age" placeholder="Your age here">              
            </div>
            <div class="form-group">
              <label for="email">Email <sup class="text-danger">*</sup></label>
              <input type="text" class="form-control" id="email" name="email" placeholder="Your email here" required>              
            </div>
            <div class="form-group">
              <label for="mobile">Mobile</label>
              <input type="text" class="form-control" id="mobile" name="mobile" placeholder="Your mobile here">              
            </div>
            <div class="form-group">
              <label for="hobbie">Hobbie</label>
              <input type="text" class="form-control" id="hobbie" name="hobbie" placeholder="Your hobbie here">              
            </div>
            <div class="form-group">
              <label for="username">Username <sup class="text-danger">*</sup></label>
              <input type="text" class="form-control" id="username" name="username" placeholder="Chose your username" required>              
            </div>
            <div class="form-group">
              <label for="password">Password <sup class="text-danger">*</sup></label>
              <input type="password" class="form-control" id="password" name="password" placeholder="Chose your password" required>              
            </div>
          </div> 
          <div class="card-footer">
            <div class="float-right">
              <?= anchor('user/', 'Back', array('class' => 'btn btn-secondary'));?>      
              <input type="submit" class="btn btn-success" id="btnSubmit" name="btnSubmit" value="Register">   
            </div>
          </div>         
        </div>  
        <?= form_close(); ?>
      </div>
    </div>
  </div>
</body>
</html>