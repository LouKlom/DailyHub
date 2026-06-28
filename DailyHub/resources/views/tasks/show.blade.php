<x-app-layout>
    <x-slot:title>Task N°{{$task->id}}</x-slot:title>
    <x-slot:header>Task N°{{$task->id}}</x-slot:header>

    <div class="max-w-3xl space-y-6">
        <div class="bg-white rounded-xl shadow-sm border border-gray-200 p-6 md:p-8">
            <div class="flex flex-col sm:flex-row sm:items-center justify-between gap-4 border-b border-gray-100 pb-6">
                <div>
                    <span class="text-xs font-bold text-indigo-600 uppercase tracking-wider">Title</span>
                    <h2 class="text-2xl font-bold text-gray-900 mt-1">{{ $task->title }}</h2>
                </div>

                <div>
                    @if($task->active)
                        <span class="inline-flex items-center gap-1.5 py-1.5 px-3 rounded-full text-xs font-semibold bg-emerald-50 text-emerald-700 border border-emerald-200">
                            <span class="w-1.5 h-1.5 rounded-full bg-emerald-500"></span>
                            Active Task
                        </span>
                    @else
                        <span class="inline-flex items-center gap-1.5 py-1.5 px-3 rounded-full text-xs font-semibold bg-gray-100 text-gray-600 border border-gray-200">
                            <span class="w-1.5 h-1.5 rounded-full bg-gray-400"></span>
                            Archived / Completed
                        </span>
                    @endif
                </div>
            </div>

            <div class="pt-6 space-y-6">
                <div>
                    <span class="text-xs font-bold text-gray-400 uppercase tracking-wider">Description</span>
                    <div class="mt-2 text-gray-700 text-sm leading-relaxed bg-gray-50/50 p-4 rounded-lg border border-gray-100 whitespace-pre-line">
                        {{ $task->description ?? 'No description provided for this task.' }}
                    </div>
                </div>

                <div class="flex items-center gap-2 text-sm text-gray-500 pt-2">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-4 h-4 text-gray-400">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M6.75 3v2.25M17.25 3v2.25M3 18.75V7.5a2.25 2.25 0 0 1 2.25-2.25h13.5A2.25 2.25 0 0 1 21 7.5v11.25m-18 0A2.25 2.25 0 0 0 5.25 21h13.5A2.25 2.25 0 0 0 21 18.75m-18 0v-7.5A2.25 2.25 0 0 1 5.25 9h13.5A2.25 2.25 0 0 1 21 11.25v7.5" />
                    </svg>
                    <span>Created on : <strong class="font-medium text-gray-700">{{ $task->creationDate }}</strong></span>
                </div>
            </div>

        </div>

        <div class="flex items-center justify-between border-t border-gray-200 pt-6">
            <a href="{{ route('tasks.index') }}" class="inline-flex items-center gap-2 px-5 py-2.5 text-sm bg-white text-gray-700 font-semibold rounded-lg border border-gray-300 hover:bg-gray-50 hover:text-gray-900 shadow-sm transition">
                <span class="text-base font-bold">&larr;</span>
                Back to list
            </a>
            
            <a href="{{ route('tasks.edit', $task) }}" class="inline-flex items-center gap-2 px-5 py-2.5 text-sm bg-indigo-600 text-white font-semibold rounded-lg hover:bg-indigo-700 shadow-sm transition">
                <span class="text-sm font-bold">✏️</span>
                Edit Task
            </a>
        </div>

    </div>
</x-app-layout>