<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                    <p>Welcome {{ Auth::user()->name }}</p>
                    {{ __("You're logged in!") }}<br>
                    {!! __("Klik <a href='" . route('public.home') . "' style='color: blue;'>link</a> ini untuk memulai proses pendaftaran diri di SMK CINTA KASIH TZU CHI") !!}<br>
                    <!-- {!! __("Pelajari Materi ini pada <a href='" . route('public.home') . "' style='color: blue;'>link</a> ini untuk mempersiapkan diri mengikuti tes masuk kemudian ikuti tes") !!}
                    {!! __("Ikuti panduan mengikuti tes pada <a href='" . route('public.home') . "' style='color: blue;'>halaman link</a> berikut") !!}
                    {!! __("Klik <a href='" . route('public.home') . "' style='color: blue;'>link</a> ini untuk memngikuti tes masuk") !!} -->
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
