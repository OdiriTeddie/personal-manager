<?php

$user = $_SESSION['user'] ?? [];
$fullName = $user['full_name'] ?? 'Alex Rivera';
$tasks = $tasks ?? [];

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/assets/css/app.css">
    <title>Tasks | TaskFlow</title>
</head>
<body class="bg-[#f6f8fb] text-slate-950 antialiased">
    <div class="min-h-screen lg:grid lg:grid-cols-[250px_1fr]">
        <aside class="hidden border-r border-slate-300 bg-[#f1f3f7] lg:flex lg:min-h-screen lg:flex-col">
            <div class="px-5 pt-7">
                <a href="/" class="text-xl font-bold tracking-normal text-[#1d12d8]">TaskFlow</a>
                <p class="mt-1 text-sm font-medium text-slate-800">Deep Work Mode</p>
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
                <a href="/dashboard/tasks" class="flex items-center gap-3 rounded-lg border-r-4 border-[#3023db] bg-indigo-100 px-4 py-3 text-sm font-bold text-[#160bd8]">
                    <svg class="h-5 w-5" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true">
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

            <div class="border-t border-slate-300 p-5">
                <div class="flex items-center gap-3">
                    <div class="grid h-9 w-9 place-items-center rounded-full bg-indigo-100 text-xs font-bold text-[#3325d4]">AR</div>
                    <div>
                        <p class="text-sm font-bold text-slate-950"><?= htmlspecialchars($fullName) ?></p>
                        <p class="text-xs font-medium text-slate-600">Pro Plan</p>
                    </div>
                </div>
            </div>
        </aside>

        <div class="min-w-0">
            <header class="sticky top-0 z-40 border-b border-slate-300 bg-white/95 backdrop-blur">
                <div class="mx-auto flex h-14 max-w-[980px] items-center justify-between gap-4 px-5 sm:px-7">
                    <a href="/" class="text-lg font-bold text-[#1d12d8] lg:hidden">TaskFlow</a>
                    <label class="hidden h-9 w-full max-w-md items-center gap-3 rounded-md border border-slate-300 bg-[#f7f8fb] px-4 text-slate-500 shadow-sm sm:flex">
                        <svg class="h-4 w-4 text-slate-700" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true">
                            <circle cx="11" cy="11" r="7" />
                            <path d="m20 20-3.5-3.5" />
                        </svg>
                        <input type="search" placeholder="Search tasks, tags, or projects..." class="h-full w-full border-0 bg-transparent text-sm outline-none placeholder:text-slate-500">
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

            <main class="mx-auto max-w-[980px] px-5 py-6 sm:px-7">
                <section class="flex flex-col gap-4 sm:flex-row sm:items-start sm:justify-between">
                    <div>
                        <h1 class="text-3xl font-bold tracking-normal text-black">Tasks</h1>
                        <p class="mt-1 text-sm text-slate-700">Manage your deep work sessions and daily objectives.</p>
                    </div>
                    <a href="/dashboard/tasks/create" class="inline-flex h-11 items-center justify-center gap-2 rounded-lg bg-[#3325d4] px-6 text-sm font-bold text-white shadow-sm transition hover:bg-[#2418bd]">
                        <svg class="h-5 w-5" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true">
                            <path d="M12 5v14" />
                            <path d="M5 12h14" />
                        </svg>
                        Create Task
                    </a>
                </section>

                <section class="mt-5 grid gap-4 lg:grid-cols-[1fr_320px]">
                    <div class="rounded-xl border border-slate-300 bg-white p-4">
                        <div class="flex flex-wrap items-center gap-5">
                            <div class="border-r border-slate-300 pr-5">
                                <p class="text-xs font-bold uppercase text-slate-700">Completed</p>
                                <p class="mt-1 text-2xl font-bold text-black">24/30</p>
                            </div>
                            <div>
                                <p class="text-xs font-bold uppercase text-slate-700">Next Deadline</p>
                                <p class="mt-1 text-2xl font-bold text-[#3325d4]">2h 15m</p>
                            </div>
                            <div class="ml-auto hidden h-2 w-44 overflow-hidden rounded-full bg-slate-200 sm:block">
                                <div class="h-full w-4/5 rounded-full bg-[#3325d4]"></div>
                            </div>
                        </div>
                    </div>

                    <div class="relative overflow-hidden rounded-xl bg-[#4b3ee6] p-5 text-white">
                        <p class="text-xs font-bold uppercase text-indigo-100">Focus Target</p>
                        <p class="mt-1 text-xl font-bold">Deep Work Sprint</p>
                        <svg class="absolute -right-2 top-2 h-20 w-20 text-white/15" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true">
                            <path d="m13 2-9 12h7l-1 8 9-12h-7z" />
                        </svg>
                    </div>
                </section>

                <section class="mt-6 overflow-hidden rounded-xl border border-slate-300 bg-white">
                    <div class="flex flex-wrap items-center justify-between gap-3 border-b border-slate-300 px-4 py-4">
                        <div class="flex gap-2">
                            <button type="button" class="inline-flex h-9 items-center gap-2 rounded-md border border-slate-300 bg-white px-4 text-sm font-medium text-slate-800 transition hover:bg-slate-50">
                                <svg class="h-4 w-4" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true">
                                    <path d="M4 6h16M7 12h10M10 18h4" />
                                </svg>
                                Filter
                            </button>
                            <button type="button" class="inline-flex h-9 items-center gap-2 rounded-md border border-slate-300 bg-white px-4 text-sm font-medium text-slate-800 transition hover:bg-slate-50">
                                <svg class="h-4 w-4" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true">
                                    <path d="M4 7h10M4 12h7M4 17h4" />
                                    <path d="m16 15 3 3 3-3" />
                                    <path d="M19 6v12" />
                                </svg>
                                Sort
                            </button>
                        </div>
                        <div class="flex rounded-md border border-slate-300 bg-slate-50 p-1">
                            <button type="button" class="grid h-8 w-8 place-items-center rounded bg-white text-[#3325d4] shadow-sm" aria-label="List view">
                                <svg class="h-4 w-4" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true">
                                    <path d="M8 6h13M8 12h13M8 18h13" />
                                    <path d="M3 6h.01M3 12h.01M3 18h.01" />
                                </svg>
                            </button>
                            <button type="button" class="grid h-8 w-8 place-items-center rounded text-slate-700 transition hover:bg-white" aria-label="Grid view">
                                <svg class="h-4 w-4" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true">
                                    <rect x="4" y="4" width="6" height="6" />
                                    <rect x="14" y="4" width="6" height="6" />
                                    <rect x="4" y="14" width="6" height="6" />
                                    <rect x="14" y="14" width="6" height="6" />
                                </svg>
                            </button>
                        </div>
                    </div>

                    <div class="overflow-x-auto">
                        <table class="w-full min-w-[760px] text-left">
                            <thead class="border-b border-slate-300 text-xs font-bold uppercase text-slate-600">
                                <tr>
                                    <th class="px-5 py-4">Task Title</th>
                                    <th class="px-5 py-4">Priority</th>
                                    <th class="px-5 py-4">Due Date</th>
                                    <th class="px-5 py-4">Status</th>
                                    <th class="px-5 py-4 text-right">Actions</th>
                                </tr>
                            </thead>
                            <tbody class="divide-y divide-slate-300 text-sm">
                                <?php foreach ($tasks as $task): ?>
                                    <tr>
                                        <td class="px-5 py-4">
                                            <div class="flex items-center gap-3">
                                                <span class="h-2.5 w-2.5 rounded-full bg-[#3325d4]"></span>
                                                <div>
                                                    <p class="font-bold text-black"><?= ucfirst($task['title']) ?></p>
                                                    <p class="mt-0.5 text-xs text-slate-700"><?= ucfirst($task['description']) ?></p>
                                                </div>
                                            </div>
                                        </td>
                                        <td class="px-5 py-4"><span class="rounded-full bg-red-100 px-2.5 py-1 text-xs font-bold text-red-700"> <?= ucfirst($task['priority']) ?> </span></td>
                                        <td class="px-5 py-4">
                                            <p class="text-slate-950"><?= $task['due_date'] ?></p>
                                            <!-- <p class="mt-0.5 text-xs font-medium text-red-600">Today</p> -->
                                        </td>
                                        <td class="px-5 py-4">
                                            <span class="inline-flex items-center gap-2 font-bold text-slate-950">
                                                <svg class="h-4 w-4 text-[#3325d4]" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true">
                                                    <path d="M12 2v5" />
                                                    <path d="M12 17v5" />
                                                    <path d="m4.93 4.93 3.54 3.54" />
                                                    <path d="m15.53 15.53 3.54 3.54" />
                                                    <path d="M2 12h5" />
                                                    <path d="M17 12h5" />
                                                </svg>
                                                <?= ucfirst($task['status']) ?>
                                            </span>
                                        </td>
                                        <td class="px-5 py-4">
                                            <div class="flex justify-end gap-2">
                                                <a href="/dashboard/tasks/<?= $task['id'] ?>/edit" class="rounded-md border border-slate-300 px-3 py-1.5 text-xs font-medium text-slate-800 transition hover:bg-slate-50">Edit</a>
                                                <a href="/dashboard/tasks/<?= $task['id'] ?>/delete" class="rounded-md border border-red-200 px-3 py-1.5 text-xs font-medium text-red-600 transition hover:bg-red-50">Delete</a>
                                            </div>
                                        </td>
                                    </tr>
                                <?php endforeach ?>
                               
                            </tbody>
                        </table>
                    </div>

                    <div class="flex flex-col gap-4 border-t border-slate-300 px-5 py-4 text-sm sm:flex-row sm:items-center sm:justify-between">
                        <p class="text-slate-800">Showing 1 to 10 of 48 tasks</p>
                        <div class="flex items-center gap-2">
                            <a href="#" class="grid h-9 w-9 place-items-center rounded-md border border-slate-300 text-slate-700 transition hover:bg-slate-50" aria-label="Previous page">
                                <svg class="h-4 w-4" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true">
                                    <path d="m15 18-6-6 6-6" />
                                </svg>
                            </a>
                            <a href="#" class="grid h-9 w-9 place-items-center rounded-md bg-[#3325d4] font-bold text-white">1</a>
                            <a href="#" class="grid h-9 w-9 place-items-center rounded-md font-bold text-slate-800 transition hover:bg-slate-50">2</a>
                            <a href="#" class="grid h-9 w-9 place-items-center rounded-md font-bold text-slate-800 transition hover:bg-slate-50">3</a>
                            <a href="#" class="grid h-9 w-9 place-items-center rounded-md border border-slate-300 text-slate-700 transition hover:bg-slate-50" aria-label="Next page">
                                <svg class="h-4 w-4" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true">
                                    <path d="m9 18 6-6-6-6" />
                                </svg>
                            </a>
                        </div>
                    </div>
                </section>
            </main>

            <footer class="mx-auto mt-6 max-w-[980px] border-t border-slate-300 px-5 py-7 sm:px-7">
                <div class="flex flex-col gap-5 text-sm text-slate-800 sm:flex-row sm:items-end sm:justify-between">
                    <div>
                        <a href="/" class="font-bold text-[#160bd8]">TaskFlow</a>
                        <p class="mt-2">&copy; 2024 TaskFlow Productivity Suite.</p>
                    </div>
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
