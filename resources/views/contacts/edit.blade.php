@extends('layouts.layout')

@section('title text')
    Contact edit
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
            <x-form method="PATCH" action="{{ route('contacts.update', ['contact' => $contact->id]) }}">
                <x-input class="phone-number" initialValue="{{ !!$contact ? $contact->number : '' }}" type="number"
                    title="Phone number" id="number" name='number' placeholder="380987654321" />
                <div class="mt-4">
                    <x-button type="submit" class="btn-success">Edit</x-button>
                </div>

            </x-form>
        </div>
    </x-container>
@endsection


@pushOnce('js')
    <script src="/js/phone-validation.js"></script>
@endPushOnce
