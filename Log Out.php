<?php
    //mengaktifkan sssion
    session_start();
    //menghapus semua session
    session_destroy();
    // mengalihkan halaman sambil mengirim pesan log out
    header("location:index.php?pesan=logout");
?>