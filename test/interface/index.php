<?php 
    include "proses.php";
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <!-- css bootstrap -->
    <link rel="stylesheet" href="css/bootstrap.min.css">
</head>
<body>

<!-- header -->
<div class="jumbotron jumbotron-fluid">
  <div class="container">
    <h1 class="display-4">Fluid jumbotron</h1>
    <p class="lead">This is a modified jumbotron that occupies the entire horizontal space of its parent.</p>
  </div>
</div>

<!-- navbar -->
<nav class="navbar navbar-expand-lg navbar-light bg-light">
  <a class="navbar-brand" href="#">Navbar</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item active">
        <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">Link</a>
      </li>
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          Dropdown
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
          <a class="dropdown-item" href="#">Action</a>
          <a class="dropdown-item" href="#">Another action</a>
          <div class="dropdown-divider"></div>
          <a class="dropdown-item" href="#">Something else here</a>
        </div>
      </li>
      <li class="nav-item">
        <a class="nav-link disabled" href="#" tabindex="-1" aria-disabled="true">Disabled</a>
      </li>
    </ul>
    <form class="form-inline my-2 my-lg-0">
      <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
      <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
    </form>
  </div>
</nav>


<!-- konten -->
<div class="row">

    <!-- kategory link -->
    <div class="col-md-3">
    <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Repellendus magni ea necessitatibus possimus hic aliquid doloremque perferendis harum, libero, natus expedita molestiae deserunt aut eos dolorum illum, laborum quibusdam reprehenderit.</p>
    </div>

    <!-- isi konten -->
    <div class="col-md-9">
        <div class="row">
            <!-- konten gallery -->
                <div class="col-12">
                   <div class="row">
                   <div class="col-6 col-md-4 shadow p-4">
                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Magnam, repellat dolore mollitia fuga autem cumque aut. Corrupti saepe praesentium quia maxime, eligendi similique! Eum numquam tenetur facere qui, vel aut?
                    </div>
                    <div class="col-6 col-md-4 shadow p-4">
                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Magnam, repellat dolore mollitia fuga autem cumque aut. Corrupti saepe praesentium quia maxime, eligendi similique! Eum numquam tenetur facere qui, vel aut?
                    </div>
                    <div class="col-6 col-md-4 shadow p-4">
                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Magnam, repellat dolore mollitia fuga autem cumque aut. Corrupti saepe praesentium quia maxime, eligendi similique! Eum numquam tenetur facere qui, vel aut?
                    </div>
                    <div class="col-6 col-md-4 shadow p-4">
                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Magnam, repellat dolore mollitia fuga autem cumque aut. Corrupti saepe praesentium quia maxime, eligendi similique! Eum numquam tenetur facere qui, vel aut?
                    </div>
                    <div class="col-6 col-md-4 shadow p-4">
                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Magnam, repellat dolore mollitia fuga autem cumque aut. Corrupti saepe praesentium quia maxime, eligendi similique! Eum numquam tenetur facere qui, vel aut?
                    </div>
                    <div class="col-6 col-md-4 shadow p-4">
                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Magnam, repellat dolore mollitia fuga autem cumque aut. Corrupti saepe praesentium quia maxime, eligendi similique! Eum numquam tenetur facere qui, vel aut?
                    </div>
                    <div class="col-6 col-md-4 shadow p-4">
                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Magnam, repellat dolore mollitia fuga autem cumque aut. Corrupti saepe praesentium quia maxime, eligendi similique! Eum numquam tenetur facere qui, vel aut?
                        <br>
                    </div>
                    <br>
                </div>
                    
                </div>
            <br> 
            <!-- konten form komentar -->
            <div class="col-12">
                <form action="" method="POST">
                    <br>
                    <label for="nm">Nama buah</label>
                    <input type="text" name="namaBuah" class="form-control" id="nm">

                    <label for="em">harga buah</label>
                    <input type="number" name="hargaBuah" class="form-control" id="em">

                    <label for="al">alamat pengiriman</label>
                    <textarea name="alamat" class="form-control" id="al" cols="30" rows="10"></textarea>
                    
                    <input type="radio" name="jenis" id="jkl" value="Diskon">
                    <label for="jkl">Diskon</label>
                    <input type="radio" name="jenis" id="jkp" value="Tidak Diskon">
                    <label for="jkp">Tidak Diskon</label>
                    <br>

                    <label for="jr"> Jenis Buah <br></label>
                    <select name="jenisBuah" id="jr" class="form-control">
                    <?php foreach($dataBuah as $buah) :?>
                    <option value="<?= $buah?>"><?= $buah?></option>
                    <?php endforeach; ?>
                    </select>
                    <button type="submit" name="data" class="btn btn-primary">Submit</button>
                </form>
            </div>
        </div>
    </div>
    <!-- isi kontent -->
</div>


<!-- pemanggilan file jquery.js -->
<script src="js/jquery.js"></script>    

<!-- pemanggilan file bootstrap.js -->
<script src="js/bootstrap.min.js"></script>
</body>
</html>