<?php

$user = $_SESSION['user'] ?? [];
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/assets/css/app.css">
    <title>Dashboard | TaskFlow</title>
</head>
<body class="bg-[#f6f8fb] text-slate-950 antialiased">
    <div class="min-h-screen lg:grid lg:grid-cols-[280px_1fr]">
        <aside class="hidden border-r border-slate-300 bg-[#f1f3f7] lg:flex lg:min-h-screen lg:flex-col">
            <div class="px-7 pt-8">
                <a href="/" class="text-2xl font-bold tracking-normal text-[#1d12d8]">TaskFlow</a>
                <p class="mt-1.5 text-base font-medium text-slate-800">Deep Work Mode</p>
            </div>

            <nav class="mt-10 flex-1 space-y-3 px-5">
                <a href="#" class="flex items-center gap-4 rounded-lg border-r-4 border-[#3023db] bg-indigo-100 px-5 py-3.5 text-base font-medium text-[#160bd8]">
                    <svg class="h-6 w-6" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true">
                        <rect x="4" y="4" width="6" height="6" />
                        <rect x="14" y="4" width="6" height="6" />
                        <rect x="4" y="14" width="6" height="6" />
                        <rect x="14" y="14" width="6" height="6" />
                    </svg>
                    Dashboard
                </a>
                <a href="#" class="flex items-center gap-4 rounded-lg px-5 py-3.5 text-base font-medium text-slate-800 transition hover:bg-white">
                    <svg class="h-6 w-6 text-slate-700" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true">
                        <circle cx="12" cy="12" r="9" />
                        <path d="m8.5 12 2.3 2.3 4.8-5" />
                    </svg>
                    Tasks
                </a>
                <a href="#" class="flex items-center gap-4 rounded-lg px-5 py-3.5 text-base font-medium text-slate-800 transition hover:bg-white">
                    <svg class="h-6 w-6 text-slate-700" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true">
                        <path d="M6 3h9l4 4v14H6z" />
                        <path d="M15 3v5h5" />
                        <path d="M9 13h6M9 17h6" />
                    </svg>
                    Notes
                </a>
                <a href="#" class="flex items-center gap-4 rounded-lg px-5 py-3.5 text-base font-medium text-slate-800 transition hover:bg-white">
                    <svg class="h-6 w-6 text-slate-700" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true">
                        <path d="M4 7h10l6 5-6 5H4z" />
                    </svg>
                    Categories
                </a>
                <a href="#" class="flex items-center gap-4 rounded-lg px-5 py-3.5 text-base font-medium text-slate-800 transition hover:bg-white">
                    <svg class="h-6 w-6 text-slate-700" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true">
                        <path d="M12 15.5a3.5 3.5 0 1 0 0-7 3.5 3.5 0 0 0 0 7Z" />
                        <path d="M19.4 15a1.8 1.8 0 0 0 .36 1.98l.06.06a2 2 0 1 1-2.83 2.83l-.06-.06A1.8 1.8 0 0 0 15 19.4a1.8 1.8 0 0 0-1 .6 1.8 1.8 0 0 0-.5 1.3V21a2 2 0 1 1-4 0v-.09A1.8 1.8 0 0 0 8 19.4a1.8 1.8 0 0 0-1.98.36l-.06.06a2 2 0 1 1-2.83-2.83l.06-.06A1.8 1.8 0 0 0 3.6 15a1.8 1.8 0 0 0-.6-1 1.8 1.8 0 0 0-1.3-.5H1.6a2 2 0 1 1 0-4h.09A1.8 1.8 0 0 0 3.6 8a1.8 1.8 0 0 0-.36-1.98l-.06-.06a2 2 0 1 1 2.83-2.83l.06.06A1.8 1.8 0 0 0 8 3.6a1.8 1.8 0 0 0 1-.6A1.8 1.8 0 0 0 9.5 1.7V1.6a2 2 0 1 1 4 0v.09A1.8 1.8 0 0 0 15 3.6a1.8 1.8 0 0 0 1.98-.36l.06-.06a2 2 0 1 1 2.83 2.83l-.06.06A1.8 1.8 0 0 0 19.4 8c.15.36.36.7.6 1 .34.34.8.53 1.3.5h.1a2 2 0 1 1 0 4h-.1A1.8 1.8 0 0 0 19.4 15Z" />
                    </svg>
                    Settings
                </a>
            </nav>

            <div class="p-7">
                <div class="flex items-center gap-3 rounded-lg bg-slate-200 px-4 py-3">
                    <div class="grid h-10 w-10 place-items-center rounded-full bg-[#4b3ee6] text-sm font-bold text-white">JD</div>
                    <div>
                        <p class="text-base font-medium text-slate-950">John Doe</p>
                        <p class="text-xs font-medium uppercase tracking-[0.14em] text-slate-500">Pro Plan</p>
                    </div>
                </div>
            </div>
        </aside>

        <div class="min-w-0">
            <header class="sticky top-0 z-40 border-b border-slate-300 bg-white/95 backdrop-blur">
                <div class="mx-auto flex h-16 max-w-[1180px] items-center justify-between gap-4 px-5 sm:px-7">
                    <a href="/" class="text-xl font-bold text-[#1d12d8] lg:hidden">TaskFlow</a>
                    <label class="hidden h-10 w-full max-w-sm items-center gap-3 rounded-lg border border-slate-300 bg-[#f7f8fb] px-4 text-slate-500 shadow-sm sm:flex">
                        <svg class="h-5 w-5 text-slate-700" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true">
                            <circle cx="11" cy="11" r="7" />
                            <path d="m20 20-3.5-3.5" />
                        </svg>
                        <input type="search" placeholder="Search tasks..." class="h-full w-full border-0 bg-transparent text-base outline-none placeholder:text-slate-500">
                    </label>

                    <div class="ml-auto flex items-center gap-5 text-slate-900">
                        <button type="button" class="grid h-9 w-9 place-items-center rounded-full transition hover:bg-slate-100" aria-label="Notifications">
                            <svg class="h-6 w-6" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round">
                                <path d="M18 8a6 6 0 1 0-12 0c0 7-3 7-3 7h18s-3 0-3-7" />
                                <path d="M13.73 21a2 2 0 0 1-3.46 0" />
                            </svg>
                        </button>
                        <button type="button" class="grid h-9 w-9 place-items-center rounded-full transition hover:bg-slate-100" aria-label="Account">
                            <svg class="h-7 w-7" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round">
                                <circle cx="12" cy="12" r="9" />
                                <circle cx="12" cy="10" r="3" />
                                <path d="M7 19a5 5 0 0 1 10 0" />
                            </svg>
                        </button>
                    </div>
                </div>
            </header>

            <main class="mx-auto max-w-[1180px] px-5 py-8 sm:px-7 lg:py-10">
                <section class="flex flex-col gap-6 sm:flex-row sm:items-center sm:justify-between">
                    <div>
                        <h1 class="text-3xl font-bold tracking-normal text-slate-950 sm:text-4xl">Good Morning, <?= $user['full_name'] ?></h1>
                        <p class="mt-3 text-lg text-slate-700">You have 6 pending tasks to tackle today.</p>
                    </div>
                    <a href="#" class="inline-flex h-12 items-center justify-center gap-3 rounded-lg bg-[#3325d4] px-6 text-base font-bold text-white shadow-lg shadow-slate-300 transition hover:bg-[#2418bd]">
                        <svg class="h-6 w-6" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true">
                            <path d="M12 5v14" />
                            <path d="M5 12h14" />
                        </svg>
                        Create New Task
                    </a>
                </section>

                <section class="mt-8 grid gap-5 sm:grid-cols-2 lg:grid-cols-4">
                    <article class="rounded-xl border border-slate-300 bg-white p-6 shadow-sm">
                        <div class="flex items-start justify-between">
                            <div class="grid h-12 w-12 place-items-center rounded-lg bg-indigo-100 text-[#160bd8]">
                                <svg class="h-6 w-6" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true">
                                    <rect x="5" y="5" width="14" height="14" rx="2" />
                                    <path d="M9 9h6M9 13h6M9 17h3" />
                                </svg>
                            </div>
                            <p class="mt-5 text-sm font-bold uppercase text-slate-800">Total</p>
                        </div>
                        <p class="mt-6 text-4xl font-bold text-slate-950">24</p>
                        <p class="mt-2 text-sm tracking-wide text-slate-800">Managed tasks</p>
                    </article>

                    <article class="rounded-xl border border-slate-300 bg-white p-6 shadow-sm">
                        <div class="flex items-start justify-between">
                            <div class="grid h-12 w-12 place-items-center rounded-lg bg-emerald-100 text-emerald-700">
                                <svg class="h-6 w-6" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true">
                                    <circle cx="12" cy="12" r="9" />
                                    <path d="m8.5 12 2.3 2.3 4.8-5" />
                                </svg>
                            </div>
                            <p class="mt-5 text-sm font-bold uppercase text-slate-800">Completed</p>
                        </div>
                        <p class="mt-6 text-4xl font-bold text-slate-950">18</p>
                        <p class="mt-2 text-sm tracking-wide text-slate-800">75% completion rate</p>
                    </article>

                    <article class="rounded-xl border border-slate-300 bg-white p-6 shadow-sm">
                        <div class="flex items-start justify-between">
                            <div class="grid h-12 w-12 place-items-center rounded-lg bg-orange-100 text-orange-700">
                                <svg class="h-6 w-6" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true">
                                    <path d="M9 5h6" />
                                    <path d="M9 3h6v4H9z" />
                                    <path d="M7 5H5v15h8" />
                                    <path d="M17 5h2v7" />
                                    <circle cx="17" cy="17" r="4" />
                                    <path d="M17 15v2l1.5 1" />
                                </svg>
                            </div>
                            <p class="mt-5 text-sm font-bold uppercase text-slate-800">Pending</p>
                        </div>
                        <p class="mt-6 text-4xl font-bold text-slate-950">6</p>
                        <p class="mt-2 text-sm tracking-wide text-slate-800">Focus required</p>
                    </article>

                    <article class="rounded-xl border border-slate-300 bg-white p-6 shadow-sm">
                        <div class="flex items-start justify-between">
                            <div class="grid h-12 w-12 place-items-center rounded-lg bg-slate-100 text-slate-700">
                                <svg class="h-6 w-6" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true">
                                    <path d="M6 3h9l4 4v14H6z" />
                                    <path d="M15 3v5h5" />
                                    <path d="M9 14h6M9 18h6" />
                                </svg>
                            </div>
                            <p class="mt-5 text-sm font-bold uppercase text-slate-800">Notes</p>
                        </div>
                        <p class="mt-6 text-4xl font-bold text-slate-950">12</p>
                        <p class="mt-2 text-sm tracking-wide text-slate-800">Project references</p>
                    </article>
                </section>

                <div class="mt-10 grid gap-8 lg:grid-cols-[1fr_340px]">
                    <div class="space-y-7">
                        <section>
                            <div class="mb-6 flex items-center justify-between">
                                <h2 class="text-2xl font-semibold tracking-normal text-black">Upcoming Tasks</h2>
                                <a href="#" class="text-base font-medium text-[#160bd8] transition hover:text-[#2418bd]">View All</a>
                            </div>

                            <div class="overflow-hidden rounded-xl border border-slate-300 bg-white">
                                <label class="flex items-center gap-6 border-b border-slate-300 px-6 py-6 last:border-b-0">
                                    <input type="checkbox" class="h-7 w-7 rounded border-slate-300 text-[#3325d4] focus:ring-[#3325d4]">
                                    <span class="min-w-0 flex-1">
                                        <span class="block truncate text-base font-medium text-black">Finalize Q4 Marketing Budget</span>
                                        <span class="mt-2 flex flex-wrap items-center gap-3 text-sm text-slate-700">
                                            <span class="inline-flex items-center gap-1.5">
                                                <svg class="h-4 w-4" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true">
                                                    <rect x="4" y="5" width="16" height="16" rx="2" />
                                                    <path d="M16 3v4M8 3v4M4 11h16" />
                                                </svg>
                                                Today, 4:00 PM
                                            </span>
                                            <span class="rounded-full bg-indigo-100 px-3 py-1 text-xs font-bold uppercase text-[#3325d4]">Finance</span>
                                        </span>
                                    </span>
                                    <span class="grid h-7 w-7 place-items-center rounded-full bg-slate-700 text-xs font-bold text-white">A</span>
                                </label>

                                <label class="flex items-center gap-6 border-b border-slate-300 px-6 py-6 last:border-b-0">
                                    <input type="checkbox" class="h-7 w-7 rounded border-slate-300 text-[#3325d4] focus:ring-[#3325d4]">
                                    <span class="min-w-0 flex-1">
                                        <span class="block truncate text-base font-medium text-black">Client Feedback Review - Phoenix Project</span>
                                        <span class="mt-2 flex flex-wrap items-center gap-3 text-sm text-slate-700">
                                            <span class="inline-flex items-center gap-1.5">
                                                <svg class="h-4 w-4" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true">
                                                    <rect x="4" y="5" width="16" height="16" rx="2" />
                                                    <path d="M16 3v4M8 3v4M4 11h16" />
                                                </svg>
                                                Tomorrow, 10:00 AM
                                            </span>
                                            <span class="rounded-full bg-slate-100 px-3 py-1 text-xs font-bold uppercase text-slate-600">Design</span>
                                        </span>
                                    </span>
                                </label>

                                <label class="flex items-center gap-6 border-b border-slate-300 px-6 py-6 last:border-b-0">
                                    <input type="checkbox" class="h-7 w-7 rounded border-slate-300 text-[#3325d4] focus:ring-[#3325d4]">
                                    <span class="min-w-0 flex-1">
                                        <span class="block truncate text-base font-medium text-black">Monthly Security Audit &amp; Updates</span>
                                        <span class="mt-2 flex flex-wrap items-center gap-3 text-sm text-slate-700">
                                            <span class="inline-flex items-center gap-1.5">
                                                <svg class="h-4 w-4" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true">
                                                    <rect x="4" y="5" width="16" height="16" rx="2" />
                                                    <path d="M16 3v4M8 3v4M4 11h16" />
                                                </svg>
                                                Oct 24
                                            </span>
                                            <span class="rounded-full bg-red-100 px-3 py-1 text-xs font-bold uppercase text-red-700">Priority</span>
                                        </span>
                                    </span>
                                </label>
                            </div>
                        </section>

                        <section class="relative overflow-hidden rounded-xl bg-[#3325d4] p-8 text-white shadow-sm">
                            <div class="relative z-10 max-w-lg">
                                <h2 class="text-2xl font-bold tracking-normal">Try Focused Mode</h2>
                                <p class="mt-4 text-base leading-7 text-indigo-50">Mute notifications and dive into deep work with our new pomodoro integration.</p>
                                <a href="#" class="mt-6 inline-flex h-12 items-center rounded-lg bg-white px-8 text-base font-medium text-[#160bd8] transition hover:bg-indigo-50">Launch Now</a>
                            </div>
                            <div class="pointer-events-none absolute right-24 top-8 hidden h-48 w-48 rounded-full border-[18px] border-white/25 md:block"></div>
                            <div class="pointer-events-none absolute right-28 top-20 hidden h-16 w-5 bg-white/25 md:block"></div>
                            <div class="pointer-events-none absolute right-14 top-10 hidden h-8 w-8 rotate-45 bg-white/25 md:block"></div>
                            <div class="pointer-events-none absolute right-44 top-7 hidden h-5 w-14 bg-white/25 md:block"></div>
                        </section>
                    </div>

                    <aside class="space-y-6">
                        <section>
                            <div class="mb-6 flex items-center justify-between">
                                <h2 class="text-2xl font-semibold tracking-normal text-black">Recent Activity</h2>
                                <button type="button" class="grid h-9 w-9 place-items-center rounded-full text-slate-700 transition hover:bg-slate-100" aria-label="More activity options">
                                    <svg class="h-6 w-6" viewBox="0 0 24 24" fill="currentColor" aria-hidden="true">
                                        <circle cx="5" cy="12" r="1.5" />
                                        <circle cx="12" cy="12" r="1.5" />
                                        <circle cx="19" cy="12" r="1.5" />
                                    </svg>
                                </button>
                            </div>

                            <div class="rounded-xl border border-slate-300 bg-white p-6">
                                <div class="relative space-y-7 pl-9 before:absolute before:left-[13px] before:top-8 before:h-[calc(100%-80px)] before:w-px before:bg-slate-300">
                                    <div class="relative">
                                        <span class="absolute -left-9 top-0 grid h-7 w-7 place-items-center rounded-full bg-[#3325d4] text-white">
                                            <span class="h-2.5 w-2.5 rounded-full bg-white"></span>
                                        </span>
                                        <p class="text-sm leading-6 text-slate-900"><strong>Completed</strong> Project Alpha Docs</p>
                                        <p class="mt-2 text-sm text-slate-700">2 hours ago</p>
                                    </div>
                                    <div class="relative">
                                        <span class="absolute -left-9 top-0 grid h-7 w-7 place-items-center rounded-full border border-slate-300 bg-slate-100 text-sm text-slate-700">+</span>
                                        <p class="text-sm leading-6 text-slate-900"><strong>Added</strong> a new note to "Design Assets"</p>
                                        <p class="mt-2 text-sm text-slate-700">5 hours ago</p>
                                    </div>
                                    <div class="relative">
                                        <span class="absolute -left-9 top-0 grid h-7 w-7 place-items-center rounded-full border border-slate-300 bg-slate-100 text-slate-700">
                                            <svg class="h-4 w-4" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true">
                                                <path d="m12 20 8-8-4-4-8 8-2 6z" />
                                                <path d="m14 6 4 4" />
                                            </svg>
                                        </span>
                                        <p class="text-sm leading-6 text-slate-900"><strong>Updated</strong> task priority for "SEO Audit"</p>
                                        <p class="mt-2 text-sm text-slate-700">Yesterday</p>
                                    </div>
                                    <div class="relative">
                                        <span class="absolute -left-9 top-0 grid h-7 w-7 place-items-center rounded-full bg-emerald-500 text-white">
                                            <svg class="h-4 w-4" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true">
                                                <path d="m6 12 4 4 8-8" />
                                            </svg>
                                        </span>
                                        <p class="text-sm leading-6 text-slate-900"><strong>Finished</strong> weekly sync with stakeholders</p>
                                        <p class="mt-2 text-sm text-slate-700">Yesterday</p>
                                    </div>
                                </div>
                                <a href="#" class="mt-8 block text-center text-sm font-medium text-slate-800 transition hover:text-[#160bd8]">Load More History</a>
                            </div>
                        </section>

                        <section class="rounded-xl border border-slate-300 bg-white p-6">
                            <h2 class="text-base font-bold uppercase tracking-wider text-slate-950">Productivity Pulse</h2>
                            <div class="mt-7 flex h-32 items-end gap-2">
                                <div class="h-14 flex-1 rounded-t bg-indigo-100"></div>
                                <div class="h-20 flex-1 rounded-t bg-indigo-100"></div>
                                <div class="h-28 flex-1 rounded-t bg-[#3325d4]"></div>
                                <div class="h-24 flex-1 rounded-t bg-indigo-100"></div>
                                <div class="h-14 flex-1 rounded-t bg-indigo-100"></div>
                                <div class="h-20 flex-1 rounded-t bg-indigo-100"></div>
                                <div class="h-10 flex-1 rounded-t bg-indigo-100"></div>
                            </div>
                            <div class="mt-4 grid grid-cols-4 text-center text-xs font-medium uppercase text-slate-700">
                                <span>Mon</span>
                                <span>Wed</span>
                                <span>Fri</span>
                                <span>Sun</span>
                            </div>
                        </section>
                    </aside>
                </div>
            </main>

            <footer class="mx-auto mt-8 max-w-[1180px] border-t border-slate-300 px-5 py-8 sm:px-7">
                <div class="flex flex-col gap-8 text-sm text-slate-800 sm:flex-row sm:items-end sm:justify-between">
                    <div>
                        <a href="/" class="font-bold text-[#160bd8]">TaskFlow</a>
                        <p class="mt-3">&copy; 2024 TaskFlow Productivity Suite.</p>
                    </div>
                    <div class="flex gap-8">
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
