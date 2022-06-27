

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Quản Lý
        <small>Loại Xe</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Trang chủ</a></li>
        <li class="active">Loại xe</li>
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
              <h3 class="box-title">Edit Category</h3>
            </div>
            <form role="form" action="<?php base_url('category/edit') ?>" method="post">
              <div class="box-body">

                <?php echo validation_errors(); ?>

                <div class="form-group">
                  <label for="category_name">Tên loại xe</label>
                  <input type="text" class="form-control" id="category_name" name="category_name" placeholder="Category name" value="<?php echo $category_data['name']; ?>">
                </div>

                <div class="form-group">
                  <label for="category_active">Trạng thái</label>
                  <select type="text" class="form-control" id="category_active" name="category_active">
                    <option value="1"<?php echo ($category_data['active'] == 1) ? ' selected' :''  ?>>Active</option>
                    <option value="2"<?php echo ($category_data['active'] == 2) ? ' selected' :''  ?>>Inactive</option>
                  </select>
                </div>
                
              </div>
              <!-- /.box-body -->

              <div class="box-footer">
                <button type="submit" class="btn btn-success">Lưu thay đổi</button>
                <a href="<?php echo base_url('category/') ?>" class="btn btn-danger">Quay lại</a>
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
    $("#categorySideTree").addClass('active');
    $("#manageCategorySideTree").addClass('active');
  }); 
</script>