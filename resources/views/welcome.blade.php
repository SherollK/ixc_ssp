<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Laravel</title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />

    <!-- Styles -->
    <style>
        /* ! tailwindcss v3.2.4 | MIT License | https://tailwindcss.com */*,::after,::before{box-sizing:border-box;border-width:0;border-style:solid;border-color:#e5e7eb}::after,::before{--tw-content:''}html{line-height:1.5;-webkit-text-size-adjust:100%;-moz-tab-size:4;tab-size:4;font-family:Figtree, sans-serif;font-feature-settings:normal}body{margin:0;line-height:inherit}hr{height:0;color:inherit;border-top-width:1px}abbr:where([title]){-webkit-text-decoration:underline dotted;text-decoration:underline dotted}h1,h2,h3,h4,h5,h6{font-size:inherit;font-weight:inherit}a{color:inherit;text-decoration:inherit}b,strong{font-weight:bolder}code,kbd,pre,samp{font-family:ui-monospace, SFMono-Regular, Menlo, Monaco, Consolas, "Liberation Mono", "Courier New", monospace;font-size:1em}small{font-size:80%}sub,sup{font-size:75%;line-height:0;position:relative;vertical-align:baseline}sub{bottom:-.25em}sup{top:-.5em}table{text-indent:0;border-color:inherit;border-collapse:collapse}button,input,optgroup,select,textarea{font-family:inherit;font-size:100%;font-weight:inherit;line-height:inherit;color:inherit;margin:0;padding:0}button,select{text-transform:none}[type=button],[type=reset],[type=submit],button{-webkit-appearance:button;background-color:transparent;background-image:none}:-moz-focusring{outline:auto}:-moz-ui-invalid{box-shadow:none}progress{vertical-align:baseline}::-webkit-inner-spin-button,::-webkit-outer-spin-button{height:auto}[type=search]{-webkit-appearance:textfield;outline-offset:-2px}::-webkit-search-decoration{-webkit-appearance:none}::-webkit-file-upload-button{-webkit-appearance:button;font:inherit}summary{display:list-item}blockquote,dd,dl,figure,h1,h2,h3,h4,h5,h6,hr,p,pre{margin:0}fieldset{margin:0;padding:0}legend{padding:0}menu,ol,ul{list-style:none;margin:0;padding:0}textarea{resize:vertical}input::placeholder,textarea::placeholder{opacity:1;color:#9ca3af}[role=button],button{cursor:pointer}:disabled{cursor:default}audio,canvas,embed,iframe,img,object,svg,video{display:block;vertical-align:middle}img,video{max-width:100%;height:auto}[hidden]{display:none}*, ::before, ::after{--tw-border-spacing-x:0;--tw-border-spacing-y:0;--tw-translate-x:0;--tw-translate-y:0;--tw-rotate:0;--tw-skew-x:0;--tw-skew-y:0;--tw-scale-x:1;--tw-scale-y:1;--tw-pan-x: ;--tw-pan-y: ;--tw-pinch-zoom: ;--tw-scroll-snap-strictness:proximity;--tw-ordinal: ;--tw-slashed-zero: ;--tw-numeric-figure: ;--tw-numeric-spacing: ;--tw-numeric-fraction: ;--tw-ring-inset: ;--tw-ring-offset-width:0px;--tw-ring-offset-color:#fff;--tw-ring-color:rgb(59 130 246 / 0.5);--tw-ring-offset-shadow:0 0 #0000;--tw-ring-shadow:0 0 #0000;--tw-shadow:0 0 #0000;--tw-shadow-colored:0 0 #0000;--tw-blur: ;--tw-brightness: ;--tw-contrast: ;--tw-grayscale: ;--tw-hue-rotate: ;--tw-invert: ;--tw-saturate: ;--tw-sepia: ;--tw-drop-shadow: ;--tw-backdrop-blur: ;--tw-backdrop-brightness: ;--tw-backdrop-contrast: ;--tw-backdrop-grayscale: ;--tw-backdrop-hue-rotate: ;--tw-backdrop-invert: ;--tw-backdrop-opacity: ;--tw-backdrop-saturate: ;--tw-backdrop-sepia: }::-webkit-backdrop{--tw-border-spacing-x:0;--tw-border-spacing-y:0;--tw-translate-x:0;--tw-translate-y:0;--tw-rotate:0;--tw-skew-x:0;--tw-skew-y:0;--tw-scale-x:1;--tw-scale-y:1;--tw-pan-x: ;--tw-pan-y: ;--tw-pinch-zoom: ;--tw-scroll-snap-strictness:proximity;--tw-ordinal: ;--tw-slashed-zero: ;--tw-numeric-figure: ;--tw-numeric-spacing: ;--tw-numeric-fraction: ;--tw-ring-inset: ;--tw-ring-offset-width:0px;--tw-ring-offset-color:#fff;--tw-ring-color:rgb(59 130 246 / 0.5);--tw-ring-offset-shadow:0 0 #0000;--tw-ring-shadow:0 0 #0000;--tw-shadow:0 0 #0000;--tw-shadow-colored:0 0 #0000;--tw-blur: ;--tw-brightness: ;--tw-contrast: ;--tw-grayscale: ;--tw-hue-rotate: ;--tw-invert: ;--tw-saturate: ;--tw-sepia: ;--tw-drop-shadow: ;--tw-backdrop-blur: ;--tw-backdrop-brightness: ;--tw-backdrop-contrast: ;--tw-backdrop-grayscale: ;--tw-backdrop-hue-rotate: ;--tw-backdrop-invert: ;--tw-backdrop-opacity: ;--tw-backdrop-saturate: ;--tw-backdrop-sepia: }::backdrop{--tw-border-spacing-x:0;--tw-border-spacing-y:0;--tw-translate-x:0;--tw-translate-y:0;--tw-rotate:0;--tw-skew-x:0;--tw-skew-y:0;--tw-scale-x:1;--tw-scale-y:1;--tw-pan-x: ;--tw-pan-y: ;--tw-pinch-zoom: ;--tw-scroll-snap-strictness:proximity;--tw-ordinal: ;--tw-slashed-zero: ;--tw-numeric-figure: ;--tw-numeric-spacing: ;--tw-numeric-fraction: ;--tw-ring-inset: ;--tw-ring-offset-width:0px;--tw-ring-offset-color:#fff;--tw-ring-color:rgb(59 130 246 / 0.5);--tw-ring-offset-shadow:0 0 #0000;--tw-ring-shadow:0 0 #0000;--tw-shadow:0 0 #0000;--tw-shadow-colored:0 0 #0000;--tw-blur: ;--tw-brightness: ;--tw-contrast: ;--tw-grayscale: ;--tw-hue-rotate: ;--tw-invert: ;--tw-saturate: ;--tw-sepia: ;--tw-drop-shadow: ;--tw-backdrop-blur: ;--tw-backdrop-brightness: ;--tw-backdrop-contrast: ;--tw-backdrop-grayscale: ;--tw-backdrop-hue-rotate: ;--tw-backdrop-invert: ;--tw-backdrop-opacity: ;--tw-backdrop-saturate: ;--tw-backdrop-sepia: }.relative{position:relative}.mx-auto{margin-left:auto;margin-right:auto}.mx-6{margin-left:1.5rem;margin-right:1.5rem}.ml-4{margin-left:1rem}.mt-16{margin-top:4rem}.mt-6{margin-top:1.5rem}.mt-4{margin-top:1rem}.-mt-px{margin-top:-1px}.mr-1{margin-right:0.25rem}.flex{display:flex}.inline-flex{display:inline-flex}.grid{display:grid}.h-16{height:4rem}.h-7{height:1.75rem}.h-6{height:1.5rem}.h-5{height:1.25rem}.min-h-screen{min-height:100vh}.w-auto{width:auto}.w-16{width:4rem}.w-7{width:1.75rem}.w-6{width:1.5rem}.w-5{width:1.25rem}.max-w-7xl{max-width:80rem}.shrink-0{flex-shrink:0}.scale-100{--tw-scale-x:1;--tw-scale-y:1;transform:translate(var(--tw-translate-x), var(--tw-translate-y)) rotate(var(--tw-rotate)) skewX(var(--tw-skew-x)) skewY(var(--tw-skew-y)) scaleX(var(--tw-scale-x)) scaleY(var(--tw-scale-y))}.grid-cols-1{grid-template-columns:repeat(1, minmax(0, 1fr))}.items-center{align-items:center}.justify-center{justify-content:center}.gap-6{gap:1.5rem}.gap-4{gap:1rem}.self-center{align-self:center}.rounded-lg{border-radius:0.5rem}.rounded-full{border-radius:9999px}.bg-gray-100{--tw-bg-opacity:1;background-color:rgb(243 244 246 / var(--tw-bg-opacity))}.bg-white{--tw-bg-opacity:1;background-color:rgb(255 255 255 / var(--tw-bg-opacity))}.bg-red-50{--tw-bg-opacity:1;background-color:rgb(254 242 242 / var(--tw-bg-opacity))}.bg-dots-darker{background-image:url("data:image/svg+xml,%3Csvg width='30' height='30' viewBox='0 0 30 30' fill='none' xmlns='http://www.w3.org/2000/svg'%3E%3Cpath d='M1.22676 0C1.91374 0 2.45351 0.539773 2.45351 1.22676C2.45351 1.91374 1.91374 2.45351 1.22676 2.45351C0.539773 2.45351 0 1.91374 0 1.22676C0 0.539773 0.539773 0 1.22676 0Z' fill='rgba(0,0,0,0.07)'/%3E%3C/svg%3E")}.from-gray-700\/50{--tw-gradient-from:rgb(55 65 81 / 0.5);--tw-gradient-to:rgb(55 65 81 / 0);--tw-gradient-stops:var(--tw-gradient-from), var(--tw-gradient-to)}.via-transparent{--tw-gradient-to:rgb(0 0 0 / 0);--tw-gradient-stops:var(--tw-gradient-from), transparent, var(--tw-gradient-to)}.bg-center{background-position:center}.stroke-red-500{stroke:#ef4444}.stroke-gray-400{stroke:#9ca3af}.p-6{padding:1.5rem}.px-6{padding-left:1.5rem;padding-right:1.5rem}.text-center{text-align:center}.text-right{text-align:right}.text-xl{font-size:1.25rem;line-height:1.75rem}.text-sm{font-size:0.875rem;line-height:1.25rem}.font-semibold{font-weight:600}.leading-relaxed{line-height:1.625}.text-gray-600{--tw-text-opacity:1;color:rgb(75 85 99 / var(--tw-text-opacity))}.text-gray-900{--tw-text-opacity:1;color:rgb(17 24 39 / var(--tw-text-opacity))}.text-gray-500{--tw-text-opacity:1;color:rgb(107 114 128 / var(--tw-text-opacity))}.underline{-webkit-text-decoration-line:underline;text-decoration-line:underline}.antialiased{-webkit-font-smoothing:antialiased;-moz-osx-font-smoothing:grayscale}.shadow-2xl{--tw-shadow:0 25px 50px -12px rgb(0 0 0 / 0.25);--tw-shadow-colored:0 25px 50px -12px var(--tw-shadow-color);box-shadow:var(--tw-ring-offset-shadow, 0 0 #0000), var(--tw-ring-shadow, 0 0 #0000), var(--tw-shadow)}.shadow-gray-500\/20{--tw-shadow-color:rgb(107 114 128 / 0.2);--tw-shadow:var(--tw-shadow-colored)}.transition-all{transition-property:all;transition-timing-function:cubic-bezier(0.4, 0, 0.2, 1);transition-duration:150ms}.selection\:bg-red-500 *::selection{--tw-bg-opacity:1;background-color:rgb(239 68 68 / var(--tw-bg-opacity))}.selection\:text-white *::selection{--tw-text-opacity:1;color:rgb(255 255 255 / var(--tw-text-opacity))}.selection\:bg-red-500::selection{--tw-bg-opacity:1;background-color:rgb(239 68 68 / var(--tw-bg-opacity))}.selection\:text-white::selection{--tw-text-opacity:1;color:rgb(255 255 255 / var(--tw-text-opacity))}.hover\:text-gray-900:hover{--tw-text-opacity:1;color:rgb(17 24 39 / var(--tw-text-opacity))}.hover\:text-gray-700:hover{--tw-text-opacity:1;color:rgb(55 65 81 / var(--tw-text-opacity))}.focus\:rounded-sm:focus{border-radius:0.125rem}.focus\:outline:focus{outline-style:solid}.focus\:outline-2:focus{outline-width:2px}.focus\:outline-red-500:focus{outline-color:#ef4444}.group:hover .group-hover\:stroke-gray-600{stroke:#4b5563}@media (prefers-reduced-motion: no-preference){.motion-safe\:hover\:scale-\[1\.01\]:hover{--tw-scale-x:1.01;--tw-scale-y:1.01;transform:translate(var(--tw-translate-x), var(--tw-translate-y)) rotate(var(--tw-rotate)) skewX(var(--tw-skew-x)) skewY(var(--tw-skew-y)) scaleX(var(--tw-scale-x)) scaleY(var(--tw-scale-y))}}@media (prefers-color-scheme: dark){.dark\:bg-gray-900{--tw-bg-opacity:1;background-color:rgb(17 24 39 / var(--tw-bg-opacity))}.dark\:bg-gray-800\/50{background-color:rgb(31 41 55 / 0.5)}.dark\:bg-red-800\/20{background-color:rgb(153 27 27 / 0.2)}.dark\:bg-dots-lighter{background-image:url("data:image/svg+xml,%3Csvg width='30' height='30' viewBox='0 0 30 30' fill='none' xmlns='http://www.w3.org/2000/svg'%3E%3Cpath d='M1.22676 0C1.91374 0 2.45351 0.539773 2.45351 1.22676C2.45351 1.91374 1.91374 2.45351 1.22676 2.45351C0.539773 2.45351 0 1.91374 0 1.22676C0 0.539773 0.539773 0 1.22676 0Z' fill='rgba(255,255,255,0.07)'/%3E%3C/svg%3E")}.dark\:bg-gradient-to-bl{background-image:linear-gradient(to bottom left, var(--tw-gradient-stops))}.dark\:stroke-gray-600{stroke:#4b5563}.dark\:text-gray-400{--tw-text-opacity:1;color:rgb(156 163 175 / var(--tw-text-opacity))}.dark\:text-white{--tw-text-opacity:1;color:rgb(255 255 255 / var(--tw-text-opacity))}.dark\:shadow-none{--tw-shadow:0 0 #0000;--tw-shadow-colored:0 0 #0000;box-shadow:var(--tw-ring-offset-shadow, 0 0 #0000), var(--tw-ring-shadow, 0 0 #0000), var(--tw-shadow)}.dark\:ring-1{--tw-ring-offset-shadow:var(--tw-ring-inset) 0 0 0 var(--tw-ring-offset-width) var(--tw-ring-offset-color);--tw-ring-shadow:var(--tw-ring-inset) 0 0 0 calc(1px + var(--tw-ring-offset-width)) var(--tw-ring-color);box-shadow:var(--tw-ring-offset-shadow), var(--tw-ring-shadow), var(--tw-shadow, 0 0 #0000)}.dark\:ring-inset{--tw-ring-inset:inset}.dark\:ring-white\/5{--tw-ring-color:rgb(255 255 255 / 0.05)}.dark\:hover\:text-white:hover{--tw-text-opacity:1;color:rgb(255 255 255 / var(--tw-text-opacity))}.group:hover .dark\:group-hover\:stroke-gray-400{stroke:#9ca3af}}@media (min-width: 640px){.sm\:fixed{position:fixed}.sm\:top-0{top:0px}.sm\:right-0{right:0px}.sm\:ml-0{margin-left:0px}.sm\:flex{display:flex}.sm\:items-center{align-items:center}.sm\:justify-center{justify-content:center}.sm\:justify-between{justify-content:space-between}.sm\:text-left{text-align:left}.sm\:text-right{text-align:right}}@media (min-width: 768px){.md\:grid-cols-2{grid-template-columns:repeat(2, minmax(0, 1fr))}}@media (min-width: 1024px){.lg\:gap-8{gap:2rem}.lg\:p-8{padding:2rem}}
    </style>
</head>
<body class="antialiased">
<div class="relative sm:flex sm:justify-center sm:items-center min-h-screen bg-dots-darker bg-center bg-gray-100 selection:bg-red-500 selection:text-white">
    @if (Route::has('login'))
        <div class="sm:fixed sm:top-0 sm:right-0 p-6 text-right">
            @auth
                <a href="{{ url('/dashboard') }}" class="font-semibold text-gray-600 hover:text-gray-900 focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500">Dashboard</a>
            @else
                <a href="{{ route('login') }}" class="font-semibold text-gray-600 hover:text-gray-900 focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500">Log in</a>

                @if (Route::has('register'))
                    <a href="{{ route('register') }}" class="ml-4 font-semibold text-gray-600 hover:text-gray-900 focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500">Register</a>
                @endif
            @endauth
        </div>
    @endif
</div>
</body>
</html>










{{--<div>--}}
{{--    header section--}}
{{--    <section class="relative pb-24">--}}
{{--        <nav class="relative bg-white">--}}
{{--            <div class="container mx-auto px-4">--}}
{{--                <div class="relative flex h-24 items-center fixed top-0 left-0 w-full">--}}
{{--                    <a class="inline-block" href="#">--}}
{{--                        <img class="h-10" src="/images/IXC-2-removebg-preview.png" alt=""></a>--}}
{{--                    <button--}}
{{--                        class="lg:hidden navbar-burger flex items-center justify-center h-10 w-10 ml-auto bg-gradient-to-b from-cyanGreen-800 to-cyan-800 rounded-lg">--}}
{{--                        <svg width="24" height="24" viewbox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">--}}
{{--                            <path d="M3 5H21" stroke="white" stroke-width="1.5" stroke-linecap="round"--}}
{{--                                  stroke-linejoin="round">--}}
{{--                            </path>--}}
{{--                            <path d="M3 12H21" stroke="white" stroke-width="1.5" stroke-linecap="round"--}}
{{--                                  stroke-linejoin="round">--}}
{{--                            </path>--}}
{{--                            <path d="M3 19H21" stroke="white" stroke-width="1.5" stroke-linecap="round"--}}
{{--                                  stroke-linejoin="round">--}}
{{--                            </path>--}}
{{--                        </svg>--}}
{{--                    </button>--}}
{{--                    <div--}}
{{--                        class="absolute top-1/2 left-1/2 transform -translate-x-1/2 -translate-y-1/2 hidden lg:flex items-center">--}}
{{--                        <a class="inline-block hover:text-yellowGreen-700 mr-10" href="#">--}}
{{--                            <div class="flex items-center">--}}
{{--                                <span class="mr-3">Home</span>--}}
{{--                                <svg width="10" height="6" viewbox="0 0 10 6" fill="none"--}}
{{--                                     xmlns="http://www.w3.org/2000/svg"></svg>--}}
{{--                            </div>--}}
{{--                        </a>--}}
{{--                        <a class="inline-block hover:text-yellowGreen-700 mr-10" href="#">Influencers</a><a--}}
{{--                            class="inline-block hover:text-yellowGreen-700 mr-10" href="#">Brands</a><a--}}
{{--                            class="inline-block hover:text-yellowGreen-700" href="#">How it works</a>--}}
{{--                    </div>--}}
{{--                    <div class="hidden lg:block ml-auto">--}}
{{--                        <a class="inline-flex items-center justify-center h-10 mr-4 px-4 text-center leading-loose text-sm text-gray-700 hover:text-yellowGreen-700 font-semibold transition duration-200"--}}
{{--                           href={{ route('login') }}>Login</a><a--}}
{{--                            class="inline-flex items-center justify-center h-10 px-4 text-center leading-loose text-sm text-gray-700 hover:text-yellowGreen-700 font-semibold border border-gray-200 hover:border-yellowGreen-600 shadow-sm hover:shadow-none rounded-lg transition duration-200"--}}
{{--                            href={{ route('register') }}>Get Started</a>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--            </div>--}}
{{--        </nav>--}}

{{--        <div class="hidden navbar-menu fixed top-0 left-0 bottom-0 w-5/6 max-w-md z-50">--}}
{{--            <div class="navbar-backdrop fixed inset-0 bg-teal-800 opacity-70"></div>--}}
{{--            <nav class="relative flex flex-col py-6 px-10 w-full h-full bg-white overflow-y-auto">--}}
{{--                <div class="flex mb-auto items-center">--}}
{{--                    <a class="inline-block mr-auto" href="#">--}}
{{--                        <img class="h-10" src="images/IXC-2-removebg-preview.png" alt=""></a>--}}
{{--                    <a class="navbar-close" href="#">--}}
{{--                        <svg width="24" height="24" viewbox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">--}}
{{--                            <path d="M6 18L18 6M6 6L18 18" stroke="#111827" stroke-width="2" stroke-linecap="round"--}}
{{--                                  stroke-linejoin="round"></path>--}}
{{--                        </svg>--}}
{{--                    </a>--}}
{{--                </div>--}}
{{--                <div class="py-12 mb-auto">--}}
{{--                    <ul class="flex-col">--}}
{{--                        <li class="mb-6"><a class="inline-block text-black" href="#">Home</a></li>--}}
{{--                        <li class="mb-6"><a class="inline-block text-black" href="#">Influencers</a></li>--}}
{{--                        <li class="mb-6"><a class="inline-block text-black" href="#">Brands</a></li>--}}
{{--                        <li><a class="inline-block text-black" href="#">How It Works</a></li>--}}
{{--                    </ul>--}}
{{--                </div>--}}

{{--                @guest--}}
{{--                    <div>--}}
{{--                        <a class="flex items-center justify-center h-10 mb-4 px-4 text-center text-sm text-gray-700 font-semibold border border-gray-200 hover:bg-gray-100 shadow-sm rounded-lg transition duration-200"--}}
{{--                           href={{ route('login') }}>Login</a><a--}}
{{--                            class="flex items-center justify-center h-10 px-4 text-center text-sm text-white font-semibold border border-yellowGreen-600 bg-yellowGreen-500 hover:bg-yellowGreen-600 rounded-lg transition duration-200"--}}
{{--                            href={{ route('register') }}>Get Started</a>--}}
{{--                    </div>--}}
{{--                @endguest--}}

{{--            </nav>--}}
{{--        </div>--}}
{{--    </section>--}}
{{--    <div class="container px-4 mx-auto">--}}
{{--        <div class="relative py-16 pb-40 md:pb-72 px-2 xs:px-8 rounded-3xl overflow-hidden">--}}
{{--            <img class="absolute top-0 left-0 w-full h-full object-cover" src="/aurora-assets/headers/bg-gray-plate.png"--}}
{{--                 alt="">--}}
{{--            <div class="relative max-w-lg lg:max-w-3xl mb-14 mx-auto text-center">--}}
{{--                <div class="max-w-lg md:max-w-2xl px-4 mx-auto">--}}
{{--                    <h1 class="font-heading tracking-tight text-4xl sm:text-5xl lg:text-6xl font-bold mb-6">influencerXchange--}}
{{--                    </h1>--}}
{{--                    <h3 class="font-heading tracking-tight text-4xl font-bold mb-6">"where influencers and brands come--}}
{{--                        together for powerful collaborations."</h3>--}}
{{--                    <p class="max-w-lg mx-auto text-lg text-gray-700 mb-10">Connect. Collaborate. Create</p>--}}
{{--                    <a class="group relative flex xs:inline-flex items-center justify-center px-5 h-12 font-bold text-white bg-gradient-to-br from-cyanGreen-800 to-cyan-800 rounded-lg transition-all duration-300"--}}
{{--                       href={{ route('register') }}>--}}
{{--                        <div--}}
{{--                            class="absolute top-0 left-0 w-full h-full rounded-lg ring-4 ring-green-300 animate-pulse group-hover:ring-0 transition duration-300">--}}
{{--                        </div>--}}
{{--                        <span>Get Started</span>--}}
{{--                    </a>--}}

{{--                </div>--}}
{{--            </div>--}}
{{--        </div>--}}
{{--        <img class="relative block mx-auto px-12 lg:px-8 -mt-40 md:-mt-64" src="/images/Untitled-design2.png" alt="">--}}
{{--    </div>--}}

{{--    <section class="relative py-12 md:py-24">--}}
{{--        <div class="container px-4 mx-auto">--}}
{{--            <div class="relative pb-24 border-b border-yellowGreen-400 overflow-hidden">--}}
{{--                <div class="max-w-2xl mx-auto mb-24 text-center">--}}
{{--            <span--}}
{{--                class="inline-flex items-center h-6 mb-6 px-2 text-xs uppercase font-medium text-yellowGreen-700 bg-yellowGreen-200 rounded-full">HOW--}}
{{--              IT WORKS</span>--}}
{{--                    <h1 class="font-heading tracking-tight text-4xl sm:text-5xl font-bold">Welcome to influencerXchange</h1>--}}
{{--                </div>--}}
{{--                <div class="flex flex-wrap -mx-4 -mb-16">--}}
{{--                    <div class="w-full sm:w-1/2 lg:w-1/3 px-4 mb-16">--}}
{{--                        <div class="sm:flex items-start max-w-xs mx-auto sm:mx-0">--}}
{{--                            <div class="flex-shrink-0 flex items-center justify-center w-8 h-8 rounded-full bg-gray-50">--}}
{{--                                <svg xmlns="http://www.w3.org/2000/svg" viewbox="0 0 24 24" fill="currentColor" class="">--}}
{{--                                    <path--}}
{{--                                        d="M21.731 2.269a2.625 2.625 0 0 0-3.712 0l-1.157 1.157 3.712 3.712 1.157-1.157a2.625 2.625 0 0 0 0-3.712ZM19.513 8.199l-3.712-3.712-8.4 8.4a5.25 5.25 0 0 0-1.32 2.214l-.8 2.685a.75.75 0 0 0 .933.933l2.685-.8a5.25 5.25 0 0 0 2.214-1.32l8.4-8.4Z">--}}
{{--                                    </path>--}}
{{--                                    <path--}}
{{--                                        d="M5.25 5.25a3 3 0 0 0-3 3v10.5a3 3 0 0 0 3 3h10.5a3 3 0 0 0 3-3V13.5a.75.75 0 0 0-1.5 0v5.25a1.5 1.5 0 0 1-1.5 1.5H5.25a1.5 1.5 0 0 1-1.5-1.5V8.25a1.5 1.5 0 0 1 1.5-1.5h5.25a.75.75 0 0 0 0-1.5H5.25Z">--}}
{{--                                    </path>--}}
{{--                                </svg>--}}

{{--                            </div>--}}
{{--                            <div class="mt-4 sm:mt-0 sm:ml-3">--}}
{{--                                <h5 class="text-xl font-bold mb-1">Sign up</h5>--}}
{{--                                <p class="text-lg text-gray-500">Begin your journey by creating an account on IXC. It's a quick and--}}
{{--                                    easy process. Just click on the "Sign Up" button, fill in your details, and voila – you're now part--}}
{{--                                    of a vibrant community ready for collaboration.</p>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                    <div class="w-full sm:w-1/2 lg:w-1/3 px-4 mb-16">--}}
{{--                        <div class="sm:flex items-start max-w-xs mx-auto sm:mx-0">--}}
{{--                            <div class="flex-shrink-0 flex items-center justify-center w-8 h-8 rounded-full bg-gray-50">--}}
{{--                                <svg xmlns="http://www.w3.org/2000/svg" viewbox="0 0 24 24" fill="currentColor" class="">--}}
{{--                                    <path fill-rule="evenodd"--}}
{{--                                          d="M18.685 19.097A9.723 9.723 0 0 0 21.75 12c0-5.385-4.365-9.75-9.75-9.75S2.25 6.615 2.25 12a9.723 9.723 0 0 0 3.065 7.097A9.716 9.716 0 0 0 12 21.75a9.716 9.716 0 0 0 6.685-2.653Zm-12.54-1.285A7.486 7.486 0 0 1 12 15a7.486 7.486 0 0 1 5.855 2.812A8.224 8.224 0 0 1 12 20.25a8.224 8.224 0 0 1-5.855-2.438ZM15.75 9a3.75 3.75 0 1 1-7.5 0 3.75 3.75 0 0 1 7.5 0Z"--}}
{{--                                          clip-rule="evenodd"></path>--}}
{{--                                </svg>--}}

{{--                            </div>--}}
{{--                            <div class="mt-4 sm:mt-0 sm:ml-3">--}}
{{--                                <h5 class="text-xl font-bold mb-1">Profile Creation</h5>--}}
{{--                                <p class="text-lg text-gray-500">After signing up, take a few moments to build your profile.--}}
{{--                                    Influencers, showcase your content categories, demographics, and previous brand collaborations.--}}
{{--                                    Brands, highlight your values, target audience, and collaboration preferences.</p>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                    <div class="w-full sm:w-1/2 lg:w-1/3 px-4 mb-16">--}}
{{--                        <div class="sm:flex items-start max-w-xs mx-auto sm:mx-0">--}}
{{--                            <div class="flex-shrink-0 flex items-center justify-center w-8 h-8 rounded-full bg-gray-50">--}}
{{--                                <svg xmlns="http://www.w3.org/2000/svg" viewbox="0 0 24 24" fill="currentColor" class="">--}}
{{--                                    <path d="M8.25 10.875a2.625 2.625 0 1 1 5.25 0 2.625 2.625 0 0 1-5.25 0Z"></path>--}}
{{--                                    <path fill-rule="evenodd"--}}
{{--                                          d="M12 2.25c-5.385 0-9.75 4.365-9.75 9.75s4.365 9.75 9.75 9.75 9.75-4.365 9.75-9.75S17.385 2.25 12 2.25Zm-1.125 4.5a4.125 4.125 0 1 0 2.338 7.524l2.007 2.006a.75.75 0 1 0 1.06-1.06l-2.006-2.007a4.125 4.125 0 0 0-3.399-6.463Z"--}}
{{--                                          clip-rule="evenodd"></path>--}}
{{--                                </svg>--}}

{{--                            </div>--}}
{{--                            <div class="mt-4 sm:mt-0 sm:ml-3">--}}
{{--                                <h5 class="text-xl font-bold mb-1">Explore and Discover</h5>--}}
{{--                                <p class="text-lg text-gray-500">Once your profile is set, dive into our platform. Influencers,--}}
{{--                                    explore a diverse range of brands looking for collaborations. Brands, discover influencers that--}}
{{--                                    align with your values and goals. Our matching algorithm ensures compatibility for fruitful--}}
{{--                                    partnerships.</p>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                    <div class="w-full sm:w-1/2 lg:w-1/3 px-4 mb-16">--}}
{{--                        <div class="sm:flex items-start max-w-xs mx-auto sm:mx-0">--}}
{{--                            <div class="flex-shrink-0 flex items-center justify-center w-8 h-8 rounded-full bg-gray-50">--}}
{{--                                <svg xmlns="http://www.w3.org/2000/svg" viewbox="0 0 24 24" fill="currentColor" class="">--}}
{{--                                    <path--}}
{{--                                        d="M4.913 2.658c2.075-.27 4.19-.408 6.337-.408 2.147 0 4.262.139 6.337.408 1.922.25 3.291 1.861 3.405 3.727a4.403 4.403 0 0 0-1.032-.211 50.89 50.89 0 0 0-8.42 0c-2.358.196-4.04 2.19-4.04 4.434v4.286a4.47 4.47 0 0 0 2.433 3.984L7.28 21.53A.75.75 0 0 1 6 21v-4.03a48.527 48.527 0 0 1-1.087-.128C2.905 16.58 1.5 14.833 1.5 12.862V6.638c0-1.97 1.405-3.718 3.413-3.979Z">--}}
{{--                                    </path>--}}
{{--                                    <path--}}
{{--                                        d="M15.75 7.5c-1.376 0-2.739.057-4.086.169C10.124 7.797 9 9.103 9 10.609v4.285c0 1.507 1.128 2.814 2.67 2.94 1.243.102 2.5.157 3.768.165l2.782 2.781a.75.75 0 0 0 1.28-.53v-2.39l.33-.026c1.542-.125 2.67-1.433 2.67-2.94v-4.286c0-1.505-1.125-2.811-2.664-2.94A49.392 49.392 0 0 0 15.75 7.5Z">--}}
{{--                                    </path>--}}
{{--                                </svg>--}}

{{--                            </div>--}}
{{--                            <div class="mt-4 sm:mt-0 sm:ml-3">--}}
{{--                                <h5 class="text-xl font-bold mb-1">Negotiate Transparently</h5>--}}
{{--                                <p class="text-lg text-gray-500">Found a potential collaboration? It's time to negotiate. Use our--}}
{{--                                    negotiation tools for transparent and fair discussions. From deliverables to compensation, our--}}
{{--                                    platform supports open communication to ensure both influencers and brands are satisfied.</p>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                    <div class="w-full sm:w-1/2 lg:w-1/3 px-4 mb-16">--}}
{{--                        <div class="sm:flex items-start max-w-xs mx-auto sm:mx-0">--}}
{{--                            <div class="flex-shrink-0 flex items-center justify-center w-8 h-8 rounded-full bg-gray-50">--}}
{{--                                <svg xmlns="http://www.w3.org/2000/svg" viewbox="0 0 24 24" fill="currentColor" class="">--}}
{{--                                    <path d="M4.5 3.75a3 3 0 0 0-3 3v.75h21v-.75a3 3 0 0 0-3-3h-15Z"></path>--}}
{{--                                    <path fill-rule="evenodd"--}}
{{--                                          d="M22.5 9.75h-21v7.5a3 3 0 0 0 3 3h15a3 3 0 0 0 3-3v-7.5Zm-18 3.75a.75.75 0 0 1 .75-.75h6a.75.75 0 0 1 0 1.5h-6a.75.75 0 0 1-.75-.75Zm.75 2.25a.75.75 0 0 0 0 1.5h3a.75.75 0 0 0 0-1.5h-3Z"--}}
{{--                                          clip-rule="evenodd"></path>--}}
{{--                                </svg>--}}

{{--                            </div>--}}
{{--                            <div class="mt-4 sm:mt-0 sm:ml-3">--}}
{{--                                <h5 class="text-xl font-bold mb-1">Secure and Efficient Payments</h5>--}}
{{--                                <p class="text-lg text-gray-500">We care for your well-being with dental and vision benefitsOnce terms--}}
{{--                                    are agreed upon, our secure payment processing system ensures smooth transactions. Complete with--}}
{{--                                    additional features like invoicing and detailed analytics, we prioritize financial transparency for--}}
{{--                                    a hassle-free experience..</p>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                    </div>--}}

{{--                </div>--}}
{{--                <img class="absolute bottom-0 left-1/2 transform -translate-x-1/2 xs:-mb-10 md:-mb-20 lg:-mb-32 block"--}}
{{--                     src="aurora-assets/features/green-light-shadow.png" alt="">--}}
{{--            </div>--}}
{{--        </div>--}}
{{--    </section>--}}

{{--    <section class="relative py-12 md:py-24 bg-gray-50">--}}
{{--        <div class="container px-4 mx-auto">--}}
{{--            <div class="flex flex-wrap -mx-4">--}}
{{--                <div class="w-full md:w-1/2 lg:w-5/12 px-4 mb-20 lg:mb-0">--}}
{{--                    <div class="max-w-xs mb-10">--}}
{{--              <span--}}
{{--                  class="inline-flex items-center h-6 mb-4 px-2 text-sm uppercase font-medium text-gray-700 bg-gray-100 rounded-full text-yellowGreen-700 bg-yellowGreen-200">INFLUENCERS</span>--}}
{{--                        <h1 class="font-heading tracking-tight text-4xl sm:text-5xl font-bold mb-4">Influencer Experience on IXC--}}
{{--                        </h1>--}}
{{--                        <p class="text-gray-700 mb-10">Showcase your work, and be part of a community that empowers you to reach--}}
{{--                            new heights in your influencer journey.</p>--}}
{{--                        <ul>--}}
{{--                            <li class="flex mb-5 items-center">--}}
{{--                                <div class="flex items-center justify-center w-8 h-8 mr-3 p-px">--}}
{{--                                    <div class="flex items-center justify-center bg-gray-50 h-full w-full rounded-full">--}}
{{--                                        <svg xmlns="http://www.w3.org/2000/svg" viewbox="0 0 24 24" fill="currentColor" class="">--}}
{{--                                            <path--}}
{{--                                                d="M18.375 2.25c-1.035 0-1.875.84-1.875 1.875v15.75c0 1.035.84 1.875 1.875 1.875h.75c1.035 0 1.875-.84 1.875-1.875V4.125c0-1.036-.84-1.875-1.875-1.875h-.75ZM9.75 8.625c0-1.036.84-1.875 1.875-1.875h.75c1.036 0 1.875.84 1.875 1.875v11.25c0 1.035-.84 1.875-1.875 1.875h-.75a1.875 1.875 0 0 1-1.875-1.875V8.625ZM3 13.125c0-1.036.84-1.875 1.875-1.875h.75c1.036 0 1.875.84 1.875 1.875v6.75c0 1.035-.84 1.875-1.875 1.875h-.75A1.875 1.875 0 0 1 3 19.875v-6.75Z">--}}
{{--                                            </path>--}}
{{--                                        </svg>--}}

{{--                                    </div>--}}
{{--                                </div>--}}
{{--                                <span class="font-semibold">Diverse Opportunities</span>--}}
{{--                            </li>--}}
{{--                            <li class="flex mb-5 items-center">--}}
{{--                                <div--}}
{{--                                    class="flex items-center justify-center w-8 h-8 mr-3 p-px rounded-full bg-gradient-to-br from-gray-200 to-gray-200">--}}
{{--                                    <div class="flex items-center justify-center bg-gray-50 h-full w-full rounded-full">--}}
{{--                                        <svg xmlns="http://www.w3.org/2000/svg" viewbox="0 0 24 24" fill="currentColor" class="">--}}
{{--                                            <path--}}
{{--                                                d="M4.5 6.375a4.125 4.125 0 1 1 8.25 0 4.125 4.125 0 0 1-8.25 0ZM14.25 8.625a3.375 3.375 0 1 1 6.75 0 3.375 3.375 0 0 1-6.75 0ZM1.5 19.125a7.125 7.125 0 0 1 14.25 0v.003l-.001.119a.75.75 0 0 1-.363.63 13.067 13.067 0 0 1-6.761 1.873c-2.472 0-4.786-.684-6.76-1.873a.75.75 0 0 1-.364-.63l-.001-.122ZM17.25 19.128l-.001.144a2.25 2.25 0 0 1-.233.96 10.088 10.088 0 0 0 5.06-1.01.75.75 0 0 0 .42-.643 4.875 4.875 0 0 0-6.957-4.611 8.586 8.586 0 0 1 1.71 5.157v.003Z">--}}
{{--                                            </path>--}}
{{--                                        </svg>--}}

{{--                                    </div>--}}
{{--                                </div>--}}
{{--                                <span class="font-semibold">Effortless Matching</span>--}}
{{--                            </li>--}}
{{--                            <li class="flex items-center">--}}
{{--                                <div--}}
{{--                                    class="flex items-center justify-center w-8 h-8 mr-3 p-px rounded-full bg-gradient-to-br from-gray-200 to-gray-200">--}}
{{--                                    <div class="flex items-center justify-center bg-gray-50 h-full w-full rounded-full">--}}
{{--                                        <svg xmlns="http://www.w3.org/2000/svg" viewbox="0 0 24 24" fill="currentColor" class="">--}}
{{--                                            <path d="M4.5 3.75a3 3 0 0 0-3 3v.75h21v-.75a3 3 0 0 0-3-3h-15Z"></path>--}}
{{--                                            <path fill-rule="evenodd"--}}
{{--                                                  d="M22.5 9.75h-21v7.5a3 3 0 0 0 3 3h15a3 3 0 0 0 3-3v-7.5Zm-18 3.75a.75.75 0 0 1 .75-.75h6a.75.75 0 0 1 0 1.5h-6a.75.75 0 0 1-.75-.75Zm.75 2.25a.75.75 0 0 0 0 1.5h3a.75.75 0 0 0 0-1.5h-3Z"--}}
{{--                                                  clip-rule="evenodd"></path>--}}
{{--                                        </svg>--}}

{{--                                    </div>--}}
{{--                                </div>--}}
{{--                                <span class="font-semibold">Secure Payments, Hassle-Free Transactions</span>--}}
{{--                            </li>--}}
{{--                        </ul>--}}
{{--                    </div>--}}
{{--                    <a class="xs:flex-shrink-0 group relative w-full xs:w-auto h-12 flex xs:inline-flex items-center justify-center px-5 font-bold text-gray-700 bg-white border border-gray-200 hover:border-yellowGreen-600 shadow-md hover:shadow-none rounded-lg transition-all duration-300 focus:outline-none"--}}
{{--                       href="#">--}}
{{--                        <div--}}
{{--                            class="absolute top-0 left-0 w-full h-full rounded-lg ring ring-gray-100 animate-pulse group-hover:ring-0 transition duration-300">--}}
{{--                        </div>--}}
{{--                        <span class="mr-2">Learn more</span>--}}
{{--                        <span class="transform group-hover:translate-x-1 transition duration-300">--}}
{{--                <svg width="20" height="20" viewbox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">--}}
{{--                  <path d="M7.5 5L12.5 10L7.5 15" stroke="#3B5444" stroke-width="1.5" stroke-linecap="round"--}}
{{--                        stroke-linejoin="round"></path>--}}
{{--                </svg>--}}
{{--              </span>--}}
{{--                    </a>--}}
{{--                </div>--}}
{{--                <div class="w-full md:w-1/2 lg:w-7/12 px-4">--}}
{{--                    <div>--}}
{{--                        <div class="flex items-start max-w-xl mb-12">--}}
{{--                            <div--}}
{{--                                class="flex-shrink-0 flex items-center justify-center w-8 h-8 mr-6 p-px rounded-full bg-gradient-to-br from-cyanGreen-800 to-cyan-800">--}}
{{--                                <div class="flex items-center justify-center bg-gray-50 h-full w-full rounded-full">--}}
{{--                                    <svg xmlns="http://www.w3.org/2000/svg" viewbox="0 0 24 24" fill="currentColor" class="">--}}
{{--                                        <path--}}
{{--                                            d="M18 1.5c2.9 0 5.25 2.35 5.25 5.25v3.75a.75.75 0 0 1-1.5 0V6.75a3.75 3.75 0 1 0-7.5 0v3a3 3 0 0 1 3 3v6.75a3 3 0 0 1-3 3H3.75a3 3 0 0 1-3-3v-6.75a3 3 0 0 1 3-3h9v-3c0-2.9 2.35-5.25 5.25-5.25Z">--}}
{{--                                        </path>--}}
{{--                                    </svg>--}}

{{--                                </div>--}}
{{--                            </div>--}}
{{--                            <div>--}}
{{--                                <h5 class="text-lg font-semibold mb-1">Unlock Your Potential</h5>--}}
{{--                                <p class="text-gray-500">Discover endless collaboration opportunities tailored to your content style--}}
{{--                                    and audience. Showcase your unique talents to brands looking for influencers just like you.</p>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                        <div>--}}
{{--                            <img class="block" src="images/bccf5eb4-12ca-43b9-937a-c6c523596442-removebg-preview.png" alt="">--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--            </div>--}}
{{--        </div>--}}
{{--    </section>--}}

{{--    <section class="relative py-12 md:py-24">--}}
{{--        <div class="container px-4 mx-auto">--}}
{{--            <div class="flex flex-wrap -mx-4">--}}
{{--                <div class="w-full md:w-1/2 lg:w-5/12 px-4 mb-20 lg:mb-0">--}}
{{--                    <div class="max-w-xs mb-10">--}}
{{--              <span--}}
{{--                  class="inline-flex items-center h-6 mb-4 px-2 text-sm uppercase font-medium text-yellowGreen-700 bg-yellowGreen-200 rounded-full">BRANDS</span>--}}
{{--                        <h1 class="font-heading tracking-tight text-4xl sm:text-5xl font-bold mb-4">Brands Empowered on IXC</h1>--}}
{{--                        <p class="text-gray-700 mb-10">Collaborate with influencers and unlock new opportunities for your brand.--}}
{{--                        </p>--}}
{{--                        <ul>--}}
{{--                            <li class="flex mb-5 items-center">--}}
{{--                                <div class="flex items-center justify-center w-8 h-8 mr-3 p-px rounded-full">--}}
{{--                                    <div class="flex items-center justify-center bg-white h-full w-full rounded-full">--}}
{{--                                        <svg xmlns="http://www.w3.org/2000/svg" viewbox="0 0 24 24" fill="currentColor" class="">--}}
{{--                                            <path fill-rule="evenodd"--}}
{{--                                                  d="M19.902 4.098a3.75 3.75 0 0 0-5.304 0l-4.5 4.5a3.75 3.75 0 0 0 1.035 6.037.75.75 0 0 1-.646 1.353 5.25 5.25 0 0 1-1.449-8.45l4.5-4.5a5.25 5.25 0 1 1 7.424 7.424l-1.757 1.757a.75.75 0 1 1-1.06-1.06l1.757-1.757a3.75 3.75 0 0 0 0-5.304Zm-7.389 4.267a.75.75 0 0 1 1-.353 5.25 5.25 0 0 1 1.449 8.45l-4.5 4.5a5.25 5.25 0 1 1-7.424-7.424l1.757-1.757a.75.75 0 1 1 1.06 1.06l-1.757 1.757a3.75 3.75 0 1 0 5.304 5.304l4.5-4.5a3.75 3.75 0 0 0-1.035-6.037.75.75 0 0 1-.354-1Z"--}}
{{--                                                  clip-rule="evenodd"></path>--}}
{{--                                        </svg>--}}

{{--                                    </div>--}}
{{--                                </div>--}}
{{--                                <span class="font-semibold">Efficient Collaboration</span>--}}
{{--                            </li>--}}
{{--                            <li class="flex mb-5 items-center">--}}
{{--                                <div--}}
{{--                                    class="flex items-center justify-center w-8 h-8 mr-3 p-px rounded-full bg-gradient-to-br from-gray-200 to-gray-200">--}}
{{--                                    <div class="flex items-center justify-center bg-white h-full w-full rounded-full">--}}
{{--                                        <svg xmlns="http://www.w3.org/2000/svg" viewbox="0 0 24 24" fill="currentColor" class="">--}}
{{--                                            <path fill-rule="evenodd"--}}
{{--                                                  d="M4.5 3.75a3 3 0 0 0-3 3v10.5a3 3 0 0 0 3 3h15a3 3 0 0 0 3-3V6.75a3 3 0 0 0-3-3h-15Zm4.125 3a2.25 2.25 0 1 0 0 4.5 2.25 2.25 0 0 0 0-4.5Zm-3.873 8.703a4.126 4.126 0 0 1 7.746 0 .75.75 0 0 1-.351.92 7.47 7.47 0 0 1-3.522.877 7.47 7.47 0 0 1-3.522-.877.75.75 0 0 1-.351-.92ZM15 8.25a.75.75 0 0 0 0 1.5h3.75a.75.75 0 0 0 0-1.5H15ZM14.25 12a.75.75 0 0 1 .75-.75h3.75a.75.75 0 0 1 0 1.5H15a.75.75 0 0 1-.75-.75Zm.75 2.25a.75.75 0 0 0 0 1.5h3.75a.75.75 0 0 0 0-1.5H15Z"--}}
{{--                                                  clip-rule="evenodd"></path>--}}
{{--                                        </svg>--}}

{{--                                    </div>--}}
{{--                                </div>--}}
{{--                                <span class="font-semibold">Tailored Brand Profiles</span>--}}
{{--                            </li>--}}
{{--                            <li class="flex items-center">--}}
{{--                                <div--}}
{{--                                    class="flex items-center justify-center w-8 h-8 mr-3 p-px rounded-full bg-gradient-to-br from-gray-200 to-gray-200">--}}
{{--                                    <div class="flex items-center justify-center bg-white h-full w-full rounded-full">--}}
{{--                                        <svg xmlns="http://www.w3.org/2000/svg" viewbox="0 0 24 24" fill="currentColor" class="">--}}
{{--                                            <path d="M4.5 3.75a3 3 0 0 0-3 3v.75h21v-.75a3 3 0 0 0-3-3h-15Z"></path>--}}
{{--                                            <path fill-rule="evenodd"--}}
{{--                                                  d="M22.5 9.75h-21v7.5a3 3 0 0 0 3 3h15a3 3 0 0 0 3-3v-7.5Zm-18 3.75a.75.75 0 0 1 .75-.75h6a.75.75 0 0 1 0 1.5h-6a.75.75 0 0 1-.75-.75Zm.75 2.25a.75.75 0 0 0 0 1.5h3a.75.75 0 0 0 0-1.5h-3Z"--}}
{{--                                                  clip-rule="evenodd"></path>--}}
{{--                                        </svg>--}}

{{--                                    </div>--}}
{{--                                </div>--}}
{{--                                <span class="font-semibold">Secure Transactions, Transparent Negotiations</span>--}}
{{--                            </li>--}}
{{--                        </ul>--}}
{{--                    </div>--}}
{{--                    <a class="xs:flex-shrink-0 group relative w-full xs:w-auto h-12 flex xs:inline-flex items-center justify-center px-5 font-bold text-gray-700 bg-white border border-gray-200 hover:border-yellowGreen-600 shadow-md hover:shadow-none rounded-lg transition-all duration-300 focus:outline-none"--}}
{{--                       href="#">--}}
{{--                        <div--}}
{{--                            class="absolute top-0 left-0 w-full h-full rounded-lg ring ring-gray-100 animate-pulse group-hover:ring-0 transition duration-300">--}}
{{--                        </div>--}}
{{--                        <span class="mr-2">Learn more</span>--}}
{{--                        <span class="transform group-hover:translate-x-1 transition duration-300">--}}
{{--                <svg width="20" height="20" viewbox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">--}}
{{--                  <path d="M7.5 5L12.5 10L7.5 15" stroke="#3B5444" stroke-width="1.5" stroke-linecap="round"--}}
{{--                        stroke-linejoin="round"></path>--}}
{{--                </svg>--}}
{{--              </span>--}}
{{--                    </a>--}}
{{--                </div>--}}
{{--                <div class="w-full md:w-1/2 lg:w-7/12 px-4">--}}
{{--                    <div>--}}
{{--                        <div class="flex items-start max-w-xl mb-12">--}}
{{--                            <div--}}
{{--                                class="flex-shrink-0 flex items-center justify-center w-8 h-8 mr-6 p-px rounded-full bg-gradient-to-br from-cyanGreen-800 to-cyan-800">--}}
{{--                                <div class="flex items-center justify-center bg-white h-full w-full rounded-full">--}}
{{--                                    <svg xmlns="http://www.w3.org/2000/svg" viewbox="0 0 24 24" fill="currentColor" class="">--}}
{{--                                        <path d="M8.25 10.875a2.625 2.625 0 1 1 5.25 0 2.625 2.625 0 0 1-5.25 0Z"></path>--}}
{{--                                        <path fill-rule="evenodd"--}}
{{--                                              d="M12 2.25c-5.385 0-9.75 4.365-9.75 9.75s4.365 9.75 9.75 9.75 9.75-4.365 9.75-9.75S17.385 2.25 12 2.25Zm-1.125 4.5a4.125 4.125 0 1 0 2.338 7.524l2.007 2.006a.75.75 0 1 0 1.06-1.06l-2.006-2.007a4.125 4.125 0 0 0-3.399-6.463Z"--}}
{{--                                              clip-rule="evenodd"></path>--}}
{{--                                    </svg>--}}

{{--                                </div>--}}
{{--                            </div>--}}
{{--                            <div>--}}
{{--                                <h5 class="text-lg font-semibold mb-1">Discover Authentic Influencers</h5>--}}
{{--                                <p class="text-gray-500">Connect with influencers who align with your brand values and resonate with--}}
{{--                                    your target audience. Explore a diverse pool of content creators spanning various niches.</p>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                        <div>--}}
{{--                            <img class="block" src="images/f166b9d4-7838-4093-8253-f8856028706e-removebg-preview.png" alt="">--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--            </div>--}}
{{--        </div>--}}
{{--    </section>--}}

{{--    <section class="relative py-12 md:py-24">--}}
{{--        <div class="container px-4 mx-auto">--}}
{{--            <div class="text-center mb-20">--}}
{{--                <h1 class="font-heading tracking-tight text-4xl sm:text-5xl font-semibold">Frequently asked questions</h1>--}}
{{--            </div>--}}
{{--            <div class="max-w-6xl mx-auto">--}}
{{--                <div class="flex flex-wrap -mx-4">--}}
{{--                    <div class="w-full md:w-1/2 px-4 mb-3 md:mb-0">--}}
{{--                        <button--}}
{{--                            class="group flex mb-3 items-center justify-between text-left w-full px-6 py-5 rounded-xl shadow-sm border border-gray-100 hover:border-yellowGreen-500 ring ring-transparent hover:ring-yellowGreen-500 focus:outline-none">--}}
{{--                            <div class="pr-4">--}}
{{--                                <h6 class="font-semibold">What is influencerXchange?</h6>--}}
{{--                                <p class="hidden group-hover:block mt-2 text-sm text-gray-500">influencerXchange is a collaborative--}}
{{--                                    hub connecting influencers and brands for meaningful partnerships. It streamlines the collaboration--}}
{{--                                    process, making it easy for influencers to find suitable brands and vice versa.</p>--}}
{{--                            </div>--}}
{{--                            <div class="flex-shrink-0 flex w-7 h-7 items-center justify-center bg-gray-100 rounded-full">--}}
{{--                                <svg class="group-hover:hidden" width="16" height="16" viewbox="0 0 16 16" fill="none"--}}
{{--                                     xmlns="http://www.w3.org/2000/svg">--}}
{{--                                    <path d="M4 6L8 10L12 6" stroke="#041109" stroke-width="1.5" stroke-linecap="round"--}}
{{--                                          stroke-linejoin="round"></path>--}}
{{--                                </svg>--}}
{{--                                <svg class="hidden group-hover:block" width="16" height="16" viewbox="0 0 16 16" fill="none"--}}
{{--                                     xmlns="http://www.w3.org/2000/svg">--}}
{{--                                    <path d="M4 10L8 6L12 10" stroke="#041109" stroke-width="1.5" stroke-linecap="round"--}}
{{--                                          stroke-linejoin="round"></path>--}}
{{--                                </svg>--}}
{{--                            </div>--}}
{{--                        </button>--}}
{{--                        <button--}}
{{--                            class="group flex mb-3 items-center justify-between text-left w-full px-6 py-5 rounded-xl shadow-sm border border-gray-100 hover:border-yellowGreen-500 ring ring-transparent hover:ring-yellowGreen-500 focus:outline-none">--}}
{{--                            <div class="pr-4">--}}
{{--                                <h6 class="font-semibold"> How do I sign up on IXC?</h6>--}}
{{--                                <p class="hidden group-hover:block mt-2 text-sm text-gray-500">Signing up is simple! Click on the--}}
{{--                                    "Sign Up" button, fill in your details, and follow the prompts to create your account. Welcome to--}}
{{--                                    the community!</p>--}}
{{--                            </div>--}}
{{--                            <div class="flex-shrink-0 flex w-7 h-7 items-center justify-center bg-gray-100 rounded-full">--}}
{{--                                <svg class="group-hover:hidden" width="16" height="16" viewbox="0 0 16 16" fill="none"--}}
{{--                                     xmlns="http://www.w3.org/2000/svg">--}}
{{--                                    <path d="M4 6L8 10L12 6" stroke="#041109" stroke-width="1.5" stroke-linecap="round"--}}
{{--                                          stroke-linejoin="round"></path>--}}
{{--                                </svg>--}}
{{--                                <svg class="hidden group-hover:block" width="16" height="16" viewbox="0 0 16 16" fill="none"--}}
{{--                                     xmlns="http://www.w3.org/2000/svg">--}}
{{--                                    <path d="M4 10L8 6L12 10" stroke="#041109" stroke-width="1.5" stroke-linecap="round"--}}
{{--                                          stroke-linejoin="round"></path>--}}
{{--                                </svg>--}}
{{--                            </div>--}}
{{--                        </button>--}}
{{--                        <button--}}
{{--                            class="group flex mb-3 items-center justify-between text-left w-full px-6 py-5 rounded-xl shadow-sm border border-gray-100 hover:border-yellowGreen-500 ring ring-transparent hover:ring-yellowGreen-500 focus:outline-none">--}}
{{--                            <div class="pr-4">--}}
{{--                                <h6 class="font-semibold">Is it free to join IXC? </h6>--}}
{{--                                <p class="hidden group-hover:block mt-2 text-sm text-gray-500"> Yes, joining IXC is completely free--}}
{{--                                    for both influencers and brands.</p>--}}
{{--                            </div>--}}
{{--                            <div class="flex-shrink-0 flex w-7 h-7 items-center justify-center bg-gray-100 rounded-full">--}}
{{--                                <svg class="group-hover:hidden" width="16" height="16" viewbox="0 0 16 16" fill="none"--}}
{{--                                     xmlns="http://www.w3.org/2000/svg">--}}
{{--                                    <path d="M4 6L8 10L12 6" stroke="#041109" stroke-width="1.5" stroke-linecap="round"--}}
{{--                                          stroke-linejoin="round"></path>--}}
{{--                                </svg>--}}
{{--                                <svg class="hidden group-hover:block" width="16" height="16" viewbox="0 0 16 16" fill="none"--}}
{{--                                     xmlns="http://www.w3.org/2000/svg">--}}
{{--                                    <path d="M4 10L8 6L12 10" stroke="#041109" stroke-width="1.5" stroke-linecap="round"--}}
{{--                                          stroke-linejoin="round"></path>--}}
{{--                                </svg>--}}
{{--                            </div>--}}
{{--                        </button>--}}
{{--                        <button--}}
{{--                            class="group flex mb-3 items-center justify-between text-left w-full px-6 py-5 rounded-xl shadow-sm border border-gray-100 hover:border-yellowGreen-500 ring ring-transparent hover:ring-yellowGreen-500 focus:outline-none">--}}
{{--                            <div class="pr-4">--}}
{{--                                <h6 class="font-semibold">How can I showcase my work on IXC?</h6>--}}
{{--                                <p class="hidden group-hover:block mt-2 text-sm text-gray-500">After signing up, create a detailed--}}
{{--                                    profile. Highlight your content categories, demographics, and previous brand collaborations to stand--}}
{{--                                    out to potential partners.</p>--}}
{{--                            </div>--}}
{{--                            <div class="flex-shrink-0 flex w-7 h-7 items-center justify-center bg-gray-100 rounded-full">--}}
{{--                                <svg class="group-hover:hidden" width="16" height="16" viewbox="0 0 16 16" fill="none"--}}
{{--                                     xmlns="http://www.w3.org/2000/svg">--}}
{{--                                    <path d="M4 6L8 10L12 6" stroke="#041109" stroke-width="1.5" stroke-linecap="round"--}}
{{--                                          stroke-linejoin="round"></path>--}}
{{--                                </svg>--}}
{{--                                <svg class="hidden group-hover:block" width="16" height="16" viewbox="0 0 16 16" fill="none"--}}
{{--                                     xmlns="http://www.w3.org/2000/svg">--}}
{{--                                    <path d="M4 10L8 6L12 10" stroke="#041109" stroke-width="1.5" stroke-linecap="round"--}}
{{--                                          stroke-linejoin="round"></path>--}}
{{--                                </svg>--}}
{{--                            </div>--}}
{{--                        </button>--}}
{{--                        <button--}}
{{--                            class="group flex items-center justify-between text-left w-full px-6 py-5 rounded-xl shadow-sm border border-gray-100 hover:border-yellowGreen-500 ring ring-transparent hover:ring-yellowGreen-500 focus:outline-none">--}}
{{--                            <div class="pr-4">--}}
{{--                                <h6 class="font-semibold">How does the matching algorithm work for influencers?</h6>--}}
{{--                                <p class="hidden group-hover:block mt-2 text-sm text-gray-500">Our matching algorithm considers your--}}
{{--                                    interests, values, and audience demographics to connect you with brands that align with your--}}
{{--                                    profile.</p>--}}
{{--                            </div>--}}
{{--                            <div class="flex-shrink-0 flex w-7 h-7 items-center justify-center bg-gray-100 rounded-full">--}}
{{--                                <svg class="group-hover:hidden" width="16" height="16" viewbox="0 0 16 16" fill="none"--}}
{{--                                     xmlns="http://www.w3.org/2000/svg">--}}
{{--                                    <path d="M4 6L8 10L12 6" stroke="#041109" stroke-width="1.5" stroke-linecap="round"--}}
{{--                                          stroke-linejoin="round"></path>--}}
{{--                                </svg>--}}
{{--                                <svg class="hidden group-hover:block" width="16" height="16" viewbox="0 0 16 16" fill="none"--}}
{{--                                     xmlns="http://www.w3.org/2000/svg">--}}
{{--                                    <path d="M4 10L8 6L12 10" stroke="#041109" stroke-width="1.5" stroke-linecap="round"--}}
{{--                                          stroke-linejoin="round"></path>--}}
{{--                                </svg>--}}
{{--                            </div>--}}
{{--                        </button>--}}
{{--                    </div>--}}
{{--                    <div class="w-full md:w-1/2 px-4">--}}
{{--                        <button--}}
{{--                            class="group flex mb-3 items-center justify-between text-left w-full px-6 py-5 rounded-xl shadow-sm border border-gray-100 hover:border-yellowGreen-500 ring ring-transparent hover:ring-yellowGreen-500 focus:outline-none">--}}
{{--                            <div class="pr-4">--}}
{{--                                <h6 class="font-semibold">How can I negotiate deals on IXC?</h6>--}}
{{--                                <p class="hidden group-hover:block mt-2 text-sm text-gray-500">Use our negotiation tools for--}}
{{--                                    transparent and fair discussions with brands. Discuss deliverables, compensation, and other details--}}
{{--                                    to ensure a mutually beneficial collaboration.</p>--}}
{{--                            </div>--}}
{{--                            <div class="flex-shrink-0 flex w-7 h-7 items-center justify-center bg-gray-100 rounded-full">--}}
{{--                                <svg class="group-hover:hidden" width="16" height="16" viewbox="0 0 16 16" fill="none"--}}
{{--                                     xmlns="http://www.w3.org/2000/svg">--}}
{{--                                    <path d="M4 6L8 10L12 6" stroke="#041109" stroke-width="1.5" stroke-linecap="round"--}}
{{--                                          stroke-linejoin="round"></path>--}}
{{--                                </svg>--}}
{{--                                <svg class="hidden group-hover:block" width="16" height="16" viewbox="0 0 16 16" fill="none"--}}
{{--                                     xmlns="http://www.w3.org/2000/svg">--}}
{{--                                    <path d="M4 10L8 6L12 10" stroke="#041109" stroke-width="1.5" stroke-linecap="round"--}}
{{--                                          stroke-linejoin="round"></path>--}}
{{--                                </svg>--}}
{{--                            </div>--}}
{{--                        </button>--}}
{{--                        <button--}}
{{--                            class="group flex mb-3 items-center justify-between text-left w-full px-6 py-5 rounded-xl shadow-sm border border-gray-100 hover:border-yellowGreen-500 ring ring-transparent hover:ring-yellowGreen-500 focus:outline-none">--}}
{{--                            <div class="pr-4">--}}
{{--                                <h6 class="font-semibold">How do I find influencers on IXC?</h6>--}}
{{--                                <p class="hidden group-hover:block mt-2 text-sm text-gray-500">Explore our diverse database of--}}
{{--                                    influencers. Filter based on niche, engagement rate, and more to discover influencers that match--}}
{{--                                    your brand.</p>--}}
{{--                            </div>--}}
{{--                            <div class="flex-shrink-0 flex w-7 h-7 items-center justify-center bg-gray-100 rounded-full">--}}
{{--                                <svg class="group-hover:hidden" width="16" height="16" viewbox="0 0 16 16" fill="none"--}}
{{--                                     xmlns="http://www.w3.org/2000/svg">--}}
{{--                                    <path d="M4 6L8 10L12 6" stroke="#041109" stroke-width="1.5" stroke-linecap="round"--}}
{{--                                          stroke-linejoin="round"></path>--}}
{{--                                </svg>--}}
{{--                                <svg class="hidden group-hover:block" width="16" height="16" viewbox="0 0 16 16" fill="none"--}}
{{--                                     xmlns="http://www.w3.org/2000/svg">--}}
{{--                                    <path d="M4 10L8 6L12 10" stroke="#041109" stroke-width="1.5" stroke-linecap="round"--}}
{{--                                          stroke-linejoin="round"></path>--}}
{{--                                </svg>--}}
{{--                            </div>--}}
{{--                        </button>--}}
{{--                        <button--}}
{{--                            class="group flex mb-3 items-center justify-between text-left w-full px-6 py-5 rounded-xl shadow-sm border border-gray-100 hover:border-yellowGreen-500 ring ring-transparent hover:ring-yellowGreen-500 focus:outline-none">--}}
{{--                            <div class="pr-4">--}}
{{--                                <h6 class="font-semibold">Can I see examples of influencers' previous collaborations?</h6>--}}
{{--                                <p class="hidden group-hover:block mt-2 text-sm text-gray-500">Yes, influencers showcase their--}}
{{--                                    previous collaborations on their profiles. Browse through to see their work and success stories.</p>--}}
{{--                            </div>--}}
{{--                            <div class="flex-shrink-0 flex w-7 h-7 items-center justify-center bg-gray-100 rounded-full">--}}
{{--                                <svg class="group-hover:hidden" width="16" height="16" viewbox="0 0 16 16" fill="none"--}}
{{--                                     xmlns="http://www.w3.org/2000/svg">--}}
{{--                                    <path d="M4 6L8 10L12 6" stroke="#041109" stroke-width="1.5" stroke-linecap="round"--}}
{{--                                          stroke-linejoin="round"></path>--}}
{{--                                </svg>--}}
{{--                                <svg class="hidden group-hover:block" width="16" height="16" viewbox="0 0 16 16" fill="none"--}}
{{--                                     xmlns="http://www.w3.org/2000/svg">--}}
{{--                                    <path d="M4 10L8 6L12 10" stroke="#041109" stroke-width="1.5" stroke-linecap="round"--}}
{{--                                          stroke-linejoin="round"></path>--}}
{{--                                </svg>--}}
{{--                            </div>--}}
{{--                        </button>--}}
{{--                        <button--}}
{{--                            class="group flex mb-3 items-center justify-between text-left w-full px-6 py-5 rounded-xl shadow-sm border border-gray-100 hover:border-yellowGreen-500 ring ring-transparent hover:ring-yellowGreen-500 focus:outline-none">--}}
{{--                            <div class="pr-4">--}}
{{--                                <h6 class="font-semibold">How does payment processing work on IXC?</h6>--}}
{{--                                <p class="hidden group-hover:block mt-2 text-sm text-gray-500">Once collaboration terms are agreed--}}
{{--                                    upon, our secure payment processing system facilitates transactions. Additional features include--}}
{{--                                    invoicing and detailed analytics.</p>--}}
{{--                            </div>--}}
{{--                            <div class="flex-shrink-0 flex w-7 h-7 items-center justify-center bg-gray-100 rounded-full">--}}
{{--                                <svg class="group-hover:hidden" width="16" height="16" viewbox="0 0 16 16" fill="none"--}}
{{--                                     xmlns="http://www.w3.org/2000/svg">--}}
{{--                                    <path d="M4 6L8 10L12 6" stroke="#041109" stroke-width="1.5" stroke-linecap="round"--}}
{{--                                          stroke-linejoin="round"></path>--}}
{{--                                </svg>--}}
{{--                                <svg class="hidden group-hover:block" width="16" height="16" viewbox="0 0 16 16" fill="none"--}}
{{--                                     xmlns="http://www.w3.org/2000/svg">--}}
{{--                                    <path d="M4 10L8 6L12 10" stroke="#041109" stroke-width="1.5" stroke-linecap="round"--}}
{{--                                          stroke-linejoin="round"></path>--}}
{{--                                </svg>--}}
{{--                            </div>--}}
{{--                        </button>--}}
{{--                        <button--}}
{{--                            class="group flex items-center justify-between text-left w-full px-6 py-5 rounded-xl shadow-sm border border-gray-100 hover:border-yellowGreen-500 ring ring-transparent hover:ring-yellowGreen-500 focus:outline-none">--}}
{{--                            <div class="pr-4">--}}
{{--                                <h6 class="font-semibold">How can I get support if I have questions or issues?</h6>--}}
{{--                                <p class="hidden group-hover:block mt-2 text-sm text-gray-500">Reach out to our customer support team--}}
{{--                                    through the contact form on the "Contact" page. We're here to assist you!</p>--}}
{{--                            </div>--}}
{{--                            <div class="flex-shrink-0 flex w-7 h-7 items-center justify-center bg-gray-100 rounded-full">--}}
{{--                                <svg class="group-hover:hidden" width="16" height="16" viewbox="0 0 16 16" fill="none"--}}
{{--                                     xmlns="http://www.w3.org/2000/svg">--}}
{{--                                    <path d="M4 6L8 10L12 6" stroke="#041109" stroke-width="1.5" stroke-linecap="round"--}}
{{--                                          stroke-linejoin="round"></path>--}}
{{--                                </svg>--}}
{{--                                <svg class="hidden group-hover:block" width="16" height="16" viewbox="0 0 16 16" fill="none"--}}
{{--                                     xmlns="http://www.w3.org/2000/svg">--}}
{{--                                    <path d="M4 10L8 6L12 10" stroke="#041109" stroke-width="1.5" stroke-linecap="round"--}}
{{--                                          stroke-linejoin="round"></path>--}}
{{--                                </svg>--}}
{{--                            </div>--}}
{{--                        </button>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--            </div>--}}
{{--        </div>--}}
{{--    </section>--}}

{{--    <section class="relative overflow-hidden">--}}
{{--        <div class="pt-24 pb-80 md:pb-52 lg:pb-24 bg-gray-50">--}}
{{--            <div class="container px-4 mx-auto">--}}
{{--                <div class="max-w-sm">--}}
{{--                    <h1 class="font-heading tracking-tight text-4xl xs:text-5xl font-bold mb-4">Contact Us</h1>--}}
{{--                    <p class="max-w-xs text-lg text-gray-500">Submit your info and we’ll get back to you as soon as possible.--}}
{{--                    </p>--}}
{{--                </div>--}}
{{--            </div>--}}
{{--        </div>--}}
{{--        <div class="py-12 md:py-24 lg:pb-24 bg-white">--}}
{{--            <div class="relative container px-4 mx-auto">--}}
{{--                <div class="-mt-60 relative z-10 lg:ml-auto max-w-xl p-8 bg-white border border-gray-100 rounded-xl">--}}
{{--                    <form action="">--}}
{{--                        <div class="flex flex-wrap -mx-4 mb-8 items-center">--}}
{{--                            <div class="w-full md:w-1/2 px-4 mb-4">--}}
{{--                                <label class="block mb-1 text-sm font-medium" for="">First name</label>--}}
{{--                                <input--}}
{{--                                    class="py-2 px-4 h-11 w-full text-gray-500 placeholder-gray-500 bg-gray-50 bg-opacity-40 border border-gray-200 focus:border-yellowGreen-500 rounded-lg outline-none ring ring-transparent focus:ring-yellowGreen-500"--}}
{{--                                    type="text" placeholder="First name">--}}
{{--                            </div>--}}
{{--                            <div class="w-full md:w-1/2 px-4 mb-4">--}}
{{--                                <label class="block mb-1 text-sm font-medium" for="">Last name</label>--}}
{{--                                <input--}}
{{--                                    class="py-2 px-4 h-11 w-full text-gray-500 placeholder-gray-500 bg-gray-50 bg-opacity-40 border border-gray-200 focus:border-yellowGreen-500 rounded-lg outline-none ring ring-transparent focus:ring-yellowGreen-500"--}}
{{--                                    type="text" placeholder="Last name">--}}
{{--                            </div>--}}
{{--                            <div class="w-full md:w-1/2 px-4 mb-4">--}}
{{--                                <label class="block mb-1 text-sm font-medium" for="">Email</label>--}}
{{--                                <input--}}
{{--                                    class="py-2 px-4 h-11 w-full text-gray-500 placeholder-gray-500 bg-gray-50 bg-opacity-40 border border-gray-200 focus:border-yellowGreen-500 rounded-lg outline-none ring ring-transparent focus:ring-yellowGreen-500"--}}
{{--                                    type="email" placeholder="john@email.com">--}}
{{--                            </div>--}}
{{--                            <div class="w-full md:w-1/2 px-4 mb-4">--}}
{{--                                <label class="block mb-1 text-sm font-medium" for="">Phone number</label>--}}
{{--                                <div class="flex h-11 bg-gray-50 bg-opacity-40 border border-gray-200 rounded-md">--}}
{{--                                    <div class="relative">--}}
{{--                                        <select--}}
{{--                                            class="relative z-10 pl-3 pr-6 w-full h-full bg-transparent focus:outline-none appearance-none cursor-pointer"--}}
{{--                                            name="" id="">--}}
{{--                                            <option value="">US</option>--}}
{{--                                            <option value="">GB</option>--}}
{{--                                            <option value="">EU</option>--}}
{{--                                        </select>--}}
{{--                                        <div class="absolute top-1/2 right-0 transform -translate-y-1/2">--}}
{{--                                            <svg width="20" height="20" viewbox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">--}}
{{--                                                <path d="M5 7.5L10 12.5L15 7.5" stroke="#6C7F73" stroke-width="1.5" stroke-linecap="round"--}}
{{--                                                      stroke-linejoin="round"></path>--}}
{{--                                            </svg>--}}
{{--                                        </div>--}}
{{--                                    </div>--}}
{{--                                    <input--}}
{{--                                        class="py-2 pl-2 pr-4 h-full text-gray-500 placeholder-gray-500 border-0 bg-transparent focus:outline-none"--}}
{{--                                        type="text" placeholder="+1 (555) 000-0000">--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                            <div class="w-full px-4">--}}
{{--                                <label class="block mb-1 text-sm font-medium" for="">Message</label>--}}
{{--                                <textarea--}}
{{--                                    class="block py-2 px-4 w-full h-44 text-gray-500 placeholder-gray-500 bg-gray-50 bg-opacity-40 border border-gray-200 focus:border-yellowGreen-500 rounded-lg outline-none ring ring-transparent focus:ring-yellowGreen-500 resize-none"--}}
{{--                                    placeholder="Enter your message"></textarea>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                        <button--}}
{{--                            class="group relative flex items-center justify-center px-5 h-12 w-full mb-8 text-base font-semibold text-white bg-gradient-to-br from-cyanGreen-800 to-cyan-800 rounded-lg transition-all duration-300"--}}
{{--                            type="submit">--}}
{{--                            <div--}}
{{--                                class="absolute top-0 left-0 w-full h-full rounded-lg ring ring-green-300 animate-pulse group-hover:ring-0 transition duration-300">--}}
{{--                            </div>--}}
{{--                            <span>Submit</span>--}}
{{--                        </button>--}}
{{--                        <p class="text-sm text-gray-500">--}}
{{--                            <span class="mr-1">We process your information in accordance with our</span>--}}
{{--                            <a class="inline-block font-semibold text-yellowGreen-700 hover:text-yellowGreen-600" href="#">Privacy--}}
{{--                                Policy</a>--}}
{{--                        </p>--}}
{{--                    </form>--}}
{{--                </div>--}}
{{--                <img class="block h-64 md:h-auto lg:h-64 xl:h-auto mt-20 lg:-mt-80 mx-auto md:mr-0 lg:mx-0"--}}
{{--                     src="images/d101a16d-3871-41ca-a187-3db6a4ea7131-removebg-preview-png-1704339637793.webp" alt="">--}}
{{--            </div>--}}
{{--        </div>--}}
{{--    </section>--}}

{{--    footer section--}}


{{--    <section class="py-12 md:pt-24">--}}
{{--        <div class="container px-4 mx-auto">--}}
{{--            <div class="flex flex-wrap -mx-4 mb-32">--}}
{{--                <div class="w-full lg:w-1/3 px-4 mb-16">--}}
{{--                    <div>--}}
{{--                        <img class="block h-8 mb-4" src="images/IXC-2-removebg-preview.png" alt="">--}}
{{--                        <span class="block text-gray-500 mb-16">Make collaboration fun again.</span>--}}
{{--                        <div class="flex items-center">--}}
{{--                            <a class="inline-flex w-12 h-12 mr-3 text-teal-900 hover:text-yellowGreen-700 items-center justify-center bg-gray-50 rounded-lg border-2 border-transparent hover:border-yellowGreen-500 transition duration-200"--}}
{{--                               href="#">--}}
{{--                                <svg width="24" height="24" viewbox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">--}}
{{--                                    <path--}}
{{--                                        d="M22.46 6C21.69 6.35 20.86 6.58 20 6.69C20.88 6.16 21.56 5.32 21.88 4.31C21.05 4.81 20.13 5.16 19.16 5.36C18.37 4.5 17.26 4 16 4C13.65 4 11.73 5.92 11.73 8.29C11.73 8.63 11.77 8.96 11.84 9.27C8.28004 9.09 5.11004 7.38 3.00004 4.79C2.63004 5.42 2.42004 6.16 2.42004 6.94C2.42004 8.43 3.17004 9.75 4.33004 10.5C3.62004 10.5 2.96004 10.3 2.38004 10V10.03C2.38004 12.11 3.86004 13.85 5.82004 14.24C5.19077 14.4122 4.53013 14.4362 3.89004 14.31C4.16165 15.1625 4.69358 15.9084 5.41106 16.4429C6.12854 16.9775 6.99549 17.2737 7.89004 17.29C6.37367 18.4904 4.49404 19.1393 2.56004 19.13C2.22004 19.13 1.88004 19.11 1.54004 19.07C3.44004 20.29 5.70004 21 8.12004 21C16 21 20.33 14.46 20.33 8.79C20.33 8.6 20.33 8.42 20.32 8.23C21.16 7.63 21.88 6.87 22.46 6Z"--}}
{{--                                        fill="currentColor"></path>--}}
{{--                                </svg>--}}
{{--                            </a>--}}
{{--                            <a class="inline-flex w-12 h-12 mr-3 text-teal-900 hover:text-yellowGreen-700 items-center justify-center bg-gray-50 rounded-lg border-2 border-transparent hover:border-yellowGreen-500 transition duration-200"--}}
{{--                               href="#">--}}
{{--                                <svg width="24" height="24" viewbox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">--}}
{{--                                    <path--}}
{{--                                        d="M19 3C19.5304 3 20.0391 3.21071 20.4142 3.58579C20.7893 3.96086 21 4.46957 21 5V19C21 19.5304 20.7893 20.0391 20.4142 20.4142C20.0391 20.7893 19.5304 21 19 21H5C4.46957 21 3.96086 20.7893 3.58579 20.4142C3.21071 20.0391 3 19.5304 3 19V5C3 4.46957 3.21071 3.96086 3.58579 3.58579C3.96086 3.21071 4.46957 3 5 3H19ZM18.5 18.5V13.2C18.5 12.3354 18.1565 11.5062 17.5452 10.8948C16.9338 10.2835 16.1046 9.94 15.24 9.94C14.39 9.94 13.4 10.46 12.92 11.24V10.13H10.13V18.5H12.92V13.57C12.92 12.8 13.54 12.17 14.31 12.17C14.6813 12.17 15.0374 12.3175 15.2999 12.5801C15.5625 12.8426 15.71 13.1987 15.71 13.57V18.5H18.5ZM6.88 8.56C7.32556 8.56 7.75288 8.383 8.06794 8.06794C8.383 7.75288 8.56 7.32556 8.56 6.88C8.56 5.95 7.81 5.19 6.88 5.19C6.43178 5.19 6.00193 5.36805 5.68499 5.68499C5.36805 6.00193 5.19 6.43178 5.19 6.88C5.19 7.81 5.95 8.56 6.88 8.56ZM8.27 18.5V10.13H5.5V18.5H8.27Z"--}}
{{--                                        fill="currentColor"></path>--}}
{{--                                </svg>--}}
{{--                            </a>--}}
{{--                            <a class="inline-flex w-12 h-12 mr-3 text-teal-900 hover:text-yellowGreen-700 items-center justify-center bg-gray-50 rounded-lg border-2 border-transparent hover:border-yellowGreen-500 transition duration-200"--}}
{{--                               href="#">--}}
{{--                                <svg width="24" height="24" viewbox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">--}}
{{--                                    <path--}}
{{--                                        d="M7.8 2H16.2C19.4 2 22 4.6 22 7.8V16.2C22 17.7383 21.3889 19.2135 20.3012 20.3012C19.2135 21.3889 17.7383 22 16.2 22H7.8C4.6 22 2 19.4 2 16.2V7.8C2 6.26174 2.61107 4.78649 3.69878 3.69878C4.78649 2.61107 6.26174 2 7.8 2ZM7.6 4C6.64522 4 5.72955 4.37928 5.05442 5.05442C4.37928 5.72955 4 6.64522 4 7.6V16.4C4 18.39 5.61 20 7.6 20H16.4C17.3548 20 18.2705 19.6207 18.9456 18.9456C19.6207 18.2705 20 17.3548 20 16.4V7.6C20 5.61 18.39 4 16.4 4H7.6ZM17.25 5.5C17.5815 5.5 17.8995 5.6317 18.1339 5.86612C18.3683 6.10054 18.5 6.41848 18.5 6.75C18.5 7.08152 18.3683 7.39946 18.1339 7.63388C17.8995 7.8683 17.5815 8 17.25 8C16.9185 8 16.6005 7.8683 16.3661 7.63388C16.1317 7.39946 16 7.08152 16 6.75C16 6.41848 16.1317 6.10054 16.3661 5.86612C16.6005 5.6317 16.9185 5.5 17.25 5.5ZM12 7C13.3261 7 14.5979 7.52678 15.5355 8.46447C16.4732 9.40215 17 10.6739 17 12C17 13.3261 16.4732 14.5979 15.5355 15.5355C14.5979 16.4732 13.3261 17 12 17C10.6739 17 9.40215 16.4732 8.46447 15.5355C7.52678 14.5979 7 13.3261 7 12C7 10.6739 7.52678 9.40215 8.46447 8.46447C9.40215 7.52678 10.6739 7 12 7ZM12 9C11.2044 9 10.4413 9.31607 9.87868 9.87868C9.31607 10.4413 9 11.2044 9 12C9 12.7956 9.31607 13.5587 9.87868 14.1213C10.4413 14.6839 11.2044 15 12 15C12.7956 15 13.5587 14.6839 14.1213 14.1213C14.6839 13.5587 15 12.7956 15 12C15 11.2044 14.6839 10.4413 14.1213 9.87868C13.5587 9.31607 12.7956 9 12 9Z"--}}
{{--                                        fill="currentColor"></path>--}}
{{--                                </svg>--}}
{{--                            </a>--}}
{{--                            <a class="inline-flex w-12 h-12 text-teal-900 hover:text-yellowGreen-700 items-center justify-center bg-gray-50 rounded-lg border-2 border-transparent hover:border-yellowGreen-500 transition duration-200"--}}
{{--                               href="#">--}}
{{--                                <svg width="24" height="24" viewbox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">--}}
{{--                                    <path--}}
{{--                                        d="M22 12C22 6.48 17.52 2 12 2C6.48 2 2 6.48 2 12C2 16.84 5.44 20.87 10 21.8V15H8V12H10V9.5C10 7.57 11.57 6 13.5 6H16V9H14C13.45 9 13 9.45 13 10V12H16V15H13V21.95C18.05 21.45 22 17.19 22 12Z"--}}
{{--                                        fill="currentColor"></path>--}}
{{--                                </svg>--}}
{{--                            </a>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--                <div class="w-full lg:w-2/3 px-4">--}}
{{--                    <div class="flex flex-wrap -mx-4 -mb-8">--}}
{{--                        <div class="w-full xs:w-1/2 md:w-1/4 px-4 mb-8">--}}
{{--                            <h5 class="text-xl font-semibold mb-6">Product</h5>--}}
{{--                            <ul>--}}
{{--                                <li class="mb-6"><a class="inline-block text-lg text-gray-900 hover:text-yellowGreen-700"--}}
{{--                                                    href="#">Features</a></li>--}}
{{--                                <li class="mb-6"><a class="inline-block text-lg text-gray-900 hover:text-yellowGreen-700"--}}
{{--                                                    href="#">Solutions</a></li>--}}
{{--                                <li class="mb-6"><a class="inline-block text-lg text-gray-900 hover:text-yellowGreen-700"--}}
{{--                                                    href="#">Pricing</a></li>--}}
{{--                                <li><a class="inline-block text-lg text-gray-900 hover:text-yellowGreen-700" href="#">Tutorials</a>--}}
{{--                                </li>--}}
{{--                            </ul>--}}
{{--                        </div>--}}
{{--                        <div class="w-full xs:w-1/2 md:w-1/4 px-4 mb-8">--}}
{{--                            <h5 class="text-xl font-semibold mb-6">Company</h5>--}}
{{--                            <ul>--}}
{{--                                <li class="mb-6"><a class="inline-block text-lg text-gray-900 hover:text-yellowGreen-700"--}}
{{--                                                    href="#">About</a></li>--}}
{{--                                <li class="mb-6"><a class="inline-block text-lg text-gray-900 hover:text-yellowGreen-700" href="#">Our--}}
{{--                                        Mission</a></li>--}}
{{--                                <li class="flex items-center mb-6">--}}
{{--                                    <a class="inline-block mr-2 text-lg text-gray-900 hover:text-yellowGreen-700" href="#">--}}
{{--                                        <span>Careers</span>--}}
{{--                                    </a>--}}
{{--                                    <span class="inline-flex h-6 px-2 items-center text-white bg-teal-600 rounded-full">--}}
{{--                      <svg width="8" height="8" viewbox="0 0 8 8" fill="none" xmlns="http://www.w3.org/2000/svg">--}}
{{--                        <circle cx="4" cy="4" r="3" fill="white"></circle>--}}
{{--                      </svg>--}}
{{--                      <span class="ml-1 text-xs text-gray-50">Hiring</span>--}}
{{--                    </span>--}}
{{--                                </li>--}}
{{--                                <li><a class="inline-block text-lg text-gray-900 hover:text-yellowGreen-700" href="#">Contact</a></li>--}}
{{--                            </ul>--}}
{{--                        </div>--}}
{{--                        <div class="w-full xs:w-1/2 md:w-1/4 px-4 mb-8">--}}
{{--                            <h5 class="text-xl font-semibold mb-6">Resources</h5>--}}
{{--                            <ul>--}}
{{--                                <li class="mb-6"><a class="inline-block text-lg text-gray-900 hover:text-yellowGreen-700"--}}
{{--                                                    href="#">Press</a></li>--}}
{{--                                <li class="mb-6"><a class="inline-block text-lg text-gray-900 hover:text-yellowGreen-700"--}}
{{--                                                    href="#">Blog</a></li>--}}
{{--                                <li class="mb-6"><a class="inline-block text-lg text-gray-900 hover:text-yellowGreen-700"--}}
{{--                                                    href="#">Help Center</a></li>--}}
{{--                                <li><a class="inline-block text-lg text-gray-900 hover:text-yellowGreen-700" href="#">Support</a></li>--}}
{{--                            </ul>--}}
{{--                        </div>--}}
{{--                        <div class="w-full xs:w-1/2 md:w-1/4 px-4 mb-8">--}}
{{--                            <h5 class="text-xl font-semibold mb-6">Legal</h5>--}}
{{--                            <ul>--}}
{{--                                <li class="mb-6"><a class="inline-block text-lg text-gray-900 hover:text-yellowGreen-700"--}}
{{--                                                    href="#">Terms of Use</a></li>--}}
{{--                                <li class="mb-6"><a class="inline-block text-lg text-gray-900 hover:text-yellowGreen-700"--}}
{{--                                                    href="#">Privacy Policy</a></li>--}}
{{--                                <li class="mb-6"><a class="inline-block text-lg text-gray-900 hover:text-yellowGreen-700"--}}
{{--                                                    href="#">Legal Notice</a></li>--}}
{{--                                <li><a class="inline-block text-lg text-gray-900 hover:text-yellowGreen-700" href="#">Cookie--}}
{{--                                        Settings</a></li>--}}
{{--                            </ul>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--            </div>--}}
{{--            <div class="text-right">--}}
{{--                <p class="text-gray-500">Made with heart © 2023 IXC. All rights reserved.</p>--}}
{{--            </div>--}}
{{--        </div>--}}
{{--    </section>--}}

{{--</div>--}}
