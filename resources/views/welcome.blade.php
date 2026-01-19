<x-layout>
    <main class="h-[90vh] w-screen bg-gray-600/50 pt-10">
        @if (session('success'))
            <div class="bg-green-100 border-l-4 border-green-500 text-green-700 p-4 mb-4" role="alert">
                <p class="font-bold">Success!</p>
                <p>{{ session('success') }}</p>
            </div>
        @endif

        <table class="border border-collapse w-screen  table-auto">
            <thead>
                <tr>
                    <th class="border">ID</th>
                    <th class="border">Name</th>
                    <th class="border">Section</th>
                    <th class="border">Age</th>
                    <th class="border">Action</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($data as $user)
                    <tr>
                        <td class="border">{{ $user->id }}</td>
                        <td class="border">{{ $user->name }}</td>
                        <td class="border">{{ $user->section }}</td>
                        <td class="border">{{ $user->age }}</td>
                        <td class="border flex justify-center gap-2">
                            <button class="border bg-blue-200 p-2 font-semibold rounded-xl cursor-pointer">
                                <a href="{{ route('CRUD.edit', $user->id) }}">Update</a></button>
                            
                                <form action="{{ route('CRUD.delete', $user->id) }}" method="POST">
                                    @csrf
                                    @method('DELETE')
                                    <button class="border bg-blue-200 p-2 font-semibold rounded-xl cursor-pointer" type="submit">Delete</button>
                                </form>
                            
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>


    </main>
</x-layout>
