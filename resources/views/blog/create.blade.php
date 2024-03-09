
@extends('layouts/frontend.adminindex')

    {{-- start profile  --}}
   

    @section('content')

        <h3 class="text-[25px] text-gray-600 container mx-auto px-10 font-bold my-8 underline underline-offset-8 tracking-wide">Add New Blog</h3>
        <form action="{{route('blogs.store')}}" method="POST" enctype="multipart/form-data"
            class="container rounded-lg mx-auto p-10">
            @csrf

            <div class="my-3">
                <label class="block text-md mb-3 text-gray-600 font-semibold" for="name">Blog Title</label>
                <input type="text" id="name" name="title" class="w-full border rounded-md focus:outline-none focus:bg-[bisque] py-2 px-3" required/>
            </div>

            <div class="my-3">
                <label class="block text-md mb-3 text-gray-600 font-semibold" for="body">Blog Body</label>
                <textarea name="body" id="body" rows="10" style="resize: none" class="w-full border rounded-md focus:outline-none focus:bg-[bisque] py-2 px-3"></textarea>
            </div>

            <div class="my-3">
                <label class="block text-md mb-3 text-gray-600 font-semibold" for="photo">Blog Title</label>
                <input type="file" id="photo" name="photo" class="w-full border rounded-md focus:outline-none focus:bg-[bisque] py-2 px-3" required/>
            </div>

            <div class="w-full flex gap-x-5">
               
                <div class="w-1/2 my-3">
                    <label class="block text-md mb-3 text-gray-600 font-semibold" for="intro">Blog Intro</label>
                    <input type="text" id="intro" name="intro" class="w-full border rounded-md focus:outline-none focus:bg-[bisque] py-2 px-3" required/>
                </div>
    
                <div class="w-1/2 my-3">
                    <label class="block text-md mb-3 text-gray-600 font-semibold" for="category">Category</label>
                    <select name="category_id" id="category" class="w-full border rounded-md focus:outline-none focus:bg-[bisque] py-2 px-3">
                        <option value="" selected disabled required>Choose your category</option>
                        @foreach($categories as $category)
                        <option value="{{$category->id}}">{{$category->name}}</option>
                        @endforeach
                    </select>
                </div>
            </div>

            <div class="flex items-center my-3 space-x-2">
                <input type="checkbox" id="publish" name="publish" class="accent-gray-600"/>
                <label class="text-md text-gray-600 font-semibold cursor-pointer" for="publish">Do you want to publish your blog?</label>
            </div>

            <div class="flex justify-end items-center mt-5">
                <button type="reset" class="bg-gray-500 text-white px-3 py-2 rounded-lg mr-4 hover:bg-gray-700 hover:shadow-md hover:shadow-gray-600">Cancel</button>
                <button type="submit" class="bg-blue-500 text-white px-3 py-2 rounded-lg hover:bg-blue-700 hover:shadow-md hover:shadow-gray-600">Save</button>
            </div>

        </form>
      
    @endsection
        {{-- end profile  --}}
    </body>
</html>