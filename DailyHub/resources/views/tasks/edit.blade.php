<x-app-layout>
    <x-slot:title>Task Edit</x-slot:title>
    <x-slot:header>Editing Task N°{{$task->id}}</x-slot:header>

    <div class="max-w-2xl bg-white rounded-xl shadow-sm border border-gray-200 p-6">
        <form action="{{ route('tasks.update', $task) }}" method="POST" class="space-y-6">
            @csrf
            <div>
                <label for="title" class="block text-sm font-medium text-gray-700 mb-1">
                    Task Title
                </label>
                <input 
                    type="text" 
                    name="title" 
                    id="title" 
                    value=" {{ old('title', $task->title) }}"
                    placeholder="e.g., Buy groceries, Finish report..."
                    required
                    class="w-full px-4 py-2.5 bg-gray-50 border border-gray-300 rounded-lg text-gray-900 text-sm focus:ring-2 focus:ring-indigo-500 focus:border-indigo-500 focus:bg-white outline-none transition"
                >
            </div>

            <div>
                <label for="description" class="block text-sm font-medium text-gray-700 mb-1">
                    Description <span class="text-gray-400 font-normal">(Optional)</span>
                </label>
                <textarea 
                    name="description" 
                    id="description"
                    rows="4" 
                    placeholder="Add some details about this task..."
                    class="w-full px-4 py-2.5 bg-gray-50 border border-gray-300 rounded-lg text-gray-900 text-sm focus:ring-2 focus:ring-indigo-500 focus:border-indigo-500 focus:bg-white outline-none transition resize-none"
                >{{ old('description', $task->description) }}</textarea>
            </div>

            <div class="flex items-center justify-end gap-3 border-t border-gray-100 pt-6">
                <a href="{{ route('tasks.index') }}" class="px-5 py-2.5 text-sm bg-white text-gray-700 font-semibold rounded-lg border border-gray-300 hover:bg-gray-50 hover:text-gray-900 shadow-sm transition text-center">
                    Cancel
                </a>
                
                <button type="submit" class="px-5 py-2.5 text-sm bg-indigo-600 text-white font-semibold rounded-lg hover:bg-indigo-700 shadow-sm transition">
                    Validate
                </button>
            </div>
        </form>
    </div>
</x-app-layout>