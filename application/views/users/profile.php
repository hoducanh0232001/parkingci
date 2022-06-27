<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
  <!-- Content Header (Page header) -->
  <section class="content-header">
    <h1>
      User
      <small>Thay đổi thông tin</small>
    </h1>
    <ol class="breadcrumb">
      <li><a href="#"><i class="fa fa-dashboard"></i> Trang chủ</a></li>
      <li class="active">Hồ sơ</li>
    </ol>
  </section>

  <!-- Main content -->
  <section class="content">
    <!-- Small boxes (Stat box) -->
    <div class="row">
      <div class="col-md-12 col-xs-12">

        <div class="box">
          <div class="box-header">
            <h3 class="box-title">Hồ sơ <?php echo $user_data['username'] ?></h3>
          </div>
          <!-- /.box-header -->
          <div class="box-body">
            <table class="table table-bordered table-condensed table-hovered table-hover">
              <tr>
                <th>Username</th>
                <td><?php echo $user_data['username']; ?></td>
              </tr>
              <tr>
                <th>Email</th>
                <td><?php echo $user_data['email']; ?></td>
              </tr>
              <tr>
                <th>Tên</th>
                <td><?php echo $user_data['firstname']; ?></td>
              </tr>
              <tr>
                <th>Họ</th>
                <td><?php echo $user_data['lastname']; ?></td>
              </tr>
              <tr>
                <th>Giới tính</th>
                <td><?php echo ($user_data['gender'] == 1) ? 'Nam' : 'Gender'; ?></td>
              </tr>
              <tr>
                <th>Số điện thoại</th>
                <td><?php echo $user_data['phone']; ?></td>
              </tr>
              <tr>
                <th>Nhóm người dùng</th>
                <td><span class="label label-success"><?php echo $user_group['group_name']; ?></span></td>
              </tr>
            </table>
          </div>
          <!-- /.box-body -->
        </div>
        <!-- /.box -->
      </div>
      <!-- col-md-12 -->
    </div>
    <!-- /.row -->


  </section>
  <!-- /.content -->
</div>
<!-- /.content-wrapper -->

<script type="text/javascript">
  $(document).ready(function() {
    $("#profileSideTree").addClass('active');
  });
</script>