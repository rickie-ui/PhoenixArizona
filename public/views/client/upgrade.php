<?php require_once view('header'); ?>
<body>
    <main class="ff-pri h-20">

        <?php require_once view('client/header'); ?>


        <?php require_once view('client/menu'); ?>

        <div class="bgColor-2-200 h-auto w-full mt-12 md:pl-40 lg:pl-32 py-5">
            <div class="bgColor-pri w-11/12 m-0-auto h-auto ">
                <h2 class="ff-pri py-6 w-full txt-h-c color-1">
                    Disbursement Plans
                </h2>

                <div class="bgColor-pri w-full h-auto ff-pri lg:fx fx-j-c py-6 fw-700">
                    <div class="bgColor-1 lg:w-1/4 w-11/12 mt-2 lg:mt-0 h-auto py-6 px-4 ml-4
                    rounded shadow color-2-700 txt-h-c" data-aos="fade-up" data-aos-duration="1000">
                        <div class="bgColor-2-100 w-16 h-16 fx fx-j-c fx-i-c rounded-full
                        color-pri fw-bold mb-4 m-0-auto">
                            <i class="fa fa-users fs-xl"></i>
                        </div>

                        <h2 class="py-2 color-sec">Silver</h2>

                        <h2 class="py-2"> Ksh 1200</h2>

                        <p class="py-2">Streamline points 100</p>

                        <p class="py-2">Affiliate Bonus 264</p>

                        <p class="py-2">Matching Bonus 210</p>

                        <p class="py-2">Weekly Reward 216</p>

                        <p class="py-2">Quarterly Dividends 936</p>

                        <button class="bgColor-sec color-1 fs-sm  py-3
                         w-40 border-0 rounded fw-bold ff-pri pointer outline-0
                        shadow mt-4 hover:bgColor-sec-700"
                        type="button" name="button">
                        Upgrade
                        </button>
                    </div>
                </div>

            </div>
        </div>

    </main>
    <script type="text/javascript">
        new ClipboardJS('.copy_link');
    </script>
</body>

<?php require_once view('footer'); ?>
