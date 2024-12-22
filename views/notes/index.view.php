<?php
    require("./views/partials/head.php");
    require("./views/partials/nav.php");
    require("./views/partials/header.php");
?>
    <div class="mx-auto max-w-7xl px-4 py-6 sm:px-6 lg:px-8">
        <p class="mt-4 text-xl text-center">
            <?php foreach ($notes as $note) : ?>
                <li>
                    <a href="/note?id=<?= $note["id"] ?>" class="text-blue-500 hover:underline">
                        <?= $note['body'] ?>
                    </a>
                </li>
            <?php endforeach; ?>
        </p>
    </div>
<?= require("../partials/footer.php"); ?>
