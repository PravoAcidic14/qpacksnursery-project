

<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css2?family=Crimson+Text:wght@400;600&family=Poppins:wght@400;600&family=Alata&family=Acme&family=Open+Sans:wght@700&family=Cinzel:wght@700&display=swap" rel="stylesheet">   
    <link href="fontawesome/css/all.css" rel="stylesheet">
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">

    <link rel="stylesheet" type="text/css" href="css/style.css">
    
    <title>QPacks Nursery : HomePage</title>
</head>
<body>
    <?php include_once 'nav_bar.php'; ?>
    
    <!-- ----------------------Main Slideshow----------------------- -->

    <div class="jumbotron jumbotron-fluid">
        <div id="mainContainer" class="container-fluid">
            <div class="container-fluid bgImageContainer"></div>
            <div class="container" id="labelContainer">
                <div class="rectangle" id="rect"></div>
                <h2 class="label-header">Landscape & <br>Maintenance</h2>
                <p class="label-desc">A total care for your lawns and landscapes.</p>
            </div>
            <div class="container" id="slideControlContainer">
                <span class="slidesCounter">
                    <h1 class="slidesCounterDynamic">1</h1>
                    <h6 class="slidesCounterStatic">/ 4</h6>
                </span>
            </div>
        </div>
    </div>

    <!-- ----------------------------------------About Section---------------------------------------------- -->

    <div class="container-fluid aboutContainer" id="about">
        <h1 id="aboutTextBg" data-aos="opacity" data-aos-duration="1200" data-aos-easing="ease-in-out">about.</h1>

        <section class="aboutDescSection">
          <h1 data-aos="fade-down" data-aos-duration="1200" data-aos-delay="1000" data-aos-easing="ease-in-out">Beautiful <span id="aboutKeyword" data-aos="gradient" data-aos-delay="2000" data-aos-duration="1000" data-aos-easing="ease-in-out">Landscapes</span> Start Here.</h1>

          <p data-aos="fade-up" data-aos-delay="1000" data-aos-duration="1200" data-aos-easing="ease-in-out">
            Q-Packs Nursery Landscape Specialist's workforce is made of highly trained & experienced professionals that provide high-quality services that are guaranteed to satisfy our client's needs.

            <br>
            <br>
            More than 20 years of professional experience in landscaping & ground management field, our team comes equipped with expert-level knowledge in numerous services such as :

            <br>

            <ul data-aos="fade-up" data-aos-delay="1000" data-aos-duration="1200" data-aos-easing="ease-in-out">
                <li>
                    Gardening & Plant Nursing
                </li>
                <li>
                    Hardscape & Softscape
                </li>
                <li>
                    Artificial & Real Grass Installations
                </li>
                <li>
                    5 in 1 Mix Soil Manufacturing
                </li>
            </ul>

            </p>  
        </section>

    <img class="aboutImage" src="images/about_logo.jpg" alt="Logo_only" data-aos="zoom-in" data-aos-delay="500" data-aos-duration="1200" data-aos-easing="ease-in-out">

</div>

<!-- ----------------------------------------------Services Section----------------------------------------------------- -->

<div class="container-fluid servicesSection">
    <h1 id="servicesTextBg" data-aos="opacity" data-aos-duration="1200" data-aos-easing="ease-in-out">services.</h1>

    <div class="card" data-src="images/service_1.jpg">
        <h3>Hardscape & Softscape</h3>
        <a href="hardscape-softscape.php">learn more.</a>
    </div>
    <div class="card" data-src="images/service_2.jpg">
        <h3>Real & Artificial Grass</h3>
        <a href="#">learn more.</a>
    </div>
    <div class="card" data-src="images/service_3.jpg">
        <h3>Plant Care Essentials</h3>
        <a href="#">learn more.</a>
    </div>
    <div class="card" data-src="images/service_4.jpg">
        <h3>Homemade 5 in 1 Garden Soil</h3>
        <a href="#">learn more.</a>
    </div>
    <div class="card" data-src="images/service_5.jpg">
        <h3>Tree Cutting</h3>
        <a href="#">learn more.</a>
    </div>
</div>

<!-- ------------------------------------------------Past Projects------------------------------------------------ -->

<div class="jumbotron jumbotron-fluid" style="height: 90vh;">
    <div class="container-fluid pastProject">
        <h2>Past Projects</h2>
        <h5>Click to view more.</h5>
    </div>
    <div class="container-fluid companyShowcase">
        <img src="images/client_1.png" height="120px" width="120px">
        <img src="images/client_3.png" height="100px" width="120px">
        <img src="images/client_2.jpg" height="100px" width="210px">
        <img src="images/client_4.png" height="100px" width="150px">
        <img src="images/client_5.png" height="150px" width="170px">
    </div>
</div>


<!-- --------------------------------------------------Location------------------------------------------------------- -->



<div class="container-fluid locationSection">

</div>



<!-- Footer -->

<div class="row">
    <div class="col-md-12">
        <footer class="mainFooter page-footer blue text-center text-md-left mt-0">
            <div class="container-fluid">
                <div class="row">
                  <div class="col-md-3 mr-auto">
                    <h4 class="footer-logo">q-packs nursery</h4>
                        <hr class="footer-logo-hr" width="220" align="left"><!-- 
                        <p class="font-weight-bold">Contact us for more info.</p> -->
                        <ul class="list-unstyled footerContact">
                            <li>
                                <a class="nav-link" href="https://www.facebook.com/QPacksNursery/" target="_blank"><span><i class="fab fa-facebook-f"></span></i></a>
                            </li>
                            <li>
                                <a class="nav-link" href="https://www.instagram.com/qpacksnursery/" target="_blank"><span><i class="fab fa-instagram"></span></i></a>
                            </li>
                            <li>
                                <a class="nav-link" href="https://wa.me/60179592017" target="_blank"><span><i class="fab fa-whatsapp"></span></i></a>
                            </li>
                        </ul>
                    </div>
                    <div class="col-md-4">
                      <p class="font-weight-bold">About Us</p>
                      <ul class="list-unstyled">
                          <li><a href="">ABOUT</a></li>
                          <li><a href="">SERVICES</a></li>
                          <li><a href="">LOCATION</a></li>
                          <li><a href="">WEEKLY TIPS</a></li>
                          <li><a href="">PAST PROJECTS</a></li>
                      </ul>
                  </div>
                  <div class="col-md-4">
                      <p class="font-weight-bold">Legal</p>
                      <ul class="list-unstyled">
                          <li><a href="">privacy policy</a></li>
                          <li><a href="">terms and conditions</a></li>
                      </ul>
                  </div>
              </div>
              <hr class="footer-logo-hr">
              <div class="container-fluid">
                <div class="footer-copyright text-center">Copyright &copy 2020 Q-Packs Nursery. All Rights Reserved
                </div>
            </div>
        </div>
    </div>
</footer>
</div>
</div>

<!--     <div class="container-fluid mainFooter">
        <div class="container navigationButtons">
            <a href="">ABOUT</a>
            <a href="">SERVICES</a>
            <a href="">LOCATION</a>
            <a href="">WEEKLY TIPS</a>
            <a href="">PAST PROJECTS</a>
            <a href="">PRIVACY POLICY</a>
            <a href="">WEB DEVELOPER</a>
            <a href="">CREDITS</a>
        </div>
        
    </div>
-->















<script src="https://code.jquery.com/jquery-3.5.1.js" integrity="sha256-QWo7LDvxbWT2tbbQ97B53yJnYU3WhH/C8ycbRAkjPDc=" crossorigin="anonymous"></script>
<script type="text/javascript" src="//cdnjs.cloudflare.com/ajax/libs/jquery.lazy/1.7.9/jquery.lazy.min.js"></script>
<script type="text/javascript" src="jquery/myjquery.js"></script>
<script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>

<script type="text/javascript">
    AOS.init();
</script>

<script type="text/javascript" src="//cdnjs.cloudflare.com/ajax/libs/jquery.lazy/1.7.9/jquery.lazy.min.js"></script>
<script type="text/javascript">
    $(document).ready(function() {
        $(function() {
            $('.card').Lazy({
                afterLoad: function(element){
                    console.log('success loading ' + element);
                }
            });
        });
    });
</script>

<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>



</body>
</html>