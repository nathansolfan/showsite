Nathan Ferreira — Portfolio Website

A modern full-stack portfolio built with Laravel 11, Vue 3, TailwindCSS, and interactive SVG/JS animations.
Live Demo: https://nathanferreira.com

🚀 Overview

This project serves as a portfolio platform showcasing my development skills across backend, frontend, UI/UX, API integration, data processing, animations, and architectural best practices.

It includes:

Custom-built UI components

Interactive SVG animations

A sentiment-analysis module

Blog system

API integrations

Contact & feedback system

GitHub project showcase pages

Admin analytics

Designed with a clean structure, scalable codebase, and modern Laravel standards.

✨ Features
🖥️ Frontend

Fully responsive layout

TailwindCSS + custom animations

Vue 3 + Axios + Vite

AOS scroll animations

SVG-based interactive modules

Modular Blade components

🧠 Text Analysis Module

Sentiment score (positive / negative / neutral)

Word and character counts

Highlighted positive/negative words

Powered by a Vue 3 component (TextAnalyzer.vue)

Backend processing using pre-generated lexicon JSON files

🎨 Portfolio & GitHub Works

Animated project cards

Two layout variations (/portfolio and /portfolio2)

GitHub project showcases at /works and /workss

🔌 External API Integration

Quote generator using a third-party API

Backend proxy endpoint /quotes

Smooth transitions and cached responses

📝 Blog System

Resourceful routes

Create / edit / delete posts

Clean admin UX

SEO-ready structure

💬 Contact & Feedback System

/contact — form with validation

/feedback — user feedback submission

/messages — admin message viewer

Stored in the database

📊 Admin Visits / Analytics

/admin/visits displays visit tracking

Designed for future extension (charts, logs, user insights)

🛠️ Technology Stack
Backend

Laravel 11

PHP 8.2

Laravel HTTP Client

Eloquent ORM

Blade templates

Frontend

Vue 3

TailwindCSS

Alpine.js

AOS animations

Vite bundler

Other

Font Awesome

Axios

MySQL or SQLite

Deployed via Laravel Forge on a VPS

📁 Project Structure
resources/
├── css/app.css
├── js/
│   ├── app.js
│   ├── home.js
│   ├── projectAnimation.js
│   ├── textAnimation.js
│   └── components/TextAnalyzer.vue
└── views/
├── components/
├── partials/
├── pages/
├── contacts/
├── analyze/
├── sections/
└── svgs/

🧭 Routes Overview
Route	Description
/	Home
/about	About
/services	Services
/portfolio, /portfolio2	Portfolio layouts
/works, /workss	GitHub project pages
/feedback	Feedback
/contact	Contact form
/messages	View stored messages
/blog	Blog CRUD
/analyze	Text analysis
/quotes	Quote API via backend
/dogs	SVG demo
/admin/visits	Admin analytics
🧪 Testing (PHPUnit)

This project includes initial Laravel feature tests.
Recommended future additions:

Blog CRUD tests

Contact form validation tests

API integration tests

Vue component tests via Dusk or Playwright

🛠️ Automated CI (GitHub Actions)

You can enable continuous integration with:

Composer install

Node build

PHPUnit tests

Laravel Pint (code style)

If you want, I can generate this file for you:

.github/workflows/ci.yml


Just say:
👉 “Generate GitHub Actions for Laravel 11”

🧑‍💻 Local Setup
git clone https://github.com/nathansolfan/showsite.git
cd showsite

composer install
npm install

cp .env.example .env
php artisan key:generate

php artisan migrate
npm run dev

php artisan serve

🌍 Live Demo

https://nathanferreira.com

Hosted on Laravel Forge + VPS
