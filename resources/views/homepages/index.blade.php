
@extends('layouts/adminindex')



@section('content')

<section class="container mx-auto mt-10">

    <div class="grid grid-cols-3 gap-4">
    
        <div class="bg-gray-100 p-3 rounded-md">
            <div class="w-full h-[300px] bg-gray-200 flex justify-center items-center">
                <img src="https://www.shutterstock.com/image-photo/blogging-blog-word-coder-coding-260nw-520314613.jpg" alt="logo">
            </div>

            <div class="mt-3 h-[200px]">
                <h1 class="font-bold uppercase text-lg mb-3">This is title one</h1>
                <p class="text-blue-700">
                    <a class="hover:opacity-90 font-bold font-medium" href="">
                        Lorem, ipsum dolor sit amet consectetur adipisicing elit. Quaerat aliquid, praesentium quos quidem porro laborum consectetur inventore debitis eveniet dolore omnis cum quae corrupti pariatur! Consequatur at totam alias debitis!
                    </a>
                </p>

              
            </div>
            <div class="self-end flex-col">
                <p class="font-bold flex justify-end">
                    <a href="" class="text-blue-800">
                        Admin 
                    </a>
                </p>
            </div>
        </div>

    </div>

    </div>






</section>

@endsection