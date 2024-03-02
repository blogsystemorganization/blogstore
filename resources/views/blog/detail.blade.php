@extends('layouts/frontend.adminindex')


@section('content')
<div class="container mx-auto">

    <div class="w-full grid lg:grid-cols-3 grid-cols-1 px-10 my-10">
        <div class="w-full">
            <div>
                <img src="https://www.shutterstock.com/image-photo/blogging-blog-word-coder-coding-260nw-520314613.jpg" class="object-cover w-full h-[300px]" alt="logo" />
            </div>

            <!--start parent comment box -->
                <div class="pb-10">
                    <div class="mx-auto rounded-md">

                        <!-- start comment box -->

                            <div class="h-52 bg-slate-100 shadow-md p-3 pt-8 mt-8  overflow-scroll overflow-x-hidden">
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

                        <!-- end comment box -->

                        {{-- <h2 class="text-lg font-semibold mb-4">Leave a Comment</h2> --}}

                        <form action="/{{$blog->id}}/comment/store" method="POST">
                            @csrf
                            <div class="mb-4">
                                {{-- <label for="comment" class="block text-sm font-medium text-gray-600">Comment</label> --}}
                                <textarea id="comment" name="body" rows="4" class="w-full border resize-none outline-none p-2" placeholder="Your Comment">
                                </textarea>
                                @error('body')
                                    <p class="text-red-800 font-bold py-2">{{$message}}</p>
                                @enderror
                            </div>

                            <div class="text-end pb-3">
                                <button type="submit" class="bg-indigo-600 text-white px-4 py-2 rounded-sm cursor-pointer">Submit</button>
                            </div>
                        </form>

                    </div>

                </div>
            <!--end parent comment box -->
        </div>

        <div class="md:col-span-2 col-auto h-40 px-5">
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
                            <button type="button" class="text-white bg-indigo-600 rounded-sm shadow-md py-2 px-4 me-3 hover:bg-indigo-500 hover:text-slate-900 transition:color duration:200">
                                <a href="{{route('blogs.edit',['blog'=>$blog->id])}}">Edit</a>
                            </button>

                            <button type="submit" class="text-white bg-rose-600 rounded-sm shadow-md cursor-pointer py-2 px-4 me-3 hover:bg-rose-500 hover:text-slate-900 transition:color duration:200">Delete</button>
                        </form>
                    @endif
                </div>
            </div>

            <div>
                <div class="w-full h-[350px] overflow-y-scroll details-scroll px-2">
                    <h1 class="text-xl font-semibold text-gray-700">{{$blog->title}}</h1>
                    <p class="text-md text-gray-600 text-justify indent-10 leading-6 mt-5">{{$blog->body}}</p>
                </div>
            </div>

        </div>
    </div>

    <div id="backarrows" class="fixed bottom-5 right-5 lg:block hidden backarrows">
        <div class="w-12 h-12 bg-slate-300 rounded-full">
            <a href="{{route("blogs.index")}}" class="w-full h-full text-center text-lg text-rose-800 grid items-center"> <i class="fas fa-arrow-left"></i> </a>
        </div>
    </div>

</div>



@endsection

@section('css')
<style type="text/css">
    html{
        scroll-behavior:smooth;
    }
    ::-webkit-scrollbar{
        width:5px;
    }

    ::-webkit-scrollbar-thumb{
        background-color:gray;
        border-radius:7px;
    }

    ::-webkit-scrollbar-track{
        background-color:rgb(224, 216, 216);
    }

    .backactive{
        display:block;
    }
</style>
@endsection

@section('script')
<script type="text/javascript">
   
//    let getback = document.querySelector('.backarrows');
//    window.onscroll = function(){
//     let scrolltop = document.documentElement.scrollTop;
//         console.log(scrolltop);

//         if(scrolltop >= 100){
//             getback.classList.add('backactive');
//         }else{
//             getback.classList.remove('backactive');
//         }
//    };

  


</script>
@endsection