<x-app-layout>
    <form method="GET" action="{{ route('search.index') }}">
        <input 
            type="text" 
            name="search" 
            placeholder="Search..."
            value="{{ request('search') }}"
        >
        <button type="submit">Search</button>
    </form>


    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 dark:text-gray-100">
                    {{ __("You're logged in!") }}
                </div>
            </div>
        </div>
    </div>

    @if(isset($users))
        @forelse ($users as $user)
            <p>{{ $user->name }} - {{ $user->email }}</p>
        @empty
            <p>No results found</p>
        @endforelse
    @endif

</x-app-layout>
