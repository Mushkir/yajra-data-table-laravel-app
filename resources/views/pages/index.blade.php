@extends('layouts.home')
@section('content')
    <div class="max-w-5xl mx-auto bg-white p-6 rounded-lg shadow-md mt-10">
        <h2 class="text-2xl font-bold mb-4">User List</h2>
        <div class="overflow-x-auto">
            <table class="min-w-full border border-gray-300" id="myTable">
                <thead class="bg-gray-200">
                    <tr>
                        <th class="py-2 px-4 border-b text-left">#</th>
                        <th class="py-2 px-4 border-b text-left">Name</th>
                        <th class="py-2 px-4 border-b text-left">Email</th>
                        <th class="py-2 px-4 border-b text-left">Actions</th>
                    </tr>
                </thead>
                <tbody class="divide-y divide-gray-100">
                    @forelse ($users as $user)
                        <tr class="hover:bg-gray-50">
                            <td class="py-2 px-4">{{ $user['id'] }}</td>
                            <td class="py-2 px-4">{{ $user['name'] }}</td>
                            <td class="py-2 px-4">{{ $user['email'] }}</td>
                            <td class="py-2 px-4 space-x-2">
                                <button
                                    class="bg-blue-500 hover:bg-blue-600 text-white px-3 py-1 text-sm rounded">Edit</button>
                                <button
                                    class="bg-red-500 hover:bg-red-600 text-white px-3 py-1 text-sm rounded">Delete</button>
                            </td>
                        </tr>
                    @empty
                        <tr>
                            <td colspan="4" class="py-2 px-4 text-center">No users
                                found.</td>
                        </tr>
                    @endforelse
                </tbody>
            </table>
        </div>
    </div>

    <script src="https://code.jquery.com/jquery-3.7.1.min.js"
        integrity="sha256-/JqT3SQfawRcv/BIHPThkBvs0OEvtFFmqPF/lYI/Cxo=" crossorigin="anonymous"></script>
    <script src="https://cdn.datatables.net/2.3.2/js/dataTables.min.js"></script>
    <script>
        $(document).ready(function() {
            $('#myTable').DataTable();
        });
    </script>
@endsection
