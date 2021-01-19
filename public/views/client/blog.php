<?php require_once view('header'); ?>
<body>
    <main class="ff-pri h-20">

        <?php require_once view('client/header'); ?>

        <?php require_once view('client/menu'); ?>

        <div class="bgColor-1 h-auto w-full mt-12 md:pl-40 lg:pl-32 py-5">
            <div class="bgColor-1 w-full lg:w-6/12 m-0-auto h-auto shandow">

                <div class="w-11/12 lg:w-1/2 m-0-auto">
                    <h4 class="w-full py-2 color-pri">
                  Create your blog
                    </h4>
                </div>

                <form class="w-11/12 lg:w-1/2 m-0-auto" action="index.html" method="post">
                    <label for="title" class=" fw-bold block py-2 fs-sm">Post Title</label>
                    <input class="w-full py-2 b-color-2-200 mt-2 px-2"
                    type="text" name="" placeholder="Write title...">

                    <label for="title" class=" fw-bold block py-2 fs-sm">Post Body</label>
                    <textarea name="name"placeholder="Write the blog here..." rows="8" cols="80" class="w-full py-2 b-color-2-200 mt-2 px-2 rounded"></textarea>

                    <button class="w-full bgColor-pri rounded py-3 color-1
                    mt-10 border-0 fw-bold hover:bgColor-pri-700 outline-0 pointer"
                    type="button" name="button">
                  Publish
                    </button>

                </form>
            </div>
        </div>

    </main>

</body>

<?php require_once view('footer'); ?>
