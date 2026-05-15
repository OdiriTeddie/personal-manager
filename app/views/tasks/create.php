<?php

$user = $_SESSION['user'] ?? [];
$fullName = $user['full_name'] ?? 'Alex Rivera';
$taskFormTitle = $taskFormTitle ?? 'Create New Task';
$taskFormDescription = $taskFormDescription ?? 'Set your objectives and maintain your productive flow.';
$taskFormAction = $taskFormAction ?? '#';
$taskFormButton = $taskFormButton ?? 'Create Task';
$taskFormButtonIcon = $taskFormButtonIcon ?? 'plus';
$taskTitleValue = $taskTitleValue ?? '';
$taskDescriptionValue = $taskDescriptionValue ?? '';
$taskDueDateValue = $taskDueDateValue ?? '';
$taskCategoryValue = $taskCategoryValue ?? 'Marketing Campaign';
$showDeleteAction = $showDeleteAction ?? false;
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/assets/css/app.css">
    <title><?= htmlspecialchars($taskFormTitle) ?> | TaskFlow</title>
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
                    <svg class="h-5 w-5 text-slate-700" viewBox="0 0 24 24" fill="currentColor" aria-hidden="true">
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

                    <div class="ml-auto flex items-center gap-4 text-slate-900">
                        <button type="button" class="grid h-8 w-8 place-items-center rounded-full transition hover:bg-slate-100" aria-label="Notifications">
                            <svg class="h-5 w-5" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round">
                                <path d="M18 8a6 6 0 1 0-12 0c0 7-3 7-3 7h18s-3 0-3-7" />
                                <path d="M13.73 21a2 2 0 0 1-3.46 0" />
                            </svg>
                        </button>
                        <div class="grid h-8 w-8 place-items-center overflow-hidden rounded-full bg-slate-300">
                            <div class="h-full w-full bg-gradient-to-br from-slate-700 via-slate-500 to-slate-900"></div>
                        </div>
                    </div>
                </div>
            </header>

            <main class="mx-auto max-w-[980px] px-5 py-8 sm:px-7">
                <section class="mx-auto max-w-2xl overflow-hidden rounded-xl border border-slate-300 bg-white shadow-sm">
                    <div class="flex items-start justify-between border-b border-slate-300 px-7 py-6">
                        <div>
                            <h1 class="text-2xl font-medium tracking-normal text-black"><?= htmlspecialchars($taskFormTitle) ?></h1>
                            <p class="mt-1 text-sm text-slate-700"><?= htmlspecialchars($taskFormDescription) ?></p>
                        </div>
                        <a href="/dashboard/tasks" class="grid h-8 w-8 place-items-center rounded-full text-slate-800 transition hover:bg-slate-100" aria-label="Close create task form">
                            <svg class="h-5 w-5" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true">
                                <path d="M18 6 6 18" />
                                <path d="m6 6 12 12" />
                            </svg>
                        </a>
                    </div>

                    <form action="<?= htmlspecialchars($taskFormAction) ?>" method="post" class="space-y-6 px-7 py-7">
                        <div>
                            <label for="title" class="block text-sm font-medium text-slate-900">Task Title</label>
                            <input id="title" name="title" type="text" value="<?= htmlspecialchars($taskTitleValue) ?>" placeholder="What needs to be done?" class="mt-2 h-11 w-full rounded-lg border border-slate-300 bg-white px-4 text-sm outline-none transition focus:border-[#4b3ee6] focus:ring-2 focus:ring-[#4b3ee6]/15">
                        </div>

                        <div>
                            <label for="description" class="block text-sm font-medium text-slate-900">Description</label>
                            <textarea id="description" name="description" rows="5" placeholder="Add some context or sub-steps..." class="mt-2 w-full rounded-lg border border-slate-300 bg-white px-4 py-3 text-sm leading-6 outline-none transition focus:border-[#4b3ee6] focus:ring-2 focus:ring-[#4b3ee6]/15"><?= htmlspecialchars($taskDescriptionValue) ?></textarea>
                        </div>

                        <div class="grid gap-5 sm:grid-cols-2">
                            <div>
                                <span class="block text-sm font-medium text-slate-900">Priority</span>
                                <div class="mt-2 grid h-11 grid-cols-3 overflow-hidden rounded-lg border border-slate-300 bg-slate-100 p-0.5">
                                    <label class="grid cursor-pointer place-items-center rounded-md text-xs font-medium text-slate-700 transition hover:bg-white">
                                        <input type="radio" name="priority" value="low" class="sr-only">
                                        Low
                                    </label>
                                    <label class="grid cursor-pointer place-items-center rounded-md bg-white text-xs font-medium text-[#3325d4] shadow-sm">
                                        <input type="radio" name="priority" value="medium" checked class="sr-only">
                                        Medium
                                    </label>
                                    <label class="grid cursor-pointer place-items-center rounded-md text-xs font-medium text-slate-700 transition hover:bg-white">
                                        <input type="radio" name="priority" value="high" class="sr-only">
                                        High
                                    </label>
                                </div>
                            </div>

                            <div>
                                <label for="due_date" class="block text-sm font-medium text-slate-900">Due Date</label>
                                <div class="mt-2 flex h-11 items-center rounded-lg border border-slate-300 bg-white px-4 transition focus-within:border-[#4b3ee6] focus-within:ring-2 focus-within:ring-[#4b3ee6]/15">
                                    <input id="due_date" name="due_date" type="date" value="<?= htmlspecialchars($taskDueDateValue) ?>" class="h-full w-full border-0 bg-transparent text-sm outline-none">
                                </div>
                            </div>

                            <div>
                                <label for="category" class="block text-sm font-medium text-slate-900">Category / Project</label>
                                <select id="category" name="category" class="mt-2 h-11 w-full rounded-lg border border-slate-300 bg-white px-4 text-sm outline-none transition focus:border-[#4b3ee6] focus:ring-2 focus:ring-[#4b3ee6]/15">
                                    <option <?= $taskCategoryValue === 'Marketing Campaign' ? 'selected' : '' ?>>Marketing Campaign</option>
                                    <option <?= $taskCategoryValue === 'Development' ? 'selected' : '' ?>>Development</option>
                                    <option <?= $taskCategoryValue === 'Personal' ? 'selected' : '' ?>>Personal</option>
                                    <option <?= $taskCategoryValue === 'Research' ? 'selected' : '' ?>>Research</option>
                                </select>
                            </div>

                            <div>
                                <label for="tags" class="block text-sm font-medium text-slate-900">Tags</label>
                                <div class="mt-2 min-h-11 rounded-lg border border-slate-300 bg-white px-3 py-2 transition focus-within:border-[#4b3ee6] focus-within:ring-2 focus-within:ring-[#4b3ee6]/15">
                                    <div class="flex flex-wrap items-center gap-2">
                                        <span class="inline-flex items-center gap-1 rounded-full bg-indigo-100 px-3 py-1 text-xs font-medium text-[#3325d4]">
                                            Urgent
                                            <button type="button" aria-label="Remove urgent tag">x</button>
                                        </span>
                                        <span class="inline-flex items-center gap-1 rounded-full bg-sky-100 px-3 py-1 text-xs font-medium text-sky-700">
                                            Review
                                            <button type="button" aria-label="Remove review tag">x</button>
                                        </span>
                                        <input id="tags" name="tags" type="text" placeholder="Add..." class="h-7 min-w-24 flex-1 border-0 bg-transparent text-sm outline-none placeholder:text-slate-500">
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="flex flex-col gap-3 border-t border-slate-300 pt-6 sm:flex-row sm:items-center sm:justify-end">
                            <?php if ($showDeleteAction): ?>
                                <a href="/dashboard/tasks/delete" class="inline-flex h-11 items-center justify-center rounded-lg border border-red-600 bg-white px-7 text-sm font-medium text-red-600 transition hover:bg-red-50 sm:mr-auto">Delete Task</a>
                            <?php endif; ?>
                            <a href="/dashboard/tasks" class="inline-flex h-11 items-center justify-center rounded-lg border border-slate-300 bg-white px-7 text-sm font-medium text-slate-900 transition hover:bg-slate-50">Cancel</a>
                            <button type="submit" class="inline-flex h-11 items-center justify-center gap-2 rounded-lg bg-[#3325d4] px-7 text-sm font-bold text-white transition hover:bg-[#2418bd]">
                                <?php if ($taskFormButtonIcon === 'save'): ?>
                                    <svg class="h-4 w-4" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true">
                                        <path d="M19 21H5a2 2 0 0 1-2-2V5a2 2 0 0 1 2-2h11l5 5v11a2 2 0 0 1-2 2Z" />
                                        <path d="M17 21v-8H7v8" />
                                        <path d="M7 3v5h8" />
                                    </svg>
                                <?php else: ?>
                                    <svg class="h-4 w-4" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true">
                                        <path d="M12 5v14" />
                                        <path d="M5 12h14" />
                                    </svg>
                                <?php endif; ?>
                                <?= htmlspecialchars($taskFormButton) ?>
                            </button>
                        </div>
                    </form>
                </section>
            </main>

            <footer class="mx-auto mt-8 max-w-[980px] border-t border-slate-300 px-5 py-7 sm:px-7">
                <div class="flex flex-col gap-5 text-xs text-slate-800 sm:flex-row sm:items-end sm:justify-between">
                    <div>
                        <a href="/" class="font-bold text-[#160bd8]">TaskFlow</a>
                        <span class="ml-3">&copy; 2024 TaskFlow Productivity Suite.</span>
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
