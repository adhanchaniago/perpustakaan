
      <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
          <h1>
          jenis_in
            
          </h1>
          <ol class="breadcrumb">
            <li><a href="<?php echo base_url('index.php/admin');?>"><i class="fa fa-dashboard"></i> Home</a></li>
			 <li><a href="<?php echo base_url('index.php/jenis_in');?>"></i> jenis_in</a></li>
            <li class="active">Tambah</li>
          </ol>
        </section>
			
       
            
  
		  
        <!-- Main content -->
        <section class="content">
          <div class="row">
            <!-- left column -->
            <div class="col-md-6">
              <!-- general form elements -->
              <div class="box box-primary">
                <div class="box-header">
                  <h3 class="box-title">Tambah jenis_in</h3>
                </div><!-- /.box-header -->
                <!-- form start -->
                <div class="box-body">
                    <div class="form-group">
                      <label for="exampleInputEmail1">jenis_in</label>
						<?php
						if(count($jenis_in->result_array())>0){
						foreach($jenis_in->result_array() as $ktg)
						{
				  
						?>
					  <form action='<?php echo base_url('index.php/jenis_in/jenis_in_edit_proses');?>' method='post'>
					   <?php
						echo'<input type="text"  name="id" value="'.$ktg['id_jenis_in'].'" hidden>';
						echo'<input type="text"  name="jenis_in_awal" value="'.$ktg['nama_jenis_in'].'" hidden>';
						
						?>
                      <input type='text' name='jenis_in' class='form-control'  value="<?php echo"".$ktg['nama_jenis_in'].""; ?>" id='exampleInputEmail1' placeholder='nama jenis_in'>
                    </div>
                   
                  </div><!-- /.box-body -->

                  <div class='box-footer'>
                    <button type='submit' class='btn btn-primary'>Simpan</button>
					<a href='<?php echo base_url('index.php/jenis_in/');?>' class='btn btn-primary' title='batal atau kembali'><b>Batal</b></a>
					<?php
					}
					}
					?>
                  </div>
                </form>
				
              </div><!-- /.box -->

            </div><!--/.col (left) -->
			
           
          </div>   <!-- /.row -->
        </section><!-- /.content -->
		  
	  
      </div><!-- /.content-wrapper -->
