# Nathan Ferreira Portfolio Website

A modern, responsive portfolio website built with Laravel, Tailwind CSS, and interactive SVG animations.


## 🚀 Features

- **Responsive Design**: Mobile-first approach ensuring great experience on all devices
- **Interactive Project Cards**: Animated project cards with SVG illustrations
- **Modern Tech Stack**: Laravel, Tailwind CSS, and JavaScript
- **Smooth Animations**: AOS (Animate on Scroll) integration for subtle page animations
- **Clean Component Structure**: Modular Blade components for easy maintenance

## 🛠️ Technology Stack

- **Backend**: Laravel 10+
- **Frontend**: Tailwind CSS, JavaScript
- **Animations**: AOS (Animate on Scroll)
- **Icons**: Font Awesome
- **Build Tools**: Vite

## 📁 Project Structure

```
resources/
├── css/
│   └── app.css            # Main CSS file with Tailwind imports
├── js/
│   ├── app.js             # Main JavaScript file
│   ├── home.js            # Home page specific scripts
│   ├── projectAnimation.js # Project card animations
│   └── textAnimation.js   # Text animation effects
└── views/
    ├── components/
    │   └── layout.blade.php # Main layout template
    ├── pages/
    │   ├── home.blade.php   # Home page view
    │   └── skillsStatic.blade.php # Skills section
    ├── partials/
    │   └── nav.blade.php    # Navigation component
    └── sections/
        ├── box2.blade.php      # Project card
        ├── driverApp.blade.php # Driver app project card
        ├── financeApp.blade.php # Finance app project card
        └── svgs/              # SVG components
```

## 🌟 Key Code Features

### Creative Project Cards

Each project is displayed in a visually appealing card with:
- Interactive SVG illustrations
- Hover animations
- Technology icons
- GitHub and live demo links

### Dynamic Content Rendering

The site uses Laravel's Blade templating to dynamically render projects:

```php
@foreach ($project['tech'] as $tech)
    <div class="tech-item flex flex-col items-center transition duration-300 transform hover:scale-110">
        <i class="{{ $tech['icon'] }} text-5xl text-gray-900"></i>
    </div>
@endforeach
```

### Responsive Navigation

Fully responsive navigation with smooth mobile menu transitions.

## 🚀 Live Demo

Visit [nathanferreira.com](https://nathanferreira.com) to see the site in action.

## 📝 Setup Instructions

1. Clone the repository
   ```
   git clone https://github.com/nathansolfan/showsite.git
   ```

2. Install dependencies
   ```
   composer install
   npm install
   ```

3. Set up environment variables
   ```
   cp .env.example .env
   php artisan key:generate
   ```

4. Compile assets
   ```
   npm run dev
   ```

5. Serve the application
   ```
   php artisan serve
   ```

## 📄 License

This project is open-source under the MIT License.
