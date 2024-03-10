<section class="container mx-auto px-4">
    <div class="w-full md:px-32 sm:px-4 py-6">


        {{-- search  --}}
        <form action="" method="" class="w-full flex justify-center">
            <div class="lg:w-1/2 w-full relative">
                <input value="{{request('search')}}" type="search" name="search" class="w-full bg-gray-200 rounded-l focus:outline-none focus:ring px-8 py-4" placeholder="Search..." />


                <button type="submit" class="bg-gray-300 rounded-r-md py-4 px-5 absolute right-0">

                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                        <path stroke-linecap="round" stroke-linejoin="round" d="m21 21-5.197-5.197m0 0A7.5 7.5 0 1 0 5.196 5.196a7.5 7.5 0 0 0 10.607 10.607Z" />
                    </svg>

                </button>
            </div>
        </form>



        {{-- categories  --}}
        <div class="w-full max-w-screen flex flex-wrap justify-center items-center mt-10 gap-2">
            <div class="text-white bg-gray-700 rounded-lg px-5 py-2"><a href="">All</a></div>
            @foreach($categories as $category)
            <div class="text-white bg-gray-700 rounded-lg px-5 py-2"><a href="">{{$category->name}}</a></div>
            @endforeach
        </div>


    </div>



</section>