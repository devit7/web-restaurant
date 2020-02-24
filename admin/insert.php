<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>INSERT</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">

</head>
<body style="background: #00BFFF;">
<div class="kotak" style="background: white;box-shadow: 0 0 5px gray;margin: 80px auto;
    padding: 60px 30px;width: 450px;">
    <form action="index.php" class="was-validated" method="post" >
         <h1 style="text-align:center;">TAMBAH MAKANAN/MINUMAN</h1>
         <br><br>
    <div class="auto">
          <input type="text" class="form-control" placeholder="nama makanan" id="validationDefault03" required>
    </div>
         <br>
    <div class="custom-file">
          <input type="file" class="custom-file-input" id="validatedCustomFile" name="foto" required>
          <label class="custom-file-label" for="validatedCustomFile" >gambar makanan</label>
     <div class="invalid-feedback">gambar belum di masukan</div>
     </div>
     <div class="auto">
        <br>
        <input type="text" class="form-control" placeholder="link / url gambar " id="validationDefault03" required>
    </div>
    <br><br>
    <button type="button" class="btn btn-success">TAMBAHKAN</button>
    </form>
</div>
</body>
</html>