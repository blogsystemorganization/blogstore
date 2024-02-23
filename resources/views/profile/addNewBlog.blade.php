
@extends('layouts/frontend.adminindex')

    {{-- start profile  --}}
   

    @section('content')

        <h3 class="text-[20px] text-gray-500 text-center font-semibold my-8">Add New Blog</h3>
        <form action="{{route('profile.store')}}" method="POST"
            class="w-[500px] bg-gray-200 rounded-lg mx-auto shadow-xl shadow-gray-600 p-10">
            @csrf

            <div class="my-3">
                <label class="block text-md mb-3 text-gray-600 font-semibold" for="name">Blog Title</label>
                <input type="text" id="name" name="title" class="w-full border-b bg-gray-50 rounded-md focus:outline-none focus:bg-blue-200 py-2 px-3" required/>
            </div>

            <div class="my-3">
                <label class="block text-md mb-3 text-gray-600 font-semibold" for="intro">Blog Intro</label>
                <input type="text" id="intro" name="intro" class="w-full border-b bg-gray-50 rounded-md focus:outline-none focus:bg-blue-200 py-2 px-3" required/>
            </div>

            <div class="my-3">
                <label class="block text-md mb-3 text-gray-600 font-semibold" for="body">Blog Body</label>
                <textarea name="body" id="body" rows="5" style="resize: none" class="w-full border-b bg-gray-50 rounded-md focus:outline-none focus:bg-blue-200 py-2 px-3"></textarea>
            </div>

            <div class="my-3">
                <label class="block text-md mb-3 text-gray-600 font-semibold" for="category">Category</label>
                <select name="category_id" id="category" class="w-full border-b bg-gray-50 rounded-md focus:outline-none focus:bg-blue-200 py-2 px-3">
                    <option value="" selected disabled required>Choose your category</option>
                    @foreach($categories as $category)
                    <option value="{{$category->id}}">{{$category->name}}</option>
                    @endforeach
                </select>
            </div>

            <div class="my-3">
                <label class="block text-md mb-3 text-gray-600 font-semibold" for="">Is Publish</label>
                <input type="checkbox" name="publish"/>
            </div>

            <div class="flex justify-end items-center mt-5">
                <button class="bg-gray-500 text-white px-3 py-2 rounded-lg mr-4 hover:bg-gray-700 hover:shadow-md hover:shadow-gray-600">Cancel</button>
                <button class="bg-blue-500 text-white px-3 py-2 rounded-lg hover:bg-blue-700 hover:shadow-md hover:shadow-gray-600">Save</button>
            </div>

        </form>
      
    @endsection
        {{-- end profile  --}}
    </body>
</html>