




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
                    <form action="<?= base_url('pendaftar/update');?>" method="post">
                            <div class="row">
                                <div class="col-sm-12 col-md-12">
                                <label style="padding: 10px;" >Nama</label> 
                                <input type="text" name="nama" class="form-control" value="<?= $data->nama?>">
                                <input type="text" name="id" class="form-control" value="<?= $data->id?>" hidden>
                                
                                <label style="padding: 10px;">Asal Sekolah</label>
                                <input type="text" name="asalsekolah" class="form-control" value="<?= $data->asalsekolah?>">
                        
                                <label style="padding: 10px;">Jurusan</label>
                                <input type="text" name="jurusan" class="form-control" value="<?= $data->jurusanygdipilih?>">
                            
                                <label style="padding: 10px;">No Hp</label>
                                <input type="text" name="no_hp" class="form-control" value="<?= $data->noHp?>">
                                
                                <label style="padding: 10px;">Alamat</label>
                                <textarea  name="alamat" class="form-control"><?= $data->alamat?></textarea>
                            
                            
                                </div>
                                
                                
                            </div>
                            <br><br>
                            <button class="btn btn-info btn-border btn-round btn-sm mr-2">Save</button>
                    </form>
				
				</div>
			</div>
			
		</div>