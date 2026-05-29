<?php
$pageTitle = 'GoHabesha - Travel Blog';
$activeNav = 'home';
$publicBase = '.';
$rootBase = '..';

require __DIR__ . '/../app/includes/auth.php';

/** @var PDO $pdo */
global $pdo;

$stmt = $pdo->prepare('
  SELECT p.title, p.slug, p.excerpt, p.featured_image_path, p.created_at,
         b.username AS author_username
  FROM posts p
  INNER JOIN bloggers b ON b.id = p.blogger_id
  WHERE p.status = :status
  ORDER BY p.created_at DESC
  LIMIT 3
');
$stmt->execute([':status' => 'published']);
$latestPosts = $stmt->fetchAll() ?: [];

require __DIR__ . '/../app/includes/header.php';
?>

<!-- hero section -->
<section class="hero" role="region" aria-label="Featured">
  <div class="hero-overlay">
    <div class="container hero-inner">
      <h1>Chill Trips, Messy Stories, Actual Tips</h1>
      <p class="hero-sub">
        Curated Routes, Cost-Effective Travel, and Essential Tips for Exploring Ethiopia
      </p>
      <p>
        <a href="blog.php" class="btn primary">Read the latest</a>
        <a href="destinations.php" class="btn ghost">Explore destinations</a>
      </p>
    </div>
  </div>
</section>

<!-- featured destinations -->
<div class="container main-content">
  <section class="section featured" aria-labelledby="featured-heading">
    <h2 id="featured-heading">Popular Destinations</h2>

    <div class="cards" id="featured-cards">
      <!-- card 1 -->
      <article class="card" data-destination="addis">
        <img src="../assets/images/addis/addis_main.jpg" class="img-border-radius" alt="City skyline of Addis Ababa" />
        <div class="card-body">
          <h3>Addis Ababa</h3>
          <p>Coffee culture, museums, and vibrant views of the capital city.</p>
          <a href="destinations.php#addis" class="btn small">See details</a>
        </div>
      </article>

      <!-- card 2 -->
      <article class="card" data-destination="lalibela">
        <img src="../assets/images/lalibela/lalibela_main.jpg" class="img-border-radius" alt="Rock-hewn churches of Lalibela" />
        <div class="card-body">
          <h3>Lalibela</h3>
          <p>Ancient rock-hewn churches, spiritual heritage, and breathtaking architecture.</p>
          <a href="destinations.php#lalibela" class="btn small">See details</a>
        </div>
      </article>

      <!-- card 3 -->
      <article class="card" data-destination="gondar">
        <img src="../assets/images/gondar/gondar_main.jpg" class="img-border-radius" alt="Fasil Ghebbi castle complex in Gondar" />
        <div class="card-body">
          <h3>Gondar</h3>
          <p>Historic castles, royal enclosures, and the Camelot of Africa.</p>
          <a href="destinations.php#gondar" class="btn small">See details</a>
        </div>
      </article>
    </div>
  </section>

  <!-- latest posts teasers -->
  <section class="section posts" aria-labelledby="latest-heading">
    <h2 id="latest-heading">Latest posts</h2>

    <?php if (count($latestPosts) === 0): ?>
      <p class="muted" style="margin-top: 12px;">No published posts yet.</p>
    <?php else: ?>
      <div class="blog-feed" aria-label="Latest published posts">
        <?php foreach ($latestPosts as $p): ?>
          <?php
            $img = (string) ($p['featured_image_path'] ?? '');
            $imgOk = $img !== '';
            if ($imgOk && str_starts_with($img, 'uploads/')) {
                $imgOk = is_file(__DIR__ . '/' . $img);
            }
            $excerpt = (string) ($p['excerpt'] ?? '');
            $createdAt = (string) ($p['created_at'] ?? '');
          ?>
          <a class="article-card" href="post.php?slug=<?= urlencode((string) $p['slug']) ?>" aria-label="Read <?= htmlspecialchars((string) $p['title'], ENT_QUOTES, 'UTF-8') ?>">
            <div class="article-card__content">
              <p class="article-card__kicker">Latest</p>
              <h2 class="article-card__title"><?= htmlspecialchars((string) $p['title'], ENT_QUOTES, 'UTF-8') ?></h2>
              <p class="article-card__excerpt">
                <?= htmlspecialchars($excerpt !== '' ? $excerpt : 'Read the full story.', ENT_QUOTES, 'UTF-8') ?>
              </p>
              <div class="article-card__meta">
                <span><?= htmlspecialchars((string) $p['author_username'], ENT_QUOTES, 'UTF-8') ?></span>
                <span aria-hidden="true">·</span>
                <time datetime="<?= htmlspecialchars(date('Y-m-d', strtotime($createdAt)), ENT_QUOTES, 'UTF-8') ?>">
                  <?= htmlspecialchars(date('M j, Y', strtotime($createdAt)), ENT_QUOTES, 'UTF-8') ?>
                </time>
              </div>
            </div>
            <div class="article-card__media">
              <?php if ($imgOk): ?>
                <img src="<?= htmlspecialchars($img, ENT_QUOTES, 'UTF-8') ?>" alt="<?= htmlspecialchars((string) $p['title'], ENT_QUOTES, 'UTF-8') ?>" loading="lazy" />
              <?php else: ?>
                <img src="../assets/images/favicon/favicon.png" alt="GoHabesha" loading="lazy" />
              <?php endif; ?>
            </div>
          </a>
        <?php endforeach; ?>
      </div>
    <?php endif; ?>
  </section>

  <!-- newsletter / subscribe simple UI -->
  <aside class="section subscribe" aria-labelledby="subscribe-heading">
    <h2 id="subscribe-heading">Subscribe for weekly travel tips</h2>
    <form id="subscribe-form" class="subscribe-form" novalidate>
      <label for="sub-email">Email</label>
      <input id="sub-email" name="email" type="email" required placeholder="you@example.com" />
      <button type="submit" class="btn primary">Subscribe</button>
      <p class="form-msg" aria-live="polite"></p>
    </form>
  </aside>
</div>

<?php require __DIR__ . '/../app/includes/footer.php'; ?>

