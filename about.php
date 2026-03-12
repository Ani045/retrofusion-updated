<?php
$pageTitle = "About Us - Retrofusion Boutique Homestays";
$pageDescription = "About Retrofusion - The story behind our luxury boutique homestays in Lonavala.";
include 'includes/header.php';
?>

    <!-- Immersive Hero Section -->
    <section class="relative h-[60vh] md:h-[70vh] flex items-center justify-center overflow-hidden">
      <div class="absolute inset-0 z-0">
        <img
          src="https://res.cloudinary.com/dprafk917/image/upload/v1768230663/a613a1b2-edef-4242-8ee3-79ce77bae0e1_yi24hq.avif"
          alt="Retrofusion Story" class="w-full h-full object-cover" />
        <div class="absolute inset-0 bg-gradient-to-b from-black/30 via-black/20 to-black/50"></div>
      </div>

      <div class="relative z-10 text-center px-4 max-w-5xl mx-auto scroll-reveal">
        <span class="text-white uppercase tracking-[0.4em] text-sm md:text-base mb-6 block font-light">
          Our Legacy
        </span>
        <h1 class="text-5xl md:text-7xl lg:text-8xl text-white font-bold mb-8 leading-[0.9] font-display">
          The Story of <br />
          <span class="text-transparent bg-clip-text bg-gradient-to-r from-amber-200 via-stone-100 to-amber-200">
            Retrofusion
          </span>
        </h1>
        <p class="text-stone-300 text-lg md:text-xl font-light tracking-wide max-w-2xl mx-auto leading-relaxed">
          Where vintage soul meets modern luxury. A journey through the art of curated hospitality.
        </p>
      </div>

      <!-- Scroll indicator -->
      <div class="absolute bottom-10 left-1/2 -translate-x-1/2 z-10 animate-bounce-slow">
        <div class="w-[1px] h-12 bg-gradient-to-b from-amber-400 to-transparent"></div>
      </div>
    </section>

    <!-- The Visionaries Section -->
    <section class="py-16 md:py-12 bg-[#F4EFEA] overflow-hidden scroll-reveal">
      <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-16">
        <!-- Header -->
        <div class="max-w-3xl mb-16 md:mb-24">
          <h2 class="text-4xl md:text-5xl lg:text-6xl text-stone-900 font-bold mb-8 leading-tight font-display">
            The Visionaries Behind <br />
            <span class="text-amber-600">Retrofusion</span>
          </h2>
          <p class="text-xl text-stone-500 font-light leading-relaxed">
            Meet Ruchi and Jitendra Arora, the dynamic duo whose shared passion for design and hospitality brought
            Retrofusion to life.
          </p>
        </div>

        <!-- Grid Layout -->
        <div class="grid grid-cols-1 lg:grid-cols-2 gap-16 lg:gap-24 items-start">
          <!-- Left: Aligned Images & Video -->
          <div class="flex flex-col gap-6 md:gap-10">
            <!-- Aligned Images -->
            <div class="flex items-center gap-6 md:gap-10">
              <div class="w-1/2 aspect-[3/4] rounded-[2rem] overflow-hidden shadow-2xl shadow-stone-200">
                <img src="https://res.cloudinary.com/dprafk917/image/upload/v1773295624/WhatsApp_Image_2026-03-12_at_11.36.04_utnnut.jpg" alt="Ruchi Arora"
                  class="w-full h-full object-cover transition-transform duration-700 hover:scale-110" />
              </div>
              <div class="w-1/2 aspect-[3/4] rounded-[2rem] overflow-hidden shadow-2xl shadow-stone-200">
                <img src="https://res.cloudinary.com/dprafk917/image/upload/v1773295624/WhatsApp_Image_2026-03-12_at_11.36.04_1_yzlrpj.jpg" alt="Jitendra Arora"
                  class="w-full h-full object-cover transition-transform duration-700 hover:scale-110" />
              </div>
            </div>

            <!-- Video -->
            <div
              class="w-full aspect-video rounded-[2rem] overflow-hidden shadow-[0_20px_50px_rgba(0,0,0,0.15)] relative">
              <iframe class="absolute inset-0 w-full h-full"
                src="https://www.youtube.com/embed/yveSMI2FTBM?si=vVc25qHq_e3gNNwB" title="YouTube video player"
                frameborder="0"
                allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
                referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
            </div>
          </div>

          <!-- Right: Founder Details -->
          <div class="space-y-0">
            <div class="">
              <h3 class="text-2xl font-bold text-stone-900 mb-4 font-display">
                Ruchi Arora
              </h3>
              <p class="text-sm text-amber-600 uppercase tracking-widest font-bold mb-4">
                Founder
              </p>
              <p class="text-lg text-stone-500 font-light leading-relaxed max-w-xl">
                The aesthetic soul of Retrofusion. With an unerring eye for timeless design, Ruchi curates every
                artifact, texture, and hue, ensuring each villa tells a unique story of vintage luxury and modern
                comfort.
              </p>
            </div>

            <div class="border-t border-stone-200 mt-10 pt-10">
              <h3 class="text-2xl font-bold text-stone-900 mb-4 font-display">
                Jitendra Arora
              </h3>
              <p class="text-sm text-amber-600 uppercase tracking-widest font-bold mb-4">
                Co-Founder
              </p>
              <p class="text-lg text-stone-500 font-light leading-relaxed max-w-xl">
                The strategic mind behind our excellence. Jitendra combines business acumen with a deep passion for
                hospitality, architecting the personalized service models that turn stays into lifelong memories.
              </p>
            </div>

            <!-- Stats -->
            <div class="border-t border-stone-200 mt-10 pt-10">
              <div class="grid grid-cols-3 gap-8">
                <div>
                  <div class="text-3xl md:text-4xl font-bold text-amber-600 mb-2 font-display">500+</div>
                  <p class="text-xs uppercase tracking-wider text-stone-500 font-semibold">Guests</p>
                </div>
                <div>
                  <div class="text-3xl md:text-4xl font-bold text-amber-600 mb-2 font-display">3</div>
                  <p class="text-xs uppercase tracking-wider text-stone-500 font-semibold">Villas</p>
                </div>
                <div>
                  <div class="text-3xl md:text-4xl font-bold text-amber-600 mb-2 font-display">4.9</div>
                  <p class="text-xs uppercase tracking-wider text-stone-500 font-semibold">Rating</p>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>

    <!-- Founder Message Section -->
    <section class="py-24 md:py-32 relative overflow-hidden">
      <!-- Background Image with Dark Overlay -->
      <div class="absolute inset-0 z-0">
        <img
          src="https://res.cloudinary.com/dprafk917/image/upload/v1768230663/a613a1b2-edef-4242-8ee3-79ce77bae0e1_yi24hq.avif"
          alt="Background" class="w-full h-full object-cover" />
        <div class="absolute inset-0 bg-stone-950/60"></div>
      </div>

      <!-- Subtle ambient lighting -->
      <div
        class="absolute top-0 right-0 w-[500px] h-[500px] bg-amber-400/10 rounded-full blur-[120px] -mr-64 -mt-64 z-1">
      </div>
      <div
        class="absolute bottom-0 left-0 w-[500px] h-[500px] bg-amber-400/10 rounded-full blur-[120px] -ml-64 -mb-64 z-1">
      </div>

      <div class="max-w-4xl mx-auto px-4 relative z-10 pt-96 md:pt-80">
        <div class="relative group">
          <!-- The Envelope Container -->
          <div
            class="relative w-full aspect-[4/3] md:aspect-[16/10] bg-white rounded-b-3xl shadow-[0_30px_60px_rgba(0,0,0,0.05)] border-b border-x border-stone-200/50"
            style="clip-path: inset(-300% -50% 0 -50%)">

            <!-- Logo on Cover -->
            <div class="absolute inset-0 z-30 pointer-events-none flex items-center justify-center pt-[20%]">
              <img
                src="https://res.cloudinary.com/damfndmrm/image/upload/v1771665559/Retrofusion_logo__20260211_230238_0000_sufgcp.png"
                alt="Retrofusion Seal" class="w-32 md:w-48 h-auto grayscale brightness-0 opacity-15" />
            </div>

            <!-- The Letter Card -->
            <div
              class="absolute inset-x-4 md:inset-x-12 top-0 z-10 bg-white rounded-2xl shadow-2xl border border-stone-100 p-8 pb-24 md:p-14 md:pb-40 -translate-y-[55%] transition-transform duration-1000 ease-out"
              style="height: auto;">
              <div class="h-full flex flex-col">
                <div class="flex justify-between items-center border-b border-stone-100 pb-6 mb-6 shrink-0">
                  <div class="space-y-1">
                    <h4 class="text-amber-600 font-bold tracking-[0.2em] uppercase text-[10px] md:text-xs">From the desk
                      of Founders</h4>
                    <div class="h-0.5 w-12 bg-amber-400"></div>
                  </div>
                  <span class="text-stone-300 italic text-[10px] md:text-xs tracking-widest">Handcrafted
                    Hospitality</span>
                </div>

                <div class="max-h-[150px] md:max-h-[300px] overflow-y-auto pr-4 mb-8 founder-scroll">
                  <div class="space-y-6 text-stone-800 text-base md:text-xl leading-relaxed font-light">
                    <p>
                      Retrofusion was born from a simple yet profound belief: that travel should be more than a change
                      of scenery—it should be a <span class="text-stone-900 font-normal">homecoming for the soul</span>.
                    </p>
                    <p>
                      When we started this journey, we didn't just want to create luxury villas. We wanted to architect
                      environments where vintage charm meets modern ease, and where every guest feels the heartbeat of
                      local culture.
                    </p>
                    <p>
                      Whether it's the carefully curated artifacts, the warmth of our personalized service, or the quiet
                      luxury of a dawn in Lonavala, every element of Retrofusion is a piece of our story that we invite
                      you to share.
                    </p>
                    <p>
                      Every detail, from the hand-picked furnishings to the specialized guest experiences, is crafted
                      with the same love and attention we would give to our own home. Our goal is to create a sanctuary
                      where you can pause, breathe, and rediscover the joy of the present moment.
                    </p>
                  </div>
                </div>

                <div class="pt-8 border-t border-stone-100 shrink-0">
                  <p class="text-stone-400 mb-6 font-light italic text-sm tracking-wide">With gratitude and warmth,</p>
                  <div class="flex flex-col sm:flex-row gap-8 sm:gap-16">
                    <div class="relative group/sig">
                      <span
                        class="text-3xl md:text-4xl text-stone-900 block mb-1 transition-colors duration-300 group-hover/sig:text-amber-700"
                        style="font-family: 'Dancing Script', cursive">Ruchi Arora</span>
                      <span class="text-[10px] uppercase tracking-[0.3em] text-amber-600 font-bold">Founder
                      </span>
                    </div>
                    <div class="relative group/sig">
                      <span
                        class="text-3xl md:text-4xl text-stone-900 block mb-1 transition-colors duration-300 group-hover/sig:text-amber-700"
                        style="font-family: 'Dancing Script', cursive">Jitendra Arora</span>
                      <span class="text-[10px] uppercase tracking-[0.3em] text-amber-600 font-bold">Co-Founder
                      </span>
                    </div>
                  </div>
                </div>
              </div>
            </div>

            <!-- Envelope Pocket Front -->
            <div class="absolute inset-0 z-20 pointer-events-none rounded-b-3xl"
              style="background: linear-gradient(135deg, #ffffff 0%, #f9f8f6 100%); clip-path: polygon(0 50%, 50% 35%, 100% 50%, 100% 100%, 0 100%); box-shadow: inset 0 10px 30px rgba(0,0,0,0.02)">
            </div>
            <div class="absolute inset-0 z-20 pointer-events-none opacity-40 rounded-b-3xl"
              style="border: 1px solid rgba(217, 119, 6, 0.15); clip-path: polygon(0 50%, 50% 35%, 100% 50%)"></div>
            <div class="absolute inset-0 z-0 bg-[#F4EFEA] rounded-b-3xl"></div>
          </div>

          <!-- Premium Seal/Label -->
          <div
            class="absolute -bottom-6 left-1/2 -translate-x-1/2 z-30 bg-white text-stone-900 px-8 py-3 rounded-full shadow-[0_10px_30px_rgba(0,0,0,0.1)] text-[10px] uppercase tracking-[0.25em] font-black border-2 border-amber-400 flex items-center gap-3">
            <div class="w-2 h-2 rounded-full bg-amber-500 animate-pulse"></div>
            A Legacy of Excellence
            <div class="w-2 h-2 rounded-full bg-amber-500 animate-pulse"></div>
          </div>
        </div>
      </div>
    </section>

    <!-- Philosophy Section -->
    <section class="py-16 md:py-12 bg-[#F4EFEA] overflow-hidden scroll-reveal">
      <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-16">
        <div class="max-w-3xl mb-16 md:mb-24">
          <h2 class="text-4xl md:text-5xl lg:text-6xl text-stone-900 font-bold mb-8 leading-tight font-display">
            Transforming Stays Into <br />
            <span class="text-amber-600">Soulful Memories</span>
          </h2>
          <p class="text-xl text-stone-500 font-light leading-relaxed">
            At Retrofusion, we curate more than just accommodation — we weave together vintage charm, modern comfort,
            and heartfelt hospitality to deliver spaces that inspire connection.
          </p>
        </div>

        <div class="grid grid-cols-1 lg:grid-cols-2 gap-16 lg:gap-24 items-start">
          <div class="relative flex items-center justify-center w-full">
            <div
              class="w-full aspect-video rounded-[2.5rem] overflow-hidden shadow-[0_20px_50px_rgba(0,0,0,0.15)] group cursor-pointer relative"
              onclick="this.innerHTML='<iframe src=\'https://player.vimeo.com/video/967485400?h=68886445b8&autoplay=1\' class=\'absolute inset-0 w-full h-full\' frameborder=\'0\' allow=\'autoplay; fullscreen; picture-in-picture\' allowfullscreen></iframe>'">
              <!-- Video Thumbnail -->
              <img src="https://res.cloudinary.com/dprafk917/image/upload/v1769863039/01_qwhl8a.jpg"
                alt="Transforming Stays Video"
                class="w-full h-full object-cover transition-transform duration-1000 group-hover:scale-105" />

              <!-- Elegant Overlay -->
              <div
                class="absolute inset-0 bg-gradient-to-t from-black/60 via-black/20 to-transparent group-hover:from-black/70 group-hover:via-black/30 transition-colors duration-500">
              </div>

              <!-- Play Button Wrapper -->
              <div class="absolute inset-0 flex items-center justify-center">
                <!-- Ripple outer -->
                <div
                  class="w-20 h-20 md:w-28 md:h-28 bg-white/10 backdrop-blur-sm rounded-full flex items-center justify-center border border-white/20 transition-all duration-500 group-hover:scale-110 group-hover:bg-white/20">
                  <div class="absolute inset-0 rounded-full animate-ping bg-white/20" style="animation-duration: 2.5s">
                  </div>
                  <!-- Inner Play Button -->
                  <div
                    class="relative w-14 h-14 md:w-20 md:h-20 bg-white rounded-full flex items-center justify-center shadow-xl transform transition-transform group-hover:scale-95">
                    <svg class="w-6 h-6 md:w-8 md:h-8 text-[#0F2A24] ml-1.5" fill="currentColor" viewBox="0 0 24 24">
                      <path d="M8 5v14l11-7z" />
                    </svg>
                  </div>
                </div>
              </div>

              <!-- Text Hint -->
              <div
                class="absolute bottom-8 left-0 right-0 text-center pointer-events-none transform translate-y-4 opacity-0 group-hover:translate-y-0 group-hover:opacity-100 transition-all duration-500">
                <span class="text-white text-sm tracking-[0.2em] uppercase font-semibold drop-shadow-lg">Watch Our
                  Story</span>
              </div>
            </div>
          </div>

          <div class="space-y-0">
            <div>
              <h3 class="text-2xl font-bold text-stone-900 mb-4 font-display">Immersive Curation</h3>
              <p class="text-lg text-stone-500 font-light leading-relaxed max-w-xl">
                From hand-picked vintage decor to bespoke modern amenities, every corner is designed to tell a unique
                story.
              </p>
            </div>
            <div class="border-t border-stone-200 mt-10 pt-10">
              <h3 class="text-2xl font-bold text-stone-900 mb-4 font-display">Heartfelt Hospitality</h3>
              <p class="text-lg text-stone-500 font-light leading-relaxed max-w-xl">
                We believe in the luxury of personal connection, ensuring every guest feels like a welcomed friend in
                our home.
              </p>
            </div>
            <div class="border-t border-stone-200 mt-10 pt-10">
              <h3 class="text-2xl font-bold text-stone-900 mb-4 font-display">Local Essence & Soul</h3>
              <p class="text-lg text-stone-500 font-light leading-relaxed max-w-xl">
                Discover the authentic spirit of Lonavala through our thoughtfully architected spaces that celebrate
                local heritage.
              </p>
            </div>
          </div>
        </div>
      </div>
    </section>

    <!-- Our Journey -->
    <section class="py-16 md:py-12 px-4 sm:px-6 lg:px-16 relative bg-white scroll-reveal">
      <div class="max-w-4xl mx-auto relative z-10">
        <div class="text-center mb-20">
          <span class="text-amber-600 uppercase tracking-widest text-xs font-semibold mb-4 block">Chronicle</span>
          <h2 class="text-4xl md:text-5xl font-bold text-stone-900 font-display">
            Our Journey Through Time
          </h2>
        </div>

        <div class="relative">
          <div class="absolute left-[19px] md:left-1/2 top-0 bottom-0 w-[1px] bg-stone-200 -translate-x-1/2"></div>
          <div class="space-y-24">
            <!-- 2020 -->
            <div class="relative flex flex-col md:flex-row items-center gap-8">
              <div
                class="absolute left-[19px] md:left-1/2 top-0 md:top-1/2 -translate-x-1/2 -translate-y-1/2 w-10 h-10 rounded-full bg-white border border-amber-400 flex items-center justify-center z-10">
                <div class="w-2 h-2 rounded-full bg-amber-600"></div>
              </div>
              <div class="w-full md:w-[45%] pl-12 md:pl-0 text-right md:text-right">
                <div
                  class="bg-[#F4EFEA] p-8 rounded-2xl border border-stone-100 hover:shadow-xl transition-all duration-500 group text-left">
                  <div class="text-amber-600 font-bold text-sm tracking-[0.3em] mb-3 uppercase">2020</div>
                  <h3
                    class="text-2xl font-bold text-stone-900 mb-4 group-hover:text-amber-700 transition-colors duration-300 font-display">
                    Inaugural Collection</h3>
                  <p class="text-stone-500 font-light leading-relaxed">The opening of Retro Villa, setting a new
                    benchmark for vintage-modern aesthetics.</p>
                </div>
              </div>
              <div class="hidden md:block w-[45%]"></div>
            </div>
            <!-- 2021 -->
            <div class="relative flex flex-col md:flex-row-reverse items-center gap-8">
              <div
                class="absolute left-[19px] md:left-1/2 top-0 md:top-1/2 -translate-x-1/2 -translate-y-1/2 w-10 h-10 rounded-full bg-white border border-amber-400 flex items-center justify-center z-10">
                <div class="w-2 h-2 rounded-full bg-amber-600"></div>
              </div>
              <div class="w-full md:w-[45%] pl-12 md:pl-0">
                <div
                  class="bg-[#F4EFEA] p-8 rounded-2xl border border-stone-100 hover:shadow-xl transition-all duration-500 group">
                  <div class="text-amber-600 font-bold text-sm tracking-[0.3em] mb-3 uppercase">2021</div>
                  <h3
                    class="text-2xl font-bold text-stone-900 mb-4 group-hover:text-amber-700 transition-colors duration-300 font-display">
                    Curated Growth</h3>
                  <p class="text-stone-500 font-light leading-relaxed">Expanding the collection with Neo Retro Villa,
                    adding a distinct new personality.</p>
                </div>
              </div>
              <div class="hidden md:block w-[45%]"></div>
            </div>
            <!-- 2024 -->
            <div class="relative flex flex-col md:flex-row items-center gap-8">
              <div
                class="absolute left-[19px] md:left-1/2 top-0 md:top-1/2 -translate-x-1/2 -translate-y-1/2 w-10 h-10 rounded-full bg-white border border-amber-400 flex items-center justify-center z-10">
                <div class="w-2 h-2 rounded-full bg-amber-600"></div>
              </div>
              <div class="w-full md:w-[45%] pl-12 md:pl-0 text-right md:text-right">
                <div
                  class="bg-[#F4EFEA] p-8 rounded-2xl border border-stone-100 hover:shadow-xl transition-all duration-500 group text-left">
                  <div class="text-amber-600 font-bold text-sm tracking-[0.3em] mb-3 uppercase">2024</div>
                  <h3
                    class="text-2xl font-bold text-stone-900 mb-4 group-hover:text-amber-700 transition-colors duration-300 font-display">
                    Excellence Redefined</h3>
                  <p class="text-stone-500 font-light leading-relaxed">Establishing Retrofusion as the premier
                    destination for discerning travelers.</p>
                </div>
              </div>
              <div class="hidden md:block w-[45%]"></div>
            </div>
            <!-- 2025 -->
            <div class="relative flex flex-col md:flex-row-reverse items-center gap-8">
              <div
                class="absolute left-[19px] md:left-1/2 top-0 md:top-1/2 -translate-x-1/2 -translate-y-1/2 w-10 h-10 rounded-full bg-white border border-amber-400 flex items-center justify-center z-10">
                <div class="w-2 h-2 rounded-full bg-amber-600"></div>
              </div>
              <div class="w-full md:w-[45%] pl-12 md:pl-0">
                <div
                  class="bg-[#F4EFEA] p-8 rounded-2xl border border-stone-100 hover:shadow-xl transition-all duration-500 group">
                  <div class="text-amber-600 font-bold text-sm tracking-[0.3em] mb-3 uppercase">2025</div>
                  <h3
                    class="text-2xl font-bold text-stone-900 mb-4 group-hover:text-amber-700 transition-colors duration-300 font-display">
                    Retro Visawa</h3>
                  <p class="text-stone-500 font-light leading-relaxed">Introducing our latest masterpiece, Retro Visawa,
                    crafted for unparalleled luxury.</p>
                </div>
              </div>
              <div class="hidden md:block w-[45%]"></div>
            </div>
          </div>
        </div>
      </div>
    </section>

    <!-- Final CTA -->
    <section class="py-24 relative overflow-hidden">
      <!-- Background Image -->
      <div class="absolute inset-0 z-0">
        <img
          src="https://res.cloudinary.com/dprafk917/image/upload/v1768230663/5d93e66d-23b4-4578-bb58-35032b8b39b8_cftv5v.avif"
          alt="Experience Retrofusion" class="w-full h-full object-cover" />
        <div class="absolute inset-0 bg-stone-900/80 backdrop-blur-[2px]"></div>
      </div>

      <div class="relative z-10 max-w-4xl mx-auto px-4 text-center scroll-reveal">
        <h2 class="text-4xl md:text-6xl text-white font-bold mb-8 font-display">
          Ready to create your <br />
          <span class="text-amber-400">own story?</span>
        </h2>
        <p class="text-white text-lg md:text-xl font-light mb-12 max-w-2xl mx-auto leading-relaxed">
          Step into a space where every moment is curated, every corner has a narrative, and every guest is family.
        </p>
        <a href="contact.php#name"
          class="inline-flex items-center gap-3 bg-white text-stone-900 px-10 py-5 rounded-full font-medium text-lg hover:bg-amber-400 hover:text-stone-900 transition-all duration-300 group shadow-2xl">
          Explore Our Collection
          <svg class="w-5 h-5 group-hover:translate-x-1 transition-transform" fill="none" stroke="currentColor"
            viewBox="0 0 24 24">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3" />
          </svg>
        </a>
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


  </div><!-- end min-h-screen -->
  <script src="js/main.js"></script>
</body>

</html>