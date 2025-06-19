<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Profile') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8 space-y-6">
            <div class="p-4 sm:p-8 bg-white dark:bg-gray-800 shadow sm:rounded-lg">
                <div class="max-w-xl">
                    @include('profile.partials.update-profile-information-form')
                </div>
            </div>

            <div class="p-4 sm:p-8 bg-white dark:bg-gray-800 shadow sm:rounded-lg">
                <div class="max-w-xl">
                    @include('profile.partials.update-password-form')
                </div>
            </div>

            <div class="p-4 sm:p-8 bg-white dark:bg-gray-800 shadow sm:rounded-lg">
                <div class="max-w-xl">
                    @include('profile.partials.delete-user-form')
                </div>
            </div>
        </div>
    </div>

<form method="POST" action="{{ route('profile.destroy') }}">
    @csrf
    <button type="submit" onclick="return confirm('Delete account?')">Delete Account</button>
</form>

@php
    $canCreate = auth()->user()->roles()
        ->join('role_permissions', 'user_roles.RoleID', '=', 'role_permissions.RoleID')
        ->where('role_permissions.Description', 'Create')->exists();
@endphp

@if($canCreate)
    <a href="{{ route('todos.create') }}" class="btn btn-primary">New Task</a>
@endif


</x-app-layout>
