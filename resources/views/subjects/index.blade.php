<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Subjects') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="mb-10 py-8 px-4">
                    <h1 class="float-left">Subjects</h2>
                    <a href="{{ url('/subjects/create') }}" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded float-right">Create subject</a>
                </div>

                
                @foreach ($subjects as $subject)
                    <div class="py-6 px-4 mt-4 shadow-sm grid grid-cols-4">
                        <h1 class="font-bold">{{$subject->subjectCode}}: {{ $subject->name }}</h1>
                        <p>{{ $subject->description }}</p>
                        <p>Max points: {{ $subject->maxPoints }}</p>
                        <form method="post" action="{{ url("/subjects/{$subject->id}") }}"  style="justify-self: end;">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="w-20 bg-red-500 hover:bg-red-700 text-white font-bold py-2 px-4 rounded">delete</button>
                        </form>
                    </div>
                @endforeach

            </div>
        </div>
    </div>
</x-app-layout>