<?php require_once view('header'); ?>
<body>
    <main class="ff-pri h-20">

        <?php require_once view('client/header'); ?>

        <?php require_once view('client/menu'); ?>

        <div class="bgColor-1 h-auto w-full mt-12 md:pl-40 lg:pl-32 py-5">
            <div class="bgColor-1 w-full lg:w-6/12 m-0-auto h-auto shandow">

                <div class="w-11/12 lg:w-1/2 m-0-auto mb-4">
                    <h4 class="w-full py-2 color-pri">
                     My Details
                    </h4>
                </div>

                <form class="w-11/12 lg:w-1/2 m-0-auto" action="index.html" method="post">

                    <label for="sponsor_username" class="fw-bold color-2-700 fs-sm">
                        Sponsor
                    </label>

                    <input class="w-full py-2 b-color-2-200 mt-4 mb-4 px-2"
                    type="text" name="sponsor_username" placeholder="Sponsor Username"
                    value="<?= $user->sponsor_username ?>" disabled>

                    <label for="username" class="fw-bold color-2-700 fs-sm">
                        Username
                    </label>

                    <input class="w-full py-2 b-color-2-200 mt-4 mb-4  px-2"
                    type="text" name="username" placeholder="Username"
                    value="<?= $user->username ?>" disabled>

                    <label for="email" class="fw-bold color-2-700 fs-sm">
                        Email
                    </label>

                    <input class="w-full py-2 b-color-2-200 mt-4 mb-4 px-2"
                    type="text" name="email" placeholder="Email"
                    value="<?= $user->email ?>" disabled>

                    <label for="phone" class="fw-bold color-2-700 fs-sm">
                        Phone
                    </label>

                    <input class="w-full py-2 b-color-2-200 mt-4 mb-4 px-2"
                    type="text" name="phone" placeholder="Phone"
                    value="<?= $user->phone ?>" disabled>

                    <label for="status" class="fw-bold color-2-700 fs-sm">
                        Status
                    </label>

                    <input class="w-full py-2 b-color-2-200 mt-4   px-2"
                    type="text" name="status" placeholder="Status"
                    value="<?= $user->status ?>" disabled>

                    <div class="w-full fx fx-j-btw pb-10">

                        <!-- <button class="w-4/12  bgColor-pri rounded py-3 color-1
                        mt-10 border-0 fw-bold hover:bgColor-pri-700 outline-0 pointer"
                        type="button" name="button">
                         update
                        </button> -->

                        <a href="/changepassword" class="w-full bgColor-pri rounded py-3 color-1
                        mt-10 txt-h-c no-line  fw-bold hover:bgColor-pri-700 outline-0 pointer">
                            Change Password
                        </a>

                    </div>
                </form>
            </div>
        </div>

    </main>

</body>

<?php require_once view('footer'); ?>
