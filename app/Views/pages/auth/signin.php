<?= $this->extend('templates/auth') ?>
<?= $this->section('content') ?>

<section class="h-screen bg-primary max-w-7xl mx-auto grid grid-cols-2 place-content-center">
    <div>
        <img class="w-3/4 mx-auto rounded-md" src="<?= base_url() ?>images/authenticate.png">
    </div>
    <div class="flex flex-col justify-center">
        <h1 class="text-5xl">Welcome to Auditors</h1>
        <h2 class="text-4xl">Sign In to Continue</h2>
        <p class="text-xs mt-2">Do you have an account? <?= anchor('register', 'Create your account', ['class' => 'underline']) ?></p>
        <p class="text-xs">It takes less than a minute</p>

        <?= form_open('', ['class' => 'mt-4 max-w-md']) ?>
        <div class="grid gap-2">
            <label for="username">Username</label>
            <input class="border border-dark p-2" type="text" name="username" placeholder="Username">
        </div>
        <div class="grid gap-2 mt-6">
            <label for="password">Password</label>
            <input class="border border-dark p-2" type="password" name="password" placeholder="Password">
        </div>
        <?= anchor('', 'Forgot Password?', ['class' => 'underline text-sm text-right block']) ?>
        <div class="grid mt-4">
            <button class="btn">Submit</button>
        </div>
        <?= form_close() ?>
    </div>


</section>

<script src="<?= base_url() ?>js/settings/auth.js"></script>
<?= $this->endSection('content') ?>