@extends('layouts.app')

@section('content')
<header 
    id="master-header"
    class="h-screen text-white flex flex-col justify-center  relative"
    style="background-image: linear-gradient(135deg, #231427 0%, #2c385e 50%, #336e6b 100%); min-height: 660px">
    <div
      class="z-0 absolute top-0 left-0 w-full h-full bg-cover bg-no-repeat"
      style="">
    </div>
    <div class="z-10 relative py-12 mx-auto md:w-1/2 text-center">
      <h1 class="leading-tight mb-8 text-5xl text-center font-thin">
        Find Millions of Streamers Here!
      </h1>
      <p class="text-center text-xl font-light mb-8">
        Talk To Millions about your gaming journey!!
      </p>
      <p class="text-base font-thin">
        The TIME IS NOW
      </p>
      <button
        type="button"
        class="mt-6 bg-gray-100 text-gray-900 shadow hover:shadow-lg uppercase py-4 px-6 font-semibold"
      >
        Start Now
      </button>
      <p class="mt-4 text-xs opacity-50">
        Sign Up and Start The Journey With Us!
      </p>
    </div>
  </header>
  
  
  <footer
    class="py-8 mx-auto container px-8"
  >
    <div class="flex justify-between">
    <ul class="list-none m-0 p-0 flex uppercase -mx-4 text-gray-700 text-sm">
      <li class="px-2 inline-block">
        <a href="#" class="no-underline">FAQ</a>
      </li>
      <li class="px-2 inline-block">
        <a href="#" class="no-underline">
          Discord
        </a>
      </li>
      <li class="px-2 inline-block">
        <a href="#" class="no-underline">
          Help
        </a>
      </li>
    </ul>
      <p class="text-gray-800 font-bold uppercase">
        &copy; 2021 Sbaamel
      </p>
    </div>
  </footer>
@endsection