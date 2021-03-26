<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="{{ secure_asset('css/app.css') }}" rel="stylesheet">
    <title>Movie Search</title>
    <livewire:styles>
        <script src="https://cdn.jsdelivr.net/gh/alpinejs/alpine@v2.x.x/dist/alpine.min.js" defer></script>
</head>

<body class="font-sans bg-gray-900 text-white">
    <nav class="border-b border-gray-800">
        <div class="container mx-auto flex flex-col md:flex-row items-center justify-between px-4 py-6">
            <ul class="flex flex-col md:flex-row items-center">
                <li>
                    <a href="{{ route('movies.index') }}">
                        <svg class="w-32" version="1.1" xmlns="http://www.w3.org/2000/svg"
                            xmlns:xlink="http://www.w3.org/1999/xlink" preserveAspectRatio="xMidYMid meet"
                            viewBox="15.899224806201612 14.532065354576488 160.25068978006527 33.09090805053711"
                            width="156.25" height="29.09">
                            <defs>
                                <path
                                    d="M39 17.67C40.8 17.67 41.71 18.58 41.71 20.38C41.71 32.02 41.71 38.48 41.71 39.78C41.71 41.58 40.8 42.48 39 42.48C27.36 42.48 20.9 42.48 19.6 42.48C17.8 42.48 16.9 41.58 16.9 39.78C16.9 28.14 16.9 21.67 16.9 20.38C16.9 18.58 17.8 17.67 19.6 17.67C31.24 17.67 37.71 17.67 39 17.67Z"
                                    id="b11VvbhtlV"></path>
                                <path d="M23.1 17.67L23.1 42.48" id="dHalSbY7h"></path>
                                <path d="M35.5 17.67L35.5 42.48" id="asAOA5Wp2"></path>
                                <path d="M16.9 30.08L41.71 30.08" id="c2iMHDW70e"></path>
                                <path d="M16.9 23.88L23.1 23.88" id="c98bC92Em"></path>
                                <path d="M16.9 36.28L23.1 36.28" id="c2Yqe8CkCe"></path>
                                <path d="M35.5 36.28L41.71 36.28" id="cSKbWOSgi"></path>
                                <path d="M35.5 23.88L41.71 23.88" id="ar3tGlTsk"></path><text id="bPfIbSoh" x="124.09"
                                    y="64.75" font-size="24" font-family="Roboto Condensed" font-weight="400"
                                    font-style="normal" letter-spacing="0" alignment-baseline="before-edge"
                                    transform="matrix(1 0 0 1 -72.86821705426354 -49.21666378937934)"
                                    style="line-height:100%" xml:space="preserve" dominant-baseline="text-before-edge">
                                    <tspan x="124.09" dy="0em" alignment-baseline="before-edge"
                                        dominant-baseline="text-before-edge" text-anchor="start">MovieSearch</tspan>
                                </text>
                            </defs>
                            <g>
                                <g>
                                    <use xlink:href="#b11VvbhtlV" opacity="1" fill="#000000" fill-opacity="0"></use>
                                    <g>
                                        <use xlink:href="#b11VvbhtlV" opacity="1" fill-opacity="0" stroke="#ffffff"
                                            stroke-width="2" stroke-opacity="1"></use>
                                    </g>
                                </g>
                                <g>
                                    <use xlink:href="#dHalSbY7h" opacity="1" fill="#000000" fill-opacity="0"></use>
                                    <g>
                                        <use xlink:href="#dHalSbY7h" opacity="1" fill-opacity="0" stroke="#ffffff"
                                            stroke-width="2" stroke-opacity="1"></use>
                                    </g>
                                </g>
                                <g>
                                    <use xlink:href="#asAOA5Wp2" opacity="1" fill="#000000" fill-opacity="0"></use>
                                    <g>
                                        <use xlink:href="#asAOA5Wp2" opacity="1" fill-opacity="0" stroke="#ffffff"
                                            stroke-width="2" stroke-opacity="1"></use>
                                    </g>
                                </g>
                                <g>
                                    <use xlink:href="#c2iMHDW70e" opacity="1" fill="#000000" fill-opacity="0"></use>
                                    <g>
                                        <use xlink:href="#c2iMHDW70e" opacity="1" fill-opacity="0" stroke="#ffffff"
                                            stroke-width="2" stroke-opacity="1"></use>
                                    </g>
                                </g>
                                <g>
                                    <use xlink:href="#c98bC92Em" opacity="1" fill="#000000" fill-opacity="0"></use>
                                    <g>
                                        <use xlink:href="#c98bC92Em" opacity="1" fill-opacity="0" stroke="#ffffff"
                                            stroke-width="2" stroke-opacity="1"></use>
                                    </g>
                                </g>
                                <g>
                                    <use xlink:href="#c2Yqe8CkCe" opacity="1" fill="#000000" fill-opacity="0"></use>
                                    <g>
                                        <use xlink:href="#c2Yqe8CkCe" opacity="1" fill-opacity="0" stroke="#ffffff"
                                            stroke-width="2" stroke-opacity="1"></use>
                                    </g>
                                </g>
                                <g>
                                    <use xlink:href="#cSKbWOSgi" opacity="1" fill="#000000" fill-opacity="0"></use>
                                    <g>
                                        <use xlink:href="#cSKbWOSgi" opacity="1" fill-opacity="0" stroke="#ffffff"
                                            stroke-width="2" stroke-opacity="1"></use>
                                    </g>
                                </g>
                                <g>
                                    <use xlink:href="#ar3tGlTsk" opacity="1" fill="#000000" fill-opacity="0"></use>
                                    <g>
                                        <use xlink:href="#ar3tGlTsk" opacity="1" fill-opacity="0" stroke="#ffffff"
                                            stroke-width="2" stroke-opacity="1"></use>
                                    </g>
                                </g>
                                <g id="d82IPzHQrd">
                                    <use xlink:href="#bPfIbSoh" opacity="1" fill="#ffffff" fill-opacity="1"></use>
                                    <g>
                                        <use xlink:href="#bPfIbSoh" opacity="1" fill-opacity="0" stroke="#000000"
                                            stroke-width="1" stroke-opacity="0"></use>
                                    </g>
                                </g>
                            </g>
                        </svg>
                    </a>
                </li>
                <li class="md:ml-16 mt-3 md:mt-0">
                    <a href="{{ route('movies.index') }}" class="hover:text-gray-300">Movies</a>
                </li>
                <li class="md:ml-6 mt-3 md:mt-0">
                    <a href="{{ route('tv.index') }}" class="hover:text-gray-300">TV Shows</a>
                </li>
                <li class="md:ml-6 mt-3 md:mt-0">
                    <a href="{{ route('actors.index') }}" class="hover:text-gray-300">Actors</a>
                </li>
            </ul>
            <div class="flex flex-col md:flex-row items-center">
                <livewire:search-dropdown>
            </div>
        </div>
    </nav>

    @yield('content')

    <footer class="border border-t border-gray-800">
        <div class="container mx-auto text-sm px-4 py-6">
            Powered by <a href="https://www.themoviedb.org/documentation/api" class="underline hover:text-gray-300">TMDb
                API</a>
        </div>
    </footer>
    <livewire:scripts>
        @yield('scripts')
</body>

</html>
