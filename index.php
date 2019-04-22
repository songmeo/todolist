<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8" name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" href="style.css">
    <link href="https://fonts.googleapis.com/css?family=Roboto+Slab" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="upload.js" type="text/javascript"></script>
    <script src="function.js" type="text/javascript"></script>
  </head>
  <body>
    <div id="wrapper">
      <div class="row">
        <div class="side" id="side">
          <div class="list-card">
            <div class="avatar-upload">
              <div class="avatar-edit">
                  <input type="file" accept="image/gif, image/jpeg, image/png" id="imageUpload" onchange="readURL(this);">
                  <label for="imageUpload"></label>
              </div>
              <div class="avatar-preview">
                <div id="imagePreview" style="background-image: url(https://s3-us-west-2.amazonaws.com/s.cdpn.io/20625/avatar-bg.png);"></div>
              </div>
            </div>
          </div>
          <div class="task-card">
            <table id="lists">
              <tr>
                <td>All Tasks</td>
              </tr>
              <tr>
                <td>Personal<button class="btn-pencil"><span class="glyphicon glyphicon-pencil">
                </span></button><button class="btn-trash"><span class="fa fa-trash"></span></button></td>
              </tr>
              <tr>
                <td>Work<button class="btn-pencil"><span class="glyphicon glyphicon-pencil">
                </span></button><button class="btn-trash"><span class="fa fa-trash"></span></button></td>
              </tr>
              <tr>
                <td>Grocery<button class="btn-pencil"><span class="glyphicon glyphicon-pencil">
                </span></button><button class="btn-trash"><span class="fa fa-trash"></span></button></td>
              </tr>
            </table>
            <br>
            <button class="button"><span>New List</span></button>
          </div>
         </div>
        <div class="main">
          <div class="card">
            <form action="login_check.php" method="POST" id="action">
              <input type="submit" class="logout-button" name="logout" value="Logout">
            </form>
            <div class="dropdown" id="dropContent">
              <button class="dropbtn">All Tasks</button>
              <div class="dropdown-content">
                <a href="#">Personal</a>
                <a href="#">Work</a>
                <a href="#">Grocery</a>
              </div>
            </div>
            <form action="" method="POST" id="addAction">
              <input type="text" id="addTask" onkeypress="return event.keyCode != 13" name="add-task" placeholder="Add tasks..." autocomplete="off">
              <input type="button" class="add-button" id="add" onclick="addRow(); onFormSubmit();" onkeypress="return searchKeyPress(event);" name="add-button" value="Add">
            </form>
            <div class="dropdown-extra">
              <button class="extra" id="buttonExtra">...</button>
              <div class="extra-content" id="extraContent">
                <a href="javascript:window.print()"><i class="glyphicon glyphicon-print"></i> Print List</a>
                <a href="#"><i class="fa fa-trash w3-large"></i> Completed Tasks</a>
                <a href="#"><i class="fa fa-trash w3-large"></i> Delete All</a>
              </div>
            </div>

            <form class="task-board card" class="list" id="form">
              <div class="list-item" id="doList">
                  <input id="option" type="checkbox" name="checkbox" class="hidden">
                  <label for="option" class="check--label">
                    <span class="check--label-box"></span>
                    <span class="check--label-text">One</span>
                  </label>
               </div>
             </form>
          </div>   
          </div>
      </div>
    </div>
    <script>
      var i = 0;
      function addRow(){
        if (document.getElementById('addTask').value!=''){   
          i++;  
          var title = document.getElementById('addTask').value;
          var node = document.createElement('div');        
          //node.innerHTML = '<input id="option" type="checkbox" class="hidden"' + i + '" name="checkbox' + i + '"><label for="option" class="check--label"><span class="check--label-box"></span><span class="check--label-text"' + i + '">'+ title +'</span>';
          node.innerHTML = '<input id="option' + i + '" type="checkbox" class="hidden" name="checkbox"><label for="option' + i + '" class="check--label"><span class="check--label-box"></span><span class="check--label-text">'+ title +'</span>';      
          document.getElementById('doList').appendChild(node);    
        }
      }
      var input = document.getElementById("addTask");
      input.addEventListener("keyup", function(event) {
        if (event.keyCode === 13) {
        event.preventDefault();
        document.getElementById("add").click();
        }
      });
      function onFormSubmit(){
        document.getElementById('addTask').value='';
      }    
    </script>
  </body>
</html>
