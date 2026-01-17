<x-layout>

    <main class="h-[90vh] w-screen bg-gray-600/50">
        @if (session('info'))
            <div class="bg-green-100 border-l-4 border-red-500 text-white-700 p-4 mb-4" role="alert">
                <p class="font-bold">NO changes made!</p>
                <p>{{ session('success') }}</p>
            </div>
        @endif
        <form method="POST" action="{{ route('CRUD.edit.save', $user->id) }}">
            @csrf
            @method('PUT')

            <label for="name">Enter a Name:</label>
            <input class="bg-white border" id="name" type="text" name="name" value="{{ $user->name }}">

            <br>
            <label for="">Enter a Section:</label>

            <input class="bg-white border" type="text" name="section" value="{{ $user->section }}">

            <br>
            <label for="">Enter Age:</label>
            <input class="bg-white border" type="number" name="age" value="{{ $user->age }}">

            <br>
            <button type="submit" class="cursor-pointer border bg-white p-2">Save</button>
        </form>
    </main>
</x-layout>
