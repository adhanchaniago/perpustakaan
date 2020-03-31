
 <!-- Content Wrapper. Contains page content -->
      <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
          <h1>
        Laporan inventory Buku
          </h1>
		   <ul class="nav nav-tabs">
			  <li role="presentation"  ><a href="<?php echo base_url('index.php/laporan_inventory/'); ?>">Data Inventory Buku</a></li>
			  <li role="presentation" class="active"><a href="<?php echo base_url('index.php/laporan_inventory/inventory_stat'); ?>">Statistik Buku</a></li>
			</ul>
          <ol class="breadcrumb">
            <li><a href="<?php echo base_url('index.php/admin');?>"><i class="fa fa-dashboard"></i> Home</a></li>
            <li class="active">Laporan inventory</li>
          </ol>
        </section>
			
       
            
   
					
               
            
        <section class="content">
            <div class="row">
            <div class="col-xs-12">
              <div class="box">
                <div class="box-header">
                  <h3 class="box-title">Data inventory</h3>
				 <p>
				   <a href='<?php echo base_url('index.php/laporan_inventory/inventory_stat_print');?>' target='_blank' ><button class='btn btn-primary'> 
				 Print preview</button>
				 </a>
				  <p>
				 
			<?php 
				if(!isset($_GET['lap_search_inv'])) {
				$lap_search_inv="";
				}
				else {
				$lap_search_inv=$_GET['lap_search_inv'];
				}
			?>
			<?php
			if ($lap_search_inv<>''){
			?>
				<p>Hasil pencarian dengan keyword : <i><?php echo"$lap_search_inv";?></i>
			<?php
			}
			?>
                  <div class="box-tools">
				   <form action='<?php echo base_url('index.php/laporan_inventory/inventory_stat');?>' method='get'>
                   <div class="input-group">
                     <input type="text" name="lap_search_inv" value='<?php echo$this->session->userdata('lap_search_inv'); ?>' class="form-control input-sm pull-right" style="width: 150px;" placeholder="lap_search_inv"/>
                      <div class="input-group-btn">
                        <button class="btn btn-sm btn-default"><i class="fa fa-search"></i></button>
						<?php 
						
						if ($this->session->userdata('lap_search_inv')!=''){
						?>
						<a href='<?php echo base_url('index.php/laporan_inventory/inventory_stat?ref=all');?>'><i class="btn btn-sm btn-default"><i class="fa fa-remove"></i></i></a>
						<?php 
						}
						?>
					  </div>
                    </div>
                  </div>
					  </form>
                </div><!-- /.box-header -->
                <div class="box-body table-responsive no-padding">
                  <table class="table table-hover">
                    <tr>
                      <th style=width:5%>No</th>
                      <th style=width:15%>Barcode</th>
                      <th style=width:15%>ISBN</th>
                      <th style=width:20%>Judul inventory</th>
                      <th style=width:10%>Kategori</th>
                      <th style=width:7%>In</th>
                      <th style=width:7%>Out</th>
                      <th style=width:7%>Pinjam</th>
                      <th style=width:7%>Kembali</th>
                      <th style=width:7%>Jumlah</th>
                    </tr>
                   <?php 
				$no = 0;
				if($dari < 1){ 
					$nodar = 1;
				}
				else{
					$nodar = $dari;
				} 
				foreach($inventory as $mn){
					$no++;
					echo "<tr>";
					echo "<td align='center' style='vertical-align:middle'>$nodar</td>
					<td style='vertical-align:middle'>$mn->barcode_inventory</td>
					<td style='vertical-align:middle'>$mn->ISBN</td>
					<td style='vertical-align:middle'>$mn->judul_inventory</td>
					<td style='vertical-align:middle'>$mn->nama_category_inventory</td>";
					
					$jumlah_in = $this->db->query("select sum(jumlah_inventory_in) as jum_in from tbl_inventory_in where id_inventory=".$mn->id_inventory." ")->row()->jum_in;
					echo"
					<td style='vertical-align:middle'>$jumlah_in</td>";
					
					$jumlah_out = $this->db->query("select sum(jumlah_inventory_out) as jum_out from tbl_inventory_out where id_inventory=".$mn->id_inventory." ")->row()->jum_out;
					echo"
					<td style='vertical-align:middle'>$jumlah_out</td>";
					
					$jumlah_pinjam = $this->db->query("select count(*) as jum_pinjam from tbl_peminjaman where id_inventory=".$mn->id_inventory." ")->row()->jum_pinjam;
					echo"
					<td style='vertical-align:middle'>$jumlah_pinjam</td>";
					
					$jumlah_kembali = $this->db->query("select count(*) as jum_kembali from tbl_pengembalian where id_inventory=".$mn->id_inventory." ")->row()->jum_kembali;
					echo"
					<td style='vertical-align:middle'>$jumlah_kembali</td>";
					
					$jumlah_total = ($jumlah_in+$jumlah_kembali)-($jumlah_out+$jumlah_pinjam);
					echo"
					<td style='vertical-align:middle'>$jumlah_total</td>";
					
					echo"</td>";
					echo "</tr>";
					$nodar++;
				}
			echo "</table>";
			echo "<center>$paging</center>";
			?>
			<div class="col-lg-8 form-inline">
			
			
			<?php 
				$page_url=current_url();
				$pag = $this->db->query("select paging from set_paging")->row()->paging;?>
			<form class="form-group" method="post" action="<?php echo base_url('index.php/paging/ubahpaging?url='.$page_url.'');?>">
				<select name ="paginge" class="form-control" style="width:70px" onchange="this.form.submit()">
					<option <?php if($pag == 5){echo 'selected = \"selected\" ';}?> value = "5">5</option>
					<option <?php if($pag == 10){echo 'selected = \"selected\" ';}?> value = "10">10</option>
					<option <?php if($pag == 25){echo 'selected = \"selected\" ';}?> value = "25">25</option>
					<option <?php if($pag == 50){echo 'selected = \"selected\" ';}?> value = "50">50</option>
					<option <?php if($pag == 100){echo 'selected = \"selected\" ';}?> value = "100">100</option>
					<option <?php if($pag == 200){echo 'selected = \"selected\" ';}?> value = "200">200</option>
				</select>
			</form>

			<?php
			
			echo "Menampilkan ";
			if(($dari < 0) && ($total >0)){ $dari = 1;} else {$dari = 0;} echo $dari." - ".$keee." dari "; echo $total." data";
			?>
			</div>
			
			
			
             

            </section><!-- right col -->
          </div><!-- /.row (main row) -->

        </section><!-- /.content -->
      </div><!-- /.content-wrapper -->
      


	<script>
	$(document).ready(function() {
		// ketika tombol detail ditekan
		$('.print_kartu').on("click", function(){
		// ambil nilai id dari link print
		var no_daftar= this.id;
		$("#MyModalBody").html('<iframe src="<?php echo base_url();?>index.php/pdf/kartu/'+no_daftar+'" frameborder="no" width="570" height="400"></iframe>');
		});	
	});
	
	</script>		
