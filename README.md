# Nathan Ferreira Portfolio Website

A modern, responsive portfolio website built with Laravel 11, Tailwind CSS, Vue 3, and interactive SVG/JS-powered modules.

## 🚀 Features

* **Responsive Design** – Mobile-first layout for a great experience on all devices
* **Interactive Project Cards** – Animated project cards with SVG illustrations
* **Text Analysis Module** – Research-backed sentiment analysis of user input
* **Quote Generator** – External API integration with smooth in-page transitions
* **GitHub Works Pages** – Dynamic pages to showcase GitHub projects
* **Feedback & Contact System** – Feedback page, contact form, and stored messages
* **Smooth Animations** – AOS (Animate on Scroll) + custom JavaScript animations
* **Clean Component Structure** – Modular Blade components and pages for easy maintenance

## 🛠️ Technology Stack

* **Backend**: Laravel 11 (PHP 8.2)
* **Frontend**: Tailwind CSS, JavaScript, Vue 3, Alpine.js
* **Animations**: AOS (Animate on Scroll), custom JS (Vite-bundled)
* **Icons**: Font Awesome
* **HTTP / API**: Laravel HTTP client, Axios (via Vue components)
* **Build Tools**: Vite, NPM

## 📁 Project Structure (Key Folders)

```
resources/
├── css/
│   └── app.css
├── js/
│   ├── app.js
│   ├── home.js
│   ├── projectAnimation.js
│   ├── textAnimation.js
│   └── components/
│       └── TextAnalyzer.vue
└── views/
    ├── components/
    │   └── layout.blade.php
    ├── partials/
    │   ├── nav.blade.php
    │   └── footer.blade.php
    ├── pages/
    │   ├── home.blade.php
    │   ├── about.blade.php
    │   ├── services.blade.php
    │   ├── feedback.blade.php
    │   ├── portfolio.blade.php
    │   ├── portfolio2.blade.php
    │   ├── works.blade.php
    │   └── workss.blade.php
    ├── contacts/
    │   └── contact.blade.php
    ├── analyze/
    │   └── analyze.blade.php
    ├── sections/
    │   ├── box2.blade.php
    │   ├── driverApp.blade.php
    │   ├── financeApp.blade.php
    │   └── svgs/
    └── svgs/
        └── dogs.blade.php
```

## 🌟 Main Modules

### 1. Featured Projects

* Modular project cards with hover/scroll animations
* Technology stacks displayed via icons
* Links to GitHub and live demos
* Adding a new project: create a new section and include in the page

### 2. Text Analysis Module

* Paste text and receive:

    * Word & character counts
    * Sentiment score (positive, negative, neutral)
    * Lists of positive/negative words
* Vue component `TextAnalyzer.vue` handles API-driven analysis

### 3. Quote Generator

* Backend `/quotes` endpoint proxies external API
* Smooth fade-in/out transitions
* Button cycles through cached quotes

### 4. GitHub “Works” Pages

* `/works` and `/workss` showcase GitHub projects in different layouts
* Ready for API integration or local data

### 5. Feedback & Contact

* `/feedback` – Feedback submission and listing
* `/contact` – Contact form for clients/collaborators
* `/messages` – View stored contact messages (admin use)

### 6. Blog & Admin Visits

* `/blog` – Resourceful routes (index, show, create, update)
* `/admin/visits` – Admin-facing analytics/visit view

### 7. Layout, Navigation & Animations

* Global layout handles meta tags, SEO, and skip-to-content link
* Navigation fully responsive with mobile toggled menu
* AOS animations initialized and tuned for devices

## 🧭 Routes Overview

| Route                       | Description                     |
| --------------------------- | ------------------------------- |
| `/`                         | Home                            |
| `/about`                    | About page                      |
| `/services`                 | Services page                   |
| `/portfolio`, `/portfolio2` | Portfolio layouts               |
| `/works`, `/workss`         | GitHub works pages              |
| `/feedback`                 | Feedback page                   |
| `/contact`                  | Contact form                    |
| `/messages`                 | Stored messages                 |
| `/blog`                     | Blog (resourceful routes)       |
| `/analyze` (GET/POST)       | Text analysis form & processing |
| `/quotes`                   | JSON quotes API                 |
| `/dogs`                     | SVG demo page                   |
| `/admin/visits`             | Visits/analytics page           |

## 📝 Setup Instructions

1. **Clone the repository**

```bash
git clone https://github.com/nathansolfan/showsite.git
cd showsite
```

2. **Install PHP dependencies**

```bash
composer install
```

3. **Install Node.js dependencies**

```bash
npm install
```

4. **Configure environment**

```bash
cp .env.example .env
php artisan key:generate
```

Update `.env` with database and API configs.

5. **Run database migrations**

```bash
php artisan migrate
```

6. **Compile assets**

```bash
npm run dev
# npm run build for production
```

7. **Serve the application**

```bash
php artisan serve
```

Open `http://127.0.0.1:8000` in your browser.

## 🚀 Live Demo

[https://nathanferreira.com](https://nathanferreira.com)

## 📄 License

MIT License
