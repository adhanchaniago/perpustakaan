
      <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
          <h1>
         inventory in
            
          </h1>
          <ol class="breadcrumb">
            <li><a href="<?php echo base_url('index.php/admin');?>"><i class="fa fa-dashboard"></i> Home</a></li>
			 
            <li class="active">inventory in</li>
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
                  <h3 class="box-title"></h3>
                </div><!-- /.box-header -->
                <!-- form start -->
                <div class="box-body">
				<?php
				if(count($inventory )>0)
				{
				foreach($inventory as $inventory)
				{
				$inisial_barcode="MEZ-INV-";
					  echo"
					 
					
					<div class='form-group'>
                      <label for='exampleInputEmail1'>Barcode inventory in</label> format : $inisial_barcode
						<div class='input-group'>
						  <input readonly type='hidden' id='id_inventory_in' name='id_inventory_in' class='form-control'  value='".$inventory->id_inventory_in."'  required='' placeholder='id'>	
						<input readonly type='text' name='barcode'   id='barcode_input'  class='form-control'  value='".$inventory->barcode_inventory."'  required='' placeholder='no id barcode inventory in'>
							<div class='input-group-addon' id='barcode'>
							<i class='fa fa-search' ></i>
							</div>
						</div>
					</div>
					
					<hr style='border-top: dotted 1px;' />
					<div class='form-group'>
                       <div id='id'>
					  <input readonly type='hidden' id='id2' name='id' class='form-control'  value='".$inventory->id_inventory."'  required='' placeholder='id'>
					  <input  type='hidden' id='id' name='id' class='form-control'  value='".$inventory->id_inventory."'  required='' placeholder='id'>
						</div>
					</div>
					
					<div class='form-group'>
                      <label for='exampleInputEmail1'>Judul inventory</label>
					   <div id='judul'>
                      <input  readonly type='text' id='judul' name='judul' class='form-control'  value='".$inventory->judul_inventory."'  required='' placeholder='judul'>
					  </div>
					</div>
					<div class='form-group'>
                      <label for='exampleInputEmail1'>ISBN</label>
					  <div id='isbn'>
                      <input readonly type='text' id='isbn' name='isbn' class='form-control'  value='".$inventory->ISBN."'  required='' placeholder='judul'>
					  </div>
					</div>
					<hr style='border-top: dotted 1px;' />
					";
					
					
						echo"
					 <div class='form-group'>
                    <label>Tanggal </label>
                    <div class='input-group'>
                      <div class='input-group-addon'>
                        <i class='fa fa-calendar'></i>
                      </div>
                      <input  readonly type='text' id='tanggal' name='tgl' value='".$inventory->tgl_inventory_in."' id='tanggal' class='form-control'  style='height:35px;' placeholder='yyyy/mm/dd'  required='' />
                    </div><!-- /.input group -->
                  </div><!-- /.form group -->

					";
					
					echo"
					<div class='form-group'>
                      <label for='exampleInputEmail1'>Jumlah inventory masuk</label>
                      <input readonly type='number' id='jumlah' name='jumlah' class='form-control'  value='".$inventory->jumlah_inventory_in."' id='exampleInputEmail1' required='' placeholder='jumlah'>
					</div>
					";
					//jenis in
					echo"<div class='form-group'>
					<label for='exampleInputEmail1'>jenis_in inventory in</label>
                    <select name='jenis_in' class='select'  style='width:100%;' id='isi_jenis_in' disabled>
					<option value=".$inventory->id_jenis_in." >".$inventory->nama_jenis_in."</option>
					";
					$this->load->model('m_jenis_in');
					$jenis_in = $this->m_jenis_in->select_jenis_in();
					if(count($jenis_in)>0)
					{
					foreach($jenis_in as $jenis_in)
						{
						 echo" <option value=".$jenis_in->id_jenis_in." >".$jenis_in->nama_jenis_in."</option>";
						}
					}	
					echo"</select><br>
					<br>
					<a href='' id ='refresh_jenis_in'><img src='".base_url('assets/images/refresh.png')."'>refresh</a>
					<br> *) jika nama jenis_in belum ada, klik
					<a href='".base_url('index.php/jenis_in/jenis_inadd')."' target='_blank'>Tambah data jenis_in</a>
					<br><br>
					</div>";
					// end 
					echo"
					<div class='form-group'>
                      <label for='exampleInputEmail1'>keterangan</label>
                    <textarea readonly name='ket' rows='10' cols='80' >".$inventory->keterangan_inventory_in."</textarea>
					</div>
					";
					
					
					
					echo"
                  <div class='box-footer'>
                   
					<a href='".base_url('index.php/inventory_in/')."' class='btn btn-primary' title='batal atau kembali'><b>Kembali</b></a>
              
                  </div>
                </form>";
				}
				}				
				?>
				
              </div><!-- /.box -->

            </div><!--/.col (left) -->
			
           
          </div>   <!-- /.row -->
        </section><!-- /.content -->
		  
	  
      </div><!-- /.content-wrapper -->
 
<!-- jQuery 2.1.4 -->


<script type="text/javascript">
	$(function() {

		$("#refresh_jenis_in").click(function(){
			var urlnya = this.href;
			var isi2 = urlnya.split('=');
			var isi = isi2[1];
			$.ajax({
                url: "<?php echo base_url(); ?>" + "index.php/jenis_in/jenis_in_refresh",
                processData: false,
                contentType: false,
                type: 'POST',
                dataType: "json",
                success: function(response){
					if (response)
                    {
						$("#isi_jenis_in").html(response.isi_jenis_in);
					
					}
					else 
					{
					alert("sorry, cannot refresh");
					}
                	 
                }
            });

			
			return false;
		});
		
		$("#barcode").click(function(){
		
			$.ajax({
                url: "<?php echo base_url(); ?>" + "index.php/inventory/inventory_get?barcode="+$("#barcode_input").val(),
                type: 'POST',
                dataType: "json",
                success: function(response){
					if (response.hasil=='berhasil')
                    {
						$("#id").html(response.id);
						$("#judul").html(response.judul);
						$("#isbn").html(response.ISBN);
					
					}
					else 
					{
					alert("sorry, barcode tidak terdaftar");
					}
                	 
                }
            });

			
			return false;
		});
		
		
		$("#send").click(function(){
			
			var formdata = new FormData();      
            $.each($('#form_send').serializeArray(), function(a, b){
            formdata.append(b.name, b.value);
            });

			$.ajax({
                url: '<?php echo base_url('index.php/inventory_in/inventory_in_edit_proses');?>',
            	data : formdata,
                processData: false,
                contentType: false,
                type: 'POST',
                dataType: "json",
                success: function(response){
                	if(response.hasil == 'berhasil'){
                		$("#form_send")[0].reset();
                		$("#barcode_input").focus();
                		alert(response.keterangan);
						window.location = response.action;
						
                	}
                	else if(response.hasil == 'barcode'){
                		$("#barcode_input").focus();
                		alert(response.keterangan);
                	}
					else if(response.hasil == 'jumlah'){
                		$("#jumlah").focus();
                		alert(response.keterangan);
                	}
					else if(response.hasil == 'tanggal'){
                		$("#tanggal").focus();
                		alert(response.keterangan);
                	}
					else{
                		alert("gagal");
                	}
                }
            });

		});

		
	});



</script>
	

	
	
<!-- jQuery 2.1.4 -->
	 <script src="<?php echo base_url('assets/temp/plugins/jQuery/jQuery-2.1.4.min.js'); ?>"></script>
	      <!-- jQuery 2.1.4 -->
    <!-- CK Editor -->
    <script src="https://cdn.ckeditor.com/4.4.3/standard/ckeditor.js"></script>
    <!-- Bootstrap WYSIHTML5 -->
    <script src="<?php echo base_url('assets/temp/plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.all.min.js'); ?>" type="text/javascript"></script>
    <script type="text/javascript">
      $(function () {
        // Replace the <textarea id="editor1"> with a CKEditor
        // instance, using default configuration.
        CKEDITOR.replace('editor1');
        //bootstrap WYSIHTML5 - text editor
        $(".textarea").wysihtml5();
      });
    </script>