<?php

declare(strict_types=1);
?>
<h3>Pokédex</h3>
<ul>
    <?php foreach ($monsters as $monster) : ?>
        <li>

            <a href="/pokemon?id=<?= $monster->id; ?>">
                <?= $monster->name; ?>
            </a>
        </li>
    <?php endforeach ?>
</ul>