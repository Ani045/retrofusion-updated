<?php
// includes/blog-sidebar.php
// Shared sticky desktop sidebar for all blog posts.
// Included via: <?php include __DIR__ . '/../includes/blog-sidebar.php'; ?>
?>
<aside class="hidden lg:block lg:self-start lg:sticky lg:top-24 space-y-5">

  <!-- ✦ CTA Card — Gradient Glassmorphism -->
  <div class="relative overflow-hidden rounded-2xl shadow-xl">
    <!-- Gradient background -->
    <div class="absolute inset-0 bg-gradient-to-br from-[#0F2A24] via-[#1a4a3f] to-[#0F2A24]"></div>
    <!-- Decorative blobs -->
    <div class="absolute -top-10 -right-10 w-40 h-40 bg-amber-500/20 rounded-full blur-3xl"></div>
    <div class="absolute -bottom-10 -left-10 w-32 h-32 bg-emerald-400/15 rounded-full blur-2xl"></div>

    <div class="relative p-6">
      <!-- Badge -->
      <div class="inline-flex items-center gap-1.5 bg-amber-500/20 backdrop-blur-sm border border-amber-400/30 text-amber-300 text-[10px] font-bold uppercase tracking-widest px-3 py-1 rounded-full mb-4">
        <svg class="w-3 h-3" fill="currentColor" viewBox="0 0 20 20"><path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.286 3.957a1 1 0 00.95.69h4.162c.969 0 1.371 1.24.588 1.81l-3.367 2.446a1 1 0 00-.364 1.118l1.287 3.957c.3.922-.755 1.688-1.54 1.118l-3.366-2.446a1 1 0 00-1.176 0l-3.367 2.446c-.783.57-1.838-.196-1.539-1.118l1.287-3.957a1 1 0 00-.364-1.118L2.063 9.384c-.784-.57-.38-1.81.588-1.81h4.162a1 1 0 00.95-.69l1.286-3.957z"/></svg>
        Rated 4.9 / 5
      </div>

      <h3 class="text-xl font-bold text-white font-display leading-snug mb-2">
        Your Dream Villa<br>Awaits in Lonavala
      </h3>
      <p class="text-white/75 text-xs leading-relaxed mb-5">
        Private pool · In-house chef · Mountain views — Perfect for families, couples &amp; groups of up to 20.
      </p>

      <!-- CTA Buttons -->
      <a href="/contact"
         class="group flex items-center justify-center gap-2 w-full bg-gradient-to-r from-amber-500 to-amber-600 hover:from-amber-600 hover:to-amber-700 text-white font-bold text-sm px-4 py-3 rounded-xl shadow-lg shadow-amber-600/30 transition-all duration-300 mb-2.5">
        <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z"/></svg>
        Book Now — Check Dates
        <svg class="w-3.5 h-3.5 group-hover:translate-x-1 transition-transform" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14 5l7 7m0 0l-7 7m7-7H3"/></svg>
      </a>

      <a href="https://wa.me/918999036644?text=Hi%2C%20I%27d%20like%20to%20know%20more%20about%20Retrofusion%20villas"
         target="_blank" rel="noopener"
         class="group flex items-center justify-center gap-2 w-full bg-white/10 hover:bg-white/20 backdrop-blur-sm border border-white/20 text-white font-semibold text-sm px-4 py-2.5 rounded-xl transition-all duration-300">
        <svg class="w-4.5 h-4.5" fill="currentColor" viewBox="0 0 24 24"><path d="M17.472 14.382c-.297-.149-1.758-.867-2.03-.967-.273-.099-.471-.148-.67.15-.197.297-.767.966-.94 1.164-.173.199-.347.223-.644.075-.297-.15-1.255-.463-2.39-1.475-.883-.788-1.48-1.761-1.653-2.059-.173-.297-.018-.458.13-.606.134-.133.298-.347.446-.52.149-.174.198-.298.298-.497.099-.198.05-.371-.025-.52-.075-.149-.669-1.612-.916-2.207-.242-.579-.487-.5-.669-.51-.173-.008-.371-.01-.57-.01-.198 0-.52.074-.792.372-.272.297-1.04 1.016-1.04 2.479 0 1.462 1.065 2.875 1.213 3.074.149.198 2.096 3.2 5.077 4.487.709.306 1.262.489 1.694.625.712.227 1.36.195 1.871.118.571-.085 1.758-.719 2.006-1.413.248-.694.248-1.289.173-1.413-.074-.124-.272-.198-.57-.347z"/><path d="M12.05.002C5.495.002.16 5.337.157 11.892c-.001 2.096.547 4.142 1.588 5.946L.057 24l6.305-1.654a11.882 11.882 0 005.683 1.448h.005c6.554 0 11.89-5.335 11.893-11.893A11.821 11.821 0 0020.46 3.49 11.814 11.814 0 0012.05.002zm0 21.78h-.004a9.867 9.867 0 01-5.031-1.378l-.361-.214-3.741.981 1-3.648-.235-.374A9.86 9.86 0 012.157 11.89c.002-5.45 4.437-9.884 9.889-9.884 2.64 0 5.122 1.03 6.988 2.898a9.825 9.825 0 012.893 6.994c-.003 5.45-4.437 9.884-9.877 9.884z"/></svg>
        Chat on WhatsApp
      </a>

      <!-- Trust row -->
      <div class="flex items-center justify-center gap-3 mt-4 pt-4 border-t border-white/10">
        <div class="flex -space-x-1.5">
          <div class="w-6 h-6 rounded-full bg-amber-400 border-2 border-[#0F2A24] flex items-center justify-center text-[8px] font-bold text-[#0F2A24]">R</div>
          <div class="w-6 h-6 rounded-full bg-emerald-400 border-2 border-[#0F2A24] flex items-center justify-center text-[8px] font-bold text-[#0F2A24]">S</div>
          <div class="w-6 h-6 rounded-full bg-sky-400 border-2 border-[#0F2A24] flex items-center justify-center text-[8px] font-bold text-[#0F2A24]">P</div>
        </div>
        <p class="text-white/60 text-[10px] leading-tight">Trusted by <span class="text-white font-semibold">500+</span> happy guests</p>
      </div>
    </div>
  </div>

  <!-- ✦ Recent Blog Posts with Thumbnails -->
  <div class="bg-white border border-stone-200/80 rounded-2xl shadow-md overflow-hidden">
    <div class="px-5 pt-5 pb-3">
      <div class="flex items-center gap-2 mb-1">
        <div class="w-1 h-5 bg-amber-500 rounded-full"></div>
        <p class="text-[10px] uppercase tracking-widest text-amber-600 font-bold">From Our Blog</p>
      </div>
      <h3 class="text-base font-bold text-stone-800 font-display leading-snug">Recent Posts</h3>
    </div>

    <div class="divide-y divide-stone-100">
      <!-- Post 1 -->
      <a href="/blogs/best-places-to-stay-in-lonavala/" class="group flex gap-3 px-5 py-3.5 hover:bg-amber-50/50 transition-colors duration-200">
        <div class="w-20 h-14 rounded-xl overflow-hidden bg-stone-100 flex-shrink-0 ring-1 ring-stone-200/60">
          <img src="/blogs/images/Best-Places-to-Stay-in-Lonavala-RetroFusion-Homestay-1024x559.webp" alt="Best Places to Stay in Lonavala" class="w-full h-full object-cover group-hover:scale-110 transition-transform duration-500" loading="lazy" />
        </div>
        <div class="min-w-0 flex flex-col justify-center">
          <h4 class="text-xs font-semibold text-stone-800 group-hover:text-amber-700 transition-colors line-clamp-2 leading-snug mb-0.5">Best Places to Stay in Lonavala: A Complete Guide</h4>
          <span class="text-[10px] text-stone-400 font-medium">5 min read</span>
        </div>
      </a>

      <!-- Post 2 -->
      <a href="/blogs/places-to-visit-in-lonavala-with-family/" class="group flex gap-3 px-5 py-3.5 hover:bg-amber-50/50 transition-colors duration-200">
        <div class="w-20 h-14 rounded-xl overflow-hidden bg-stone-100 flex-shrink-0 ring-1 ring-stone-200/60">
          <img src="/blogs/images/ChatGPT-Image-Jul-4-2025-09_09_07-PM-1024x683.png" alt="Places to Visit in Lonavala with Family" class="w-full h-full object-cover group-hover:scale-110 transition-transform duration-500" loading="lazy" />
        </div>
        <div class="min-w-0 flex flex-col justify-center">
          <h4 class="text-xs font-semibold text-stone-800 group-hover:text-amber-700 transition-colors line-clamp-2 leading-snug mb-0.5">Places to Visit in Lonavala with Family</h4>
          <span class="text-[10px] text-stone-400 font-medium">7 min read</span>
        </div>
      </a>

      <!-- Post 3 -->
      <a href="/blogs/best-places-to-stay-in-lonavala-for-couples/" class="group flex gap-3 px-5 py-3.5 hover:bg-amber-50/50 transition-colors duration-200">
        <div class="w-20 h-14 rounded-xl overflow-hidden bg-stone-100 flex-shrink-0 ring-1 ring-stone-200/60">
          <img src="/blogs/images/Best-Romantic-Spots-in-Lonavala-for-Couples-1024x559.png" alt="Best Places to Stay in Lonavala for Couples" class="w-full h-full object-cover group-hover:scale-110 transition-transform duration-500" loading="lazy" />
        </div>
        <div class="min-w-0 flex flex-col justify-center">
          <h4 class="text-xs font-semibold text-stone-800 group-hover:text-amber-700 transition-colors line-clamp-2 leading-snug mb-0.5">Best Places to Stay in Lonavala for Couples</h4>
          <span class="text-[10px] text-stone-400 font-medium">6 min read</span>
        </div>
      </a>
    </div>

    <div class="px-5 pb-4 pt-2">
      <a href="/blogs/" class="flex items-center justify-center gap-1.5 w-full text-center text-[11px] font-bold text-amber-700 hover:text-amber-800 bg-amber-50 hover:bg-amber-100 py-2 rounded-lg uppercase tracking-wider transition-colors">
        View All Blogs
        <svg class="w-3 h-3" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14 5l7 7m0 0l-7 7m7-7H3"/></svg>
      </a>
    </div>
  </div>

</aside>
