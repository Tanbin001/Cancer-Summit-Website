<main>
    <section class=" py-1 bg-blueGray-50">
        <?php include(ROOT.'/chunks/alert.php'); ?>
        <div class="w-full lg:w-8/12 px-4 mx-auto mt-6">
            <div
                class="relative flex flex-col min-w-0 break-words w-full mb-6 shadow-lg rounded-lg bg-blueGray-100 border-0">
                <div class="rounded-t bg-white mb-0 px-6 py-6">
                    <div class="text-center flex justify-between">
                        <h6 class="text-blueGray-700 text-xl font-bold">
                            Registration As CXO
                        </h6>
                        <button
                            class="bg-pink-500 text-white active:bg-pink-600 font-bold uppercase text-xs px-4 py-2 rounded shadow hover:shadow-md outline-none focus:outline-none mr-1 transition transform hover:-translate-y-1 hover:scale-110 duration-500 ease-in-out"
                            type="button">
                            <a href="/">Back to CXO</a>
                        </button>
                    </div>
                </div>
                <div class="flex-auto px-4 lg:px-10 py-10 pt-0">
                    <form method="post" enctype="multipart/form-data">
                        <h6 class="text-blueGray-400 text-sm mt-3 mb-6 font-bold uppercase text-center underline">
                            Personal Information
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
                                        placeholder="example@example.com" required  pattern="/^[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,}+$/i">
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
                                        placeholder="Example Ltd." required pattern="/^[a-zA-Z][a-zA-Z0-9_-.]{1,20}+$/i">
                                </div>
                            </div>
                            <div class="w-full lg:w-6/12 px-4">
                                <div class="relative w-full mb-3">
                                    <label class="block uppercase text-blueGray-600 text-xs font-bold mb-2"
                                        htmlfor="grid-password">
                                        Designation</label>
                                    <input type="text" name="designation"
                                        class="border-0 px-3 py-3 placeholder-blueGray-300 text-blueGray-600 bg-white rounded text-sm shadow focus:outline-none focus:ring w-full ease-linear transition-all duration-150"
                                        placeholder="Current Position" required pattern="/^[a-zA-Z][a-zA-Z0-9_-.]{1,20}+$/i">
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
                                        placeholder="Office Address" required pattern="/^[a-zA-Z][a-zA-Z0-9_-.]{1,255}+$/i">
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
                            <!-- <div class="w-full lg:w-12/12 px-4">
                                <div class="relative w-full mb-3">
                                    <label class="block uppercase text-blueGray-600 text-xs font-bold mb-2"
                                        htmlfor="grid-password">
                                        Bkash Payment Transection ID</label>
                                    </label>
                                    <input type="text"
                                        class="border-0 px-3 py-3 placeholder-blueGray-300 text-blueGray-600 bg-white rounded text-sm shadow focus:outline-none focus:ring w-full ease-linear transition-all duration-150"
                                        placeholder="TrxID XXXXXXXXXX">
                                </div>
                            </div> -->
                            
                        </div>

                        <hr class="mt-6 border-b-1 border-blueGray-300">

                        <h6 class="text-blueGray-400 text-sm mt-3 mb-6 font-bold uppercase">
                            Your recent Awards or Achievements (if any)
                        </h6>
                        <div class="flex flex-wrap">
                            <div class="w-full lg:w-12/12 px-4">
                                <div class="relative w-full mb-3">
                                    <textarea type="text" name="about"
                                        class="border-0 px-3 py-3 placeholder-blueGray-300 text-blueGray-600 bg-white rounded text-sm shadow focus:outline-none focus:ring w-full ease-linear transition-all duration-150"
                                        rows="4" placeholder="Text Goes Here...">
                                    </textarea>
                                </div>
                            </div>
                        </div>
                        <div class="flex flex-wrap mb-12">
                            <div class="w-full lg:w-6/12 px-4">
                                <div class="relative w-full mb-3">
                                    <label class="block uppercase text-blueGray-600 text-sm font-bold mb-2"
                                        htmlfor="grid-password">
                                        Upload your Photo *
                                    </label>
                                    <input type="file" id="myPhoto" name="photo" required>
                                </div>
                            </div>
                            <div class="w-full lg:w-6/12 px-4">
                                <div class="relative w-full mb-3">
                                    <label class="block uppercase text-blueGray-600 text-sm font-bold mb-2"
                                        htmlfor="grid-password">
                                        Upload your CV *
                                    </label>
                                    <input type="file" id="myCV" name="cv" required>
                                </div>
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
                        <hr class="mt-6 border-b-1 border-blueGray-300">

                        <div class="grid grid-cols-3 gap-2 place-content-center">
                            <div></div>
                        <button type="submit" name="submit"
                            class="transition transform hover:-translate-y-1 hover:scale-110 duration-500 ease-in-out bg-green-500 hover:bg-green-600 hover:text-white px-4 py-2 rounded mt-8 mr-4 text-white lg:text-3xl md:text-xl sm:text-sm font-bold rounded-lg ring-4 ring-green-600">
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