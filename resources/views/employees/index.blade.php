<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Employees') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="flex items-center px-6 pt-4">
                    <x-primary-button
                        onclick="window.location='{{ route('employees.create') }}'">{{ __('Create Employee') }}</x-primary-button>
                </div>
                <div class="px-6 pt-5 text-gray-900 overflow-x-auto">
                    <table class="min-w-full bg-white border border-gray-200">
                        <thead>
                            <tr>
                                <th class="py-2 px-4 border-b">First Name</th>
                                <th class="py-2 px-4 border-b">Last Name</th>
                                <th class="py-2 px-4 border-b">Factory</th>
                                <th class="py-2 px-4 border-b">Email</th>
                                <th class="py-2 px-4 border-b">Phone</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($employees as $employee)
                            <x-table-row route="employees.edit" :id="$employee->id">
                                <td class="py-2 px-4 border-b">{{ $employee->firstname }}</td>
                                <td class="py-2 px-4 border-b">{{ $employee->lastname }}</td>
                                <td class="py-2 px-4 border-b">{{ $employee->factory_name }}</td>
                                <td class="py-2 px-4 border-b">{{ $employee->email }}</td>
                                <td class="py-2 px-4 border-b">{{ $employee->phone }}</td>
                            </x-table-row>
                            @endforeach
                        </tbody>
                    </table>

                    <div class="mt-4">
                        {{ $employees->links() }}
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>