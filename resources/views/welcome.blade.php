@extends('layouts.app')

@section('content')
    <div class="bg-gray-50 text-black/50 dark:bg-black dark:text-white/50">
        <div
            class="relative min-h-screen flex flex-col items-center justify-center selection:bg-[#FF2D20] selection:text-white">
            <div class="relative w-full max-w-2xl px-6 lg:max-w-7xl">
                <main class="mt-6">
                    <div class="grid gap-6 lg:grid-cols-2 lg:gap-8">
                        <div
                            class="flex flex-col items-start gap-6 overflow-hidden rounded-lg bg-white p-6 shadow-[0px_14px_34px_0px_rgba(0,0,0,0.08)] ring-1 ring-white/[0.05] transition duration-300 hover:text-black/70 hover:ring-black/20 focus:outline-none focus-visible:ring-[#FF2D20] dark:bg-zinc-900 dark:ring-zinc-800 dark:hover:text-white/70 dark:hover:ring-zinc-700 dark:focus-visible:ring-[#FF2D20]">
                            <h2 class="text-xl font-semibold text-black dark:text-white">About the ChatBox App</h2>
                            <p class="mt-4 text-sm/relaxed">
                                Our ChatBox App is built using Laravel 11 and React.js, providing real-time
                                communication
                                through WebSocket and Reverb. It offers a seamless and interactive user experience.
                            </p>
                            <p class="mt-4 text-sm/relaxed">
                                For more details, visit the <a
                                    href="https://github.com/Hemantkumawat/chat-web-app/tree/main"
                                    class="text-blue-500 hover:underline">GitHub repository</a>.
                            </p>
                        </div>
                        <div
                            class="flex flex-col items-start gap-6 overflow-hidden rounded-lg bg-white p-6 shadow-[0px_14px_34px_0px_rgba(0,0,0,0.08)] ring-1 ring-white/[0.05] transition duration-300 hover:text-black/70 hover:ring-black/20 focus:outline-none focus-visible:ring-[#FF2D20] dark:bg-zinc-900 dark:ring-zinc-800 dark:hover:text-white/70 dark:hover:ring-zinc-700 dark:focus-visible:ring-[#FF2D20]">
                            <h2 class="text-xl font-semibold text-black dark:text-white">Video Demonstration</h2>
                            <p class="mt-4 text-sm/relaxed">
                                Watch the video demonstration of our ChatBox App:
                            </p>
                            <a href="https://drive.google.com/file/d/1X7u6FUzc6Ul31apISsb1E45Z6wSUedQ1/view?usp=sharing"
                               class="text-blue-500 hover:underline">
                                Google Drive Video
                            </a>
                        </div>
                        <div
                            class="flex flex-col items-start gap-6 overflow-hidden rounded-lg bg-white p-6 shadow-[0px_14px_34px_0px_rgba(0,0,0,0.08)] ring-1 ring-white/[0.05] transition duration-300 hover:text-black/70 hover:ring-black/20 focus:outline-none focus-visible:ring-[#FF2D20] dark:bg-zinc-900 dark:ring-zinc-800 dark:hover:text-white/70 dark:hover:ring-zinc-700 dark:focus-visible:ring-[#FF2D20]">
                            <h2 class="text-xl font-semibold text-black dark:text-white">WebSocket</h2>
                            <p class="mt-4 text-sm/relaxed">
                                WebSocket is a protocol providing full-duplex communication channels over a single TCP
                                connection. It is used in our ChatBox App to enable real-time messaging.
                            </p>
                        </div>

                        <div
                            class="flex flex-col items-start gap-6 overflow-hidden rounded-lg bg-white p-6 shadow-[0px_14px_34px_0px_rgba(0,0,0,0.08)] ring-1 ring-white/[0.05] transition duration-300 hover:text-black/70 hover:ring-black/20 focus:outline-none focus-visible:ring-[#FF2D20] dark:bg-zinc-900 dark:ring-zinc-800 dark:hover:text-white/70 dark:hover:ring-zinc-700 dark:focus-visible:ring-[#FF2D20]">
                            <h2 class="text-xl font-semibold text-black dark:text-white">Reverb</h2>
                            <p class="mt-4 text-sm/relaxed">
                                Reverb is a library that simplifies WebSocket communication in JavaScript applications.
                                It
                                is used in our ChatBox App to manage real-time data flow efficiently.
                            </p>
                        </div>

                        <div
                            class="flex flex-col items-start gap-6 overflow-hidden rounded-lg bg-white p-6 shadow-[0px_14px_34px_0px_rgba(0,0,0,0.08)] ring-1 ring-white/[0.05] transition duration-300 hover:text-black/70 hover:ring-black/20 focus:outline-none focus-visible:ring-[#FF2D20] dark:bg-zinc-900 dark:ring-zinc-800 dark:hover:text-white/70 dark:hover:ring-zinc-700 dark:focus-visible:ring-[#FF2D20]">
                            <h2 class="text-xl font-semibold text-black dark:text-white">Laravel 11</h2>
                            <p class="mt-4 text-sm/relaxed">
                                Laravel 11 is a powerful PHP framework used to build the backend of our ChatBox App. It
                                provides a robust and scalable foundation for web applications.
                            </p>
                        </div>

                        <div
                            class="flex flex-col items-start gap-6 overflow-hidden rounded-lg bg-white p-6 shadow-[0px_14px_34px_0px_rgba(0,0,0,0.08)] ring-1 ring-white/[0.05] transition duration-300 hover:text-black/70 hover:ring-black/20 focus:outline-none focus-visible:ring-[#FF2D20] dark:bg-zinc-900 dark:ring-zinc-800 dark:hover:text-white/70 dark:hover:ring-zinc-700 dark:focus-visible:ring-[#FF2D20]">
                            <h2 class="text-xl font-semibold text-black dark:text-white">React.js</h2>
                            <p class="mt-4 text-sm/relaxed">
                                React.js is a JavaScript library for building user interfaces. It is used in our ChatBox
                                App
                                to
                                create a dynamic and responsive frontend.
                            </p>
                        </div>
                    </div>
                </main>
                <footer class="py-16 text-center text-sm text-black dark:text-white/70">
                    ChatBox App v1.0 (Laravel v{{ Illuminate\Foundation\Application::VERSION }} | PHP v{{ PHP_VERSION }}
                    )
                </footer>
            </div>
        </div>
    </div>
@endsection
