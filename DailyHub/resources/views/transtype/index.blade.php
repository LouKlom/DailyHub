<x-app-layout>
    <x-slot:title>Transactions Type</x-slot:title>
    <x-slot:header>List of transactions types</x-slot:header>

    <a href="{{ route('transtype.create') }}" class="w-full mb-4 inline-flex items-center justify-center gap-2 px-4 py-3 text-sm font-semibold text-white bg-indigo-600 rounded-xl hover:bg-indigo-700 shadow-sm transition">
        <span class="text-lg font-bold">+</span>
        Create a new type
    </a>

    <div class="bg-white rounded-xl shadow-sm border border-gray-200 overflow-hidden mb-8">
        <table class="w-full text-left border-collapse">
            <thead class="bg-gray-50 border-b border-gray-200">
                <tr>
                    <th class="p-4 font-semibold text-sm text-gray-900">ID</th>
                    <th class="p-4 font-semibold text-sm text-gray-700">Title</th>
                    <th class="p-4 font-semibold text-sm text-gray-700 text-right">Actions</th>
                </tr>
            </thead>
            <tbody class="divide-y divide-gray-100">
                @foreach ($types as $type)
                    <tr class="hover:bg-gray-50/70 transition">
                        <td class="p-4 text-sm text-gray-900">{{$type->id}}</td>
                        <td class="p-4 font-medium text-gray-900">{{$type->name}}</td>
                        <td class="p-4 text-right">
                            
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>



</x-app-layout>