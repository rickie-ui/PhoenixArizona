<?php require_once view('header'); ?>

<body>
    <main class="w-full ff-pri bgColor-pri h-auto  py-5">
        <form id="signup_form" action="signup" method="post"
          class="w-11/12 lg:w-5/12 m-0-auto bgColor-1 py-10">

            <div class="w-8/12 m-0-auto mb-5">
                <h2 class="py-1"><?= app_name() ?></h2>
                <p class="color-pri-600 fw-600">Register your account</p>
            </div>

            <div class="fw-600 w-8/12 m-0-auto mb-2">
                <label for="username" class="block py-2 fs-sm">Username</label>
                <input class="w-full py-2 px-2 rounded b-color-sec-300 border-2
                focus:b-color-pri outline-0"
                type="text" name="username" placeholder="johndoe">
            </div>

            <div class="fw-600 w-8/12 m-0-auto mb-2">
                <label for="email" class="block py-2 fs-sm">Email</label>
                <input class="w-full py-2 px-2 rounded b-color-sec-300 border-2
                focus:b-color-pri outline-0"
                type="text" name="email" placeholder="johndoe@gmail.com">
            </div>

            <div class="fw-600 w-8/12 m-0-auto mb-2">
                <label for="phone" class="block py-2 fs-sm">Phone</label>
                <input class="w-full py-2 px-2 rounded b-color-sec-300 border-2
                focus:b-color-pri outline-0"
                type="number" name="phone" placeholder="0723456867">
            </div>

            <div class="fw-600 w-8/12 m-0-auto mb-2">
                <label for="password" class="block py-2 fs-sm">Password</label>
                <input class="w-full py-2 px-2 rounded b-color-sec-300 border-2
                focus:b-color-pri outline-0"
                type="password" name="password" placeholder="12345678">
            </div>

            <div class="fw-600 w-8/12 m-0-auto mb-2">
                <label for="confirmPassword" class="block py-2 fs-sm">
                    Confirm Password
                </label>
                <input class="w-full py-2 px-2 rounded b-color-sec-300 border-2
                focus:b-color-pri outline-0"
                type="password" name="confirmPassword" placeholder="12345678">
            </div>

            <p id="data" class="w-full txt-h-c"></p>

            <div class="w-7/12 m-0-auto">
                <button id="signup_btn" class="w-full bgColor-pri rounded py-3 color-1
                mt-5 border-0 fw-bold hover:bgColor-pri-700 outline-0 pointer"
                type="button"
                onclick="
                (new Ajax).form('signup_form')
                          .loader('signup_btn')
                          .flush('data')
                          .send();">
                    Sign Up
                </button>
            </div>

            <div class="w-7/12 m-0-auto fw-bold txt-h-c fs-sm py-4">
                Already have an account?
                <a  class="no-line color-pri" href="/signin">
                    Sign In
                </a>
            </div>

        </form>

    </main>
</body>

<?php require_once view('footer'); ?>
