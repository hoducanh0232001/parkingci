

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Quản lý
        <small>Groups</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Trang chủ</a></li>
        <li class="active">Nhóm</li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">
      <!-- Small boxes (Stat box) -->
      <div class="row">
        <div class="col-md-12 col-xs-12">
          
          <?php if($this->session->flashdata('success')): ?>
            <div class="alert alert-success alert-dismissible" role="alert">
              <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
              <?php echo $this->session->flashdata('success'); ?>
            </div>
          <?php elseif($this->session->flashdata('error')): ?>
            <div class="alert alert-error alert-dismissible" role="alert">
              <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
              <?php echo $this->session->flashdata('error'); ?>
            </div>
          <?php endif; ?>

          <div class="box">
            <div class="box-header">
              <h3 class="box-title">Thêm nhóm</h3>
            </div>
            <form role="form" action="<?php base_url('groups/create') ?>" method="post">
              <div class="box-body">

                <?php echo validation_errors(); ?>

                <div class="form-group">
                  <label for="group_name">Group Name</label>
                  <input type="text" class="form-control" id="group_name" name="group_name" placeholder="Thêm tên nhóm">
                </div>
                <div class="form-group">
                  <label for="permission">Permission</label>

                  <table class="table table-responsive">
                    <thead>
                      <tr>
                        <th></th>
                        <th>Thêm </th>
                        <th>Sửa </th>
                        <th>Xem</th>
                        <th>Xoá</th>
                      </tr>
                    </thead>
                    <tbody>
                      <tr>
                        <td>Người dùng hệ thống</td>
                        <td><input type="checkbox" name="permission[]" id="permission" value="createUser"></td>
                        <td><input type="checkbox" name="permission[]" id="permission" value="updateUser"></td>
                        <td><input type="checkbox" name="permission[]" id="permission" value="viewUser"></td>
                        <td><input type="checkbox" name="permission[]" id="permission" value="deleteUser"></td>
                      </tr>
                      <tr>
                        <td>Phân quyền</td>
                        <td><input type="checkbox" name="permission[]" id="permission" value="createGroup"></td>
                        <td><input type="checkbox" name="permission[]" id="permission" value="updateGroup"></td>
                        <td><input type="checkbox" name="permission[]" id="permission" value="viewGroup"></td>
                        <td><input type="checkbox" name="permission[]" id="permission" value="deleteGroup"></td>
                      </tr>
                      <tr>
                        <td>Loại xe</td>
                        <td><input type="checkbox" name="permission[]" id="permission" value="createCategory"></td>
                        <td><input type="checkbox" name="permission[]" id="permission" value="updateCategory"></td>
                        <td><input type="checkbox" name="permission[]" id="permission" value="viewCategory"></td>
                        <td><input type="checkbox" name="permission[]" id="permission" value="deleteCategory"></td>
                      </tr>
                      <tr>
                        <td>Lệ Phí</td>
                        <td><input type="checkbox" name="permission[]" id="permission" value="createRates"></td>
                        <td><input type="checkbox" name="permission[]" id="permission" value="updateRates"></td>
                        <td><input type="checkbox" name="permission[]" id="permission" value="viewRates"></td>
                        <td><input type="checkbox" name="permission[]" id="permission" value="deleteRates"></td>
                      </tr>
                      <tr>
                        <td>Vị trí gửi</td>
                        <td><input type="checkbox" name="permission[]" id="permission" value="createSlots"></td>
                        <td><input type="checkbox" name="permission[]" id="permission" value="updateSlots"></td>
                        <td><input type="checkbox" name="permission[]" id="permission" value="viewSlots"></td>
                        <td><input type="checkbox" name="permission[]" id="permission" value="deleteSlots"></td>
                      </tr>
                      <tr>
                        <td>Đang gửi</td>
                        <td><input type="checkbox" name="permission[]" id="permission" value="createParking"></td>
                        <td><input type="checkbox" name="permission[]" id="permission" value="updateParking"></td>
                        <td><input type="checkbox" name="permission[]" id="permission" value="viewParking"></td>
                        <td><input type="checkbox" name="permission[]" id="permission" value="deleteParking"></td>
                      </tr>
                      <tr>
                        <td>Báo cáo</td>
                        <td><input type="checkbox" name="permission[]" id="permission" value="createReports"></td>
                        <td><input type="checkbox" name="permission[]" id="permission" value="updateReports"></td>
                        <td><input type="checkbox" name="permission[]" id="permission" value="viewReports"></td>
                        <td><input type="checkbox" name="permission[]" id="permission" value="deleteReports"></td>
                      </tr>
                      <!-- <tr>
                        <td>Company</td>
                        <td> - </td>
                        <td><input type="checkbox" name="permission[]" id="permission" value="updateCompany"></td>
                        <td> - </td>
                        <td> - </td>
                      </tr> -->
                      <tr>
                        <td>Thiết đặt</td>
                        <td> - </td>
                        <td><input type="checkbox" name="permission[]" id="permission" value="updateSetting"></td>
                        <td> - </td>
                        <td> - </td>
                      </tr>
                      <tr>
                        <td>Hồ sơ</td>
                        <td> - </td>
                        <td> - </td>
                        <td><input type="checkbox" name="permission[]" id="permission" value="viewProfile"></td>
                        <td> - </td>
                      </tr>                      
                    </tbody>
                  </table>
                  
                </div>
              </div>
              <!-- /.box-body -->

              <div class="box-footer">
                <button type="submit" class="btn btn-success">Lưu thay đổi</button>
                <a href="<?php echo base_url('groups/') ?>" class="btn btn-danger">Quay trở lại</a>
              </div>
            </form>
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
      $("#groupSideTree").addClass('active');
      $("#createGroupSideTree").addClass('active');
    });
  </script>
