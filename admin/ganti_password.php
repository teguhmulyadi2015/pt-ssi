<?php


if (isset($_POST['btnSubmit'])) {
    include 'config.php';
    $password_lama            = $_POST['password_lama'];
    $password_baru            = $_POST['password_baru'];
    $konfirmasi_password    = $_POST['konfirmasi_password'];
    $id_pengguna             = $_SESSION['id_pengguna']; //ini dari session saat login
    //pengecekan password lama ke database
    $password_lama = md5($password_lama);
    $sql = "SELECT * FROM tbl_pengguna WHERE password = '$password_lama'";
    $cek = mysqli_query($con, $sql);


    if (mysqli_num_rows($cek)) {

        if (strlen($password_baru) >= 5) {

            if ($password_baru == $konfirmasi_password) {
                //jika semua kondisi sudah benar, maka melakukan update kedatabase
                //query UPDATE SET password = encrypt md5 password_baru
                //kondisi WHERE id user = session id pada saat login, maka yang di ubah hanya user dengan id tersebut
                $password_baru     = md5($password_baru);


                $sql2 = "UPDATE tbl_pengguna SET password='$password_baru' WHERE id_pengguna=$id_pengguna";
                $update = mysqli_query($con, $sql2);

                if ($update) {
                    //kondisi jika proses query UPDATE berhasil
                    echo '<script>alert("password berhasil diubah,, silahkan login kembali"); document.location="/pt-ssi";</script>';
                } else {
                    //kondisi jika proses query gagal
                    echo '<script>alert("gagal merubah password,, silahkan login kembali"); document.location="/pt-ssi";</script>';
                }
            } else {
                //kondisi jika password baru beda dengan konfirmasi password
                echo '<script>alert("konfirmasi password tidak cocok"); document.location="../admin/index.php?menu=ganti_password&action=tampil";</script>';
            }
        } else {
            //kondisi jika password baru yang dimasukkan kurang dari 5 karakter
            echo '<script>alert("minimal password 5 karakter, silahkan coba kembali"); document.location="../admin/index.php?menu=ganti_password&action=tampil";</script>';
        }
    } else {
        //kondisi jika password lama tidak cocok dengan data yang ada di database
        echo '<script>alert("password lama tidak cocok, silahkan coba kembali"); document.location="../admin/index.php?menu=ganti_password&action=tampil";</script>';
    }
}

?>

<div class="card shadow mb-4">
    <div class="card-header py-3">
        <h6 class="m-0 font-weight-bold text-primary">Ganti Password</h6>
    </div>
    <div class="card-body">
        <form action="" method="POST" onSubmit="return validasi()">
            <div class="form-group row">
                <label for="password_lama" class="col-sm-2 col-form-label">Password Lama</label>
                <div class="col-sm-10">
                    <input type="password" class="form-control" id="password_lama" name="password_lama">
                </div>
            </div>
            <div class="form-group row">
                <label for="password_baru" class="col-sm-2 col-form-label">Password Baru</label>
                <div class="col-sm-10">
                    <input type="password" class="form-control" id="password_baru" name="password_baru">
                </div>
            </div>
            <div class="form-group row">
                <label for="konfirmasi_password" class="col-sm-2 col-form-label">Ulangi Password</label>
                <div class="col-sm-10">
                    <input type="password" class="form-control" id="konfirmasi_password" name="konfirmasi_password">
                </div>
            </div>
            <div class="form-group row">

                <div class="col-sm-12">
                    <button class="btn btn-success float-right " type="submit" name="btnSubmit"><i class=" fas fa-fw fa-save"></i>Simpan</button>
                    <button class="btn btn-warning float-right" type="reset"><i class=" fas fa-fw fa-sync-alt"></i>Reset</button>

                </div>
            </div>

        </form>
    </div>
</div>

<script type="text/javascript">
    function validasi() {
        var password_lama = document.getElementById("password_lama").value;
        var password_baru = document.getElementById("password_baru").value;
        var konfirmasi_password = document.getElementById("konfirmasi_password").value;

        if (password_lama != "" && password_baru != "" && konfirmasi_password != "") {
            return true;
        }
        if (password_lama == "") {
            // Swal.fire(
            //     'Username harus di isi!',
            //     '',
            //     'error'
            // );
            alert('password lama harus diisi');
            return false;
        }
        if (password_baru == "") {
            // Swal.fire(
            //     'Username harus di isi!',
            //     '',
            //     'error'
            // );
            alert('password baru harus diisi');
            return false;
        }
        if (konfirmasi_password == "") {
            // Swal.fire(
            //     'Username harus di isi!',
            //     '',
            //     'error'
            // );
            alert('konfirmasi password harus diisi');
            return false;
        }
    }
</script>