<?php include 'header.php'; ?>
<?php include 'sidebar.php'; ?>

<?php
require_once __DIR__ . '/data/publications_data.php';

// Selected year
$selectedYear = $_GET['year'] ?? 'all';

// Reusable filter function
function filterByYear(array $items, string $year): array
{
    return array_filter(
        $items,
        fn($item) =>
        $year === 'all' || $item['year'] === $year
    );
}
?>

<main class="content">

    <h2>Publications</h2>

    <!-- ===== Year Filter ===== -->
    <form method="get" class="year-filter">
        <label for="year"><strong>Filter by year:</strong></label>
        <select name="year" id="year" onchange="this.form.submit()">
            <option value="all" <?= $selectedYear === 'all' ? 'selected' : '' ?>>All</option>
            <option value="2026" <?= $selectedYear === '2026' ? 'selected' : '' ?>>2026</option>
            <option value="2025" <?= $selectedYear === '2025' ? 'selected' : '' ?>>2025</option>
        </select>
    </form>

    <!-- Journal Articles  -->
    <?php $filteredJournals = filterByYear($journals, $selectedYear); ?>
    <details class="pub-section">
        <summary>Journal Articles</summary>

        <?php if (!empty($filteredJournals)): ?>
            <ol class="pub-list">
                <?php foreach ($filteredJournals as $paper): ?>
                    <li>
                        <strong><?= htmlspecialchars($paper['title']) ?></strong><br>
                        <?= htmlspecialchars($paper['venue']) ?>, <?= $paper['year'] ?>.<br>
                        <em>(<?= $paper['author'] ?>)</em><br>
                        <?= htmlspecialchars($paper['desc'])?>
                        <br>
                        <a href="<?= htmlspecialchars($paper['pdf']) ?>" target="_blank">📄 PDF</a>
                        <?php if (!empty($paper['link'])): ?>
                            <a href="<?= htmlspecialchars($paper['link']) ?>" target="_blank">🌐 Publisher</a>
                        <?php endif; ?>

                    </li>
                <?php endforeach; ?>
            </ol>
        <?php else: ?>
            <p class="no-pub">No journal articles available at this time.</p>
        <?php endif; ?>
    </details>

    <!-- Book Chapters  -->
    <?php $filteredBooks = filterByYear($bookChapters, $selectedYear); ?>
    <details class="pub-section">
        <summary>Book Chapters</summary>

        <?php if (!empty($filteredBooks)): ?>
            <ol class="pub-list">
                <?php foreach ($filteredBooks as $paper): ?>
                    <li>
                        <strong><?= htmlspecialchars($paper['title']) ?></strong><br>
                        <?= htmlspecialchars($paper['venue']) ?>, <?= $paper['year'] ?>.
                        <em>(<?= $paper['author'] ?>)</em><br>
                        <?= htmlspecialchars($paper['desc'])?>
                        <br> 
                        <a href="<?= htmlspecialchars($paper['pdf']) ?>" target="_blank">📄 PDF</a>
                        <?php if (!empty($paper['link'])): ?>
                            <a href="<?= htmlspecialchars($paper['link']) ?>" target="_blank">🌐 Publisher</a>
                        <?php endif; ?>
                        

                    </li>
                <?php endforeach; ?>
            </ol>
        <?php else: ?>
            <p class="no-pub">No book chapters available at this time.</p>
        <?php endif; ?>
    </details>

    <!--  Conference Proceedings-->
    <?php $filteredConfs = filterByYear($conferences, $selectedYear); ?>
    <details class="pub-section">
        <summary>Conference Proceedings</summary>

        <?php if (!empty($filteredConfs)): ?>
            <ol class="pub-list">
                <?php foreach ($filteredConfs as $paper): ?>
                    <li>
                        <strong><?= htmlspecialchars($paper['title']) ?></strong><br>
                        <?= htmlspecialchars($paper['venue']) ?>, <?= $paper['year'] ?>.
                        <em>(<?= $paper['author'] ?>)</em><br>
                        <?= htmlspecialchars($paper['desc'])?>
                        <br>
                        <a href="<?= htmlspecialchars($paper['pdf']) ?>" target="_blank">📄 PDF</a>
                        <?php if (!empty($paper['link'])): ?>
                             <a href="<?= htmlspecialchars($paper['link']) ?>" target="_blank">🌐 Publisher</a>
                        <?php endif; ?>

                    </li>
                <?php endforeach; ?>
            </ol>
        <?php else: ?>
            <p class="no-pub">No conference papers available at this time.</p>
        <?php endif; ?>
    </details>

</main>

<?php include 'footer.php'; ?>