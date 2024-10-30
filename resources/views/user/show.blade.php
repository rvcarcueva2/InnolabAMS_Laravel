@extends('dashboard') <!-- Use the dashboard layout -->

@section('content') <!-- Define the content section -->
    <h1 class="text-2xl font-semibold mb-4 mx-4 my-4">Users</h1>
    <div class="overflow-x-auto mx-4">
        <table class="min-w-full bg-white border border-gray-300 rounded-lg shadow-md">
            <thead>
                <tr class="bg-gray-200 text-gray-700">
                    <th class="py-4 px-6 border-b text-left text-lg">ID</th>
                    <th class="py-4 px-6 border-b text-left text-lg">Name</th>
                    <th class="py-4 px-6 border-b text-left text-lg">Email</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($users as $user)
                    <tr class="hover:bg-gray-100 transition-colors">
                        <td class="py-4 px-6 border-b text-gray-700 text-lg">{{ $user->id }}</td>
                        <td class="py-4 px-6 border-b text-gray-700 text-lg">{{ $user->name }}</td>
                        <td class="py-4 px-6 border-b text-gray-700 text-lg">{{ $user->email }}</td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@endsection
