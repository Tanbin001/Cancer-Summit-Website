<main>
    <section class=" py-1 bg-blueGray-50">
        <?php
                if($msg == 'success'){
            ?>
        <center>
            <div class="border px-4 py-4 w-8/12 border-green-400 bg-green-300 text-green-900">
                <b>Success!!</b>&nbsp You have Successfully Registered! We Will Contact you soon!
            </div>
        </center>
        <?php
                }else if($msg == 'error'){
            ?>
        <center>
            <div class="border px-4 py-4 w-8/12 border-red-400 bg-red-300 text-red-900">
                <b>Database Error!!</b>&nbsp Please Try Again After a Few Moment!
            </div>
        </center>
        <?php
                }else if($msg == 'alert'){
            ?>
        <center>
            <div class="border px-4 py-4 w-8/12 border-yellow-400 bg-yellow-300 text-yellow-900">
                <b>Re-entry!!</b>&nbsp You have already Registered with this Email!
            </div>
        </center>
        <?php
                }
            ?>
        <div class="w-full lg:w-8/12 px-2 lg:px-40 md:px-20 mx-auto mt-6">
            <div
                class="relative flex flex-col min-w-0 break-words w-full mb-6 shadow-lg rounded-lg bg-blueGray-100 border-0">
                <div class="rounded-t bg-white mb-0 px-6 py-6">
                    <div class="text-center flex justify-between">
                        <h6 class="text-blueGray-700 text-xl font-bold">
                            Register as a Participant
                        </h6>
                        <button
                            class="bg-pink-500 text-white active:bg-pink-600 font-bold uppercase text-xs px-4 py-2 rounded shadow hover:shadow-md outline-none focus:outline-none mr-1 transition transform hover:-translate-y-1 hover:scale-110 duration-500 ease-in-out"
                            type="button">
                            <a href="/">Back to CS22</a>
                        </button>
                    </div>
                </div>
                <div class="flex-auto px-4 lg:px-10 py-10 pt-0">
                    <div>
                        <p class="text-center pb-12">
                            "Register to attend the conversations, which will feature some of the country's most
                            prominent figures. A remarkable group of speakers will participate in eight panel
                            discussions. Join us today for more information about some of the most interesting industry
                            trends and get insight from some of the best business minds in the country."
                        </p>
                    </div>
                    <!--<div class="border-b-4 border-green-400">-->
                    <!--    <p>-->
                    <!--    <ol class="list-decimal mb-10">-->
                    <!--        <li> Registration Fee for Single Participants is <span class="font-bold">BDT-->
                    <!--                10,000/-</span></li>-->
                    <!--        <li> <span class="font-bold"> bKash </span> number is <span-->
                    <!--                class="font-bold">0171-3004060</span>-->
                    <!--        </li>-->
                    <!--        <li>-->
                    <!--            Bank Transfer Information:-->
                    <!--            <br> <em> Bank Name: </em><span class="font-bold">&nbsp;Mutual Trust Bank Ltd.</span>-->
                    <!--            <br> <em> A/C Name:  </em><span class="font-bold">&nbsp;Valor of Bangladesh </span>-->
                    <!--            <br> <em> Account#: </em><span class="font-bold">&nbsp;1301000030711 </span>-->
                    <!--            <br> <em> Branch: </em><span class="font-bold">&nbsp;Corporate Branch, Dhaka </span>-->
                    <!--            <br> <em> Routing Number: </em><span class="font-bold">&nbsp;145264851 </span>-->
                    <!--        </li>-->
                    <!--        <li> For Any Query,<span class="font-bold"> corporate@valorofbangladesh.com</span> or <span-->
                    <!--                class="font-bold">amirul.tanzim@gmail.com</span></li>-->
                    <!--        <li>Emergency Contact number-->
                    <!--            <span class="font-bold">-->
                    <!--                0140-4016999-->
                    <!--            </span>-->
                    <!--        </li>-->
                    <!--    </ol>-->
                    <!--    </p>-->
                    <!--</div>-->
                      
<div class="flex flex-col gap-5 items-center justify-center bg-white">

  <!-- Card 1 -->
  <card class="border-gray-300 border-2 rounded-xl w-[30rem] py-10 px-5">
    <div class="grid grid-cols-6 gap-3">
      
      <!-- Image -->
      <div class="col-span-3">
        <img src="../assets/images/gallery/cost.png" width="200" height="150" />
      </div>

      <!-- Description -->
      <div class="col-span-3">
        <p class="text-gray-700 font-bold text-2xl"> Registration Fee </p>
        <p class="text-gray-500 mt-4"> for Single Participants is <span class="font-bold text-xl">BDT 10,000/-</span></p> <br> <br>
        <p class="text-xs">For Any Query, corporate@valorofbangladesh.com or amirul.tanzim@gmail.com</p>
      </div>

    </div>
  </card>

  <!-- Card 2 -->
  <card class="border-gray-300 border-2 rounded-xl w-[30rem] py-7 px-5">
    <div class="grid grid-cols-6 gap-3">
      
      <!-- Description -->
      <div class="col-span-3">
        <p class="text-gray-700 font-bold text-2xl"> Bank Transfer Information: </p>
        <p class="text-gray-500 mt-4">
            <ul>
                <li> Bank Name:  <span class="text-gray-500 text-xl font-bold"> Mutual Trust Bank Ltd. </span> </li>
                <li> A/C Name:  <span class="text-gray-500 text-xl font-bold"> Valor of Bangladesh </span> </li>
                <li> Account Number:  <span class="text-gray-500 text-xl font-bold"> 1301000030711 </span> </li>
                <li> Branch:  <span class="text-gray-500 text-xl font-bold"> Corporate Branch, Dhaka </span> </li>
                <li> Routing Number:  <span class="text-gray-500 text-xl font-bold"> 145264851 </span> </li>
            </ul>
        </p>
      </div>

            <!-- Image -->
      <div class="col-span-3">
        <img src="../assets/images/gallery/mtb.png" width="80%" />
      </div>

    </div>
  </card>

  <!-- Card 3 -->
  <card class="border-gray-300 border-2 rounded-xl w-[30rem] py-7 px-5">
    <div class="grid grid-cols-6 gap-0">
      
      <!-- Image -->
      <div class="col-span-4 pl-20">
        <img src="../assets/images/gallery/bkash.png" width="200" />
      </div>

      <!-- Description -->
      <div class="col-span-2">
        <p class="text-gray-700 font-bold text-xl"> Registration fee through bKash </p>
        <p class="text-gray-500 mt-4"> bKash number :  <br> <span class="font-bold text-xl">0171-3004060</span> </p> <br> <br>
        <p class="text-xs"> Emergency Contact number <span class="font-bold">0140-4016999</span> </p>
      </div>

    </div>
  </card>

</div>
                    <form method="post" enctype="multipart/form-data">
                        <h6 class="text-blueGray-400 text-sm mt-8 mb-6 font-bold uppercase text-center underline">
                            Participant Information
                        </h6>
                        <div class="flex flex-wrap">
                            <div class="w-full lg:w-6/12 px-4">
                                <div class="relative w-full mb-3">
                                    <label class="block uppercase text-blueGray-600 text-xs font-bold mb-2"
                                        htmlfor="grid-password">
                                        Full Name
                                    </label>
                                    <input type="text" name="fname"
                                        class="border-0 px-3 py-3 placeholder-blueGray-300 text-blueGray-600 bg-white rounded text-sm shadow focus:outline-none focus:ring w-full ease-linear transition-all duration-150"
                                        placeholder="Full Name" required pattern="/^[a-zA-Z][a-zA-Z-.]{1,20}+$/i">
                                </div>
                            </div>
                            <div class="w-full lg:w-6/12 px-4">
                                <div class="relative w-full mb-3">
                                    <label class="block uppercase text-blueGray-600 text-xs font-bold mb-2"
                                        htmlfor="grid-password">
                                        Email address
                                    </label>
                                    <input type="email" name="email"
                                        class="border-0 px-3 py-3 placeholder-blueGray-300 text-blueGray-600 bg-white rounded text-sm shadow focus:outline-none focus:ring w-full ease-linear transition-all duration-150"
                                        placeholder="example@example.com" required
                                        pattern="/^[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,}+$/i">
                                </div>
                            </div>
                            <div class="w-full lg:w-6/12 px-4">
                                <div class="relative w-full mb-3">
                                    <label class="block uppercase text-blueGray-600 text-xs font-bold mb-2"
                                        htmlfor="grid-password">
                                        Organization</a>
                                    </label>
                                    <input type="text" name="organization"
                                        class="border-0 px-3 py-3 placeholder-blueGray-300 text-blueGray-600 bg-white rounded text-sm shadow focus:outline-none focus:ring w-full ease-linear transition-all duration-150"
                                        placeholder="Example Ltd." required
                                        pattern="/^[a-zA-Z][a-zA-Z0-9_-.]{1,20}+$/i">
                                </div>
                            </div>
                            <div class="w-full lg:w-6/12 px-4">
                                <div class="relative w-full mb-3">
                                    <label class="block uppercase text-blueGray-600 text-xs font-bold mb-2"
                                        htmlfor="grid-password">
                                        Designation</label>
                                    <input type="text" name="designation"
                                        class="border-0 px-3 py-3 placeholder-blueGray-300 text-blueGray-600 bg-white rounded text-sm shadow focus:outline-none focus:ring w-full ease-linear transition-all duration-150"
                                        placeholder="Current Position" required
                                        pattern="/^[a-zA-Z][a-zA-Z0-9_-.]{1,20}+$/i">
                                </div>
                            </div>
                        </div>

                        <hr class="mt-6 border-b-1 border-blueGray-300">

                        <h6 class="text-blueGray-400 text-sm mt-3 mb-6 font-bold uppercase text-center underline">
                            Contact Information
                        </h6>
                        <div class="flex flex-wrap">
                            <div class="w-full lg:w-12/12 px-4">
                                <div class="relative w-full mb-3">
                                    <label class="block uppercase text-blueGray-600 text-xs font-bold mb-2"
                                        htmlfor="grid-password">
                                        Address
                                    </label>
                                    <input type="text" name="address"
                                        class="border-0 px-3 py-3 placeholder-blueGray-300 text-blueGray-600 bg-white rounded text-sm shadow focus:outline-none focus:ring w-full ease-linear transition-all duration-150"
                                        placeholder="Office Address" required
                                        pattern="/^[a-zA-Z][a-zA-Z0-9_-.]{1,255}+$/i">
                                </div>
                            </div>
                            <div class="w-full lg:w-6/12 px-4">
                                <div class="relative w-full mb-3">
                                    <label class="block uppercase text-blueGray-600 text-xs font-bold mb-2"
                                        htmlfor="grid-password">
                                        Postal Code
                                    </label>
                                    <input type="number" name="postal"
                                        class="border-0 px-3 py-3 placeholder-blueGray-300 text-blueGray-600 bg-white rounded text-sm shadow focus:outline-none focus:ring w-full ease-linear transition-all duration-150"
                                        placeholder="1221" required>
                                </div>
                            </div>
                            <div class="w-full lg:w-6/12 px-4">
                                <div class="relative w-full mb-3">
                                    <label class="block uppercase text-blueGray-600 text-xs font-bold mb-2"
                                        htmlfor="grid-password">
                                        City
                                    </label>
                                    <input type="text" name="city"
                                        class="border-0 px-3 py-3 placeholder-blueGray-300 text-blueGray-600 bg-white rounded text-sm shadow focus:outline-none focus:ring w-full ease-linear transition-all duration-150"
                                        placeholder="Dhaka" required pattern="/^[a-zA-Z][a-zA-Z0-9_-.]{1,20}+$/i">
                                </div>
                            </div>
                            <div class="w-full lg:w-6/12 px-4">
                                <div class="relative w-full mb-3">
                                    <label class="block uppercase text-blueGray-600 text-xs font-bold mb-2"
                                        htmlfor="grid-password">
                                        Contact Number</label>
                                    </label>
                                    <input type="text" name="contact"
                                        class="border-0 px-3 py-3 placeholder-blueGray-300 text-blueGray-600 bg-white rounded text-sm shadow focus:outline-none focus:ring w-full ease-linear transition-all duration-150"
                                        placeholder="Phone Number" required pattern="[0]{1}[1]{1}[3-9]{1}[0-9]{8}">
                                </div>
                            </div>
                            <div class="w-full lg:w-6/12 px-4">
                                <div class="relative w-full mb-3">
                                    <label class="block uppercase text-blueGray-600 text-xs font-bold mb-2"
                                        htmlfor="grid-password">
                                        Date of Payment</label>
                                    </label>
                                    <input type="date" name="date"
                                        class="border-0 px-3 py-3 placeholder-blueGray-300 text-blueGray-600 bg-white rounded text-sm shadow focus:outline-none focus:ring w-full ease-linear transition-all duration-150"
                                        placeholder="" min="2021-01-01" required>
                                </div>
                            </div>
                            <div class="w-full lg:w-12/12 px-4">
                                <div class="relative w-full mb-3">
                                    <label class="block uppercase text-blueGray-600 text-xs font-bold mb-2"
                                        htmlfor="grid-password">
                                        bKash Payment Transaction ID</label>
                                    </label>
                                    <input type="text" name="trxid"
                                        class="border-0 px-3 py-3 placeholder-blueGray-300 text-blueGray-600 bg-white rounded text-sm shadow focus:outline-none focus:ring w-full ease-linear transition-all duration-150"
                                        placeholder="TrxID XXXXXXXXXX">
                                </div>
                            </div>

                            <div class="flex flex-wrap mb-4">
                                <div class="w-full lg:w-6/12 px-4">
                                    <div class="relative w-full mb-3">
                                        <label class="block uppercase text-blueGray-600 text-sm font-bold mb-2"
                                            htmlfor="grid-password">
                                            Upload Payment Photo *
                                        </label>
                                        <input type="file" id="bankphoto" name="photo">
                                    </div>
                                </div>
                                <div class="w-full lg:w-6/12 px-4">
                                    <p>or send the Bank Receipt Photo to : <span
                                            class="font-bold">info@valorofbangladesh.com</span></p>
                                </div>
                            </div>
                            <div class="file-msg">
                                <p style="color:red">
                                    <?php
                                        if($msg2 != "")
                                            echo $msg2;
                                    ?> 
                                </p>
                            </div>
                        </div>

                        <hr class="mt-6 border-b-1 border-blueGray-300">

                        <div class="grid grid-cols-3 gap-2 place-content-center">
                            <div></div>
                            <button type="submit" name="submit"
                                class="transition transform hover:-translate-y-1 hover:scale-110 duration-500 ease-in-out nav-txt hover:text-white px-2 py-1 rounded mt-8 mr-4 text-white lg:text-3xl md:text-xl sm:text-sm font-bold rounded-lg ring-4 ring-emerald-600">
                                SUBMIT
                            </button>
                            <div></div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>
</main>