<!DOCTYPE html>
<html lang="nl">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>[Jouw Naam] | Software Developer Portfolio</title>
    <meta name="description"
        content="Portfolio van [Jouw Naam], Software Developer. Bekijk mijn opleidingen, werkervaring, skills en recent opgeleverde projecten.">
    <!-- Google Fonts: Outfit (for headings) & Plus Jakarta Sans (for body) -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Outfit:wght@300;400;600;700;800&family=Plus+Jakarta+Sans:wght@300;400;500;600;700&display=swap"
        rel="stylesheet">
    <link rel="stylesheet" href="style.css">
</head>

<body>

    <!-- GLOEIENDE ACHTERGROND BLOB (Aesthetic background glow) -->
    <div class="bg-glow"></div>
    <div class="bg-glow secondary"></div>

    <?php include 'assets/includes/header.php'; ?>

    <!-- MAIN INHOUD -->
    <main>

        <!-- 1. HOME (HERO) SECTIE -->
        <section id="home" class="section hero-section">
            <?php include 'assets/includes/home.php'; ?>
        </section>


        <!-- 2. OPLEIDING & ERVARING SECTIE (Timeline) -->
        <section id="experience" class="section experience-section">
            <?php include 'assets/includes/experience.php'; ?>
        </section>


        <!-- 3. ABOUT & SKILLS SECTIE -->
        <section id="about" class="section about-section">
            <?php include 'assets/includes/about.php'; ?>
        </section>


        <!-- 4. PROJECTEN SECTIE -->
        <section id="projects" class="section projects-section">
            <?php include 'assets/includes/projects.php'; ?>
        </section>


        <!-- 5. CONTACT SECTIE -->
        <section id="contact" class="section contact-section">
            <?php include 'assets/includes/contact.php'; ?>
        </section>

    </main>

    <?php include 'assets/includes/footer.php'; ?>

    <!-- JAVASCRIPT -->
    <script src="script.js"></script>
</body>

</html>