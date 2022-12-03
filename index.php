<?php require_once('./templates/header_login.php'); ?>

<div class="container">

    <!-- Outer Row -->
    <div class="row justify-content-center">

        <div class="col-xl-6 col-lg-6 col-md-6">

            <div class="card o-hidden border-0 shadow-lg my-5">
                <div class="card-body p-0">
                    <!-- Nested Row within Card Body -->
                    <div class="row">

                        <div class="col-lg">
                            <div class="p-5">
                                <div class="text-center">
                                    <img src="./assets/img/bg.png" width="260pt" height="140pt">
                                    <p>
                                        admin : admin <br>
                                        marketing : marketing<br>
                                        manager : manager<br>
                                        teguh : teguh
                                    </p>
                                </div>
                                <br>
                                <form action="./proses_login.php" method="post" class="user" onSubmit="return validasi()">
                                    <div class="form-group">
                                        <input type="text" class="form-control form-control-user" id="username" aria-describedby="username" placeholder="Username" name="username">
                                    </div>
                                    <div class="form-group">
                                        <input type="password" class="form-control form-control-user" id="password" placeholder="Password" name="password">
                                    </div>
                                    <button type="submit" name="btnLogin" class="btn btn-success btn-user btn-block">Login</button>
                                    <hr>
                                </form>

                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>

    </div>

</div>
<?php require_once('./templates/footer_login.php'); ?>

<script type="text/javascript">
    function validasi() {
        var username = document.getElementById("username").value;
        var password = document.getElementById("password").value;
        if (username != "" && password != "") {
            return true;
        }
        if (username == "") {
            // Swal.fire(
            //     'Username harus di isi!',
            //     '',
            //     'error'
            // );
            alert('Username harus diisi');
            return false;
        }
        if (password == "") {
            // Swal.fire(
            //     'Password harus di isi!',
            //     '',
            //     'error'
            // );
            alert('Password harus diisi');
            return false;
        }
    }
</script>