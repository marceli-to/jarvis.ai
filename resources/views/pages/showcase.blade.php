<x-layout title="UI Components" description="Component showcase for Jarvis.ai design system">

    <main class="relative z-10 max-w-4xl mx-auto px-6 pt-32 pb-24">

        {{-- Page header --}}
        <div class="mb-16">
            <x-ui.heading size="xl" tag="h1">UI Components</x-ui.heading>
            <p class="text-subtle text-lg mt-4 max-w-2xl">A showcase of reusable components from the Jarvis.ai design system.</p>
        </div>

        {{-- Typography --}}
        <section class="mb-20">
            <h2 class="text-white text-sm font-medium uppercase tracking-widest mb-6">Typography</h2>
            <x-ui.divider class="mb-8" />

            <div class="space-y-6">
                <x-ui.heading size="xl" tag="h3">Heading XL</x-ui.heading>
                <x-ui.heading size="lg" tag="h3">Heading LG</x-ui.heading>
                <p class="text-white text-lg">Body text — white</p>
                <p class="text-muted">Muted text — gray-300</p>
                <p class="text-subtle">Subtle text — gray-400</p>
                <p class="text-gradient text-2xl font-semibold">Gradient text</p>
            </div>
        </section>

        {{-- Cards --}}
        <section class="mb-20">
            <h2 class="text-white text-sm font-medium uppercase tracking-widest mb-6">Cards</h2>
            <x-ui.divider class="mb-8" />

            <div class="grid gap-4 sm:grid-cols-2">
                <x-ui.card>
                    <h3 class="text-white font-semibold mb-2">Default Card</h3>
                    <p class="text-subtle text-sm">A basic card with hover border animation.</p>
                </x-ui.card>

                <x-ui.card interactive>
                    <h3 class="text-white font-semibold mb-2">Interactive Card</h3>
                    <p class="text-subtle text-sm">Lifts on hover with a pointer cursor.</p>
                </x-ui.card>

                <x-ui.card glow>
                    <h3 class="text-white font-semibold mb-2">Glow Card</h3>
                    <p class="text-subtle text-sm">Subtle glow effect on hover.</p>
                </x-ui.card>

                <x-ui.card href="#" interactive>
                    <h3 class="text-white font-semibold mb-2">Linked Card</h3>
                    <p class="text-subtle text-sm">Renders as an anchor tag.</p>
                </x-ui.card>
            </div>
        </section>

        {{-- Buttons --}}
        <section class="mb-20">
            <h2 class="text-white text-sm font-medium uppercase tracking-widest mb-6">Buttons</h2>
            <x-ui.divider class="mb-8" />

            <div class="flex flex-wrap gap-4">
                <x-ui.button>Primary</x-ui.button>
                <x-ui.button variant="secondary">Secondary</x-ui.button>
                <x-ui.button icon="ph ph-arrow-right">With Icon</x-ui.button>
                <x-ui.button variant="secondary" icon="ph ph-github-logo" href="#">Link Button</x-ui.button>
            </div>
        </section>

        {{-- Badges & Tags --}}
        <section class="mb-20">
            <h2 class="text-white text-sm font-medium uppercase tracking-widest mb-6">Badges &amp; Tags</h2>
            <x-ui.divider class="mb-8" />

            <div class="space-y-6">
                <div class="flex flex-wrap gap-3">
                    <x-ui.badge>Default</x-ui.badge>
                    <x-ui.badge variant="success">
                        <x-ui.status-dot status="online" />
                        Live
                    </x-ui.badge>
                    <x-ui.badge variant="gradient">Gradient</x-ui.badge>
                </div>

                <div class="flex flex-wrap gap-2">
                    <x-ui.tag>Laravel</x-ui.tag>
                    <x-ui.tag>Tailwind</x-ui.tag>
                    <x-ui.tag>Blade</x-ui.tag>
                    <x-ui.tag>Vite</x-ui.tag>
                </div>
            </div>
        </section>

        {{-- Indicators --}}
        <section class="mb-20">
            <h2 class="text-white text-sm font-medium uppercase tracking-widest mb-6">Indicators</h2>
            <x-ui.divider class="mb-8" />

            <div class="space-y-6">
                <div class="flex items-center gap-6">
                    <div class="flex items-center gap-2">
                        <x-ui.status-dot status="online" />
                        <span class="text-sm text-gray-300">Online</span>
                    </div>
                    <div class="flex items-center gap-2">
                        <x-ui.status-dot status="offline" />
                        <span class="text-sm text-gray-300">Offline</span>
                    </div>
                </div>

                <div class="flex gap-3">
                    <x-ui.icon-box icon="ph ph-lightning" />
                    <x-ui.icon-box icon="ph ph-code" />
                    <x-ui.icon-box icon="ph ph-gear" />
                </div>

                <x-ui.divider />
            </div>
        </section>

        {{-- Links --}}
        <section class="mb-20">
            <h2 class="text-white text-sm font-medium uppercase tracking-widest mb-6">Links</h2>
            <x-ui.divider class="mb-8" />

            <div class="flex flex-wrap gap-6">
                <x-ui.link href="#">Internal link</x-ui.link>
                <x-ui.link href="#" external>External link</x-ui.link>
            </div>
        </section>

        {{-- Form Elements --}}
        <section class="mb-20">
            <h2 class="text-white text-sm font-medium uppercase tracking-widest mb-6">Form Elements</h2>
            <x-ui.divider class="mb-8" />

            <div class="space-y-6 max-w-md">
                <x-ui.input name="demo_name" label="Name" placeholder="Enter your name" help="Your full name." />

                <x-ui.input name="demo_email" label="Email" type="email" placeholder="you@example.com" error="Please enter a valid email address." />

                <x-ui.textarea name="demo_message" label="Message" placeholder="Write something..." rows="3" />

                <x-ui.select
                    name="demo_role"
                    label="Role"
                    :options="['dev' => 'Developer', 'design' => 'Designer', 'pm' => 'Product Manager']"
                />

                <div class="space-y-3">
                    <p class="block text-sm font-normal text-gray-300">Checkboxes</p>
                    <div class="flex flex-col gap-2">
                        <x-ui.checkbox name="feature_1" label="Dark mode" checked />
                        <x-ui.checkbox name="feature_2" label="Notifications" />
                        <x-ui.checkbox name="feature_3" label="Analytics" />
                    </div>
                </div>

                <div class="space-y-3">
                    <p class="block text-sm font-normal text-gray-300">Radio buttons</p>
                    <div class="flex flex-col gap-2">
                        <x-ui.radio name="plan" value="free" label="Free" checked />
                        <x-ui.radio name="plan" value="pro" label="Pro" />
                        <x-ui.radio name="plan" value="enterprise" label="Enterprise" />
                    </div>
                </div>

                <div class="space-y-3">
                    <p class="block text-sm font-normal text-gray-300">Toggles</p>
                    <div class="flex flex-col gap-3">
                        <x-ui.toggle name="toggle_1" label="Enable feature" checked />
                        <x-ui.toggle name="toggle_2" label="Send notifications" />
                    </div>
                </div>
            </div>
        </section>

        {{-- Alerts --}}
        <section class="mb-20">
            <h2 class="text-white text-sm font-medium uppercase tracking-widest mb-6">Alerts</h2>
            <x-ui.divider class="mb-8" />

            <div class="space-y-4">
                <x-ui.alert variant="info">This is an informational message.</x-ui.alert>
                <x-ui.alert variant="success">Operation completed successfully.</x-ui.alert>
                <x-ui.alert variant="warning">Please review before continuing.</x-ui.alert>
                <x-ui.alert variant="error">Something went wrong. Please try again.</x-ui.alert>
                <x-ui.alert variant="info" dismissible>This alert can be dismissed.</x-ui.alert>
            </div>
        </section>

        {{-- Avatars --}}
        <section class="mb-20">
            <h2 class="text-white text-sm font-medium uppercase tracking-widest mb-6">Avatars</h2>
            <x-ui.divider class="mb-8" />

            <div class="flex items-end gap-4">
                <x-ui.avatar size="sm" initials="SM" />
                <x-ui.avatar size="md" initials="MD" />
                <x-ui.avatar size="lg" initials="LG" />
                <x-ui.avatar size="md" />
            </div>
        </section>

        {{-- Code Blocks --}}
        <section class="mb-20">
            <h2 class="text-white text-sm font-medium uppercase tracking-widest mb-6">Code Blocks</h2>
            <x-ui.divider class="mb-8" />

            <div class="space-y-4">
                <x-ui.code-block language="bash">npm install && npm run build</x-ui.code-block>

                <x-ui.code-block language="php" filename="web.php">Route::view('/components', 'pages.showcase');</x-ui.code-block>
            </div>
        </section>

        {{-- Lists --}}
        <section class="mb-20">
            <h2 class="text-white text-sm font-medium uppercase tracking-widest mb-6">Lists</h2>
            <x-ui.divider class="mb-8" />

            <ul class="space-y-3">
                <x-ui.list-item>Blade components for every UI primitive</x-ui.list-item>
                <x-ui.list-item>Consistent dark-theme styling</x-ui.list-item>
                <x-ui.list-item icon="ph ph-star" iconColor="text-yellow-400">Custom icon and color</x-ui.list-item>
                <x-ui.list-item icon="ph ph-x" iconColor="text-red-400">Error state example</x-ui.list-item>
            </ul>
        </section>

    </main>

</x-layout>
