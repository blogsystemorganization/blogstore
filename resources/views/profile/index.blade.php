@extends('layouts/frontend.adminindex')
<x-navbar :profile="$profile ? $navprofile : null"/>
@section('content')
{{-- start profile  --}}


        <section class="container mx-auto lg:px-6 px-0">
            <div class="w-full flex justify-center">
                <!--Cover-->
               <div class="w-full h-96 rounded-b-lg lg:px-3 px-0">
                    
                    <form action="{{route('profile.store')}}" method="POST" class="w-full h-full flex justify-center items-center">
                        @csrf
                   <!--Cover-->
                    <div class="w-full h-96 rounded-b-lg lg:px-3 px-0">
                            <label for="cover" class="w-full h-full text-lg">
                                @if($cover->last())
                                    <img src="{{ Storage::url($cover->last()->image) }}" alt="Cover Image" class="w-full h-full object-cover" />
                                @else
                                    <img src="{{ asset('assets/img/ai.jpg')}}" class="w-full h-full object-cover rounded-full" alt="profile" />

                                @endif
                            </label>
                      
                        <input type="file" id="cover" name="cover" hidden>
                    </div>


                    </form>

               </div>
            </div>

                <!--Profile-->
                <div class="flex justify-between items-center lg:-mt-10 -mt-4">
                    <div>
                        <form action="" method="" class="w-full h-full flex justify-start items-center md:ml-20 ml-2 space-x-3">
                            <div>
                                <label for="profile" class="text-lg">
                                    <div class="md:w-32 md:h-32 w-16 h-16 rounded-full overflow-hidden">
                                        @if($profile->last())
                                        <img src="{{ Storage::url($profile->last()->image) }}" alt="Cover Image" class="w-full h-full object-cover" />
                                        @else
                                        <img src="{{ asset('assets/img/ai.jpg')}}" class="w-full h-full object-cover rounded-full" alt="profile" />
                                        @endif

                                    </div>
                                </label>
                                <input type="file" id="profile" name="profile" hidden>
                            </div>

                            <div class="mt-5">
                                <h4 class="md:text-lg text-md font-medium">{{$user->name}}</h4>
                                <div>
                                    <span class="text-sm text-gray-500">Followers.1000</span>
                                </div>
                            </div>

                        </form>
                    </div>

                    <div class="mt-2 me-2">
                        <div class="flex justify-center items-center space-x-3 ">
                            @if($user->id === auth()->user()->id)
                                <a href="{{route("blogs.create")}}">
                                    <button class="bg-indigo-500 text-gray-200 flex justify-end items-center rounded-md md:px-5 px-2 py-2 space-x-2">
                                        <i class="fas fa-plus"></i>
                                        <span class="text-sm md:text-lg">Create post</span>
                                    </button>
                                </a>

                                <a href="{{route('profile.edit',Auth::user()->id)}}">
                                    <button class="bg-gray-400 text-gray-200 flex justify-end items-center rounded-md md:px-5 px-2 py-2 space-x-2">
                                        <i class="fas fa-edit"></i>
                                        <span class="text-sm md:text-lg">Edit profile</span>
                                    </button>
                                </a>
                            @endif
                        </div>
                    </div>


                </div>
                <hr class="mt-10">
        </section>

            {{-- start post list  --}}
            <section class="container mx-auto px-6">
                <div class="mb-10">
                    <div class="flex justify-center items-center mt-3 space-x-3">
                        <div class="border-b-2 border-b-indigo-500 text-indigo-700 pb-3"><a href="">Posts</a></div>
                        <div class=" pb-3"><a href="">Favourite</a></div>
                        <div class=" pb-3"><a href="">Save</a></div>
                        <div class=" pb-3"><a href="">Following</a></div>
                        <div class=" pb-3"><a href="">Follower</a></div>
                    </div>
                </div>


                {{-- post --}}
                <section class="container mx-auto mt-10 md:px-0 px-4">

                    <div class="grid lg:grid-cols-3 md:grid-cols-2 sm:grid-cols-1 gap-10">
                        @foreach ($blogs as $blog)
                    
                        <div class="bg-slate-200 border border-gray-100 shadow-lg p-4 rounded-md">
                            <a href="{{ route('blogs.show',['blog'=>$blog->id]) }}">

                            <div class="mb-5">
                                <div class="w-full flex justify-start items-center space-x-3">
                                    <div class="w-10 h-10 border-2 border-red-500 rounded-full overflow-hidden bg-gray-200">
                                        @if($profile->last())
                                            <img src="{{ Storage::url($profile->last()->image) }}" alt="Cover Image" class="w-full h-full object-cover" />
                                        @else
                                            <img src="{{ asset('assets/img/ai.jpg')}}" class="w-full h-full object-cover rounded-full" alt="profile" />
                                        @endif
                                    </div>
                                    <div class="flex flex-col justify-center items-start">
                                        <span class="text-sm font-medium">{{$blog->user->name}}</span>
                                        <span class="text-xs text-gray-500">{{$blog->created_at->format("d-M-y")}}</span>

                                    </div>

                                </div>
                            </div>



                            <div class="w-full h-[300px] bg-gray-200 flex justify-center items-center">
                                @if($blog->image)
                                    <img src="{{ Storage::url($blog->image['image']) }}" alt="blogs">
                                @else 
                                    <img src="https://www.shutterstock.com/image-photo/blogging-blog-word-coder-coding-260nw-520314613.jpg" class="object-cover w-full h-[300px]" alt="logo">
                                @endif
                            </div>

                            <div class="mt-3 h-[200px]">
                                <h1 class="font-bold uppercase text-lg mb-3">{{$blog->title}}</h1>
                                <p class="text-gray-700">    
                                    {{Str::substr($blog->body,0,50)}}
                                </p>


                            </div>


                        </a>

                        </div>
                
                        @endforeach
                    </div>

                </section>
            </section>
            {{-- end post list  --}}
        </section>
@endsection
{{-- end profile  --}}



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