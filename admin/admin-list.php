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
      <h1>List of administrators<small></small>
      </h1>
  
    </section>

   <section class="content">
      <div class="row">
        <div class="col-xs-12">
          <div class="box">
            <div class="box-header">
              <h3 class="box-title">Manage users</h3>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
              <table id="records" class="table table-bordered table-striped">
                <thead>
                <tr>
                  <th>User</th>
                  <th>Name</th>
                  <th>Options</th>
                </tr>
                </thead>
                <tbody>
                  <?php 
                    try{
                      $sql = "SELECT id_admin, usuario, nombre FROM admins";
                      $result = $conn->query($sql);
                    }
                    catch(Exception $e){
                      $error = $e->getMessage();
                      echo $error;
                    }
                    while($admin = $result->fetch_assoc()){?>
                      <tr>
                        <td><?php echo $admin['usuario']; ?></td>
                        <td><?php echo $admin['nombre']; ?></td>
                        <td>
                          <a href="edit-admin.php?id=<?php echo $admin['id_admin'] ?>" class="btn bg-orange btn-flat margin"><i class="fa fa-pencil"></i></a>
                          <a href="#" data-id="<?php echo $admin['id_admin']?>" data-type="admin" class="btn bg-maroon btn-flat margin erase-registry"><i class="fa fa-trash"></i></a>
                        </td>
                      </tr>
                    <?php } ?>
                </tbody>
                <tfoot>
                <tr>
                  <th>User</th>
                  <th>Name</th>
                  <th>Options</th>
                </tr>
                </tfoot>
              </table>
            </div>
            <!-- /.box-body -->
          </div>
          <!-- /.box -->
        </div>
        <!-- /.col -->
      </div>
      <!-- /.row -->
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->

<?php 
include_once 'templates/footer.php';
?>

