<?php require_once view('header'); ?>
<body>
    <main class="ff-pri h-20">

        <?php require_once view('client/header'); ?>

        <?php require_once view('client/menu'); ?>

        <div class="bgColor-1 h-auto w-full mt-12 md:pl-40 lg:pl-32 py-5">
            <div class="bgColor-1 w-full lg:w-8/12 m-0-auto h-auto shandow">

                <div class="w-11/12 lg:w-1/2 m-0-auto">
                    <h4 class="w-full py-2 color-pri">
                      Contact Us
                    </h4>
                </div>

                <form class="w-11/12 lg:w-1/2 m-0-auto" action="index.html" method="post">
                    <input class="w-full py-2 b-color-2-200 mt-8 px-2 mb-4"
                    type="text" name="" placeholder="Subject">

                    <label for="message" class="fw-bold color-2-700">
                        Message
                    </label>

                    <textarea  class="w-full py-2 b-color-2-200 px-2 mt-2"
                     name="message" rows="8" cols="80" placeholder="Message">
                    </textarea>

                    <button class="w-full bgColor-pri rounded py-3 color-1
                    mt-8 border-0 fw-bold hover:bgColor-pri-700 outline-0 pointer"
                    type="button" name="button">
                     Send
                    </button>

                </form>
            </div>
        </div>

    </main>

</body>

<?php require_once view('footer'); ?>
