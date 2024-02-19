@extends('layouts.layout')

@section('title text')
    User name edit
@endsection

@section('body')
    <x-container>
        <x-errors />
        @if (session('status'))
            <x-notification type="success">
                {{ session('status') }}
            </x-notification>
        @endif
        <div class=" d-flex justify-content-center pb-5 pt-5">
            <x-form method="PATCH" action="{{ route('users.update', ['user' => $user->id]) }}">
                <x-input initialValue="{{ !!$user ? $user->first_name : '' }}" type="text" title="First name" id="firstName"
                    name='first_name' placeholder="John" />
                <x-input initialValue="{{ !!$user ? $user->last_name : '' }}" type="text" title="Last name"
                    id="lastName" name='last_name' placeholder="Doe" />

                <div class="mt-4">
                    <x-button type="submit" class="btn-success">Edit</x-button>
                </div>
            </x-form>
        </div>
    </x-container>
@endsection


@pushOnce('js')
    <script src="/js/name-validation.js"></script>
@endPushOnce
