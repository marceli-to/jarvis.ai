<!-- Navigation -->
<nav class="nav sticky top-0 z-50 pt-2" aria-label="Main navigation">
    <div id="nav-inner" class="nav-inner max-w-[calc(56rem-3rem)] mx-6 sm:mx-auto h-[var(--header-height)] flex items-center justify-between transition-all duration-300 rounded-xl">
        <a href="/" class="nav-logo text-white font-semibold text-lg transition-transform duration-300" aria-label="Jarvis - Home">Jarvis</a>
        <div class="nav-links flex items-center gap-1 transition-transform duration-300">
            <a href="/#projects" class="nav-link" aria-label="View projects">Projects</a>
            <a href="/#tools" class="nav-link" aria-label="View tools">Tools</a>
            <a href="/#about" class="nav-link" aria-label="About Jarvis">About</a>
        </div>
    </div>
</nav>

<script>
(function() {
    const navInner = document.getElementById('nav-inner');
    let scrolled = false;
    
    function onScroll() {
        const shouldBeScrolled = window.scrollY > 300;
        if (shouldBeScrolled !== scrolled) {
            scrolled = shouldBeScrolled;
            navInner.classList.toggle('nav-scrolled', scrolled);
        }
    }
    
    window.addEventListener('scroll', onScroll, { passive: true });
    onScroll();
})();
</script>
