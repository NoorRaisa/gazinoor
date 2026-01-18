<?php include 'header.php'; ?>
<?php include 'sidebar.php'; ?>
<?php

require_once __DIR__ . '/data/awards_data.php';
require_once __DIR__ . '/data/education_data.php';

?>


<main class="content">

    <h2>Education</h2>

    <?php foreach ($education as $edu): ?>
        <li>
            <h4><?= htmlspecialchars($edu['degree']) ?></h4>
        </li>
        <ul class="edu-list">
            <ul>
                <li>
                    <?= htmlspecialchars($edu['institution']) ?>,
                    <?= htmlspecialchars($edu['location']) ?>
                    <?= !empty($edu['duration']) ? '(' . htmlspecialchars($edu['duration']) . ')' : '' ?>
                </li>

                <?php if (!empty($edu['cgpa'])): ?>
                    <li><strong>CGPA:</strong> <?= htmlspecialchars($edu['cgpa']) ?></li>
                <?php endif; ?>

                <?php if (!empty($edu['position'])): ?>
                    <li><strong><?= htmlspecialchars($edu['position']) ?></strong></li>
                <?php endif; ?>

                <?php if (!empty($edu['thesis'])): ?>
                    <li><strong>Thesis title:</strong> <?= htmlspecialchars($edu['thesis']) ?></li>
                <?php endif; ?>

                <?php if (!empty($edu['gpa'])): ?>
                    <li><strong>GPA:</strong> <?= htmlspecialchars($edu['gpa']) ?></li>
                <?php endif; ?>
            </ul>
        </ul>
    <?php endforeach; ?>


    <!-- <h3>Additional Certification</h3>
    <ul>
        <li>
            <a href="#" target="_blank">
                Natural Language Processing
            </a> – Coursera
        </li>
    </ul> -->

    <h3>Awards and Participations</h3>

    <?php if (!empty($awards)): ?>
        <ul>
            <?php foreach ($awards as $award): ?>
                <li>
                    <strong><?= htmlspecialchars($award['title'] ?? '') ?></strong>
                    <?php if (!empty($award['description'])): ?>
                        (<?= htmlspecialchars($award['description']) ?>)
                    <?php endif; ?>
                </li>
            <?php endforeach; ?>
        </ul>
    <?php else: ?>
        <p class="no-pub">No awards available at this time.</p>
    <?php endif; ?>

</main>

<?php include 'footer.php'; ?>