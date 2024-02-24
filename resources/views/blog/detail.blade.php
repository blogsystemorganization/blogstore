
@extends('layouts/frontend.adminindex')


    @section('content')

    <div class="flex justify-between items-center px-10 my-10">
        <div class="w-1/3 max-h-[300px] bg-red-500">
            <img src="https://www.shutterstock.com/image-photo/blogging-blog-word-coder-coding-260nw-520314613.jpg" class="object-cover w-full h-[300px]" alt="logo">
        </div>
        <div class="w-2/3 h-40 px-5">
            <div class="flex justify-end items-center">
                @if(Auth::user()->id === $blog->user_id)
                    <a class="text-white bg-blue-500 rounded-lg py-2 px-3 me-3" href=""><i class="fas fa-edit"></i></a>
                    <a class="text-white bg-red-500 rounded-lg py-2 px-3" href=""><i class="fas fa-trash-alt"></i></a>
                @endif
            </div>
            <div>
                <h1 class="text-lg font-semibold text-gray-400">{{$blog->title}}</h1>
                <p class="text-sm text-gray-600 text-justify mt-5">{{$blog->body}}</p>
            </div>
        </div>
    </div>

    @endsection

    </body>
</html>