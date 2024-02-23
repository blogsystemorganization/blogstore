<section>
    <!-- nav  -->
    <nav class="container h-16 bg-[#f4f4f4] mx-auto px-10">
        <div class="h-full flex justify-between items-center">
            <div class="flex items-center space-x-10">

                <div class="flex justify-center items-center space-x-2">
                 <a href="{{route('homepages.index')}}" class="flex justify-center items-center cursor-pointer">
                    <img src="https://www.freeiconspng.com/thumbs/blogger-logo-icon-png/black-square-blogger-logo-icon-png-8.png" class="w-16" alt="">
                    <h1 class=" text-xl">Blog System</h1>
                 </a>
                </div>
         
          
            </div>

            <div class="flex justify-center items-center space-x-10">

                <ul class="flex justify-center items-center text-sm uppercase space-x-10">
                    <li><a href="">Blog</a></li>
                    <li><a href="">About</a></li>

                    <li class="w-10 h-10 bg-gray-200 rounded-full flex justify-center items-center relative p-3"  onclick="document.getElementById('dropdown-noti').classList.toggle('hidden')">
                   
                        <i class="fas fa-bell"></i> 
                        <span class="w-5 h-5 bg-red-800 text-gray-200 flex justify-center items-center  rounded-full absolute -top-2 right-0">
                            <span>5</span>    
                        </span> 

            
               </li>
                
                    <li class="relative cursor-pointer" onclick="document.getElementById('dropdown').classList.toggle('hidden')">
                        User Profile 
                        <i class="fas fa-user ms-2"></i>
                    
                
                           {{-- userprofile model   --}}
                        <div id="dropdown" class="capitalize mt-4 absolute right-0  hidden">
                            <ul class="min-w-36 bg-gray-200">

                                <li><a href="{{route('profile.index')}}" class="w-full inline-block hover:bg-gray-300 p-3">Profile</a></li>
                                <li><a href="" class="w-full inline-block hover:bg-gray-300 p-3">Setting</a></li>

                                @if( Auth::user()->id === 1 )
                                <li><a href="" class="w-full text-nowrap inline-block hover:bg-gray-300 p-3">Switch to dashboard</a></li>
                                @endif

                                <li><a href="javascript:void(0);" class="w-full inline-block hover:bg-gray-300 p-3 dropdown-item"   onclick="event.preventDefault(); document.getElementById('logoutform').submit()">Logout</a>
                                    <form id="logoutform" action="{{route('logout')}}" method="POST">@csrf</form></li>
                               
                            </ul>    
                        </div>
                
                </li>
                    
             
                </ul>


               
            </div>
        </div>


        


    </nav>
</section>

