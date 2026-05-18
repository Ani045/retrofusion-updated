<?php
$pageTitle = "Travel Blog - Retrofusion Boutique Homestays";
$pageDescription = "Retrofusion Blog - Stories, insights, and travel guides for Lonavala.";

$posts_per_page = 6;
$page = isset($_GET['page']) ? max(1, intval($_GET['page'])) : 1;

$all_posts = [
  ['slug' => 'bachelor-party-group-stay', 'title' => '4BHK Villas in Lonavala for Bachelor Party & Group Stay', 'excerpt' => 'Discover the ultimate bachelor party venue in Lonavala. Private pools, party-friendly amenities, and breathtaking views await your squad.', 'category' => 'Group Stays', 'image' => 'images/bachelor-party-hero.jpg', 'alt' => 'Bachelor Party in Lonavala', 'date' => 'April 30, 2026'],
  ['slug' => 'cost-price-breakdown', 'title' => 'How Much Does a 4BHK Villa in Lonavala Cost? (Price Breakdown)', 'excerpt' => 'Complete price guide for 4BHK villas in Lonavala. Understand weekday vs weekend rates, seasonal pricing, and money-saving tips.', 'category' => 'Budget Guide', 'image' => 'images/price-breakdown-hero.jpg', 'alt' => '4BHK Villa Cost in Lonavala', 'date' => 'April 30, 2026'],
  ['slug' => 'things-to-check', 'title' => 'Things to Check Before Booking a 4BHK Villa in Lonavala', 'excerpt' => 'Essential checklist for booking your Lonavala villa. Bedroom configurations, pool details, kitchen facilities, cancellation policies, and more.', 'category' => 'Planning', 'image' => 'images/things-to-check-hero.jpg', 'alt' => 'Things to Check Before Booking', 'date' => 'April 30, 2026'],
  ['slug' => 'villa-vs-hotels', 'title' => 'Why Choose a 4BHK Villa in Lonavala Over Hotels?', 'excerpt' => 'Villa vs hotel in Lonavala: better value, more space, private pool, and a far superior group experience. Here\'s why villas win.', 'category' => 'Comparisons', 'image' => 'images/villa-vs-hotels-hero.jpg', 'alt' => 'Villa vs Hotels in Lonavala', 'date' => 'April 30, 2026'],
  ['slug' => 'top-locations-area-guide', 'title' => 'Top Locations to Book a 4BHK Villa in Lonavala (Area-wise Guide)', 'excerpt' => 'Lonavala\'s key zones — Pawna Lake, Khandala, Tungarli, town area — each with distinct character. Find the perfect location for your group.', 'category' => 'Area Guide', 'image' => 'images/top-locations-hero.jpg', 'alt' => 'Top Locations for 4BHK Villa', 'date' => 'April 30, 2026'],
  ['slug' => 'affordable-weekend-getaways', 'title' => 'Affordable 4BHK Villas in Lonavala for Weekend Getaways', 'excerpt' => 'Luxury villa holidays don\'t have to break the bank. Discover how to find affordable 4BHK villas in Lonavala without compromising on experience.', 'category' => 'Budget', 'image' => 'images/affordable-hero.jpg', 'alt' => 'Affordable 4BHK Villas in Lonavala', 'date' => 'April 30, 2026'],
  ['slug' => 'luxury-private-pool', 'title' => 'Luxury 4BHK Villas in Lonavala with Private Pool – Complete Guide', 'excerpt' => 'True luxury means designer interiors, private infinity pools, gourmet kitchens, and concierge services. Discover Lonavala\'s finest private pool villas.', 'category' => 'Luxury', 'image' => 'images/luxury-hero.jpg', 'alt' => 'Luxury Villas with Private Pool', 'date' => 'April 30, 2026'],
  ['slug' => 'family-stay-guide', 'title' => 'Best 4BHK Villas in Lonavala for Family Stay (2026 Guide)', 'excerpt' => 'Planning a family vacation to Lonavala? Discover the top family-friendly 4BHK villas with pools, kitchens, spacious layouts, and nearby attractions.', 'category' => 'Family', 'image' => 'images/family-hero.jpg', 'alt' => 'Family Stay in Lonavala', 'date' => 'April 30, 2026'],
  ['slug' => 'pet-friendly-villas', 'title' => 'Pet-Friendly 4BHK Villas in Lonavala – Complete List & Tips', 'excerpt' => 'Travel with your furry family member without compromising on accommodation quality. Comprehensive guide to pet-friendly 4BHK villas in Lonavala.', 'category' => 'Pets', 'image' => 'images/pet-friendly-hero.jpg', 'alt' => 'Pet-Friendly Villas in Lonavala', 'date' => 'April 30, 2026'],
  ['slug' => 'pawna-lake-hill-view', 'title' => '4BHK Villas in Lonavala Near Pawna Lake & Hill View Options', 'excerpt' => 'Panoramic lake and mountain villa experiences in Lonavala. Discover Pawna Lake\'s magic and the best hill-view 4BHK villas in the region.', 'category' => 'Locations', 'image' => 'images/pawna-lake-hero.jpg', 'alt' => 'Pawna Lake Villas', 'date' => 'April 30, 2026'],
];

$total_posts = count($all_posts);
$total_pages = ceil($total_posts / $posts_per_page);
$offset = ($page - 1) * $posts_per_page;
$current_posts = array_slice($all_posts, $offset, $posts_per_page);

include '../includes/header.php';
?>

    <!-- ===== HERO SECTION ===== -->
    <section class="relative bg-[#0F2A24] overflow-hidden pt-24 pb-20">
      <div class="absolute inset-0 opacity-20">
        <div class="absolute inset-0 bg-gradient-to-br from-amber-600/30 to-transparent"></div>
      </div>
      <div class="relative max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 text-center">
        <p class="text-amber-400 font-medium text-sm tracking-widest uppercase mb-4">Retrofusion Blog</p>
        <h1 class="text-4xl sm:text-5xl lg:text-6xl font-bold text-white font-display mb-6">Insights & Inspiration</h1>
        <p class="text-stone-300 text-lg sm:text-xl max-w-2xl mx-auto">Stories, guides, and expert tips for planning your perfect Lonavala villa getaway.</p>
      </div>
    </section>

    <!-- ===== BLOG POSTS GRID ===== -->
    <section class="bg-[#F4EFEA] py-16 sm:py-20">
      <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">

<?php foreach ($current_posts as $post): ?>
          <!-- Post -->
          <article class="group bg-white rounded-2xl shadow-md hover:shadow-xl transition-all duration-500 overflow-hidden">
            <a href="<?= $post['slug'] ?>.php" class="block">
              <div class="relative h-52 overflow-hidden">
                <img src="<?= $post['image'] ?>" alt="<?= $post['alt'] ?>" class="w-full h-full object-cover scale-110 group-hover:scale-125 transition-transform duration-700" loading="lazy" />
                <div class="absolute inset-0 bg-gradient-to-t from-black/60 via-transparent to-transparent"></div>
                <div class="absolute bottom-4 left-4 right-4">
                  <span class="bg-amber-500 text-white text-xs font-bold px-3 py-1 rounded-full uppercase tracking-wide"><?= $post['category'] ?></span>
                </div>
              </div>
              <div class="p-6">
                <p class="text-stone-500 text-sm mb-2"><?= $post['date'] ?></p>
                <h2 class="text-xl font-bold text-[#0F2A24] font-display mb-3 group-hover:text-amber-600 transition-colors leading-snug"><?= $post['title'] ?></h2>
                <p class="text-stone-600 text-sm leading-relaxed"><?= $post['excerpt'] ?></p>
                <div class="mt-4 flex items-center text-amber-600 font-semibold text-sm group-hover:gap-2 transition-all">
                  Read More <svg class="w-4 h-4 ml-1 group-hover:translate-x-1 transition-transform" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3"/></svg>
                </div>
              </div>
            </a>
          </article>
<?php endforeach; ?>

        </div>

        <!-- ===== PAGINATION ===== -->
<?php if ($total_pages > 1): ?>
        <div class="mt-12 flex items-center justify-center">
          <nav class="flex items-center gap-2" aria-label="Blog pagination">
            <?php if ($page > 1): ?>
            <a href="?page=<?= $page - 1 ?>" class="w-10 h-10 flex items-center justify-center rounded-full bg-white text-stone-600 hover:bg-amber-500 hover:text-white font-semibold text-sm shadow-md transition-all">‹</a>
            <?php else: ?>
            <span class="w-10 h-10 flex items-center justify-center rounded-full bg-white text-stone-300 font-semibold text-sm shadow-md cursor-not-allowed">‹</span>
            <?php endif; ?>

            <?php
            $max_visible = 5;
            $start = max(1, $page - floor($max_visible / 2));
            $end = min($total_pages, $start + $max_visible - 1);
            if ($end - $start < $max_visible - 1) {
              $start = max(1, $end - $max_visible + 1);
            }
            for ($i = $start; $i <= $end; $i++):
              if ($i == $page):
            ?>
            <span class="w-10 h-10 flex items-center justify-center rounded-full bg-amber-500 text-white font-bold text-sm shadow-md"><?= $i ?></span>
            <?php else: ?>
            <a href="?page=<?= $i ?>" class="w-10 h-10 flex items-center justify-center rounded-full bg-white text-stone-600 hover:bg-amber-500 hover:text-white font-semibold text-sm shadow-md transition-all"><?= $i ?></a>
            <?php endif; endfor; ?>

            <?php if ($page < $total_pages): ?>
            <a href="?page=<?= $page + 1 ?>" class="w-10 h-10 flex items-center justify-center rounded-full bg-white text-stone-600 hover:bg-amber-500 hover:text-white font-semibold text-sm shadow-md transition-all">›</a>
            <?php else: ?>
            <span class="w-10 h-10 flex items-center justify-center rounded-full bg-white text-stone-300 font-semibold text-sm shadow-md cursor-not-allowed">›</span>
            <?php endif; ?>
          </nav>
        </div>
        <p class="text-center text-stone-500 text-sm mt-4">Showing <?= $offset + 1 ?>–<?= min($offset + $posts_per_page, $total_posts) ?> of <?= $total_posts ?> articles</p>
<?php endif; ?>

        <!-- CTA Section -->
        <div class="mt-16 text-center bg-[#0F2A24] rounded-3xl p-10 sm:p-14">
          <h3 class="text-2xl sm:text-3xl font-bold text-white font-display mb-4">Ready to Experience Lonavala?</h3>
          <p class="text-stone-300 max-w-xl mx-auto mb-8">Browse our collection of 4BHK villas and find your perfect home away from home.</p>
          <div class="flex flex-col sm:flex-row items-center justify-center gap-4">
            <a href="../4bhk-villa-in-lonavala" class="px-8 py-3 bg-amber-500 hover:bg-amber-600 text-white font-bold rounded-full transition-colors text-sm">Explore Our Villas</a>
            <a href="../contact" class="px-8 py-3 bg-white/10 hover:bg-white/20 text-white font-semibold rounded-full transition-colors text-sm border border-white/30">Contact Us</a>
          </div>
        </div>
      </div>
    </section>

<?php include '../includes/footer.php'; ?>