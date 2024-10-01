<?= $this->extend('templates/auth') ?>
<?= $this->section('content') ?>

<section class="h-screen bg-primary max-w-7xl mx-auto grid grid-cols-2 place-content-center">
    <div class="p-8">
        <img class="h-full mx-auto rounded-md" src="<?= base_url() ?>images/authenticate.png">
    </div>
    <div class="flex flex-col justify-center">
        <h1 class="text-5xl">Welcome to Auditors</h1>
        <h2 class="text-4xl">Sign Up to Continue</h2>
        <p class="text-xs mt-2">Do you have an account already? <?= anchor('/', 'Sign In Account', ['class' => 'underline']) ?></p>

        <?= form_open('', ['class' => 'mt-4 max-w-md']) ?>
        <div class="grid gap-2">
            <label for="username">Username</label>
            <input class="border border-dark p-2" type="text" name="username" placeholder="Username">
        </div>
        <div class="grid gap-2 mt-6">
            <label for="password">Password</label>
            <div class="relative">
                <input class="border border-dark p-2 w-full" type="password" name="password" placeholder="Password">
                <svg class="absolute top-1/2 -translate-y-1/2 right-2 w-6 h-6 cursor-pointer" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-6">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M2.036 12.322a1.012 1.012 0 0 1 0-.639C3.423 7.51 7.36 4.5 12 4.5c4.638 0 8.573 3.007 9.963 7.178.07.207.07.431 0 .639C20.577 16.49 16.64 19.5 12 19.5c-4.638 0-8.573-3.007-9.963-7.178Z" />
                    <path stroke-linecap="round" stroke-linejoin="round" d="M15 12a3 3 0 1 1-6 0 3 3 0 0 1 6 0Z" />
                </svg>

            </div>
        </div>
        <div class="grid gap-2 mt-6">
            <label for="confirm_password">Confirm Password</label>
            <div class="relative">
                <input class="border border-dark p-2 w-full" type="password" name="confirm_password" placeholder="Confirm Password">
                <svg class="absolute top-1/2 -translate-y-1/2 right-2 w-6 h-6 cursor-pointer" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-6">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M2.036 12.322a1.012 1.012 0 0 1 0-.639C3.423 7.51 7.36 4.5 12 4.5c4.638 0 8.573 3.007 9.963 7.178.07.207.07.431 0 .639C20.577 16.49 16.64 19.5 12 19.5c-4.638 0-8.573-3.007-9.963-7.178Z" />
                    <path stroke-linecap="round" stroke-linejoin="round" d="M15 12a3 3 0 1 1-6 0 3 3 0 0 1 6 0Z" />
                </svg>

            </div>
        </div>
        <div class="grid mt-4">
            <button class="btn">Submit</button>
        </div>
        <?= form_close() ?>
    </div>


</section>

<script src="<?= base_url() ?>js/settings/auth.js"></script>
<?= $this->endSection('content') ?>