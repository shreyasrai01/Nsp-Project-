<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Blog : Homepage</title>

    <link rel="stylesheet" href="css/home.css">
</head>
<body>
    <?php
        // PHP code can be added here for any server-side processing or dynamic content generation
        // For example, you can retrieve data from a database and use it to populate the page dynamically
    

    ?>

    <nav class="navbar">
        <img src="img/logo.png" class="logo" alt="">
        <ul class="links-container">
            <li class="link-item"><a href="/" class="link">home</a></li>
            <li class="link-item"><a href="editor.php" class="link">editor</a></li>
            <li class="link-item"><a href="loginform.php" class="link">login</a></li>
            <li class="link-item"><a href="Signin.php" class="link">Sign in</a></li>
        </ul>
    </nav>

    <header class="header">
        <div class="content">
            <h1 class="heading">
                <span class="small">welcome in the world of</span>
                blog
                <span class="no-fill">writing</span>
            </h1>
        </div>
    </header>

    <!-- blog section -->
    <section class="blogs-section">
        <div class="blog-card">
            <img src="img/TREE.jpg" class="blog-image" alt="">
            <h1 class="blog-title">Benefits of Blogging</h1>
            <hr>
            <p class="blog-overview">Showcase Your Skills.<br>
            Blogging is the best way to showcase your skills to the world.<br>
            Get More Traffic To Your Website.<br>
            Build Customer Relationships.<br>
            Build An Online Brand.<br>
            Update Yourself On The Latest.<br>
            It Opens New Avenues.<br>
            Build A Community.<br>
            Make New Connections.</p>
            <a href="/" class="btn dark">read</a>
        </div>
    </section>

    <?php
        // Additional PHP code can be added here if needed
    ?>
</body>
</html>
