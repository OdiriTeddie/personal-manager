<?php

$user = $_SESSION['user'] ?? [];
$fullName = $user['full_name'] ?? 'Alex Rivera';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/assets/css/app.css">
    <title>Delete Task | TaskFlow</title>
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
                <a href="/dashboard" class="flex items-center gap-3 rounded-lg px-4 py-3 text-sm font-medium text-slate-800 transition hover:bg-white">Dashboard</a>
                <a href="/dashboard/tasks" class="flex items-center gap-3 rounded-lg border-r-4 border-[#3023db] bg-indigo-100 px-4 py-3 text-sm font-bold text-[#160bd8]">Tasks</a>
                <a href="/dashboard/notes" class="flex items-center gap-3 rounded-lg px-4 py-3 text-sm font-medium text-slate-800 transition hover:bg-white">Notes</a>
                <a href="/dashboard/categories" class="flex items-center gap-3 rounded-lg px-4 py-3 text-sm font-medium text-slate-800 transition hover:bg-white">Categories</a>
                <a href="/dashboard/settings" class="flex items-center gap-3 rounded-lg px-4 py-3 text-sm font-medium text-slate-800 transition hover:bg-white">Settings</a>
            </nav>
        </aside>

        <div class="min-w-0">
            <header class="sticky top-0 z-40 border-b border-slate-300 bg-white/95 backdrop-blur">
                <div class="mx-auto flex h-14 max-w-[980px] items-center justify-between gap-4 px-5 sm:px-7">
                    <a href="/" class="text-lg font-bold text-[#1d12d8] lg:hidden">TaskFlow</a>
                    <label class="hidden h-9 w-full max-w-sm items-center gap-3 rounded-full bg-slate-100 px-4 text-slate-500 sm:flex">
                        <svg class="h-4 w-4 text-slate-700" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true">
                            <circle cx="11" cy="11" r="7" />
                            <path d="m20 20-3.5-3.5" />
                        </svg>
                        <input type="search" placeholder="Search tasks..." class="h-full w-full border-0 bg-transparent text-sm outline-none placeholder:text-slate-500">
                    </label>
                </div>
            </header>

            <main class="mx-auto max-w-[980px] px-5 py-8 sm:px-7">
                <section class="mx-auto max-w-xl overflow-hidden rounded-xl border border-slate-300 bg-white shadow-sm">
                    <div class="border-b border-slate-300 px-7 py-6">
                        <div class="grid h-12 w-12 place-items-center rounded-full bg-red-100 text-red-600">
                            <svg class="h-6 w-6" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true">
                                <path d="M3 6h18" />
                                <path d="M8 6V4h8v2" />
                                <path d="M19 6l-1 14H6L5 6" />
                                <path d="M10 11v5" />
                                <path d="M14 11v5" />
                            </svg>
                        </div>
                        <h1 class="mt-5 text-2xl font-medium tracking-normal text-black">Delete Task</h1>
                        <p class="mt-2 text-sm leading-6 text-slate-700">This will permanently delete the task below. This action cannot be undone.</p>
                    </div>

                    <div class="px-7 py-6">
                        <div class="rounded-lg border border-slate-300 bg-slate-50 p-5">
                            <p class="text-sm font-bold text-slate-500">Task</p>
                            <h2 class="mt-2 text-lg font-bold text-black">Redesign system architecture</h2>
                            <p class="mt-2 text-sm text-slate-700">Project Phoenix • Backend • Due Oct 24, 2024</p>
                        </div>

                        <form action="#" method="post" class="mt-7 flex flex-col gap-3 border-t border-slate-300 pt-6 sm:flex-row sm:justify-end">
                            <a href="/dashboard/tasks/edit" class="inline-flex h-11 items-center justify-center rounded-lg border border-slate-300 bg-white px-7 text-sm font-medium text-slate-900 transition hover:bg-slate-50">Cancel</a>
                            <button type="submit" class="inline-flex h-11 items-center justify-center gap-2 rounded-lg bg-red-600 px-7 text-sm font-bold text-white transition hover:bg-red-700">
                                <svg class="h-4 w-4" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true">
                                    <path d="M3 6h18" />
                                    <path d="M8 6V4h8v2" />
                                    <path d="M19 6l-1 14H6L5 6" />
                                </svg>
                                Delete Task
                            </button>
                        </form>
                    </div>
                </section>
            </main>
        </div>
    </div>
</body>
</html>
