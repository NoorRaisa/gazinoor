<?php include 'header.php'; ?>
<?php include 'sidebar.php'; ?>

<?php
require_once __DIR__ . '/data/projects_data.php';
?>

<main class="content">

    <h2>Projects</h2>

    <?php if (!empty($projects)): ?>
        <ul class="project-list">
            <?php foreach ($projects as $project): ?>
                <li>
                    <strong>
                        <?= htmlspecialchars($project['title']) ?>
                    </strong>
                    |
                    <span class="project-tech">
                        <?= htmlspecialchars($project['tech']) ?>
                    </span>

                    <?php if (!empty($project['link'])): ?>
                        <a href="<?= htmlspecialchars($project['link']) ?>" target="_blank" class="project-link">
                            <i class="fab fa-github"></i>
                        </a>
                    <?php endif; ?>

                    <ul>
                        <?php foreach ($project['points'] as $point): ?>
                            <li><?= htmlspecialchars($point) ?></li>
                        <?php endforeach; ?>
                    </ul>
                </li>
            <?php endforeach; ?>
        </ul>
    <?php else: ?>
        <p class="no-pub">No projects available at this time.</p>
    <?php endif; ?>

</main>

<?php include 'footer.php'; ?>
