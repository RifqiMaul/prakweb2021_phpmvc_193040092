<?php

class about {

    public function index($nama = 'RifqiMaul', $pekerjaan = 'Mahasiswa')
    {
        echo "Halo, nama saya $nama, saya adalah seorang $pekerjaan";
    }
    
    public function page()
    {
        echo 'About/page';
    }
}