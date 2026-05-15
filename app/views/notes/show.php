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
    <title>Project Alpha Brainstorming | TaskFlow</title>
</head>
<body class="bg-[#f6f8fb] text-slate-950 antialiased">
    <div class="min-h-screen lg:grid lg:grid-cols-[250px_1fr]">
        <aside class="hidden border-r border-slate-300 bg-[#f1f3f7] lg:flex lg:min-h-screen lg:flex-col">
            <div class="px-6 pt-8">
                <a href="/" class="flex items-center gap-3 text-2xl font-bold tracking-normal text-[#1d12d8]">
                    <span class="grid h-9 w-9 place-items-center rounded-lg bg-[#3325d4] text-white">
                        <svg class="h-5 w-5" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true">
                            <circle cx="12" cy="12" r="8" />
                            <path d="m9 12 2 2 4-5" />
                        </svg>
                    </span>
                    TaskFlow
                </a>
                <p class="ml-12 mt-1 text-xs font-bold uppercase tracking-[0.18em] text-slate-800">Deep Work Mode</p>
            </div>

            <nav class="mt-12 flex-1 space-y-3 px-4">
                <a href="/dashboard" class="flex items-center gap-4 rounded-lg px-5 py-3.5 text-base font-medium text-slate-800 transition hover:bg-white">
                    <svg class="h-6 w-6 text-slate-700" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true">
                        <rect x="4" y="4" width="6" height="6" />
                        <rect x="14" y="4" width="6" height="6" />
                        <rect x="4" y="14" width="6" height="6" />
                        <rect x="14" y="14" width="6" height="6" />
                    </svg>
                    Dashboard
                </a>
                <a href="/dashboard/tasks" class="flex items-center gap-4 rounded-lg px-5 py-3.5 text-base font-medium text-slate-800 transition hover:bg-white">
                    <svg class="h-6 w-6 text-slate-700" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true">
                        <circle cx="12" cy="12" r="9" />
                        <path d="m8.5 12 2.3 2.3 4.8-5" />
                    </svg>
                    Tasks
                </a>
                <a href="/dashboard/notes" class="flex items-center gap-4 rounded-lg border-r-4 border-[#3023db] bg-indigo-100 px-5 py-3.5 text-base font-medium text-[#160bd8]">
                    <svg class="h-6 w-6" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true">
                        <path d="M6 3h9l4 4v14H6z" />
                        <path d="M15 3v5h5" />
                        <path d="M9 13h6M9 17h6" />
                    </svg>
                    Notes
                </a>
                <a href="/dashboard/categories" class="flex items-center gap-4 rounded-lg px-5 py-3.5 text-base font-medium text-slate-800 transition hover:bg-white">
                    <svg class="h-6 w-6 text-slate-700" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true">
                        <path d="M4 7h10l6 5-6 5H4z" />
                    </svg>
                    Categories
                </a>
                <a href="/dashboard/settings" class="flex items-center gap-4 rounded-lg px-5 py-3.5 text-base font-medium text-slate-800 transition hover:bg-white">
                    <svg class="h-6 w-6 text-slate-700" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true">
                        <path d="M12 15.5a3.5 3.5 0 1 0 0-7 3.5 3.5 0 0 0 0 7Z" />
                        <path d="M19.4 15a1.8 1.8 0 0 0 .36 1.98l.06.06a2 2 0 1 1-2.83 2.83l-.06-.06A1.8 1.8 0 0 0 15 19.4a1.8 1.8 0 0 0-1 .6 1.8 1.8 0 0 0-.5 1.3V21a2 2 0 1 1-4 0v-.09A1.8 1.8 0 0 0 8 19.4a1.8 1.8 0 0 0-1.98.36l-.06.06a2 2 0 1 1-2.83-2.83l.06-.06A1.8 1.8 0 0 0 3.6 15a1.8 1.8 0 0 0-.6-1 1.8 1.8 0 0 0-1.3-.5H1.6a2 2 0 1 1 0-4h.09A1.8 1.8 0 0 0 3.6 8a1.8 1.8 0 0 0-.36-1.98l-.06-.06a2 2 0 1 1 2.83-2.83l.06.06A1.8 1.8 0 0 0 8 3.6a1.8 1.8 0 0 0 1-.6A1.8 1.8 0 0 0 9.5 1.7V1.6a2 2 0 1 1 4 0v.09A1.8 1.8 0 0 0 15 3.6a1.8 1.8 0 0 0 1.98-.36l.06-.06a2 2 0 1 1 2.83 2.83l-.06.06A1.8 1.8 0 0 0 19.4 8c.15.36.36.7.6 1 .34.34.8.53 1.3.5h.1a2 2 0 1 1 0 4h-.1A1.8 1.8 0 0 0 19.4 15Z" />
                    </svg>
                    Settings
                </a>
            </nav>

            <div class="p-6">
                <div class="rounded-lg bg-slate-200 p-4">
                    <p class="text-sm font-medium text-slate-800">Storage</p>
                    <div class="mt-4 h-1.5 rounded-full bg-slate-300">
                        <div class="h-full w-2/3 rounded-full bg-[#3325d4]"></div>
                    </div>
                    <p class="mt-3 text-sm text-slate-700">7.2 GB of 10 GB</p>
                </div>
            </div>
        </aside>

        <div class="min-w-0">
            <header class="sticky top-0 z-40 border-b border-slate-300 bg-white/95 backdrop-blur">
                <div class="mx-auto flex h-16 max-w-[1180px] items-center justify-between gap-4 px-5 sm:px-7">
                    <a href="/" class="text-lg font-bold text-[#1d12d8] lg:hidden">TaskFlow</a>
                    <label class="hidden h-10 w-full max-w-sm items-center gap-3 rounded-full bg-slate-100 px-4 text-slate-500 sm:flex">
                        <svg class="h-5 w-5 text-slate-700" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true">
                            <circle cx="11" cy="11" r="7" />
                            <path d="m20 20-3.5-3.5" />
                        </svg>
                        <input type="search" placeholder="Search notes..." class="h-full w-full border-0 bg-transparent text-sm outline-none placeholder:text-slate-500">
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
                        <span class="hidden h-9 w-px bg-slate-300 sm:block"></span>
                        <a href="/dashboard/notes/create" class="hidden h-10 items-center gap-2 rounded-lg bg-[#3325d4] px-5 text-sm font-bold text-white transition hover:bg-[#2418bd] sm:inline-flex">
                            <svg class="h-4 w-4" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true">
                                <path d="M12 5v14" />
                                <path d="M5 12h14" />
                            </svg>
                            New Note
                        </a>
                    </div>
                </div>
            </header>

            <main class="mx-auto max-w-[1180px] px-5 py-8 sm:px-7">
                <nav class="flex flex-wrap items-center gap-3 text-sm text-slate-800">
                    <a href="/dashboard/notes" class="transition hover:text-[#160bd8]">Notes</a>
                    <span>&rsaquo;</span>
                    <span>Strategic Planning</span>
                    <span>&rsaquo;</span>
                    <span class="font-medium text-slate-950">Project Alpha Brainstorming</span>
                </nav>

                <div class="mt-7 grid gap-6 xl:grid-cols-[1fr_310px]">
                    <article class="overflow-hidden rounded-xl border border-slate-300 bg-white shadow-sm">
                        <div class="p-8 sm:p-12">
                            <div class="flex flex-col gap-5 sm:flex-row sm:items-start sm:justify-between">
                                <h1 class="max-w-md text-4xl font-bold leading-tight tracking-normal text-black">Project Alpha Brainstorming</h1>
                                <div class="flex gap-2">
                                    <a href="/dashboard/notes/edit" class="inline-flex h-11 items-center gap-2 rounded-lg border border-slate-300 bg-white px-4 text-sm font-medium transition hover:bg-slate-50">
                                        <svg class="h-4 w-4" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true">
                                            <path d="m12 20 8-8-4-4-8 8-2 6z" />
                                            <path d="m14 6 4 4" />
                                        </svg>
                                        Edit
                                    </a>
                                    <a href="/dashboard/notes/delete" class="grid h-11 w-11 place-items-center rounded-lg border border-red-200 text-red-600 transition hover:bg-red-50" aria-label="Delete note">
                                        <svg class="h-5 w-5" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true">
                                            <path d="M3 6h18" />
                                            <path d="M8 6V4h8v2" />
                                            <path d="M19 6l-1 14H6L5 6" />
                                        </svg>
                                    </a>
                                    <button type="button" class="grid h-11 w-11 place-items-center rounded-lg border border-slate-300 transition hover:bg-slate-50" aria-label="More actions">
                                        <svg class="h-5 w-5" viewBox="0 0 24 24" fill="currentColor" aria-hidden="true">
                                            <circle cx="12" cy="5" r="1.5" />
                                            <circle cx="12" cy="12" r="1.5" />
                                            <circle cx="12" cy="19" r="1.5" />
                                        </svg>
                                    </button>
                                </div>
                            </div>

                            <p class="mt-8 text-lg leading-8 text-slate-800">Objective: Define the core architecture and user journey for the upcoming high-performance task management system. We need to focus on reducing cognitive load for power users while maintaining high density for data-rich environments.</p>

                            <div class="mt-9 overflow-hidden rounded-lg bg-slate-300">
                                <div class="grid aspect-[16/9] place-items-center bg-gradient-to-br from-slate-700 via-slate-200 to-amber-100 p-10">
                                    <div class="relative h-full w-full">
                                        <div class="absolute bottom-10 left-20 h-28 w-52 rotate-[-12deg] rounded bg-white/80 shadow-lg"></div>
                                        <div class="absolute bottom-16 right-24 h-24 w-48 rotate-6 rounded bg-white/70 shadow-lg"></div>
                                        <div class="absolute left-28 top-12 h-40 w-16 rotate-[-28deg] rounded-full bg-slate-700/50"></div>
                                        <div class="absolute right-32 top-10 h-44 w-16 rotate-12 rounded-full bg-slate-800/50"></div>
                                        <div class="absolute bottom-8 left-1/2 h-6 w-28 -translate-x-1/2 rounded-full bg-black/30"></div>
                                    </div>
                                </div>
                            </div>

                            <section class="mt-9">
                                <h2 class="text-2xl font-bold text-black">Key Pillars</h2>
                                <ul class="mt-4 list-disc space-y-3 pl-6 text-base leading-7 text-slate-800">
                                    <li><strong>Minimalist Visual Language:</strong> Clean lines, purposeful white space, and a refined color palette that prioritizes readability.</li>
                                    <li><strong>Adaptive Layouts:</strong> Bento-grid style dashboards that rearrange based on user priority and screen size.</li>
                                    <li><strong>Keyboard-First Interaction:</strong> Global command palettes and customizable shortcuts to minimize mouse dependency.</li>
                                </ul>
                            </section>

                            <section class="mt-9">
                                <h2 class="text-2xl font-bold text-black">Phase 1 - Discovery</h2>
                                <p class="mt-4 text-base leading-8 text-slate-800">During our initial research, we identified that 70% of professional users feel overwhelmed by existing "cluttered" project management tools. Our solution must serve as a "calm" interface that only surfacing information when it's contextually relevant.</p>
                            </section>

                            <blockquote class="mt-8 rounded-lg border-l-4 border-[#3325d4] bg-slate-100 p-7 text-lg italic leading-8 text-slate-800">"Design is not just what it looks like and feels like. Design is how it works." Reapplying this to TaskFlow means functionality must remain silent until summoned.</blockquote>

                            <section class="mt-9">
                                <h2 class="text-2xl font-bold text-black">Technical Requirements</h2>
                                <p class="mt-4 text-base leading-8 text-slate-800">The backend must support real-time sync with CRDTs to prevent merge conflicts during collaborative sessions. Frontend will leverage high-performance Tailwind utility classes for instant layout rendering.</p>
                            </section>
                        </div>

                        <footer class="grid gap-3 border-t border-slate-300 bg-slate-50 px-8 py-4 text-sm text-slate-800 sm:grid-cols-3 sm:px-12">
                            <span class="inline-flex items-center gap-2">
                                <svg class="h-4 w-4" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true">
                                    <circle cx="12" cy="12" r="9" />
                                    <path d="M12 7v5l3 2" />
                                </svg>
                                Last edited 2 hours ago
                            </span>
                            <span class="inline-flex items-center gap-2">
                                <svg class="h-4 w-4" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true">
                                    <path d="M2 12s3.5-6 10-6 10 6 10 6-3.5 6-10 6-10-6-10-6Z" />
                                    <circle cx="12" cy="12" r="3" />
                                </svg>
                                4 active collaborators
                            </span>
                            <span class="inline-flex items-center gap-2 sm:justify-end">
                                <svg class="h-4 w-4" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true">
                                    <path d="M6 3h9l4 4v14H6z" />
                                    <path d="M15 3v5h5" />
                                </svg>
                                842 words
                            </span>
                        </footer>
                    </article>

                    <aside class="space-y-6">
                        <section class="rounded-xl border border-slate-300 bg-white p-6 shadow-sm">
                            <h2 class="text-lg font-bold uppercase tracking-wide text-black">Note Details</h2>
                            <div class="mt-5 space-y-5 text-sm">
                                <div>
                                    <p class="font-medium text-slate-700">Category</p>
                                    <p class="mt-2 inline-flex items-center gap-2 text-slate-950">
                                        <span class="h-2 w-2 rounded-full bg-[#3325d4]"></span>
                                        Strategic Planning
                                    </p>
                                </div>
                                <div>
                                    <p class="font-medium text-slate-700">Created</p>
                                    <p class="mt-2 text-slate-950">October 14, 2024</p>
                                </div>
                                <div>
                                    <p class="font-medium text-slate-700">Tags</p>
                                    <div class="mt-3 flex flex-wrap gap-2">
                                        <span class="rounded bg-slate-100 px-3 py-1 text-xs text-slate-700">#ProjectAlpha</span>
                                        <span class="rounded bg-slate-100 px-3 py-1 text-xs text-slate-700">#Brainstorming</span>
                                        <span class="rounded bg-slate-100 px-3 py-1 text-xs text-slate-700">#Design</span>
                                        <span class="rounded bg-slate-100 px-3 py-1 text-xs text-slate-700">#Q4</span>
                                    </div>
                                </div>
                            </div>
                        </section>

                        <section class="rounded-xl border border-slate-300 bg-white p-6 shadow-sm">
                            <h2 class="text-lg font-bold uppercase tracking-wide text-black">Collaborators</h2>
                            <div class="mt-5 space-y-4">
                                <div class="flex items-center gap-4">
                                    <span class="grid h-10 w-10 place-items-center rounded-full bg-[#4b3ee6] text-sm font-bold text-white">JD</span>
                                    <div class="flex-1">
                                        <p class="font-medium text-black">James Dalton</p>
                                        <p class="text-sm text-slate-700">Owner</p>
                                    </div>
                                </div>
                                <div class="flex items-center gap-4">
                                    <span class="grid h-10 w-10 place-items-center rounded-full bg-slate-600 text-sm font-bold text-white">SK</span>
                                    <div class="flex-1">
                                        <p class="font-medium text-black">Sarah K.</p>
                                        <p class="text-sm text-slate-700">Editor</p>
                                    </div>
                                </div>
                                <button type="button" class="inline-flex h-10 w-full items-center justify-center gap-2 rounded-lg border border-dashed border-slate-300 text-sm font-medium transition hover:bg-slate-50">
                                    <svg class="h-4 w-4" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true">
                                        <path d="M16 21v-2a4 4 0 0 0-4-4H7a4 4 0 0 0-4 4v2" />
                                        <circle cx="9.5" cy="7" r="4" />
                                        <path d="M19 8v6" />
                                        <path d="M22 11h-6" />
                                    </svg>
                                    Invite Member
                                </button>
                            </div>
                        </section>

                        <section class="rounded-xl border border-slate-300 bg-white p-6 shadow-sm">
                            <h2 class="text-lg font-bold uppercase tracking-wide text-black">Attachments</h2>
                            <div class="mt-5 space-y-3">
                                <a href="#" class="flex items-center gap-4 rounded-lg border border-slate-300 p-4 transition hover:bg-slate-50">
                                    <span class="grid h-9 w-9 place-items-center rounded bg-indigo-50 text-[#3325d4]">
                                        <svg class="h-5 w-5" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true">
                                            <path d="M6 3h9l4 4v14H6z" />
                                            <path d="M15 3v5h5" />
                                            <path d="M9 13h6M9 17h4" />
                                        </svg>
                                    </span>
                                    <span>
                                        <span class="block font-medium text-black">Architecture_V1.pdf</span>
                                        <span class="text-sm text-slate-700">2.4 MB</span>
                                    </span>
                                </a>
                                <a href="#" class="flex items-center gap-4 rounded-lg border border-slate-300 p-4 transition hover:bg-slate-50">
                                    <span class="grid h-9 w-9 place-items-center rounded bg-slate-50 text-slate-700">
                                        <svg class="h-5 w-5" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true">
                                            <rect x="3" y="5" width="18" height="14" rx="2" />
                                            <circle cx="8" cy="10" r="2" />
                                            <path d="m21 15-5-5L5 21" />
                                        </svg>
                                    </span>
                                    <span>
                                        <span class="block font-medium text-black">User_Flow_Sketch.png</span>
                                        <span class="text-sm text-slate-700">1.1 MB</span>
                                    </span>
                                </a>
                            </div>
                        </section>
                    </aside>
                </div>
            </main>

            <footer class="mx-auto mt-8 max-w-[1180px] border-t border-slate-300 px-5 py-8 sm:px-7">
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
