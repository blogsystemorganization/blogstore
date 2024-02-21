

@extends('userlayouts/userindex')

    {{-- start profile  --}}
   

      @section('usercontent')

        <section class="container mx-auto px-32">
            <div class="w-full">
                <!--Cover-->
               <div class="w-full h-96 rounded-b-lg bg-gray-300 ">
                    <form action="" method="" class="w-full h-full flex justify-center items-center">
                        <label for="cover" class=" text-lg">Upload cover</label>
                        <input type="file" id="cover" name="cover" hidden>
                    </form>
               </div>
            </div>

            <!--Profile-->
            <div class="flex justify-between items-center -mt-10">
              <div>
                <form action="" method="" class="w-full h-full flex justify-start items-center ml-20 space-x-3">
                  <div>
                    <label for="cover" class="text-lg"><div class="w-32 h-32 bg-gray-200 rounded-full"></div></label>
                    <input type="file" id="cover" name="cover" hidden>
                  </div>

                    <div class="mt-5">
                        <h4 class="text-lg font-medium">Hsu Myat Moe</h4>
                        <div>
                            <span class="text-sm text-gray-500">Followers.1000</span>
                        </div>
                    </div>
    
                </form>
              </div>

                <div class="mt-2">
                     <div class="flex justify-center items-center space-x-3 ">
                       <a href="">
                            <button class="bg-indigo-500 text-gray-200 flex justify-end items-center rounded-md px-5 py-2 space-x-2">
                                <i class="fas fa-plus"></i>
                            <span>Create post</span>
                        </button>
                       </a>

                        <a href="{{route('profile.edit',Auth::user()->id)}}">
                            <button class="bg-gray-400 text-gray-200 flex justify-end items-center rounded-md px-5 py-2 space-x-2">
                                <i class="fas fa-edit"></i>
                               <span>Edit profile</span>
                           </button>
                        </a>
                     </div>
                </div>
            
            
            </div>
            <hr class="mt-10">
        </section>




        {{-- start post list  --}}
        <section class="container mx-auto px-32">
            <div class="mb-10">
                <div class="flex justify-start items-center ml-20 mt-3 space-x-3">
                    <div class="border-b-2 border-b-indigo-500 text-indigo-700 pb-3"><a href="">Posts</a></div>
                    <div class=" pb-3"><a href="">Favourite</a></div>
                    <div class=" pb-3"><a href="">Save</a></div>
                    <div class=" pb-3"><a href="">Following</a></div>
                    <div class=" pb-3"><a href="">Follower</a></div>
                </div>
            </div>


            {{-- post --}}

            @yield('posts')
       



        </section>
        {{-- end post list  --}}


       @endsection

        {{-- end profile  --}}

     


        



    

    
    </body>
</html>