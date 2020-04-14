@extends('layouts.main')

@section('content')
    <div class="movie-info border-b  border-gray-800">
        <div class="container mx-auto px-4 py-16 flex flex-col md:flex-row">
            <img src="/img/joker.jpg" alt="joker" class="w-64 md:w-96">
            <div class="md:ml-24">
                <h2 class="text-4xl font-semibold">Joker (2019)</h2>
                <div class="flex flex-wrap items-center text-gray-400 text-sm">
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"
                         class="fill-current text-orange-500 w-4">
                        <path
                            class="heroicon-ui"
                            d="M6.1 21.98a1 1 0 0 1-1.45-1.06l1.03-6.03-4.38-4.26a1 1 0 0 1 .56-1.71l6.05-.88 2.7-5.48a1 1 0 0 1 1.8 0l2.7 5.48 6.06.88a1 1 0 0 1 .55 1.7l-4.38 4.27 1.04 6.03a1 1 0 0 1-1.46 1.06l-5.4-2.85-5.42 2.85zm4.95-4.87a1 1 0 0 1 .93 0l4.08 2.15-.78-4.55a1 1 0 0 1 .29-.88l3.3-3.22-4.56-.67a1 1 0 0 1-.76-.54l-2.04-4.14L9.47 9.4a1 1 0 0 1-.75.54l-4.57.67 3.3 3.22a1 1 0 0 1 .3.88l-.79 4.55 4.09-2.15z"/>
                    </svg>
                    <span class="ml-1">85%</span>
                    <span class="mx-2">|</span>
                    <span>Feb 20, 2020</span>
                    <span class="mx-2">|</span>
                    <div class="text-gray-400 text-sm">
                        Action, Thriller, Comedy
                    </div>
                </div>
                <p class="text-gray-300 mt-8">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Mollitia neque
                    quis quod unde? A ad adipisci aliquid autem earum esse ipsa, ipsam ipsum nesciunt officia, provident
                    quibusdam quidem, voluptatum? Consequatur!
                </p>
                <div class="mt-12">
                    <h4 class="text-white font-semibold">Featured Cast</h4>
                    <div class="flex mt-4">
                        <div>
                            <div>John Doe</div>
                            <div class="text-sm text-gray-400">Screenpaly, Director, Story</div>
                        </div>
                        <div class="ml-8">
                            <div>Jane Doe</div>
                            <div class="text-sm text-gray-400">Screenpaly</div>
                        </div>
                    </div>
                </div>
                <div class="mt-12">
                    <button
                        class="flex items-center bg-orange-500 text-gray-900 rounded font-semibold px-5 py-4 hover:bg-orange-600 transition ease-in-out duration-150">
                        Play Trailer
                    </button>
                </div>
            </div>
        </div>
    </div>

    <div class="movie-cast border-b border-gray-800">
        <div class="container mx-auto px-4 py-16">
            <h2 class="text-4xl font-semibold">Cast</h2>
            <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-5 gap-8">
                <div class="mt-8 ">
                    <a href="#">
                        <img src="/img/joker.jpg" alt="joker"
                             class="hover:opacity-75 transition ease-in-out duration-150">
                    </a>
                    <div class="mt-2">
                        <a href="#" class="text-lg mt-2 hover:text-gray-300">Real Name</a>
                        <div class="text-gray-400 text-sm">Jone Doe</div>
                    </div>
                </div>
                <div class="mt-8 ">
                    <a href="#">
                        <img src="/img/joker.jpg" alt="joker"
                             class="hover:opacity-75 transition ease-in-out duration-150">
                    </a>
                    <div class="mt-2">
                        <a href="#" class="text-lg mt-2 hover:text-gray-300">Real Name</a>
                        <div class="text-gray-400 text-sm">Jone Doe</div>
                    </div>
                </div>
                <div class="mt-8 ">
                    <a href="#">
                        <img src="/img/joker.jpg" alt="joker"
                             class="hover:opacity-75 transition ease-in-out duration-150">
                    </a>
                    <div class="mt-2">
                        <a href="#" class="text-lg mt-2 hover:text-gray-300">Real Name</a>
                        <div class="text-gray-400 text-sm">Jone Doe</div>
                    </div>
                </div>
                <div class="mt-8 ">
                    <a href="#">
                        <img src="/img/joker.jpg" alt="joker"
                             class="hover:opacity-75 transition ease-in-out duration-150">
                    </a>
                    <div class="mt-2">
                        <a href="#" class="text-lg mt-2 hover:text-gray-300">Real Name</a>
                        <div class="text-gray-400 text-sm">Jone Doe</div>
                    </div>
                </div><div class="mt-8 ">
                    <a href="#">
                        <img src="/img/joker.jpg" alt="joker"
                             class="hover:opacity-75 transition ease-in-out duration-150">
                    </a>
                    <div class="mt-2">
                        <a href="#" class="text-lg mt-2 hover:text-gray-300">Real Name</a>
                        <div class="text-gray-400 text-sm">Jone Doe</div>
                    </div>
                </div>


            </div>
        </div>
    </div>

    <div class="movie-cast border-b border-gray-800">
        <div class="container mx-auto px-4 py-16">
            <h2 class="text-4xl font-semibold">Images</h2>
            <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 gap-8">
                <div class="mt-8 ">
                    <a href="#">
                        <img src="/img/joker.jpg" alt="joker"
                             class="hover:opacity-75 transition ease-in-out duration-150">
                    </a>
                </div>
                <div class="mt-8 ">
                    <a href="#">
                        <img src="/img/joker.jpg" alt="joker"
                             class="hover:opacity-75 transition ease-in-out duration-150">
                    </a>
                </div>
                <div class="mt-8 ">
                    <a href="#">
                        <img src="/img/joker.jpg" alt="joker"
                             class="hover:opacity-75 transition ease-in-out duration-150">
                    </a>
                </div>
                <div class="mt-8 ">
                    <a href="#">
                        <img src="/img/joker.jpg" alt="joker"
                             class="hover:opacity-75 transition ease-in-out duration-150">
                    </a>
                </div>
                <div class="mt-8 ">
                    <a href="#">
                        <img src="/img/joker.jpg" alt="joker"
                             class="hover:opacity-75 transition ease-in-out duration-150">
                    </a>
                </div>
            </div>
        </div>
    </div>
@endsection
