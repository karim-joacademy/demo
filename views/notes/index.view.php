<?php
    require("./views/partials/head.php");
    require("./views/partials/nav.php");
    require("./views/partials/header.php");
?>
    <div class="mx-auto max-w-7xl px-4 py-6 sm:px-6 lg:px-8">
        <ul>
            <?php foreach ($notes as $note) : ?>
                <li>
                    <a href="/note?id=<?= $note["id"] ?>" class="text-blue-500 hover:underline">
                        <?= htmlspecialchars($note['body']) ?>
                    </a>
                </li>
            <?php endforeach; ?>
        </ul>

        <p class="mt-6">
            <a href="/notes/create" class="text-blue-500 hover:underline">Create Note</a>
        </p>

    </div>
<?= require("../partials/footer.php"); ?>
