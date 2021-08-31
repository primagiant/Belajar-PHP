<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <title><?= $title; ?></title>

    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="apple-touch-icon" href="apple-touch-icon.png">

    <link rel="stylesheet" href="<?= base_url(); ?>/css/bootstrap.min.css">
    <link rel="stylesheet" href="<?= base_url(); ?>/css/bootstrap-theme.min.css">
    <link rel="stylesheet" href="<?= base_url(); ?>/css/fontAwesome.css">
    <link rel="stylesheet" href="<?= base_url(); ?>/css/light-box.css">
    <link rel="stylesheet" href="<?= base_url(); ?>/css/templatemo-style.css">

    <link href="https://fonts.googleapis.com/css?family=Kanit:100,200,300,400,500,600,700,800,900" rel="stylesheet">

    <script src="<?= base_url(); ?>/js/vendor/modernizr-2.8.3-respond-1.4.2.min.js"></script>
</head>

<body>

    <nav>
        <div class="logo">
            <a href="/">PRIMA<em>PROJECT</em></a>
        </div>
        <div class="menu-icon">
            <span></span>
        </div>
    </nav>

    <?= $this->renderSection('content'); ?>

    <footer>
        <div class="container-fluid">
            <div class="col-md-12">
                <p>Copyright &copy; 2021 Prima Project</p>
            </div>
        </div>
    </footer>

    <?= $this->include('layout/chat'); ?>

    <?= $this->include('layout/menu'); ?>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
    <script>
        window.jQuery || document.write('<script src="<?= base_url(); ?>/js/vendor/jquery-1.11.2.min.js"><\/script>')
    </script>

    <script src="<?= base_url(); ?>/js/vendor/bootstrap.min.js"></script>

    <script src="<?= base_url(); ?>/js/plugins.js"></script>
    <script src="<?= base_url(); ?>/js/main.js"></script>

    <script>
        dpToggle = document.getElementById("dp-toggle1");
        dpMenu = document.getElementById("dp-menu1");

        dpToggle.addEventListener("click", () => {
            if (dpMenu.style.display != "block") {
                dpMenu.style.display = "block";
                dpMenu.style.visibility = "visible";
            } else {
                dpMenu.style.display = "none";
                dpMenu.style.visibility = "hidden";
            }
        });
    </script>

</body>

</html>