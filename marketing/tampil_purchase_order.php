<?php
include 'config.php';
$sql = "SELECT * FROM tbl_purchaseorder";
$hasil = mysqli_query($con, $sql);


$sql2 = "SELECT DISTINCT start FROM tbl_purchaseorder";
$hasil2 =  mysqli_query($con, $sql2);
?>

<!-- <h1 class="h3 mb-4 text-gray-800">Ini Data User</h1> -->

<a href="?menu=po&action=tambah" class="btn btn-success my-2">
  <i class="fas fa-fw fa-plus-square"></i>
  <span>Tambah Data</span>
</a>



<!-- filter data -->

<div class="card shadow mb-4">
  <div class="card-header py-3">
    <h6 class="m-0 font-weight-bold text-primary">Filter Data</h6>
  </div>
  <div class="card-body">
    <form method="POST" action="">
      <div class="form-group row">
        <label for="tanggal" class="col-sm-2 col-form-label">Tanggal</label>
        <div class="col-sm-10">
          <select name="tanggal" class="form-control" id="tanggal">
            <option value="">--Pilih--</option>
            <?php
            while ($row2 = mysqli_fetch_assoc($hasil2)) {
            ?>
              <option value="<?= $row2['start']; ?>"><?= date(('d F Y'), strtotime($row2['start'])); ?></option>
            <?php
            } //end while
            ?>
          </select>
        </div>
      </div>
      <div class="col-sm-12">
        <button class="btn btn-success float-right" type="submit" name="btnFilter"><i class=" fas fa-fw fa-filter"></i>Filter</button>
        <a href="?menu=po&action=tampil" class="btn btn-info float-right mx-2">
          <i class="fas fa-fw fa-clipboard-list"></i>
          <span>tampil semua</span>
        </a>
      </div>
    </form>
  </div>
</div>



<?php
if (isset($_POST['btnFilter'])) {
  include 'config.php';
  $tanggal = $_POST['tanggal'];

  $sql3 = " SELECT * FROM tbl_purchaseorder WHERE start= '$tanggal'
    ";
  $hasil3 = mysqli_query($con, $sql3);
?>


  <div class="card shadow mb-4">
    <div class="card-header py-3">
      <h6 class="m-0 font-weight-bold text-primary">Purhcase Order</h6>
    </div>
    <div class="card-body">
      <div class="table-responsive">
        <table class="table table-hover" id="dataTable" width="100%" cellspacing="0">
          <thead class="thead-light">
            <tr>
              <th>#</th>
              <th>No. PO</th>
              <th>Perusahaan</th>
              <th>Atas nama</th>
              <th>No. Telepon</th>
              <th>Jumlah</th>
              <th>Aksi</th>
            </tr>
          </thead>
          <tbody>
            <?php
            $i = 1;
            while ($row3 = mysqli_fetch_assoc($hasil3)) {

            ?>
              <tr>
                <th scope="row"><?= $i++ ?></th>
                <td><?= $row3['nomor_po']; ?></td>
                <td><?= $row3['nama_perusahaan']; ?></td>
                <td><?= $row3['atas_nama']; ?></td>
                <td><?= $row3['no_telepon']; ?></td>
                <td><?= $row3['jumlah_pesanan']; ?></td>
                <td>
                  <a href="?menu=po&action=detail&id=<?= $row3['id_purchase_order'] ?>" class="badge badge-info">info</a>
                  <a href="?menu=po&action=edit&id=<?= $row3['id_purchase_order'] ?>" class="badge badge-warning">edit</a>
                  <a href="proses_delete_purchase_order.php?id=<?= $row3['id_purchase_order'] ?>" class="badge badge-danger" onclick="return confirm('Yakin delete?');">delete</a>
                </td>
              </tr>


            <?php }
            ?>
          </tbody>
        </table>
      </div>
    </div>
  </div>

<?php
} else {

?>

  <div class="card shadow mb-4">
    <div class="card-header py-3">
      <h6 class="m-0 font-weight-bold text-primary">Purhcase Order</h6>
    </div>
    <div class="card-body">
      <div class="table-responsive">
        <table class="table table-hover" id="dataTable" width="100%" cellspacing="0">
          <thead class="thead-light">
            <tr>
              <th>#</th>
              <th>No. PO</th>
              <th>Perusahaan</th>
              <th>Atas nama</th>
              <th>No. Telepon</th>
              <th>Jumlah</th>
              <th>Aksi</th>
            </tr>
          </thead>
          <tbody>
            <?php
            $i = 1;
            while ($row = mysqli_fetch_assoc($hasil)) {

            ?>
              <tr>
                <th scope="row"><?= $i++ ?></th>
                <td><?= $row['nomor_po']; ?></td>
                <td><?= $row['nama_perusahaan']; ?></td>
                <td><?= $row['atas_nama']; ?></td>
                <td><?= $row['no_telepon']; ?></td>
                <td><?= $row['jumlah_pesanan']; ?></td>
                <td>
                  <a href="?menu=po&action=detail&id=<?= $row['id_purchase_order'] ?>" class="badge badge-info">info</a>
                  <a href="?menu=po&action=edit&id=<?= $row['id_purchase_order'] ?>" class="badge badge-warning">edit</a>
                  <a href="proses_delete_purchase_order.php?id=<?= $row['id_purchase_order'] ?>" class="badge badge-danger" onclick="return confirm('Yakin delete?');">delete</a>
                </td>
              </tr>


            <?php }
            ?>
          </tbody>
        </table>
      </div>
    </div>
  </div>

<?php } ?>