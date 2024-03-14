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
                <textarea id="comment" name="body" rows="1" class="w-full border resize-none outline-none p-2" placeholder="Your Comment"></textarea>
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