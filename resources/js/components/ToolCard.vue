<template>
    <div class="bg-white/60 backdrop-blur-sm rounded-xl p-5 border border-gray-200/40 card-hover">
        <div class="flex items-center gap-3 mb-2">
            <span class="text-xl">{{ icon }}</span>
            <h4 class="font-medium">{{ title }}</h4>
        </div>
        <p class="text-sm text-gray-500">{{ description }}</p>
    </div>
</template>

<script>
export default {
    props: {
        icon: { type: String, default: '🔧' },
        title: { type: String, required: true },
        description: { type: String, required: true }
    }
}
</script>
