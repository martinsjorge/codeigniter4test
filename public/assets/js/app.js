function get(name){
  let results = new RegExp('[\\?&]' + name + '=([^&#]*)').exec(window.location.href);

  if (results == null) {
  return null;
  } 
  else {
  return results[1] || 0;
  }
}

function alert(tipo){
  let message = parseInt(tipo);
  let title   = "";
  let body    = "";
  let btn     = "";

  switch (message) {
    case 1:
      title = "User deleted successfully!";
      body  = "The user selected was deleted successfully..."; 
      btn = 'Ok';
      break;    
    case 2:
      title = "Something was wrong!";
      body  = "The is an error, please try again"; 
      btn = 'Ok';
      break;
    case 3:
      title = "Success!";
      body  = "The user was created successfully..."; 
      btn = 'Ok';
      break;
    case 4:
      title = "User updated successfully!";
      body  = "The user was updated successfully..."; 
      btn = 'Ok';
      break;  
    default:
      console.log('Error');
  }

  $("<div class=\"modal fade\" role=\"dialog\"><div class=\"modal-dialog\"><div class=\"modal-content\"><div class=\"modal-header\"><h4 class=\"modal-title\">"+title+"</h4></div><div class=\"modal-body\">"+body+"</div><div class=\"modal-footer\"><button type=\"button\" class=\"btn btn-primary\" data-dismiss=\"modal\">"+btn+"</button></div></div></div></div>").modal();  
}

function checkMessage(){
  var message = get("message");
  message = parseInt(message);
  if(message == 1){
    alert(1);
  }else if(message == 2){
    alert(2);
  }else if(message == 3){
    alert(3);
  }else if(message == 4){
    alert(4);
  }
}

$(document).ready( function () {
  checkMessage();

  $('#table1').DataTable({
    "paging": false,
    "info": false,
    "searching": false
  });
});