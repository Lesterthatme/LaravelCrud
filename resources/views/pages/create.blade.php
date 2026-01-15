<x-layout>
    <main class="h-[90vh] w-screen bg-gray-600/50">
        <form method="POST" action="{{ route('CRUD.create') }}">
            @csrf

            <input class="bg-white border" type="text" name="name">
            <input class="bg-white border" type="text" name="section">
            <input class="bg-white border" type="number" name="age">
            <button type="submit">Save</button>
        </form>
    </main>
</x-layout>
