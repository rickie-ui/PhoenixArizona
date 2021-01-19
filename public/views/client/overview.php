<?php require_once view('header'); ?>
<body>
    <main class="ff-pri h-20">

        <?php require_once view('client/header'); ?>


        <?php require_once view('client/menu'); ?>

        <div class="bgColor-2-200 h-auto w-full mt-12 md:pl-40 lg:pl-32 py-5">
            <div class="w-11/12 m-0-auto h-auto ">

            <div  class="w-full fx fx-i-c fx-j-btw">
                <div id="open_menu"  class="fx fx-i-c lg:hide">
                   <i class="fa fa-bars px-2"></i> Menu
                </div>

                <div class="fx fx-j-e fx-i-c color-pri px-5 fs-sm">
                    <i class="fa fa-money-bill px-1"></i>
                    <p>Diamond Pro</p>
                </div>
            </div>

             <div class="w-full m-0-auto h-auto mt-4 lg:fx fx-j-btw">
                    <div class="w-full lg:w-1/4 h-20 fx fx-j-c fx-i-c bgColor-1 px-4 mb-2">
                      <div class="w-1/2 txt-h-c border-t-0 border-b-0 border-l-0
                       b-solid b-color-sec border-r fw-500">
                        <i class="fas fa-money-bill fa-2x color-pri"></i>
                        <p>Earnings</p>
                      </div>

                      <div class="w-1/2 fs-lg txt-h-c fw-600">
                        Ksh 40,000
                      </div>
                    </div>

                    <div class="w-full lg:w-1/3 h-20 fx fx-j-c fx-i-c bgColor-1 px-4 mb-2">
                        <div class="w-1/2 txt-h-c border-t-0 border-b-0 border-l-0
                         b-solid b-color-sec border-r fw-500">
                         <i class="fas fa-money-bill fa-2x color-pri"></i>
                          <p>Withdrawn</p>
                        </div>

                        <div class="w-1/2 fs-lg txt-h-c fw-600">
                           Ksh 35,000
                        </div>
                    </div>

                    <div class="w-full lg:w-1/3 h-20 fx fx-j-c fx-i-c bgColor-1 px-4">
                        <div class="w-1/2 txt-h-c border-t-0 border-b-0 border-l-0
                         b-solid b-color-sec border-r fw-500">
                         <i class="fas fa-money-bill fa-2x color-pri"></i>
                          <p>Balance</p>
                        </div>

                        <div class="w-1/2 fs-lg txt-h-c fw-600">
                          Ksh 5,000
                        </div>
                    </div>
                </div>
            </div>

            <div class="w-11/12 m-0-auto h-auto pt-5 flow-auto lg:fx fx-j-c">
               <div class="w-full lg:w-1/2">
                   <table class="table-auto border-collapse bgColor-trans m-0-auto">
                     <thead>
                       <tr class="bgColor-1 border-8 b-solid b-color-1">
                         <th class="px-4 py-2 color-2-700">Reward</th>
                         <th class="px-4 py-2 color-2-700">Amount</th>
                         <th class="px-4 py-2 color-2-700">Status</th>
                       </tr>
                     </thead>

                       <tbody>
                           <tr class="bgColor-1 border-8 b-solid b-color-1">
                               <td class="px-4 py-1 color-2-600 border-0">Quarterly Dividends</td>
                               <td class="px-4 py-1 color-2-600 border-0"> Ksh 21,160 </td>
                               <td class="px-4 py-1 color-2-600 border-0">
                                   <i class="fal fa-check color-success"></i>
                               </td>
                           </tr>

                           <tr class="bgColor-1 border-8 b-solid b-color-1">
                               <td class="px-4 py-1 color-2-600 border-0">Compensation Bonus</td>
                               <td class="px-4 py-1 color-2-600 border-0"> Ksh 5,570 </td>
                               <td class="px-4 py-1 color-2-600 border-0">
                                   <i class="fal fa-check color-success"></i>
                               </td>
                           </tr>
                           <tr class="bgColor-1 border-8 b-solid b-color-1">
                               <td class="px-4 py-1 color-2-600 border-0">Binary Bonus</td>
                               <td class="px-4 py-1 color-2-600 border-0"> Ksh 5,570 </td>
                               <td class="px-4 py-1 color-2-600 border-0">
                                   <i class="fal fa-times color-danger"></i>
                               </td>
                           </tr>

                           <tr class="bgColor-1 border-8 b-solid b-color-1">
                               <td class="px-4 py-1 color-2-600 border-0">Pledges</td>
                               <td class="px-4 py-1 color-2-600 border-0"> Ksh 5,570 </td>
                               <td class="px-4 py-1 color-2-600 border-0">
                                   <i class="fal fa-check color-success"></i>
                               </td>
                           </tr>

                           <tr class="bgColor-1 border-8 b-solid b-color-1">
                               <td class="px-4 py-1 color-2-600 border-0">Compensation Returns</td>
                               <td class="px-4 py-1 color-2-600 border-0"> Ksh 5,570 </td>
                               <td class="px-4 py-1 color-2-600 border-0">
                                   <i class="fal fa-times color-danger"></i>
                               </td>
                           </tr>
                       </tbody>
                   </table>

                  <div class="w-full md:w-1/2 fx fx-j-e py-4">
                      <a class="no-line" href="">
                          <button  class="bgColor-pri w-auto color-1 fs-sm
                          py-1 px-3 border-0 rounded fw-bold ff-pri
                          pointer outline-0" type="button">
                          Claim Earnings
                          </button>
                      </a>
                  </div>
               </div>

               <div class="w-full lg:w-1/2">
                 <div class="w-full bgColor-1 py-5 px-5">
                    <h4 class="color-pri pb-4">Your Referral Link</h4>

                    <input id="link_input" type="text" class="py-2 w-full"
                    value="https://www.startupcash.co.ke/register.php?ref=Dedanigoki">

                    <button class="copy_link bgColor-pri w-auto color-1 fs-sm mt-3
                    py-1 px-3 border-0 rounded fw-bold ff-pri pointer outline-0"
                    data-clipboard-target="#link_input">
                        <i class="fa fa-copy"></i> Copy
                  </button>
                 </div>

                 <div class="w-full bgColor-1 py-5 px-5 mt-3">
                    <div class="w-full lg:w-8/12 m-0-auto pb-3">
                       <h4 class="color-sec pb-4 mb-3">WhatsApp Link</h4>
                       <a href="" class="w-full bgColor-sec w-auto color-1 fs-sm mt-3
                       py-2 px-3 border-0 rounded fw-bold ff-pri pointer outline-0
                       no-line">
                           Click to join our WhatsApp group
                     </a>
                    </div>
                 </div>
               </div>
            </div>
        </div>

    </main>
    <script type="text/javascript">
        new ClipboardJS('.copy_link');
    </script>
</body>

<?php require_once view('footer'); ?>
