<?php include('dbconnect.php');



?>

<nav class="navbar navbar-expand-lg navbar-light bg-light main-header sticky-top shadow p-1 rounded">
    <div class="container-fluid">
        <a class="navbar-brand" href="index.php">
            <img src="img/3-removebg-preview.png" alt="Medifall Logo">
        </a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
            aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav ml-auto our-primary-menu">
                <li><a href="index.php">Home</a></li>
                <li><a href="about.php" target="_blank">About</a></li>
                <li>
                    <a href="#">Services</a>
                    <ul>
                        <li><a href="individualDonation.php" target="_blank">Individual Donation</a></li>
                        <!-- <li><a href="org.php" target="_blank">Organization Donation</a></li>
                        <li><a href="pharmaceutical.php" target="_blank"> Pharmaceutical Donation</a></li> -->
                        <li><a href="requestMedicine.php" target="_blank">Request For Medicine</a></li>
                    </ul>
                </li>
                <!-- <li><a href="index.php#contact">Contact</a></li> -->
        
                <li>
                   
                <?php
                 if(!isset($_SESSION['is_individuallogin']) ){ ?>
                     
                     <a href="#">Login</a>
                    <ul>
                        <li><a href="./New/individualLogin.php">Login as Individual</a></li>
                         
                        <li><a href="./Ngo/NgoLogin.php">Login as NGO</a></li>
                        
                   </ul> 
                    <?php
                 }
                else{?>
                <a href="#">My account</a>
                     <ul>
                         <li>hello <?php     $_SESSION['user_name']  ?></li>
                         <li><a href="logout.php">logout</a></li>
                     </ul>
                    

               <?php }
                ?>

                   

                </li>
            </ul>
            <div class="header-info d-flex align-items-center">
               
                <div style="margin-bottom:17px;" class="header-button"> 
                    <a href="index.php#donation-section" class="btn btn-primary">Donate Now</a>

                </div>
            </div>
        </div>
    </div>
</nav>