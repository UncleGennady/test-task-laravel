@php
    $links = [
        (object) [
            'name' => 'home',
            'title' => 'Home',
            'href' => '/',
        ],
    ];
@endphp
<header>
    <x-container>
        <nav class="navbar navbar-expand-lg bg-body-tertiary">
            <div class="container-fluid">
                <a class="navbar-brand" href="/">Test task</a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
                    aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarNav">
                    <ul class="navbar-nav gap-lg-4">
                        @foreach ($links as $link)
                            <li class="nav-item">
                                <a class="nav-link" href="{{ $link->href }}">
                                    {{ $link->title }}
                                </a>
                            </li>
                        @endforeach
                    </ul>
                </div>
            </div>
        </nav>
    </x-container>
</header>

@pushOnce('js')
    <script src="/js/app.js"></script>
@endPushOnce
