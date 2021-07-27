@extends('layouts.app')

@section('content')
<div class="flex justify-center">
    <div class="container bg-light-100 p-5 rounded">
        <div class="m-3 border border-black">
            <div class="row m-3">
                <h1>posted by  </h1> <h1> "{{auth()->user()->name}}"</h1> <br>
            </div>
            <div class="row m-3"><p>{{$data[0]['body']}}</p></div>
        </div>
        @auth
        <div class="row m-auto">
            <form action="{{ route('posts.makecomment')}} " method="post" class="w-100">
                <div>
                    @csrf
                    <input type="hidden" name="id" value="{{$data[0]['id']}}">
                    <textarea class="bg-light-100 border-2
                    w-full p-4 rounded-lg" placeholder="comment here" name="comment"  rows="4"></textarea>
                </div>
                <div>
                    <button type="submit" class="bg-blue-500 text-white px-4 py-2 rounded-lg" >comment</button>
                </div>
            </form>
        </div>
        @endauth


            <ul class="list-group list-group-flush mt-5">
                @if ($comments->count())
                    <li class="list-group-item list-group-item-primary">
                        All comments:
                    </li>
                    @foreach ($comments as $comment)
                    <div class="mb-4">
                        <p class="">{{$comment['comment'] }}</p>
                    </div>
                    <!-- <li class="list-group-item">
                        {{$comment['comment'] }}
                    </li> -->

                 @endforeach
                 @else
                 <li class="list-group-item list-group-item-secondary">
                     No one commented
                 </li>
                 @endif
            </ul>

    </div>


</div>
@endsection
