<?php require_once view('header'); ?>

<body>
    <main class="bgColor-pri mt-16 lg:h-screen">

        <?php require_once view('welcome/partials/nav'); ?>

        <?php require_once view("welcome/partials/{$partial}"); ?>


        <div class="w-11/12 m-0-auto md:w-full lg:fixed lg:b-0">

            <?php require_once view('custom_footer'); ?>

        </div>
    </main>

</body>

<?php require_once view('footer'); ?>
