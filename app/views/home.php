<?php require_once 'partials/head.php' ?>

<?php require_once 'partials/nav.php' ?>

    <main class="pt-16">
        <section class="border-b border-slate-200 bg-[#f7f9fc]">
            <div class="mx-auto grid min-h-[690px] max-w-7xl items-center gap-12 px-5 py-20 sm:px-8 lg:grid-cols-[1fr_520px] lg:px-6 lg:py-16">
                <div class="max-w-3xl">
                    <div class="mb-10 inline-flex items-center gap-2 rounded-full bg-indigo-100 px-4 py-1.5 text-sm font-medium text-slate-700">
                        <svg class="h-4 w-4 text-[#3126db]" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true">
                            <path d="M12 3v18" />
                            <path d="M3 12h18" />
                            <path d="m6 6 12 12" />
                            <path d="m18 6-12 12" />
                        </svg>
                        Now with Deep Work AI integration
                    </div>

                    <h1 class="max-w-4xl text-5xl font-medium leading-[1.04] tracking-normal text-black sm:text-6xl lg:text-7xl">
                        Master Your Day,<br>
                        <span class="text-[#160bd8]">Capture Your Thoughts.</span>
                    </h1>

                    <p class="mt-8 max-w-2xl text-base leading-7 text-slate-600">
                        A modern workspace designed for professionals. Manage complex tasks, organize rich notes, and visualize your progress in one unified, stress-free interface.
                    </p>

                    <div class="mt-10 flex flex-wrap gap-4">
                        <a href="/register" class="inline-flex h-14 items-center gap-3 rounded-md bg-[#3325dc] px-8 text-sm font-bold text-white shadow-sm transition hover:bg-[#2418bd]">
                            Get Started Free
                            <svg class="h-4 w-4" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                <path d="M5 12h14" />
                                <path d="m12 5 7 7-7 7" />
                            </svg>
                        </a>
                        <a href="/login" class="inline-flex h-14 items-center rounded-md border border-slate-300 bg-white px-8 text-sm font-semibold text-slate-950 transition hover:border-slate-400 hover:bg-slate-50">
                            Login to Account
                        </a>
                    </div>
                </div>

                <div class="relative mx-auto w-full max-w-[520px]">
                    <div class="absolute inset-8 rounded-full bg-slate-300/40 blur-3xl"></div>
                    <div class="relative rotate-2 rounded-xl border border-slate-200 bg-white p-4 shadow-2xl shadow-slate-300/80">
                        <div class="grid aspect-[1.02] place-items-center rounded-md bg-neutral-300 p-10">
                            <div class="-rotate-1 rounded-md bg-[#11283a] p-3 shadow-2xl shadow-slate-900/50">
                                <div class="mb-2 flex items-center justify-between px-1 text-[7px] font-semibold text-slate-300">
                                    <span>Task Overview</span>
                                    <span>Workspace</span>
                                </div>
                                <div class="grid w-80 gap-2 sm:w-96">
                                    <div class="grid grid-cols-2 gap-2">
                                        <div class="rounded bg-[#17374f] p-2">
                                            <div class="mb-1 h-2 w-16 rounded bg-sky-200/70"></div>
                                            <div class="h-1.5 w-24 rounded bg-slate-400/50"></div>
                                        </div>
                                        <div class="rounded bg-[#17374f] p-2">
                                            <div class="mb-1 h-2 w-20 rounded bg-slate-300/70"></div>
                                            <div class="h-1.5 w-16 rounded bg-slate-400/50"></div>
                                        </div>
                                    </div>
                                    <div class="grid grid-cols-2 gap-2">
                                        <div class="rounded bg-[#17374f] p-2">
                                            <div class="mb-1 h-2 w-14 rounded bg-sky-200/70"></div>
                                            <div class="h-1.5 w-28 rounded bg-slate-400/50"></div>
                                        </div>
                                        <div class="rounded bg-[#17374f] p-2">
                                            <div class="mb-1 h-2 w-24 rounded bg-slate-300/70"></div>
                                            <div class="h-1.5 w-20 rounded bg-slate-400/50"></div>
                                        </div>
                                    </div>
                                    <div class="rounded bg-[#17374f] p-2">
                                        <div class="h-1.5 w-full rounded bg-slate-400/40"></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section class="bg-white px-5 py-24 sm:px-8 lg:px-6">
            <div class="mx-auto max-w-7xl">
                <div class="mx-auto mb-16 max-w-2xl text-center">
                    <h2 class="text-3xl font-semibold tracking-normal text-black">Designed for Deep Work</h2>
                    <p class="mt-4 text-sm leading-6 text-slate-500">
                        Focus on what matters most with features that remove friction from your workflow and empower your cognitive clarity.
                    </p>
                </div>

                <div class="grid gap-6 lg:grid-cols-3">
                    <article class="rounded-lg border border-slate-300 bg-[#f8fafc] p-8 lg:col-span-2">
                        <div class="mb-6 grid h-12 w-12 place-items-center rounded-md bg-[#3023db] text-white">
                            <svg class="h-6 w-6" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                <circle cx="12" cy="12" r="8" />
                                <path d="m9.5 12 1.7 1.7 3.5-4" />
                            </svg>
                        </div>
                        <h3 class="text-xl font-medium text-black">Task Management</h3>
                        <p class="mt-4 max-w-xl text-sm leading-6 text-slate-600">
                            Intuitive drag-and-drop boards and list views to organize your daily sprints and long-term projects with precision.
                        </p>
                        <div class="mt-16 rounded bg-[#06282b] p-8 shadow-inner">
                            <div class="mx-auto grid max-w-2xl rotate-[-11deg] gap-4 rounded-xl bg-cyan-200/35 p-5 shadow-2xl shadow-black/30 backdrop-blur">
                                <div class="flex items-center justify-between text-[10px] font-semibold text-cyan-50">
                                    <span>AI DRIVEN WORKFLOW MANAGER</span>
                                    <span>24 Tasks</span>
                                </div>
                                <div class="grid grid-cols-2 gap-4">
                                    <div class="space-y-3">
                                        <div class="rounded bg-cyan-100/25 p-3">
                                            <div class="h-2 w-24 rounded bg-white/60"></div>
                                            <div class="mt-3 h-2 w-32 rounded bg-white/30"></div>
                                        </div>
                                        <div class="rounded bg-cyan-100/35 p-3">
                                            <div class="h-2 w-28 rounded bg-white/60"></div>
                                            <div class="mt-3 h-2 w-20 rounded bg-white/30"></div>
                                        </div>
                                        <div class="rounded bg-cyan-100/25 p-3">
                                            <div class="h-2 w-20 rounded bg-white/60"></div>
                                            <div class="mt-3 h-2 w-36 rounded bg-white/30"></div>
                                        </div>
                                        <div class="h-3 rounded bg-white/35"></div>
                                    </div>
                                    <div class="space-y-3 border-l border-white/20 pl-4">
                                        <div class="rounded bg-cyan-50/50 p-3">
                                            <div class="h-2 w-28 rounded bg-white/70"></div>
                                            <div class="mt-3 h-2 w-24 rounded bg-white/40"></div>
                                        </div>
                                        <div class="rounded bg-cyan-50/40 p-3">
                                            <div class="h-2 w-20 rounded bg-white/70"></div>
                                            <div class="mt-3 h-2 w-32 rounded bg-white/40"></div>
                                        </div>
                                        <div class="rounded bg-cyan-50/30 p-3">
                                            <div class="h-2 w-28 rounded bg-white/70"></div>
                                            <div class="mt-3 h-2 w-16 rounded bg-white/40"></div>
                                        </div>
                                        <div class="rounded bg-cyan-50/20 p-3">
                                            <div class="h-2 w-24 rounded bg-white/50"></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </article>

                    <article class="flex min-h-[520px] flex-col rounded-lg border border-slate-300 bg-white p-8">
                        <div class="mb-6 grid h-12 w-12 place-items-center rounded-md bg-slate-600 text-white">
                            <svg class="h-6 w-6" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                <path d="M7 3h7l4 4v14H7z" />
                                <path d="M14 3v5h5" />
                                <path d="M10 13h5M10 17h7" />
                            </svg>
                        </div>
                        <h3 class="text-xl font-medium text-black">Rich Notes</h3>
                        <p class="mt-4 max-w-sm text-sm leading-6 text-slate-600">
                            A markdown-supported editor that allows you to capture ideas, embed links, and link notes together.
                        </p>
                        <div class="mt-auto rounded-md border border-slate-300 bg-white p-4">
                            <div class="space-y-2">
                                <div class="h-2 w-44 rounded bg-slate-200"></div>
                                <div class="h-2 w-52 rounded bg-slate-200"></div>
                                <div class="h-2 w-36 rounded bg-slate-200"></div>
                            </div>
                        </div>
                    </article>

                    <article class="rounded-lg border border-slate-300 bg-white p-8">
                        <div class="mb-6 grid h-12 w-12 place-items-center rounded-md bg-slate-600 text-white">
                            <svg class="h-6 w-6" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                <path d="M4 19V5" />
                                <path d="M4 19h16" />
                                <path d="m7 15 4-4 3 3 5-7" />
                            </svg>
                        </div>
                        <h3 class="text-xl font-medium text-black">Progress Tracking</h3>
                        <p class="mt-4 text-sm leading-6 text-slate-600">
                            Visualize your productivity peaks and valleys with beautifully rendered analytics and heatmaps.
                        </p>
                        <div class="mt-10 bg-[#2e5367] p-6">
                            <div class="relative h-64 border-l border-b border-sky-100/30">
                                <div class="absolute inset-x-0 top-1/4 border-t border-sky-100/15"></div>
                                <div class="absolute inset-x-0 top-1/2 border-t border-sky-100/15"></div>
                                <div class="absolute inset-x-0 top-3/4 border-t border-sky-100/15"></div>
                                <svg class="absolute inset-0 h-full w-full" viewBox="0 0 300 230" preserveAspectRatio="none">
                                    <path d="M0 200 L40 120 L75 95 L110 160 L145 70 L185 95 L235 55 L300 85 L300 230 L0 230 Z" fill="rgba(186,230,253,.22)" />
                                    <path d="M0 170 L40 135 L85 120 L125 150 L170 125 L220 130 L300 110" fill="none" stroke="rgba(186,230,253,.55)" stroke-width="2" />
                                    <path d="M0 200 L40 120 L75 95 L110 160 L145 70 L185 95 L235 55 L300 85" fill="none" stroke="rgba(186,230,253,.85)" stroke-width="2" />
                                </svg>
                            </div>
                        </div>
                    </article>

                    <article class="grid items-center gap-10 rounded-lg border border-slate-300 bg-[#f8fafc] p-8 sm:grid-cols-[1fr_280px] lg:col-span-2">
                        <div>
                            <h3 class="text-xl font-medium text-black">Universal Organization</h3>
                            <p class="mt-4 max-w-lg text-sm leading-6 text-slate-600">
                                Categorize everything with nested tags and workspaces. Keep your personal life and professional projects perfectly separated yet accessible.
                            </p>
                            <div class="mt-6 flex flex-wrap gap-3">
                                <span class="rounded-full bg-indigo-100 px-4 py-1.5 text-xs font-medium text-[#3325dc]">Development</span>
                                <span class="rounded-full bg-slate-100 px-4 py-1.5 text-xs font-medium text-slate-600">Product Design</span>
                                <span class="rounded-full bg-slate-100 px-4 py-1.5 text-xs font-medium text-slate-600">Internal Notes</span>
                            </div>
                        </div>
                        <div class="overflow-hidden rounded-lg bg-neutral-200 p-7">
                            <div class="relative mx-auto h-40 w-52">
                                <span class="absolute left-12 top-3 h-28 w-12 rotate-45 rounded-full bg-cyan-500/50"></span>
                                <span class="absolute left-24 top-4 h-28 w-12 -rotate-12 rounded-full bg-slate-800/50"></span>
                                <span class="absolute left-4 top-14 h-28 w-12 -rotate-45 rounded-full bg-teal-400/50"></span>
                                <span class="absolute left-20 top-16 h-28 w-12 rotate-75 rounded-full bg-cyan-600/45"></span>
                                <span class="absolute left-32 top-20 h-24 w-12 -rotate-45 rounded-full bg-slate-700/45"></span>
                                <span class="absolute left-8 top-28 h-20 w-28 rounded-full bg-teal-500/40"></span>
                            </div>
                        </div>
                    </article>
                </div>
            </div>
        </section>

        <section class="bg-[#3325d4] px-5 py-24 text-white sm:px-8 lg:px-6">
            <div class="mx-auto max-w-3xl text-center">
                <h2 class="text-3xl font-bold tracking-normal sm:text-4xl">Ready to transform your productivity?</h2>
                <p class="mx-auto mt-8 max-w-2xl text-sm leading-6 text-indigo-100">
                    Join over 50,000 professionals who use TaskFlow to manage their day with absolute clarity.
                </p>
                <a href="#" class="mt-10 inline-flex h-14 items-center rounded-md bg-white px-12 text-sm font-bold text-[#3325d4] shadow-sm transition hover:bg-indigo-50">
                    Start Your 14-Day Free Trial
                </a>
                <p class="mt-5 text-xs text-indigo-100">No credit card required. Cancel anytime.</p>
            </div>
        </section>
    </main>

<?php require_once  'partials/footer.php' ?>

