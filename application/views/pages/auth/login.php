<div class="flex justify-center items-center h-screen bg-gray-100 p-5">
    <div class="w-full md:w-3/12 bg-white p-8 shadow-sm rounded-xl">
        <form action="#" method="post">
            <div class="flex flex-col justify-items-center items-center gap-3">
                <div class="flex justify-center items-center gap-2">
                    <img src="<?= base_url()?>assets/img/logo.jpeg" alt="" class="w-14">
                    <h2 class="hidden md:inline font-bold text-teal-800">Morning Coffee</h2>
                </div>
                <hr>
                <div class="w-full space-y-3">
                    <div class="flex flex-col">
                        <label class="text-sm mb-1">Username:</label>
                        <input type="text" placeholder="Type your username"
                            class="border px-2 py-1 rounded-md text-gray-900 bg-gray-50 text-sm">
                    </div>
                    <div class="flex flex-col">
                        <label class="text-sm mb-1">Password:</label>
                        <input type="password" placeholder="Password"
                            class="border px-2 py-1 rounded-md text-gray-900 bg-gray-50 text-sm">
                    </div>
                </div>
                <div class="flex flex-col md:flex-row items-center w-full gap-2">
                    <a href="<?= base_url('dashboard')?>"
                        class="flex justify-center items-center gap-2 bg-blue-500 hover:bg-blue-600 px-4 py-1 text-white rounded-md text-sm"><i
                            class="fa-solid fa-right-to-bracket"></i> <span>Log In</span></a>
                    <a href="<?= base_url('auth/register')?>"
                        class="flex justify-center gap-2 bg-green-500 hover:bg-green-600 px-4 py-1 text-white rounded-md text-sm"><span>Sign
                            Up</span></a>
                </div>
            </div>
        </form>
    </div>
