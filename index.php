<?php include 'header.php'; ?>
<?php include 'sidebar.php'; ?>
<?php
require_once __DIR__ . '/data/activities_data.php';
if (!empty($activities)) {
    usort($activities, function ($a, $b) {
        return strtotime($b['date']) <=> strtotime($a['date']);
    });
}
?>
<main class="content">
    <p>
        Hello!! I am Gazi Maliha Raisa Noor, a CSE graduate from the Department of Computer Science and Engineering at
        <a href="https://aust.edu/">Ahsanullah University of Science and Technology</a>.
    </p>

    <p>
        <!-- My current research interests revolve around the intersection of Natural Language
        Processing, Large Language Models, and Computer Vision. -->
    </p>

    <p>
        <!-- As an individual, I strive to be a quick learner and maintain honesty and integrity in all my endeavors. -->
    </p>

    <hr>

    <h3>Activities</h3>

    <?php if (!empty($activities)): ?>
        <ul class="activities">
            <?php foreach ($activities as $activity): ?>
                <li>
                    <span>[<?= htmlspecialchars($activity['date']) ?>]</span>
                    <?= htmlspecialchars($activity['text']) ?>
                </li>
            <?php endforeach; ?>
        </ul>
    <?php else: ?>
        <p class="no-pub">No activities available at this time.</p>
    <?php endif; ?>

    <div class="cv-buttons">
        <a href="files/GaziNoor_CV.pdf" target="_blank" class="btn btn-outline">
            View CV
        </a>

        <a href="files/GaziNoor_CV.pdf" download class="btn btn-solid">
            Download CV
        </a>
    </div>

</main>

<?php include 'footer.php'; ?>