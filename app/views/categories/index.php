<?php

$user = $_SESSION['user'] ?? [];
$fullName = $user['full_name'] ?? 'James Smith';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/assets/css/app.css">
    <title>Categories | TaskFlow</title>
</head>
<body class="bg-[#f6f8fb] text-slate-950 antialiased">
    <div class="min-h-screen lg:grid lg:grid-cols-[250px_1fr]">
        <aside class="hidden border-r border-slate-300 bg-[#f1f3f7] lg:flex lg:min-h-screen lg:flex-col">
            <div class="px-5 pt-7">
                <a href="/" class="text-xl font-bold tracking-normal text-[#1d12d8]">TaskFlow</a>
                <p class="mt-6 text-xs font-bold uppercase tracking-wide text-slate-700">Deep Work Mode</p>
            </div>

            <nav class="mt-9 flex-1 space-y-2 px-4">
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
                <a href="/dashboard/notes" class="flex items-center gap-3 rounded-lg px-4 py-3 text-sm font-medium text-slate-800 transition hover:bg-white">
                    <svg class="h-5 w-5 text-slate-700" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true">
                        <path d="M6 3h9l4 4v14H6z" />
                        <path d="M15 3v5h5" />
                        <path d="M9 13h6M9 17h6" />
                    </svg>
                    Notes
                </a>
                <a href="/dashboard/categories" class="flex items-center gap-3 rounded-lg border-r-4 border-[#3023db] bg-indigo-100 px-4 py-3 text-sm font-bold text-[#160bd8]">
                    <svg class="h-5 w-5" viewBox="0 0 24 24" fill="currentColor" aria-hidden="true">
                        <path d="M4 7.5A2.5 2.5 0 0 1 6.5 5h7.2c.7 0 1.36.3 1.83.82L21 12l-5.47 6.18a2.5 2.5 0 0 1-1.83.82H6.5A2.5 2.5 0 0 1 4 16.5v-9Z" />
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

            <div class="border-t border-slate-300 p-5">
                <div class="flex items-center gap-3">
                    <div class="grid h-9 w-9 place-items-center rounded-full bg-indigo-100 text-xs font-bold text-[#3325d4]">JS</div>
                    <div>
                        <p class="text-sm font-bold text-slate-950"><?= htmlspecialchars($fullName) ?></p>
                        <p class="text-xs font-medium uppercase text-slate-600">Pro Plan</p>
                    </div>
                </div>
            </div>
        </aside>

        <div class="min-w-0">
            <header class="sticky top-0 z-40 border-b border-slate-300 bg-white/95 backdrop-blur">
                <div class="mx-auto flex h-14 max-w-[980px] items-center justify-between gap-4 px-5 sm:px-7">
                    <a href="/" class="text-lg font-bold text-[#1d12d8] lg:hidden">TaskFlow</a>
                    <label class="hidden h-10 w-full max-w-sm items-center gap-3 rounded-md border border-slate-300 bg-[#f7f8fb] px-4 text-slate-500 shadow-sm sm:flex">
                        <svg class="h-4 w-4 text-slate-700" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true">
                            <circle cx="11" cy="11" r="7" />
                            <path d="m20 20-3.5-3.5" />
                        </svg>
                        <input type="search" placeholder="Search tasks..." class="h-full w-full border-0 bg-transparent text-sm outline-none placeholder:text-slate-500">
                    </label>

                    <div class="ml-auto flex items-center gap-4 text-slate-900">
                        <button type="button" class="grid h-8 w-8 place-items-center rounded-full transition hover:bg-slate-100" aria-label="Notifications">
                            <svg class="h-5 w-5" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round">
                                <path d="M18 8a6 6 0 1 0-12 0c0 7-3 7-3 7h18s-3 0-3-7" />
                                <path d="M13.73 21a2 2 0 0 1-3.46 0" />
                            </svg>
                        </button>
                        <button type="button" class="grid h-8 w-8 place-items-center rounded-full transition hover:bg-slate-100" aria-label="Account">
                            <svg class="h-6 w-6" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round">
                                <circle cx="12" cy="12" r="9" />
                                <circle cx="12" cy="10" r="3" />
                                <path d="M7 19a5 5 0 0 1 10 0" />
                            </svg>
                        </button>
                    </div>
                </div>
            </header>

            <main class="mx-auto max-w-[980px] px-5 py-8 sm:px-7">
                <section class="flex flex-col gap-4 sm:flex-row sm:items-start sm:justify-between">
                    <div>
                        <h1 class="text-3xl font-bold tracking-normal text-black">Categories</h1>
                        <p class="mt-1 text-sm text-slate-700">Manage and organize your productivity streams.</p>
                    </div>
                    <a href="#" class="inline-flex h-11 items-center justify-center gap-2 rounded-lg bg-[#3325d4] px-6 text-sm font-bold text-white shadow-sm transition hover:bg-[#2418bd]">
                        <svg class="h-5 w-5" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true">
                            <path d="M12 5v14" />
                            <path d="M5 12h14" />
                        </svg>
                        New Category
                    </a>
                </section>

                <section class="mt-8 grid gap-6 sm:grid-cols-2 xl:grid-cols-4">
                    <article class="rounded-xl border border-slate-300 bg-white p-5 shadow-sm">
                        <div class="flex items-start justify-between">
                            <div class="grid h-12 w-12 place-items-center rounded-lg bg-indigo-100 text-indigo-500">
                                <svg class="h-6 w-6" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true">
                                    <path d="M4 14h4l6-6v12l-6-6H4z" />
                                    <path d="M18 9a4 4 0 0 1 0 6" />
                                </svg>
                            </div>
                            <button type="button" class="grid h-8 w-8 place-items-center rounded-full text-slate-700 transition hover:bg-slate-100" aria-label="Marketing category options">
                                <svg class="h-5 w-5" viewBox="0 0 24 24" fill="currentColor" aria-hidden="true">
                                    <circle cx="12" cy="5" r="1.5" />
                                    <circle cx="12" cy="12" r="1.5" />
                                    <circle cx="12" cy="19" r="1.5" />
                                </svg>
                            </button>
                        </div>
                        <h2 class="mt-5 text-xl font-medium text-black">Marketing</h2>
                        <p class="mt-2 text-sm text-slate-700">12 active tasks</p>
                        <div class="mt-8 flex items-center justify-between text-xs">
                            <span>Progress</span>
                            <strong>65%</strong>
                        </div>
                        <div class="mt-3 h-1.5 rounded-full bg-slate-200">
                            <div class="h-full w-[65%] rounded-full bg-[#3325d4]"></div>
                        </div>
                        <div class="mt-6 flex gap-3 border-t border-slate-200 pt-4">
                            <a href="#" class="flex-1 rounded bg-slate-100 px-4 py-2 text-center text-xs font-medium text-slate-700">Edit</a>
                            <a href="#" class="flex-1 px-4 py-2 text-center text-xs font-medium text-[#3325d4]">View Tasks</a>
                        </div>
                    </article>

                    <article class="rounded-xl border border-slate-300 bg-white p-5 shadow-sm">
                        <div class="flex items-start justify-between">
                            <div class="grid h-12 w-12 place-items-center rounded-lg bg-sky-100 text-sky-600">
                                <svg class="h-6 w-6" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true">
                                    <circle cx="12" cy="8" r="3" />
                                    <path d="M6 20a6 6 0 0 1 12 0" />
                                </svg>
                            </div>
                            <button type="button" class="grid h-8 w-8 place-items-center rounded-full text-slate-700 transition hover:bg-slate-100" aria-label="Personal category options">
                                <svg class="h-5 w-5" viewBox="0 0 24 24" fill="currentColor" aria-hidden="true">
                                    <circle cx="12" cy="5" r="1.5" />
                                    <circle cx="12" cy="12" r="1.5" />
                                    <circle cx="12" cy="19" r="1.5" />
                                </svg>
                            </button>
                        </div>
                        <h2 class="mt-5 text-xl font-medium text-black">Personal</h2>
                        <p class="mt-2 text-sm text-slate-700">8 active tasks</p>
                        <div class="mt-8 flex items-center justify-between text-xs">
                            <span>Progress</span>
                            <strong>30%</strong>
                        </div>
                        <div class="mt-3 h-1.5 rounded-full bg-slate-200">
                            <div class="h-full w-[30%] rounded-full bg-slate-700"></div>
                        </div>
                        <div class="mt-6 flex gap-3 border-t border-slate-200 pt-4">
                            <a href="#" class="flex-1 rounded bg-slate-100 px-4 py-2 text-center text-xs font-medium text-slate-700">Edit</a>
                            <a href="#" class="flex-1 px-4 py-2 text-center text-xs font-medium text-[#3325d4]">View Tasks</a>
                        </div>
                    </article>

                    <article class="rounded-xl border border-slate-300 bg-white p-5 shadow-sm">
                        <div class="flex items-start justify-between">
                            <div class="grid h-12 w-12 place-items-center rounded-lg bg-violet-100 text-[#3325d4]">
                                <svg class="h-6 w-6" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true">
                                    <path d="m8 9-4 3 4 3" />
                                    <path d="m16 9 4 3-4 3" />
                                </svg>
                            </div>
                            <button type="button" class="grid h-8 w-8 place-items-center rounded-full text-slate-700 transition hover:bg-slate-100" aria-label="Development category options">
                                <svg class="h-5 w-5" viewBox="0 0 24 24" fill="currentColor" aria-hidden="true">
                                    <circle cx="12" cy="5" r="1.5" />
                                    <circle cx="12" cy="12" r="1.5" />
                                    <circle cx="12" cy="19" r="1.5" />
                                </svg>
                            </button>
                        </div>
                        <h2 class="mt-5 text-xl font-medium text-black">Development</h2>
                        <p class="mt-2 text-sm text-slate-700">24 active tasks</p>
                        <div class="mt-8 flex items-center justify-between text-xs">
                            <span>Progress</span>
                            <strong>88%</strong>
                        </div>
                        <div class="mt-3 h-1.5 rounded-full bg-slate-200">
                            <div class="h-full w-[88%] rounded-full bg-[#3325d4]"></div>
                        </div>
                        <div class="mt-6 flex gap-3 border-t border-slate-200 pt-4">
                            <a href="#" class="flex-1 rounded bg-slate-100 px-4 py-2 text-center text-xs font-medium text-slate-700">Edit</a>
                            <a href="#" class="flex-1 px-4 py-2 text-center text-xs font-medium text-[#3325d4]">View Tasks</a>
                        </div>
                    </article>

                    <article class="rounded-xl border border-slate-300 bg-white p-5 shadow-sm">
                        <div class="flex items-start justify-between">
                            <div class="grid h-12 w-12 place-items-center rounded-lg bg-red-100 text-red-600">
                                <svg class="h-6 w-6" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true">
                                    <path d="M10 21h4" />
                                    <path d="M12 3v12" />
                                    <path d="M8 7a4 4 0 1 1 8 0c0 3-4 5-4 8" />
                                    <path d="M7 15h10" />
                                </svg>
                            </div>
                            <button type="button" class="grid h-8 w-8 place-items-center rounded-full text-slate-700 transition hover:bg-slate-100" aria-label="Research category options">
                                <svg class="h-5 w-5" viewBox="0 0 24 24" fill="currentColor" aria-hidden="true">
                                    <circle cx="12" cy="5" r="1.5" />
                                    <circle cx="12" cy="12" r="1.5" />
                                    <circle cx="12" cy="19" r="1.5" />
                                </svg>
                            </button>
                        </div>
                        <h2 class="mt-5 text-xl font-medium text-black">Research</h2>
                        <p class="mt-2 text-sm text-slate-700">5 active tasks</p>
                        <div class="mt-8 flex items-center justify-between text-xs">
                            <span>Progress</span>
                            <strong>15%</strong>
                        </div>
                        <div class="mt-3 h-1.5 rounded-full bg-slate-200">
                            <div class="h-full w-[15%] rounded-full bg-red-600"></div>
                        </div>
                        <div class="mt-6 flex gap-3 border-t border-slate-200 pt-4">
                            <a href="#" class="flex-1 rounded bg-slate-100 px-4 py-2 text-center text-xs font-medium text-slate-700">Edit</a>
                            <a href="#" class="flex-1 px-4 py-2 text-center text-xs font-medium text-[#3325d4]">View Tasks</a>
                        </div>
                    </article>

                    <article class="grid min-h-56 place-items-center rounded-xl border border-dashed border-slate-400 bg-transparent p-8 text-center">
                        <div>
                            <div class="mx-auto grid h-12 w-12 place-items-center rounded-full border border-slate-300 bg-white text-[#3325d4]">
                                <svg class="h-6 w-6" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true">
                                    <circle cx="12" cy="12" r="8" />
                                    <path d="M12 8v8" />
                                    <path d="M8 12h8" />
                                </svg>
                            </div>
                            <h2 class="mt-5 text-lg font-medium text-black">Add New Category</h2>
                            <p class="mt-2 text-sm leading-5 text-slate-700">Create a new workspace for your upcoming projects.</p>
                        </div>
                    </article>
                </section>

                <section class="mt-8 grid gap-6 lg:grid-cols-[1fr_300px]">
                    <article class="rounded-xl border border-slate-300 bg-white p-6 shadow-sm">
                        <h2 class="text-xl font-medium text-black">Productivity Insights</h2>
                        <div class="mt-6 grid gap-6 sm:grid-cols-3">
                            <div>
                                <p class="text-xs font-medium uppercase tracking-wide text-slate-500">Total Completion</p>
                                <p class="mt-2 text-3xl font-bold text-[#3325d4]">74%</p>
                            </div>
                            <div>
                                <p class="text-xs font-medium uppercase tracking-wide text-slate-500">Active Projects</p>
                                <p class="mt-2 text-3xl font-bold text-black">6</p>
                            </div>
                            <div>
                                <p class="text-xs font-medium uppercase tracking-wide text-slate-500">Tasks Due Today</p>
                                <p class="mt-2 text-3xl font-bold text-red-600">9</p>
                            </div>
                        </div>
                    </article>

                    <article class="rounded-xl bg-[#3325d4] p-6 text-white shadow-sm">
                        <h2 class="text-xl font-bold">Upgrade to Pro</h2>
                        <p class="mt-3 text-sm font-medium leading-5 text-indigo-50">Unlock advanced category analytics and unlimited workspace management.</p>
                        <a href="#" class="mt-8 inline-flex h-11 w-full items-center justify-center rounded-lg bg-white text-sm font-bold text-[#3325d4] transition hover:bg-indigo-50">Learn More</a>
                    </article>
                </section>
            </main>
        </div>
    </div>
</body>
</html>
