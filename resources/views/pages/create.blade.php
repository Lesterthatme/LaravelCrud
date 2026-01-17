<x-layout>
    <main class="h-[90vh] w-screen bg-gray-600/50">
        <form method="POST" action="{{ route('CRUD.create') }}">
            @csrf
            <label for="name">Enter a Name:</label>
            <input class="bg-white border" id="name" type="text" name="name">

            <br>
            <label for="">Enter a Section:</label>

            <input class="bg-white border" type="text" name="section">

            <br>
            <label for="">Enter Age:</label>
            <input class="bg-white border" type="number" name="age">

            <br>
            <button type="submit" class="cursor-pointer border bg-white p-2">Save</button>
        </form>
    </main>
</x-layout>
