<section class="space-y-6">
    <header>
        <h2 class="text-lg font-medium text-gray-900">
            {{ __('Delete Factory') }}
        </h2>

        <p class="mt-1 text-sm text-gray-600">
            {{ __('Once the factory is deleted, all of its data will be permanently deleted.') }}
        </p>
    </header>

    <x-danger-button x-data=""
        x-on:click.prevent="$dispatch('open-modal', 'confirm-factory-deletion')">{{ __('Delete Factory') }}</x-danger-button>

    <x-modal name="confirm-factory-deletion" :show="$errors->userDeletion->isNotEmpty()" focusable>
        <form method="post" action="{{ route('factories.destroy', $factory->id) }}" class="p-6">
            @csrf
            @method('delete')

            <h2 class="text-lg font-medium text-gray-900">
                {{ __('Are you sure you want to delete the factory?') }}
            </h2>

            <p class="mt-1 text-sm text-gray-600">
                {{ __('Once the factory is deleted, all of its data will be permanently deleted.') }}
            </p>

            <div class="mt-6 flex justify-end">
                <x-secondary-button x-on:click="$dispatch('close')">
                    {{ __('Cancel') }}
                </x-secondary-button>

                <x-danger-button class="ms-3">
                    {{ __('Delete Factory') }}
                </x-danger-button>
            </div>
        </form>
    </x-modal>
</section>