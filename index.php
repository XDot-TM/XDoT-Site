<!DOCTYPE html>

<?php
    include('config.php');
?>

<html>

<head>
    <meta http-equiv="content-type" content="text/html"; charset="utf-8">
    <meta name="description" content="">
    <meta name="author" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Xdot</title>

    <link rel="stylesheet" href="public/css/style.css">

    <link rel="shortcut icon" type="image/x-icon" href="public/images/favicon.ico">     <!-- 16px x 16px -->
    <link rel="apple-touch-icon" href="public/images/apple.png">                        <!-- 58px x 58px -->

    <script src="public/js/jQuery-1.12.1.js" type="text/javascript"></script>
    <script src="public/js/common-functions.js" type="text/javascript"></script>
    <script src="public/js/main.js" type="text/javascript"></script>
    <script src="public/js/language-select.js" type="text/javascript"></script>
</head>




<body>
    <noscript>
        <p style="margin: 0 auto; text-align: center; background-color: #CF6161; padding: 15px; border: 2px solid #9e1f1f; border-radius: 7px;">
            Your web browser must have JavaScript <b>enabled</b> in order for this application to work correctly.
        </p>
    </noscript>

    <div id="translating-page-loading" class="hidden">
        <!-- Not working yet !!!  -->
       Translating the page...
    </div>


    <header>
        <div id="language-select">
            <div id="all-languages">
                <div class="language-english" title="English" value="english">
                </div>
                <div class="language-romanian" title="Romanian" value="romanian">
                </div>
                <div class="language-german" title="German" value="german">
                </div>
            </div>
        </div>


        <div id="logo-container">
            <div id="logo">
                <img src="public/images/logo.png">
            </div>
        </div>


        <div id="nav-container">
            <nav>
                <ul>
                    <li class="active first"><a href="#home" id="home-button">Home</a></li>
                    <li><a href="#team-container" id="about-button">About Us</a></li>
                    <li><a href="#portofolio-container" id="portofolio-button">Portofolio</a></li>
                    <li class="last"><a href="#contact-info-container" id="contact-button">Contact</a></li>
                </ul>
            </nav>
        </div>

    </header>



    <section id="middle">
        <div id="services-container">
            <div id="service-branding" class="service">
                <div id="service-branding-icon" class="service-icon">

                </div>
                <div class="service-title">
                    Branding
                </div>
                <div class="service-text">
                    Lorem ipsum dolor sit amet, consectetur adipiscing elit.</br>
                    Morbi suscipit quis mi sit amet sollicitudin.</br>
                    Proin consequat venenatis dolor, at tempor diam.
                </div>
            </div>
            <div id="service-webdesign" class="service">
                <div id="service-webdesign-icon" class="service-icon">

                </div>
                <div class="service-title">
                    Webdesign
                </div>
                <div class="service-text">
                    Lorem ipsum dolor sit amet, consectetur adipiscing elit.</br>
                    Morbi suscipit quis mi sit amet sollicitudin.</br>
                    Proin consequat venenatis dolor, at tempor diam.
                </div>
            </div>
            <div id="service-marketing" class="service">
                <div id="service-marketing-icon" class="service-icon">

                </div>
                <div class="service-title">
                    Marketing
                </div>
                <div class="service-text">
                    Lorem ipsum dolor sit amet, consectetur adipiscing elit.</br>
                    Morbi suscipit quis mi sit amet sollicitudin.</br>
                    Proin consequat venenatis dolor, at tempor diam.
                </div>
            </div>
        </div>


        <div id="team-container">
            <div id="team-title">
                Who are we?
            </div>
            <div id="team-members">
                <div id="team-member-grozescu" class="team-member">
                    <div id="team-member-grozescu-icon" class="team-member-icon">

                    </div>
                    <div class="team-member-name">
                        Iulian Grozescu
                    </div>
                    <div class="team-member-function">
                        Chef financial / Developer
                    </div>
                    <div class="team-member-contact">
                        <div class="team-member-contact-icon facebook-icon">
                            <a href="https://www.facebook.com/iulian.grozescu" target="_blank" title="Facebook"></a>
                        </div>
                        <div class="team-member-contact-icon twitter-icon">
                            <a href="#" target="_blank" title="Twitter"></a>
                        </div>
                        <div class="team-member-contact-icon linkedin-icon">
                            <a href="#" target="_blank" title="Linkedin"></a>
                        </div>
                    </div>
                </div>
                <div id="team-member-rotar" class="team-member">
                    <div id="team-member-rotar-icon" class="team-member-icon">

                    </div>
                    <div class="team-member-name">
                        Daniel Rotar
                    </div>
                    <div class="team-member-function">
                        Creative director / Designer
                    </div>
                    <div class="team-member-contact">
                        <div class="team-member-contact-icon facebook-icon">
                            <a href="https://www.facebook.com/TheClassick25?fref=ts" target="_blank" title="Facebook"></a>
                        </div>
                        <div class="team-member-contact-icon twitter-icon">
                            <a href="#" target="_blank" title="Twitter"></a>
                        </div>
                        <div class="team-member-contact-icon linkedin-icon">
                            <a href="#" target="_blank" title="Linkedin"></a>
                        </div>
                    </div>
                </div>
                <div id="team-member-georgevici" class="team-member">
                    <div id="team-member-georgevici-icon" class="team-member-icon">

                    </div>
                    <div class="team-member-name">
                        Ioan Georgevici
                    </div>
                    <div class="team-member-function">
                        Chef Technology / Developer
                    </div>
                    <div class="team-member-contact">
                        <div class="team-member-contact-icon facebook-icon">
                            <a href="https://www.facebook.com/Georgevici.Ioan" target="_blank" title="Facebook"></a>
                        </div>
                        <div class="team-member-contact-icon twitter-icon">
                            <a href="#" target="_blank" title="Twitter"></a>
                        </div>
                        <div class="team-member-contact-icon linkedin-icon">
                            <a href="#" target="_blank" title="Linkedin"></a>
                        </div>
                    </div>
                </div>
                <div id="team-member-ursulet" class="team-member">
                    <div id="team-member-ursulet-icon" class="team-member-icon">

                    </div>
                    <div class="team-member-name">
                        Anca Ursulet
                    </div>
                    <div class="team-member-function">
                        $efa Ursulet / $efa marketing
                    </div>
                    <div class="team-member-contact">
                        <div class="team-member-contact-icon facebook-icon">
                            <a href="https://www.facebook.com/ursuletu.anca" target="_blank" title="Facebook"></a>
                        </div>
                        <div class="team-member-contact-icon twitter-icon">
                            <a href="#" target="_blank" title="Twitter"></a>
                        </div>
                        <div class="team-member-contact-icon linkedin-icon">
                            <a href="#" target="_blank" title="Linkedin"></a>
                        </div>
                    </div>
                </div>
                <div id="team-member-coroiu" class="team-member">
                    <div id="team-member-coroiu-icon" class="team-member-icon">

                    </div>
                    <div class="team-member-name">
                        Dragos Coroiu
                    </div>
                    <div class="team-member-function">
                        $ef tastator / Developer
                    </div>
                    <div class="team-member-contact">
                        <div class="team-member-contact-icon facebook-icon">
                            <a href="https://www.facebook.com/coroiu.dragos" target="_blank" title="Facebook"></a>
                        </div>
                        <div class="team-member-contact-icon twitter-icon">
                            <a href="#" target="_blank" title="Twitter"></a>
                        </div>
                        <div class="team-member-contact-icon linkedin-icon">
                            <a href="#" target="_blank" title="Linkedin"></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>



        <div id="portofolio-container">
            <img id="project1" width="800px" height="490px" />
            <img id="project2" width="560px" height="240px" />
            <img id="project3" width="560px" height="500px" />
            <img id="project4" width="800px" height="250px" />
            <img id="project5" width="560px" height="500px" />
            <img id="project6" width="800px" height="500px" />
        </div>
    </section>





    <footer>
        <div id="contact-wrapper">
            <div id="contact-info-container">
                <div id="contact-info-title">
                    Want to talk with us?<br/>
                    Contact us.
                </div>

                <div id="contact-info-text">
                    If you have a project in mind or you want to find out <br/>
                    more about our services and our activity, don't hesitate to contact us.<br/>
                    The direct and friendly approach with which <br/>
                    we welcome each client is a representative quality for us.<br/>
                    Send us an e-mail and we will get in touch with you <br/>
                    in order to set a meeting in which to talk about your project requirements.
                </div>

                <div id="contact-info-icons">
                    <div id="contact-info-icons-line">
                        <div class="contact-info-icon pinterest-contact-icon">
                            <a href="#" target="_blank" title="Pinterest"></a>
                        </div>
                        <div class="contact-info-icon facebook-contact-icon">
                            <a href="#" target="_blank" title="Facebook"></a>
                        </div>
                        <div class="contact-info-icon youtube-contact-icon">
                            <a href="#" target="_blank" title="Youtube"></a>
                        </div>
                        <div class="contact-info-icon google-contact-icon">
                            <a href="#" target="_blank" title="Google"></a>
                        </div>
                    </div>
                </div>
            </div>


            <div id="contact-form-container">
                <form id="contact-form">
                    <div id="contact-form-name">
                        <input type="text" placeholder="Name">
                        <div class="contact-form-icon" id="contact-form-name-icon"></div>
                    </div>
                    <div id="contact-form-email">
                        <input type="text" placeholder="Email">
                        <div class="contact-form-icon" id="contact-form-email-icon"></div>
                    </div>
                    <div id="contact-form-message">
                        <textarea placeholder="Message..." rows="9"></textarea><br/>
                        <div class="contact-form-icon" id="contact-form-message-icon"></div>
                    </diV>
                    <input id="contact-form-btn-submit" type="submit" value="SUBMIT">
                </form>
            </div>
        </div>



        <div id="copyright-container">
            Copyright &copy; XDOT Romania
        </div>
    </footer>


    <!-- <footer id="footer">
        <div class="footer-top wow fadeInUp" style="visibility: visible;">
            <div class=" container text-center ">
                <div class="footer-logo ">
                    <a href="index.html "><img class="img-responsive " src="images/logo.png " alt=" "></a>
                </div>
                <div class="social-icons ">
                    <ul>
                        <li><a class="envelope " href="# "><i class="fa fa-envelope "></i></a></li>
                        <li><a class="twitter " href="# "><i class="fa fa-twitter "></i></a></li>
                        <li><a class="facebook " href="# "><i class="fa fa-facebook "></i></a></li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="footer-bottom ">
            <div class="container ">
                <div class="row ">
                    <div class="col-sm-6 ">
                        <p> <a href=" ">&copy; 2016 XDot Corporate.</a> </p>
                    </div>
                    <div class="col-sm-6 ">
                        <p class="pull-right "></p>
                    </div>
                </div>
            </div>
        </div>
    </footer> -->


</body>

</html>
