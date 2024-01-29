<?php
if (isset($_GET["x"])) {
    switch ($_GET["x"]) {
        case 'keluar':
            include('close.php');
            break;
        // admin page
        case 'admin':
            include('admin/admin.php');
            break;
        case 'tadmin':
            include('admin/tadmin.php');
            break;
        case 'sadmin':
            include('admin/sadmin.php');
            break;
        case 'hadmin';
            include('admin/hadmin.php');
            break;
        case 'eadmin':
            include('admin/eadmin.php');
            break;
        case 'uadmin':
            include('admin/uadmin.php');
            break;
        // mobil page
        case 'mobil';
            include('mobil/mobil.php');
            break;
        case 'tmobil':
            include('mobil/tmobil.php');
            break;
        case 'smobil';
            include('mobil/smobil.php');
            break;
        case 'hmobil';
            include('mobil/hmobil.php');
            break;
        case 'emobil';
            include('mobil/emobil.php');
            break;
        case 'umobil';
            include('mobil/umobil.php');
            break;
        // Order Page
        case 'order';
            include('order/order.php');
            break;
        case 'torder';
            include('order/torder.php');
            break;
        case 'sorder';
            include('order/sorder.php');
            break;
        case 'horder';
            include('order/horder.php');
            break;
        // Karyawan page
        case 'karyawan';
            include('karyawan/karyawan.php');
            break;
        case 'tkaryawan':
            include('karyawan/tkaryawan.php');
            break;
        case 'skaryawan';
            include ('karyawan/skaryawan.php');
            break;
    }
} else {
    echo "<h3> Halaman dalam proses Pembangunan! </h3>";
}