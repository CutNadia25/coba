            <?php
            session_start();
             if (isset($_GET['x']) && $_GET['x']=='home') {
               $page = "home.php";
                include "main.php";
             }else if(isset($_GET['x']) && $_GET['x']=='menu') {
               $page = "menu.php";
                include "main.php";
             }else if(isset($_GET['x']) && $_GET['x']=='keranjang') {
               $page = "keranjang.php";
                include "main.php";
             }else if(isset($_GET['x']) && $_GET['x']=='customer') {
               $page = "customer.php";
                include "main.php";
             }else if(isset($_GET['x']) && $_GET['x']=='pengiriman') {
               $page = "pengiriman.php";
                include "main.php";
               }else if(isset($_GET['x']) && $_GET['x']=='user') {
                if($_SESSION['level_SeblakKuyy']==1)  {
                     $page = "user.php";
                      include "main.php"; 
                  }else{
                     $page = "home.php";
                   include "main.php";
                  }
             }else if(isset($_GET['x']) && $_GET['x']=='ulasanrating') {
               $page = "ulasanrating.php";
                include "main.php";
             }else if(isset($_GET['x']) && $_GET['x']=='report') {
               if ($_SESSION['level_SeblakKuyy']==1){
                  $page = "Report.php";
                   include "main.php"; 
               }else{
                  $page = "home.php";
                include "main.php";
               }
                  
             }else if(isset($_GET['x']) && $_GET['x']=='login') {
                  include "login.php";
             }else if(isset($_GET['x']) && $_GET['x']=='keluar') {
                include "proses/proses_keluar.php";
             }else {
               $page = "home.php";
               include "main.php";
            }
             
             ?>