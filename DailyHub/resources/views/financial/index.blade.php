<x-app-layout>
    <x-slot:title>Financial</x-slot:title>
    <x-slot:header>Financial Dashboard</x-slot:header>

    <div class="space-y-4">
        <a href="{{ route('transtype.index') }}" class="w-full inline-flex items-center justify-center gap-2 px-4 py-3 text-sm font-semibold text-gray-700 bg-white border border-gray-300 rounded-xl hover:bg-gray-50 hover:text-gray-900 shadow-sm transition">
            <span class="text-base">⚙️</span>
            Manage Transaction Types
        </a>

        <div class="grid grid-cols-2 gap-4">
            <a href="#" class="inline-flex items-center justify-center gap-2 px-4 py-4 text-sm font-bold text-white bg-emerald-600 rounded-xl hover:bg-emerald-700 shadow-sm transition">
                <span class="text-lg">➕</span>
                Add Income
            </a>

            <a href="#" class="inline-flex items-center justify-center gap-2 px-4 py-4 text-sm font-bold text-white bg-rose-600 rounded-xl hover:bg-rose-700 shadow-sm transition">
                <span class="text-lg">➖</span>
                Add Expense
            </a>
        </div>
    </div>

</x-app-layout>