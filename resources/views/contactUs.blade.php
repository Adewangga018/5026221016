<!-- Nama = Arjuna Ahmad Dewangga Aljabbar -->
<!-- NRP  = 5026221016 -->
<!-- Link Source = https://help.netflix.com/en/contactus -->

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Netflix - Contact Us</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <script defer src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js"></script>
</head>
<body class="bg-black">
    <!-- Navbar -->
    <div class="container mx-auto py-6 px-4">
        <div class="flex items-center justify-between">
            <div class="flex space-x-4 items-center">
                <a href="/index">
                    <svg class="fill-[#e50914]" width="89" height="24" viewBox="0 0 111 30" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" aria-hidden="true" role="img" class="default-ltr-cache-1d568uk ev1dnif2"><g><path d="M105.06233,14.2806261 L110.999156,30 C109.249227,29.7497422 107.500234,29.4366857 105.718437,29.1554972 L102.374168,20.4686475 L98.9371075,28.4375293 C97.2499766,28.1563408 95.5928391,28.061674 93.9057081,27.8432843 L99.9372012,14.0931671 L94.4680851,-5.68434189e-14 L99.5313525,-5.68434189e-14 L102.593495,7.87421502 L105.874965,-5.68434189e-14 L110.999156,-5.68434189e-14 L105.06233,14.2806261 Z M90.4686475,-5.68434189e-14 L85.8749649,-5.68434189e-14 L85.8749649,27.2499766 C87.3746368,27.3437061 88.9371075,27.4055675 90.4686475,27.5930265 L90.4686475,-5.68434189e-14 Z M81.9055207,26.93692 C77.7186241,26.6557316 73.5307901,26.4064111 69.250164,26.3117443 L69.250164,-5.68434189e-14 L73.9366389,-5.68434189e-14 L73.9366389,21.8745899 C76.6248008,21.9373887 79.3120255,22.1557784 81.9055207,22.2804387 L81.9055207,26.93692 Z M64.2496954,10.6561065 L64.2496954,15.3435186 L57.8442216,15.3435186 L57.8442216,25.9996251 L53.2186709,25.9996251 L53.2186709,-5.68434189e-14 L66.3436123,-5.68434189e-14 L66.3436123,4.68741213 L57.8442216,4.68741213 L57.8442216,10.6561065 L64.2496954,10.6561065 Z M45.3435186,4.68741213 L45.3435186,26.2498828 C43.7810479,26.2498828 42.1876465,26.2498828 40.6561065,26.3117443 L40.6561065,4.68741213 L35.8121661,4.68741213 L35.8121661,-5.68434189e-14 L50.2183897,-5.68434189e-14 L50.2183897,4.68741213 L45.3435186,4.68741213 Z M30.749836,15.5928391 C28.687787,15.5928391 26.2498828,15.5928391 24.4999531,15.6875059 L24.4999531,22.6562939 C27.2499766,22.4678976 30,22.2495079 32.7809542,22.1557784 L32.7809542,26.6557316 L19.812541,27.6876933 L19.812541,-5.68434189e-14 L32.7809542,-5.68434189e-14 L32.7809542,4.68741213 L24.4999531,4.68741213 L24.4999531,10.9991564 C26.3126816,10.9991564 29.0936358,10.9054269 30.749836,10.9054269 L30.749836,15.5928391 Z M4.78114163,12.9684132 L4.78114163,29.3429562 C3.09401069,29.5313525 1.59340144,29.7497422 0,30 L0,-5.68434189e-14 L4.4690224,-5.68434189e-14 L10.562377,17.0315868 L10.562377,-5.68434189e-14 L15.2497891,-5.68434189e-14 L15.2497891,28.061674 C13.5935889,28.3437998 11.906458,28.4375293 10.1246602,28.6868498 L4.78114163,12.9684132 Z"></path></g></svg>
                    </a>
                <span class="text-white text-xl">Contact Us</span>
            </div>
            <div class="flex space-x-4">
                <button class="bg-transparent border py-1 px-3 rounded font-semibold text-white">Join Netflix</button>
                <button class="bg-[#e50914] py-1 px-3 rounded font-semibold text-white">Sign In</button>
            </div>
        </div>
    </div>

    <!-- Content -->
    <div class="bg-white py-12">
        <div class="flex flex-col container mx-auto p-4">
            <span class="text-3xl font-bold">Contact us</span>
            <form onsubmit="return validateForm();">
                <div class="mt-8 flex flex-col space-y-4">
                    <div>
                        <label for="name" class="block text-sm font-medium leading-6 text-gray-900">Name</label>
                        <div class="mt-2">
                            <input type="text" name="name" id="name" class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">
                        </div>
                    </div>
                    <div>
                        <label for="phone" class="block text-sm font-medium leading-6 text-gray-900">Phone Number</label>
                        <div class="mt-2">
                            <input id="phone" name="phone" type="text" class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">
                        </div>
                    </div>
                  <div>
                    <label for="message" class="block text-sm font-medium leading-6 text-gray-900">Message</label>
                    <div class="mt-2">
                      <textarea id="message" name="message" rows="3" class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6"></textarea>
                    </div>
                  </div>
                </div>
                <div class="mt-6 flex items-center justify-end gap-x-6">
                  <button type="submit" class="bg-[#e50914] py-1 px-3 rounded font-semibold text-white">Submit</button>
                </div>
            </form>
        </div>
    </div>

    <!-- Footer Links Section -->
    <div class="px-4 py-16 space-y-12 text-s grid-row bg-black text-white h-full">
        <div class="grid grid-cols-2 sm:grid-cols-4 gap-2 mb-4 text-center">
            <div>
                <a href="/index/help" class="hover:underline">Help Center</a>
            </div>
            <div>
                <a href="/index/account" class="hover:underline">Account</a>
            </div>
            <div>
                <a href="/index/contactUs" class="hover:underline">Contact Us</a>
            </div>
            <div>
                <a href="/index/legalNotices" class="hover:underline">Legal Notices</a>
            </div>
        </div>
        <div class="flex flex-col text-center">
            <span>Questions? <a href="#" class="hover:underline">Call 007-803-321-2130</a></span>
            <span>Copyright Mbawer 2024</span>
        </div>
    </div>

    <script>
        function validateForm() {
            const name = document.getElementById("name").value.trim();
            const phone = document.getElementById("phone").value.trim();
            const message = document.getElementById("message").value.trim();

            if (name === "") {
                alert("Name is required");
                return false
            }

            const phonePattern = /^[0-9]{12,15}$/;
            if (phone === "") {
                alert("Phone number is required");
                return false
            } else if (!phonePattern.test(phone)) {
                alert("Enter a valid phone number (at least 12-15 digits)");
                return false
            }

            if (message === "") {
                alert("Message is required");
                return false
            }

            return true;
        }
    </script>
</body>
</html>
