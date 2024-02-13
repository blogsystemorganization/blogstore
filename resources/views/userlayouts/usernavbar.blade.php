<section>
    <!-- nav  -->
    <nav class="container h-16 border-b mx-auto px-10 py-10">
        <div class="h-full flex justify-between items-center">
            <div class="flex items-center space-x-10">

                <div class="flex justify-center items-center space-x-2">
                    <a href="{{route('homepages.index')}}">
                        <img src="https://www.freeiconspng.com/thumbs/blogger-logo-icon-png/black-square-blogger-logo-icon-png-8.png" class="w-16" alt="">
                        <h1 class=" text-xl"></h1>
                    </a>
                </div>


                <form action="">
                    <div class="w-full flex justify-center items-center relative">
                        <input type="search" name="search" class="w-full bg-gray-200 rounded-l focus:outline-none focus:ring px-8 py-3" placeholder="Search...">
                        <button type="submit" class="bg-gray-300 rounded-r-md py-3 px-5 absolute right-0">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                                <path stroke-linecap="round" stroke-linejoin="round" d="m21 21-5.197-5.197m0 0A7.5 7.5 0 1 0 5.196 5.196a7.5 7.5 0 0 0 10.607 10.607Z" />
                            </svg>
        
                        </button>
                    </div>
                </form>
         
          
            </div>

            <div class="flex justify-center items-center space-x-10">

                <ul class="flex justify-center items-center text-sm uppercase space-x-10">


                    <li class="w-10 h-10 bg-gray-200 rounded-full flex justify-center items-center relative p-3"  onclick="document.getElementById('dropdown-noti').classList.toggle('hidden')">
                   
                            <i class="fas fa-bell"></i> 
                            <span class="w-5 h-5 bg-red-800 text-gray-200 flex justify-center items-center  rounded-full absolute -top-2 right-0">
                                <span>5</span>    
                            </span> 

                    
                
                        {{-- notification   --}}
                        <div id="dropdown-noti" class="w-32 bg-gray-200 capitalize rounded-b shadow-md mt-4 absolute right-0 top-8 hidden">
                            <ul class="space-y-2">
                                <li class="p-3 py-2 hover:bg-gray-300"><a href="">Profile</a></li>
                                <li class="p-3 py-2 hover:bg-gray-300"><a href="">Setting</a></li>
                                <li class="p-3 py-2 hover:bg-gray-300"><a href="">Logout</a></li>
                            </ul>    
                        </div>
                
                   </li>
                    
                   
                
                    <li class="relative" onclick="document.getElementById('dropdown').classList.toggle('hidden')">
                        User Profile 
                        <i class="fas fa-user ms-2"></i>
                    
                
                           {{-- userprofile model   --}}
                        <div id="dropdown" class="w-32 bg-gray-200 capitalize rounded-b shadow-md mt-4 absolute hidden">
                            <ul class="space-y-2">
                                <li class="p-3 py-2 hover:bg-gray-300"><a href="">Profile</a></li>
                                <li class="p-3 py-2 hover:bg-gray-300"><a href="">Setting</a></li>
                                <li class="p-3 py-2 hover:bg-gray-300"><a href="">Logout</a></li>
                            </ul>    
                        </div>
                
                   </li>
                    
             
                </ul>


               
            
            </div>
        </div>



    </nav>
</section> 