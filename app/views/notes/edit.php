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
    <title>Edit Note | TaskFlow</title>
</head>
<body class="bg-[#f6f8fb] text-slate-950 antialiased">
    <div class="min-h-screen lg:grid lg:grid-cols-[320px_1fr]">
        <aside class="hidden border-r border-slate-300 bg-[#f1f3f7] lg:flex lg:min-h-screen lg:flex-col">
            <div class="flex h-24 items-center gap-8 border-b border-slate-300 px-8">
                <a href="/dashboard/notes" class="grid h-10 w-10 place-items-center rounded-full transition hover:bg-white" aria-label="Back to notes">
                    <svg class="h-7 w-7" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true">
                        <path d="m15 18-6-6 6-6" />
                    </svg>
                </a>
                <a href="/" class="text-3xl font-bold tracking-normal text-[#1d12d8]">TaskFlow</a>
            </div>

            <nav class="mt-7 flex-1 space-y-3 px-5">
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
        </aside>

        <div class="min-w-0">
            <header class="sticky top-0 z-40 border-b border-slate-300 bg-white/95 backdrop-blur">
                <div class="mx-auto flex h-24 max-w-[1280px] items-center justify-between gap-4 px-5 sm:px-8">
                    <a href="/dashboard/notes" class="grid h-10 w-10 place-items-center rounded-full transition hover:bg-slate-100 lg:hidden" aria-label="Back to notes">
                        <svg class="h-7 w-7" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true">
                            <path d="m15 18-6-6 6-6" />
                        </svg>
                    </a>

                    <label class="ml-auto hidden h-16 w-full max-w-xs items-center gap-4 rounded-lg border border-slate-300 bg-[#f7f8fb] px-5 text-slate-500 shadow-sm sm:flex">
                        <svg class="h-6 w-6 text-slate-700" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true">
                            <circle cx="11" cy="11" r="7" />
                            <path d="m20 20-3.5-3.5" />
                        </svg>
                        <input type="search" placeholder="Search tasks..." class="h-full w-full border-0 bg-transparent text-lg outline-none placeholder:text-slate-500">
                    </label>

                    <div class="flex items-center gap-5 text-slate-900">
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
                <section class="flex flex-col gap-6 lg:flex-row lg:items-start lg:justify-between">
                    <div>
                        <div class="flex flex-wrap items-center gap-3 text-lg text-slate-800">
                            <span class="rounded bg-indigo-100 px-3 py-1 text-base font-medium text-slate-700">Project Alpha</span>
                            <span>&bull;</span>
                            <span>Last edited: Oct 24, 2024, 10:42 AM</span>
                        </div>
                        <h1 class="mt-3 text-4xl font-bold tracking-normal text-black">Edit Note</h1>
                    </div>
                    <div class="flex gap-4">
                        <a href="/dashboard/notes" class="inline-flex h-12 items-center justify-center rounded-lg border border-slate-300 bg-white px-7 text-lg font-medium text-slate-900 transition hover:bg-slate-50">Discard</a>
                        <button type="submit" form="edit-note-form" class="inline-flex h-12 items-center justify-center gap-3 rounded-lg bg-[#3325d4] px-8 text-lg font-bold text-white transition hover:bg-[#2418bd]">
                            <svg class="h-5 w-5" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true">
                                <path d="M19 21H5a2 2 0 0 1-2-2V5a2 2 0 0 1 2-2h11l5 5v11a2 2 0 0 1-2 2Z" />
                                <path d="M17 21v-8H7v8" />
                                <path d="M7 3v5h8" />
                            </svg>
                            Save Changes
                        </button>
                    </div>
                </section>

                <div class="mt-10 grid gap-8 xl:grid-cols-[1fr_360px]">
                    <div class="space-y-8">
                        <form id="edit-note-form" action="#" method="post" class="rounded-xl border border-slate-300 bg-white p-8 shadow-sm">
                            <div>
                                <label for="title" class="block text-lg font-medium text-slate-800">Note Title</label>
                                <input id="title" name="title" type="text" value="Project Alpha Brainstorming" class="mt-4 w-full border-0 bg-transparent p-0 text-3xl font-medium text-black outline-none">
                            </div>

                            <div class="mt-10">
                                <label for="content" class="block text-lg font-medium text-slate-800">Content</label>
                                <textarea id="content" name="content" rows="19" class="mt-4 w-full resize-none border-0 bg-transparent p-0 text-xl leading-9 text-black outline-none">Phase 1: Research and Discovery
- Market analysis of similar productivity suites
- Identify pain points in current deep work workflows
- User interviews scheduled for next Tuesday

Core Value Propositions:
1. Low cognitive load interface
2. Context-aware task prioritization
3. Seamless cross-platform synchronization

Visual Direction:
We should aim for a "Clean Studio" aesthetic. High contrast but muted backgrounds. Focus on typography hierarchy (Geist Mono for code/data, Geist Sans for UI).

Next Steps:</textarea>
                            </div>
                        </form>

                        <section class="rounded-xl border border-slate-300 bg-white p-8 shadow-sm">
                            <h2 class="text-3xl font-medium tracking-normal text-black">Attached Assets</h2>
                            <div class="mt-7 grid gap-5 sm:grid-cols-3">
                                <div class="aspect-square overflow-hidden rounded-lg bg-slate-300">
                                    <div class="grid h-full place-items-center bg-gradient-to-br from-slate-400 via-slate-100 to-slate-700 p-8">
                                        <div class="h-24 w-32 rounded bg-slate-900 p-3 shadow-xl">
                                            <div class="h-full rounded bg-white p-2">
                                                <div class="mb-2 h-2 w-14 rounded bg-slate-600"></div>
                                                <div class="space-y-1">
                                                    <div class="h-1.5 rounded bg-slate-300"></div>
                                                    <div class="h-1.5 w-4/5 rounded bg-slate-300"></div>
                                                    <div class="h-1.5 w-3/5 rounded bg-slate-300"></div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="aspect-square overflow-hidden rounded-lg bg-[#092b35]">
                                    <div class="grid h-full place-items-center p-8">
                                        <div class="h-28 w-36 rotate-[-8deg] rounded-lg border border-cyan-300/40 bg-cyan-900/60 p-4 shadow-xl">
                                            <div class="mb-4 h-10 rounded-full border-4 border-cyan-300/40"></div>
                                            <div class="grid grid-cols-2 gap-2">
                                                <div class="h-8 rounded bg-cyan-300/30"></div>
                                                <div class="h-8 rounded bg-cyan-300/30"></div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <button type="button" class="grid aspect-square place-items-center rounded-lg border-2 border-dashed border-slate-300 bg-white text-center transition hover:bg-slate-50">
                                    <span>
                                        <svg class="mx-auto h-9 w-9 text-slate-700" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true">
                                            <rect x="3" y="5" width="18" height="14" rx="2" />
                                            <circle cx="8" cy="10" r="2" />
                                            <path d="m21 15-5-5L5 21" />
                                            <path d="M19 3v4" />
                                            <path d="M17 5h4" />
                                        </svg>
                                        <span class="mt-5 block text-lg text-slate-800">Add Image</span>
                                    </span>
                                </button>
                            </div>
                        </section>
                    </div>

                    <aside class="space-y-8">
                        <section class="rounded-xl border border-slate-300 bg-white p-8 shadow-sm">
                            <h2 class="text-xl font-bold uppercase tracking-wide text-black">Note Properties</h2>
                            <div class="mt-7 space-y-6">
                                <div>
                                    <label for="category" class="block text-lg font-medium text-slate-800">Category</label>
                                    <select id="category" name="category" form="edit-note-form" class="mt-3 h-14 w-full rounded-lg border border-slate-300 bg-slate-50 px-4 text-lg outline-none transition focus:border-[#4b3ee6] focus:ring-2 focus:ring-[#4b3ee6]/15">
                                        <option>Brainstorming</option>
                                        <option>Project Alpha</option>
                                        <option>Research</option>
                                    </select>
                                </div>

                                <div>
                                    <p class="text-lg font-medium text-slate-800">Status</p>
                                    <div class="mt-3 flex gap-3">
                                        <label class="rounded-full border border-[#a8a1ff] bg-indigo-100 px-5 py-2 text-lg font-medium text-[#3325d4]">
                                            <input type="radio" name="status" value="active" checked form="edit-note-form" class="sr-only">
                                            Active
                                        </label>
                                        <label class="rounded-full border border-slate-300 bg-slate-100 px-5 py-2 text-lg font-medium text-slate-700">
                                            <input type="radio" name="status" value="archived" form="edit-note-form" class="sr-only">
                                            Archived
                                        </label>
                                    </div>
                                </div>

                                <div>
                                    <p class="text-lg font-medium text-slate-800">Tags</p>
                                    <div class="mt-3 flex flex-wrap gap-3">
                                        <span class="rounded bg-sky-100 px-3 py-1.5 text-base font-medium text-slate-800">#Alpha x</span>
                                        <span class="rounded bg-sky-100 px-3 py-1.5 text-base font-medium text-slate-800">#Product x</span>
                                    </div>
                                    <div class="mt-4 flex gap-3">
                                        <input type="text" name="new_tag" form="edit-note-form" placeholder="Add tag..." class="h-14 min-w-0 flex-1 rounded-lg border border-slate-300 bg-slate-50 px-4 text-lg outline-none transition focus:border-[#4b3ee6] focus:ring-2 focus:ring-[#4b3ee6]/15">
                                        <button type="button" class="grid h-14 w-14 place-items-center rounded-lg border border-slate-300 bg-slate-100 text-2xl transition hover:bg-white" aria-label="Add tag">+</button>
                                    </div>
                                </div>
                            </div>
                        </section>

                        <section class="rounded-xl border border-slate-300 bg-white p-8 shadow-sm">
                            <h2 class="text-xl font-bold uppercase tracking-wide text-black">Collaborators</h2>
                            <div class="mt-7 space-y-5">
                                <div class="flex items-center gap-4">
                                    <span class="grid h-11 w-11 place-items-center rounded-full bg-[#4b3ee6] font-bold text-white">JD</span>
                                    <span class="flex-1 text-lg text-black">John Doe</span>
                                    <span class="text-base text-slate-700">Owner</span>
                                </div>
                                <div class="flex items-center gap-4">
                                    <span class="grid h-11 w-11 place-items-center rounded-full bg-indigo-100 font-bold text-slate-900">SA</span>
                                    <span class="flex-1 text-lg text-black">Sarah Adams</span>
                                    <button type="button" class="text-base font-medium text-red-600">Remove</button>
                                </div>
                                <button type="button" class="inline-flex h-12 w-full items-center justify-center gap-2 rounded-lg border border-dashed border-slate-300 text-lg font-medium text-slate-800 transition hover:bg-slate-50">
                                    <svg class="h-5 w-5" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true">
                                        <path d="M16 21v-2a4 4 0 0 0-4-4H7a4 4 0 0 0-4 4v2" />
                                        <circle cx="9.5" cy="7" r="4" />
                                        <path d="M19 8v6" />
                                        <path d="M22 11h-6" />
                                    </svg>
                                    Invite others
                                </button>
                            </div>
                        </section>

                        <section class="rounded-xl border border-slate-300 bg-white p-8 shadow-sm">
                            <h2 class="text-xl font-bold text-black">Statistics</h2>
                            <div class="mt-6 grid grid-cols-2 gap-5">
                                <div class="rounded-lg border border-slate-300 bg-white p-5">
                                    <p class="text-base text-slate-800">Words</p>
                                    <p class="mt-2 text-3xl font-bold text-black">142</p>
                                </div>
                                <div class="rounded-lg border border-slate-300 bg-white p-5">
                                    <p class="text-base text-slate-800">Created</p>
                                    <p class="mt-2 text-xl font-bold text-black">2 days ago</p>
                                </div>
                            </div>
                        </section>
                    </aside>
                </div>
            </main>

            <footer class="mx-auto mt-8 max-w-[1280px] border-t border-slate-300 px-5 py-8 sm:px-8">
                <div class="text-base text-slate-800">
                    <a href="/" class="font-bold text-[#160bd8]">TaskFlow</a>
                    <p class="mt-3">&copy; 2024 TaskFlow Productivity Suite.</p>
                </div>
            </footer>
        </div>
    </div>
</body>
</html>
