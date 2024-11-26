<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="flex flex-col bg-white border shadow-sm rounded-xl dark:bg-neutral-900 dark:border-neutral-700 dark:shadow-neutral-700/70">
            <div class="bg-gray-100 border-b rounded-t-xl py-3 px-4 md:py-4 md:px-5 dark:bg-neutral-900 dark:border-neutral-700">
                <p class="mt-3 text-lg text-gray-500 dark:text-neutral-500">
                Add new teacher
                </p>
            </div>
            @if(Session::has('message'))
                <div>
                    <p class="ml-4 text-sm mt-3 text-gray-500 dark:text-neutral-500">{{ Session::get('message') }}</p>
                </div>
            @else
                <p class="p-2 ml-4 text-sm mt-3 text-gray-500 dark:text-neutral-500">Session message not set</p>
            @endif
            <form action="{{route('guru.store')}}" method="post" enctype="multipart/form-data">
            @csrf
            @method('post')
            <div class="p-4 md:p-5">
            <div class="inline-flex items-center">
                <svg class="w-32 text-gray-500 dark:text-neutral-500" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                    <path d="M19 21v-2a4 4 0 0 0-4-4H9a4 4 0 0 0-4 4v2"></path>
                    <circle cx="12" cy="7" r="4"></circle>
                </svg>
                <input type="text" name="code_guru"  class="@error('code_guru') is-invalid @enderror ml-2 py-3 px-4 block w-full bg-gray-100 border-transparent rounded-lg text-sm focus:border-blue-500 focus:ring-blue-500 dark:bg-neutral-700 dark:text-neutral-400 dark:placeholder-neutral-500 dark:focus:ring-neutral-600" placeholder="Kode Guru">
                @error('code_guru')
                <strong class="text-sm text-red-600 ml-4">{{ $message }}</strong>
                @enderror
                <input type="text" name="nama_guru"  class="@error('nama_guru') is-invalid @enderror ml-2 py-3 px-4 block w-full bg-gray-100 border-transparent rounded-lg text-sm focus:border-blue-500 focus:ring-blue-500 dark:bg-neutral-700 dark:text-neutral-400 dark:placeholder-neutral-500 dark:focus:ring-neutral-600" placeholder="Nama Guru">
                @error('nama_guru')
                <strong class="text-sm text-red-600 ml-4">{{ $message }}</strong>
                @enderror
                <input type="number" name="no_hp"  class="@error('no_hp') is-invalid @enderror ml-2 py-3 px-4 block w-full bg-gray-100 border-transparent rounded-lg text-sm focus:border-blue-500 focus:ring-blue-500 dark:bg-neutral-700 dark:text-neutral-400 dark:placeholder-neutral-500 dark:focus:ring-neutral-600" placeholder="Nomor HP">
                @error('no_hp')
                <strong class="text-sm text-red-600 ml-4">{{ $message }}</strong>
                @enderror
                <button type="submit" class="ml-4 text-sm font-semibold rounded-lg border border-blue-600 text-white bg-blue-700 disabled:opacity-50 disabled:pointer-events-none">
                Submit
                </button>   
            </div>    
            </form>      
            </div>
            </div>
        </div>
    </div>
</x-app-layout>
