<h2><center>Daftar tamu</center></h2>
<hr>
                  <table border="1" width="100%">
                      <thead class="thead-dark">
                          <th>No</th>
                          <th>Name</th>
                          <th>Kontak</th>
                          <th>Cabang</th>
                          <th>Informasi</th>
                          <th>Petugas</th>
                      </thead>
                      <?php
                        $no = 1;
                        foreach ($tamu as $dt) : //dt = datatamu 
                      ?>
                      <tbody>
                        <tr>
                          <td><?= $no; ?></td>
                          <td><?= $dt->Nama; ?><br><?= $dt->Tujuan; ?></td>
                          <td><?= $dt->Kontak; ?><br><?php  if($dt->Kontak == $dt->noWa) { echo "-"; } else {?>
                            <?= $dt->noWa; }?></td>
                          <td><?= $dt->nama_cabang; ?><br><?= $dt->Bidang; ?></td>
                          <td><?= $dt->JenisInformasi; ?><br><?= $dt->Informasi; ?></td>
                          <td><?= $dt->nama_petugas; ?><br><?= date('Y-M-d', strtotime($dt->tanggal)); ?></td>
                        </tr>
                      </tbody>
                    <?php $no++; ?>
                    <?php endforeach; ?>
                      </tbody>
                    </table>