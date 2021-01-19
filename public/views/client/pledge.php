<?php require_once view('header'); ?>
<body>
    <main class="ff-pri h-20">

        <?php require_once view('client/header'); ?>

        <?php require_once view('client/menu'); ?>

        <div class="bgColor-1 h-auto w-full mt-12 md:pl-40 lg:pl-32 py-5">
            <div class="bgColor-1 w-full lg:w-8/12 m-0-auto h-auto shandow">

                <div class="w-11/12 lg:w-5/12 m-0-auto">
                    <h4 class="w-full py-2 color-pri txt-h-c">
                  Pledges
                    </h4>
                </div>

                <form class="w-11/12 lg:w-5/12 m-0-auto" action="index.html" method="post">
                    <input class="w-full py-2 b-color-2-200 mt-8 px-2"
                    type="number" name="" placeholder="Enter Amount">

                    <button class="w-full bgColor-pri rounded py-3 color-1
                    mt-10 border-0 fw-bold hover:bgColor-pri-700 outline-0 pointer"
                    type="button" name="button">
                  Pledge
                    </button>

                </form>

                <table class="table-auto border-collapse bgColor-trans m-0-auto w-full lg:w-full flow-auto block mt-20">
                  <thead class="txt-h-l">
                    <tr class="bgColor-1 border-8 b-solid b-color-1">
                      <th class="px-4 py-2 color-2-700">Amount Pledged</th>
                      <th class="px-4 py-2 color-2-700">Profit/Loss</th>
                      <th class="px-4 py-2 color-2-700">Status</th>
                      <th class="px-4 py-2 color-2-700">Date/Time Pledged</th>
                      <th class="px-4 py-2 color-2-700">Date/Time Profited</th>
                    </tr>
                  </thead>

                    <tbody>
                        <tr class="bgColor-1 border-8 b-solid b-color-1">
                            <td class="px-4 py-1 color-2-600 border-0"> Ksh.4000</td>
                            <td class="px-4 py-1 color-success border-0"> Ksh.1500 </td>
                            <td class="px-4 py-1 color-2-600 border-0 fw-bold"> Complete </td>
                            <td class="px-4 py-1 color-2-600 border-0"> 24-03-2020 17:45:12 </td>
                            <td class="px-4 py-1 color-2-600 border-0"> 25-03-2020 17:45:12 </td>
                        </tr>

                        <tr class="bgColor-1 border-8 b-solid b-color-1">
                            <td class="px-4 py-1 color-2-600 border-0"> Ksh.6000</td>
                            <td class="px-4 py-1 color-success border-0"> Ksh.3000 </td>
                              <td class="px-4 py-1 color-2-600 border-0 fw-bold"> Complete </td>
                            <td class="px-4 py-1 color-2-600 border-0"> 24-03-2020 17:45:12 </td>
                            <td class="px-4 py-1 color-2-600 border-0"> 25-03-2020 17:45:12 </td>
                        </tr>

                        <tr class="bgColor-1 border-8 b-solid b-color-1">
                            <td class="px-4 py-1 color-2-600 border-0"> Ksh.5000</td>
                            <td class="px-4 py-1 color-danger border-0"> Ksh.2000 </td>
                              <td class="px-4 py-1 color-2-600 border-0 fw-bold"> Pending </td>
                            <td class="px-4 py-1 color-2-600 border-0"> 24-03-2020 17:45:12 </td>
                            <td class="px-4 py-1 color-2-600 border-0"> 25-03-2020 17:45:12 </td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>

    </main>

</body>

<?php require_once view('footer'); ?>
