<!DOCTYPE html>
<html>

<head>
    <!--Import Google Icon Font-->
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <!--Import materialize.css-->
    <link type="text/css" rel="stylesheet" href="css/materialize.min.css" media="screen,projection" />
    <link rel="stylesheet" href="css/style.login.css">
    <!--Let browser know website is optimized for mobile-->
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title> <?= $title; ?></title>
</head>

<body>

    <div class="row">
        <div class="col s12 m8 l9">
            <img src="images/bg.jpg" class="col s12" id="latar">
            <!-- <p>Gambar</p> -->
            <!--<img src="images/bg.jpg" class="col s12">-->
        </div>


        <div class="col s12 m4 l3" id="form">
            <!--<p>Form</p>-->
            <div class="login">
                <div class="logo">
                    <img src="images/Logo.png" class="col s12">
                </div>
                <div class="row center">
                    <h5>E-Konsul Itjen Kemkes</h5>
                    <!-- <h6>Use your account</h6> -->
                </div>
                <!--
                <div class="row">
                    <div class="input-field col s12">
                        <input type="email" class="validate" id="email_input">
                        <label for="email_input">Email</label>
                    </div>
                </div> -->
                <div class="row">
                    <div class="input-field col s12">
                        <input type="number" class="validate" id="nip">
                        <label for="nip">NIP</label>
                    </div>
                </div>
                <div class="row">
                    <div class="input-field col s12">
                        <input type="password" id="password_input" class="validate">
                        <label for="password_input">Password</label>
                    </div>
                    <div class="row">
                        <div class="col s12">
                            Belum Punya Akun ?
                            <a href="#"><b>Daftar</b></a>
                        </div>
                        <div class="col s12">
                            Buku Panduan Aplikasi
                            <a href="#"><b>Download</b></a>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col s6">
                            Lupa
                            <a href="#"><b>password ?</b></a>
                        </div>
                        <div class="col s6 right-align">
                            <a href="/menu" class="waves-effect waves-light btn">Login</a>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>

    <!--Import jQuery before materialize.js-->
    <script type="text/javascript" src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
    <script type="text/javascript" src="js/materialize.min.js">
        $(document).ready(function() {
            $('.carousel.carousel-slider').carousel({
                fullWidth: true
            });
        });
    </script>
</body>

</html>