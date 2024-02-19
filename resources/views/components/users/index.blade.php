@props(['users' => null])

@if ($users)
    <ul class="row list-unstyled">
        @foreach ($users as $user)
            <li class="col-sm-12 col-md-6 col-lg-4 col-xl-3 p-2 m-0 border border-black">
                <div>
                    <div class="mb-2 pb-2 border-bottom border-black d-flex gap-3">
                        <p class="m-0">
                            <span class=" fw-bold text-success">
                                Full name:
                            </span>
                            {{ $user->fullName }}
                        </p>
                        <div>
                            <x-link.button href="{{ route('users.edit', ['user' => $user->id]) }}" class="btn-primary">
                                edit
                            </x-link.button>
                        </div>
                        <div>
                            <x-form action="{{ route('users.destroy', ['user' => $user->id]) }}" method="DELETE">
                                <x-button class="btn-danger" type="submit">
                                    Delete
                                </x-button>
                            </x-form>

                        </div>
                    </div>
                    <ul class="list-unstyled ps-1">
                        @foreach ($user->contacts as $contact)
                            <li>
                                <div class="mb-2 d-flex gap-2">
                                    <p class="m-0">
                                        <span class=" fw-bold text-success">
                                            number:
                                        </span>
                                        {{ $contact->number }}
                                    </p>
                                    <div>
                                        <x-link.button href="{{ route('contacts.edit', ['contact' => $contact->id]) }}"
                                            class="btn-primary">
                                            edit
                                        </x-link.button>
                                    </div>
                                    <div>
                                        <x-form action="{{ route('contacts.destroy', ['contact' => $contact->id]) }}"
                                            method="DELETE">
                                            <x-button class="btn-danger" type="submit">
                                                Delete
                                            </x-button>
                                        </x-form>

                                    </div>
                                </div>
                            </li>
                        @endforeach
                        <li>
                            <x-link.button href="{{ route('contacts.create', ['user' => $user->id]) }}"
                                class="btn-success">
                                add number
                            </x-link.button>
                        </li>
                    </ul>
                </div>
            </li>
        @endforeach
    </ul>
@endif
