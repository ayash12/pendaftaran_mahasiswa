<div class="main-panel">
			<div class="content">
				<div class="page-inner">
					<div class="page-header">
						<h4 class="page-title">Pendaftar</h4>
						<div class="btn-group btn-group-page-header ml-auto">
							<button type="button" class="btn btn-light btn-round btn-page-header-dropdown dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
								<i class="fa fa-ellipsis-h"></i>
							</button>
							
						</div>
					</div>
					<div class="row">
						<div class="col-sm-12 col-md-8">
						<table id="example" class="display nowrap table-striped table-bordered table" style="width:100%">
<thead>
     <tr>
         <th>Nama</th>
         <th>No Tlp</th>
         <th>Asal Sekolah</th>
         <th>Alamat</th>
         <th>Jurusan</th>
		 <th>#</th>
       
     </tr>
 </thead>
<tbody>
<?php foreach($data as $d){?>
     <tr>
         <td><?= $d->nama?></td>
		 <td><?= $d->noHp?></td>
		 <td><?= $d->asalsekolah?></td>
		 <td><?= $d->alamat?></td>
		 <td><?= $d->jurusanygdipilih?></td>
		 <td>
		 <a href="<?= base_url('pendaftar/update/'.$d->id)?>">update</a>
			<a href="<?= base_url('pendaftar/delete/'.$d->id)?>">delete</a>
		</td>
     
     </tr>
    <?php } ?>
</body>

</table>
						</div>
				
					</div>
				
				</div>
			</div>
			
		</div>