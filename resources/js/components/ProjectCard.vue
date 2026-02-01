<template>
    <a :href="'/project/' + slug" class="block bg-white/60 backdrop-blur-sm rounded-2xl p-8 card-hover">
        <div v-if="status" class="mb-2">
            <span class="text-xs px-2 py-1 rounded-full" :class="statusClass">{{ status }}</span>
        </div>
        <h3 class="font-bold text-lg mb-2">{{ title }}</h3>
        <p class="text-gray-500 text-sm mb-4">{{ description }}</p>
        <div class="flex flex-wrap gap-2">
            <span v-for="tag in tags" :key="tag" class="text-xs bg-jarvis-600 text-white px-2 py-1 rounded-full">{{ tag }}</span>
        </div>
        <div class="text-right mt-4">
            <span class="inline-flex items-center gap-1 text-sm text-jarvis-600">View details →</span>
        </div>
    </a>
</template>

<script>
export default {
    props: {
        slug: { type: String, required: true },
        title: { type: String, required: true },
        description: { type: String, required: true },
        tags: { type: Array, default: () => [] },
        status: { type: String, default: null }
    },
    computed: {
        statusClass() {
            const statuses = { 'Live': 'bg-green-100 text-green-700', 'In Progress': 'bg-yellow-100 text-yellow-700', 'Planned': 'bg-gray-100 text-gray-600', 'Beta': 'bg-purple-100 text-purple-700' };
            return statuses[this.status] || 'bg-gray-100 text-gray-600';
        }
    }
}
</script>
