code create.php untuk kategori

<!-- Content Wrapper. Contains page content --> 
<div class="content-wrapper"> 
    <!-- Content Header (Page header) --> 
    <section class="content-header"> 
        <div class="container-fluid"> 
            <div class="row mb-2"> 
                <div class="col-sm-6"> 
                    <h1>Halaman Kategori</h1> 
                </div> 
            </div> 
        </div><!-- /.container-fluid --> 
    </section> 
 
    <!-- Main content --> 
    <section class="content"> 
        <!--  --> 
        <!-- Default box --> 
 
        <div class="card"> 
            <div class="card-header"> 
                <h3 class="card-title"><?= $data['title'] ?></h3>  
            </div> 
            <div class="card-body"> 
                <!-- code untuk form tambah --> 
                    <div class="row">
                        <div class="col-sm-3"></div>
                        <div class="col-sm-6">
                            <form action="<?=base_url?>kategori/simpankategori" method="POST">
                                <div class="form-group">
                                    <label for="">Nama Kategori</label>
                                    <input type="text" name="nama_kategori" class="form-control" require>
                                </div>
                                <button type="submit" class="btn btn-primary btn-sm">Submit</button>
                            </form>
                        </div>
                    </div>
                <!-- end code form tambah --> 
            </div> 
            <!-- /.card-body --> 
            <div class="card-footer"> 
                Footer 
            </div> 
            <!-- /.card-footer--> 
        </div> 
        <!-- /.card --> 
 
    </section> 
    <!-- /.content --> 
</div> 
<!-- /.content-wrapper -->