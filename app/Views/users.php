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
        <h1 class="text-center">Celebrities database</h1>            
      </div>
    </div>
    <div class="row">
      <div class="col-md-12">
        <div class="float-right">
        <?= anchor('user/add/', 'Add user', array('class' => 'btn btn-success mb-2'));?>          
        </div>
      <table id="table1" class="table">
        <thead>
          <th>#</th>
          <th>First name</th>
          <th>Last name</th>
          <th>Age</th>
          <th>Email</th>
          <th>Mobile</th>
          <th>Username</th>     
          <th>Hobbie</th>
          <th>Action</th>
        </thead>
        <tbody>
          <?php foreach($users as $user){ ?>
          <tr>
            <td><?= $user['id']; ?></td>
            <td><?= $user['firstname']; ?></td>
            <td><?= $user['lastname']; ?></td>
            <td><?= $user['age']; ?></td>
            <td><?= $user['email']; ?></td>
            <td><?= $user['mobile']; ?></td>
            <td><?= $user['username']; ?></td>
            <td><?= $user['hobbie']; ?></td>
            <td><?= anchor('user/edit/'.$user['id'], 'Edit', array(
              'class' => 'btn btn-info')); ?> 
            <?= anchor('user/delete/'.$user['id'], 'Delete', array(
              'class' => 'btn btn-danger ml-1')); ?></td>
          </tr>
          <?php } ?>
        </tbody>  
        <tfoot>
          <tr>
            <td colspan="8">
              <?= $pager->links('group1', 'custom_bootstrap');?>              
            </td>
          </tr>          
        </tfoot>
      </table>
      </div>
    </div>
  </div>
</body>
</html>