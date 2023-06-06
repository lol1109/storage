<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>test</title>
</head>
<body>
	<?= $tamu ?>
	<form action="<?= base_url('Fungsi/test') ?>" method="post">
		<div class="col-md-3">
                  	 		<div class="mb-3">
                              	<label class="form-label">Nama</label>
                              	<input type="text" class="form-control" name="Nama" value="<?= set_value('Nama') ?>">
                                 <div class="text-red"><?= form_error('Nama'); ?></div>
                            </div>
                            <br>

                      		<div class="mb-3">
                             	<label class="form-label">Kontak</label>
                              	<input type="text" class="form-control" name="Kontak" value="<?= set_value('Kontak') ?>">
                                <div class="text-red"><?= form_error('Kontak'); ?></div>
                            </div>
                            <div class="row">
                            <div class="col-md-4"></div>
                            <div class="col-md-6">
                            <button type="submit" name="kirim" class="btn btn-primary w-75">
                                Tambah
                            </button>
                            </div>
                            </div>
                        </div>
	</form>

</body>
</html>