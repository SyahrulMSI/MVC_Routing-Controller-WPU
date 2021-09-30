<?php

class about{
    public function index($nama = 'Syahrul MSI', $pekerjaan = 'Mahasiswa')
    {
        echo "Halo, nama saya $nama, pekerjaan $pekerjaan";
    }
    public function page()
    {
        echo 'about/page';
    }
}