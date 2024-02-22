@extends('layouts/adminindex')

@section('content')

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
                    <a class="hover:opacity-90 font-bold font-medium" href="">
                        {{$blog->body}}
                    </a>
                </p>


            </div>

        </div>

        @endforeach




    </div>






</section>

@endsection