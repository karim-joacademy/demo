<?php
    require("./views/partials/head.php");
    require("./views/partials/nav.php");
    require("./views/partials/header.php");
?>

<div class="mx-auto max-w-7xl px-4 py-6 sm:px-6 lg:px-8">
    <p class="mt-4 text-xl text-center">
        <p><?= htmlspecialchars($note['body'])  ?></p>
    </p>
</div>

<?= require("./views/partials/footer.php"); ?>