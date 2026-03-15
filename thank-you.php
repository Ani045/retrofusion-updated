<?php
$pageTitle = "Thank You - Retrofusion Boutique Homestays";
$pageDescription = "Thank you for reaching out to Retrofusion. Our team will get in touch with you shortly.";
include 'includes/header.php';
?>

<!-- ===== THANK YOU HERO ===== -->
<section class="relative min-h-screen flex items-center justify-center overflow-hidden bg-[#F4EFEA]">

    <!-- Ambient background blobs -->
    <div class="absolute inset-0 pointer-events-none overflow-hidden">
        <div class="absolute -top-32 -left-32 w-[600px] h-[600px] rounded-full bg-amber-400/10 blur-[120px]"></div>
        <div class="absolute -bottom-32 -right-32 w-[600px] h-[600px] rounded-full bg-[#0F2A24]/10 blur-[120px]"></div>
        <div
            class="absolute top-1/2 left-1/2 -translate-x-1/2 -translate-y-1/2 w-[400px] h-[400px] rounded-full bg-amber-300/5 blur-[80px]">
        </div>
    </div>

    <!-- Decorative floating particles -->
    <div class="absolute inset-0 pointer-events-none overflow-hidden" id="particles-container">
        <!-- particles injected by JS -->
    </div>

    <!-- Card -->
    <div class="relative z-10 w-full max-w-2xl mx-auto px-4 py-24 text-center">

        <!-- Animated ring + checkmark -->
        <div class="flex items-center justify-center mb-10">
            <div class="relative">
                <!-- Outer pulse rings -->
                <div class="absolute inset-0 rounded-full border-2 border-amber-400/30 animate-ping"
                    style="animation-duration:2s"></div>
                <div class="absolute inset-0 m-[-12px] rounded-full border border-amber-400/20 animate-ping"
                    style="animation-duration:2.8s"></div>

                <!-- Circle -->
                <div
                    class="relative w-28 h-28 rounded-full bg-[#0F2A24] flex items-center justify-center shadow-[0_20px_60px_rgba(15,42,36,0.35)]">
                    <!-- Checkmark SVG animated via stroke-dashoffset -->
                    <svg class="w-14 h-14" viewBox="0 0 52 52" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <circle class="check-circle" cx="26" cy="26" r="25" fill="none" stroke="#d97706"
                            stroke-width="1.5" stroke-dasharray="157" stroke-dashoffset="157"
                            style="animation: drawCircle 0.6s ease forwards 0.2s;" />
                        <path class="check-path" d="M14 27l9 9 16-18" fill="none" stroke="#F4EFEA" stroke-width="3"
                            stroke-linecap="round" stroke-linejoin="round" stroke-dasharray="40" stroke-dashoffset="40"
                            style="animation: drawCheck 0.5s ease forwards 0.9s;" />
                    </svg>
                </div>
            </div>
        </div>

        <!-- Badge -->
        <div
            class="inline-flex items-center gap-2 bg-amber-400/15 border border-amber-400/30 rounded-full px-5 py-2 mb-8">
            <div class="w-1.5 h-1.5 rounded-full bg-amber-500 animate-pulse"></div>
            <span class="text-amber-700 text-xs font-bold uppercase tracking-[0.25em]">Message Received</span>
            <div class="w-1.5 h-1.5 rounded-full bg-amber-500 animate-pulse"></div>
        </div>

        <!-- Headline -->
        <h1 class="text-5xl md:text-6xl lg:text-7xl font-bold text-[#0F2A24] mb-6 leading-tight font-display">
            Thank
            <span class="text-transparent bg-clip-text bg-gradient-to-r from-amber-600 via-amber-500 to-amber-700">
                You!
            </span>
        </h1>

        <!-- Decorative line -->
        <div class="w-16 h-0.5 bg-gradient-to-r from-transparent via-amber-500 to-transparent mx-auto mb-8"></div>

        <!-- Message card (envelope style) -->
        <div
            class="relative bg-white rounded-3xl shadow-[0_20px_60px_rgba(15,42,36,0.10)] p-8 md:p-12 mb-10 border border-stone-100">
            <!-- Corner accent -->
            <div class="absolute top-0 right-0 w-20 h-20 overflow-hidden rounded-tr-3xl">
                <div
                    class="absolute -top-10 -right-10 w-20 h-20 bg-amber-400/15 rotate-45 transform origin-bottom-left">
                </div>
            </div>
            <!-- Logo watermark -->
            <div class="absolute inset-0 flex items-center justify-center pointer-events-none opacity-[0.03]">
                <img loading="lazy" src="https://res.cloudinary.com/damfndmrm/image/upload/f_auto,q_auto/v1771665559/Retrofusion_logo__20260211_230238_0000_sufgcp.png"
                    alt="" class="w-48 h-auto" />
            </div>

            <div class="relative">
                <p class="text-stone-700 text-lg md:text-xl font-light leading-relaxed mb-4">
                    Your enquiry has reached us and we are absolutely
                    <span class="text-[#0F2A24] font-semibold">delighted to hear from you</span>.
                </p>
                <p class="text-stone-500 text-base md:text-lg font-light leading-relaxed mb-8">
                    Our team will review your message and get back to you
                    <span class="text-amber-600 font-medium">within 24 hours</span>.
                    In the meantime, feel free to explore our stunning villas.
                </p>

                <!-- Three promise icons -->
                <div class="grid grid-cols-3 gap-4 pt-6 border-t border-stone-100">
                    <div class="flex flex-col items-center gap-2">
                        <div class="w-11 h-11 rounded-2xl bg-[#0F2A24]/5 flex items-center justify-center">
                            <svg class="w-5 h-5 text-[#0F2A24]" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.8"
                                    d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z" />
                            </svg>
                        </div>
                        <span class="text-[10px] uppercase tracking-widest text-stone-500 font-semibold">Quick
                            Reply</span>
                    </div>
                    <div class="flex flex-col items-center gap-2">
                        <div class="w-11 h-11 rounded-2xl bg-amber-400/10 flex items-center justify-center">
                            <svg class="w-5 h-5 text-amber-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.8"
                                    d="M4.318 6.318a4.5 4.5 0 000 6.364L12 20.364l7.682-7.682a4.5 4.5 0 00-6.364-6.364L12 7.636l-1.318-1.318a4.5 4.5 0 00-6.364 0z" />
                            </svg>
                        </div>
                        <span class="text-[10px] uppercase tracking-widest text-stone-500 font-semibold">Personal
                            Care</span>
                    </div>
                    <div class="flex flex-col items-center gap-2">
                        <div class="w-11 h-11 rounded-2xl bg-[#0F2A24]/5 flex items-center justify-center">
                            <svg class="w-5 h-5 text-[#0F2A24]" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.8"
                                    d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z" />
                            </svg>
                        </div>
                        <span
                            class="text-[10px] uppercase tracking-widest text-stone-500 font-semibold">Guaranteed</span>
                    </div>
                </div>
            </div>
        </div>

        <!-- CTA Buttons -->
        <div class="flex flex-col sm:flex-row gap-4 justify-center items-center">
            <!-- Primary: Back to Home -->
            <a href="index.php" id="back-home-btn"
                class="group inline-flex items-center gap-3 bg-[#0F2A24] text-[#F4EFEA] px-10 py-5 rounded-full font-semibold text-base hover:bg-amber-600 transition-all duration-300 shadow-[0_10px_30px_rgba(15,42,36,0.3)] hover:shadow-[0_10px_30px_rgba(217,119,6,0.35)] hover:-translate-y-0.5">
                <svg class="w-5 h-5 group-hover:-translate-x-1 transition-transform duration-300" fill="none"
                    stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                        d="M7 16l-4-4m0 0l4-4m-4 4h18" />
                </svg>
                Back to Home
            </a>

            <!-- Secondary: Explore Villas -->
            <a href="index.php#villas"
                class="group inline-flex items-center gap-3 bg-white border-2 border-stone-200 text-stone-700 px-10 py-5 rounded-full font-semibold text-base hover:border-amber-500 hover:text-amber-700 transition-all duration-300 shadow-lg hover:-translate-y-0.5">
                Explore Our Villas
                <svg class="w-5 h-5 group-hover:translate-x-1 transition-transform duration-300" fill="none"
                    stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                        d="M17 8l4 4m0 0l-4 4m4-4H3" />
                </svg>
            </a>
        </div>

        <!-- Signature sign-off -->
        <div class="mt-14 flex flex-col items-center gap-2 opacity-60">
            <div class="h-px w-12 bg-stone-300"></div>
            <p class="text-stone-400 text-sm font-light italic">With warmth & gratitude,</p>
            <span class="text-2xl text-stone-700" style="font-family:'Dancing Script',cursive;">Ruchi & Jitendra
                Arora</span>
            <p class="text-[10px] uppercase tracking-[0.3em] text-amber-600 font-bold">Founders, Retrofusion</p>
        </div>

    </div>
</section>

<?php include 'includes/footer.php'; ?>

</div><!-- end min-h-screen -->

<style>
    @keyframes drawCircle {
        to {
            stroke-dashoffset: 0;
        }
    }

    @keyframes drawCheck {
        to {
            stroke-dashoffset: 0;
        }
    }

    /* Floating particle */
    .particle {
        position: absolute;
        border-radius: 50%;
        opacity: 0;
        animation: floatUp var(--dur, 4s) ease-in var(--delay, 0s) forwards;
    }

    @keyframes floatUp {
        0% {
            transform: translateY(0) rotate(0deg);
            opacity: 0;
        }

        10% {
            opacity: 0.7;
        }

        90% {
            opacity: 0.5;
        }

        100% {
            transform: translateY(-120vh) rotate(720deg);
            opacity: 0;
        }
    }
</style>

<script>
    // ── Confetti particles ──────────────────────────────────────────
    (function spawnParticles() {
        const container = document.getElementById('particles-container');
        const colors = ['#d97706', '#0F2A24', '#F4EFEA', '#92400e', '#fbbf24', '#a16207'];
        const shapes = ['circle', 'square', 'diamond'];
        for (let i = 0; i < 40; i++) {
            const p = document.createElement('div');
            const size = Math.random() * 10 + 4; // 4–14px
            const color = colors[Math.floor(Math.random() * colors.length)];
            const shape = shapes[Math.floor(Math.random() * shapes.length)];
            p.className = 'particle';
            p.style.cssText = `
          width:${size}px; height:${size}px;
          left:${Math.random() * 100}%;
          bottom:${-size}px;
          background:${color};
          --dur:${Math.random() * 6 + 4}s;
          --delay:${Math.random() * 3}s;
          border-radius:${shape === 'circle' ? '50%' : shape === 'square' ? '2px' : '0'};
          transform:${shape === 'diamond' ? 'rotate(45deg)' : 'none'};
        `;
            container.appendChild(p);
        }
    })();

    // ── Auto-redirect after 15 seconds (optional, silent) ──────────
    // setTimeout(() => { window.location.href = 'index.php'; }, 15000);
</script>

<script src="js/main.js"></script>
</body>

</html>