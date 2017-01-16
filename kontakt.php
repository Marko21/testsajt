<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>Kontakt - BЯ consulting</title>
        <meta content="width=device-width, initial-scale=1.0" name="viewport">
        <meta content="yes" name="apple-mobile-web-app-capable">
        <meta content="favicon.png" itemprop="image">
        <link type="image/x-icon" href="favicon.ico" rel="icon">
        <link type="image/x-icon" href="favicon.ico" rel="shortcut icon">
        <link rel="stylesheet" type="text/css" href="http://fonts.googleapis.com/css?family=Open+Sans:400,700&subset=latin,latin-ext" media="all" />
        <link rel="stylesheet" href="assets/css/bootstrap.min.css" />
        <link rel="stylesheet" href="assets/css/br.min.css" />
        <link rel="stylesheet" href="assets/css/br-black.min.css" media="screen" />
    </head>
    <body class="">
    <div id="sajt_content" class="m-scene">
        <div id="content">
            <article>
                <div id="masthead" class="navbar navbar-static-top navbar-sticky underline swatch-black" role="banner">
                    <div class="container">
                        <div class="navbar-header">
                            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target=".main-navbar">
                                <span class="icon-bar"></span>
                                <span class="icon-bar"></span>
                                <span class="icon-bar"></span>
                            </button>
                            <a href="index.php" class="navbar-brand">
                                <img src="assets/images/logo.png" alt="BЯ consulting">
                            </a>
                            <a href="https://www.linkedin.com/in/bojan-radoš-msci-cia-eqa-86b83611?trk=hp-identity-name" target="_blank" class="linkedin_ikona linkedin_tablet"><img src="assets/images/slike/linkedin.png" /></a>
                        </div>
                        <nav class="collapse navbar-collapse main-navbar" role="navigation">
                            <div class="menu-one-page-container">
                                <a href="https://www.linkedin.com/in/bojan-radoš-msci-cia-eqa-86b83611?trk=hp-identity-name" target="_blank" class="linkedin_ikona pull-right"><img src="assets/images/slike/linkedin.png" /></a>
                                <ul id="menu-one-page" class="nav navbar-nav navbar-right">
                                    <li><a href="index.php">Dobrodošli</a></li>
                                    <li><a href="o-nama.php">O nama</a></li>
                                    <li><a href="usluge.php">Usluge</a></li>
                                    <li><a href="publikacije.php">Publikacije</a></li>
                                    <li><a href="galerija.php">Galerija</a></li>
                                    <li class="active"><a href="kontakt.php">Kontakt</a></li>
                                </ul>
                            </div>
                        </nav>
                    </div>
                </div>
                <div class="scene_element scene_element--fadeinleft-wide">
                <section class="section swatch-black section-text-shadow">
                    <div class="background-media" style="background-image: url('assets/images/bgbg/home_bgbg_1.jpg'); background-repeat: no-repeat; background-size: cover; background-attachment: fixed; background-position: 50% 0px;" data-start="background-position:50% 0px"
                    data-70-top-bottom="background-position:50% -80px">
                    </div>
                    <div class="container">
                        <div class="row">
                            <div class="col-md-12 text-center">
                                <header class="element-short-top element-short-bottom os-animation not-condensed" data-os-animation="fadeInLeft" data-os-animation-delay="0.3s">
                                    <h1 class="super hairline bordered-normal">Kontakt</h1>
                                </header>
                            </div>
                        </div>
                    </div>
                </section>
                <section id="kontakt" class="section swatch-black section-text-shadow-no section-fullheight">
                    <div class="background-media google_map">
                        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d1414.9602188222916!2d20.446936602368122!3d44.82318549074547!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x475a6548916e8ded%3A0x1c674a1076020b63!2sThe+Victor+plaza%2C+Beograd!5e0!3m2!1sen!2srs!4v1484524592379" width="100%" height="100%" frameborder="0" style="border:0" allowfullscreen></iframe>
                    </div>
                    <div class="container">
                        <div class="row">
                            <div class="text-center small-screen-center element-normal-bottom">
                                <div class="divider-wrapper" style="visibility:hide;background-color:#FFFFF">
                                    <div class="visible-xs" style="height:0;"></div>
                                    <div class="visible-sm" style="height:10px;"></div>
                                    <div class="visible-md" style="height:20px;"></div>
                                    <div class="visible-lg" style="height:30px;"></div>
                                </div>
                                <a class="btn btn-lg btn-default os-animation detaljnije kontakt_forma_button" href="#" data-os-animation="fadeInUp" data-os-animation-delay="0.3s">Kontaktirajte nas</a>
                                <div class="kontakt_forma_div text-left">
                                    <div id="sendmessage"></div>
                                    <div id="errormessage"></div>
                                    <div id="contact-form" class="contactForm">
                                        <div class="row">
                                            <div class="col-md-12 phone_icon text-center">
                                                <a href="tel:+381642070264">+381(0)64/20-70-264</a>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label for="name">Vaše ime</label>
                                                    <input type="text" name="name" id="name" placeholder="Vaše ime" />
                                                    <div class="validation"></div>
                                                </div>
                                                <div class="form-group">
                                                    <label for="email">E-mail Adresa</label>
                                                    <div class="form-group">
                                                        <input type="email" name="email" id="email" placeholder="E-mail Adresa" data-rule="email" data-msg="Molimo unesite ispravnu e-mail adresu" />
                                                        <div class="validation"></div>
                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                    <label for="subject">Naslov poruke</label>
                                                    <input type="text" name="subject" id="subject" placeholder="Naslov poruke" data-rule="minlen:8" data-msg="Molimo unesite makar 8 karaktera u ovo polje" />
                                                    <div class="validation"></div>
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label for="message">Poruka</label>
                                                    <textarea name="message" rows="6" data-rule="minlen:10" data-msg="Molimo unesite tekst poruke" placeholder="Poruka"></textarea>
                                                    <div class="validation"></div>
                                                </div>
                                            </div>
                                            <div class="col-md-12">
                                                <div class="kaptcha_div col-md-6 no-padding">
                                                    <div class="form-group clearfix kaptcha">
                                                        <?php 
                                                            $a = rand(2,9);
                                                            $b = rand(2,9);
                                                        ?>
                                                        <div id="vrednost-a" style="display: none;">
                                                            <?php echo htmlspecialchars($a); ?>
                                                        </div>
                                                        <div id="vrednost-b" style="display: none;">
                                                            <?php echo htmlspecialchars($b); ?>
                                                        </div>
                                                        <?php
                                                            echo "<span>".$a." + ".$b." = </span><input type='text' size='2' name='recaptcha' required='true' />";
                                                        ?>
                                                    </div>
                                                </div>
                                                <div class="col-md-6 no-padding">
                                                    <a type="submit" href="#" class="btn btn-lg btn-default pull-right" id="btnContactUs">Pošaljite poruku</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
                </div>
            </article>
        </div>
        <footer id="footer" role="contentinfo">
            <section class="section swatch-white text-center">
                <div class="container">
                    <div class="row element-normal-top element-normal-bottom" style="margin: 15px ! important; font-size: 12px;">
                        <div class="col-md-12">
                        	BЯ consulting &copy; 2017.
                        </div>
                    </div>
                </div>
            </section>
        </footer>
    </div>
        <script src="assets/js/packages.min.js"></script>
        <script src="assets/js/jquery.ss.min.js"></script>
        <script src="assets/js/br.min.js"></script>
    </body>
</html>