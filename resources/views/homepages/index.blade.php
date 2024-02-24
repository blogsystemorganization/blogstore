@extends('layouts/frontend.adminindex')

@section('content')



<div class="container mx-auto flex flex-col justify-center items-center pt-10 pb-8">
    <h1 class="text-4xl font-medium uppercase mb-3">Blogs</h1>
    <div>
        <span>Knowledge is power.</span>
    </div>
</div>


<section class="container mx-auto px-4">
    <div class="w-full md:px-32 sm:px-4 py-10">

        
        {{-- search  --}}
        <form action="" method="" class="w-full flex justify-center">
            <div class="lg:w-1/2 w-full relative">
                <input type="search" name="search" class="w-full bg-gray-200 rounded-l focus:outline-none focus:ring px-8 py-4" placeholder="Search..." />

                <button type="submit" class="bg-gray-300 rounded-r-md py-4 px-5 absolute right-0">

                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                        <path stroke-linecap="round" stroke-linejoin="round" d="m21 21-5.197-5.197m0 0A7.5 7.5 0 1 0 5.196 5.196a7.5 7.5 0 0 0 10.607 10.607Z" />
                    </svg>

                </button>
            </div>
        </form>


        
            {{-- categories  --}}
        <div class="w-full max-w-screen flex flex-wrap justify-center items-center mt-10 gap-2">
            <div class="text-white bg-gray-700 rounded-lg px-5 py-2"><a href="">All</a></div>
            @foreach($categories as $category)
                <div class="text-white bg-gray-700 rounded-lg px-5 py-2"><a href="">{{$category->name}}</a></div>
            @endforeach
        </div>
    
        
    </div>

  
     
</section>


<section class="container mx-auto mt-10 px-4">

    <div class="grid lg:grid-cols-3 md:grid-cols-2 sm:grid-cols-1 gap-10">
        @foreach ($blogs as $blog)

        <div class="bg-slate-300 border border-gray-100 p-4 rounded-md hover:bg-slate-100 hover:border hover:border-2 hover:border-slate-600 transition-all duration-300">

            <div class="mb-5">
                <div class="w-full flex justify-start items-center space-x-3">
                    <div class="w-10 h-10 rounded-full bg-gray-200 hover:border hover:border-2 hover:border-red-500 transition-all duration-300 ">
                        <img src="" alt="" />
                    </div>
                    <div class="flex flex-col justify-center items-start">
                        <span class="text-sm font-medium">{{$blog->user->name}}</span>
                        <span class="text-xs text-gray-500">{{$blog->created_at->format("d-M-y")}}</span>

                    </div>

                </div>
            </div>



            <div class="w-full h-[300px] bg-gray-200 flex justify-center items-center">
                <img src="https://www.shutterstock.com/image-photo/blogging-blog-word-coder-coding-260nw-520314613.jpg" class="object-cover w-full h-[300px] rounded" alt="logo">
            </div>

            <div class="mt-3 h-[200px]">
                <h1 class="font-bold uppercase text-lg mb-3">{{$blog->title}}</h1>
                <p class="text-gray-500">
                    <a class="hover:opacity-90 font-bold font-medium" href="blogs/{{$blog->id}}">
                        {{-- {{Str::limit($blog->body,20)}} --}}
                        {{$blog->body}}
                    </a>
                </p>


            </div>

        </div>

        @endforeach




    </div>






</section>

@endsection