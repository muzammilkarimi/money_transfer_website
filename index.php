<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>MakPay</title>
    <style>
         <?php include "css/frontpage.css" ?>
    </style>
</head>
<?php
include 'connection.php';
?>
<body>
    <?php
    include 'nav.php';
    ?>
    <!-- landing Page -->
    <section id="landing">
        <section class="details">
            <h1 class="faster">More <span> Fast..</span></h1>
            <h1 class="secure">More <span>Secure..</span> </h1>
           <div class="action">
           <a href="selectuser.php"> <button class="transfer" >Transfer Money</button></a>
           <a href="transaction_history.php"> <button class="history" >Transaction History</button></a>
           </div>

        </section>
        <section class="banner">
            <img src="img/front banner.png" alt="">
        </section>


    </section>
</body>

</html>
