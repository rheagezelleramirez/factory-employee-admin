<section class="space-y-6">
    <header>
        <h2 class="text-lg font-medium text-gray-900">
            {{ __('Delete Employee') }}
        </h2>

        <p class="mt-1 text-sm text-gray-600">
            {{ __('Once the employee is deleted, all of its data will be permanently deleted.') }}
        </p>
    </header>

    <x-danger-button x-data=""
        x-on:click.prevent="$dispatch('open-modal', 'confirm-employee-deletion')">{{ __('Delete Employee') }}</x-danger-button>

    <x-modal name="confirm-employee-deletion" focusable>
        <form method="post" action="{{ route('employees.destroy', $employee->id) }}" class="p-6">
            @csrf
            @method('delete')

            <h2 class="text-lg font-medium text-gray-900">
                {{ __('Are you sure you want to delete the employee?') }}
            </h2>

            <p class="mt-1 text-sm text-gray-600">
                {{ __('Once the employee is deleted, all of its data will be permanently deleted.') }}
            </p>

            <div class="mt-6 flex justify-end">
                <x-secondary-button x-on:click="$dispatch('close')">
                    {{ __('Cancel') }}
                </x-secondary-button>

                <x-danger-button class="ms-3">
                    {{ __('Delete Employee') }}
                </x-danger-button>
            </div>
        </form>
    </x-modal>
</section>