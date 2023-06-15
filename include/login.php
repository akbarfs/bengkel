<!-- Main modal -->
<div id="loginModal" tabindex="-1" aria-hidden="true" class="hidden overflow-y-auto overflow-x-hidden fixed top-0 right-0 left-0 z-50 w-full md:inset-0 min-h-screen md:h-full">
    <div class="relative w-[80%] md:w-[738px] h-full md:h-auto">
        <!-- Modal content -->
        <div class="relative bg-white rounded-lg shadow dark:bg-gray-700 py-[56px] px-[38px] md:px-[158px]">
        <button class="absolute -top-[21px] -right-[28px] w-[56px] h-[56px] bg-[#ffe13e] rounded-[50%]" type="button" data-modal-toggle="loginModal">
            <div class="relative p-[18px] w-[56px] h-[56px]">
                <div class="bg-[#808080] w-[3.82px] h-[24.46px] rounded-[22px] rotate-45 left-1/2 -translate-x-1/2 absolute"></div>
                <div class="bg-[#808080] w-[3.82px] h-[24.46px] rounded-[22px] -rotate-45 absolute left-1/2 -translate-x-1/2"></div>
            </div>
        </button>
            <div class="">
                <h1 class="text-[28px] md:text-[24px] text-[#404040] font-semibold mb-[39px]">Sign In</h1>
                <p class="text-[14px] md:text-[12px] mb-[21px] md:mb-[30px]">Akses login hanya untuk Admin jasadesain.co.id saja.</p>
                <div class="relative mt-[25px] mb-[34px] md:my-[30px] w-full h-0 border-[0.5px] border-[#6C6E71]"></div>
                <?php if(!empty($_GET['gagal'])){?>
                      <?php if($_GET['gagal']=="userKosong"){?>
                        <span class="text-warning">Maaf Username Tidak Boleh Kosong</span>
                      <?php } else if($_GET['gagal']=="passKosong"){?>
                        <span class="text-warning">Maaf Password Tidak Boleh Kosong</span>
                      <?php } else {?>
                        <span class="text-danger">Maaf Username dan Password Anda Salah</span>
                      <?php }?>
                    <?php }?>

                <form class="form-login" action="./Auth/index.php?include=konfirmasi-login" method="POST">
                <input type="text" class="px-[22px] text-[14px] md:text-[10px] w-full border border-[#187cff] bg-white mb-[15px] rounded-[10px] h-[45px] md:h-[40px]" placeholder="Username" name="username">
                <div class="py-2" x-data="{ show: true }">
                <div class="relative">
                  <input placeholder="Password" name="password" :type="show ? 'password' : 'text'" class="block px-[22px] text-[14px] md:text-[10px] w-full border border-[#187cff] bg-white mb-[13px] rounded-[10px] h-[45px] md:h-[40px]                focus:outline-none">
                  <div class="absolute inset-y-0 right-0 pr-[23px] md:pr-[19px] flex items-center text-sm leading-5">

                    <svg class="h-[13px] text-gray-700" fill="none" @click="show = !show"
                      :class="{'block': !show, 'hidden':show }" xmlns="http://www.w3.org/2000/svg"
                      viewbox="0 0 576 512">
                      <path fill="currentColor"
                        d="M572.52 241.4C518.29 135.59 410.93 64 288 64S57.68 135.64 3.48 241.41a32.35 32.35 0 0 0 0 29.19C57.71 376.41 165.07 448 288 448s230.32-71.64 284.52-177.41a32.35 32.35 0 0 0 0-29.19zM288 400a144 144 0 1 1 144-144 143.93 143.93 0 0 1-144 144zm0-240a95.31 95.31 0 0 0-25.31 3.79 47.85 47.85 0 0 1-66.9 66.9A95.78 95.78 0 1 0 288 160z">
                      </path>
                    </svg>

                    <svg class="h-[13px] text-gray-700" fill="none" @click="show = !show"
                      :class="{'hidden': !show, 'block':show }" xmlns="http://www.w3.org/2000/svg"
                      viewbox="0 0 640 512">
                      <path fill="currentColor"
                        d="M320 400c-75.85 0-137.25-58.71-142.9-133.11L72.2 185.82c-13.79 17.3-26.48 35.59-36.72 55.59a32.35 32.35 0 0 0 0 29.19C89.71 376.41 197.07 448 320 448c26.91 0 52.87-4 77.89-10.46L346 397.39a144.13 144.13 0 0 1-26 2.61zm313.82 58.1l-110.55-85.44a331.25 331.25 0 0 0 81.25-102.07 32.35 32.35 0 0 0 0-29.19C550.29 135.59 442.93 64 320 64a308.15 308.15 0 0 0-147.32 37.7L45.46 3.37A16 16 0 0 0 23 6.18L3.37 31.45A16 16 0 0 0 6.18 53.9l588.36 454.73a16 16 0 0 0 22.46-2.81l19.64-25.27a16 16 0 0 0-2.82-22.45zm-183.72-142l-39.3-30.38A94.75 94.75 0 0 0 416 256a94.76 94.76 0 0 0-121.31-92.21A47.65 47.65 0 0 1 304 192a46.64 46.64 0 0 1-1.54 10l-73.61-56.89A142.31 142.31 0 0 1 320 112a143.92 143.92 0 0 1 144 144c0 21.63-5.29 41.79-13.9 60.11z">
                      </path>
                    </svg>

                  </div>
                </div>  
              </div>
                <button class="w-full h-[40px] bg-[#ffe13e] text-[#808080] rounded-[10px] mb-[29px] text-[16px]" href="konfirmasilogin.php" type="login" name="login">Login</button>
                <p class="text-[12px]">Bukan Admin ? <button class="text-[14px] text-[#187cff] font-semibold" type="button" data-modal-toggle="loginModal">Guest</button></p>
                </form>
            </div>
        </div>
    </div>
</div>