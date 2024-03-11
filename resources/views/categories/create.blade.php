@extends('layouts/backend.admindashboardindex')
@section('content')

<div class="flex justify-start flex-col mx-auto px-10 table-border my-[100px]">
    <h1 class="text-blue-500 text-lg font-semibold tracking-wider mb-7">Create New Category</h1>
    <form action="{{ route('categories.store') }}" method="POST" class="w-[500px]">
        @method('POST')
        @csrf

        <div class="flex flex-col gap-3 mb-5">
            <label class="text-gray-500">Category Name</label>
            <input type="text" name="categoryname" class="bg-gray-500 rounded-md focus:outline-0 px-3 py-2">
            @error('categoryname')
                <p class="text-red-500 text-sm"> {{$message}} </p>
            @enderror
        </div>

        <div class="flex flex-col gap-3 mb-5">
            <label class="text-gray-500">Category Slug</label>
            <input type="text" name="categoryslug" class="bg-gray-500 rounded-md focus:outline-0 px-3 py-2">
            @error('categoryslug')
                <p class="text-red-500 text-sm"> {{$message}} </p>
            @enderror
        </div>

        <div class="flex justify-end">
            <button type="submit" class="bg-blue-500 text-md text-gray-100 rounded-md px-3 py-2">Save</button>
        </div>
    </form>
</div>

@endsection