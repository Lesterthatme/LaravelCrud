<x-layout>
    <main class="h-[90vh] w-screen bg-gray-600/50 pt-10">

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
                            <button
                                class="border bg-blue-200 p-2 font-semibold rounded-xl cursor-pointer">Update</button>
                            <button
                                class="border bg-blue-200 p-2 font-semibold rounded-xl cursor-pointer">Delete</button>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>


    </main>
</x-layout>
