<?php require_once view('header'); ?>
<body>
    <main class="ff-pri h-20">

        <?php require_once view('client/header'); ?>

        <?php require_once view('client/menu'); ?>

        <div class="bgColor-1 h-auto w-full mt-12 md:pl-40 lg:pl-32 py-5">
            <div class="bgColor-1 w-full lg:w-11/12 m-0-auto h-auto shandow">

                    <h4 class="w-full py-2 color-pri txt-h-c">
                        My Transactions
                    </h4>

                <table class="table-auto border-collapse bgColor-trans m-0-auto">
                  <thead class="txt-h-c">
                    <tr class="bgColor-1 border-8 b-solid b-color-1">
                      <th class="px-4 py-2 color-2-700">Status</th>
                      <th class="px-4 py-2 color-2-700">Activity</th>
                      <th class="px-4 py-2 color-2-700">Amount</th>
                      <th class="px-4 py-2 color-2-700">Date/Time</th>
                    </tr>
                  </thead>

                    <tbody>

                        <?php foreach ($transactions as $transaction): ?>

                            <tr class="bgColor-1 border-8 b-solid b-color-1">
                                <td class="px-4 py-1 color-2-600 border-0"> <?= $transaction->status ?> </td>
                                <td class="px-4 py-1 color-2-600 border-0"> <?= $transaction->activity ?> </td>
                                <td class="px-4 py-1 color-2-600 border-0"> <?= $transaction->amount ?> </td>
                                <td class="px-4 py-1 color-2-600 border-0"> <?= $transaction->created_at ?> </td>
                            </tr>

                        <?php endforeach; ?>

                     </tbody>
                </table>
            </div>
        </div>

    </main>

</body>

<?php require_once view('footer'); ?>
