<x-app-layout>
    <x-slot:title>Financial</x-slot:title>
    <x-slot:header>Financial Dashboard</x-slot:header>

        <a href="{{ route('transtype.index') }}" class="w-full mb-4 inline-flex items-center justify-center gap-2 px-4 py-3 text-sm font-semibold text-white bg-indigo-600 rounded-xl hover:bg-indigo-700 shadow-sm transition">
        <span class="text-lg font-bold">+</span>
        Types List
    </a>


</x-app-layout>