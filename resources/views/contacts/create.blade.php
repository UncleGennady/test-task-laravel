@extends('layouts.layout')

@section('title text')
    Contact create
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
            <x-form method="POST" action="{{ route('contacts.store') }}">
                <x-input class="phone-number" type="number" title="Phone number" id="number" name='number'
                    placeholder="380987654321" />
                @if (request()->user)
                    <input type="hidden" name="user_id" id="user_id" value="{{ request()->user }}" />
                @endif

                <div class="mt-4">
                    <x-button type="submit" class="btn-success">Add</x-button>
                </div>

            </x-form>
        </div>
    </x-container>
@endsection


@pushOnce('js')
    <script src="/js/phone-validation.js"></script>
@endPushOnce
