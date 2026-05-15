<?php

$user = $_SESSION['user'] ?? [];
$fullName = $user['full_name'] ?? 'User';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/assets/css/app.css">
    <title>Notes | TaskFlow</title>
</head>
<body class="bg-[#f6f8fb] text-slate-950 antialiased">
    <div class="min-h-screen lg:grid lg:grid-cols-[250px_1fr]">
        <aside class="hidden border-r border-slate-300 bg-[#f1f3f7] lg:flex lg:min-h-screen lg:flex-col">
            <div class="px-5 pt-7">
                <a href="/" class="flex items-center gap-3 text-xl font-bold tracking-normal text-[#1d12d8]">
                    <span class="grid h-8 w-8 place-items-center rounded-md bg-[#3325d4] text-white">
                        <svg class="h-5 w-5" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true">
                            <circle cx="12" cy="12" r="8" />
                            <path d="m9 12 2 2 4-5" />
                        </svg>
                    </span>
                    TaskFlow
                </a>
                <p class="ml-11 mt-1 text-sm font-medium text-slate-800">Deep Work Mode</p>
            </div>

            <nav class="mt-10 flex-1 space-y-2 px-4">
                <a href="/dashboard" class="flex items-center gap-3 rounded-lg px-4 py-3 text-sm font-medium text-slate-800 transition hover:bg-white">
                    <svg class="h-5 w-5 text-slate-700" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true">
                        <rect x="4" y="4" width="6" height="6" />
                        <rect x="14" y="4" width="6" height="6" />
                        <rect x="4" y="14" width="6" height="6" />
                        <rect x="14" y="14" width="6" height="6" />
                    </svg>
                    Dashboard
                </a>
                <a href="/dashboard/tasks" class="flex items-center gap-3 rounded-lg px-4 py-3 text-sm font-medium text-slate-800 transition hover:bg-white">
                    <svg class="h-5 w-5 text-slate-700" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true">
                        <circle cx="12" cy="12" r="9" />
                        <path d="m8.5 12 2.3 2.3 4.8-5" />
                    </svg>
                    Tasks
                </a>
                <a href="/dashboard/notes" class="flex items-center gap-3 rounded-lg border-r-4 border-[#3023db] bg-indigo-100 px-4 py-3 text-sm font-bold text-[#160bd8]">
                    <svg class="h-5 w-5" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true">
                        <path d="M6 3h9l4 4v14H6z" />
                        <path d="M15 3v5h5" />
                        <path d="M9 13h6M9 17h6" />
                    </svg>
                    Notes
                </a>
                <a href="/dashboard/categories" class="flex items-center gap-3 rounded-lg px-4 py-3 text-sm font-medium text-slate-800 transition hover:bg-white">
                    <svg class="h-5 w-5 text-slate-700" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true">
                        <path d="M4 7h10l6 5-6 5H4z" />
                    </svg>
                    Categories
                </a>
                <a href="/dashboard/settings" class="flex items-center gap-3 rounded-lg px-4 py-3 text-sm font-medium text-slate-800 transition hover:bg-white">
                    <svg class="h-5 w-5 text-slate-700" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true">
                        <path d="M12 15.5a3.5 3.5 0 1 0 0-7 3.5 3.5 0 0 0 0 7Z" />
                        <path d="M19.4 15a1.8 1.8 0 0 0 .36 1.98l.06.06a2 2 0 1 1-2.83 2.83l-.06-.06A1.8 1.8 0 0 0 15 19.4a1.8 1.8 0 0 0-1 .6 1.8 1.8 0 0 0-.5 1.3V21a2 2 0 1 1-4 0v-.09A1.8 1.8 0 0 0 8 19.4a1.8 1.8 0 0 0-1.98.36l-.06.06a2 2 0 1 1-2.83-2.83l.06-.06A1.8 1.8 0 0 0 3.6 15a1.8 1.8 0 0 0-.6-1 1.8 1.8 0 0 0-1.3-.5H1.6a2 2 0 1 1 0-4h.09A1.8 1.8 0 0 0 3.6 8a1.8 1.8 0 0 0-.36-1.98l-.06-.06a2 2 0 1 1 2.83-2.83l.06.06A1.8 1.8 0 0 0 8 3.6a1.8 1.8 0 0 0 1-.6A1.8 1.8 0 0 0 9.5 1.7V1.6a2 2 0 1 1 4 0v.09A1.8 1.8 0 0 0 15 3.6a1.8 1.8 0 0 0 1.98-.36l.06-.06a2 2 0 1 1 2.83 2.83l-.06.06A1.8 1.8 0 0 0 19.4 8c.15.36.36.7.6 1 .34.34.8.53 1.3.5h.1a2 2 0 1 1 0 4h-.1A1.8 1.8 0 0 0 19.4 15Z" />
                    </svg>
                    Settings
                </a>
            </nav>
        </aside>

        <div class="min-w-0">
            <header class="sticky top-0 z-40 border-b border-slate-300 bg-white/95 backdrop-blur">
                <div class="mx-auto flex h-14 max-w-[980px] items-center justify-between gap-4 px-5 sm:px-7">
                    <a href="/" class="text-lg font-bold text-[#1d12d8] lg:hidden">TaskFlow</a>
                    <label class="hidden h-9 w-full max-w-xl items-center gap-3 rounded-full bg-slate-100 px-4 text-slate-500 shadow-sm sm:flex">
                        <svg class="h-5 w-5 text-slate-700" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true">
                            <circle cx="11" cy="11" r="7" />
                            <path d="m20 20-3.5-3.5" />
                        </svg>
                        <input type="search" placeholder="Search notes, tags, or content..." class="h-full w-full border-0 bg-transparent text-sm outline-none placeholder:text-slate-500">
                    </label>

                    <div class="ml-auto flex items-center gap-5 text-slate-900">
                        <button type="button" class="grid h-8 w-8 place-items-center rounded-full transition hover:bg-slate-100" aria-label="Notifications">
                            <svg class="h-5 w-5" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round">
                                <path d="M18 8a6 6 0 1 0-12 0c0 7-3 7-3 7h18s-3 0-3-7" />
                                <path d="M13.73 21a2 2 0 0 1-3.46 0" />
                            </svg>
                        </button>
                        <span class="grid h-6 w-6 place-items-center rounded bg-slate-100 text-slate-700">
                            <svg class="h-3.5 w-3.5" viewBox="0 0 24 24" fill="currentColor" aria-hidden="true">
                                <path d="M12 12a4 4 0 1 0 0-8 4 4 0 0 0 0 8Zm0 2c-4 0-7 2-7 4.5V20h14v-1.5C19 16 16 14 12 14Z" />
                            </svg>
                        </span>
                        <span class="hidden text-sm font-medium text-slate-900 sm:inline"><?= htmlspecialchars($fullName) ?></span>
                    </div>
                </div>
            </header>

            <main class="mx-auto max-w-[980px] px-5 py-8 sm:px-7">
                <section class="flex flex-col gap-4 sm:flex-row sm:items-start sm:justify-between">
                    <div>
                        <h1 class="text-3xl font-bold tracking-normal text-black">Knowledge Base</h1>
                        <p class="mt-1 text-sm text-slate-700">Capture your thoughts and organize your deep work.</p>
                    </div>
                    <a href="/dashboard/notes/create" class="inline-flex h-12 items-center justify-center gap-2 rounded-lg bg-[#3325d4] px-7 text-sm font-bold text-white shadow-sm transition hover:bg-[#2418bd]">
                        <svg class="h-5 w-5" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true">
                            <path d="M12 5v14" />
                            <path d="M5 12h14" />
                        </svg>
                        New Note
                    </a>
                </section>

                <section class="mt-8 grid auto-rows-[minmax(180px,auto)] gap-6 md:grid-cols-2 xl:grid-cols-4">
                    <article class="rounded-xl border border-slate-300 bg-white p-6 shadow-sm md:col-span-2">
                        <div class="flex items-start justify-between gap-4">
                            <span class="rounded bg-indigo-100 px-3 py-1 text-xs font-bold uppercase text-[#3325d4]">Project Alpha</span>
                            <a href="/dashboard/notes/edit" class="grid h-8 w-8 place-items-center rounded-full text-slate-700 transition hover:bg-slate-100" aria-label="Edit note">
                                <svg class="h-5 w-5" viewBox="0 0 24 24" fill="currentColor" aria-hidden="true">
                                    <circle cx="12" cy="5" r="1.5" />
                                    <circle cx="12" cy="12" r="1.5" />
                                    <circle cx="12" cy="19" r="1.5" />
                                </svg>
                            </a>
                        </div>
                        <a href="/dashboard/notes/show" class="mt-5 block text-2xl font-medium leading-snug text-black transition hover:text-[#160bd8]">Q4 Strategy Roadmap &amp; Architectural Decisions</a>
                        <p class="mt-4 text-sm leading-6 text-slate-800">We need to finalize the transition to the new microservices architecture by late November. The primary focus remains on reducing latency for the edge nodes while maintaining the current data consistency models...</p>
                        <div class="mt-7 flex flex-wrap items-center justify-between gap-4">
                            <div class="flex gap-2">
                                <span class="rounded-full border border-slate-300 px-3 py-1 text-xs text-slate-700">Strategy</span>
                                <span class="rounded-full border border-slate-300 px-3 py-1 text-xs text-slate-700">Engineering</span>
                            </div>
                            <time class="text-xs text-slate-700">Oct 24, 2024</time>
                        </div>
                    </article>

                    <article class="overflow-hidden rounded-xl border border-slate-300 bg-white shadow-sm">
                        <div class="grid h-32 place-items-center bg-gradient-to-r from-slate-400 via-slate-100 to-slate-400 px-8">
                            <div class="h-24 w-full rounded bg-white/70 p-4 shadow">
                                <div class="mb-2 h-2 w-20 rounded bg-slate-400"></div>
                                <div class="space-y-1.5">
                                    <div class="h-1.5 w-full rounded bg-slate-300"></div>
                                    <div class="h-1.5 w-5/6 rounded bg-slate-300"></div>
                                    <div class="h-1.5 w-3/4 rounded bg-slate-300"></div>
                                    <div class="h-1.5 w-4/5 rounded bg-slate-300"></div>
                                </div>
                            </div>
                        </div>
                        <div class="p-5">
                            <h2 class="text-xl font-medium text-black">UI Design Systems</h2>
                            <p class="mt-3 text-sm leading-6 text-slate-800">Best practices for token naming conventions and fluid grid.</p>
                            <span class="mt-5 inline-flex rounded bg-indigo-100 px-3 py-1 text-xs text-[#3325d4]">Design</span>
                        </div>
                    </article>

                    <article class="rounded-xl border border-slate-300 bg-white p-5 shadow-sm">
                        <h2 class="text-xl font-medium leading-snug text-black">Meeting Minutes: Sprint Review</h2>
                        <p class="mt-4 text-sm leading-6 text-slate-800">Sprint 12 completed with 95% velocity. Main blockers identified in the authentication module. Next sprint will...</p>
                        <div class="mt-12 flex items-center justify-between text-xs">
                            <span class="inline-flex items-center gap-1.5 text-slate-800">
                                <span class="h-2 w-2 rounded-full bg-red-600"></span>
                                Important
                            </span>
                            <span class="text-slate-700">2h ago</span>
                        </div>
                    </article>

                    <article class="rounded-xl border border-slate-300 bg-white p-6 shadow-sm">
                        <div class="flex gap-4">
                            <svg class="mt-1 h-5 w-5 shrink-0 text-[#3325d4]" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true">
                                <path d="M4 7h6" />
                                <path d="M4 12h6" />
                                <path d="M14 7h6" />
                                <path d="M14 12h6" />
                                <path d="m4 17 2 2 4-4" />
                            </svg>
                            <div>
                                <h2 class="text-xl font-medium leading-snug text-black">Product Launch Checklist</h2>
                                <div class="mt-5 space-y-3 text-sm">
                                    <label class="flex items-start gap-3 text-slate-500 line-through">
                                        <input type="checkbox" checked class="mt-0.5 h-4 w-4 rounded border-slate-300 text-[#3325d4]">
                                        Finalize landing page copy
                                    </label>
                                    <label class="flex items-start gap-3 text-black">
                                        <input type="checkbox" class="mt-0.5 h-4 w-4 rounded border-slate-300 text-[#3325d4]">
                                        QA review on mobile browsers
                                    </label>
                                    <label class="flex items-start gap-3 text-black">
                                        <input type="checkbox" class="mt-0.5 h-4 w-4 rounded border-slate-300 text-[#3325d4]">
                                        Set up analytics tracking
                                    </label>
                                </div>
                                <div class="mt-7 border-t border-slate-300 pt-5 text-xs text-slate-700">Draft saved</div>
                            </div>
                        </div>
                    </article>

                    <article class="rounded-xl bg-[#3325d4] p-6 text-white shadow-lg shadow-slate-300">
                        <p class="text-5xl font-bold text-indigo-300">99</p>
                        <blockquote class="mt-4 text-xl font-medium italic leading-9">"Simplicity is the ultimate sophistication. Deep work requires a decluttered mind and a structured environment."</blockquote>
                        <div class="mt-8 text-sm">
                            <p class="font-bold">Research Notes</p>
                            <p class="text-indigo-100">Source: Cognitive Science Hub</p>
                        </div>
                    </article>

                    <article class="rounded-xl border border-slate-300 bg-white p-5 shadow-sm">
                        <h2 class="text-xl font-medium leading-snug text-black">Book List: Productivity</h2>
                        <p class="mt-4 text-sm leading-6 text-slate-800">Atomic Habits, Building a Second Brain, Show Your Work...</p>
                        <div class="mt-5 flex flex-wrap gap-2">
                            <span class="rounded bg-slate-100 px-2.5 py-1 text-xs text-slate-700">Reading</span>
                            <span class="rounded bg-slate-100 px-2.5 py-1 text-xs text-slate-700">Personal</span>
                            <span class="rounded bg-slate-100 px-2.5 py-1 text-xs text-slate-700">+3</span>
                        </div>
                    </article>

                    <article class="rounded-xl border border-slate-300 bg-white p-5 shadow-sm">
                        <div class="flex items-center justify-between gap-3">
                            <h2 class="font-bold text-black">API Endpoint Secret</h2>
                            <svg class="h-5 w-5 text-slate-700" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true">
                                <rect x="5" y="11" width="14" height="10" rx="2" />
                                <path d="M8 11V7a4 4 0 0 1 8 0v4" />
                            </svg>
                        </div>
                        <div class="mt-4 rounded bg-slate-100 p-4 font-mono text-xs text-slate-700">Bearer sk_live_4c39HqLyJw...</div>
                        <p class="mt-5 text-sm text-slate-800">Click to copy to clipboard</p>
                    </article>
                </section>
            </main>

            <footer class="mx-auto mt-6 max-w-[980px] border-t border-slate-300 px-5 py-7 sm:px-7">
                <div class="flex flex-col gap-5 text-sm text-slate-800 sm:flex-row sm:items-end sm:justify-between">
                    <p>&copy; 2024 TaskFlow Productivity Suite.</p>
                    <div class="flex gap-7">
                        <a href="#" class="transition hover:text-[#160bd8]">Privacy</a>
                        <a href="#" class="transition hover:text-[#160bd8]">Terms</a>
                        <a href="#" class="transition hover:text-[#160bd8]">Support</a>
                    </div>
                </div>
            </footer>
        </div>
    </div>
</body>
</html>
