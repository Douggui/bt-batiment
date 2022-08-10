<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">

    <title>Contact - Company Bootstrap Template</title>
    <meta content="" name="description">
    <meta content="" name="keywords">

    <!-- Favicons -->
    <link href="assets/img/favicon.png" rel="icon">
    <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">

    <!-- Google Fonts -->
    <link
        href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Roboto:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i"
        rel="stylesheet">

    <!-- Vendor CSS Files -->
    <?php include('partials/stylsheets.php')?>
</head>

<body>

    <!-- ======= Header ======= -->
    <?php include('partials/header.php')?>
    <!-- End Header -->

    <main id="main">



        <!-- ======= Contact Section ======= -->
        <section>
            <div class="map-section mt-3">
                <iframe style="border:0; width: 100%; height: 400px;"
                    src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2889.3040625383906!2d6.983531050223979!3d43.60021026377266!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x12cc29958b866ead%3A0x46c9819d8ee95169!2s49%20Av.%20Juyette%2C%2006250%20Mougins!5e0!3m2!1sfr!2sfr!4v1650634740753!5m2!1sfr!2sfr"
                    frameborder="0" allowfullscreen></iframe>
            </div>
        </section>


        <section id="contact" class="contact">
            <div class="container">

                <div class="row justify-content-center" data-aos="fade-up">

                    <div class="col-lg-10">

                        <div class="info-wrap">
                            <div class="row">
                                <div class="col-lg-4 info">
                                    <i class="bi bi-geo-alt"></i>
                                    <h4>Addresse:</h4>
                                    <p>49 Avenue Juyette<br>06250 Mougins</p>
                                </div>

                                <div class="col-lg-4 info mt-4 mt-lg-0">
                                    <i class="bi bi-envelope"></i>
                                    <h4>Email:</h4>
                                    <p>bt-batiment@gmail.com</p>
                                </div>

                                <div class="col-lg-4 info mt-4 mt-lg-0">
                                    <i class="bi bi-phone"></i>
                                    <h4>Téléphone:</h4>
                                    <p>0771875223</p>
                                </div>
                            </div>
                        </div>

                    </div>

                </div>

                <div class="row mt-5 justify-content-center" data-aos="fade-up">
                    <div class="col-lg-10">
                        <form action="forms/contact.php" method="post" role="form" class="php-email-form">
                            <div class="row">
                                <div class="col-md-6 form-group">
                                    <input type="text" name="firstName" class="form-control" id="name"
                                        placeholder="Votre Nom" required="required">
                                </div>
                                <div class=" col-md-6 form-group">
                                    <input type="text" name="lastName" class="form-control" id="name"
                                        placeholder="Votre Prenom" required="required">
                                </div>
                                <div class=" form-group mt-3 ">
                                    <input type="email" class="form-control" name="email" id="email"
                                        placeholder="Votre Email" required>
                                </div>
                            </div>
                            <div class="form-group mt-3">
                                <input type="text" class="form-control" name="works" id="subject"
                                    placeholder="Nature de vos traveaux" required="required">
                            </div>
                            <div class="form-group mt-3">
                                <textarea class="form-control" name="message" rows="5"
                                    placeholder="Décrivez vos traveaux" required="required"></textarea>
                            </div>
                            <div class="my-3">
                                <div class="loading">Loading</div>
                                <div class="error-message">Une erreur est survenue ,veuillez réessayer</div>
                                <div class="sent-message">Nous avons bien réçus votre message </div>
                            </div>
                            <div class="text-center"><button type="submit" name="send" id="validate">Valider</button>
                            </div>
                        </form>
                    </div>

                </div>

            </div>
        </section><!-- End Contact Section -->

    </main><!-- End #main -->

    <!-- ======= Footer ======= -->
    <?php include('partials/footer.php')?>

    <?php include('partials/back-to-top.php')?>

    <!-- Vendor JS Files -->
    <?php include('partials/scripts.php')?>
    <script src="email-traitement.js"></script>
</body>



</html>