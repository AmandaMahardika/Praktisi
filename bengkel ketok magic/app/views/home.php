<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
  <title>Admin Page</title>
</head>
<body>

<div class="container">
  <h2 class="text-center mb-5 mt-5">Admin Pendataan Sparepart Kendaraan</h2>

  
  <button type="button" class="btn btn-primary mb-4 float-right" data-toggle="modal" data-target="#formModal">Create</button>
  <table class="table table-dark">
  <thead>
    <tr>
      <th scope="col" class="text-center">#</th>
      <th scope="col" class="text-center">Nama</th>
      <th scope="col" class="text-center">No Antri</th>
      <th scope="col" class="text-center">Kerusakan</th>
      <th scope="col" class="text-center">Perbaikan</th>
      <th scope="col" class="text-center">Harga</th>
      <th scope="col" class="text-center">Action</th>

    </tr>
  </thead>
  <tbody>
  <?php foreach( $data['stf'] as $stf ) : ?>
    <tr>
      <th scope="row" class="text-center"><?= $stf['id']; ?></th>
      <td class="text-center"><?= $stf['nama']; ?></td>
      <td class="text-center"><?= $stf['noantri']; ?></td>
      <td class="text-center"><?= $stf['kerusakan']; ?></td>
      <td class="text-center"><?= $stf['perbaikan']; ?></td>
      <td class="text-center"><?= $stf['harga']; ?></td>
      <td class="text-center">
      <a href="<?= BASEURL; ?>/home/hapus/<?= $stf['id']; ?>" class="p-1 badge badge-danger" onclick="return confirm('yakin?');">hapus</a>
                  <a href="<?= BASEURL; ?>/home/ubah/<?= $stf['id']; ?>" class="p-1 badge badge-success tampilModalUbah" data-toggle="modal" data-target="#formModal" data-id="<?= $stf['id']; ?>">ubah</a>
      </td>
    </tr>
    <?php endforeach ?>
    
    
  </tbody>
</table>
  <div class="modal fade" id="formModal">
    <div class="modal-dialog">
      <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="formModalLabel">Tambah Data Sparepart</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
        
        <div class="modal-body">
        <form action="<?= BASEURL; ?>/home/tambah" method="POST">
        <input type="hidden" name="id" id="id">
            <div class="form-group">
              <label for="nama">nama</label>
              <input type="text" class="form-control" id="nama" name="nama">
            </div>
            <div class="form-group">
              <label for="noantri">Nomor Antri</label>
              <input type="text" class="form-control" id="noantri" name="noantri">
            </div>
            <div class="form-group">
              <label for="kerusakan">kerusakan</label>
              <input type="text" class="form-control" id="kerusakan" name="kerusakan">
            </div>
            <div class="form-group">
              <label for="perbaikan">perbaikan:</label>
              <input type="text" class="form-control" id="perbaikan" name="perbaikan">
            </div>
            <div class="form-group">
              <label for="harga">harga</label>
              <input type="text" class="form-control" id="harga" name="harga">
            </div>
            <button type="submit" class="btn btn-primary">Create</button>
          </form>
        </div>

      </div>
    </div>
  </div>
  

</div>

    <script src="<?= BASEURL; ?>/js/script.js"></script>
</body>
</html>
