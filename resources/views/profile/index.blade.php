
@extends('layouts/frontend.adminindex')

    {{-- start profile  --}}
   

      @section('content')

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
                        <h4 class="text-lg font-medium">{{$user->name}}</h4>
                        <div>
                            <span class="text-sm text-gray-500">Followers.1000</span>
                        </div>
                    </div>
    
                </form>
              </div>

                <div class="mt-2">
                     <div class="flex justify-center items-center space-x-3 ">
                       <a href="{{route("profile.create")}}">
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
            <section class="container mx-auto mt-10">

                <div class="grid grid-cols-3 gap-10">
                    @foreach ($blogs as $blog)
                    <div class="border border-gray-100 p-4 rounded-md">
            
                        <div class="mb-5">
                            <div class="w-full flex justify-start items-center space-x-3">
                                <div class="w-10 h-10 rounded-full bg-gray-200">
                                    <img src="" alt="">
                                </div>
                                <div class="flex flex-col justify-center items-start">
                                    <span class="text-sm font-medium">{{$blog->user->name}}</span>
                                    <span class="text-xs text-gray-500">{{$blog->created_at}}</span>
            
                                </div>
            
                            </div>
                        </div>
            
            
            
                        <div class="w-full h-[300px] bg-gray-200 flex justify-center items-center">
                            <img src="https://www.shutterstock.com/image-photo/blogging-blog-word-coder-coding-260nw-520314613.jpg" class="object-cover w-full h-[300px]" alt="logo">
                        </div>
            
                        <div class="mt-3 h-[200px]">
                            <h1 class="font-bold uppercase text-lg mb-3">{{$blog->title}}</h1>
                            <p class="text-gray-500">
                                <a class="hover:opacity-90 font-bold font-medium" href="blogs/{{$blog->id}}">
                                    {{$blog->body}}
                                </a>
                            </p>
            
            
                        </div>
            
                    </div>
            
                    @endforeach
                </div>
            
            </section>
        </section>
        {{-- end post list  --}}
       @endsection
        {{-- end profile  --}}
    </body>
</html>









{{-- JV's UI Backup --}}

{{-- 
<div class="w-full">
    <div class="grid grid-cols-3 gap-10">

        <div class="border border-gray-100 p-4 rounded-md">
            {{$blogs}}

            <div class="mb-5">
                <div class="w-full flex justify-start items-center space-x-3">
                    <div class="w-10 h-10 rounded-full bg-gray-200">
                        <img src="" alt="">
                    </div>
                    <div class="flex flex-col justify-center items-start">
                        <span class="text-sm font-medium">Hsu Myat Moe</span>
                        <span class="text-xs text-gray-500">14.Feb.2024 1:44 AM</span>

                    </div>

                </div>
            </div>



            <div class="w-full h-[300px] bg-gray-200 flex justify-center items-center">
                <img src="https://www.shutterstock.com/image-photo/blogging-blog-word-coder-coding-260nw-520314613.jpg" class="object-cover w-full h-[300px]" alt="logo">
            </div>

            <div class="mt-3 h-[200px]">
                <h1 class="font-bold uppercase text-lg mb-3">This is title one</h1>
                <p class="text-gray-500">
                    <a class="hover:opacity-90 font-bold font-medium" href="">
                        Lorem, ipsum dolor sit amet consectetur adipisicing elit. Quaerat aliquid, praesentium quos quidem porro laborum consectetur inventore debitis eveniet dolore omnis cum quae corrupti pariatur! Consequatur at totam alias debitis!
                    </a>
                </p>

              
            </div>
       
        </div>
        
    </div>

</div> --}}