<!-- <nav class="top-nav">
    <ul>
        <li style="color:black; font-style: italic;">Gazi Maliha Raisa Noor</li>
        <li><a href="index.php">About</a></li>
        <li><a href="education.php">Education & Awards</a></li>
        <li><a href="publication.php">Publications</a></li>
        <li><a href="projects.php">Projects</a></li>
    </ul>
</nav> -->
<nav class="top-nav">
    <input type="checkbox" id="nav-toggle" class="nav-toggle">
    <label for="nav-toggle" class="nav-toggle-label">
        <span></span>
    </label>

    <ul class="nav-links">
        <li class="nav-brand" style="color:black; font-style: italic;">Gazi Maliha Raisa Noor</li>
        <li><a href="index.php">About</a></li>
        <li><a href="education.php">Education & Awards</a></li>
        <li><a href="publication.php">Publications</a></li>
        <li><a href="projects.php">Projects</a></li>
    </ul>
</nav>
<script>
    document.querySelectorAll('.nav-links a').forEach(link => {
        link.addEventListener('click', () => {
            document.getElementById('nav-toggle').checked = false;
        });
    });
</script>