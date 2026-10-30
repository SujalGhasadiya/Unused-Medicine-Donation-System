<?php include('dbconnect.php');

?>
<!DOCTYPE html>
<html>

<head>
    <!-- Required meta tags -->
    <?php include('headerfooter/header.php'); ?>
    <!-- Custom CSS -->
    <link rel="stylesheet" href="style.css">
    <!--owl-carousel-->
    <link rel="icon" href="img/icon.png">
    <title>Medifall: An Unsed Medicine Donation System</title>
</head>

<body>
    <!--navbar-->
    <?php include('headerfooter/nav.php'); ?>

    <!--section 1-->

    <div class="intro-section custom-owl-carousel" id="home-section">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-5 mr-auto">
                    <div class="owl-carousel slide-one-item-alt-text">
                        <div class="slide-text">
                            <h1>Do You Have <br> Leftover Medicines?</h1>
                            <p class="mb-5">Please don't just throw them away. You can Donate them and save some lives.
                            </p>
                            <p><a href="#donation-section" class="btn btn-outline-light py-3 px-5">Donate Now</a></p>
                        </div>
                        <div class="slide-text">
                            <h1>Don't you have money to buy medicine?</h1>
                            <p class="mb-5">Don't worry. We will get your medicine for free of cost</p>
                            <p><a href="requestMedicine.php" target="_blank" class="btn btn-outline-light py-3 px-5">Request
                                    for Medicine</a></p>
                        </div>

                        <div class="slide-text">
                            <h1>Do You Know?</h1>
                            <p class="mb-5">There are many people who can not afford to buy medicine for their
                                treatment. </p>
                            <p><a href="#donation-section" target="_blank"
                                    class="btn btn-outline-light py-3 px-5">Donate Medicine</a></p>
                        </div>
                        <div class="slide-text">
                            <h1>You can Help <br> them</h1>
                            <p class="mb-5">Donate your leftover unexpired and unopened medicines and save some lives.
                            </p>
                            <p><a href="#donation-section" target="_blank"
                                    class="btn btn-outline-light py-3 px-5">Donate Now</a></p>
                        </div>
                        <!-- <div class="slide-text">
                        <h1>No Cost for Donors and Recipients</h1>
                        <p class="mb-5">You can donate or get your medicine for free of cost.</p>
                        <p><a href="#" target="_blank" class="btn btn-outline-light py-3 px-5">Get Started</a></p>
                     </div> -->
                    </div>
                </div>
                <div class="col-lg-6 ml-auto">
                    <div class="owl-carousel slide-one-item-alt">
                        <img src="img/slider1.jpg" alt="Image" class="img-fluid">
                        <img src="img/slider2.jpg" alt="Image" class="img-fluid">
                        <img src="img/slider3.jpg" alt="Image" class="img-fluid">
                        <img src="img/slider4.1.jpg" alt="Image" class="img-fluid">
                    </div>
                    <div class="owl-custom-direction">
                        <a href="#" class="custom-prev"><i class="fas fa-chevron-left"></i></a>
                        <a href="#" class="custom-next"><i class="fas fa-chevron-right"></i></span></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--section1 End-->

    <!--What we do Section Start-->
    <section class="container sec3">
        <div class="row">

            <div class="col-lg-6">
                <h5>What We Do?</h5>
                <h1>We are Working for the <span style="color: green;">People </span> </h1>
                <p>Due to the large number of poor and needy people, ensuring medication for all is almost impossible.
                    Medifall is helping those poor and needy to dispel this cutthroat problem from our country.</p>
                <div class="facility">
                    <h4>Our facilities</h4>
                    <ul>
                        <li><i class="fas fa-check-double"></i>Easy Donation Process</li>
                        <li><i class="fas fa-check-double"></i>Donate or Receive Medicine From Home</li>
                        <li><i class="fas fa-check-double"></i>Donate or Receive medicine without any Cost</li>
                    </ul>
                </div>
            </div>
            <div class="col-lg-6" id="imgsec3">
                <img src="img/2.png" alt="facility">
            </div>
        </div>
    </section>
    <!--What we do Section Start-->

    <!--Motivate Section Start-->
    
    <!--Motivate Section End-->

    <!--Medicine Req Section Start -->
    <section class="applay-now-section py-5">
        <div class="container">
            <div class="row">
                <div class="col-lg-6">
                    <div class="applay-now-left-test">
                        <h2 class="mb-5">4 Easy Steps to Get Medicine for Free.</h2>
                        <div class="step-timeline mb-5">
                            <ul>
                                <li data-counter="1">
                                    <strong>Personal Information</strong>
                                    <p>Fill Up the Form with Valid Personal Information.</p>
                                </li>
                                <li data-counter="2">
                                    <strong>Area Information</strong>
                                    <p>Provide Your Area or Region.</p>
                                </li>
                                <li data-counter="3">
                                    <strong>Upload Perscription</strong>
                                    <p>Upload Your Perscription Provided by Doctor.</p>
                                </li>
                                <li data-counter="4">
                                    <strong>Give a Reason</strong>
                                    <p>Give Us a Reason Why You Want to Receive Medicine From Medifall.</p>
                                </li>
                            </ul>
                            <small><em> N.B: This Opportunity is Only For the Incapable People. Please Do Not Misuse
                                    It.</em></small>
                        </div>
                       
                    </div>
                </div>

                <div class="col-lg-6">
                    <img src="img/getLogo.svg" alt="ask med img" class="askmed_svg">
                </div>
            </div>
        </div>
    </section>
    <!--Medicine Req Section End -->


  

    <section class="faq" id="faq-section">
        <div class="container py-5">
            <div class="faqhead">
                <h1>Frequently Asked Questions</h1>
            </div>
            <div class="row">
                <div class="col-lg-12 mx-auto">
                    <div class="accordion" id="medifallFaq">
                        <div class="card">
                            <div class="card-header p-2" id="headingOne">
                                <h5 class="mb-0">
                                    <button class="btn btn-link" type="button" data-toggle="collapse"
                                        data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                        Q: What is Medifall?
                                    </button>
                                </h5>
                            </div>

                            <div id="collapseOne" class="collapse show" aria-labelledby="headingOne"
                                data-parent="#medifallFaq">
                                <div class="card-body">
                                    <b>Answer:</b> It is an unused medicine donation and free distribution system.
                                </div>
                            </div>
                        </div>
                        <div class="card">
                            <div class="card-header p-2" id="headingTwo">
                                <h5 class="mb-0">
                                    <button class="btn btn-link collapsed" type="button" data-toggle="collapse"
                                        data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                        Q: How does it work?
                                    </button>
                                </h5>
                            </div>
                            <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo"
                                data-parent="#medifallFaq">
                                <div class="card-body">
                                    <b>Answer:</b> We collect unexpired ununsed medicines from the donor's house and
                                    distribute them to the needy people with the help of NGO's.
                                </div>
                            </div>
                        </div>
                        <div class="card">
                            <div class="card-header p-2" id="headingFour">
                                <h5 class="mb-0">
                                    <button class="btn btn-link collapsed" type="button" data-toggle="collapse"
                                        data-target="#collapseFour" aria-expanded="false" aria-controls="collapseFour">
                                        Q. How to donate medicine?
                                    </button>
                                </h5>
                            </div>
                            <div id="collapseFour" class="collapse" aria-labelledby="headingFour"
                                data-parent="#medifallFaq">
                                <div class="card-body">
                                    <ol>
                                        <li>Sign up to the Medifall. If you have unused medicine that you want to
                                            donate, firstly you should click to the Sign Up button to become a
                                            registered user.</li>
                                        <li style="font-weight: bold;">Click to the Donate Now button, select a category
                                            and simply fill-up detailed information and hit the submit button.</li>
                                        <li>Hold on, our NGO Executive will pick it up from your house.</li>
                                    </ol>
                                </div>
                            </div>
                        </div>
                        <div class="card">
                            <div class="card-header p-2" id="headingThree">
                                <h5 class="mb-0">
                                    <button class="btn btn-link collapsed" type="button" data-toggle="collapse"
                                        data-target="#collapseThree" aria-expanded="false"
                                        aria-controls="collapseThree">
                                        Q. How to get medicine for free?
                                    </button>
                                </h5>
                            </div>
                            <div id="collapseThree" class="collapse" aria-labelledby="headingThree"
                                data-parent="#medifallFaq">
                                <div class="card-body">
                                    <b>Answer:</b> If you’re in need of medicine that you can not afford, simply Sign Up
                                    to the system and <strong> fill-up detailed information in the "medicine request or
                                        ask for medicine form".</strong> Then click the submit button and wait for few
                                    moments until we verify and confirm your request.
                                </div>
                            </div>
                        </div>
                        <div class="card">
                            <div class="card-header p-2" id="headingSix">
                                <h5 class="mb-0">
                                    <button class="btn btn-link collapsed" type="button" data-toggle="collapse"
                                        data-target="#collapseSix" aria-expanded="false" aria-controls="collapseSix">
                                        Q. Is there any shipping or delivery charge?
                                    </button>
                                </h5>
                            </div>
                            <div id="collapseSix" class="collapse" aria-labelledby="headingSix"
                                data-parent="#medifallFaq">
                                <div class="card-body">
                                    <b>Answer:</b> No. Donors or recipients, none of them need to pay any delivery
                                    charge. We collect or distribute them for free.
                                </div>
                            </div>
                        </div>
                        <div class="card">
                            <div class="card-header p-2" id="headingFive">
                                <h5 class="mb-0">
                                    <button class="btn btn-link collapsed" type="button" data-toggle="collapse"
                                        data-target="#collapseFive" aria-expanded="false" aria-controls="collapseFive">
                                        Q. Is there any minimum quantity to donate medicine?
                                    </button>
                                </h5>
                            </div>
                            <div id="collapseFive" class="collapse" aria-labelledby="headingFive"
                                data-parent="#medifallFaq">
                                <div class="card-body">
                                    <b>Answer:</b> No, there is no minimum or maximum quantity. Just donate us for the
                                    helpless people as much as you can.
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!--/row-->
        </div>
    </section>

    <!-- contact testimonial-->
  
    <!-- end contact -->

    <!--footer--->
    <?php include('headerfooter/footer.php'); ?>
    <!-- Javascript For owlCarousel -->
    <script>
    $('.slide-one-item-alt').owlCarousel({
        center: false,
        items: 1,
        dots: false,
        loop: true,
        margin: 0,
        smartSpeed: 1000,
        autoplay: true,
        pauseOnHover: true,
        onDragged: function(event) {
            console.log('event : ', event.relatedTarget['_drag']['direction'])
            if (event.relatedTarget['_drag']['direction'] == 'left') {
                $('.slide-one-item-alt-text').trigger('next.owl.carousel');
            } else {
                $('.slide-one-item-alt-text').trigger('prev.owl.carousel');
            }
        }
    });


    $('.slide-one-item-alt-text').owlCarousel({
        center: false,
        items: 1,
        dots: false,
        loop: true,
        margin: 0,
        smartSpeed: 1000,
        autoplay: true,
        pauseOnHover: true,
        onDragged: function(event) {
            console.log('event : ', event.relatedTarget['_drag']['direction'])
            if (event.relatedTarget['_drag']['direction'] == 'left') {
                $('.slide-one-item-alt').trigger('next.owl.carousel');
            } else {
                $('.slide-one-item-alt').trigger('prev.owl.carousel');
            }
        }
    });

    $('.custom-next').click(function(e) {
        e.preventDefault();
        $('.slide-one-item-alt').trigger('next.owl.carousel');
        $('.slide-one-item-alt-text').trigger('next.owl.carousel');
    });

    $('.custom-prev').click(function(e) {
        e.preventDefault();
        $('.slide-one-item-alt').trigger('prev.owl.carousel');
        $('.slide-one-item-alt-text').trigger('prev.owl.carousel');
    });


 
    </script>

    <!--start counter jquery-->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
  <!--  <script src="http://cdnjs.cloudflare.com/ajax/libs/waypoints/2.0.3/waypoints.min.js"></script>-->
  <script src="http://cdnjs.cloudflare.com/ajax/libs/waypoints/2.0.3/waypoints.min.js"></script>

<script src="https://cdnjs.cloudflare.com/ajax/libs/Counter-Up/1.0.0/jquery.counterup.min.js"></script>

<script>


    $('.counter').counterUp({
    delay: 10,
    time: 1000
});
</script>
   
</body>

</html>