<?php require_once view('header'); ?>
<body>
    <main class="ff-pri h-20">

        <?php require_once view('admin/header'); ?>

        <?php require_once view('admin/menu'); ?>

        <div class="bgColor-2-200 h-auto w-full mt-12 md:pl-40 lg:pl-32 py-5">
            <div class="bgColor-pri w-full lg:w-11/12 m-0-auto h-auto shandow flow-auto py-4 ">
               <h4 class="w-full txt-h-c  pb-4 color-1">
                   Upgrade Series
               </h4>
                <table class="table-auto border-collapse bgColor-trans m-0-auto">
                    <thead class="txt-h-c">
                      <tr class="bgColor-1 border-8 b-solid b-color-1">
                        <th class="px-4 py-2 color-2-700">Username</th>
                        <th class="px-4 py-2 color-2-700">Phone</th>
                        <th class="px-4 py-2 color-2-700">Active </th>
                        <th class="px-4 py-2 color-2-700">Previous </th>
                        <th class="px-4 py-2 color-2-700">Amount Paid</th>
                        <th class="px-4 py-2 color-2-700">Points</th>
                        <th class="px-4 py-2 color-2-700">Date/Time</th>
                      </tr>
                    </thead>

                    <tbody>
                        <tr class="bgColor-1 border-8 b-solid b-color-1">
                            <td class="px-4 py-1 color-2-600 border-0"> erick5946 </td>
                            <td class="px-4 py-1 color-2-600 border-0"> 071646953 </td>
                            <td class="px-4 py-1 color-2-600 border-0"> Gold </td>
                            <td class="px-4 py-2 color-2-700">Silver</td>
                            <td class="px-4 py-1 color-2-600 border-0">Ksh 4500 </td>
                            <td class="px-4 py-1 color-2-600 border-0"> 2000</td>
                            <td class="px-4 py-2 color-2-700">2012-03-24 17:45:12</td>
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
