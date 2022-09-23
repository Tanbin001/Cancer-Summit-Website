<?php
    include(ROOT.'/backend/contact.php');
?>
<!-- Contact and Map Section Start -->
<section id="connect-with-us" class="text-gray-600 body-font relative my-6 mx-12">
    <div class="absolute inset-0 bg-gray-300">
        <iframe width="100%" height="100%" frameborder="0" marginheight="0" marginwidth="0" title="map" scrolling="no" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3650.0749249831692!2d90.40669431427716!3d23.81593459218807!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3755c6feb6c1b7b1%3A0x76350c55ebc50c34!2sRadisson%20Blu%20Dhaka%20Water%20Garden!5e0!3m2!1sen!2sbd!4v1663179151685!5m2!1sen!2sbd"
            width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade" style="filter: grayscale(1) contrast(1.2) opacity(0.4);"></iframe>
    </div>
    <div class="container px-5 py-24 mx-auto flex">
        <form action="#connect-with-us" method="post" class="lg:w-1/3 md:w-1/2 bg-white rounded-lg p-8 flex flex-col md:ml-auto w-50% mt-10 md:mt-0 relative z-10 shadow-md">
            <?php include('alert2.php'); ?>
            <h2 class="text-gray-900 text-lg mb-1 font-medium title-font">Connect</h2>
            <p class="leading-relaxed mb-5 text-gray-600">Connect with us and know about our initiatives for cancer patients.</p>
            <div class="relative mb-4">
                <label for="name" class="leading-7 text-sm text-gray-600">Name</label>
                <input type="name" id="name" name="name" placeholder="Your Name" required 
                class="w-full bg-white rounded border border-gray-300 focus:border-indigo-500 focus:ring-2 focus:ring-indigo-200 text-base outline-none text-gray-700 py-1 px-3 leading-8 transition-colors duration-200 ease-in-out">
            </div>
            <div class="relative mb-4">
                <label for="email" class="leading-7 text-sm text-gray-600">Email</label>
                <input type="email" id="email" name="email" placeholder="example@email.com" required 
                class="w-full bg-white rounded border border-gray-300 focus:border-indigo-500 focus:ring-2 focus:ring-indigo-200 text-base outline-none text-gray-700 py-1 px-3 leading-8 transition-colors duration-200 ease-in-out">
            </div>
            <div class="relative mb-4">
                <label for="phone" class="leading-7 text-sm text-gray-600">Phone</label>
                <input type="phone" id="phone" name="phone" placeholder="01XXXXXXXXX" pattern="[0]{1}[1]{1}[3-9]{1}[0-9]{8}" required 
                class="w-full bg-white rounded border border-gray-300 focus:border-indigo-500 focus:ring-2 focus:ring-indigo-200 text-base outline-none text-gray-700 py-1 px-3 leading-8 transition-colors duration-200 ease-in-out">
            </div>
            <div class="relative mb-4">
                <label for="message" class="leading-7 text-sm text-gray-600">Message</label>
                <textarea id="message" name="message" required 
                class="w-full bg-white rounded border border-gray-300 focus:border-indigo-500 focus:ring-2 focus:ring-indigo-200 h-32 text-base outline-none text-gray-700 py-1 px-3 resize-none leading-6 transition-colors duration-200 ease-in-out"
                    spellcheck="false" data-ms-editor="true"></textarea>
            </div>
            <button name="submit" class="text-white bg-indigo-500 border-0 py-2 px-6 focus:outline-none hover:bg-indigo-600 rounded text-lg">Send</button>
            <p class="text-xs text-gray-500 mt-3">Contact with one of our Associate</p>
        </form>
    </div>
</section>
<!-- Contact and Map Section END -->