      <div class="page-wrapper">
        <!-- Page body -->
        <div class="page-body justify-content-center">
          <div class="container-xl d-flex flex-column justify-content-center ">
          	<div class="row">
          		<div class="col-md-12">
                <div class="card justify-content-center">
                  <div class="card-header bg-primary text-white">
                    <h3 class="card-title">Tambah Data Akad</h3>
                    <div class="card-actions">
                     <a class="btn btn-success" href="<?= base_url('Fungsi/back'); ?>">Kembali</a>
                   </div>
                  </div>
                  <div class="card-body">
                            <form id="myForm" action="<?= base_url('Fungsi/upload'); ?>" method="post" enctype="multipart/form-data">
                            <div class="row">
                                <div class="mb-3">
                              <div class="form-label">Nama</div>
                              <select name="Nama" class="form-select">
                                 <?php foreach ($tamu as $dt) : //dt = data ?>
                                <option value="<?= $dt->id_tamu; ?>"><?= $dt->Nama; ?></option>
                                <?php endforeach; ?>
                              </select>
                            </div>
                              <input type="hidden" name="tanggal" value=" <?= date('Y-m-d'); ?>">
                              <div class="mb-3">
                                <label class="form-label">merek</label>
                                <input type="text" class="form-control" name="merek" placeholder="VARIO" value="<?= set_value('merek') ?>">
                                <div id="emerek" class="text-red"><?= form_error('merek'); ?></div>
                            </div>
                              <div class="mb-3">
                                <label class="form-label">Gambar</label>
                                <input type="file" class="form-control" name="gambar">
                                <div id="egambar" class="text-red"></div>
                                <?php echo @$eror; ?>
                            </div>
                            <div class="row">
                            <div class="col-md-4"></div>
                            <div class="col-md-6">
                            <button id="tambahBtn" class="btn btn-primary w-75">
                                Tambah
                            </button>
                            </div>
                            </div>
                         </form>
                  </div>
                </div>
                </div>
              </div>
          	</div>
          </div>
      </div>
      <script>
    // Fungsi yang akan dijalankan ketika tombol "Tambah" diklik
    function updateData() {
        // Cegah form melakukan submit dan reload halaman
        event.preventDefault();

        // Lakukan validasi form jika diperlukan
        var merekInput = document.querySelector('input[name="merek"]');
        var gambarInput = document.querySelector('input[name="gambar"]');

        if (merekInput.value.trim() === '') {
            document.getElementById('emerek').innerHTML = "merek tidak boleh kosong";
            merekInput.focus();
            return false;
        }

         // Cek apakah pengguna telah memilih file
        if (gambarInput.files.length === 0) {
            document.getElementById('egambar').innerHTML = "Pilih gambar terlebih dahulu ";
            gambarInput.focus();
            return false;
        }

        // Jika validasi sukses, lanjutkan dengan mengirim form menggunakan AJAX atau metode yang Anda inginkan
        // Contoh menggunakan jQuery AJAX
        $.ajax({
            type: 'POST',
            url: '<?= base_url("Fungsi/upload"); ?>',
            data: new FormData(document.getElementById('myForm')),
            processData: false,
            contentType: false,
            cache: false,
            success: function(response) {
                // Tindakan setelah berhasil menambah data
                console.log('Data berhasil ditambahkan');
                alert('Data berhasil ditambahkan');
                window.location.href = '<?= base_url("Fungsi/back"); ?>'; // Redirect halaman setelah tambah data
            },
            error: function(xhr, status, error) {
                // Tindakan jika terjadi error
                console.error(xhr.responseText);
                alert('Terjadi kesalahan saat menambah data');
            }
        });
    }

    // Tambahkan event listener pada tombol "Tambah" agar memanggil fungsi updateData saat diklik
    document.getElementById('tambahBtn').addEventListener('click', updateData);

     // Berikan event listener pada input merek untuk menyembunyikan peringatan saat ada input
    var merekInput = document.querySelector('input[name="merek"]');
    merekInput.addEventListener('input', function () {
        var merekValue = merekInput.value.trim();
        var peringatan = document.querySelector('.text-red');

        if (merekValue !== '') {
            peringatan.textContent = '';
        }
    });

    // Berikan event listener pada input gambar untuk menyembunyikan peringatan saat ada input
    var gambarInput = document.querySelector('input[name="gambar"]');
    gambarInput.addEventListener('input', function () {
        var peringatan = document.querySelector('.text-red');
        peringatan.textContent = '';
    });
</script>