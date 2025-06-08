<?php
$pageTitle = "How to: Build a Website Using AI";
$publishDate = '2025-05-22';
$postPublishDate = date('F j, Y', strtotime($publishDate));
include dirname(__DIR__, 3) . '/includes/header.php';
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title><?php echo htmlspecialchars($pageTitle); ?></title>
    <link rel="stylesheet" href="/assets/css/blog.css">
</head>

<body>

    <section class="blog-section">
        <main class="blog-main container">

            <!-- Full-Width Title -->
            <h2 class="post-title-fullwidth"><?php echo htmlspecialchars($pageTitle); ?></h2>


            <!-- Blog and Sidebar Wrapper -->
            <div class="content-wrapper">
                <!-- Main Blog Post -->
                <article class="blog-post">

                    <img src="assets/images/ai-chat-open-on-phone.webp" alt="AI tool app open on a phone" class="post-image" />
                    <h3 class="blog-subtitle">Practical Tips and Real Limitations</h3>
                    <!-- Insert the dynamic publish date here -->
                    <p class="post-meta">Published on <?php echo date('F j, Y', strtotime($publishDate)); ?> • by <img class="cherry-icon" src="/assets/images/favicon.webp" style="height: 20px; vertical-align: middle;" alt="icon" alt="a cherry"></p>
                    <p class="post-meta">
                        in
                        <span class="post-categories">
                            <a href="/category/coding.php" class="post-category">tech</a>
                            <a href="/category/digital-marketing.php" class="post-category"> digital </a>
                            <a hidden href="/category/freelance-and-business.php" class="post-category"> mindset</a>
                            <a hidden href="/category/stories.php" class="post-category"> stories </a>
                            <a hidden href="/category/travels.php" class="post-category"> travels</a>
                            <a hidden href="/category/tech-writing-translations.php" class="post-category"> wordcraft </a>
                        </span>
                    </p>


                    <div class="post-content">
                        <?php include dirname(__DIR__, 3) . '/includes/social-share.php'; ?>

                        <div>
                            <p>The days of wrestling with endless lines of code or hiring a professional web developer might be behind us. AI-powered tools like Microsoft Copilot and ChatGPT have made creating a functional and visually appealing website more accessible than ever.</p>
                            <p>However, while these tools accelerate development, they do have their limitations.</p>
                            <p>I built a website using Copilot, ChatGPT, and my coding knowledge—and here’s what I learned.</p>
                        </div>

                        <div>
                            <h2>Step 1: Planning the Design</h2>
                            <p>Before I started creating my website, I had a clear vision of its look and structure. Having seen countless templates, I knew what I liked, so I grabbed my tablet and sketched a design that would resonate with both myself and my audience.</p>
                            <p>Structuring the site was straightforward: DOCTYPE declaration, header, body, footer, and content sections. As I added more pages, I realized I could use PHP to write reusable code snippets, making development more efficient and saving valuable time.</p>

                            <h3>AI-Powered Brainstorming</h3>
                            <p>AI can assist in brainstorming ideas regarding your website’s purpose and audience. It can generate content outlines, suggest layouts, and even offer SEO insights.</p>
                            <img src="/assets/images/AI-Assisted-HTML-CSS-Layout.webp" alt="AI-Assisted HTML & CSS Layout">
                        </div>

                        <div>
                            <h2>Step 2: Writing Code with AI</h2>
                            <p>Copilot and ChatGPT are valuable assets for coding assistance. They generate HTML boilerplates, CSS styles, and JavaScript functions with remarkable speed.</p>
                            <p>However, AI-generated code requires human oversight. It can miss intricate logic details or introduce security vulnerabilities. Always review and refine AI-generated content to ensure functionality and originality.</p>

                            <h3>Tips</h3>
                            <ul>
                                <li><b>Use short, specific prompts</b>: AI performs best when instructions are clear and concise.</li>
                                <li><b>Validate generated code</b>: AI may not detect security flaws, so manual debugging is essential.</li>
                                <li><b>Balance AI efficiency with creativity</b>: While AI can provide templates, unique designs require human imagination.</li>
                            </ul>
                            <img src="/assets/images/Styling-with-CSS-Bootstrap.webp" alt="Styling with CSS & Bootstrap - Code">
                        </div>

                        <div>
                            <h2>Step 3: Automating Tasks & Backend Development</h2>
                            <p>Once my frontend was close to completion, I streamlined my backend development using Copilot. I generated PHP scripts for reusable components like headers, footers, and content sections.</p>
                            <p>For databases, I structured my code to introduce MySQL integration later in the project timeline.</p>

                            <h3>Tips</h3>
                            <ul>
                                <li>Use AI to generate PHP scripts for repetitive tasks.</li>
                                <li>AI can assist with setting up databases, but always review security measures.</li>
                                <li>Consider AI-generated REST APIs for smoother data exchange.</li>
                            </ul>
                            <img src="/assets/images/Backend-Assistance-PHP-APIs.png" alt="PHP and APIs Code">
                        </div>

                        <div>
                            <h2>Step 4: Using Frameworks Like Bootstrap & React</h2>
                            <p>AI can suggest frameworks and guide implementation, but hands-on experimentation remains crucial. While I had experience with Bootstrap, I relied on Copilot to navigate React and Tailwind CSS.</p>

                            <h3>Tips</h3>
                            <ul>
                                <li>AI provides framework guidance, but learning through experimentation is vital.</li>
                                <li>Treat AI suggestions as a <b>starting point</b>, not a definitive solution.</li>
                            </ul>
                        </div>

                        <div>
                            <h2>Understanding AI’s Processing Limits</h2>
                            <p>Most AI models, including Copilot and ChatGPT, can process hundreds of lines of code per request but struggle with extremely large files or multi-file projects.</p>

                            <h3>Practical limits</h3>
                            <ul>
                                <li><b>Copilot (code editors)</b>: Best for real-time suggestions rather than processing entire projects.</li>
                                <li><b>ChatGPT (text-based)</b>: Can review up to 300–500 lines of code per interaction but may struggle with complex requests.</li>
                            </ul>
                        </div>

                        <div>
                            <h2>Final Thoughts: AI is a Tool, Not a Replacement</h2>
                            <p>AI enhances web development efficiency, but <b>it does not replace human expertise</b>. While AI writes boilerplate code and offers guidance, creativity, security, debugging, and customization remain in human hands.</p>
                            <p>The smartest approach? Use AI as an <b>assistant</b>, not a substitute. Combine its speed with your own skills to build a website that’s <b>functional, secure, and uniquely yours</b>.</p>
                        </div>
                        <!-- Add more content here -->
                    </div>
                    <div>
                    </div>
                    <div class="donate-link">
                        Do you want to support me on my journey? <a href="https://www.paypal.com/donate/?hosted_button_id=FPLATGZCMZ2US" target="_blank">
                            <button class="donate-button">Buy me a coffee!</button>
                        </a>
                    </div>

                </article>


                <!-- Sidebar Section -->
                <?php include $_SERVER['DOCUMENT_ROOT'] . "/blog/sidebar.php"; ?>
            </div>

            <!-- FEATURED ITEMS SECTION -->

            <?php include dirname(__DIR__, 3) . '/includes/featured-index-items.php'; ?>

            <!-- FEATURED ITEMS END -->


        </main>

    </section>
    <?php
    $footerPath = dirname(__DIR__, 3) . '/includes/footer.php';
    if (file_exists($footerPath)) {
        include $footerPath;
    } else {
        echo "<p style='color: red;'>Error: Footer file not found!</p>";
    }
    ?>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>

</body>

</html>