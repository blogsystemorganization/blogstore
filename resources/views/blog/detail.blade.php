@extends('layouts/frontend.adminindex')


@section('content')
<div class="container mx-auto">

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
                        <a href="{{route('blogs.edit',['blog'=>$blog->id])}}" class="text-white bg-blue-500 rounded-lg py-2 px-3 me-3">Edit</a>
                        <button type="submit" class="text-white bg-red-500 rounded-lg py-2 px-3 me-3">Delete</button>
                    </form>
                    @endif
                </div>
            </div>
            <div>
                <h1 class="text-xl font-semibold text-gray-700">{{$blog->title}}</h1>
                <p class="text-sm text-gray-600 text-justify mt-5">{{$blog->body}}</p>

                <div class="flex justify-end mt-10 mb-[50px]">
                    <a href="{{route("homepages.index")}}" class=""> <i class="fas fa-arrow-left"></i> Back</a>
                </div>
            </div>
        </div>
    </div>

</div>
<!-- comment box -->
<div class="bg-gray-500 p-6 pt-8">
    <div class="max-w-xl mx-auto bg-white rounded-md shadow-md p-4">
        <h2 class="text-lg font-semibold mb-4">Leave a Comment</h2>

        <form action="/{{$blog->id}}/comment/store" method="POST">
            @csrf
            <div class="mb-4">
                <label for="comment" class="block text-sm font-medium text-gray-600">Comment</label>
                <textarea id="comment" name="body" rows="4" class="mt-1 p-2 w-full border rounded-md" placeholder="Your Comment">
                    </textarea>
                @error('body')
                <p>{{$message}}</p>
                @enderror
            </div>

            <button type="submit" class="bg-blue-500 text-white px-4 py-2 rounded-md">Submit</button>
        </form>

    </div>
    <!-- comment box -->
    <div class="p-6 pt-8 mt-8 max-w-xl mx-auto bg-white rounded-md shadow-md">
        @foreach($comments as $comment)
        <div>
            <h2 class="text-lg font-semibold mb-4">
                {{$comment->user->name}}
                <span class="text-sm text-slate-700 dark:text-slate-500 p-2">({{$comment->created_at->diffForHumans()}})</span>
            </h2>

        </div>
        <div>
            <p>{{$comment->body}}</p>
        </div>
        <hr>
        @endforeach
        <div class="mx-auto">
            {{$comments->links()}}
        </div>
    </div>
    @endsection


    </body>

    </html>