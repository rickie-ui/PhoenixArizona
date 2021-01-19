<?php require_once view('header'); ?>
<body>
    <main class="ff-pri h-20">

        <?php require_once view('client/header'); ?>


        <?php require_once view('client/menu'); ?>

        <div class="bgColor-1 h-auto w-full mt-12 md:pl-40 lg:pl-32 py-5">
            <div class="bgColor-1 w-full lg:w-6/12 m-0-auto h-auto shandow">

                <div class="w-11/12 lg:w-1/2 m-0-auto">
                    <h4 class="w-full py-2 color-pri">
                       Mpesa STK Deposit
                    </h4>
                </div>

                <form class="w-11/12 lg:w-1/2 m-0-auto"
                id="deposit_form" action="deposit" method="post">
                    <input class="w-full py-2 b-color-2-200 mt-8 px-2"
                    type="number" name="phone" placeholder="Enter Phone Number">

                    <input class="w-full py-2 b-color-2-200 mt-8 px-2"
                    type="number" name="amount" placeholder="Enter Amount">

                    <p id="response" class="w-full txt-h-c"></p>

                    <button class="w-full bgColor-pri rounded py-3 color-1
                    mt-10 border-0 fw-bold hover:bgColor-pri-700 outline-0 pointer"
                    type="button" id="deposit_btn"  onclick="(new Ajax).form('deposit_form')
                                                            .loader('deposit_btn')
                                                            .flush('response')
                                                            .send();">
                     Deposit
                    </button>

                </form>
            </div>
        </div>

    </main>

</body>

<?php require_once view('footer'); ?>
