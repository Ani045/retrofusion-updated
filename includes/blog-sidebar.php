<?php
// includes/blog-sidebar.php
// Shared desktop-only sidebar for all blog posts in /blog/.
// Included via: <?php include __DIR__ . '/../includes/blog-sidebar.php'; ?>
?>
<aside class="hidden lg:block lg:self-start space-y-4">
  <!-- Recent Posts -->
  <div class="bg-white border border-stone-200 rounded-2xl shadow-md p-6">
    <p class="text-xs uppercase tracking-wider text-amber-600 font-bold mb-3">Recent Posts</p>
    <h3 class="text-lg font-bold text-stone-800 font-display mb-4 leading-snug">Latest Updates</h3>
    <div class="space-y-4">
      <a href="/blog/winter-camping-in-lonavala/" class="group flex items-center gap-3">
        <div class="w-16 h-12 rounded-lg overflow-hidden bg-stone-100 flex-shrink-0">
          <img src="/blog/images/Untitleddesign.jpg" alt="Winter Camping in Lonavala" class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-300" loading="lazy" />
        </div>
        <div class="min-w-0">
          <h4 class="text-xs font-semibold text-stone-800 group-hover:text-amber-600 transition-colors line-clamp-2 leading-snug">Winter Camping in Lonavala: Experience the Chill by Pawna Lake</h4>
        </div>
      </a>
      <a href="/blog/why-winter-is-the-best-time-to-visit-lonavala/" class="group flex items-center gap-3">
        <div class="w-16 h-12 rounded-lg overflow-hidden bg-stone-100 flex-shrink-0">
          <img src="/blog/images/Gemini_Generated_Image_44t38444t38444t.jpeg" alt="Why Winter Is the Best Time to Visit Lonavala" class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-300" loading="lazy" />
        </div>
        <div class="min-w-0">
          <h4 class="text-xs font-semibold text-stone-800 group-hover:text-amber-600 transition-colors line-clamp-2 leading-snug">Why Winter Is the Best Time to Visit Lonavala: A Seasonal Guide</h4>
        </div>
      </a>
      <a href="/blog/why-couples-love-visiting-lonavala/" class="group flex items-center gap-3">
        <div class="w-16 h-12 rounded-lg overflow-hidden bg-stone-100 flex-shrink-0">
          <img src="/blog/images/Why-Couples-Love-Visiting-Lonavala.webp" alt="Why Couples Love Visiting Lonavala" class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-300" loading="lazy" />
        </div>
        <div class="min-w-0">
          <h4 class="text-xs font-semibold text-stone-800 group-hover:text-amber-600 transition-colors line-clamp-2 leading-snug">Why Couples Love Visiting Lonavala: Top Reasons &amp; Spots</h4>
        </div>
      </a>
    </div>
    <a href="/blog/index.php" class="block mt-5 text-center text-xs font-semibold text-amber-700 hover:text-amber-800 uppercase tracking-wider">View All Blogs &rarr;</a>
  </div>

  <!-- Sticky CTA Container -->
  <div class="lg:sticky lg:top-24 space-y-4">
    <!-- WhatsApp Quick Chat -->
    <a href="https://wa.me/918999036644?text=Hi%2C%20I%27d%20like%20to%20know%20more%20about%20Retrofusion%20villas"
       target="_blank" rel="noopener"
       class="group block bg-[#0F2A24] hover:bg-[#153b32] text-white rounded-2xl shadow-md hover:shadow-xl transition-all duration-300 overflow-hidden">
      <div class="p-5">
        <div class="flex items-center gap-3 mb-2">
          <div class="w-11 h-11 bg-white/20 backdrop-blur-sm rounded-full flex items-center justify-center flex-shrink-0 group-hover:scale-110 transition-transform">
            <svg class="w-6 h-6" fill="currentColor" viewBox="0 0 24 24"><path d="M.057 24l1.687-6.163a11.867 11.867 0 0 1-1.587-5.946C.16 5.335 5.495 0 12.05 0a11.817 11.817 0 0 1 8.413 3.488 11.824 11.824 0 0 1 3.48 8.414c-.003 6.557-5.338 11.892-11.893 11.892a11.9 11.9 0 0 1-5.688-1.448L.057 24zm6.597-3.807c1.676.995 3.276 1.591 5.392 1.592 5.448 0 9.886-4.434 9.889-9.885.002-5.462-4.415-9.89-9.881-9.892-5.452 0-9.887 4.434-9.889 9.884-.001 2.225.651 3.891 1.746 5.634l-.999 3.648 3.742-.981zm11.387-5.464c-.074-.124-.272-.198-.57-.347-.297-.149-1.758-.868-2.031-.967-.272-.099-.47-.149-.669.149-.198.297-.768.967-.941 1.165-.173.198-.347.223-.644.074-.297-.149-1.255-.462-2.39-1.475-.883-.788-1.48-1.761-1.653-2.059-.173-.297-.018-.458.13-.606.134-.133.297-.347.446-.521.151-.172.2-.296.3-.495.099-.198.05-.372-.025-.521-.075-.148-.669-1.611-.916-2.206-.242-.579-.487-.501-.669-.51l-.57-.01c-.198 0-.52.074-.792.372s-1.04 1.016-1.04 2.479 1.065 2.876 1.213 3.074c.149.198 2.095 3.2 5.076 4.487.709.306 1.263.489 1.694.626.712.226 1.36.194 1.872.118.571-.085 1.758-.719 2.006-1.413.248-.695.248-1.29.173-1.414z"/></svg>
          </div>
          <div>
            <p class="text-xs uppercase tracking-wider text-white/80 font-semibold">Quick Chat</p>
            <p class="text-base font-bold font-display leading-tight">WhatsApp Us</p>
          </div>
        </div>
        <p class="text-xs text-white/95 leading-relaxed mb-3">
          Questions about your stay? Chat with us directly — instant replies, no waiting.
        </p>
        <div class="inline-flex items-center gap-2 text-xs font-semibold bg-white/20 backdrop-blur-sm px-3 py-1.5 rounded-full group-hover:bg-white/30 transition-colors">
          Start Chat
          <svg class="w-3.5 h-3.5 group-hover:translate-x-1 transition-transform" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14 5l7 7m0 0l-7 7m7-7H3"/></svg>
        </div>
      </div>
    </a>

    <!-- Quick Booking Card -->
    <div class="bg-white border-2 border-amber-500 rounded-2xl shadow-lg p-5">
      <p class="text-xs uppercase tracking-wider text-amber-600 font-bold mb-1.5">Plan Your Stay</p>
      <h3 class="text-base font-bold text-stone-800 font-display mb-1.5 leading-snug">Ready to Book Your Villa?</h3>
      <p class="text-xs text-stone-600 leading-relaxed mb-4">
        Private pool villas in Lonavala — perfect for families, couples &amp; groups.
      </p>
      <a href="../villas.php" class="block w-full text-center bg-stone-900 hover:bg-stone-800 text-white font-semibold text-xs px-4 py-2.5 rounded-lg transition-colors mb-1.5">
        View Villas
      </a>
      <a href="../contact.php" class="block w-full text-center bg-amber-500 hover:bg-amber-600 text-white font-semibold text-xs px-4 py-2.5 rounded-lg transition-colors">
        Enquire Now
      </a>
    </div>

    <!-- Trust Badge -->
    <div class="bg-[#0F2A24] rounded-2xl p-5 text-center">
      <div class="flex justify-center gap-1 mb-1.5">
        <svg class="w-4 h-4 text-amber-400" fill="currentColor" viewBox="0 0 20 20"><path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.286 3.957a1 1 0 00.95.69h4.162c.969 0 1.371 1.24.588 1.81l-3.367 2.446a1 1 0 00-.364 1.118l1.287 3.957c.3.922-.755 1.688-1.54 1.118l-3.366-2.446a1 1 0 00-1.176 0l-3.367 2.446c-.783.57-1.838-.196-1.539-1.118l1.287-3.957a1 1 0 00-.364-1.118L2.063 9.384c-.784-.57-.38-1.81.588-1.81h4.162a1 1 0 00.95-.69l1.286-3.957z"/></svg>
        <svg class="w-4 h-4 text-amber-400" fill="currentColor" viewBox="0 0 20 20"><path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.286 3.957a1 1 0 00.95.69h4.162c.969 0 1.371 1.24.588 1.81l-3.367 2.446a1 1 0 00-.364 1.118l1.287 3.957c.3.922-.755 1.688-1.54 1.118l-3.366-2.446a1 1 0 00-1.176 0l-3.367 2.446c-.783.57-1.838-.196-1.539-1.118l1.287-3.957a1 1 0 00-.364-1.118L2.063 9.384c-.784-.57-.38-1.81.588-1.81h4.162a1 1 0 00.95-.69l1.286-3.957z"/></svg>
        <svg class="w-4 h-4 text-amber-400" fill="currentColor" viewBox="0 0 20 20"><path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.286 3.957a1 1 0 00.95.69h4.162c.969 0 1.371 1.24.588 1.81l-3.367 2.446a1 1 0 00-.364 1.118l1.287 3.957c.3.922-.755 1.688-1.54 1.118l-3.366-2.446a1 1 0 00-1.176 0l-3.367 2.446c-.783.57-1.838-.196-1.539-1.118l1.287-3.957a1 1 0 00-.364-1.118L2.063 9.384c-.784-.57-.38-1.81.588-1.81h4.162a1 1 0 00.95-.69l1.286-3.957z"/></svg>
        <svg class="w-4 h-4 text-amber-400" fill="currentColor" viewBox="0 0 20 20"><path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.286 3.957a1 1 0 00.95.69h4.162c.969 0 1.371 1.24.588 1.81l-3.367 2.446a1 1 0 00-.364 1.118l1.287 3.957c.3.922-.755 1.688-1.54 1.118l-3.366-2.446a1 1 0 00-1.176 0l-3.367 2.446c-.783.57-1.838-.196-1.539-1.118l1.287-3.957a1 1 0 00-.364-1.118L2.063 9.384c-.784-.57-.38-1.81.588-1.81h4.162a1 1 0 00.95-.69l1.286-3.957z"/></svg>
        <svg class="w-4 h-4 text-amber-400" fill="currentColor" viewBox="0 0 20 20"><path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.286 3.957a1 1 0 00.95.69h4.162c.969 0 1.371 1.24.588 1.81l-3.367 2.446a1 1 0 00-.364 1.118l1.287 3.957c.3.922-.755 1.688-1.54 1.118l-3.366-2.446a1 1 0 00-1.176 0l-3.367 2.446c-.783.57-1.838-.196-1.539-1.118l1.287-3.957a1 1 0 00-.364-1.118L2.063 9.384c-.784-.57-.38-1.81.588-1.81h4.162a1 1 0 00.95-.69l1.286-3.957z"/></svg>
      </div>
      <p class="text-white text-base font-bold font-display">4.9 / 5</p>
      <p class="text-white/70 text-xs mt-0.5">Trusted by 500+ happy guests</p>
    </div>
  </div>
</aside>
