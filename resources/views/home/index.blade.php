@extends('layouts.layout')

@section('title text')
    Home
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
            <x-form method="POST" action="{{ route('users.store') }}">
                <x-input initialValue="{{ old('first_name') }}" type="text" title="First name" id="firstName"
                    name='first_name' placeholder="John" />
                <x-input initialValue="{{ old('last_name') }}" type="text" title="Last name" id="lastName"
                    name='last_name' placeholder="Doe" />
                <div id="numbers">
                    <x-input class="phone-number" type="number" title="Phone number" id="number" name='numbers[]'
                        placeholder="380987654321" />
                </div>
                <div>
                    <button type="button" class="btn btn-primary" id="add">
                        add
                    </button>
                </div>

                <div class="mt-4">
                    <x-button type="submit" class="btn-success">Create</x-button>
                </div>
            </x-form>
        </div>
        <x-users :users="$users" />
        <x-paginate :users="$users" />
    </x-container>
@endsection


@pushOnce('js')
    <script src="/js/validation.js"></script>
    <script src="/js/add.js"></script>
@endPushOnce
