<x-web.layout title="Marcelito — Web" description="Web design and development by Marcel Stadelmann">
    
    <!-- Hero -->
<!-- Hero -->
    <section class="min-h-screen max-w-4xl mx-auto px-6 flex items-center py-20">
        <div class="">
            <div class="max-w-3xl">
                
                <h1 class="heading-xl mb-6 animate-slide-up delay-75 text-balance">
                    Hi, I'm <span class="text-gradient">Marcel</span>.
                </h1>
                
                <p class="text-xl text-muted mb-10 max-w-xl animate-slide-up delay-150">
                    A web designer and developer based in Zürich. I build clean, functional websites that get out of the way and let the content shine. Check out my <a href="#projects" class="text-white hover:text-emerald-400 transition-colors">projects</a> or <a href="#contact" class="text-white hover:text-emerald-400 transition-colors">get in touch</a>.
                </p>
                
            </div>
        </div>
    </section>


    <!-- Projects -->
    <section id="projects" class="py-16">
        <div class="max-w-4xl mx-auto px-6">
            <h2 class="text-2xl font-semibold text-white mb-4">Projects</h2>
            <p class="text-muted mb-12 max-w-xl">A selection of recent work — from branding sites to web applications.</p>
            
            <div class="space-y-12">
                <!-- AC Stipendium -->
                <x-web.project-showcase 
                    image="/images/projects/miyu-cli-screenshot.jpg"
                    alt="Aeschlimann Corti-Stipendium website"
                    description="Das Aeschlimann Corti-Stipendium ist ein renommiertes Förderstipendium für bildende Künstler:innen mit Bezug zum Kanton Bern. Seit 1942 werden jährlich Haupt- und Förderstipendien an junge, vielversprechende Künstler:innen vergeben."
                    link="https://ac-stipendium.ch"
                    linkText="ac-stipendium.ch"
                />
            </div>
        </div>
    </section>

    <!-- Contact -->
    <section id="contact" class="py-16">
        <div class="max-w-4xl mx-auto px-6">
            <h2 class="text-2xl font-semibold text-white mb-8">Let's chat</h2>
            
            <p class="text-muted text-lg leading-relaxed mb-8 max-w-xl">Got a project in mind? I'm always interested in hearing about new ideas and opportunities. Drop me a line and let's see what we can build together.</p>
            
            <div class="space-y-4 text-muted">
                <div class="space-y-1">
                    <p>Marcel Stadelmann</p>
                    <p>Letzigraben 149</p>
                    <p>8047 Zürich</p>
                </div>
                
                <div class="space-y-1">
                    <a href="tel:+41787497409" class="block hover:text-white transition-colors">078 749 74 09</a>
                    <a href="mailto:m@marceli.to" class="block text-emerald-400 hover:text-emerald-300 transition-colors">m@marceli.to</a>
                </div>
            </div>
        </div>
    </section>

</x-web.layout>
