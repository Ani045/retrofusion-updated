<?php
$pageTitle = "Retro Villa | Villas with Swimming Pool in Lonavala";
$pageDescription = "Discover Retro Villa, a unique villa in Lonavala with pool. Enjoy vintage luxury and cinema-inspired themes at one of the finest private pool villas in Lonavala.";
include 'includes/header.php';
?>

<!-- ===== HERO SECTION ===== -->
<section class="relative h-screen overflow-hidden">
  <video autoplay loop muted playsinline preload="auto" onloadeddata="this.play();"
    class="absolute inset-0 w-full h-full object-cover"
    poster="https://res.cloudinary.com/dprafk917/image/upload/v1770226533/N34_stewru.jpg">
    <source src="https://res.cloudinary.com/dprafk917/video/upload/v1770699275/Untitled_design_1_cner56.mp4"
      type="video/mp4" />
  </video>
  <div class="absolute inset-0 bg-gradient-to-b from-black/30 via-black/20 to-black/40"></div>
  <div class="relative z-10 h-full flex flex-col justify-center items-center px-4 sm:px-6 lg:px-8">
    <div class="max-w-4xl mx-auto text-center">
      <div class="space-y-4 sm:space-y-6 mb-8">
        <h1
          class="text-4xl sm:text-5xl md:text-6xl lg:text-7xl font-bold text-white leading-tight drop-shadow-2xl font-display">
          Retro Villa</h1>
        <p class="text-base sm:text-lg md:text-xl lg:text-2xl text-white/90 font-light max-w-2xl mx-auto">
          Experience one of the premium private pool villas in Lonavala for a vintage retreat</p>
        <p class="text-sm sm:text-base md:text-lg text-white font-light italic font-display">A
          Vintage Escape</p>
      </div>
      <a href="https://www.airbnb.co.in/rooms/53210949?locale=en&_set_bev_on_new_domain=1768230218_EAYTliZjZlOTUyNj&set_everest_cookie_on_new_domain=1768230218.EAODlhOWRiMDMwM3MwZT.Fby9Vq_Zkxe9N2U6b3exc6Pji4Mw2myla9vraPH5LDg&source_impression_id=p3_1771672147_P3DpcjpYbd-yrfgb"
        target="_blank"
        class="group bg-white hover:bg-white/90 text-stone-900 px-8 sm:px-10 py-3 sm:py-4 rounded-full text-base sm:text-lg font-medium transition-all duration-500 inline-flex items-center justify-center space-x-3 hover:scale-105 hover:shadow-2xl hover:shadow-white/30">
        <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
          <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
            d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z" />
        </svg>
        <span>Check Reviews on Airbnb</span>
      </a>
    </div>
  </div>
  <!-- <div class="absolute bottom-8 left-1/2 -translate-x-1/2 z-20">
        <div class="w-6 h-10 border-2 border-white/40 rounded-full flex justify-center pt-2">
          <div class="w-1.5 h-1.5 bg-amber-400 rounded-full animate-bounce"></div>
        </div>
      </div> -->
</section>

<!-- ===== ABOUT SECTION ===== -->
<section class="py-12 md:py-16 bg-white">
  <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
    <div class="grid grid-cols-1 lg:grid-cols-2 gap-8 lg:gap-16 mb-10 md:mb-14">
      <div>
        <div class="flex items-center space-x-2 mb-4">
          <svg class="w-5 h-5 text-amber-600" fill="currentColor" viewBox="0 0 24 24">
            <path
              d="M12 2C6.48 2 2 6.48 2 12s4.48 10 10 10 10-4.48 10-10S17.52 2 12 2zm-2 15l-5-5 1.41-1.41L10 14.17l7.59-7.59L19 8l-9 9z" />
          </svg>
          <span class="text-amber-600 text-sm font-medium uppercase tracking-wider">About Us</span>
        </div>
        <h2 class="text-3xl sm:text-4xl md:text-5xl font-bold text-[#0F2A24] leading-tight mb-6 font-display">
          Retro Villa: <span class="text-amber-600">A Vintage Escape</span></h2>
        <!-- View gallery button removed as requested -->
      </div>
      <div class="flex items-center">
        <p class="text-stone-600 text-base md:text-lg leading-relaxed">Relive timeless cinema moments at the best
          villa near Lonavala, with a private plunge pool and curated comforts that make it the best homestay near
          Mumbai. This villa is filled with vintage posters and charming details inspired by the golden era of
          Indian cinema.<br>
          <b>Every room has a story. Every corner sparks nostalgia.</b>
        </p>
      </div>
    </div>
    <div class="grid grid-cols-1 lg:grid-cols-2 gap-6 lg:gap-8">
      <div class="relative group overflow-hidden rounded-3xl">
        <img src="https://res.cloudinary.com/dprafk917/image/upload/v1770226533/N34_stewru.jpg"
          alt="Retro Villa Exterior"
          class="w-full h-[400px] md:h-[500px] object-cover transition-transform duration-700 group-hover:scale-105" />
      </div>
      <div class="grid grid-rows-2 gap-6">
        <div class="relative group overflow-hidden rounded-3xl">
          <img src="https://res.cloudinary.com/dprafk917/image/upload/v1769868140/B30_yc8rqu.webp"
            alt="Retro Villa Interior"
            class="w-full h-[190px] md:h-[235px] object-cover transition-transform duration-700 group-hover:scale-105" />
        </div>
        <div class="relative group overflow-hidden rounded-3xl">
          <img src="https://res.cloudinary.com/dprafk917/image/upload/v1769868143/M01_jjmwdw.webp"
            alt="Retro Villa Pool"
            class="w-full h-[190px] md:h-[235px] object-cover transition-transform duration-700 group-hover:scale-105" />
        </div>
      </div>
    </div>
  </div>
  <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 mt-10 md:mt-14 scroll-reveal">
    <div class="relative overflow-hidden rounded-3xl shadow-xl">
      <!-- Mobile Banner -->
      <img src="https://res.cloudinary.com/damfndmrm/image/upload/v1771657870/IMG_20260210_165137_zisu7q.jpg"
        alt="Retro Villa Features Mobile" class="block sm:hidden w-full h-auto object-cover" />
      <!-- Desktop Banner -->
      <img src="https://res.cloudinary.com/dprafk917/image/upload/v1771065916/Villa_banner_hyh4th.png"
        alt="Retro Villa Features Desktop" class="hidden sm:block w-full h-auto object-cover" />
    </div>
  </div>
</section>

<!-- ===== AMENITIES SECTION ===== -->
<section class="py-12 md:py-16 bg-white">
  <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
    <div class="text-center mb-14">
      <h2 class="text-3xl sm:text-4xl md:text-5xl font-bold text-[#0F2A24] leading-tight mb-4 font-display">
        Villa <span class="text-amber-600">Amenities</span></h2>
      <p class="text-stone-600 font-light text-lg">A timeless blend of retro charm and modern luxuries.
        Dive into nostalgia!</p>
    </div>
    <div class="grid grid-cols-2 md:grid-cols-4 gap-8 md:gap-10">
      <div class="text-center group">
        <div
          class="w-16 h-16 mx-auto mb-4 flex items-center justify-center text-amber-600 group-hover:text-amber-500 group-hover:scale-110 transition-all duration-300">
          <svg class="w-10 h-10" fill="none" stroke="currentColor" stroke-width="1.2" viewBox="0 0 24 24">
            <path stroke-linecap="round" stroke-linejoin="round"
              d="M2.036 12.322a1.012 1.012 0 010-.639C3.423 7.51 7.36 4.5 12 4.5c4.638 0 8.573 3.007 9.963 7.178.07.207.07.431 0 .639C20.577 16.49 16.64 19.5 12 19.5c-4.638 0-8.573-3.007-9.963-7.178z" />
            <path stroke-linecap="round" stroke-linejoin="round" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z" />
          </svg>
        </div>
        <h4 class="text-base font-semibold text-[#0F2A24] mb-1 font-display">Nostalgic Views</h4>
        <p class="text-sm text-stone-500">Mountain landscapes & Lonavala skyline from terrace</p>
      </div>
      <div class="text-center group">
        <div
          class="w-16 h-16 mx-auto mb-4 flex items-center justify-center text-amber-600 group-hover:text-amber-500 group-hover:scale-110 transition-all duration-300">
          <svg class="w-10 h-10" fill="none" stroke="currentColor" stroke-width="1.2" viewBox="0 0 24 24">
            <path stroke-linecap="round" stroke-linejoin="round"
              d="M12 6.042A8.967 8.967 0 006 3.75c-1.052 0-2.062.18-3 .512v14.25A8.987 8.987 0 016 18c2.305 0 4.408.867 6 2.292m0-14.25a8.966 8.966 0 016-2.292c1.052 0 2.062.18 3 .512v14.25A8.987 8.987 0 0018 18a8.967 8.967 0 00-6 2.292m0-14.25v14.25" />
          </svg>
        </div>
        <h4 class="text-base font-semibold text-[#0F2A24] mb-1 font-display">Timeless Luxury</h4>
        <p class="text-sm text-stone-500">Private pool, terrace & BBQ</p>
      </div>
      <div class="text-center group">
        <div
          class="w-16 h-16 mx-auto mb-4 flex items-center justify-center text-amber-600 group-hover:text-amber-500 group-hover:scale-110 transition-all duration-300">
          <svg class="w-10 h-10" fill="none" stroke="currentColor" stroke-width="1.2" viewBox="0 0 24 24">
            <path stroke-linecap="round" stroke-linejoin="round"
              d="M6 20.25h12m-7.5-3v3m3-3v3m-10.125-3h17.25c.621 0 1.125-.504 1.125-1.125V4.875c0-.621-.504-1.125-1.125-1.125H3.375c-.621 0-1.125.504-1.125 1.125v11.25c0 .621.504 1.125 1.125 1.125z" />
          </svg>
        </div>
        <h4 class="text-base font-semibold text-[#0F2A24] mb-1 font-display">Entertainment</h4>
        <p class="text-sm text-stone-500">60 Mbps WiFi, HDTV & OTT, Games</p>
      </div>
      <div class="text-center group">
        <div
          class="w-16 h-16 mx-auto mb-4 flex items-center justify-center text-amber-600 group-hover:text-amber-500 group-hover:scale-110 transition-all duration-300">
          <svg class="w-10 h-10" fill="none" stroke="currentColor" stroke-width="1.2" viewBox="0 0 24 24">
            <path stroke-linecap="round" stroke-linejoin="round"
              d="M21 8.25c0-2.485-2.099-4.5-4.688-4.5-1.935 0-3.597 1.126-4.312 2.733-.715-1.607-2.377-2.733-4.313-2.733C5.1 3.75 3 5.765 3 8.25c0 7.22 9 12 9 12s9-4.78 9-12z" />
          </svg>
        </div>
        <h4 class="text-base font-semibold text-[#0F2A24] mb-1 font-display">Pet-Friendly Villa</h4>
        <p class="text-sm text-stone-500">We cherish memories with furry friends</p>
      </div>
      <div class="text-center group">
        <div
          class="w-16 h-16 mx-auto mb-4 flex items-center justify-center text-amber-600 group-hover:text-amber-500 group-hover:scale-110 transition-all duration-300">
          <svg class="w-10 h-10" fill="none" stroke="currentColor" stroke-width="1.2" viewBox="0 0 24 24">
            <path stroke-linecap="round" stroke-linejoin="round"
              d="M2.25 12l8.954-8.955c.44-.439 1.152-.439 1.591 0L21.75 12M4.5 9.75v10.125c0 .621.504 1.125 1.125 1.125H9.75v-4.875c0-.621.504-1.125 1.125-1.125h2.25c.621 0 1.125.504 1.125 1.125V21h4.125c.621 0 1.125-.504 1.125-1.125V9.75M8.25 21h8.25" />
          </svg>
        </div>
        <h4 class="text-base font-semibold text-[#0F2A24] mb-1 font-display">Vintage Bedrooms</h4>
        <p class="text-sm text-stone-500">Classic themed rooms</p>
      </div>
      <div class="text-center group">
        <div
          class="w-16 h-16 mx-auto mb-4 flex items-center justify-center text-amber-600 group-hover:text-amber-500 group-hover:scale-110 transition-all duration-300">
          <svg class="w-10 h-10" fill="none" stroke="currentColor" stroke-width="1.2" viewBox="0 0 24 24">
            <path stroke-linecap="round" stroke-linejoin="round"
              d="M12 6.042A8.967 8.967 0 006 3.75c-1.052 0-2.062.18-3 .512v14.25A8.987 8.987 0 016 18c2.305 0 4.408.867 6 2.292m0-14.25a8.966 8.966 0 016-2.292c1.052 0 2.062.18 3 .512v14.25A8.987 8.987 0 0018 18a8.967 8.967 0 00-6 2.292m0-14.25v14.25" />
          </svg>
        </div>
        <h4 class="text-base font-semibold text-[#0F2A24] mb-1 font-display">Small Library</h4>
        <p class="text-sm text-stone-500">Books & board games</p>
      </div>
      <div class="text-center group">
        <div
          class="w-16 h-16 mx-auto mb-4 flex items-center justify-center text-amber-600 group-hover:text-amber-500 group-hover:scale-110 transition-all duration-300">
          <svg class="w-10 h-10" fill="none" stroke="currentColor" stroke-width="1.2" viewBox="0 0 24 24">
            <path stroke-linecap="round" stroke-linejoin="round" d="M15 10.5a3 3 0 11-6 0 3 3 0 016 0z" />
            <path stroke-linecap="round" stroke-linejoin="round"
              d="M19.5 10.5c0 7.142-7.5 11.25-7.5 11.25S4.5 17.642 4.5 10.5a7.5 7.5 0 1115 0z" />
          </svg>
        </div>
        <h4 class="text-base font-semibold text-[#0F2A24] mb-1 font-display">Khandala Charm</h4>
        <p class="text-sm text-stone-500">Vintage spots & classic cafes</p>
      </div>
      <div class="text-center group">
        <div
          class="w-16 h-16 mx-auto mb-4 flex items-center justify-center text-amber-600 group-hover:text-amber-500 group-hover:scale-110 transition-all duration-300">
          <svg class="w-10 h-10" fill="none" stroke="currentColor" stroke-width="1.2" viewBox="0 0 24 24">
            <path stroke-linecap="round" stroke-linejoin="round"
              d="M8.25 18.75a1.5 1.5 0 01-3 0m3 0a1.5 1.5 0 00-3 0m3 0h6m-9 0H3.375a1.125 1.125 0 01-1.125-1.125V14.25m17.25 4.5a1.5 1.5 0 01-3 0m3 0a1.5 1.5 0 00-3 0m3 0h1.125c.621 0 1.125-.504 1.125-1.125V5.25c0-.621-.504-1.125-1.125-1.125H6c-.621 0-1.125.504-1.125 1.125v3.78m0 0v8.72M18 6.75v12" />
          </svg>
        </div>
        <h4 class="text-base font-semibold text-[#0F2A24] mb-1 font-display">Easy Access</h4>
        <p class="text-sm text-stone-500">Local transport hubs nearby</p>
      </div>
    </div>
  </div>
</section>

<!-- ===== BENTO GALLERY PLACEHOLDER ===== -->
<!-- ===== GALLERY SECTION ===== -->
<section id="gallery" class="py-12 md:py-16 bg-[#F4EFEA]">
  <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
    <div class="text-center mb-12">
      <h2 class="text-3xl sm:text-4xl md:text-5xl font-bold text-[#0F2A24] leading-tight mb-4 font-display">
        Villa <span class="text-amber-600">Gallery</span></h2>
      <p class="text-stone-600 font-light text-lg">A visual journey through classic charm</p>
    </div>

    <!-- Bento Gallery Container -->
    <div class="relative">
      <div id="bento-grid"
        class="grid grid-cols-2 md:grid-cols-4 gap-3 md:gap-4 h-[400px] md:h-[450px] transition-opacity duration-500">
        <!-- Image 1 -->
        <div
          class="relative overflow-hidden group cursor-pointer col-span-2 md:col-span-2 row-span-1 md:row-span-2 rounded-2xl shadow-lg"
          onclick="openLightbox(0)">
          <img src="https://res.cloudinary.com/dprafk917/image/upload/v1770226533/N34_stewru.jpg"
            class="absolute inset-0 w-full h-full object-cover transition-transform duration-700 group-hover:scale-105"
            alt="Villa View 1">
          <div
            class="absolute inset-0 bg-black/0 group-hover:bg-black/30 transition-colors duration-300 flex items-center justify-center">
            <div class="opacity-0 group-hover:opacity-100 transition-opacity duration-300">
              <div
                class="w-10 h-10 md:w-12 md:h-12 bg-white/20 backdrop-blur-sm rounded-full flex items-center justify-center">
                <svg class="w-5 h-5 md:w-6 md:h-6 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                  <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                    d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0zM10 7v3m0 0v3m0-3h3m-3 0H7" />
                </svg>
              </div>
            </div>
          </div>
        </div>
        <!-- Image 2 -->
        <div
          class="relative overflow-hidden group cursor-pointer col-span-2 md:col-span-2 row-span-1 md:row-span-1 rounded-2xl shadow-lg hidden md:block"
          onclick="openLightbox(1)">
          <img src="https://res.cloudinary.com/dprafk917/image/upload/v1769868140/B30_yc8rqu.webp"
            class="absolute inset-0 w-full h-full object-cover transition-transform duration-700 group-hover:scale-105"
            alt="Villa View 2">
          <div
            class="absolute inset-0 bg-black/0 group-hover:bg-black/30 transition-colors duration-300 flex items-center justify-center">
            <div class="opacity-0 group-hover:opacity-100 transition-opacity duration-300">
              <div
                class="w-10 h-10 md:w-12 md:h-12 bg-white/20 backdrop-blur-sm rounded-full flex items-center justify-center">
                <svg class="w-5 h-5 md:w-6 md:h-6 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                  <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                    d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0zM10 7v3m0 0v3m0-3h3m-3 0H7" />
                </svg>
              </div>
            </div>
          </div>
        </div>
        <!-- Image 3 -->
        <div
          class="relative overflow-hidden group cursor-pointer col-span-1 md:col-span-1 row-span-1 md:row-span-1 rounded-2xl shadow-lg"
          onclick="openLightbox(2)">
          <img src="https://res.cloudinary.com/dprafk917/image/upload/v1769868140/C26_j6pstx.webp"
            class="absolute inset-0 w-full h-full object-cover transition-transform duration-700 group-hover:scale-105"
            alt="Villa View 3">
          <div
            class="absolute inset-0 bg-black/0 group-hover:bg-black/30 transition-colors duration-300 flex items-center justify-center">
            <div class="opacity-0 group-hover:opacity-100 transition-opacity duration-300">
              <div
                class="w-10 h-10 md:w-12 md:h-12 bg-white/20 backdrop-blur-sm rounded-full flex items-center justify-center">
                <svg class="w-5 h-5 md:w-6 md:h-6 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                  <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                    d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0zM10 7v3m0 0v3m0-3h3m-3 0H7" />
                </svg>
              </div>
            </div>
          </div>
        </div>
        <!-- Image 4 -->
        <div
          class="relative overflow-hidden group cursor-pointer col-span-1 md:col-span-1 row-span-1 md:row-span-1 rounded-2xl shadow-lg"
          onclick="openLightbox(3)">
          <img src="https://res.cloudinary.com/dprafk917/image/upload/v1769868140/05_ivb2yz.webp"
            class="absolute inset-0 w-full h-full object-cover transition-transform duration-700 group-hover:scale-105"
            alt="Villa View 4">
          <div
            class="absolute inset-0 bg-black/0 group-hover:bg-black/30 transition-colors duration-300 flex items-center justify-center">
            <div class="opacity-0 group-hover:opacity-100 transition-opacity duration-300">
              <div
                class="w-10 h-10 md:w-12 md:h-12 bg-white/20 backdrop-blur-sm rounded-full flex items-center justify-center">
                <svg class="w-5 h-5 md:w-6 md:h-6 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                  <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                    d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0zM10 7v3m0 0v3m0-3h3m-3 0H7" />
                </svg>
              </div>
            </div>
          </div>
        </div>
      </div>

      <!-- Indicators -->
      <div class="flex justify-center mt-6 space-x-3" id="gallery-indicators">
        <button onclick="setGallerySet(0)"
          class="h-2 rounded-full transition-all duration-500 bg-amber-600 w-8"></button>
        <button onclick="setGallerySet(1)"
          class="h-2 rounded-full transition-all duration-500 bg-stone-300 hover:bg-stone-400 w-2"></button>
        <button onclick="setGallerySet(2)"
          class="h-2 rounded-full transition-all duration-500 bg-stone-300 hover:bg-stone-400 w-2"></button>
        <button onclick="setGallerySet(3)"
          class="h-2 rounded-full transition-all duration-500 bg-stone-300 hover:bg-stone-400 w-2"></button>
      </div>
    </div>
  </div>
</section>

<!-- ===== CONTACT & BOOKING SECTION ===== -->
<section class="py-12 md:py-16 bg-gradient-to-br from-stone-100 via-white to-amber-50">
  <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
    <div class="text-center mb-14">
      <div class="flex items-center justify-center space-x-2 mb-4">
        <div class="w-8 h-[2px] bg-amber-600"></div>
        <span class="text-amber-600 text-sm font-medium uppercase tracking-wider">Get in Touch</span>
        <div class="w-8 h-[2px] bg-amber-600"></div>
      </div>
      <h2 class="text-3xl sm:text-4xl md:text-5xl font-bold text-[#0F2A24] leading-tight mb-4 font-display">
        Book Your <span class="text-amber-600">Stay</span></h2>
      <p class="text-stone-600 font-light text-lg max-w-2xl mx-auto">Reserve your classic retreat at Retro
        Villa. We'd love to host you.</p>
    </div>
    <div class="grid grid-cols-1 lg:grid-cols-2 gap-8 lg:gap-12">
      <div class="bg-white rounded-3xl shadow-2xl p-8 lg:p-10 border border-stone-200/50">
        <div class="mb-8">
          <h3 class="text-2xl font-bold text-[#0F2A24] mb-2 font-display">Reserve Your Villa</h3>
          <p class="text-stone-500 text-sm">Fill in your details and we'll get back to you shortly</p>
        </div>
        <form class="space-y-5">
          <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
            <div>
              <label class="block text-xs font-semibold text-stone-700 mb-2 uppercase tracking-wide">Full
                Name *</label>
              <input type="text" name="name" required
                class="w-full px-4 py-3 text-sm border border-stone-300 rounded-xl focus:ring-2 focus:ring-amber-500 focus:border-transparent transition-all outline-none bg-[#F4EFEA]/50 hover:bg-white"
                placeholder="Your name" />
            </div>
            <div>
              <label class="block text-xs font-semibold text-stone-700 mb-2 uppercase tracking-wide">Email
                Address *</label>
              <input type="email" name="email" required
                class="w-full px-4 py-3 text-sm border border-stone-300 rounded-xl focus:ring-2 focus:ring-amber-500 focus:border-transparent transition-all outline-none bg-[#F4EFEA]/50 hover:bg-white"
                placeholder="your@email.com" />
            </div>
          </div>
          <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
            <div>
              <label class="block text-xs font-semibold text-stone-700 mb-2 uppercase tracking-wide">Phone
                Number</label>
              <input type="tel" name="phone"
                class="w-full px-4 py-3 text-sm border border-stone-300 rounded-xl focus:ring-2 focus:ring-amber-500 focus:border-transparent transition-all outline-none bg-[#F4EFEA]/50 hover:bg-white"
                placeholder="+91 98765 43210" />
            </div>
            <div>
              <label class="block text-xs font-semibold text-stone-700 mb-2 uppercase tracking-wide">Number
                of Guests</label>
              <select name="guests"
                class="w-full px-4 py-3 text-sm border border-stone-300 rounded-xl focus:ring-2 focus:ring-amber-500 focus:border-transparent transition-all outline-none bg-[#F4EFEA]/50 hover:bg-white">
                <option value="">Select guests</option>
                <option value="2-4">2-4 Guests</option>
                <option value="5-8">5-8 Guests</option>
                <option value="9-12">9-12 Guests</option>
                <option value="13+">13+ Guests</option>
              </select>
            </div>
          </div>
          <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
            <div>
              <label class="block text-xs font-semibold text-stone-700 mb-2 uppercase tracking-wide">Check-in
                Date</label>
              <input type="date" name="checkIn"
                class="w-full px-4 py-3 text-sm border border-stone-300 rounded-xl focus:ring-2 focus:ring-amber-500 focus:border-transparent transition-all outline-none bg-[#F4EFEA]/50 hover:bg-white" />
            </div>
            <div>
              <label class="block text-xs font-semibold text-stone-700 mb-2 uppercase tracking-wide">Check-out
                Date</label>
              <input type="date" name="checkOut"
                class="w-full px-4 py-3 text-sm border border-stone-300 rounded-xl focus:ring-2 focus:ring-amber-500 focus:border-transparent transition-all outline-none bg-[#F4EFEA]/50 hover:bg-white" />
            </div>
          </div>
          <div>
            <label class="block text-xs font-semibold text-stone-700 mb-2 uppercase tracking-wide">Preferred
              Villa</label>
            <select name="villa"
              class="w-full px-4 py-3 text-sm border border-stone-300 rounded-xl focus:ring-2 focus:ring-amber-500 focus:border-transparent transition-all outline-none bg-[#F4EFEA]/50 hover:bg-white">
              <option value="">Any villa</option>
              <option value="retro-villa" selected>Retro Villa</option>
              <option value="neo-retro">Neo Retro</option>
              <option value="retro-viswa">Retro Visawa</option>
            </select>
          </div>
          <div>
            <label class="block text-xs font-semibold text-stone-700 mb-2 uppercase tracking-wide">Message</label>
            <textarea name="message" rows="3"
              class="w-full px-4 py-3 text-sm border border-stone-300 rounded-xl focus:ring-2 focus:ring-amber-500 focus:border-transparent transition-all outline-none resize-none bg-[#F4EFEA]/50 hover:bg-white"
              placeholder="Tell us about your requirements..."></textarea>
          </div>
          <button type="submit"
            class="w-full py-4 bg-gradient-to-r from-amber-600 to-amber-700 hover:from-amber-700 hover:to-amber-800 text-white font-bold text-sm rounded-xl shadow-lg hover:shadow-xl transition-all duration-300 uppercase tracking-wider flex items-center justify-center space-x-2">
            <span>Send Enquiry</span>
            <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14 5l7 7m0 0l-7 7m7-7H3" />
            </svg>
          </button>
        </form>
      </div>
      <div class="space-y-6">
        <div class="bg-gradient-to-br from-stone-900 via-stone-800 to-stone-900 rounded-3xl p-8 shadow-2xl">
          <h3 class="text-2xl font-bold text-white mb-6 font-display">Contact <span
              class="text-amber-400">Information</span></h3>
          <div class="space-y-5">
            <a href="tel:+918999036644" class="flex items-center gap-4 group">
              <div
                class="flex-shrink-0 w-12 h-12 bg-gradient-to-br from-amber-500 to-amber-600 rounded-xl flex items-center justify-center shadow-lg group-hover:scale-110 transition-transform duration-300">
                <svg class="w-5 h-5 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                  <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                    d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z" />
                </svg>
              </div>
              <div>
                <p class="text-amber-400 text-xs uppercase tracking-wider mb-1">Phone</p>
                <p class="text-white font-medium text-lg group-hover:text-amber-300 transition-colors">
                  +91 89990 36644</p>
              </div>
            </a>
            <a href="mailto:contact@retrofusion.in" class="flex items-center gap-4 group">
              <div
                class="flex-shrink-0 w-12 h-12 bg-gradient-to-br from-amber-500 to-amber-600 rounded-xl flex items-center justify-center shadow-lg group-hover:scale-110 transition-transform duration-300">
                <svg class="w-5 h-5 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                  <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                    d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z" />
                </svg>
              </div>
              <div>
                <p class="text-amber-400 text-xs uppercase tracking-wider mb-1">Email</p>
                <p class="text-white font-medium text-lg group-hover:text-amber-300 transition-colors">
                  contact@retrofusion.in</p>
              </div>
            </a>
            <div class="flex items-center gap-4">
              <div
                class="flex-shrink-0 w-12 h-12 bg-gradient-to-br from-amber-500 to-amber-600 rounded-xl flex items-center justify-center shadow-lg">
                <svg class="w-5 h-5 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                  <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                    d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z" />
                  <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                    d="M15 11a3 3 0 11-6 0 3 3 0 016 0z" />
                </svg>
              </div>
              <div>
                <p class="text-amber-400 text-xs uppercase tracking-wider mb-1">Address</p>
                <p class="text-white font-medium text-lg">Lonavala, Maharashtra, India</p>
              </div>
            </div>
          </div>
          <div class="mt-8 pt-6 border-t border-stone-700">
            <p class="text-stone-400 text-sm italic">"Step back in time and experience classic
              elegance at Retro Villa"</p>
          </div>
        </div>
        <div class="rounded-3xl overflow-hidden shadow-2xl border-4 border-white h-[280px] lg:h-[300px]">
          <iframe
            src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d60463.39696820842!2d73.36854705!3d18.7564659!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3be801153de5c8d9%3A0x33b9c7df5e4a0f4e!2sLonavala%2C%20Maharashtra!5e0!3m2!1sen!2sin!4v1704067200000!5m2!1sen!2sin"
            width="100%" height="100%" style="border:0;" allowfullscreen="" loading="lazy"
            referrerpolicy="no-referrer-when-downgrade" title="Retro Villa Location"></iframe>
        </div>
      </div>
    </div>
  </div>
</section>

<!-- ===== FAQ & CTA SECTION ===== -->
<section class="relative py-12 md:py-14 overflow-hidden">
  <div class="absolute inset-0">
    <img src="https://res.cloudinary.com/dprafk917/image/upload/v1769868142/G31_mdlfjh.webp"
      alt="Retro Villa Background" class="w-full h-full object-cover" />
    <div class="absolute inset-0 bg-gradient-to-r from-black/70 via-black/60 to-black/50"></div>
  </div>
  <div class="relative z-10 max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
    <div class="grid grid-cols-1 lg:grid-cols-2 gap-8 lg:gap-12 items-center">
      <div class="scroll-reveal-left">
        <h2 class="text-2xl sm:text-3xl font-bold text-white mb-6 font-display">Frequently Asked <span
            class="text-amber-400">Questions</span></h2>
        <div class="space-y-3">
          <!-- FAQ Item 1 -->
          <div class="bg-white/10 backdrop-blur-sm rounded-xl border border-white/10 overflow-hidden">
            <button onclick="toggleFAQ(this)"
              class="w-full px-5 py-4 flex items-center justify-between text-left hover:bg-white/5 transition-colors">
              <h3 class="text-base font-medium text-white pr-4 font-display">What is the check-in
                and check-out time?</h3>
              <svg class="w-4 h-4 text-white/60 flex-shrink-0 transition-transform duration-200" fill="none"
                stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7" />
              </svg>
            </button>
            <div class="faq-content h-0 overflow-hidden transition-all duration-200 opacity-0">
              <p class="px-5 pb-4 text-stone-300 text-sm leading-relaxed">Check-in is at 2:00 PM
                and check-out is at 11:00 AM. Early check-in and late check-out can be arranged
                subject to availability.</p>
            </div>
          </div>
          <!-- FAQ Item 2 -->
          <div class="bg-white/10 backdrop-blur-sm rounded-xl border border-white/10 overflow-hidden">
            <button onclick="toggleFAQ(this)"
              class="w-full px-5 py-4 flex items-center justify-between text-left hover:bg-white/5 transition-colors">
              <h3 class="text-base font-medium text-white pr-4 font-display">What makes Retro
                Villa special?</h3>
              <svg class="w-4 h-4 text-white/60 flex-shrink-0 transition-transform duration-200" fill="none"
                stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7" />
              </svg>
            </button>
            <div class="faq-content h-0 overflow-hidden transition-all duration-200 opacity-0">
              <p class="px-5 pb-4 text-stone-300 text-sm leading-relaxed">Retro Villa features
                authentic vintage décor, period furnishings, and classic design elements that
                transport you to a bygone era while maintaining modern comfort standards.</p>
            </div>
          </div>
          <!-- FAQ Item 3 -->
          <div class="bg-white/10 backdrop-blur-sm rounded-xl border border-white/10 overflow-hidden">
            <button onclick="toggleFAQ(this)"
              class="w-full px-5 py-4 flex items-center justify-between text-left hover:bg-white/5 transition-colors">
              <h3 class="text-base font-medium text-white pr-4 font-display">Are pets allowed?
              </h3>
              <svg class="w-4 h-4 text-white/60 flex-shrink-0 transition-transform duration-200" fill="none"
                stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7" />
              </svg>
            </button>
            <div class="faq-content h-0 overflow-hidden transition-all duration-200 opacity-0">
              <p class="px-5 pb-4 text-stone-300 text-sm leading-relaxed">We welcome well-behaved
                pets with prior approval. Additional charges may apply for pet accommodation.
              </p>
            </div>
          </div>
          <!-- FAQ Item 4 -->
          <div class="bg-white/10 backdrop-blur-sm rounded-xl border border-white/10 overflow-hidden">
            <button onclick="toggleFAQ(this)"
              class="w-full px-5 py-4 flex items-center justify-between text-left hover:bg-white/5 transition-colors">
              <h3 class="text-base font-medium text-white pr-4 font-display">What amenities are
                included?</h3>
              <svg class="w-4 h-4 text-white/60 flex-shrink-0 transition-transform duration-200" fill="none"
                stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7" />
              </svg>
            </button>
            <div class="faq-content h-0 overflow-hidden transition-all duration-200 opacity-0">
              <p class="px-5 pb-4 text-stone-300 text-sm leading-relaxed">Your stay includes
                access to all villa amenities, complimentary WiFi, parking, and 24/7 support.
                The villa features vintage-inspired interiors and classic furnishings.</p>
            </div>
          </div>
        </div>
      </div>
      <div class="scroll-reveal-right">
        <div class="bg-white/10 backdrop-blur-md rounded-2xl p-5 border border-white/20">
          <div class="text-center mb-4">
            <h3 class="text-xl font-bold text-white mb-1 font-display">Ready to Book?</h3>
            <p class="text-stone-300 text-sm">Experience timeless elegance at Retro Villa</p>
          </div>
          <div class="space-y-2">
            <a href="tel:+918999036644"
              class="px-8 py-3 bg-gradient-to-r from-amber-500 to-amber-600 hover:from-amber-600 hover:to-amber-700 text-white font-bold text-sm rounded-xl shadow-lg transition-all duration-300 flex items-center justify-center space-x-2">
              <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                  d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z" />
              </svg>
              <span>Call to Book Now</span>
            </a>
            <a href="contact.php"
              class="px-8 py-3 bg-white/10 hover:bg-white/20 text-white font-semibold text-sm rounded-xl border border-white/30 transition-all duration-300 flex items-center justify-center space-x-2">
              <span>Send Enquiry</span>
            </a>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>


<!-- ===== FOLLOW US SECTION ===== -->
<section class="py-20 bg-[#0F2A24] relative overflow-hidden flex flex-col items-center justify-center">
  <!-- Decorative Background Elements -->
  <div class="absolute top-0 left-0 w-full h-full overflow-hidden pointer-events-none">
    <div class="absolute -top-[20%] -left-[10%] w-[50%] h-[50%] rounded-full bg-amber-900/10 blur-3xl"></div>
    <div class="absolute -bottom-[20%] -right-[10%] w-[50%] h-[50%] rounded-full bg-emerald-900/20 blur-3xl"></div>
  </div>

  <div class="relative z-10 max-w-5xl mx-auto px-4 sm:px-6 lg:px-8 text-center flex flex-col items-center w-full">
    <!-- Title -->
    <h2 class="text-6xl md:text-8xl text-[#F4EFEA] mb-12 tracking-wide drop-shadow-md"
      style="font-family: 'Dancing Script', cursive;">
      Follow us!
    </h2>

    <!-- Main Content Area -->
    <div class="flex flex-col md:flex-row items-center justify-center gap-12 lg:gap-20 w-full max-w-6xl mx-auto">
      <!-- Phone Mockup Container (Left on Desktop, Center on Mobile) -->
      <div class="relative w-[280px] sm:w-[320px] md:w-[360px] mx-auto md:mx-0 group mt-4 md:mt-0 flex-shrink-0">
        <!-- vibrant gradient border mimicking the Instagram story/post border from user design -->
        <div
          class="absolute -inset-[3px] md:-inset-1.5 bg-gradient-to-tr from-amber-400 via-orange-500 to-purple-600 rounded-[2.8rem] md:rounded-[3rem] opacity-90 blur-[2px] group-hover:blur-[6px] transition-all duration-300">
        </div>

        <!-- Phone Body -->
        <div
          class="bg-black rounded-[2.5rem] md:rounded-[2.8rem] overflow-hidden relative shadow-2xl h-[560px] sm:h-[650px] flex flex-col border-[5px] md:border-[6px] border-black/90 z-10 w-full transform transition-transform duration-500 group-hover:scale-[1.01]">

          <!-- Dynamic Island/Notch -->
          <div class="absolute top-2 inset-x-0 z-20 flex justify-center w-full">
            <div class="w-24 sm:w-28 h-6 sm:h-7 bg-black rounded-full flex items-center justify-between px-2">
              <div class="w-1.5 h-1.5 sm:w-2 sm:h-2 rounded-full bg-white/20"></div>
              <div class="w-1.5 h-1.5 sm:w-2 sm:h-2 rounded-full bg-white/10"></div>
            </div>
          </div>

          <!-- Phone Screen -->
          <div
            class="w-full h-full bg-[#121212] relative rounded-[2rem] md:rounded-[2.2rem] overflow-x-hidden overflow-y-auto group/screen cursor-pointer hide-scrollbar-custom"
            style="scrollbar-width: none; -ms-overflow-style: none;">
            <style>
              .hide-scrollbar-custom::-webkit-scrollbar {
                display: none;
              }
            </style>
            <!-- Screenshot uploaded by user -->
            <div class="pt-9 sm:pt-11 w-full flex flex-col items-center">
              <a href="https://www.instagram.com/retrofusion.in/" target="_blank" class="w-full">
                <img
                  src="https://res.cloudinary.com/damfndmrm/image/upload/v1772471878/Screenshot_2026-03-02_at_10.47.42_PM_wo3toj.png"
                  alt="Instagram Profile Screenshot"
                  class="w-full h-auto block opacity-95 transition-opacity duration-300 group-hover/screen:opacity-100" />
              </a>
            </div>
          </div>
        </div>
      </div>

      <!-- Desktop Instagram Grid (Right side) -->
      <div class="hidden md:grid grid-cols-2 gap-6 w-full max-w-[540px]">

        <!-- Post 1 -->
        <a href="https://www.instagram.com/retrofusion.in/" target="_blank"
          class="group block transform hover:-translate-y-2 transition-all duration-500">
          <div
            class="bg-[#F4EFEA] rounded-2xl overflow-hidden shadow-xl group-hover:shadow-2xl transition-shadow duration-300">
            <!-- Header -->
            <div class="flex items-center justify-between px-3 py-2.5">
              <div class="flex items-center gap-2">
                <div class="w-7 h-7 rounded-full bg-amber-600 flex items-center justify-center"><svg
                    class="w-4 h-4 text-white" fill="currentColor" viewBox="0 0 24 24">
                    <path
                      d="M12 12c2.21 0 4-1.79 4-4s-1.79-4-4-4-4 1.79-4 4 1.79 4 4 4zm0 2c-2.67 0-8 1.34-8 4v2h16v-2c0-2.66-5.33-4-8-4z" />
                  </svg></div>
                <span class="text-[#0F2A24] text-xs font-semibold">retrofusion.in</span>
              </div>
              <span
                class="text-[10px] font-bold text-amber-600 border border-amber-600 rounded px-1.5 py-0.5">FOLLOW</span>
            </div>
            <!-- Image with amber border -->
            <div class="mx-2.5 mb-2 border-[3px] border-amber-600 rounded-lg overflow-hidden">
              <img
                src="https://res.cloudinary.com/dprafk917/image/upload/v1772473164/Screenshot_2026-03-02_at_11.08.01_PM_a5g0vs.png"
                alt="Instagram Post"
                class="w-full aspect-square object-cover transition-transform duration-700 group-hover:scale-105" />
            </div>
            <!-- Actions -->
            <div class="px-3 pb-2.5">
              <div class="flex items-center justify-between mb-1.5">
                <div class="flex items-center gap-3">
                  <svg class="w-5 h-5 text-amber-600" fill="currentColor" viewBox="0 0 24 24">
                    <path
                      d="M12 21.35l-1.45-1.32C5.4 15.36 2 12.28 2 8.5 2 5.42 4.42 3 7.5 3c1.74 0 3.41.81 4.5 2.09C13.09 3.81 14.76 3 16.5 3 19.58 3 22 5.42 22 8.5c0 3.78-3.4 6.86-8.55 11.54L12 21.35z" />
                  </svg>
                  <svg class="w-5 h-5 text-[#0F2A24]" fill="none" stroke="currentColor" stroke-width="2"
                    viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round"
                      d="M8 12h.01M12 12h.01M16 12h.01M21 12c0 4.418-4.03 8-9 8a9.863 9.863 0 01-4.255-.949L3 20l1.395-3.72C3.512 15.042 3 13.574 3 12c0-4.418 4.03-8 9-8s9 3.582 9 8z" />
                  </svg>
                  <svg class="w-5 h-5 text-[#0F2A24]" fill="none" stroke="currentColor" stroke-width="2"
                    viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M12 19l9-7-9-7v14zM3 12l9-7v14l-9-7z" />
                  </svg>
                </div>
                <svg class="w-5 h-5 text-[#0F2A24]" fill="none" stroke="currentColor" stroke-width="2"
                  viewBox="0 0 24 24">
                  <path stroke-linecap="round" stroke-linejoin="round"
                    d="M5 5a2 2 0 012-2h10a2 2 0 012 2v16l-7-3.5L5 21V5z" />
                </svg>
              </div>
              <p class="text-[#0F2A24] text-[10px] font-bold">❤ 143 likes</p>
            </div>
          </div>
        </a>

        <!-- Post 2 -->
        <a href="https://www.instagram.com/retrofusion.in/" target="_blank"
          class="group block transform hover:-translate-y-2 transition-all duration-500 mt-6">
          <div
            class="bg-[#F4EFEA] rounded-2xl overflow-hidden shadow-xl group-hover:shadow-2xl transition-shadow duration-300">
            <div class="flex items-center justify-between px-3 py-2.5">
              <div class="flex items-center gap-2">
                <div class="w-7 h-7 rounded-full bg-amber-600 flex items-center justify-center"><svg
                    class="w-4 h-4 text-white" fill="currentColor" viewBox="0 0 24 24">
                    <path
                      d="M12 12c2.21 0 4-1.79 4-4s-1.79-4-4-4-4 1.79-4 4 1.79 4 4 4zm0 2c-2.67 0-8 1.34-8 4v2h16v-2c0-2.66-5.33-4-8-4z" />
                  </svg></div>
                <span class="text-[#0F2A24] text-xs font-semibold">retrofusion.in</span>
              </div>
              <span
                class="text-[10px] font-bold text-amber-600 border border-amber-600 rounded px-1.5 py-0.5">FOLLOW</span>
            </div>
            <div class="mx-2.5 mb-2 border-[3px] border-amber-600 rounded-lg overflow-hidden">
              <img
                src="https://res.cloudinary.com/dprafk917/image/upload/v1772473164/Screenshot_2026-03-02_at_11.07.23_PM_sbgs0f.png"
                alt="Instagram Post"
                class="w-full aspect-square object-cover transition-transform duration-700 group-hover:scale-105" />
            </div>
            <div class="px-3 pb-2.5">
              <div class="flex items-center justify-between mb-1.5">
                <div class="flex items-center gap-3">
                  <svg class="w-5 h-5 text-amber-600" fill="currentColor" viewBox="0 0 24 24">
                    <path
                      d="M12 21.35l-1.45-1.32C5.4 15.36 2 12.28 2 8.5 2 5.42 4.42 3 7.5 3c1.74 0 3.41.81 4.5 2.09C13.09 3.81 14.76 3 16.5 3 19.58 3 22 5.42 22 8.5c0 3.78-3.4 6.86-8.55 11.54L12 21.35z" />
                  </svg>
                  <svg class="w-5 h-5 text-[#0F2A24]" fill="none" stroke="currentColor" stroke-width="2"
                    viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round"
                      d="M8 12h.01M12 12h.01M16 12h.01M21 12c0 4.418-4.03 8-9 8a9.863 9.863 0 01-4.255-.949L3 20l1.395-3.72C3.512 15.042 3 13.574 3 12c0-4.418 4.03-8 9-8s9 3.582 9 8z" />
                  </svg>
                  <svg class="w-5 h-5 text-[#0F2A24]" fill="none" stroke="currentColor" stroke-width="2"
                    viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M12 19l9-7-9-7v14zM3 12l9-7v14l-9-7z" />
                  </svg>
                </div>
                <svg class="w-5 h-5 text-[#0F2A24]" fill="none" stroke="currentColor" stroke-width="2"
                  viewBox="0 0 24 24">
                  <path stroke-linecap="round" stroke-linejoin="round"
                    d="M5 5a2 2 0 012-2h10a2 2 0 012 2v16l-7-3.5L5 21V5z" />
                </svg>
              </div>
              <p class="text-[#0F2A24] text-[10px] font-bold">❤ 98 likes</p>
            </div>
          </div>
        </a>

        <!-- Post 3 -->
        <a href="https://www.instagram.com/retrofusion.in/" target="_blank"
          class="group block transform hover:-translate-y-2 transition-all duration-500">
          <div
            class="bg-[#F4EFEA] rounded-2xl overflow-hidden shadow-xl group-hover:shadow-2xl transition-shadow duration-300">
            <div class="flex items-center justify-between px-3 py-2.5">
              <div class="flex items-center gap-2">
                <div class="w-7 h-7 rounded-full bg-amber-600 flex items-center justify-center"><svg
                    class="w-4 h-4 text-white" fill="currentColor" viewBox="0 0 24 24">
                    <path
                      d="M12 12c2.21 0 4-1.79 4-4s-1.79-4-4-4-4 1.79-4 4 1.79 4 4 4zm0 2c-2.67 0-8 1.34-8 4v2h16v-2c0-2.66-5.33-4-8-4z" />
                  </svg></div>
                <span class="text-[#0F2A24] text-xs font-semibold">retrofusion.in</span>
              </div>
              <span
                class="text-[10px] font-bold text-amber-600 border border-amber-600 rounded px-1.5 py-0.5">FOLLOW</span>
            </div>
            <div class="mx-2.5 mb-2 border-[3px] border-amber-600 rounded-lg overflow-hidden">
              <img
                src="https://res.cloudinary.com/dprafk917/image/upload/v1772473163/Screenshot_2026-03-02_at_11.07.36_PM_ftkdee.png"
                alt="Instagram Post"
                class="w-full aspect-square object-cover transition-transform duration-700 group-hover:scale-105" />
            </div>
            <div class="px-3 pb-2.5">
              <div class="flex items-center justify-between mb-1.5">
                <div class="flex items-center gap-3">
                  <svg class="w-5 h-5 text-amber-600" fill="currentColor" viewBox="0 0 24 24">
                    <path
                      d="M12 21.35l-1.45-1.32C5.4 15.36 2 12.28 2 8.5 2 5.42 4.42 3 7.5 3c1.74 0 3.41.81 4.5 2.09C13.09 3.81 14.76 3 16.5 3 19.58 3 22 5.42 22 8.5c0 3.78-3.4 6.86-8.55 11.54L12 21.35z" />
                  </svg>
                  <svg class="w-5 h-5 text-[#0F2A24]" fill="none" stroke="currentColor" stroke-width="2"
                    viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round"
                      d="M8 12h.01M12 12h.01M16 12h.01M21 12c0 4.418-4.03 8-9 8a9.863 9.863 0 01-4.255-.949L3 20l1.395-3.72C3.512 15.042 3 13.574 3 12c0-4.418 4.03-8 9-8s9 3.582 9 8z" />
                  </svg>
                  <svg class="w-5 h-5 text-[#0F2A24]" fill="none" stroke="currentColor" stroke-width="2"
                    viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M12 19l9-7-9-7v14zM3 12l9-7v14l-9-7z" />
                  </svg>
                </div>
                <svg class="w-5 h-5 text-[#0F2A24]" fill="none" stroke="currentColor" stroke-width="2"
                  viewBox="0 0 24 24">
                  <path stroke-linecap="round" stroke-linejoin="round"
                    d="M5 5a2 2 0 012-2h10a2 2 0 012 2v16l-7-3.5L5 21V5z" />
                </svg>
              </div>
              <p class="text-[#0F2A24] text-[10px] font-bold">❤ 217 likes</p>
            </div>
          </div>
        </a>

        <!-- Post 4 -->
        <a href="https://www.instagram.com/retrofusion.in/" target="_blank"
          class="group block transform hover:-translate-y-2 transition-all duration-500 mt-6">
          <div
            class="bg-[#F4EFEA] rounded-2xl overflow-hidden shadow-xl group-hover:shadow-2xl transition-shadow duration-300">
            <div class="flex items-center justify-between px-3 py-2.5">
              <div class="flex items-center gap-2">
                <div class="w-7 h-7 rounded-full bg-amber-600 flex items-center justify-center"><svg
                    class="w-4 h-4 text-white" fill="currentColor" viewBox="0 0 24 24">
                    <path
                      d="M12 12c2.21 0 4-1.79 4-4s-1.79-4-4-4-4 1.79-4 4 1.79 4 4 4zm0 2c-2.67 0-8 1.34-8 4v2h16v-2c0-2.66-5.33-4-8-4z" />
                  </svg></div>
                <span class="text-[#0F2A24] text-xs font-semibold">retrofusion.in</span>
              </div>
              <span
                class="text-[10px] font-bold text-amber-600 border border-amber-600 rounded px-1.5 py-0.5">FOLLOW</span>
            </div>
            <div class="mx-2.5 mb-2 border-[3px] border-amber-600 rounded-lg overflow-hidden">
              <img
                src="https://res.cloudinary.com/dprafk917/image/upload/v1772473163/Screenshot_2026-03-02_at_11.07.51_PM_yzseuz.png"
                alt="Instagram Post"
                class="w-full aspect-square object-cover transition-transform duration-700 group-hover:scale-105" />
            </div>
            <div class="px-3 pb-2.5">
              <div class="flex items-center justify-between mb-1.5">
                <div class="flex items-center gap-3">
                  <svg class="w-5 h-5 text-amber-600" fill="currentColor" viewBox="0 0 24 24">
                    <path
                      d="M12 21.35l-1.45-1.32C5.4 15.36 2 12.28 2 8.5 2 5.42 4.42 3 7.5 3c1.74 0 3.41.81 4.5 2.09C13.09 3.81 14.76 3 16.5 3 19.58 3 22 5.42 22 8.5c0 3.78-3.4 6.86-8.55 11.54L12 21.35z" />
                  </svg>
                  <svg class="w-5 h-5 text-[#0F2A24]" fill="none" stroke="currentColor" stroke-width="2"
                    viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round"
                      d="M8 12h.01M12 12h.01M16 12h.01M21 12c0 4.418-4.03 8-9 8a9.863 9.863 0 01-4.255-.949L3 20l1.395-3.72C3.512 15.042 3 13.574 3 12c0-4.418 4.03-8 9-8s9 3.582 9 8z" />
                  </svg>
                  <svg class="w-5 h-5 text-[#0F2A24]" fill="none" stroke="currentColor" stroke-width="2"
                    viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M12 19l9-7-9-7v14zM3 12l9-7v14l-9-7z" />
                  </svg>
                </div>
                <svg class="w-5 h-5 text-[#0F2A24]" fill="none" stroke="currentColor" stroke-width="2"
                  viewBox="0 0 24 24">
                  <path stroke-linecap="round" stroke-linejoin="round"
                    d="M5 5a2 2 0 012-2h10a2 2 0 012 2v16l-7-3.5L5 21V5z" />
                </svg>
              </div>
              <p class="text-[#0F2A24] text-[10px] font-bold">❤ 175 likes</p>
            </div>
          </div>
        </a>

      </div>
    </div>

    <!-- Removed Follow Button per user request -->

  </div>
</section>

<!-- ===== FOOTER ===== -->
<!-- ===== FOOTER ===== -->

<?php include 'includes/footer.php'; ?>


<!-- Lightbox Modal -->
<div id="lightbox"
  class="fixed inset-0 z-50 bg-black/95 hidden items-center justify-center transition-opacity duration-300 opacity-0"
  onclick="closeLightbox()">
  <button
    class="absolute top-4 right-4 z-10 w-12 h-12 bg-white/10 hover:bg-white/20 rounded-full flex items-center justify-center transition-colors text-white"
    onclick="closeLightbox()">
    <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
      <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" />
    </svg>
  </button>
  <button
    class="absolute left-4 z-10 w-12 h-12 bg-white/10 hover:bg-white/20 rounded-full flex items-center justify-center transition-colors text-white"
    onclick="event.stopPropagation(); prevLightboxImage()">
    <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
      <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 19l-7-7 7-7" />
    </svg>
  </button>
  <button
    class="absolute right-4 z-10 w-12 h-12 bg-white/10 hover:bg-white/20 rounded-full flex items-center justify-center transition-colors text-white"
    onclick="event.stopPropagation(); nextLightboxImage()">
    <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
      <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7" />
    </svg>
  </button>
  <img id="lightbox-img" src="" alt="Gallery"
    class="max-w-[90vw] max-h-[85vh] object-contain rounded-lg shadow-2xl transition-transform duration-300"
    onclick="event.stopPropagation()">
  <div class="absolute bottom-4 left-1/2 -translate-x-1/2 bg-white/10 backdrop-blur-sm px-4 py-2 rounded-full">
    <span id="lightbox-counter" class="text-white text-sm font-medium tracking-wider"></span>
  </div>
</div>

</div><!-- end min-h-screen -->
<script>
  window.galleryImages = [
    'https://res.cloudinary.com/dprafk917/image/upload/v1770226533/N34_stewru.jpg',
    'https://res.cloudinary.com/dprafk917/image/upload/v1769868140/B30_yc8rqu.webp',
    'https://res.cloudinary.com/dprafk917/image/upload/v1769868140/C26_j6pstx.webp',
    'https://res.cloudinary.com/dprafk917/image/upload/v1769868140/05_ivb2yz.webp',
    'https://res.cloudinary.com/dprafk917/image/upload/v1770226534/N36_om6t9d.jpg',
    'https://res.cloudinary.com/dprafk917/image/upload/v1769868155/M08_qewdva.webp',
    'https://res.cloudinary.com/dprafk917/image/upload/v1769868143/M01_jjmwdw.webp',
    'https://res.cloudinary.com/dprafk917/image/upload/v1769868142/G31_mdlfjh.webp',
    'https://res.cloudinary.com/dprafk917/image/upload/v1769868143/J24_wrncmb.webp',
    'https://res.cloudinary.com/dprafk917/image/upload/v1769868144/M21_c2fjh0.webp',
    'https://res.cloudinary.com/dprafk917/image/upload/v1769868144/M09_hilzeh.webp',
    'https://res.cloudinary.com/dprafk917/image/upload/v1769868141/I08_mjtxcg.webp',
    'https://res.cloudinary.com/dprafk917/image/upload/v1769868143/F18A_qmvadk.webp',
    'https://res.cloudinary.com/dprafk917/image/upload/v1769868142/H10_byp3oh.webp',
    'https://res.cloudinary.com/dprafk917/image/upload/v1769868142/K17_qzihhb.webp',
    'https://res.cloudinary.com/dprafk917/image/upload/v1769868141/E06_tevptf.webp',
  ];

  window.gallerySets = [
    window.galleryImages.slice(0, 4),
    window.galleryImages.slice(4, 8),
    window.galleryImages.slice(8, 12),
    window.galleryImages.slice(12, 16),
  ];
</script>
<script src="js/main.js"></script>
</body>

</html>