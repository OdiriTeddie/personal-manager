<?php

$errors = $_SESSION['errors'] ?? [];
unset($_SESSION['errors']);
$old = $_SESSION['old'] ?? [];
unset($_SESSION['old']);

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/assets/css/app.css">
    <title>Register | TaskFlow</title>
</head>
<body class="min-h-screen bg-[#f6f8fb] text-slate-950 antialiased">
    <main class="flex min-h-screen items-center justify-center px-5 py-10">
        <section class="w-full max-w-[440px] overflow-hidden rounded-xl border border-slate-300 bg-white shadow-xl shadow-slate-200/80">
            <div class="px-8 pb-8 pt-8 sm:px-10">
                <div class="mx-auto grid h-14 w-14 place-items-center rounded-lg bg-[#4b3ee6] text-white shadow-sm">
                    <svg class="h-8 w-8" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true">
                        <path d="M16 21v-2a4 4 0 0 0-4-4H7a4 4 0 0 0-4 4v2" />
                        <circle cx="9.5" cy="7" r="4" />
                        <path d="M19 8v6" />
                        <path d="M22 11h-6" />
                    </svg>
                </div>

                <div class="mt-6 text-center">
                    <h1 class="text-3xl font-medium tracking-normal text-[#160bd8]">Create account</h1>
                    <p class="mt-3 text-sm text-slate-700">Enter your details to start using TaskFlow</p>
                </div>

                <?php if(!empty($errors)): ?>
                    <div class="mb-4 rounded-md bg-red-100 p-2 mt-2 text-red-700">
                        <ul class="list-disc pl-5">
                            <?php foreach($errors as $error): ?>
                                <li><?= htmlspecialchars($error) ?> </li>
                            <?php endforeach; ?>
                        </ul>
                    </div>
                <?php endif ?>

                <form action="/register" method="post" class="mt-7 space-y-5">
                    <div>
                        <label for="full_name" class="block text-sm font-medium text-slate-900">Full name</label>
                        <div class="mt-2 flex h-14 items-center gap-3 rounded-md border border-slate-300 bg-white px-4 text-slate-600 transition focus-within:border-[#4b3ee6] focus-within:ring-2 focus-within:ring-[#4b3ee6]/15">
                            <svg class="h-5 w-5 shrink-0" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true">
                                <path d="M20 21a8 8 0 0 0-16 0" />
                                <circle cx="12" cy="7" r="4" />
                            </svg>
                            <input id="full_name" name="full_name" type="text" value="<?= htmlspecialchars($old['full_name'] ?? '') ?>" autocomplete="name" placeholder="Jane Doe" class="h-full w-full border-0 bg-transparent text-sm text-slate-950 outline-none placeholder:text-slate-500">
                        </div>
                    </div>

                    <div>
                        <label for="email" class="block text-sm font-medium text-slate-900">Email address</label>
                        <div class="mt-2 flex h-14 items-center gap-3 rounded-md border border-slate-300 bg-white px-4 text-slate-600 transition focus-within:border-[#4b3ee6] focus-within:ring-2 focus-within:ring-[#4b3ee6]/15">
                            <svg class="h-5 w-5 shrink-0" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true">
                                <path d="M4 6h16v12H4z" />
                                <path d="m4 7 8 6 8-6" />
                            </svg>
                            <input id="email" name="email" type="email" value="<?= htmlspecialchars($old['email'] ?? '') ?>" autocomplete="email" placeholder="name@company.com" class="h-full w-full border-0 bg-transparent text-sm text-slate-950 outline-none placeholder:text-slate-500">
                        </div>
                    </div>

                    <div>
                        <label for="password" class="block text-sm font-medium text-slate-900">Password</label>
                        <div class="mt-2 flex h-14 items-center gap-3 rounded-md border border-slate-300 bg-white px-4 text-slate-600 transition focus-within:border-[#4b3ee6] focus-within:ring-2 focus-within:ring-[#4b3ee6]/15">
                            <svg class="h-5 w-5 shrink-0" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true">
                                <rect x="5" y="10" width="14" height="10" rx="2" />
                                <path d="M8 10V7a4 4 0 0 1 8 0v3" />
                            </svg>
                            <input id="password" name="password" type="password" autocomplete="new-password" placeholder="Create a password" class="h-full w-full border-0 bg-transparent text-sm text-slate-950 outline-none placeholder:text-slate-500">
                        </div>
                    </div>

                    <div>
                        <label for="password_confirmation" class="block text-sm font-medium text-slate-900">Confirm password</label>
                        <div class="mt-2 flex h-14 items-center gap-3 rounded-md border border-slate-300 bg-white px-4 text-slate-600 transition focus-within:border-[#4b3ee6] focus-within:ring-2 focus-within:ring-[#4b3ee6]/15">
                            <svg class="h-5 w-5 shrink-0" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true">
                                <path d="M20 6 9 17l-5-5" />
                            </svg>
                            <input id="password_confirmation" name="password_confirmation" type="password" autocomplete="new-password" placeholder="Confirm your password" class="h-full w-full border-0 bg-transparent text-sm text-slate-950 outline-none placeholder:text-slate-500">
                        </div>
                    </div>

                    <label class="flex items-start gap-3 text-sm leading-6 text-slate-700">
                        <input type="checkbox" name="terms" class="mt-1 h-4 w-4 rounded border-slate-300 text-[#3325dc] focus:ring-[#3325dc]">
                        <span>I agree to the <a href="#" class="font-medium text-[#160bd8] transition hover:text-[#2418bd]">Terms</a> and <a href="#" class="font-medium text-[#160bd8] transition hover:text-[#2418bd]">Privacy Policy</a>.</span>
                    </label>

                    <button type="submit" class="inline-flex h-14 w-full items-center justify-center gap-3 rounded-md bg-[#3325dc] text-sm font-bold text-white shadow-sm transition hover:bg-[#2418bd]">
                        Create Account
                        <svg class="h-5 w-5" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true">
                            <path d="M5 12h14" />
                            <path d="m12 5 7 7-7 7" />
                        </svg>
                    </button>
                </form>

                <div class="my-8 flex items-center gap-4">
                    <div class="h-px flex-1 bg-slate-300"></div>
                    <span class="text-xs font-medium uppercase text-slate-500">Or continue with</span>
                    <div class="h-px flex-1 bg-slate-300"></div>
                </div>

                <a href="#" class="flex h-14 w-full items-center justify-center gap-3 rounded-md border border-slate-300 bg-white text-sm font-semibold text-slate-950 transition hover:bg-slate-50">
                    <span class="text-xl font-medium tracking-[0.18em]">GOOGLE</span>
                    <span>Sign up with Google</span>
                </a>
            </div>

            <div class="border-t border-slate-200 bg-[#f8fafc] px-8 py-5 text-center text-sm sm:px-10">
                <span class="text-slate-700">Already have an account?</span>
                <a href="/login" class="font-bold text-[#160bd8] transition hover:text-[#2418bd]">Sign in</a>
            </div>
        </section>
    </main>
</body>
</html>
