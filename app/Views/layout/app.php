<!DOCTYPE html>
<html lang="en">

<head>
    <!-- title -->
    <title><?= $title ?></title>

    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- style links -->
    <!-- Bootstrap CSS -->
    <link
        href="https://fonts.googleapis.com/css2?family=Kufam:wght@400;600;700;800&family=Poppins:wght@200;300;400;600&family=Red+Rose:wght@300;400;500;600;700&family=Roboto:wght@100;400;500;700&family=Sansita:ital,wght@0,400;0,700;0,800;1,700&display=swap"
        rel="stylesheet">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css"
        integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

    <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />

    <link rel="stylesheet" href="<?= base_url('assets/css/style.css') ?>">
    <link rel="stylesheet" href="<?= base_url('assets/css/main.css') ?>">
</head>

<body>

    <div class=" p-0 m-0">
        <div class="bg-light header-section fixed-top p-0 m-0">
            <?php include("includes/header.php");?>
        </div>

        <div style="margin-top:60px;">
            <?= $this->renderSection('content')?>
        </div>

        <div class="footer-section text-center">
            <?php include("includes/footer.php"); ?>
        </div>
    </div>


    <div id="scrolltotop_parent" class="scrolltotop_hide_onload">
        <div tabindex="0" id="scrolltotop_arrow">
        </div>
    </div>

    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="<?= base_url('assets/js/jquery.js') ?>"></script>

    <!-- <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script> -->
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"
        integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"
        integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous">
    </script>

    <!-- animation on scroll library -->
    <script src="https://unpkg.com/aos@next/dist/aos.js"></script>

    <!-- show more script -->
    <script src="<?= base_url('assets/js/home-show-more.js') ?>"></script>
    
    <!-- <script src="<?= base_url('assets/js/lightbox.js') ?>"></script> -->
    <script src="<?= base_url('assets/js/scroll-to-top.js') ?>"></script>
    <script src="<?= base_url('assets/js/aos.js') ?>"></script>
    <script src="<?= base_url('assets/js/main.js') ?>"></script>

</body>

</html>