<x-app-layout>
    <x-slot:title>Tasks</x-slot:title>
    <x-slot:header>Tasks list</x-slot:header>

    <a href="{{ route('tasks.create') }}" class="w-full mb-4 inline-flex items-center justify-center gap-2 px-4 py-3 text-sm font-semibold text-white bg-indigo-600 rounded-xl hover:bg-indigo-700 shadow-sm transition">
        <span class="text-lg font-bold">+</span>
        Create a new task
    </a>

    <div class="bg-white rounded-xl shadow-sm border border-gray-200 overflow-hidden mb-8">
        <table class="w-full text-left border-collapse">
            <thead class="bg-gray-50 border-b border-gray-200">
                <tr>
                    <th class="p-4 font-semibold text-sm text-gray-900">ID</th>
                    <th class="p-4 font-semibold text-sm text-gray-700">Title</th>
                    <th class="p-4 font-semibold text-sm text-gray-700">Created at</th>
                    <th class="p-4 font-semibold text-sm text-gray-700 text-right">Actions</th>
                </tr>
            </thead>
            <tbody class="divide-y divide-gray-100">
                @foreach ($activeTasks as $task)
                    <tr class="hover:bg-gray-50/70 transition">
                        <td class="p-4 text-sm text-gray-900">{{$task->id}}</td>
                        <td class="p-4 font-medium text-gray-900">{{$task->title}}</td>
                        <td class="p-4 text-sm text-gray-500">{{$task->creationDate}}</td>
                        <td class="p-4 text-right">
                            <div class="inline-flex gap-1.5">
                            <a href="{{ route('tasks.show', $task) }}">
                                <button title="See" class="p-2 bg-slate-100 text-slate-600 rounded-lg hover:bg-slate-200 transition text-xs font-medium">
                                    See More
                                </button>
                            </a>
                                <button title="Edit" class="p-2 bg-indigo-50 text-indigo-600 rounded-lg hover:bg-indigo-100 transition text-xs font-medium">
                                    Edit
                                </button>
                                <form method="POST" action="{{ route('tasks.finish', $task) }}">
                                    @csrf
                                    @method("PUT")
                                    <button title="Finish" class="p-2 bg-rose-50 text-rose-600 rounded-lg hover:bg-rose-100 transition text-xs font-medium">
                                        Finish
                                    </button>
                                </form>
                            </div>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>



        <div class="bg-white rounded-xl shadow-sm border border-gray-200 overflow-hidden mb-8">
        <table class="w-full text-left border-collapse">
            <thead class="bg-gray-50 border-b border-gray-200">
                <tr>
                    <th class="p-4 font-semibold text-sm text-gray-900">ID</th>
                    <th class="p-4 font-semibold text-sm text-gray-700">Title</th>
                    <th class="p-4 font-semibold text-sm text-gray-700">Created at</th>
                    <th class="p-4 font-semibold text-sm text-gray-700 text-right">Actions</th>
                </tr>
            </thead>
            <tbody class="divide-y divide-gray-100">
                @foreach ($inactiveTasks as $task)
                    <tr class="hover:bg-gray-50/70 transition">
                        <td class="p-4 text-sm text-gray-900">{{$task->id}}</td>
                        <td class="p-4 font-medium text-gray-900">{{$task->title}}</td>
                        <td class="p-4 text-sm text-gray-500">{{$task->creationDate}}</td>
                        <td class="p-4 text-right">
                            <div class="inline-flex gap-1.5">
                                <form method="POST" action="{{ route('tasks.finish', $task) }}">
                                    @csrf
                                    @method("PUT")
                                    <button title="Supprimer" class="p-2 bg-slate-100 text-slate-600 rounded-lg hover:bg-slate-200 transition text-xs font-medium">
                                        Reactivate
                                    </button>
                                </form>
                                <form method="POST" action="{{ route('tasks.destroy', $task) }}">
                                    @csrf
                                    @method("PUT")
                                    <button title="Delete" class="p-2 bg-rose-50 text-rose-600 rounded-lg hover:bg-rose-100 transition text-xs font-medium">
                                        Delete
                                    </button>
                                </form>
                            </div>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>


</x-app-layout>