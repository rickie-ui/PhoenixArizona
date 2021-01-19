<?php require_once view('header'); ?>
<body>
    <main class="ff-pri h-20">

        <?php require_once view('admin/header'); ?>

        <?php require_once view('admin/menu'); ?>

        <div class="bgColor-2-200 h-auto w-full mt-12 md:pl-40 lg:pl-32 py-5">
            <div class="bgColor-pri w-full lg:w-11/12 m-0-auto h-auto shandow flow-auto py-4 ">
               <h4 class="w-full txt-h-c  pb-4 color-1">
                   Funds
               </h4>
                <table class="table-auto border-collapse bgColor-trans m-0-auto">
                    <thead class="txt-h-c">
                      <tr class="bgColor-1 border-8 b-solid b-color-1">
                        <th class="px-4 py-2 color-2-700">Username</th>
                        <th class="px-4 py-2 color-2-700">Phone</th>
                        <th class="px-4 py-2 color-2-700">Earnings</th>
                        <th class="px-4 py-2 color-2-700">Withdrawals</th>
                        <th class="px-4 py-2 color-2-700">Balance</th>
                        <th class="px-4 py-2 color-2-700">Unclaimed</th>
                        <th class="px-4 py-2 color-2-700">Profit</th>
                      </tr>
                    </thead>

                    <tbody>
                        <tr class="bgColor-1 border-8 b-solid b-color-1">
                            <td class="px-4 py-1 color-2-600 border-0"> erick5946 </td>
                            <td class="px-4 py-1 color-2-600 border-0"> 071646953 </td>
                            <td class="px-4 py-1 color-2-600 border-0"> Ksh 40,000 </td>
                            <td class="px-4 py-2 color-2-700">Ksh 20,000</td>
                            <td class="px-4 py-1 color-2-600 border-0"> Ksh 100,000 </td>
                            <td class="px-4 py-1 color-2-600 border-0"> Ksh 5000</td>
                            <td class="px-4 py-1 color-2-600 border-0"> Ksh 15000</td>
                        </tr>
                    </tbody>
                </table>
          </div>
        </div>

    </main>

    <script type="text/javascript">
        new ClipboardJS('.copy_link');
    </script>
</body>

<?php require_once view('footer'); ?>
