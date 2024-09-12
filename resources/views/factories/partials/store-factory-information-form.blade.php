<section>
    <header>
        <h2 class="text-lg font-medium text-gray-900">
            {{ __('Factory Information') }}
        </h2>

        <p class="mt-1 text-sm text-gray-600">
            {{ __("Ensure that all information is correct and up-to-date.") }}
        </p>
    </header>

    <form method="post" action="{{ route('factories.store') }}" class="mt-6 space-y-6">
        @csrf

        <div>
            <x-input-label for="factory_name" :value="__('Factory Name')" />
            <x-text-input id="factory_name" name="factory_name" type="text" class="mt-1 block w-full"
                :value="old('factory_name')" required autofocus autocomplete="factory_name" />
            <x-input-error class="mt-2" :messages="$errors->get('factory_name')" />
        </div>

        <div>
            <x-input-label for="location" :value="__('Location')" />
            <x-text-input id="location" name="location" type="text" class="mt-1 block w-full" :value="old('location')"
                required autofocus autocomplete="location" />
            <x-input-error class="mt-2" :messages="$errors->get('location')" />
        </div>

        <div>
            <x-input-label for="email" :value="__('Email')" />
            <x-text-input id="email" name="email" type="text" class="mt-1 block w-full" :value="old('email')" autofocus
                autocomplete="email" />
            <x-input-error class="mt-2" :messages="$errors->get('email')" />
        </div>

        <div>
            <x-input-label for="website" :value="__('Website')" />
            <x-text-input id="website" name="website" type="text" class="mt-1 block w-full" :value="old('website')"
                autofocus autocomplete="website" />
            <x-input-error class="mt-2" :messages="$errors->get('website')" />
        </div>

        <div class="flex items-center gap-4">
            <x-primary-button>{{ __('Save') }}</x-primary-button>
        </div>
    </form>
</section>