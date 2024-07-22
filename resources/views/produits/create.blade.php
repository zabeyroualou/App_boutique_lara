@extends('dashboard')
@section('contenu')
<div class="isolate bg-white px-6 py-24 sm:py-32 lg:px-8">
    <div class="absolute inset-x-0 top-[-10rem] -z-10 transform-gpu overflow-hidden blur-3xl sm:top-[-20rem]" aria-hidden="true">
        <div class="relative left-1/2 -z-10 aspect-[1155/678] w-[36.125rem] max-w-none -translate-x-1/2 rotate-[30deg] bg-gradient-to-tr from-[#ff80b5] to-[#9089fc] opacity-30 sm:left-[calc(50%-40rem)] sm:w-[72.1875rem]" style="clip-path: polygon(74.1% 44.1%, 100% 61.6%, 97.5% 26.9%, 85.5% 0.1%, 80.7% 2%, 72.5% 32.5%, 60.2% 62.4%, 52.4% 68.1%, 47.5% 58.3%, 45.2% 34.5%, 27.5% 76.7%, 0.1% 64.9%, 17.9% 100%, 27.6% 76.8%, 76.1% 97.7%, 74.1% 44.1%)"></div>
    </div>
    <div class="mx-auto max-w-2xl text-center">
        <h2 class="text-3xl font-bold tracking-tight text-gray-900 sm:text-4xl">Ajout produits</h2>
        {{-- <p class="mt-2 text-lg leading-8 text-gray-600">Please ! Register us.</p> --}}
    </div>
    <form action="{{ route('save')}}" method="POST" class="mx-auto mt-16 max-w-xl sm:mt-20">
        {{ csrf_field() }}
        <div class="grid grid-cols-1 gap-x-8 gap-y-6 sm:grid-cols-2">
            <div class="sm:col-span-1">
                <label for="name" class="block text-sm font-semibold leading-6 text-gray-900">Code</label>
                <div class="mt-2.5">
                <input type="text" name="code" id="name" autocomplete="organization" class="block w-full rounded-md border-0 px-3.5 py-2 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6" placeholder="Apple">
                </div>
            </div>
            <div class="sm:col-span-1">
                <label for="name" class="block text-sm font-semibold leading-6 text-gray-900">Name</label>
                <div class="mt-2.5">
                <input type="text" name="nom" id="name" autocomplete="organization" class="block w-full rounded-md border-0 px-3.5 py-2 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6" placeholder="Apple Mac">
                </div>
            </div>

            <div class="sm:col-span-1">
                <label for="email" class="block text-sm font-semibold leading-6 text-gray-900">Quantite</label>
                <div class="mt-2.5">
                <input type="number" name="quantite" id="email" autocomplete="organization" class="block w-full rounded-md border-0 px-3.5 py-2 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6" placeholder="stock">
                </div>
            </div>
            <div class="sm:col-span-1">
                <label for="email" class="block text-sm font-semibold leading-6 text-gray-900">Prix</label>
                <div class="mt-2.5">
                <input type="number" name="prix" id="email" autocomplete="organization" class="block w-full rounded-md border-0 px-3.5 py-2 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6" placeholder="$250">
                </div>
            </div>

            <div class="sm:col-span-2">
                <label for="password" class="block text-sm font-semibold leading-6 text-gray-900">Categorie</label>
                <div class="mt-2.5">
                {{-- <input type="text" name="password" id="password" autocomplete="organization"  class="block w-full rounded-md border-0 px-3.5 py-2 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6"ss="block w-full rounded-md border-0 px-3.5 py-2 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6" placeholder=""> --}}
                <select name="categorie_id" id="password" class="block w-full rounded-md border-0 px-3.5 py-2 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6"ss="block w-full rounded-md border-0 px-3.5 py-2 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6" @selected(true)>
                    @foreach ($categorie as $cat)
                        <option value="{{ $cat->id}}">{{$cat->id}} {{ $cat->nom }}</option>
                    @endforeach
                </select>
                </div>
            </div>
            <div class="sm:col-span-2">
                <label for="confirm" class="block text-sm font-semibold leading-6 text-gray-900">Description</label>
                <div class="mt-2.5">
                <textarea name="description" id="confirm" cols="30" rows="10" class="block w-full rounded-md border-0 px-3.5 py-2 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6" placeholder="Details"></textarea>
                {{-- <input type="password" name="confirm-password" id="confirm" autocomplete="organization" class="block w-full rounded-md border-0 px-3.5 py-2 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6" placeholder="confirm password"> --}}
                </div>
            </div>
        </div>
        <br> <br>
        <div class=" flex items-center justify-between">
            <x-secondary-button >
                <a href="{{ route('produits')}}">
                    {{ __('Retour') }}
                </a>
            </x-secondary-button>
            <x-primary-button wire:submit="create">
                {{ __('Register') }}
            </x-primary-button>
        </div>
    </form>
</div>
@endsection
