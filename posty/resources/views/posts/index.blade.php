@extends('layouts.app')

@section('content')
    <div class="flex justify-center">
        <div class="w-8/12 bg-white p-6 rounded-lg">
            <form action="{{ route('posts') }}" method="post">
            @csrf
                <div class="mb-4">
                    <h1 class="text-3xl px-2 my-3"> Any League Players? </h1>
                    <img src='https://c4.wallpaperflare.com/wallpaper/713/570/521/league-of-legends-irelia-wallpaper-preview.jpg' alt="leagueoflegend" width="500" height="500">
                </div>
                <div class="mb-4">
                    <label for="body" class="sr-only" > Body </label>
                    <textarea name="body" id="body" cols="10" rows="1" class="bg-gray-100 border-2 
                    w-full p-4 rounded-lg @error('body') border-red-500
                        
                    @enderror" placeholder="Your Message Here!"></textarea>
                    @error('body')
                        <div class="text-red-500 mt-2 text-sm">
                            {{ $message }}
                        </div>
                    @enderror
                </div>
                <div class="">
                    <button type="submit" class="bg-blue-500 text-white px-4 py-2 rounded-lg">Post</button>
                </div>
            </form>

            @if ($posts->count())


                @foreach($posts as $post)
                    <div class="mb-4 p-1">
                        <a href="" class="font-bold">{{ $post->user->name }}</a><span class="text-gray-600 text-sm p-4">{{$post->created_at->diffForHumans()}}</span>
                        <p class="mb-2">{{$post->body}}</p>
                        @auth
                        @if ($post->ownedBy(auth()->user()))
                            <div>
                                <form action="{{ route('posts.destroy', $post) }}" method="post">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="text-red-900">Delete</button>
                                </form>
                            </div>
                        @endif
                        <div class="flex items-center">
                            <form action="{{ route('posts.likes', $post) }}" method="POST" class="mr-1">
                                <button type="submit" class="text-blue-900">Like</button>
                            </form>
                            <span>{{ $post->likes->count() }} Likes</span>
                        </div>
                        
                        @endauth
                        
                    </div>
                @endforeach
                {{ $posts->links() }}
            @else
                <p>There Are none!</p>
            @endif
        </div>
    </div>
@endsection