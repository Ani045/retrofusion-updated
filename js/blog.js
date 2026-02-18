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
                    <div class="w-full md:w-[48%] lg:w-[32%] flex-shrink-0 snap-start">
                        <div class="group h-full bg-white rounded-xl shadow-md overflow-hidden border border-stone-200 hover:shadow-xl transition-all duration-300 flex flex-col h-full">
                            <!-- Image -->
                            <div class="relative w-full aspect-[3/4] flex-shrink-0 overflow-hidden bg-stone-100">
                                <img src="${imageUrl}" alt="${title}" class="w-full h-full object-cover transition-transform duration-500 group-hover:scale-105" />
                            </div>
                            <!-- Content -->
                            <div class="flex-1 p-5 flex flex-col justify-between border-t border-stone-100">
                                <div>
                                    <h3 class="text-base sm:text-lg font-bold text-stone-900 mb-2 line-clamp-2 leading-snug font-display">
                                        ${title}
                                    </h3>
                                    <p class="text-xs sm:text-sm text-stone-600 line-clamp-3 mb-4">
                                        ${excerpt}
                                    </p>
                                </div>
                                <a href="${link}" target="_blank" class="inline-block self-start px-5 py-2.5 bg-stone-900 text-white text-xs font-bold uppercase tracking-wider rounded-lg hover:bg-stone-700 transition-colors duration-200">
                                    Read More
                                </a>
                            </div>
                        </div>
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
