<?php require_once view('header'); ?>
<body>
    <main class="ff-pri h-20">

        <?php require_once view('client/header'); ?>

        <?php require_once view('client/menu'); ?>

        <div class="bgColor-1 h-auto w-full mt-12 md:pl-40 lg:pl-32 py-5">
            <div class="bgColor-1 w-full lg:w-6/12 m-0-auto h-auto shandow">

                <div class="w-11/12 lg:w-1/2 m-0-auto">
                    <h4 class="w-full py-2 color-pri">
                      Change Password
                    </h4>
                </div>

                <form class="w-11/12 lg:w-1/2 m-0-auto" id="changepassword_form" action="changepassword" method="post">
                    <input class="w-full py-2 b-color-2-200 mt-8 px-2"
                    type="password" name="currentPassword" placeholder="Current Password">

                    <input class="w-full py-2 b-color-2-200 mt-8 px-2"
                    type="password" name="password" placeholder="New Password">

                    <input class="w-full py-2 b-color-2-200 mt-8 px-2"
                    type="password" name="confirmPassword" placeholder="Confirm New Password">

                    <p id="data" class="w-full txt-h-c pt-5"></p>

                    <button class="w-full bgColor-pri rounded py-3 color-1
                    mt-10 border-0 fw-bold hover:bgColor-pri-700 outline-0 pointer"
                    type="button" id="changepassword_btn"  onclick="
                     (new Ajax).form('changepassword_form')
                               .loader('changepassword_btn')
                               .flush('data')
                               .send();">
                     Submit
                    </button>

                </form>
            </div>
        </div>

    </main>

</body>

<?php require_once view('footer'); ?>
