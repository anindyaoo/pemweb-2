<?php
namespace App\Controllers;

class Page extends BaseController
{
    public function about()
    {
        echo "about page";
    }

    public function contact()
    {
        echo "contact page";
    }

    public function faqs()
    {
        echo "faqs page";
    }
    public function tos()
    {
        echo "Halaman Term of Service";
    }
    public function biodata()
    {
        echo "Biodata<br>";
        echo "Nama: Anindya Admawati<br>";
        echo "Tanggal Lahir: 10 Maret 2005<br>";
        echo "Alamat: Mojokerto";
    }
}