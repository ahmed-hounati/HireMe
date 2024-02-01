@extends('layouts.app')

@section('title')
    Home
@endsection

@section('app')
    <div class="bg-white shadow dark:bg-gray-800">
        <div class="container flex items-center justify-center p-6 mx-auto text-gray-600 capitalize dark:text-gray-300">
            <h1
                class="text-gray-800 transition-colors duration-300 transform dark:text-gray-200 border-b-2 border-blue-500 mx-1.5 sm:mx-6">
                home</h1>
        </div>
    </div>
    <section>
        <div class="container px-6 py-10 mx-auto">
            <a href="/services/create"
                class="bg-blue-500 text-white py-2 px-4 rounded hover:bg-blue-600 fixed bottom-4 right-4"><i
                    class="fa-solid fa-plus fa-xl"></i></a>
            <h1 class="text-2xl font-semibold text-center text-gray-800 capitalize lg:text-3xl dark:text-white">
            </h1>
            <div class="grid grid-cols-1 gap-8 mt-8 xl:mt-12 xl:gap-16 md:grid-cols-2 xl:grid-cols-3">
                @foreach ($services as $service)
                    <div
                        class="flex flex-col items-center p-6 space-y-3 text-center bg-gray-100 rounded-xl dark:bg-gray-800">
                        <h3 class="text-xl font-bold text-white mt-4">Categorie : {{ $service->Categorie->title }}</h3>
                        <p class="text-gray-500 dark:text-gray-300"> creation date :
                            {{ $service->created_at->format('d-m-y') }}
                        </p>
                        <h1 class="text-xl font-semibold text-gray-700 capitalize dark:text-white">Service : {{ $service->title }}
                        </h1>
                        <p class="text-gray-500 dark:text-gray-300">
                            {{ $service->description }}
                        </p>
                        <p class="text-gray-500 dark:text-gray-300">
                            {{ $service->email }}
                        </p>
                        <p class="text-gray-500 dark:text-gray-300"> Price :
                            {{ $service->price }}dh
                        </p>
                    </div>
                @endforeach
            </div>
        </div>
    </section>
@endsection
