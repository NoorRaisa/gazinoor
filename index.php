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
        <!-- Hello! <br> -->
        I have completed my <strong> Bachelor of Science in Computer Science and Engineering </strong> from <strong><a href="https://aust.edu/">Ahsanullah University of Science and Technology</a></strong>, graduating in December 2025
        with a CGPA of 3.975 out of 4.00. Throughout my undergraduate studies, I consistently demonstrated strong academic performance and developed a solid foundation
        in computer science and data-driven technologies.

    </p>

    <p>
        My research interests center on <strong>Machine Learning, Deep Learning, Natural Language Processing (NLP),
            and Blockchain technologies</strong>. I am particularly interested in building transparent AI
        systems that can be trusted in real-world applications. My research work includes published book chapters
        and IEEE conference papers on topics such as transformer-based Bangla linguistic style classification with
        explainable AI, AI-driven healthcare prediction systems, and blockchain-based frameworks for secure intellectual
        property management. I am motivated to further explore interdisciplinary research that combines AI, explainability,
        and decentralized systems to solve complex, real-world problems.
    </p>

    <p>
        I possess a strong and diverse technical skill set across <strong>programming</strong>,
        <strong>artificial intelligence</strong>, <strong>blockchain</strong>, and
        <strong>web technologies</strong>. I am proficient in
        <strong>Python</strong>, <strong>C</strong>, <strong>C++</strong>,
        <strong>Java</strong>, and <strong>PHP</strong>,
        with hands-on experience in <strong>machine learning</strong> and
        <strong>deep learning</strong> frameworks such as <strong>PyTorch</strong>
        and <strong>PySpark</strong>. My expertise also includes <strong>NLP techniques</strong>,
        blockchain tools like <strong>Hyperledger Fabric</strong>, <strong>Ethereum</strong>,
        <strong>IPFS</strong>, and <strong>NFTs</strong>, and full-stack web development using
        <strong>HTML</strong>, <strong>CSS</strong>, and backend technologies.
        Additionally, I am experienced with <strong>databases</strong>, <strong>cloud platforms</strong>,
        <strong>development tools</strong>, and have a good understanding of
        <strong>data structures and algorithms</strong>, enabling me to design
        <strong>efficient, scalable, and reliable systems</strong>.
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