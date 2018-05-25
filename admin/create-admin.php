<?php 
include_once 'functions/sessions.php';//have to be first because have redirections(location)
include_once 'functions/functions.php';
include_once 'templates/header.php';
include_once 'templates/bar.php';
include_once 'templates/navigation.php';
?>



  <!-- =============================================== -->

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Create Administrator <small>complete the form</small>
      </h1>
  
    </section>

    <div class="row">
      <div class="col-md-8">
    <!-- Main content -->
        <section class="content">
        <!-- Default box -->
        <div class="box">
          <div class="box-header with-border">
            <h3 class="box-title">Create Administrator</h3>
          </div>
          <div class="box-body">
            <form role="form" name="create-admin" id="create-admin" method="POST" action="insert-admin.php">
              <div class="box-body">
                <div class="form-group">
                  <label for="user">User</label>
                  <input type="text" class="form-control" id="user" name="user" placeholder="Enter user">
                </div>
                <div class="form-group">
                  <label for="name">Name</label>
                  <input type="text" class="form-control" id="name" name="name" placeholder="Enter name">
                </div>
                <div class="form-group">
                  <label for="password">Password</label>
                  <input type="password" class="form-control" id="password" name="password" placeholder="Password">
                </div>
              </div>
              <!-- /.box-body -->
              <div class="box-footer">
                <input type="hidden" name="add-admin" value="1">
                <button type="submit" class="btn btn-primary">Create</button>
              </div>
            </form>
          </div>
          <!-- /.box-body -->
        </div>
        <!-- /.box -->
        </section>
      </div>
    </div>

    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->

<?php 
include_once 'templates/footer.php';
?>

