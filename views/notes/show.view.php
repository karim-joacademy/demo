<?php
    require("partials/head.php");
    require("partials/nav.php");
    require("partials/header.php");
?>

<div class="mx-auto max-w-7xl px-4 py-6 sm:px-6 lg:px-8">
    <p class="mt-4 text-xl text-center">
        <p><?= $note['body'] ?></p>
    </p>
</div>

<?= require("partials/footer.php"); ?>