<section>
    <!-- nav  -->
    <nav class="container h-16 bg-[#f4f4f4] mx-auto px-10">
        <div class="h-full flex justify-between items-center">
            <div class="flex items-center space-x-10">

                <div class="flex justify-center items-center space-x-2">
                    <img src="https://www.freeiconspng.com/thumbs/blogger-logo-icon-png/black-square-blogger-logo-icon-png-8.png" class="w-16" alt="">
                    <h1 class=" text-xl">Blog System</h1>
                </div>


            </div>

            <div class="flex justify-center items-center space-x-10">

                <ul class="flex justify-center items-center text-sm uppercase space-x-10">
                    <li><a href="">Blog</a></li>
                    <li><a href="">About</a></li>
                    <li class="relative" onclick="document.getElementById('dropdown').classList.toggle('hidden')">
                        User Profile
                        <i class="fas fa-user ms-2"></i>


                        {{-- userprofile model   --}}
                        <div id="dropdown" class="w-32 bg-gray-200 capitalize rounded-b shadow-md mt-4 absolute right-0 hidden">
                            <ul class="space-y-2">
                                <li class="p-3 py-2 hover:bg-gray-300"><a href="{{route('profile.index')}}">Profile</a></li>
                                <li class="p-3 py-2 hover:bg-gray-300"><a href="">Setting</a></li>
                                <li class="p-3 py-2 hover:bg-gray-300"><a href="javascript:void(0);" class="dropdown-item" onclick="event.preventDefault(); document.getElementById('logoutform').submit()">Logout</a>
                                    <form id="logoutform" action="{{route('logout')}}" method="POST">@csrf</form>
                                </li>


                            </ul>
                        </div>

                    </li>


                </ul>



            </div>
        </div>



    </nav>
</section>

<div class="container mx-auto flex flex-col justify-center items-center pt-10 pb-8">
    <h1 class="text-4xl font-medium uppercase mb-3">Blogs</h1>
    <div>
        <span>Knowledge is power.</span>
    </div>
</div>


<section class="container mx-auto">
    <div class="w-full px-32 py-10">


        {{-- search  --}}
        <form action="" method="">
            <div class="w-full flex justify-center items-center relative">
                <input type="search" name="search" class="w-full bg-gray-200 rounded-l focus:outline-none focus:ring px-8 py-4" placeholder="Search...">
                <button type="submit" class="bg-gray-300 rounded-r-md py-4 px-5 absolute right-0">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                        <path stroke-linecap="round" stroke-linejoin="round" d="m21 21-5.197-5.197m0 0A7.5 7.5 0 1 0 5.196 5.196a7.5 7.5 0 0 0 10.607 10.607Z" />
                    </svg>

                </button>
            </div>
        </form>



        {{-- categories  --}}
        <div class="flex flex-wrap justify-center items-center mt-10 space-x-10 space-y-5">
            <div class="text-white bg-gray-700 rounded-lg px-5 py-2"><a href="">All</a></div>
            <div class="text-white bg-gray-700 rounded-lg px-5 py-2"><a href="">Education</a></div>
            <div class="text-white bg-gray-700 rounded-lg px-5 py-2"><a href="">Knowledge</a></div>
            <div class="text-white bg-gray-700 rounded-lg px-5 py-2"><a href="">Humanities</a></div>
        </div>


    </div>



</section>