@extends('layouts/frontend.adminindex')

@section('content')

<div class="container mx-auto flex flex-col justify-center items-center pt-10 pb-4">
    <h1 class="text-4xl font-bold uppercase mb-1">Blogs</h1>
    <div>
        <span class="text-lg">Knowledge is power.</span>
    </div>
</div>

<x-banner-section/>
<section class="container mx-auto mt-10 md:px-0 px-4">

    <div class="grid lg:grid-cols-3 md:grid-cols-2 sm:grid-cols-1 gap-10">
        @foreach ($blogs as $key=>$blog)

        <div class="bg-slate-300 border border-gray-100 p-4 rounded-md hover:bg-slate-100 hover:border hover:border-2 hover:border-slate-600 transition-all duration-300">
            <a href="blogs/{{$blog->id}}">

                <div class="mb-5">
                    <div class="w-full flex justify-start items-center space-x-3">
                        <div class="w-10 h-10 rounded-full overflow-hidden bg-gray-200 hover:border hover:border-2 hover:border-red-500 transition-all duration-300 ">
                            @if($blog->user->profile)
                                <img src="{{ Storage::url($blog->user->profile['image']) }}" alt="Cover Image" class="w-full h-full object-cover" />
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
                <p class="text-gray-500">                 
                        {{-- {{Str::limit($blog->body,20)}} --}}
                        {{Str::substr($blog->body,0,50)}}
                </p>


                </div>

            </a>
        </div>

        @endforeach



    </div>


    <div class="mt-10">
        {{$blogs->links()}}
    </div>




</section>

@endsection