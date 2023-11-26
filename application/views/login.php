<!doctype html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
    integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css" />
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.1.0/css/all.css"
    integrity="sha384-lKuwvrZot6UHsBSfcMvOkWwlCMgc0TaWr+30HWe3a4ltaBwTZhyTEggF5tJv8tbt" crossorigin="anonymous">
  <link rel="stylesheet" href="assets/css/style.css">
  <link rel="stylesheet" type="text/css"
    href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.3/css/bootstrap.css">
  <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.20/css/dataTables.bootstrap4.min.css">

  <!-- Optional JavaScript -->
  <!-- jQuery first, then Popper.js, then Bootstrap JS -->
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"
    integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1"
    crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"
    integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM"
    crossorigin="anonymous"></script>
  <script src="https://code.jquery.com/jquery-3.3.1.min.js"
    integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8=" crossorigin="anonymous"></script>
  <script src='https://www.google.com/recaptcha/api.js'></script>
  <script type="text/javascript" src="https://code.jquery.com/jquery-3.3.1.js"></script>
  <script type="text/javascript" src="https://cdn.datatables.net/1.10.20/js/jquery.dataTables.min.js"></script>
  <script type="text/javascript" src="https://cdn.datatables.net/1.10.20/js/dataTables.bootstrap4.min.js"></script>

  <title>Cafe Ceria</title>
</head>

<body style="overflow: hidden; background-image: url(.../../assets/img/toko3.jpg); background-repeat: no-repeat; background-size: cover;">
  <!-- Start Sidebar -->
  <nav class="navbar navbar-expand-md navbar-dark bg-dark" style="">
  
    <a class="navbar-brand text-center" href="#" style="margin: 0 auto;">
      <span class="menu-collapsed">

        <b class="text-center">Cafe Ceria</b>
      </span>
    </a>
    <!-- <a href="#" style="color: white; margin-left: 40%;"><i class="fa fa-sign-out-alt"></i></a> -->
  </nav>
  <!-- End Sidebar -->
  <div class="row d-flex justify-content-center align-items-center">
    <div class="col-sm-3" style="background-color: #f5f5f5; margin-left: -1%; margin-top: 80px; border-radius: 10px;" >
      <br>
      <div style="margin-right: 3%; margin-left: 3%;">
        <!-- <div class="card-body"> -->
        <form action="<?php echo base_url() .'Login_controller/login' ?>" method="POST">
          <center>
            <img src="assets/img/default.jpg" style="width: 75%; ">
            <br>
            <br>
            <?php
            if (!empty($this->session->flashdata('errorLogin'))) {
              ?>
              <div class="alert alert-danger alert-dismissible fade show" role="alert" style="margin-top: 2%;">
                <?php echo $this->session->flashdata('errorLogin'); ?>
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
                </button>
              </div>
              <?php
            }
            ?>
            <?php
            if (!empty($this->session->flashdata('errorRecaptcha'))) {
              ?>
              <div class="alert alert-danger alert-dismissible fade show" role="alert" style="margin-top: 2%;">
                <?php echo $this->session->flashdata('errorRecaptcha'); ?>
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
                </button>
              </div>
              <?php
            }
            ?>
            <h5>Login Kasir</h5>
            <div class="form-group">
              <input type="text" class="form-control" id="user" name="username" placeholder="Masukkan username"
                required="required" oninvalid="this.setCustomValidity('Username is Required')"
                oninput="this.setCustomValidity('')">
            </div>
            <div class="form-group">
              <input type="password" class="form-control" id="password" placeholder="Masukkan password" name="password"
                required="required" oninvalid="this.setCustomValidity('Password is Required')"
                oninput="this.setCustomValidity('')">
            </div>
            <div class="form-group">
              <button type="submit" class="btn btn-success btn-block">Login</button>
            </div>
          </center>
        </form>
        <!-- </div> -->
      </div>
    </div>
  </div>



  <!-- Script -->
  <script src="https://code.jquery.com/jquery-3.4.1.js" integrity="sha256-WpOohJOqMqqyKL9FccASB9O0KwACQJpFTUBLTYOVvVU="
    crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"
    integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1"
    crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"
    integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM"
    crossorigin="anonymous"></script>
  <script src="https://code.jquery.com/jquery-3.3.1.min.js"
    integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8=" crossorigin="anonymous"></script>
  <script type="text/javascript" src="https://code.jquery.com/jquery-3.3.1.js"></script>
  </script>
</body>

</html>