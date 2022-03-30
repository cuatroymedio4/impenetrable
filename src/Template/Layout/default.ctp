<?php
/**
 * CakePHP(tm) : Rapid Development Framework (https://cakephp.org)
 * Copyright (c) Cake Software Foundation, Inc. (https://cakefoundation.org)
 *
 * Licensed under The MIT License
 * For full copyright and license information, please see the LICENSE.txt
 * Redistributions of files must retain the above copyright notice.
 *
 * @copyright     Copyright (c) Cake Software Foundation, Inc. (https://cakefoundation.org)
 * @link          https://cakephp.org CakePHP(tm) Project
 * @since         0.10.0
 * @license       https://opensource.org/licenses/mit-license.php MIT License
 * @var \App\View\AppView $this
 */

$cakeDescription = 'CakePHP: the rapid development php framework';
?>
<!DOCTYPE html>
<html>
<head>
    <?= $this->Html->charset() ?>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>
        <?= $cakeDescription ?>:
        <?= $this->fetch('title') ?>
    </title>
    <?= $this->Html->meta('icon') ?>

    <?= $this->fetch('meta') ?>
    <?= $this->fetch('css') ?>
    <?= $this->fetch('script') ?>

    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Heebo:wght@400;500&family=Roboto:wght@400;500;700&display=swap" rel="stylesheet">

    <!-- Font-awesome -->
    <?= $this->Html->css('font-awesome/css/font-awesome.min.css') ?>
    <?= $this->Html->css('all.css') ?>

    <!-- Libraries Stylesheet -->
    <?= $this->Html->css('lib/animate/animate.min.css') ?>
    <?= $this->Html->css('lib/owlcarousel/assets/owl.carousel.min.css') ?>
    <?= $this->Html->css('lib/lightbox/css/lightbox.min.css') ?>



    <!-- Bootstrap modifies? -->
    <?= $this->Html->css('bootstrap_template.min.css') ?>
    <?= $this->Html->css('style.css') ?>
    <?= $this->Html->css('impenetrable_config.css') ?>




</head>
<body id="body">

    <?= $this->Flash->render() ?>

    <div class="container-xxl bg-white p-0">
        <?= $this->fetch('content') ?>
    </div>
    <footer>
    </footer>

    <!-- JavaScript Libraries -->

    <?= $this->Html->script('jquery-3.6.0.min.js') ?>
    <?= $this->Html->script('bootstrap.bundle.min.js') ?>

    <?= $this->Html->script('lib/wow/wow.min.js') ?>
    <?= $this->Html->script('lib/easing/easing.min.js') ?>
    <?= $this->Html->script('lib/waypoints/waypoints.min.js') ?>
    <?= $this->Html->script('lib/owlcarousel/owl.carousel.min.js') ?>
    <?= $this->Html->script('lib/isotope/isotope.pkgd.min.js') ?>
    <?= $this->Html->script('lib/lightbox/js/lightbox.min.js') ?>

    <?= $this->Html->script('template_main.js') ?>

</body>
</html>
