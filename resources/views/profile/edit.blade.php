@extends('layouts/frontend.adminindex')

@section('content')
  <div>
    <form action="{{ route('profile.update', Auth::user()->id) }}" method="POST" enctype="multipart/form-data" class="md:flex md:justify-flex">
        @csrf
        @method('PUT')
        <div>
            <label for="">Cover</label>
            <input type="file" name="cover">
        </div>

        <div>
            <label for="">Profile</label>
            <input type="file" name="profile">
        </div>

        <button>Submit</button>
     </form>
  </div>
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