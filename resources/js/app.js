import { createApp } from 'vue';
import '../css/app.css';
import ProjectCard from './components/ProjectCard.vue';
import ToolCard from './components/ToolCard.vue';

const app = createApp({});
app.component('project-card', ProjectCard);
app.component('tool-card', ToolCard);
app.mount('#app');
