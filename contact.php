<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/flowbite/2.2.0/flowbite.min.css" rel="stylesheet" />
    <link rel="stylesheet" href="./css/style.css">
    <link rel="shortcut icon" href="./images/favicon.png" type="image/x-icon">
</head>

<body>
    <?php include './components/Navbar.php' ?>'


    <div class="container flex items-center justify-center h-screen">
        <div class=" hidden md:block left w-1/2 h-full">
            <img src="./images/7.jpg" class="object-cover h-full rounded-r-lg">
        </div>
        <div class=" w-full right md:w-1/2 flex items-center justify-center flex-col">
        <div class="mt-2 py-4">
        <h1 class="font-style text-3xl text-center mb-4 font-bold leading-none tracking-tight text-gray-900 md:text-5xl lg:text-5xl ">Get in<span class="text-[#75492b]"> Touch</span></h1>
    </div>
            <div class="w-full md:max-w-lg">
                <form class="bg-white shadow-md rounded px-8 pt-6 pb-8 mb-4">
                    <div class="mb-4">
                        <label class="block text-gray-700 text-sm font-bold mb-2" for="username">
                            Name
                        </label>
                        <input class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" id="username" type="text" placeholder="Username" required>
                    </div>
                  
                    <div class="mb-4">
                        <label class="block text-gray-700 text-sm font-bold mb-2" for="contact">
                            Phone No.
                        </label>
                        <input class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" id="contact" type="text" placeholder="contact" required>
                    </div>
                   
                    <div class="mb-4">
                    <label class="block text-gray-700 text-sm font-bold mb-2" for="email">
                            Email
                        </label>
                        <input class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" id="email" type="text" placeholder="email" required>
                    </div>
                    <div class="mb-6">
                        <label class="block text-gray-700 text-sm font-bold mb-2" for="password">
                            Message
                        </label>
                        <textarea id="message" rows="4" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline " placeholder="Leave a comment..." required></textarea>
                    </div>


                    <div class="flex items-center justify-between">
                        <button class="hidden md:block text-white bg-[#75492b] hover:bg-[#75492b] focus:ring-4 focus:outline-none font-medium rounded-lg text-sm px-4 py-2 text-center" type="submit">
                            Submit
                        </button>

                    </div>
                </form>
                <p class="text-center text-gray-500 text-xs">
                    &copy;2023 Priya Tyagi. All rights reserved.
                </p>
            </div>

        </div>
    </div>





    <?php include './components/Footer.php' ?>'


    <script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/2.2.0/flowbite.min.js"></script>

</body>

</html>