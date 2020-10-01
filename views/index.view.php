<?php require('partials/head.php'); ?>

        <h1>My Tasks</h1>

        <ul>
            <?php foreach ($tasks as $task) : ?>
                <li>
                    <?php if ($task->completion) : ?>
                        <strike><?= $task->description; ?></strike>
                    <?php else: ?>
                        <?= $task->description; ?>
                    <?php endif; ?>
                </li>
            <?php endforeach; ?>
        </ul>
<?php require('partials/footer.php'); ?>