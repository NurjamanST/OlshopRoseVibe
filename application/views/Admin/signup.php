<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SignUp</title>
    <script src="https://cdn.jsdelivr.net/npm/@tailwindcss/browser@4"></script>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Jolly+Lodger&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Aladin&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Alike&display=swap" rel="stylesheet">
    <style>
        .aladin-regular {
            font-family: "Aladin", system-ui;
            font-weight: 400;
            font-style: normal;
        }

        .alike-regular {
            font-family: "Alike", serif;
            font-weight: 400;
            font-style: normal;
        }
    </style>
</head>

<body class="h-14 bg-linear-to-r from-[#E7A2B8] to-[#FF77A2]">
    <div>
        <!-- SIGNUP -->
        <div class="px-[5%] py-[3%] bg-[#FBF6F6] mx-[5%] my-[5%]">
            <div class="text-3xl text-[#B66878] aladin-regular w-[100%] mb-8 text-center">CreateAccount</div>
            <div class="mx-[10%]">
                <form action="" method="post" class="alike-regular">
                    <div class="grid gap-1 mb-6">
                        <div class="mb-1 relative">
                            <div class="absolute inset-y-0 start-0 flex items-center ps-3.5 pointer-events-none">
                                <svg class="w-[26px] h-[26px] text-gray-800 dark:text-white" aria-hidden="true"
                                    xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none"
                                    viewBox="0 0 24 24">
                                    <path stroke="currentColor" stroke-width="1"
                                        d="M7 17v1a1 1 0 0 0 1 1h8a1 1 0 0 0 1-1v-1a3 3 0 0 0-3-3h-4a3 3 0 0 0-3 3Zm8-9a3 3 0 1 1-6 0 3 3 0 0 1 6 0Z" />
                                </svg>
                            </div>
                            <input type="text" id="nama"
                                class="bg-[#FBF6F6] border border-[#FF77A2] text-gray-900 text-xl focus:ring-blue-500 focus:border-blue-500 block w-full ps-10 p-2.5"
                                placeholder="Nama">
                        </div>
                        <div class="mb-1 relative">
                            <div class="absolute inset-y-0 start-0 flex items-center ps-3.5 pointer-events-none">
                                <svg class="w-[21px] h-[21px] text-gray-800 dark:text-white" aria-hidden="true"
                                    xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none"
                                    viewBox="0 0 24 24">
                                    <path stroke="currentColor" stroke-linecap="round" stroke-width="1"
                                        d="m3.5 5.5 7.893 6.036a1 1 0 0 0 1.214 0L20.5 5.5M4 19h16a1 1 0 0 0 1-1V6a1 1 0 0 0-1-1H4a1 1 0 0 0-1 1v12a1 1 0 0 0 1 1Z" />
                                </svg>
                            </div>
                            <input type="email" id="email"
                                class="bg-[#FBF6F6] border border-[#FF77A2] text-gray-900 text-xl focus:ring-blue-500 focus:border-blue-500 block w-full ps-10 p-2.5"
                                placeholder="Email">
                        </div>
                        <div class="mb-9 relative">
                            <div class="absolute inset-y-0 start-0 flex items-center ps-3.5 pointer-events-none">
                                <svg class="w-6 h-6 text-gray-800 dark:text-white" aria-hidden="true"
                                    xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none"
                                    viewBox="0 0 24 24">
                                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                        stroke-width="1"
                                        d="M12 14v3m-3-6V7a3 3 0 1 1 6 0v4m-8 0h10a1 1 0 0 1 1 1v7a1 1 0 0 1-1 1H7a1 1 0 0 1-1-1v-7a1 1 0 0 1 1-1Z" />
                                </svg>
                            </div>
                            <input type="password" id="password"
                                class="bg-[#FBF6F6] border border-[#FF77A2] text-gray-900 text-xl focus:ring-blue-500 focus:border-blue-500 block w-full ps-10 p-2.5"
                                placeholder="Password">
                        </div>
                        <div class="text-center mb-3">
                            <button type="submit"
                                class="text-white bg-[#FF77A2] hover:bg-[#B66878] font-medium rounded-3xl text-2xl aladin-regular w-full sm:w-[20%] px-5 py-2.5">SignUp</button>
                        </div>
                        <div class="text-center">
                            <label for="remember" class="ms-2 text-base font-medium alike-regular text-[#FF77A2]">Already
                                a member?
                                <a href="<?php echo base_url('signin');?>"
                                    class="text-xl text-[#FF77A2] hover:underline aladin-regular">SignIn</a></label>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</body>

</html>