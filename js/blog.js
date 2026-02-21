document.addEventListener('DOMContentLoaded', () => {
    const blogContainer = document.getElementById('blog-container');
    const apiEndpoint = 'https://retrofusion.in/blogs/wp-json/wp/v2/posts?_embed&per_page=3';

    if (!blogContainer) return;

    fetch(apiEndpoint)
        .then(response => response.json())
        .then(posts => {
            if (posts.length === 0) {
                blogContainer.innerHTML = '<p class="text-center text-stone-500">No blog posts found.</p>';
                return;
            }

            blogContainer.innerHTML = ''; // Clear loading state

            posts.forEach(post => {
                const title = post.title.rendered;
                const link = post.link;
                const excerpt = post.excerpt.rendered.replace(/<[^>]+>/g, '').substring(0, 100) + '...';

                let imageUrl = 'https://via.placeholder.com/400x300?text=No+Image';
                if (post._embedded && post._embedded['wp:featuredmedia'] && post._embedded['wp:featuredmedia'][0]) {
                    imageUrl = post._embedded['wp:featuredmedia'][0].source_url;
                }

                const cardHTML = `
                    <div class="w-[85vw] sm:w-full flex-shrink-0 snap-start h-full">
                        <article class="h-full bg-white rounded-2xl shadow-md overflow-hidden hover:shadow-xl transition-all duration-300 group hover:-translate-y-2 flex flex-col border border-stone-100">
                            <!-- Image -->
                            <div class="relative h-56 sm:h-64 flex-shrink-0 overflow-hidden bg-stone-100">
                                <img src="${imageUrl}" alt="${title}" class="w-full h-full object-cover transition-transform duration-700 group-hover:scale-110" />
                            </div>
                            <!-- Content -->
                            <div class="p-6 flex-1 flex flex-col justify-between">
                                <div>
                                    <h3 class="text-xl font-bold text-stone-900 mb-3 font-display leading-tight group-hover:text-amber-700 transition-colors line-clamp-2">
                                        ${title}
                                    </h3>
                                    <p class="text-stone-500 text-sm leading-relaxed mb-4 line-clamp-3">
                                        ${excerpt}
                                    </p>
                                </div>
                                <a href="${link}" target="_blank" class="inline-flex items-center text-stone-900 font-semibold text-sm hover:text-amber-700 transition-colors mt-auto">
                                    Read More <svg class="w-3 h-3 ml-1" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7" />
                                    </svg>
                                </a>
                            </div>
                        </article>
                    </div>
                `;
                blogContainer.insertAdjacentHTML('beforeend', cardHTML);
            });
        })
        .catch(error => {
            console.error('Error fetching blog posts:', error);
            blogContainer.innerHTML = '<p class="text-center text-stone-500">Failed to load blog posts.</p>';
        });
});
