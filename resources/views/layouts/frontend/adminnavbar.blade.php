<section class="sticky top-0 z-10">
    <!-- start nav  -->
    <nav class="container h-16 bg-[#f4f4f4] mx-auto lg:px-10 md:px-6  md:border-b-none shadow-lg border-b-2 border-gray-300 shadow-gray-300 ">
        <div class="h-full flex justify-between items-center">
            <div class="flex items-center space-x-10">

                <div class="flex justify-center items-center space-x-2">
                 <a href="{{route('homepages.index')}}" class="flex justify-center items-center cursor-pointer">
                    <img src="https://www.freeiconspng.com/thumbs/blogger-logo-icon-png/black-square-blogger-logo-icon-png-8.png" class="w-16" alt="" />
                    <h1 class="lg:text-xl md:text-md">Blog System</h1>
                 </a>
                </div>
         
          
            </div>

            <div class="flex justify-center items-center space-x-10">

                <ul class="flex justify-center items-center text-sm uppercase space-x-4">

                    <li><a href="#" class="font-bold hover:text-red-600 transition-color duration-300">Blog</a></li>
                    <li><a href="#" class="font-bold hover:text-red-600 transition-color duration-300">About</a></li>

                    <li class="w-10 h-10 bg-gray-200 rounded-full flex justify-center items-center relative p-3"  onclick="document.getElementById('dropdown-noti').classList.toggle('hidden')">
                   
                        <i class="fas fa-bell"></i> 
                        <span class="w-5 h-5 bg-red-800 text-gray-200 flex justify-center items-center  rounded-full absolute -top-2 right-0">
                            <span>5</span>    
                        </span> 

                    </li>
                
                    <li class="relative cursor-pointer" onclick="document.getElementById('dropdown').classList.toggle('hidden')">
                        <div class="flex justify-between items-center">
                            <div class="w-[35px] h-[35px] rounded-full">
                                <img src="{{asset('assets/img/profile.avif')}}" class="w-full h-full object-cover rounded-full" alt="profile" />
                            </div>
                            <i class="fas fa-user text-lg text-slate-800 mx-2 hover:text-red-700 transition-color duration-300"></i>
                        </div> 
                        
                           {{-- userprofile model   --}}
                        <div id="dropdown" class="capitalize mt-4 absolute right-0 hidden">
                            <ul class="min-w-36 bg-gray-200">

                                <li><a href="{{route('profile.index')}}" class="w-full text-[16px] inline-block hover:bg-gray-300 p-4 me-1"><i class="fas fa-user"></i> Profile</a></li>

                                <li><a href="" class="w-full text-[16px] inline-block hover:bg-gray-300 p-4"><i class="fas fa-cog me-1"></i>Setting</a></li>

                                @if( Auth::user()->id === 1 )
                                <li><a href="{{route('dashboards.index')}}" class="w-full text-[16px] text-nowrap inline-block hover:bg-gray-300 p-4"><i class="fas fa-sync-alt me-1"></i> Switch to dashboard</a></li>
                                @endif

                                <li><a href="javascript:void(0);" class="w-full text-[18px] text-red-600 font-bold border-t-2 inline-block bg-gray-300 p-4 dropdown-item"   onclick="event.preventDefault(); document.getElementById('logoutform').submit()"><i class="fas fa-power-off me-1"></i> Logout</a>
                                    <form id="logoutform" action="{{route('logout')}}" method="POST">@csrf</form></li>
                               
                            </ul>    
                        </div>
                
                    </li>                   
                </ul>
            </div>
        </div>
    </nav>
    <!-- end nav -->

</section>

