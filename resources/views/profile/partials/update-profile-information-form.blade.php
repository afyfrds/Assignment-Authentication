<form method="POST" action="{{ route('profile.update') }}" enctype="multipart/form-data" class="space-y-6">
    @csrf
    <!-- Nickname -->
    <div>
        <x-input-label for="nickname" :value="__('Nickname')" />
        <x-text-input id="nickname" name="nickname" type="text" class="mt-1 block w-full" 
            value="{{ old('nickname', $user->nickname) }}" autofocus autocomplete="nickname" />
        <x-input-error :messages="$errors->get('nickname')" class="mt-2" />
    </div>

    <!-- Avatar -->
    <div>
        <x-input-label for="avatar" :value="__('Avatar')" />
        <input id="avatar" name="avatar" type="file" class="mt-1 block w-full" />
        @if($user->avatar)
            <img src="{{ asset('storage/' . $user->avatar) }}" alt="Avatar" class="mt-2 w-16 h-16 rounded-full">
        @endif
        <x-input-error :messages="$errors->get('avatar')" class="mt-2" />
    </div>

    <!-- Email -->
    <div>
        <x-input-label for="email" :value="__('Email')" />
        <x-text-input id="email" name="email" type="email" class="mt-1 block w-full"
            value="{{ old('email', $user->email) }}" autocomplete="email" />
        <x-input-error :messages="$errors->get('email')" class="mt-2" />
    </div>

    <!-- Phone -->
    <div>
        <x-input-label for="phone" :value="__('Phone')" />
        <x-text-input id="phone" name="phone" type="text" class="mt-1 block w-full"
            value="{{ old('phone', $user->phone) }}" autocomplete="tel" />
        <x-input-error :messages="$errors->get('phone')" class="mt-2" />
    </div>

    <!-- City -->
    <div>
        <x-input-label for="city" :value="__('City')" />
        <x-text-input id="city" name="city" type="text" class="mt-1 block w-full"
            value="{{ old('city', $user->city) }}" autocomplete="address-level2" />
        <x-input-error :messages="$errors->get('city')" class="mt-2" />
    </div>

    <div>
        <x-primary-button>
            {{ __('Update Profile') }}
        </x-primary-button>
    </div>
</form>

