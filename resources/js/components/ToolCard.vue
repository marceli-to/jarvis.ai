<template>
    <div class="bg-white/60 backdrop-blur-sm rounded-xl p-5 border border-gray-200/40 card-hover">
        <div class="flex items-center gap-3 mb-2">
            <component :is="iconComponent" :size="20" weight="duotone" class="text-jarvis-600" />
            <h4 class="font-medium">{{ title }}</h4>
        </div>
        <p class="text-sm text-gray-500">{{ description }}</p>
    </div>
</template>

<script>
import { PhGlobe, PhCode, PhDeviceMobile, PhClock, PhBrain, PhPalette } from '@phosphor-icons/vue'

const iconMap = {
    'globe': PhGlobe,
    'code': PhCode,
    'device-mobile': PhDeviceMobile,
    'clock': PhClock,
    'brain': PhBrain,
    'palette': PhPalette,
}

export default {
    components: { PhGlobe, PhCode, PhDeviceMobile, PhClock, PhBrain, PhPalette },
    props: {
        icon: { type: String, default: 'globe' },
        title: { type: String, required: true },
        description: { type: String, required: true }
    },
    computed: {
        iconComponent() {
            return iconMap[this.icon] || PhGlobe
        }
    }
}
</script>
