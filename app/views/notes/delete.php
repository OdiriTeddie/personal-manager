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
    <title>Delete Note | TaskFlow</title>
</head>
<body class="min-h-screen bg-[#f6f8fb] text-slate-950 antialiased">
    <div class="fixed inset-0 overflow-hidden">
        <div class="min-h-screen blur-sm lg:grid lg:grid-cols-[250px_1fr]">
            <aside class="hidden border-r border-slate-300 bg-[#f1f3f7] lg:flex lg:min-h-screen lg:flex-col">
                <div class="px-6 pt-8">
                    <a href="/" class="text-2xl font-bold tracking-normal text-[#1d12d8]">TaskFlow</a>
                    <p class="mt-1 text-sm font-medium text-slate-800">Deep Work Mode</p>
                </div>

                <nav class="mt-12 flex-1 space-y-3 px-4">
                    <a href="/dashboard" class="flex items-center gap-4 rounded-lg px-5 py-3.5 text-base font-medium text-slate-800">Dashboard</a>
                    <a href="/dashboard/tasks" class="flex items-center gap-4 rounded-lg px-5 py-3.5 text-base font-medium text-slate-800">Tasks</a>
                    <a href="/dashboard/notes" class="flex items-center gap-4 rounded-lg border-r-4 border-[#3023db] bg-indigo-100 px-5 py-3.5 text-base font-medium text-[#160bd8]">Notes</a>
                    <a href="/dashboard/categories" class="flex items-center gap-4 rounded-lg px-5 py-3.5 text-base font-medium text-slate-800">Categories</a>
                    <a href="/dashboard/settings" class="flex items-center gap-4 rounded-lg px-5 py-3.5 text-base font-medium text-slate-800">Settings</a>
                </nav>

                <div class="p-6">
                    <div class="flex items-center gap-3 rounded-lg bg-slate-200 px-4 py-3">
                        <div class="grid h-9 w-9 place-items-center rounded-full bg-[#4b3ee6] text-xs font-bold text-white">AR</div>
                        <div>
                            <p class="text-sm font-bold text-slate-950"><?= htmlspecialchars($fullName) ?></p>
                            <p class="text-xs text-slate-700">Pro Plan</p>
                        </div>
                    </div>
                </div>
            </aside>

            <div class="min-w-0">
                <header class="border-b border-slate-300 bg-white">
                    <div class="mx-auto flex h-16 max-w-[1180px] items-center justify-between gap-4 px-5 sm:px-7">
                        <label class="hidden h-10 w-full max-w-sm items-center gap-3 rounded-full bg-slate-100 px-4 text-slate-500 sm:flex">
                            <svg class="h-5 w-5 text-slate-700" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true">
                                <circle cx="11" cy="11" r="7" />
                                <path d="m20 20-3.5-3.5" />
                            </svg>
                            <input type="search" placeholder="Search notes..." class="h-full w-full border-0 bg-transparent text-sm outline-none placeholder:text-slate-500">
                        </label>
                        <a href="/dashboard/notes/create" class="ml-auto inline-flex h-10 items-center gap-2 rounded-lg bg-[#3325d4] px-5 text-sm font-bold text-white">New Note</a>
                    </div>
                </header>

                <main class="mx-auto max-w-[1180px] px-5 py-8 sm:px-7">
                    <div class="h-64 rounded-xl border border-slate-300 bg-white"></div>
                </main>

                <footer class="mx-auto mt-8 max-w-[1180px] border-t border-slate-300 px-5 py-8 sm:px-7">
                    <div class="flex justify-between text-sm text-slate-800">
                        <p>&copy; 2024 TaskFlow Productivity Suite.</p>
                        <div class="flex gap-7">
                            <span>Privacy</span>
                            <span>Terms</span>
                            <span>Support</span>
                        </div>
                    </div>
                </footer>
            </div>
        </div>
    </div>

    <div class="fixed inset-0 z-50 grid place-items-center bg-slate-950/20 px-5 backdrop-blur-[2px]">
        <section class="w-full max-w-xl overflow-hidden rounded-xl border border-slate-300 bg-white shadow-2xl shadow-slate-900/20">
            <div class="flex gap-8 px-8 py-8">
                <div class="grid h-16 w-16 shrink-0 place-items-center rounded-full bg-red-100 text-red-700">
                    <svg class="h-8 w-8" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true">
                        <path d="M3 6h18" />
                        <path d="M8 6V4h8v2" />
                        <path d="M19 6l-1 14H6L5 6" />
                        <path d="M10 11v5" />
                        <path d="M14 11v5" />
                    </svg>
                </div>
                <div>
                    <h1 class="text-3xl font-bold tracking-normal text-black">Delete Note?</h1>
                    <p class="mt-3 text-lg leading-7 text-slate-800">
                        This action cannot be undone. The note <strong>"Meeting Minutes - Oct 24"</strong> will be permanently removed from your workspace.
                    </p>
                </div>
            </div>

            <div class="border-y border-slate-300 px-8 py-6">
                <div class="flex items-center gap-5 rounded-lg border border-slate-300 bg-slate-50 px-6 py-5">
                    <svg class="h-8 w-8 text-slate-500" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true">
                        <path d="M6 3h9l4 4v14H6z" />
                        <path d="M15 3v5h5" />
                        <path d="M9 13h6M9 17h4" />
                    </svg>
                    <div>
                        <p class="text-xl font-medium text-slate-700">Meeting Minutes - Oct 24</p>
                        <p class="mt-1 text-base text-slate-500">Created: October 24, 2024</p>
                    </div>
                </div>
            </div>

            <form action="#" method="post" class="flex flex-col gap-4 bg-slate-50 px-8 py-6 sm:flex-row sm:justify-end">
                <a href="/dashboard/notes/show" class="inline-flex h-14 items-center justify-center rounded-lg border border-slate-300 bg-white px-10 text-lg font-medium text-slate-950 transition hover:bg-slate-50">Cancel</a>
                <button type="submit" class="inline-flex h-14 items-center justify-center gap-3 rounded-lg bg-red-700 px-10 text-lg font-bold text-white shadow-lg shadow-red-900/20 transition hover:bg-red-800">
                    <svg class="h-5 w-5" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true">
                        <path d="M3 6h18" />
                        <path d="M8 6V4h8v2" />
                        <path d="M19 6l-1 14H6L5 6" />
                    </svg>
                    Delete
                </button>
            </form>
        </section>
    </div>
</body>
</html>
