@extends('layouts/frontend.adminindex')

@section('content')
  <div class="md:w-4/5 w-full h-full grid items-center mx-auto">
    <div class="h-4/5 grid items-center">
        <form action="{{ route('profile.update', Auth::user()->id) }}" method="POST" enctype="multipart/form-data">
            @csrf
            @method('PUT')
            
            <div class="flex justify-around">
                <div class="w-1/2 h-[300px] bg-slate-100 text-center text-2xl font-bold flex justify-around items-center cursor-pointer rounded-tl-sm rounded-bl-sm">
                    <h1 class="text-3xl text-slate-600 hidden md:block">Cover</h1>
                    <label for="cover" class="w-[200px] h-[200px] overflow-hidden cursor-pointer">
                        @if($cover->last())
                            <img src="{{ Storage::url($cover->last()->image) }}" alt="Cover Image" class="w-full h-full rounded-full object-cover" />
                        @else
                            <img src="{{ asset('assets/img/ai.jpg')}}" class="w-full h-full object-cover rounded-full" alt="profile" />
                        @endif
                    </label>
                    <input type="file" name="cover" id="cover" hidden />
                </div>
        
                <div class="w-1/2 h-[300px] bg-zinc-200 text-center text-2xl font-bold flex justify-around items-center cursor-pointer rounded-tr-sm rounded-br-sm">
                    <h1 class="text-3xl text-slate-600 hidden md:block">Profile</h1>
                    <label for="profile" class="w-[200px] h-[200px] overflow-hidden cursor-pointer">   
                        @if($profile->last())
                            <img src="{{ Storage::url($profile->last()->image) }}" alt="Cover Image" class="w-full h-full rounded-full object-cover" />
                        @else
                            <img src="{{ asset('assets/img/ai.jpg')}}" class="w-full h-full object-cover rounded-full" alt="profile" />
                        @endif
                    </label>
                    <input type="file" name="profile" id="profile" hidden />
                </div>
            </div>
    
           <div class="w-full text-end mt-10">
                <button type="submit" class="bg-indigo-600 text-slate-100 text-md font-medium rounded-md shadow-md hover:bg-indigo-400 hover:text-slate-900 transition:color duration-200 px-5 py-2.5">Submit</button>
           </div>
         </form>
      </div>
  </div>
@endsection

@section('css')
<style type="text/css">

</style>
@endsection




















{{-- <x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Profile') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8 space-y-6">
            <div class="p-4 sm:p-8 bg-white shadow sm:rounded-lg">
                <div class="max-w-xl">
                    @include('profile.partials.update-profile-information-form')
                </div>
            </div>

            <div class="p-4 sm:p-8 bg-white shadow sm:rounded-lg">
                <div class="max-w-xl">
                    @include('profile.partials.update-password-form')
                </div>
            </div>

            <div class="p-4 sm:p-8 bg-white shadow sm:rounded-lg">
                <div class="max-w-xl">
                    @include('profile.partials.delete-user-form')
                </div>
            </div>
        </div>
    </div>
</x-app-layout>

 --}}

{{-- <h1>Edit</h1> --}}