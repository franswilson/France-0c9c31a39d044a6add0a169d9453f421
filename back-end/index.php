<?php
include 'config.php';

// mengaktifkan session
session_start();

// cek apakah user telah login, jika belum login maka di alihkan ke halaman login
if ($_SESSION['status'] != "login") {
    header("location:../front-end/index.html");
}

// menampilkan pesan selamat datang
echo "Hai, selamat datang " . $_SESSION['username'];

?>

<h2>waktu login anda </h2>


<script src="https://code.jquery.com/jquery-2.2.4.min.js" integrity="sha256-BbhdlvQf/xTY9gja0Dq3HiwQF8LaCRTXxZKRutelT44=" crossorigin="anonymous"></script>



<h2 id="timestamp"></h2>

<script>
    // Function ini dijalankan ketika Halaman ini dibuka pada browser
    $(function() {
        setInterval(timestamp, 1000); //fungsi yang dijalan setiap detik, 1000 = 1 detik
    });

    //Fungi ajax untuk Menampilkan Jam dengan mengakses File ajax_timestamp.php
    function timestamp() {
        $.ajax({
            url: 'time.php',
            success: function(data) {
                $('#timestamp').html(data);
            },
        });
    }
</script>

<br />
<br />
<a href="logout.php">LOGOUT</a>