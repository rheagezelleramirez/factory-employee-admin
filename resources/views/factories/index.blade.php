<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Factories') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 overflow-x-auto">
                    <table class="min-w-full bg-white border border-gray-200">
                        <thead>
                            <tr>
                                <th class="py-2 px-4 border-b">Factory Name</th>
                                <th class="py-2 px-4 border-b">Location</th>
                                <th class="py-2 px-4 border-b">Email</th>
                                <th class="py-2 px-4 border-b">Website</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($factories as $factory)
                                <x-table-row route="factories.edit" :id="$factory->id">
                                    <td class="py-2 px-4 border-b">{{ $factory->factory_name }}</td>
                                    <td class="py-2 px-4 border-b">{{ $factory->location }}</td>
                                    <td class="py-2 px-4 border-b">{{ $factory->email }}</td>
                                    <td class="py-2 px-4 border-b">{{ $factory->website }}</td>
                                </x-table-row>
                            @endforeach
                        </tbody>
                    </table>

                    <div class="mt-4">
                        {{ $factories->links() }}
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>