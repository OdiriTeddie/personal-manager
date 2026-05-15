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
    <title>Create Note | TaskFlow</title>
</head>
<body class="bg-[#f6f8fb] text-slate-950 antialiased">
    <div class="min-h-screen lg:grid lg:grid-cols-[320px_1fr]">
        <aside class="hidden border-r border-slate-300 bg-[#f1f3f7] lg:flex lg:min-h-screen lg:flex-col">
            <div class="px-8 pt-9">
                <a href="/" class="flex items-center gap-4 text-3xl font-bold tracking-normal text-[#1d12d8]">
                    <span class="grid h-11 w-11 place-items-center rounded-lg bg-[#3325d4] text-white">
                        <svg class="h-7 w-7" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true">
                            <circle cx="12" cy="12" r="8" />
                            <path d="m9 12 2 2 4-5" />
                        </svg>
                    </span>
                    TaskFlow
                </a>
                <p class="ml-16 mt-2 text-lg font-medium text-slate-800">Deep Work Mode</p>
            </div>

            <nav class="mt-16 flex-1 space-y-4 px-5">
                <a href="/dashboard" class="flex items-center gap-5 rounded-lg px-6 py-4 text-lg font-medium text-slate-800 transition hover:bg-white">
                    <svg class="h-7 w-7 text-slate-700" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true">
                        <rect x="4" y="4" width="6" height="6" />
                        <rect x="14" y="4" width="6" height="6" />
                        <rect x="4" y="14" width="6" height="6" />
                        <rect x="14" y="14" width="6" height="6" />
                    </svg>
                    Dashboard
                </a>
                <a href="/dashboard/tasks" class="flex items-center gap-5 rounded-lg px-6 py-4 text-lg font-medium text-slate-800 transition hover:bg-white">
                    <svg class="h-7 w-7 text-slate-700" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true">
                        <circle cx="12" cy="12" r="9" />
                        <path d="m8.5 12 2.3 2.3 4.8-5" />
                    </svg>
                    Tasks
                </a>
                <a href="/dashboard/notes" class="flex items-center gap-5 rounded-lg border-r-4 border-[#3023db] bg-indigo-100 px-6 py-4 text-lg font-medium text-[#160bd8]">
                    <svg class="h-7 w-7" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true">
                        <path d="M6 3h9l4 4v14H6z" />
                        <path d="M15 3v5h5" />
                        <path d="M9 13h6M9 17h6" />
                    </svg>
                    Notes
                </a>
                <a href="/dashboard/categories" class="flex items-center gap-5 rounded-lg px-6 py-4 text-lg font-medium text-slate-800 transition hover:bg-white">
                    <svg class="h-7 w-7 text-slate-700" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true">
                        <path d="M4 7h10l6 5-6 5H4z" />
                    </svg>
                    Categories
                </a>
                <a href="/dashboard/settings" class="flex items-center gap-5 rounded-lg px-6 py-4 text-lg font-medium text-slate-800 transition hover:bg-white">
                    <svg class="h-7 w-7 text-slate-700" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true">
                        <path d="M12 15.5a3.5 3.5 0 1 0 0-7 3.5 3.5 0 0 0 0 7Z" />
                        <path d="M19.4 15a1.8 1.8 0 0 0 .36 1.98l.06.06a2 2 0 1 1-2.83 2.83l-.06-.06A1.8 1.8 0 0 0 15 19.4a1.8 1.8 0 0 0-1 .6 1.8 1.8 0 0 0-.5 1.3V21a2 2 0 1 1-4 0v-.09A1.8 1.8 0 0 0 8 19.4a1.8 1.8 0 0 0-1.98.36l-.06.06a2 2 0 1 1-2.83-2.83l.06-.06A1.8 1.8 0 0 0 3.6 15a1.8 1.8 0 0 0-.6-1 1.8 1.8 0 0 0-1.3-.5H1.6a2 2 0 1 1 0-4h.09A1.8 1.8 0 0 0 3.6 8a1.8 1.8 0 0 0-.36-1.98l-.06-.06a2 2 0 1 1 2.83-2.83l.06.06A1.8 1.8 0 0 0 8 3.6a1.8 1.8 0 0 0 1-.6A1.8 1.8 0 0 0 9.5 1.7V1.6a2 2 0 1 1 4 0v.09A1.8 1.8 0 0 0 15 3.6a1.8 1.8 0 0 0 1.98-.36l.06-.06a2 2 0 1 1 2.83 2.83l-.06.06A1.8 1.8 0 0 0 19.4 8c.15.36.36.7.6 1 .34.34.8.53 1.3.5h.1a2 2 0 1 1 0 4h-.1A1.8 1.8 0 0 0 19.4 15Z" />
                    </svg>
                    Settings
                </a>
            </nav>

            <div class="border-t border-slate-300 p-8">
                <div class="flex items-center gap-4">
                    <div class="grid h-11 w-11 place-items-center overflow-hidden rounded-full bg-slate-200">
                        <div class="h-full w-full bg-gradient-to-br from-slate-300 via-slate-100 to-slate-500"></div>
                    </div>
                    <div>
                        <p class="text-lg font-medium text-slate-950"><?= htmlspecialchars($fullName) ?></p>
                        <p class="text-base text-slate-700">Pro Plan</p>
                    </div>
                </div>
            </div>
        </aside>

        <div class="min-w-0">
            <header class="sticky top-0 z-40 border-b border-slate-300 bg-white/95 backdrop-blur">
                <div class="mx-auto flex h-20 max-w-[1280px] items-center justify-between gap-4 px-5 sm:px-8">
                    <div class="flex items-center gap-7">
                        <button type="button" class="grid h-10 w-10 place-items-center rounded-full text-slate-900 transition hover:bg-slate-100" aria-label="Toggle sidebar">
                            <svg class="h-7 w-7" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true">
                                <path d="M4 6h12" />
                                <path d="M4 12h16" />
                                <path d="M4 18h12" />
                                <path d="m19 8 3 4-3 4" />
                            </svg>
                        </button>
                        <span class="hidden h-10 w-px bg-slate-300 sm:block"></span>
                        <nav class="hidden items-center gap-5 text-lg font-medium sm:flex">
                            <a href="/dashboard/notes" class="text-slate-800">Notes</a>
                            <span class="text-slate-500">&rsaquo;</span>
                            <span class="font-bold text-[#160bd8]">Create New</span>
                        </nav>
                    </div>

                    <div class="ml-auto flex items-center gap-5 text-slate-900">
                        <button type="button" class="grid h-10 w-10 place-items-center rounded-full transition hover:bg-slate-100" aria-label="Notifications">
                            <svg class="h-7 w-7" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round">
                                <path d="M18 8a6 6 0 1 0-12 0c0 7-3 7-3 7h18s-3 0-3-7" />
                                <path d="M13.73 21a2 2 0 0 1-3.46 0" />
                            </svg>
                        </button>
                        <button type="button" class="grid h-10 w-10 place-items-center rounded-full transition hover:bg-slate-100" aria-label="Account">
                            <svg class="h-8 w-8" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round">
                                <circle cx="12" cy="12" r="9" />
                                <circle cx="12" cy="10" r="3" />
                                <path d="M7 19a5 5 0 0 1 10 0" />
                            </svg>
                        </button>
                    </div>
                </div>
            </header>

            <main class="mx-auto max-w-[1280px] px-5 py-12 sm:px-8">
                <section class="mx-auto max-w-5xl overflow-hidden rounded-xl border border-slate-300 bg-white shadow-sm">
                    <div class="flex items-start justify-between border-b border-slate-300 px-8 py-7">
                        <div>
                            <h1 class="text-3xl font-medium tracking-normal text-black">Create New Note</h1>
                            <p class="mt-2 text-lg text-slate-700">Capture your thoughts and organize them instantly.</p>
                        </div>
                        <span class="rounded-xl border border-slate-300 bg-white px-6 py-4 text-lg font-medium text-slate-800">Draft</span>
                    </div>

                    <form action="#" method="post">
                        <div class="space-y-8 px-8 py-8">
                            <div>
                                <label for="title" class="block text-lg font-medium text-black">Note Title</label>
                                <input id="title" name="title" type="text" placeholder="Enter a descriptive title..." class="mt-4 h-16 w-full rounded-xl border border-slate-300 bg-white px-6 text-xl outline-none transition placeholder:text-slate-500 focus:border-[#4b3ee6] focus:ring-2 focus:ring-[#4b3ee6]/15">
                            </div>

                            <div class="grid gap-8 md:grid-cols-2">
                                <div>
                                    <label for="category" class="block text-lg font-medium text-black">Category</label>
                                    <select id="category" name="category" class="mt-4 h-14 w-full rounded-xl border border-slate-300 bg-white px-6 text-lg outline-none transition focus:border-[#4b3ee6] focus:ring-2 focus:ring-[#4b3ee6]/15">
                                        <option>Ideas</option>
                                        <option>Project Alpha</option>
                                        <option>Research</option>
                                        <option>Meeting Notes</option>
                                    </select>
                                </div>

                                <div>
                                    <label for="tags" class="block text-lg font-medium text-black">Tags</label>
                                    <div class="mt-4 min-h-14 rounded-xl border border-slate-300 bg-slate-50 px-4 py-3 transition focus-within:border-[#4b3ee6] focus-within:ring-2 focus-within:ring-[#4b3ee6]/15">
                                        <div class="flex flex-wrap items-center gap-3">
                                            <span class="inline-flex items-center gap-2 rounded-lg bg-indigo-100 px-4 py-1.5 text-base font-medium text-slate-700">
                                                Productivity
                                                <button type="button" aria-label="Remove Productivity tag">x</button>
                                            </span>
                                            <span class="inline-flex items-center gap-2 rounded-lg bg-indigo-100 px-4 py-1.5 text-base font-medium text-slate-700">
                                                Q4
                                                <button type="button" aria-label="Remove Q4 tag">x</button>
                                            </span>
                                            <input id="tags" name="tags" type="text" placeholder="Add tag..." class="h-8 min-w-32 flex-1 border-0 bg-transparent text-lg outline-none placeholder:text-slate-600">
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div>
                                <label for="content" class="block text-lg font-medium text-black">Content</label>
                                <div class="mt-4 overflow-hidden rounded-xl border border-slate-300 bg-white">
                                    <div class="flex h-16 items-center gap-7 border-b border-slate-300 bg-slate-100 px-7 text-slate-950">
                                        <button type="button" class="text-xl font-bold" aria-label="Bold">B</button>
                                        <button type="button" class="text-xl font-bold italic" aria-label="Italic">I</button>
                                        <button type="button" aria-label="List">
                                            <svg class="h-6 w-6" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true">
                                                <path d="M8 6h13M8 12h13M8 18h13" />
                                                <path d="M3 6h.01M3 12h.01M3 18h.01" />
                                            </svg>
                                        </button>
                                        <span class="h-8 w-px bg-slate-300"></span>
                                        <button type="button" aria-label="Insert link">
                                            <svg class="h-6 w-6" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true">
                                                <path d="M10 13a5 5 0 0 0 7.54.54l3-3a5 5 0 0 0-7.07-7.07l-1.72 1.71" />
                                                <path d="M14 11a5 5 0 0 0-7.54-.54l-3 3a5 5 0 0 0 7.07 7.07l1.71-1.71" />
                                            </svg>
                                        </button>
                                        <button type="button" aria-label="Insert image">
                                            <svg class="h-6 w-6" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true">
                                                <rect x="3" y="5" width="18" height="14" rx="2" />
                                                <circle cx="8" cy="10" r="2" />
                                                <path d="m21 15-5-5L5 21" />
                                            </svg>
                                        </button>
                                        <button type="button" aria-label="Code">
                                            <svg class="h-6 w-6" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true">
                                                <path d="m8 9-4 3 4 3" />
                                                <path d="m16 9 4 3-4 3" />
                                            </svg>
                                        </button>
                                    </div>
                                    <textarea id="content" name="content" rows="14" placeholder="Start writing your thoughts..." class="w-full resize-none border-0 bg-white px-7 py-6 text-lg leading-8 outline-none placeholder:text-slate-500"></textarea>
                                </div>
                            </div>
                        </div>

                        <div class="flex flex-col gap-4 border-t border-slate-300 bg-slate-50 px-8 py-6 sm:flex-row sm:items-center">
                            <p class="inline-flex items-center gap-2 text-lg text-slate-700">
                                <svg class="h-5 w-5" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true">
                                    <path d="M3 12a9 9 0 1 0 3-6.7" />
                                    <path d="M3 4v6h6" />
                                </svg>
                                Autosaved 2m ago
                            </p>
                            <div class="flex gap-4 sm:ml-auto">
                                <a href="/dashboard/notes" class="inline-flex h-12 items-center justify-center rounded-lg px-7 text-lg font-medium text-slate-800 transition hover:bg-slate-100">Cancel</a>
                                <button type="submit" class="inline-flex h-12 items-center justify-center rounded-lg bg-[#3325d4] px-10 text-lg font-bold text-white transition hover:bg-[#2418bd]">Save Note</button>
                            </div>
                        </div>
                    </form>
                </section>
            </main>

            <footer class="mx-auto mt-8 max-w-[1280px] border-t border-slate-300 px-5 py-8 sm:px-8">
                <div class="flex flex-col gap-5 text-base text-slate-800 sm:flex-row sm:items-end sm:justify-between">
                    <p>&copy; 2024 TaskFlow Productivity Suite.</p>
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
