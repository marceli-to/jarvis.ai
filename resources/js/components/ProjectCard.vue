<template>
    <a :href="'/project/' + slug" class="block bg-white/60 backdrop-blur-sm rounded-2xl p-8 card-hover">
        <div class="flex items-start justify-between mb-4">
            <div class="w-12 h-12 rounded-xl flex items-center justify-center" :class="iconBgClass">
                <span class="text-2xl">{{ icon }}</span>
            </div>
            <span v-if="status" class="text-xs px-2 py-1 rounded-full" :class="statusClass">{{ status }}</span>
        </div>
        <h3 class="font-bold text-lg mb-2">{{ title }}</h3>
        <p class="text-gray-500 text-sm mb-4">{{ description }}</p>
        <div class="flex flex-wrap gap-2">
            <span v-for="tag in tags" :key="tag" class="text-xs bg-gray-100 text-gray-600 px-2 py-1 rounded-full">{{ tag }}</span>
        </div>
        <span class="inline-flex items-center gap-1 text-sm text-jarvis-600 mt-4">View details →</span>
    </a>
</template>

<script>
export default {
    props: {
        slug: { type: String, required: true },
        icon: { type: String, default: '🤖' },
        iconColor: { type: String, default: 'cyan' },
        title: { type: String, required: true },
        description: { type: String, required: true },
        tags: { type: Array, default: () => [] },
        status: { type: String, default: null }
    },
    computed: {
        iconBgClass() {
            const colors = { cyan: 'bg-cyan-100', blue: 'bg-blue-100', green: 'bg-green-100', purple: 'bg-purple-100', orange: 'bg-orange-100', pink: 'bg-pink-100' };
            return colors[this.iconColor] || colors.cyan;
        },
        statusClass() {
            const statuses = { 'Live': 'bg-green-100 text-green-700', 'In Progress': 'bg-yellow-100 text-yellow-700', 'Planned': 'bg-gray-100 text-gray-600', 'Beta': 'bg-purple-100 text-purple-700' };
            return statuses[this.status] || 'bg-gray-100 text-gray-600';
        }
    }
}
</script>
