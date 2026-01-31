<?php

use Illuminate\Support\Facades\Route;

$projects = [
    'wbg-transfer' => [
        'slug' => 'wbg-transfer',
        'icon' => '📁',
        'iconColor' => 'cyan',
        'title' => 'WBG File Transfer',
        'tagline' => 'Secure file sharing with expiring links',
        'status' => 'Live',
        'tags' => ['Laravel', 'File Upload', 'API'],
        'description' => 'A simple, secure file transfer tool built for WBG. Upload files, get shareable links with configurable expiration, and manage transfers through a clean dashboard.',
        'features' => [
            'Drag-and-drop file uploads',
            'Unique token-based download links',
            'Configurable expiration (1 week, 1 month, 1 year, or never)',
            'Custom display names for shared files',
            'User authentication and file ownership',
            'API endpoints for programmatic uploads',
            'Automatic cleanup of expired files',
        ],
        'tech' => [
            'Laravel 11' => 'Backend framework with built-in file handling',
            'Livewire' => 'Reactive dashboard without page reloads',
            'Tailwind CSS' => 'Clean, minimal interface design',
            'Local Storage' => 'Secure file storage with token-based access',
        ],
        'how_it_works' => 'Users authenticate and upload files through the dashboard. Each file gets a unique token for secure sharing — the download URL contains only the token, not the filename. Files can be set to expire after a week, month, year, or never. The system tracks uploads per user and provides a simple management interface for renaming or deleting files.',
        'github' => null,
    ],
    'egli-gress-hueppi' => [
        'slug' => 'egli-gress-hueppi',
        'icon' => '⚽',
        'iconColor' => 'orange',
        'title' => 'Egli-Gress-Hüppi Tippspiel',
        'tagline' => 'Sports prediction game — rebuilt from scratch',
        'status' => 'Live',
        'tags' => ['Laravel', 'Livewire', 'Tailwind', 'Java Migration'],
        'description' => 'A complete rewrite of a legacy Java sports prediction game. Users compete by predicting match outcomes, with live scoring, leaderboards, and tournament brackets. Ported from a complex Java/Keycloak stack to a clean Laravel application.',
        'features' => [
            'Match predictions with live score updates',
            'Automatic point calculation based on prediction accuracy',
            'Real-time leaderboards and rankings',
            'Tournament brackets (group stage → knockouts)',
            'Special predictions (tournament winner, top scorer, etc.)',
            'User groups for private competitions',
            'Historical score tracking and statistics',
        ],
        'tech' => [
            'Laravel 11' => 'Modern PHP framework replacing legacy Java backend',
            'Livewire' => 'Reactive UI components without heavy JavaScript',
            'Tailwind CSS' => 'Utility-first styling for the new interface',
            'MySQL' => 'Database migrated from the original schema',
            'Vite' => 'Fast frontend build tooling',
        ],
        'how_it_works' => 'The original egli-gress was a Java application with Keycloak authentication and a complex deployment setup. We rebuilt it entirely in Laravel with a modern stack: Livewire for reactive components, Tailwind for styling, and simplified auth. The database schema was migrated and cleaned up, and the UI was completely redesigned for better mobile support.',
        'github' => null,
    ],
    'email-styler' => [
        'slug' => 'email-styler',
        'icon' => '📧',
        'iconColor' => 'blue',
        'title' => 'Email Styler',
        'tagline' => 'Write emails that sound like you',
        'status' => 'Live',
        'tags' => ['Ollama', 'Node.js', 'RAG', 'CLI'],
        'description' => 'A local AI tool that learns your email writing style and helps you write new emails that sound exactly like you. 100% local — uses Ollama for generation, no data leaves your machine.',
        'features' => [
            'Learns your writing style from your sent emails',
            'Generates new emails matching your tone and voice',
            'RAG-based retrieval finds similar emails as context',
            'Works entirely offline with local Ollama models',
            'Supports .txt and .eml email formats',
            'Privacy-first: all processing happens on your Mac',
        ],
        'commands' => [
            'email-styler ingest <dir>' => 'Import your sent emails from a directory',
            'email-styler write "prompt"' => 'Generate an email in your style',
            'email-styler list' => 'Show ingested emails',
            'email-styler test' => 'Test Ollama connection',
        ],
        'tech' => [
            'Ollama' => 'Local LLM inference with Llama 3.1 8B',
            'nomic-embed-text' => 'Local embeddings for similarity search',
            'Node.js' => 'CLI tool and processing logic',
            'RAG' => 'Retrieval-augmented generation for style matching',
        ],
        'how_it_works' => 'First, you ingest your sent emails — they get embedded using nomic-embed-text and stored locally in ~/.email-styler/. When you write, your prompt is embedded and similar emails are retrieved as style examples. These are fed to Llama 3.1 as context, which then generates a new email matching your writing style, tone, and voice.',
        'github' => null,
    ],
    'miyu-cli' => [
        'slug' => 'miyu-cli',
        'icon' => '🖥️',
        'iconColor' => 'purple',
        'title' => 'Miyu CLI',
        'tagline' => 'Chat with local Ollama models',
        'status' => 'Live',
        'tags' => ['Node.js', 'Ollama', 'CLI'],
        'description' => 'A simple, stylish CLI for chatting with local Ollama models. Quick prompts, interactive chat, streaming responses — all in your terminal.',
        'features' => [
            'Quick one-shot prompts from the command line',
            'Interactive chat sessions with history',
            'Streaming responses with live output',
            'Model switching on the fly',
            'Pull new models directly from the CLI',
            'Beautiful ASCII art and colored output',
        ],
        'commands' => [
            'miyu "Your prompt"' => 'Quick one-shot prompt',
            'miyu chat' => 'Start interactive chat session',
            'miyu chat -m mistral' => 'Chat with a specific model',
            'miyu models' => 'List installed Ollama models',
            'miyu pull llama3.2' => 'Download a new model',
        ],
        'tech' => [
            'Node.js' => 'JavaScript runtime for the CLI',
            'Ollama' => 'Local LLM inference engine',
            'Commander' => 'CLI framework for commands and options',
            'Chalk + Ora' => 'Colorful output and spinners',
        ],
        'how_it_works' => 'Miyu connects to your local Ollama instance and provides a friendly interface for chatting with LLMs. Run quick prompts or start an interactive session — responses stream in real-time with a clean, colorful terminal UI.',
        'github' => 'https://github.com/marceli-to/miyu-cli',
    ],
    'kimiyu' => [
        'slug' => 'kimiyu',
        'icon' => '💰',
        'iconColor' => 'green',
        'title' => 'kimiyu',
        'tagline' => 'Split expenses, not relationships',
        'status' => 'Beta',
        'tags' => ['Laravel', 'Vue', 'Tailwind'],
        'link' => 'https://kimiyu.ch',
        'description' => 'A simple expense splitting app designed for couples and housemates. Track shared costs, see who owes what, and settle up without spreadsheets or awkward math.',
        'features' => [
            'Quick expense logging in under 10 seconds',
            'Automatic 50/50 split calculations',
            'Recurring expense support for subscriptions',
            'Month-by-month expense history',
            'Real-time sync between partners',
            'Clean, mobile-friendly interface',
        ],
        'tech' => [
            'Laravel 12' => 'PHP framework for the backend API',
            'Vue.js 3' => 'Reactive frontend components',
            'Tailwind CSS 4' => 'Utility-first styling',
            'SQLite/MySQL' => 'Database for expense storage',
            'Vite' => 'Fast frontend build tooling',
        ],
        'how_it_works' => 'Users create a shared space and invite their partner. Each expense gets logged with who paid and the amount. The app automatically calculates running balances showing who owes whom. Recurring expenses (rent, subscriptions) can be set once and auto-appear each month.',
        'github' => null,
    ],
];

Route::get('/', function () use ($projects) {
    return view('welcome', ['projects' => $projects]);
});

Route::get('/project/{slug}', function ($slug) use ($projects) {
    if (!isset($projects[$slug])) {
        abort(404);
    }
    return view('project', ['project' => $projects[$slug], 'projects' => $projects]);
})->name('project.show');
