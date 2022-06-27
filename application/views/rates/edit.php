

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Quản lý
        <small>Rates</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li class="active">Rates</li>
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
              <h3 class="box-title">Sửa</h3>
            </div>
            <form role="form" action="<?php base_url('rates/edit') ?>" method="post">
              <div class="box-body">

                <?php echo validation_errors(); ?>
                <div class="form-group">
                  <label for="group_name">Tên lệ phí</label>
                  <input type="text" class="form-control" id="rate_name" name="rate_name" placeholder="Rate name" value="<?php echo ($this->input->post('rate_name'))?:$rate_data['rate_name']; ?>">
                </div>
                <div class="form-group">
                  <label for="group_name">Loại xe</label>
                  <select class="form-control" id="category_name" name="category_name">
                    <option value="">Chọn loại xe</option>
                    <?php foreach ($category_data as $k => $v) { ?>
                      <option value="<?php echo $v['id']; ?>" <?php echo ($rate_data['vechile_cat_id'] == $v['id']) ? 'selected' : ''; ?>><?php echo $v['name'] ?></option>
                    <?php } ?>
                  </select>
                </div>
                <div class="form-group">
                  <label for="group_name">Loại lệ phí</label>
                  <select class="form-control" id="type" name="type">
                    <option value="">Loại lệ phí</option>
                    <option value="1" <?php echo ($rate_data['type'] == 1) ? 'selected':''; ?>>Cố định</option>
                    <option value="2" <?php echo ($rate_data['type'] == 2) ? 'selected':''; ?>>Theo giờ</option>
                  </select>
                </div>
                <div class="form-group">
                  <label for="group_name">Lệ phí</label>
                  <input type="text" class="form-control" id="rate" name="rate" placeholder="Lệ phí" value="<?php echo ($this->input->post('rate'))?:$rate_data['rate']; ?>">
                </div>
                <div class="form-group">
                  <label for="group_name">Trạng thái</label>
                  <select class="form-control" id="rate_status" name="rate_status">
                    <option value="1" <?php echo ($rate_data['active'] == 1) ? 'selected' : ''; ?>>Active</option>
                    <option value="2" <?php echo ($rate_data['active'] == 2) ? 'selected' : ''; ?>>Inactive</option>
                  </select>
                </div>
                
              </div>
              <!-- /.box-body -->

              <div class="box-footer">
                <button type="submit" class="btn btn-success">Lưu</button>
                <a href="<?php echo base_url('rates/') ?>" class="btn btn-danger">Quay trở lại</a>
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
    $("#ratesSideTree").addClass('active');
    $("#manageRatesSideTree").addClass('active');
  });
</script>
