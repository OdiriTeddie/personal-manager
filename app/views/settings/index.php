<?php

$user = $_SESSION['user'] ?? [];
$fullName = $user['full_name'] ?? 'John Doe';
$email = $user['email'] ?? 'johnathan.doe@taskflow.io';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/assets/css/app.css">
    <title>Settings | TaskFlow</title>
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
                <a href="/dashboard/categories" class="flex items-center gap-3 rounded-lg px-4 py-3 text-sm font-medium text-slate-800 transition hover:bg-white">
                    <svg class="h-5 w-5 text-slate-700" viewBox="0 0 24 24" fill="currentColor" aria-hidden="true">
                        <path d="M4 7.5A2.5 2.5 0 0 1 6.5 5h7.2c.7 0 1.36.3 1.83.82L21 12l-5.47 6.18a2.5 2.5 0 0 1-1.83.82H6.5A2.5 2.5 0 0 1 4 16.5v-9Z" />
                    </svg>
                    Categories
                </a>
                <a href="/dashboard/settings" class="flex items-center gap-3 rounded-lg border-r-4 border-[#3023db] bg-indigo-100 px-4 py-3 text-sm font-bold text-[#160bd8]">
                    <svg class="h-5 w-5" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true">
                        <path d="M12 15.5a3.5 3.5 0 1 0 0-7 3.5 3.5 0 0 0 0 7Z" />
                        <path d="M19.4 15a1.8 1.8 0 0 0 .36 1.98l.06.06a2 2 0 1 1-2.83 2.83l-.06-.06A1.8 1.8 0 0 0 15 19.4a1.8 1.8 0 0 0-1 .6 1.8 1.8 0 0 0-.5 1.3V21a2 2 0 1 1-4 0v-.09A1.8 1.8 0 0 0 8 19.4a1.8 1.8 0 0 0-1.98.36l-.06.06a2 2 0 1 1-2.83-2.83l.06-.06A1.8 1.8 0 0 0 3.6 15a1.8 1.8 0 0 0-.6-1 1.8 1.8 0 0 0-1.3-.5H1.6a2 2 0 1 1 0-4h.09A1.8 1.8 0 0 0 3.6 8a1.8 1.8 0 0 0-.36-1.98l-.06-.06a2 2 0 1 1 2.83-2.83l.06.06A1.8 1.8 0 0 0 8 3.6a1.8 1.8 0 0 0 1-.6A1.8 1.8 0 0 0 9.5 1.7V1.6a2 2 0 1 1 4 0v.09A1.8 1.8 0 0 0 15 3.6a1.8 1.8 0 0 0 1.98-.36l.06-.06a2 2 0 1 1 2.83 2.83l-.06.06A1.8 1.8 0 0 0 19.4 8c.15.36.36.7.6 1 .34.34.8.53 1.3.5h.1a2 2 0 1 1 0 4h-.1A1.8 1.8 0 0 0 19.4 15Z" />
                    </svg>
                    Settings
                </a>
            </nav>

            <div class="border-t border-slate-300 p-5">
                <div class="flex items-center gap-3 rounded-lg bg-slate-100 px-3 py-3">
                    <div class="grid h-9 w-9 place-items-center rounded-full bg-[#4b3ee6] text-xs font-bold text-white">JD</div>
                    <div>
                        <p class="text-sm font-bold text-slate-950">John Doe</p>
                        <p class="text-xs font-medium text-slate-600">Pro Plan</p>
                    </div>
                </div>
            </div>
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
                        <input type="search" placeholder="Search settings..." class="h-full w-full border-0 bg-transparent text-sm outline-none placeholder:text-slate-500">
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
                <section>
                    <h1 class="text-3xl font-bold tracking-normal text-black">User Settings</h1>
                    <p class="mt-2 text-sm text-slate-700">Manage your account preferences and security settings.</p>
                </section>

                <section class="mt-8 grid gap-6 lg:grid-cols-[300px_1fr]">
                    <div class="space-y-6">
                        <article class="rounded-xl border border-slate-300 bg-white p-6 text-center shadow-sm">
                            <div class="relative mx-auto h-24 w-24">
                                <div class="h-24 w-24 overflow-hidden rounded-full border-4 border-white bg-slate-300 shadow">
                                    <div class="h-full w-full bg-gradient-to-br from-slate-700 via-slate-500 to-slate-900"></div>
                                </div>
                                <button type="button" class="absolute bottom-0 right-0 grid h-9 w-9 place-items-center rounded-full bg-[#3325d4] text-white shadow" aria-label="Change profile photo">
                                    <svg class="h-4 w-4" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true">
                                        <path d="M4 8h4l2-3h4l2 3h4v11H4z" />
                                        <circle cx="12" cy="14" r="3" />
                                    </svg>
                                </button>
                            </div>
                            <h2 class="mt-5 text-lg font-medium text-black">Johnathan Doe</h2>
                            <p class="mt-1 text-sm text-slate-700">Senior Product Designer</p>

                            <nav class="mt-7 space-y-2 text-left">
                                <a href="#" class="flex items-center justify-between rounded-lg bg-[#4b3ee6] px-5 py-3 text-sm font-medium text-white">
                                    <span class="inline-flex items-center gap-3">
                                        <svg class="h-5 w-5" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true">
                                            <circle cx="12" cy="8" r="3" />
                                            <path d="M6 20a6 6 0 0 1 12 0" />
                                        </svg>
                                        Profile Information
                                    </span>
                                    <span>&rsaquo;</span>
                                </a>
                                <a href="#" class="flex items-center justify-between rounded-lg px-5 py-3 text-sm font-medium text-slate-900 transition hover:bg-slate-50">
                                    <span class="inline-flex items-center gap-3">
                                        <svg class="h-5 w-5" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true">
                                            <rect x="5" y="11" width="14" height="10" rx="2" />
                                            <path d="M8 11V7a4 4 0 0 1 8 0v4" />
                                        </svg>
                                        Security
                                    </span>
                                    <span>&rsaquo;</span>
                                </a>
                                <a href="#" class="flex items-center justify-between rounded-lg px-5 py-3 text-sm font-medium text-slate-900 transition hover:bg-slate-50">
                                    <span class="inline-flex items-center gap-3">
                                        <svg class="h-5 w-5" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true">
                                            <path d="M18 8a6 6 0 1 0-12 0c0 7-3 7-3 7h18s-3 0-3-7" />
                                            <path d="M13.73 21a2 2 0 0 1-3.46 0" />
                                        </svg>
                                        Notifications
                                    </span>
                                    <span>&rsaquo;</span>
                                </a>
                            </nav>
                        </article>

                        <article class="rounded-xl border border-slate-300 bg-white p-6 shadow-sm">
                            <h2 class="text-sm font-medium uppercase tracking-wide text-slate-900">Account Status</h2>
                            <div class="mt-6 flex items-center justify-between text-sm">
                                <span class="font-medium text-black">Storage used</span>
                                <strong class="text-[#3325d4]">85%</strong>
                            </div>
                            <div class="mt-4 h-2 rounded-full bg-slate-200">
                                <div class="h-full w-[85%] rounded-full bg-[#3325d4]"></div>
                            </div>
                            <p class="mt-4 text-sm leading-5 text-slate-700">You are approaching your limit. Upgrade to Pro for unlimited storage.</p>
                            <a href="#" class="mt-5 inline-flex text-sm font-medium text-[#3325d4]">Upgrade Plan</a>
                        </article>
                    </div>

                    <div class="space-y-6">
                        <section class="overflow-hidden rounded-xl border border-slate-300 bg-white shadow-sm">
                            <div class="flex items-center justify-between border-b border-slate-300 px-6 py-4">
                                <h2 class="text-xl font-medium text-black">Profile Information</h2>
                                <button type="button" class="rounded-lg bg-[#3325d4] px-5 py-2.5 text-sm font-bold text-white transition hover:bg-[#2418bd]">Save Changes</button>
                            </div>

                            <form action="#" method="post" class="grid gap-5 p-6 sm:grid-cols-2">
                                <div>
                                    <label for="full_name" class="block text-sm font-medium text-slate-900">Full Name</label>
                                    <input id="full_name" name="full_name" type="text" value="Johnathan Doe" class="mt-2 h-11 w-full rounded-lg border border-slate-300 bg-white px-4 text-sm outline-none transition focus:border-[#4b3ee6] focus:ring-2 focus:ring-[#4b3ee6]/15">
                                </div>
                                <div>
                                    <label for="email" class="block text-sm font-medium text-slate-900">Email Address</label>
                                    <input id="email" name="email" type="email" value="<?= htmlspecialchars($email) ?>" class="mt-2 h-11 w-full rounded-lg border border-slate-300 bg-white px-4 text-sm outline-none transition focus:border-[#4b3ee6] focus:ring-2 focus:ring-[#4b3ee6]/15">
                                </div>
                                <div class="sm:col-span-2">
                                    <label for="bio" class="block text-sm font-medium text-slate-900">Bio</label>
                                    <textarea id="bio" name="bio" rows="4" class="mt-2 w-full rounded-lg border border-slate-300 bg-white px-4 py-3 text-sm leading-6 outline-none transition focus:border-[#4b3ee6] focus:ring-2 focus:ring-[#4b3ee6]/15">Senior Product Designer focused on deep work interfaces and cognitive clarity in productivity tools.</textarea>
                                </div>
                                <div>
                                    <label for="timezone" class="block text-sm font-medium text-slate-900">Timezone</label>
                                    <select id="timezone" name="timezone" class="mt-2 h-11 w-full rounded-lg border border-slate-300 bg-white px-4 text-sm outline-none transition focus:border-[#4b3ee6] focus:ring-2 focus:ring-[#4b3ee6]/15">
                                        <option>Greenwich Mean Time (GMT)</option>
                                        <option>Eastern Time (ET)</option>
                                        <option>Pacific Time (PT)</option>
                                    </select>
                                </div>
                                <div>
                                    <label for="language" class="block text-sm font-medium text-slate-900">Language</label>
                                    <select id="language" name="language" class="mt-2 h-11 w-full rounded-lg border border-slate-300 bg-white px-4 text-sm outline-none transition focus:border-[#4b3ee6] focus:ring-2 focus:ring-[#4b3ee6]/15">
                                        <option>English (US)</option>
                                        <option>English (UK)</option>
                                        <option>French</option>
                                    </select>
                                </div>
                            </form>
                        </section>

                        <section class="overflow-hidden rounded-xl border border-slate-300 bg-white shadow-sm">
                            <div class="border-b border-slate-300 px-6 py-4">
                                <h2 class="text-xl font-medium text-black">Security</h2>
                            </div>

                            <div class="space-y-7 p-6">
                                <div class="grid gap-5 lg:grid-cols-[1fr_380px]">
                                    <div>
                                        <h3 class="font-bold text-black">Change Password</h3>
                                        <p class="mt-2 text-sm leading-5 text-slate-700">Update your account password to stay secure.</p>
                                    </div>
                                    <form action="#" method="post" class="space-y-4">
                                        <input type="password" name="current_password" placeholder="Current Password" class="h-11 w-full rounded-lg border border-slate-300 bg-white px-4 text-sm outline-none transition focus:border-[#4b3ee6] focus:ring-2 focus:ring-[#4b3ee6]/15">
                                        <input type="password" name="new_password" placeholder="New Password" class="h-11 w-full rounded-lg border border-slate-300 bg-white px-4 text-sm outline-none transition focus:border-[#4b3ee6] focus:ring-2 focus:ring-[#4b3ee6]/15">
                                        <button type="submit" class="rounded-lg border border-slate-300 bg-white px-5 py-2.5 text-sm font-medium text-slate-900 transition hover:bg-slate-50">Update Password</button>
                                    </form>
                                </div>

                                <div class="border-t border-slate-300 pt-6">
                                    <div class="flex items-center justify-between gap-4">
                                        <div>
                                            <h3 class="font-bold text-black">Two-factor authentication</h3>
                                            <p class="mt-1 text-sm text-slate-700">Add an extra layer of security to your account.</p>
                                        </div>
                                        <button type="button" class="relative h-7 w-12 rounded-full bg-[#3325d4]" aria-label="Two-factor authentication enabled">
                                            <span class="absolute right-1 top-1 h-5 w-5 rounded-full bg-white"></span>
                                        </button>
                                    </div>
                                </div>

                                <div class="border-t border-slate-300 pt-6">
                                    <h3 class="font-bold text-red-600">Danger Zone</h3>
                                    <p class="mt-2 text-sm leading-5 text-slate-700">Permanently delete your account and all associated data. This action cannot be undone.</p>
                                    <button type="button" class="mt-5 rounded-lg border border-red-600 bg-white px-5 py-2.5 text-sm font-medium text-red-600 transition hover:bg-red-50">Delete Account</button>
                                </div>
                            </div>
                        </section>
                    </div>
                </section>
            </main>

            <footer class="mx-auto mt-6 max-w-[980px] border-t border-slate-300 px-5 py-7 sm:px-7">
                <div class="flex flex-col gap-5 text-sm text-slate-800 sm:flex-row sm:items-end sm:justify-between">
                    <div>
                        <a href="/" class="font-bold text-[#160bd8]">TaskFlow</a>
                        <span class="ml-5">&copy; 2024 TaskFlow Productivity Suite.</span>
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
