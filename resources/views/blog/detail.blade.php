
@extends('layouts/frontend.adminindex')


    @section('content')

    <div class="grid grid-cols-3 px-10 my-10">
        <div class=" max-h-[300px] bg-red-500">
            <img src="https://www.shutterstock.com/image-photo/blogging-blog-word-coder-coding-260nw-520314613.jpg" class="object-cover w-full h-[300px]" alt="logo">
        </div>
        <div class="col-span-2 h-40 px-5">
            <div class="flex justify-between items-center mb-10">
                <div>
                    
                    <div class="mb-5">
                        <div class="w-full flex justify-start items-center space-x-3">
                            <div class="w-10 h-10 rounded-full bg-gray-200">
                                <img src="" alt="">
                            </div>
                            <div class="flex flex-col justify-center items-start">
                                <span class="text-sm font-medium">{{$blog->user->name}}</span>
                                <span class="text-xs text-gray-500">{{$blog->created_at->format("d-M-y")}}</span>
        
                            </div>
        
                        </div>
                    </div>

                </div>
                <div class="flex items-center">
                    @if(Auth::user()->id === $blog->user_id)
                        <form action="{{route('blogs.destroy',['blog' => $blog->id])}}" method="POST">
                            @csrf
                            @method('DELETE')
                            <button type="button" class="text-white bg-blue-500 rounded-md cursor-pointer py-2 px-4 me-3 hover:bg-blue-400 hover:text-slate-700 hover:font-semibold transition:all duration-200"><a href="{{route('blogs.edit',['blog'=>$blog->id])}}">Edit</a></button>
                            <button type="submit" class="text-white bg-red-500 rounded-md cursor-pointer py-2 px-4 me-3 hover:bg-red-400 hover:text-slate-800 hover:font-semibold transition:all duration-200">Delete</button>
                        </form>
                    @endif
                </div>
            </div>

            <div>
                <div class="w-full h-[350px] overflow-y-scroll details-scroll px-2">
                    <h1 class="text-xl font-semibold text-gray-700">{{$blog->title}}</h1>
                    <p class="text-md text-gray-600 text-justify indent-10 leading-6 mt-5">{{$blog->body}}</p>
                </div>

               <div class="flex justify-end mt-10 mb-[50px]">
                    <div class="w-12 h-12 bg-slate-400 rounded-full">
                        <a href="{{route("homepages.index")}}" class="w-full h-full text-center text-lg grid items-center"> <i class="fas fa-arrow-left"></i> </a>
                    </div>
               </div>
            </div>

        </div>
    </div>

    @endsection

  @section('css')
    <style type="text/css">
        ::-webkit-scrollbar{
            width:4px;
        }

        ::-webkit-scrollbar-track{
            background-color:transparent;
        }

        ::-webkit-scrollbar-thumb{
            width:3px;
            background-color:#94a3b8;
        }
    </style>
  @endsection