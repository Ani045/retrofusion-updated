<?php
/**
 * Footer integration for WordPress blog
 */
?>

<!-- Add this part to your WordPress "Footer" (before </body>) or wp_footer hook -->

<footer class="bg-stone-900 text-stone-300 relative overflow-hidden">
  <!-- Main Footer Content -->
  <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-4 lg:py-6 relative z-10">

    <!-- Top Section - Brand & CTA -->
    <div class="flex flex-col lg:flex-row items-start lg:items-center justify-between gap-4 mb-4 pb-4 border-b border-white/10">
      <div class="flex-1">
        <img src="https://res.cloudinary.com/damfndmrm/image/upload/v1771665559/Retrofusion_logo__20260211_230238_0000_sufgcp.png" alt="Retrofusion Logo" class="w-40 sm:w-48 md:w-56 h-auto object-contain mb-4" />
        <p class="text-stone-400 max-w-md leading-relaxed text-sm">
          We are a homestay brand in the holiday capital of Maharashtra, Lonavala. We believe in creating a cozy
          hospitable tapestry for our clients, helping them realise the intimate joys of villa living.
        </p>
      </div>
      <div class="flex flex-col sm:flex-row items-start sm:items-center gap-4">
        <div class="flex items-center gap-2 text-amber-400">
          <!-- 5 Stars -->
          <svg class="w-5 h-5 fill-amber-400" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
            <polygon points="12 2 15.09 8.26 22 9.27 17 14.14 18.18 21.02 12 17.77 5.82 21.02 7 14.14 2 9.27 8.91 8.26 12 2"></polygon>
          </svg>
          <svg class="w-5 h-5 fill-amber-400" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
            <polygon points="12 2 15.09 8.26 22 9.27 17 14.14 18.18 21.02 12 17.77 5.82 21.02 7 14.14 2 9.27 8.91 8.26 12 2"></polygon>
          </svg>
          <svg class="w-5 h-5 fill-amber-400" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
            <polygon points="12 2 15.09 8.26 22 9.27 17 14.14 18.18 21.02 12 17.77 5.82 21.02 7 14.14 2 9.27 8.91 8.26 12 2"></polygon>
          </svg>
          <svg class="w-5 h-5 fill-amber-400" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
            <polygon points="12 2 15.09 8.26 22 9.27 17 14.14 18.18 21.02 12 17.77 5.82 21.02 7 14.14 2 9.27 8.91 8.26 12 2"></polygon>
          </svg>
          <svg class="w-5 h-5 fill-amber-400" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
            <polygon points="12 2 15.09 8.26 22 9.27 17 14.14 18.18 21.02 12 17.77 5.82 21.02 7 14.14 2 9.27 8.91 8.26 12 2"></polygon>
          </svg>
          <span class="text-white text-sm ml-2">500+ Happy Guests</span>
        </div>
        <a href="tel:+918999036644" class="px-6 py-3 bg-gradient-to-r from-amber-500 to-amber-600 hover:from-amber-600 hover:to-amber-700 text-white font-semibold rounded-full transition-all duration-300 shadow-lg hover:shadow-amber-500/25 text-sm flex items-center gap-2">
          <svg class="w-4 h-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
            <path d="M22 16.92v3a2 2 0 0 1-2.18 2 19.79 19.79 0 0 1-8.63-3.07 19.5 19.5 0 0 1-6-6 19.79 19.79 0 0 1-3.07-8.67A2 2 0 0 1 4.11 2h3a2 2 0 0 1 2 1.72 12.84 12.84 0 0 0 .7 2.81 2 2 0 0 1-.45 2.11L8.09 9.91a16 16 0 0 0 6 6l1.27-1.27a2 2 0 0 1 2.11-.45 12.84 12.84 0 0 0 2.81.7A2 2 0 0 1 22 16.92z"></path>
          </svg>
          Book Now
        </a>
      </div>
    </div>

    <!-- Middle Section - Links Grid -->
    <div class="grid grid-cols-2 md:grid-cols-4 lg:grid-cols-5 gap-6 lg:gap-8 mb-4">

      <!-- Contact Info -->
      <div class="col-span-2 md:col-span-1 lg:col-span-2">
        <h4 class="text-white font-bold mb-5 text-sm uppercase tracking-wider">Get in Touch</h4>
        <div class="space-y-4">
          <a href="tel:+918999036644" class="flex items-center gap-3 text-stone-400 hover:text-amber-400 transition-colors group">
            <div class="w-10 h-10 rounded-lg bg-white/5 group-hover:bg-amber-500/20 flex items-center justify-center transition-colors">
              <svg class="w-4 h-4 text-amber-500" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                <path d="M22 16.92v3a2 2 0 0 1-2.18 2 19.79 19.79 0 0 1-8.63-3.07 19.5 19.5 0 0 1-6-6 19.79 19.79 0 0 1-3.07-8.67A2 2 0 0 1 4.11 2h3a2 2 0 0 1 2 1.72 12.84 12.84 0 0 0 .7 2.81 2 2 0 0 1-.45 2.11L8.09 9.91a16 16 0 0 0 6 6l1.27-1.27a2 2 0 0 1 2.11-.45 12.84 12.84 0 0 0 2.81.7A2 2 0 0 1 22 16.92z"></path>
              </svg>
            </div>
            <div>
              <p class="text-xs text-stone-500">Call Us</p>
              <p class="text-sm text-white">+91 89990 36644</p>
            </div>
          </a>
          <a href="mailto:contact@retrofusion.in" class="flex items-center gap-3 text-stone-400 hover:text-amber-400 transition-colors group">
            <div class="w-10 h-10 rounded-lg bg-white/5 group-hover:bg-amber-500/20 flex items-center justify-center transition-colors">
              <svg class="w-4 h-4 text-amber-500" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                <path d="M4 4h16c1.1 0 2 .9 2 2v12c0 1.1-.9 2-2 2H4c-1.1 0-2-.9-2-2V6c0-1.1.9-2 2-2z"></path>
                <polyline points="22,6 12,13 2,6"></polyline>
              </svg>
            </div>
            <div>
              <p class="text-xs text-stone-500">Email Us</p>
              <p class="text-sm text-white">contact@retrofusion.in</p>
            </div>
          </a>
        </div>

        <!-- Social Icons -->
        <div class="flex gap-3 mt-6">
          <a href="https://www.instagram.com/retrofusion.in/" target="_blank" rel="noopener noreferrer" class="w-10 h-10 rounded-lg bg-white/5 hover:bg-gradient-to-br hover:from-purple-500 hover:to-pink-500 flex items-center justify-center transition-all duration-300">
            <svg class="w-5 h-5 text-white" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
              <rect x="2" y="2" width="20" height="20" rx="5" ry="5"></rect>
              <path d="M16 11.37A4 4 0 1 1 12.63 8 4 4 0 0 1 16 11.37z"></path>
              <line x1="17.5" y1="6.5" x2="17.51" y2="6.5"></line>
            </svg>
          </a>
          <a href="https://www.youtube.com/channel/UCuS96gjsWjyapsTCNIT1upA" target="_blank" rel="noopener noreferrer" class="w-10 h-10 rounded-lg bg-white/5 hover:bg-red-600 flex items-center justify-center transition-all duration-300">
            <svg class="w-5 h-5 text-white" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
              <path d="M22.54 6.42a2.78 2.78 0 0 0-1.94-2C18.88 4 12 4 12 4s-6.88 0-8.6.46a2.78 2.78 0 0 0-1.94 2A29 29 0 0 0 1 11.75a29 29 0 0 0 .46 5.33 2.78 2.78 0 0 0 1.94 2c1.72.46 8.6.46 8.6.46s6.88 0 8.6-.46a2.78 2.78 0 0 0 1.94-2 29 29 0 0 0 .46-5.33 29 29 0 0 0-.46-5.33z"></path>
              <polygon points="9.75 15.02 15.5 11.75 9.75 8.48 9.75 15.02"></polygon>
            </svg>
          </a>
          <a href="https://www.linkedin.com/in/retrofusion-boutique-homestays-lonavala/" target="_blank" rel="noopener noreferrer" class="w-10 h-10 rounded-lg bg-white/5 hover:bg-blue-700 flex items-center justify-center transition-all duration-300">
            <svg class="w-5 h-5 text-white" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
              <path d="M16 8a6 6 0 0 1 6 6v7h-4v-7a2 2 0 0 0-2-2 2 2 0 0 0-2 2v7h-4v-7a6 6 0 0 1 6-6z"></path>
              <rect x="2" y="9" width="4" height="12"></rect>
              <circle cx="4" cy="4" r="2"></circle>
            </svg>
          </a>
        </div>
      </div>

      <!-- Quick Links -->
      <div>
        <h4 class="text-white font-bold mb-5 text-sm uppercase tracking-wider">Quick Links</h4>
        <ul class="space-y-3">
          <li><a href="/" class="text-stone-400 hover:text-amber-400 transition-colors text-sm">Home</a></li>
          <li><a href="/about.php" class="text-stone-400 hover:text-amber-400 transition-colors text-sm">Our Story</a></li>
          <li><a href="/neo-retro" class="text-stone-400 hover:text-amber-400 transition-colors text-sm">Neo Retro Villa</a></li>
          <li><a href="/contact.php" class="text-stone-400 hover:text-amber-400 transition-colors text-sm">Contact Us</a></li>
        </ul>
      </div>

      <!-- Our Villas -->
      <div>
        <h4 class="text-white font-bold mb-5 text-sm uppercase tracking-wider">Our Villas</h4>
        <ul class="space-y-3">
          <li><a href="/retro-villas" class="text-stone-400 hover:text-amber-400 transition-colors text-sm">Retro Villa</a></li>
          <li><a href="/neo-retro" class="text-stone-400 hover:text-amber-400 transition-colors text-sm">Neo Retro</a></li>
          <li><a href="/retro-viswa-lonavala" class="text-stone-400 hover:text-amber-400 transition-colors text-sm">Retro Visawa</a></li>
        </ul>
      </div>

      <!-- Legal -->
      <div>
        <h4 class="text-white font-bold mb-5 text-sm uppercase tracking-wider">Legal</h4>
        <ul class="space-y-3">
          <li><a href="/cancellation-policy.php" class="text-stone-400 hover:text-amber-400 transition-colors text-sm">Cancellation Policy</a></li>
          <li><a href="/privacy-policy.php" class="text-stone-400 hover:text-amber-400 transition-colors text-sm">Privacy Policy</a></li>
          <li><a href="/terms-conditions.php" class="text-stone-400 hover:text-amber-400 transition-colors text-sm">Terms & Conditions</a></li>
        </ul>
      </div>
    </div>

    <!-- Maps Section -->
    <div class="mb-4 pt-6 border-t border-white/10">
      <h4 class="text-white font-bold mb-6 text-sm uppercase tracking-wider flex items-center gap-3">
        <svg class="w-5 h-5 text-amber-500" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
          <path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0 1 18 0z"></path>
          <circle cx="12" cy="10" r="3"></circle>
        </svg>
        Our Locations
      </h4>
      <div class="grid grid-cols-1 md:grid-cols-3 gap-4">
        <!-- Map 1 -->
        <div class="overflow-hidden">
          <div class="h-32 w-full rounded-xl overflow-hidden">
            <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d15109.873760341943!2d73.38454500000002!3d18.777266000000004!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3be801aa57c6135d%3A0x824b8eb6beb6dd96!2sRetro!5e0!3m2!1sen!2sin!4v1768252896855!5m2!1sen!2sin" width="100%" height="100%" style="border: 0" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
          </div>
          <p class="text-white text-sm mt-3">Retro Villa, Lonavala</p>
        </div>
        <!-- Map 2 -->
        <div class="overflow-hidden">
          <div class="h-32 w-full rounded-xl overflow-hidden">
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3777.8224756767913!2d73.40316217536163!3d18.7614649823795!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3be8012168808e5d%3A0xdf3e3ee6735ba0dd!2sNeo%20Retro%2C%20An%20Artist's%20Delight!5e0!3m2!1sen!2sin!4v1768253378393!5m2!1sen!2sin" width="100%" height="100%" style="border: 0" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
          </div>
          <p class="text-white text-sm mt-3">Neo Retro Villa, Lonavala</p>
        </div>
        <!-- Map 3 -->
        <div class="overflow-hidden">
          <div class="h-32 w-full rounded-xl overflow-hidden">
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3777.5261563188674!2d73.38618412536205!3d18.774690932368895!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3be8019b5d5ccae7%3A0xc6fc42bf9baf54a!2sRetro%20Visawa!5e0!3m2!1sen!2sin!4v1768252988545!5m2!1sen!2sin" width="100%" height="100%" style="border: 0" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
          </div>
          <p class="text-white text-sm mt-3">Retro Visawa, Lonavala</p>
        </div>
      </div>
    </div>

    <!-- Bottom Bar -->
    <div class="pt-4 border-t border-white/10">
      <div class="flex flex-col md:flex-row justify-between items-center gap-4">
        <p class="text-stone-500 text-xs text-center md:text-left">
          &copy; 2024 Retrofusion Boutique Homestays. All Rights Reserved.
        </p>
        <p class="text-stone-500 text-xs text-center md:text-right flex items-center gap-1">
          Designed with <span class="text-amber-500 text-base">♥</span> for Luxury Travelers
        </p>
      </div>
    </div>
  </div>
</footer>

<!-- WhatsApp Widget -->
<div id="whatsapp-widget-container">
  <div class="whatsapp-chat-button" onclick="window.open('https://api.whatsapp.com/send/?phone=%2B919011016791&text=Hi%2C+I+am+interested+in+your+booking+a+villa.', '_blank')" style="position:fixed; bottom:20px; left:20px; background:#25D366; color:white; padding:12px 20px; border-radius:25px; cursor:pointer; display:flex; align-items:center; gap:8px; box-shadow: 0 4px 12px rgba(37, 211, 102, 0.4); z-index:9999; font-family: sans-serif; font-weight: 500;">
    <svg width="20" height="20" viewBox="0 0 24 24" fill="white">
      <path d="M17.472 14.382c-.297-.149-1.758-.867-2.03-.967-.273-.099-.471-.148-.67.15-.197.297-.767.966-.94 1.164-.173.199-.347.223-.644.075-.297-.15-1.255-.463-2.39-1.475-.883-.788-1.48-1.761-1.653-2.059-.173-.297-.018-.458.13-.606.134-.133.298-.347.446-.52.149-.174.198-.298.298-.497.099-.198.05-.371-.025-.52-.075-.149-.669-1.612-.916-2.207-.242-.579-.487-.5-.669-.51-.173-.008-.371-.01-.57-.01-.198 0-.52.074-.792.372-.272.297-1.04 1.016-1.04 2.479 0 1.462 1.065 2.875 1.213 3.074.149.198 2.096 3.2 5.077 4.487.709.306 1.262.489 1.694.625.712.227 1.36.195 1.871.118.571-.085 1.758-.719 2.006-1.413.248-.694.248-1.289.173-1.413-.074-.124-.272-.198-.57-.347m-5.421 7.403h-.004a9.87 9.87 0 01-5.031-1.378l-.361-.214-3.741.982.998-3.648-.235-.374a9.86 9.86 0 01-1.51-5.26c.001-5.45 4.436-9.884 9.888-9.884 2.64 0 5.122 1.03 6.988 2.898a9.825 9.825 0 012.893 6.994c-.003 5.45-4.437 9.884-9.885 9.884m8.413-18.297A11.815 11.815 0 0012.05 0C5.495 0 .16 5.335.157 11.892c0 2.096.547 4.142 1.588 5.945L.057 24l6.305-1.654a11.882 11.882 0 005.683 1.448h.005c6.554 0 11.89-5.335 11.893-11.893A11.821 11.821 0 0020.465 3.516" />
    </svg>
    <span>Chat with Us</span>
  </div>
</div>

<!-- Essential JS for Menu Logic -->
<script>
document.addEventListener('DOMContentLoaded', () => {
    // Navbar Scroll Effect
    const nav = document.getElementById('navbar');
    const logo = document.getElementById('nav-logo');
    const navLinks = document.querySelectorAll('.nav-link');
    const mobileBtn = document.getElementById('mobile-menu-btn');

    window.addEventListener('scroll', () => {
        if (window.scrollY > 50) {
            nav.classList.add('nav-sticky');
            nav.classList.remove('bg-transparent');
            if (logo) logo.classList.remove('logo-white');
        } else {
            nav.classList.remove('nav-sticky');
            nav.classList.add('bg-transparent');
            if (logo) logo.classList.add('logo-white');
        }
    });

    // Mobile Menu Toggle
    const mobileMenu = document.getElementById('mobile-menu');
    const menuIcon = document.getElementById('menu-icon');
    const closeIcon = document.getElementById('close-icon');
    const mobileVillasBtn = document.getElementById('mobile-villas-btn');
    const mobileVillasPanel = document.getElementById('mobile-villas-panel');

    if (mobileBtn && mobileMenu) {
        mobileBtn.addEventListener('click', () => {
            const isHidden = mobileMenu.classList.contains('hidden');
            if (isHidden) {
                mobileMenu.classList.remove('hidden');
                setTimeout(() => {
                    mobileMenu.style.maxHeight = '1000px';
                    mobileMenu.style.opacity = '1';
                }, 10);
                menuIcon.classList.add('hidden');
                closeIcon.classList.remove('hidden');
            } else {
                mobileMenu.style.maxHeight = '0';
                mobileMenu.style.opacity = '0';
                setTimeout(() => mobileMenu.classList.add('hidden'), 300);
                menuIcon.classList.remove('hidden');
                closeIcon.classList.add('hidden');
            }
        });
    }

    if (mobileVillasBtn && mobileVillasPanel) {
        mobileVillasBtn.addEventListener('click', () => {
            const isClosed = mobileVillasPanel.style.maxHeight === '0px' || !mobileVillasPanel.style.maxHeight;
            if (isClosed) {
                mobileVillasPanel.style.maxHeight = mobileVillasPanel.scrollHeight + 'px';
                mobileVillasPanel.style.opacity = '1';
            } else {
                mobileVillasPanel.style.maxHeight = '0';
                mobileVillasPanel.style.opacity = '0';
            }
        });
    }

    // Mega Menu Robust Logic
    const villasDropdownBtn = document.getElementById('villas-dropdown-btn');
    const megaMenu = document.getElementById('mega-menu');

    if (villasDropdownBtn && megaMenu) {
        let megaMenuTimeout;

        function showMegaMenu() {
            clearTimeout(megaMenuTimeout);
            megaMenu.classList.add('active');
            // Small delay to trigger CSS transition
            setTimeout(() => {
                megaMenu.style.opacity = '1';
                megaMenu.style.transform = 'translateY(0)';
            }, 10);
        }

        function hideMegaMenu() {
            megaMenuTimeout = setTimeout(() => {
                megaMenu.style.opacity = '0';
                megaMenu.style.transform = 'translateY(-10px)';
                // Wait for transition to finish before hiding fully
                setTimeout(() => {
                    if (megaMenu.style.opacity === '0') {
                        megaMenu.classList.remove('active');
                    }
                }, 200);
            }, 300); // 300ms buffer to cross any gaps
        }

        villasDropdownBtn.addEventListener('mouseenter', showMegaMenu);
        villasDropdownBtn.addEventListener('mouseleave', hideMegaMenu);

        megaMenu.addEventListener('mouseenter', () => {
            clearTimeout(megaMenuTimeout);
        });
        megaMenu.addEventListener('mouseleave', hideMegaMenu);

        // Also handle click for mobile/touch
        villasDropdownBtn.addEventListener('click', (e) => {
            if (window.innerWidth >= 1024) { // Only on desktop
                e.preventDefault();
                const isActive = megaMenu.classList.contains('active') && megaMenu.style.opacity === '1';
                if (isActive) hideMegaMenu();
                else showMegaMenu();
            }
        });
    }
});
</script>
