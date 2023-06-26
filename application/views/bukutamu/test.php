<?php $this->load->view('bukutamu/side/heading.php'); ?>
      <?php $this->load->view('bukutamu/side/navbar.php'); ?>
      <div class="page-wrapper">
        <!-- Page body -->
        <div class="page-body">
            <?php 
             $this->load->library('image_lib');
        foreach($akad as $row) {
            $config['image_library'] = 'gd2';
            $config['source_image'] = 'upload/akad/'.$row->gambar.'.jpg';
            $config['create_thumb'] = TRUE;
            $config['maintain_ratio'] = TRUE;
            $config['width']     = 75;
            $config['height']   = 50;

            $this->image_lib->clear();
            $this->image_lib->initialize($config);
            $this->image_lib->resize();
            }
             ?>
      </div>
    </div>
    
    <?php $this->load->view('bukutamu/side/footer.php'); ?>