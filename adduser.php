<!doctype html>
<html lang="en">
  <head>
    <!-- config -->
    <?php include 'component/config.php' ?>
  </head>
  <body>
    <!-- header -->
    <?php include 'component/header.php' ?>

    <!-- main -->
    <?php include 'component/main_adduser.php' ?>

    <!-- footer -->
    

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="stylesheet/jquery.min.js" crossorigin="anonymous"></script>
    <script src="stylesheet/popper.min.js" crossorigin="anonymous"></script>
    <script src="stylesheet/bootstrap.min.js" crossorigin="anonymous"></script>
    
    <!-- model -->
    <div class="modal fade model-adduser" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
      <div class="modal-dialog">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLongTitle">เพิ่มสมาชิก</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
          <!-- body -->
          <div class="modal-body">
            <div class="form-group" style="margin-bottom : 5px;">
              <label for="model-adduser-username" class="col-form-label">Username :</label>
              <input type="text" class="form-control" id="model-adduser-username">
            </div>
            <div class="form-group" style="margin-bottom : 5px;">
              <label for="model-adduser-password" class="col-form-label">Password :</label>
              <input type="password" class="form-control" id="model-adduser-password">
            </div>
            <div class="form-group" style="margin-bottom : 5px;">
              <label for="model-adduser-repassword" class="col-form-label">Comfirm password :</label>
              <input type="password" class="form-control" id="model-adduser-repassword">
            </div>
            <div class="form-group" style="margin-bottom : 5px;">
              <label for="model-adduser-firstname" class="col-form-label">ชื่อ :</label>
              <input type="text" class="form-control" id="model-adduser-firstname">
            </div>
            <div class="form-group" style="margin-bottom : 5px;">
              <label for="model-adduser-lastname" class="col-form-label">นามสกุล :</label>
              <input type="text" class="form-control" id="model-adduser-lastname">
            </div>
            <div class="form-group" style="margin-bottom : 5px;">
              <label for="model-adduser-status" class="col-form-label">ตำแหน่ง :</label>
              <input type="text" class="form-control" id="model-adduser-status">
            </div>            
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
            <button type="button" class="btn btn-primary">เพิ่มสมาชิก</button>
          </div>
        </div>
      </div>
    </div>
    <!-- script -->
    <script type="text/javascript">
    $(document).ready(function() {
      $('#table-adduser > tbody:last').append('<tr><th scope="col">ลำดับที่</th></tr>'); 
    });
    </script>
  </body>
</html>