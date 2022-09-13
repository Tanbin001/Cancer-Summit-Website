<main>
    <!-- registration section -->
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
        <div class="w-full lg:w-8/12 px-4 mx-auto mt-6">
            <div
                class="relative flex flex-col min-w-0 break-words w-full mb-6 shadow-lg rounded-lg bg-blueGray-100 border-0">
                <div class="rounded-t bg-white mb-0 px-6 py-6">
                    <div class="text-center flex justify-between">
                        <h6 class="text-blueGray-700 text-xl font-bold">
                            Register as an Organization
                        </h6>
                        <button
                            class="bg-pink-500 text-white active:bg-pink-600 font-bold uppercase text-xs px-4 py-2 rounded shadow hover:shadow-md outline-none focus:outline-none mr-1 transition transform hover:-translate-y-1 hover:scale-110 duration-500 ease-in-out"
                            type="button">
                            <a href="/">Back to SS22</a>
                        </button>
                    </div>
                </div>
                <div class="flex-auto px-4 lg:px-10 py-10 pt-0">
                    <div>
                        <p class="text-center pb-8">
                            "Register as an organization to represent your company and listen in on talks with some of
                            the country's top people. A prestigious group of experts will participate in eight panel
                            discussions. Join us today to gain vital market insights and advice from some of the
                            country's best business minds. You can come as a group of eight people and reserve your own
                            table."
                        </p>
                    </div>
                    <div class="border-b-4 border-green-400">
                        <p>
                        <ol class="list-decimal mb-10">
                            <li> Registration Fee for Single Participants is <span class="font-bold">BDT
                                    70,000/-</span></li>
                            <li> <span class="font-bold"> bKash </span> number is <span
                                    class="font-bold">0171-3004060</span>
                            </li>
                            <li>
                                Bank Transfer Information:
                                <br> <em> Bank Name: </em><span class="font-bold">&nbsp;Mutual Trust Bank Ltd.</span>
                                <br> <em> A/C Name: </em><span class="font-bold">&nbsp;Valor of Bangladesh </span>
                                <br> <em> Account#: </em><span class="font-bold">&nbsp;1301000030711 </span>
                                <br> <em> Branch: </em><span class="font-bold">&nbsp;Corporate Branch, Dhaka </span>
                                <br> <em> Routing Number: </em><span class="font-bold">&nbsp;145264851 </span>
                            </li> <br>
                            <li> For Any Query,<span class="font-bold"> corporate@valorofbangladesh.com</span> or <span
                                    class="font-bold">amirul.tanzim@gmail.com</span></li>
                            <li>Emergency Contact number
                                <span class="font-bold">
                                    0140-4016999
                                </span>
                            </li>
                        </ol>
                        </p>
                    </div>
                    <form method="post" enctype="multipart/form-data">
                        <h6 class="text-blueGray-400 text-sm mt-8 mb-6 font-bold uppercase text-center underline">
                            Organization Information
                        </h6>
                        <div class="flex flex-wrap">
                            <div class="w-full lg:w-6/12 px-4">
                                <div class="relative w-full mb-3">
                                    <label class="block uppercase text-blueGray-600 text-xs font-bold mb-2"
                                        htmlfor="grid-password">
                                        Name of Organization
                                    </label>
                                    <input type="text" name="oname"
                                        class="border-0 px-3 py-3 placeholder-blueGray-300 text-blueGray-600 bg-white rounded text-sm shadow focus:outline-none focus:ring w-full ease-linear transition-all duration-150"
                                        placeholder="Full Name" required pattern="/^[a-zA-Z][a-zA-Z0-9_-.]{1,20}+$/i">
                                </div>
                            </div>
                            <div class="w-full lg:w-6/12 px-4">
                                <div class="relative w-full mb-3">
                                    <label class="block uppercase text-blueGray-600 text-xs font-bold mb-2"
                                        htmlfor="grid-password">
                                        Organization Email address
                                    </label>
                                    <input type="email" name="email"
                                        class="border-0 px-3 py-3 placeholder-blueGray-300 text-blueGray-600 bg-white rounded text-sm shadow focus:outline-none focus:ring w-full ease-linear transition-all duration-150"
                                        placeholder="example@example.com" required
                                        pattern="/^[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,}+$/i">
                                </div>
                            </div>
                            <div class="w-full lg:w-12/12 px-4">
                                <div class="relative w-full mb-3">
                                    <label class="block uppercase text-blueGray-600 text-xs font-bold mb-2"
                                        htmlfor="grid-password">
                                        Sector</a>
                                    </label>
                                    <div class="block">
                                        <div
                                            class="mt-2 grid gap-y-1 gap-x-1 lg:grid-cols-3 md:grid-cols-2 sm:grid-cols-1 pl-13">
                                            <div>
                                                <label class="inline-flex items-center">
                                                    <input type="radio" name="sector" class="radio" name="radio"
                                                        value="1" checked>
                                                    <span class="ml-2">Fintech & MFS</span>
                                                </label>
                                            </div>
                                            <div>
                                                <label class="inline-flex items-center">
                                                    <input type="radio" name="sector" class="form-radio" name="radio"
                                                        value="2">
                                                    <span class="ml-2">Banking & Capital Market</span>
                                                </label>
                                            </div>
                                            <div>
                                                <label class="inline-flex items-center">
                                                    <input type="radio" name="sector" class="form-radio" name="radio"
                                                        value="3">
                                                    <span class="ml-2">Agriculture</span>
                                                </label>
                                            </div>
                                            <div>
                                                <label class="inline-flex items-center">
                                                    <input type="radio" name="sector" class="form-radio" name="radio"
                                                        value="3">
                                                    <span class="ml-2">Digital Commerce</span>
                                                </label>
                                            </div>
                                            <div>
                                                <label class="inline-flex items-center">
                                                    <input type="radio" name="sector" class="form-radio" name="radio"
                                                        value="3">
                                                    <span class="ml-2">Healthcare</span>
                                                </label>
                                            </div>
                                            <div>
                                                <label class="inline-flex items-center">
                                                    <input type="radio" name="sector" class="form-radio" name="radio"
                                                        value="3">
                                                    <span class="ml-2">Economy</span>
                                                </label>
                                            </div>
                                            <div>
                                                <label class="inline-flex items-center">
                                                    <input type="radio" name="sector" class="form-radio" name="radio"
                                                        value="3">
                                                    <span class="ml-2">Manufacturing & Retail</span>
                                                </label>
                                            </div>
                                            <div>
                                                <label class="inline-flex items-center">
                                                    <input type="radio" name="sector" class="form-radio" name="radio"
                                                        value="3">
                                                    <span class="ml-2">RMG</span>
                                                </label>
                                            </div>
                                            <div>
                                                <label class="inline-flex items-center">
                                                    <input type="radio" name="sector" class="form-radio" name="radio"
                                                        value="3">
                                                    <span class="ml-2">Women in Leadership</span>
                                                </label>
                                            </div>
                                            <div>
                                                <label class="inline-flex items-center">
                                                    <input type="radio" name="sector" class="form-radio" name="radio"
                                                        value="3">
                                                    <span class="ml-2">Women in Leadership</span>
                                                </label>
                                            </div>
                                            <div>
                                                <label class="inline-flex items-center">
                                                    <input type="radio" name="sector" class="form-radio" name="radio"
                                                        value="3">
                                                    <span class="ml-2">Education</span>
                                                </label>
                                            </div>
                                            <div>
                                                <label class="inline-flex items-center">
                                                    <input type="radio" name="sector" class="form-radio" name="radio"
                                                        value="3">
                                                    <span class="ml-2">SDGs</span>
                                                </label>
                                            </div>
                                        </div>
                                    </div>
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
                                        Organization Address
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
                                        placeholder="Ex: 1221" required>
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
                                        placeholder="Ex: Dhaka" required pattern="/^[a-zA-Z][a-zA-Z0-9_-.]{1,20}+$/i">
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
                                        placeholder="Ex: +880 1XXXXXXXXX" required
                                        pattern="[0]{1}[1]{1}[3-9]{1}[0-9]{8}">
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
                                        Bkash Payment Transaction ID</label>
                                    </label>
                                    <input type="text" name="trxid"
                                        class="border-0 px-3 py-3 placeholder-blueGray-300 text-blueGray-600 bg-white rounded text-sm shadow focus:outline-none focus:ring w-full ease-linear transition-all duration-150"
                                        placeholder="Ex: TrxID XXXXXXXXXX" required>
                                </div>
                            </div>

                        </div>

                        <hr class="mt-6 border-b-1 border-blueGray-300">

                        <h6 class="text-blueGray-400 text-sm mt-3 mb-6 font-bold uppercase">
                            QnA
                        </h6>
                        <div class="flex flex-wrap">
                            <div class="w-full lg:w-12/12 px-4">
                                <div class="relative w-full mb-3">
                                    <label class="block uppercase text-blueGray-600 text-xs font-bold mb-2 underline"
                                        htmlfor="grid-password">
                                        Describe Your Organization's Best Industry Practices in Brief:
                                    </label>
                                    <textarea type="text" name="practices"
                                        class="border-0 px-3 py-3 placeholder-blueGray-300 text-blueGray-600 bg-white rounded text-sm shadow focus:outline-none focus:ring w-full ease-linear transition-all duration-150"
                                        rows="4" placeholder="Text Goes Here..."></textarea>
                                </div>
                                <div class="relative w-full mb-3">
                                    <label class="block uppercase text-blueGray-600 text-xs font-bold mb-2 underline"
                                        htmlfor="grid-password">
                                        State Your Organization's Best Achievements in Brief: </label>
                                    <textarea type="text" name="achievements"
                                        class="border-0 px-3 py-3 placeholder-blueGray-300 text-blueGray-600 bg-white rounded text-sm shadow focus:outline-none focus:ring w-full ease-linear transition-all duration-150"
                                        rows="4" placeholder="Text Goes Here..."></textarea>
                                </div>
                                <div class="relative w-full mb-3">
                                    <label class="block uppercase text-blueGray-600 text-xs font-bold mb-2 underline"
                                        htmlfor="grid-password">
                                        Describe Your Organization's Current Trajectory:
                                        <textarea type="text" name="trajectory"
                                            class="border-0 px-3 py-3 placeholder-blueGray-300 text-blueGray-600 bg-white rounded text-sm shadow focus:outline-none focus:ring w-full ease-linear transition-all duration-150"
                                            placeholder="Text Goes Here..." rows="4"></textarea>
                                </div>
                            </div>
                            <div class="flex flex-wrap mb-4">
                                <div class="w-full lg:w-6/12 px-4">
                                    <div class="relative w-full mb-3">
                                        <label class="block uppercase text-blueGray-600 text-sm font-bold mb-2"
                                            htmlfor="grid-password">
                                            Upload Photo *
                                        </label>
                                        <input type="file" id="bankphoto" name="photo">
                                    </div>
                                </div>
                                <div class="w-full lg:w-6/12 px-4">
                                    <p>or send the Bank Recipt Photo to : <span
                                            class="font-bold">info@valorofbangladesh.com</span></p>
                                </div>
                            </div>
                        </div>
                        <hr class="mt-6 border-b-1 border-blueGray-300">

                        <div class="grid grid-cols-3 gap-2 place-content-center">
                            <div></div>
                            <button type="submit" name="submit"
                                class="transition transform hover:-translate-y-1 hover:scale-110 duration-500 ease-in-out bg-green-500 hover:bg-green-600 hover:text-white px-4 py-2 mt-8 rounded mt-8 mr-4 text-white lg:text-3xl md:text-xl sm:text-sm font-bold rounded-lg ring-4 ring-green-600">
                                SUBMIT
                            </button>
                            <div></div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>
    <!-- registration section -->
</main>