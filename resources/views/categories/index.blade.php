@extends('layouts/backend.admindashboardindex')
@section('content')

<div class="w-full mx-auto px-10 table-border my-[100px]">
    <div class="w-full flex justify-end">
        <a href="" class="bg-blue-500 rounded-md px-3 py-2">Create New Category</a>
    </div>
    <table class="w-full">
        <thead>
            <tr class="text-gray-500 font-semibold tracking-wide border-b border-b-white mb-3">
                <td>No.</td>
                <td>Category Name</td>
                <td>Created At</td>
                <td>Actions</td>
            </tr>
        </thead>
        <tbody class="text-white">
            @foreach ($categories as $key=>$category)
                <tr class="border-b border-b-whtie my-5">
                    <td class="px-2 py-3">{{++$key}}</td>
                    <td class="px-2 py-3">{{$category->name}}</td>
                    <td class="px-2 py-3">{{$category->created_at->format('d M Y')}}</td>
                    <td class="px-2 py-3">
                        <form action="{{route('categories.destroy',['category'=>$category->id])}}" method="POST">
                        @method("DELETE")
                        @csrf
                        <a href="" class="bg-violet-500 px-3 py-1 rounded-md me-5">Edit</a>

                        <button type="submit" class="bg-red-500 px-3 py-1 rounded-md">Delete</button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
    <div class="mt-10">
        {{$categories->links()}}
    </div>
</div>

@endsection