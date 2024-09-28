    <?= $this->include('templates/header') ?>
    <div class="flex">
        <?= $this->include('templates/sidebar') ?>
        <main class="pt-6 flex-1 md:ml-60 ml-28 pr-4 transition-spacing duration-150" id="side-content">
            <div class="">
                <?= $this->renderSection('content') ?>
            </div>
        </main>
    </div>

    <?= $this->include('templates/footer') ?>