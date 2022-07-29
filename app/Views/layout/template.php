<!DOCTYPE html>
<html>

<head>
    <!--Import Google Icon Font-->
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <!--Import materialize.css-->
    <link type="text/css" rel="stylesheet" href="css/materialize.min.css" media="screen,projection" />
    <link rel="stylesheet" href="css/style.template.css">
    <!--Let browser know website is optimized for mobile-->
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
</head>

<body>

    <nav class="nav-wrapper indigo">
        <a href="#" data-activates="slide-out" class="button-collapse"><i class="material-icons">menu</i></a>
        <div class="container">
            <a class="brand-logo" style="font-size:15px;margin-left:40px;">
                <?= $title; ?>
            </a>
            <a href="/createPost" class="brand-logo right hide-on-med-and-down" style="font-size:15px;"><i class="material-icons">create</i>Buat postingan</a>
            <a href="/createPost" class="brand-logo right hide-on-large-only" style="font-size:15px;"><i class="material-icons">create</i></a>
        </div>
    </nav>

    <header>
        <ul id="slide-out" class="side-nav fixed">
            <li>
                <div class="card-image">
                    <img src="images/Logo.png" class="logo">
                </div>
                <div class="divider"></div>
            </li>

            <li class="no-padding">
                <ul class="collapsible collapsible-accordion">
                    <li>
                        <a class="collapsible-header"><i class="large material-icons blue-text">account_circle</i>Akun</a>
                        <div class="collapsible-body">
                            <ul>
                                <li><a href="#">Notifikasi<span class="new badge blue">4</span></a></li>
                                <li><a href="/">Log Out</a></li>
                            </ul>
                        </div>
                    </li>
                </ul>
            </li>

            <li class="no-padding">
                <ul class="collapsible collapsible-accordion">
                    <li>
                        <a href="/menu" class="collapsible-header"><i class="large material-icons green-text">home</i>Home</a>
                    </li>
                </ul>
            </li>

            <li class="no-padding">
                <ul class="collapsible collapsible-accordion">
                    <li>
                        <a class="collapsible-header"><i class="large material-icons indigo-text">apps</i>Topik</a>
                        <div class="collapsible-body">
                            <ul>
                                <li><a href="/topik">Pengadaan Barang dan Jasa</a></li>
                                <li><a href="#!">Anti Korupsi</a></li>
                                <li><a href="#!">LKHPN</a></li>
                                <li><a href="#!">UPG</a></li>
                                <li><a href="#!">Kepegawaian</a></li>
                                <li><a href="#!">WBK</a></li>
                                <li><a href="#!">SPIP</a></li>
                            </ul>
                        </div>
                    </li>
                </ul>
            </li>

        </ul>
    </header>

    <?= $this->renderSection('content'); ?>

    <!--Import jQuery before materialize.js-->
    <script type="text/javascript" src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
    <script type="text/javascript" src="js/materialize.min.js"></script>
    <script>
        $('.button-collapse').sideNav({
            menuWidth: 250, // Default is 300
            edge: 'left', // Choose the horizontal origin
            closeOnClick: true

        })
    </script>
</body>

</html>