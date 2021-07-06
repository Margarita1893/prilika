<div>
    <!-- component -->

    <article class=" bg-gray-100 bg-opacity-25 mb-5 bg-teal-100 border border-gray-200 rounded shadow-md mt-4 ">
        <div class="p-3">
            <a href="#">
                <img src="https://picsum.photos/240/150/?random" alt="Placeholder"
                    class="rounded rounded-b-none w-full ">

                <h2 class="text-lg text-white text-center font-bold truncate uppercase rounded-xl tracking-wider">
                    {{$vacancy->name}}
                </h2>
            </a>
            <p class="text-lg text-white truncate">{{$vacancy->excerpt}}</p>
            <img src="{{ $vacancy->user->avatar }}" class="rounded-full mt-4 mx-auto h-16 w-16">
        </div>

        <button
            class='mx-auto bg-blue-800 text-white rounded ml-auto flex items-center gap-1 sm:text-lg  border border-gray-300 px-3 py-1  hover:bg-blue-600 transition-colors focus:bg-gray-100 focus:outline-none focus-visible:border-gray-500 mb-2'>
            <a href="{{ route ('vacancy', $vacancy->id) }}">
                <span>Ver vacante</span>
            </a>
        </button>

    </article>


</div>


<link rel="stylesheet" href="{{asset('css/app.css')}}">