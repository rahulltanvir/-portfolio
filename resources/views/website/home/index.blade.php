
@extends('website.master')

@section('title', 'Md. Tanvir Rahman | Laravel & WordPress Developer')

@section('meta_description', 'Md. Tanvir Rahman is a Laravel, PHP, WordPress and eCommerce Developer building modern and professional web solutions.')

@section('content')

    {{-- ================================
        HERO SECTION
    ================================= --}}

    <section class="hero-section" id="home">

        <div class="hero-grid"></div>

        <div class="container">

            <div class="row align-items-center min-vh-100">

                {{-- Hero Content --}}
                <div class="col-lg-7">

                    <div class="hero-content">

                        <span class="hero-badge">
                            <span class="status-dot"></span>
                            Available for Freelance Work
                        </span>


                        <h1 class="hero-title">

                            Hi, I'm
                            <span class="gradient-text">
                                Md. Tanvir Rahman
                            </span>

                            <br>

                            <span class="hero-role">
                                Laravel & PHP Developer
                            </span>

                        </h1>


                        <p class="hero-description">

                            I build modern, scalable and high-performance
                            websites and web applications using Laravel,
                            PHP, WordPress and modern web technologies.

                            <br>

                            <span class="highlight-text">
                                Turning ideas into powerful digital solutions.
                            </span>

                        </p>


                        {{-- Skills Tags --}}
                        <div class="hero-skills">

                            <span>
                                <i class="fa-brands fa-laravel"></i>
                                Laravel
                            </span>

                            <span>
                                <i class="fa-brands fa-php"></i>
                                PHP
                            </span>

                            <span>
                                <i class="fa-brands fa-wordpress"></i>
                                WordPress
                            </span>

                            <span>
                                <i class="fa-solid fa-cart-shopping"></i>
                                eCommerce
                            </span>

                        </div>


                        {{-- Buttons --}}
                        <div class="hero-buttons">

                            <a href="#projects"
                               class="btn btn-primary-custom">

                                View My Work

                                <i class="fa-solid fa-arrow-right ms-2"></i>

                            </a>


                            <a href="#contact"
                               class="btn btn-outline-custom">

                                <i class="fa-regular fa-paper-plane me-2"></i>

                                Hire Me

                            </a>

                        </div>


                        {{-- Social Links --}}
                        <div class="hero-social">

                            <span>Follow me:</span>

                            <a href="#" aria-label="GitHub">
                                <i class="fa-brands fa-github"></i>
                            </a>

                            <a href="#" aria-label="LinkedIn">
                                <i class="fa-brands fa-linkedin-in"></i>
                            </a>

                            <a href="#" aria-label="Facebook">
                                <i class="fa-brands fa-facebook-f"></i>
                            </a>

                        </div>

                    </div>

                </div>


                {{-- Developer Visual --}}
                <div class="col-lg-5">

                    <div class="developer-visual">

                        <div class="code-window">

                            <div class="window-header">

                                <div class="window-dots">
                                    <span></span>
                                    <span></span>
                                    <span></span>
                                </div>

                                <div class="window-title">
                                    portfolio.php
                                </div>

                            </div>


                            <div class="code-body">

                                <div>
                                    <span class="code-purple">
                                        &lt;?php
                                    </span>
                                </div>

                                <br>

                                <div>
                                    <span class="code-purple">
                                        class
                                    </span>

                                    <span class="code-blue">
                                        Developer
                                    </span>

                                    <span class="code-white">
                                        {
                                    </span>
                                </div>


                                <div class="code-indent">

                                    <span class="code-purple">
                                        public
                                    </span>

                                    <span class="code-blue">
                                        $name
                                    </span>

                                    <span class="code-white">
                                        =
                                    </span>

                                    <span class="code-green">
                                        "Tanvir Rahman";
                                    </span>

                                </div>


                                <div class="code-indent">

                                    <span class="code-purple">
                                        public
                                    </span>

                                    <span class="code-blue">
                                        $role
                                    </span>

                                    <span class="code-white">
                                        =
                                    </span>

                                    <span class="code-green">
                                        "Laravel Developer";
                                    </span>

                                </div>


                                <div class="code-indent">

                                    <span class="code-purple">
                                        public
                                    </span>

                                    <span class="code-blue">
                                        $skills
                                    </span>

                                    <span class="code-white">
                                        =
                                    </span>

                                </div>


                                <div class="code-indent-2">

                                    <span class="code-white">
                                        [
                                    </span>

                                </div>


                                <div class="code-indent-3">

                                    <span class="code-green">
                                        "Laravel",
                                    </span>

                                </div>


                                <div class="code-indent-3">

                                    <span class="code-green">
                                        "PHP",
                                    </span>

                                </div>


                                <div class="code-indent-3">

                                    <span class="code-green">
                                        "WordPress",
                                    </span>

                                </div>


                                <div class="code-indent-3">

                                    <span class="code-green">
                                        "eCommerce"
                                    </span>

                                </div>


                                <div class="code-indent-2">

                                    <span class="code-white">
                                        ];
                                    </span>

                                </div>


                                <div>

                                    <span class="code-white">
                                        }
                                    </span>

                                </div>


                                <br>


                                <div>

                                    <span class="code-purple">
                                        echo
                                    </span>

                                    <span class="code-green">
                                        "Let's build something great!";
                                    </span>

                                </div>

                                <div class="cursor-line">
                                    <span class="cursor"></span>
                                </div>

                            </div>

                        </div>


                        {{-- Floating Cards --}}

                        <div class="floating-card card-laravel">

                            <i class="fa-brands fa-laravel"></i>

                            <div>
                                <strong>Laravel</strong>
                                <small>PHP Framework</small>
                            </div>

                        </div>


                        <div class="floating-card card-wordpress">

                            <i class="fa-brands fa-wordpress"></i>

                            <div>
                                <strong>WordPress</strong>
                                <small>Elementor</small>
                            </div>

                        </div>


                        <div class="floating-card card-ecommerce">

                            <i class="fa-solid fa-cart-shopping"></i>

                            <div>
                                <strong>eCommerce</strong>
                                <small>Web Solutions</small>
                            </div>

                        </div>

                    </div>

                </div>

            </div>

        </div>

    </section>


    {{-- ================================
        QUICK INTRO
    ================================= --}}

    <section class="quick-intro">

        <div class="container">

            <div class="row g-4">

                <div class="col-md-4">

                    <div class="intro-card">

                        <div class="intro-icon">
                            <i class="fa-solid fa-code"></i>
                        </div>

                        <div>

                            <h5>Laravel Development</h5>

                            <p>
                                Custom web applications with
                                Laravel & PHP.
                            </p>

                        </div>

                    </div>

                </div>


                <div class="col-md-4">

                    <div class="intro-card">

                        <div class="intro-icon">
                            <i class="fa-brands fa-wordpress"></i>
                        </div>

                        <div>

                            <h5>WordPress Development</h5>

                            <p>
                                Professional websites using
                                WordPress & Elementor.
                            </p>

                        </div>

                    </div>

                </div>


                <div class="col-md-4">

                    <div class="intro-card">

                        <div class="intro-icon">
                            <i class="fa-solid fa-cart-shopping"></i>
                        </div>

                        <div>

                            <h5>eCommerce Solutions</h5>

                            <p>
                                Modern online stores with
                                powerful features.
                            </p>

                        </div>

                    </div>

                </div>

            </div>

        </div>

    </section>
    {{-- ================================ ABOUT SECTION================================= --}}

<section class="about-section" id="about">

<div class="container">

    {{-- Section Heading --}}
    <div class="section-heading">

        <span class="section-label">
            <span></span>
            ABOUT ME
        </span>

        <h2>
            I Build Digital
            <span class="gradient-text">Experiences.</span>
        </h2>

        <p>
            Turning ideas into modern, scalable and meaningful
            digital products through clean code and thoughtful design.
        </p>

    </div>


    <div class="row align-items-center g-5">


        {{-- ================================
            LEFT — DEVELOPER CARD
        ================================= --}}

        <div class="col-lg-5">

            <div class="developer-profile-card">

                {{-- Card Header --}}
                <div class="profile-card-header">

                    <div class="profile-dots">
                        <span></span>
                        <span></span>
                        <span></span>
                    </div>

                    <span>
                        developer.php
                    </span>

                </div>


                {{-- Code --}}
                <div class="profile-code">

                    <div>
                        <span class="code-purple">class</span>
                        <span class="code-blue">Developer</span>
                        <span class="code-white">{</span>
                    </div>

                    <br>

                    <div class="code-line">

                        <span class="code-purple">public</span>

                        <span class="code-blue">
                            $name
                        </span>

                        <span class="code-white">
                            =
                        </span>

                        <span class="code-green">
                            "Tanvir Rahman";
                        </span>

                    </div>


                    <div class="code-line">

                        <span class="code-purple">public</span>

                        <span class="code-blue">
                            $role
                        </span>

                        <span class="code-white">
                            =
                        </span>

                        <span class="code-green">
                            "Web Developer";
                        </span>

                    </div>


                    <div class="code-line">

                        <span class="code-purple">public</span>

                        <span class="code-blue">
                            $focus
                        </span>

                        <span class="code-white">
                            =
                        </span>

                        <span class="code-green">
                            "Web Solutions";
                        </span>

                    </div>


                    <div class="code-line">

                        <span class="code-purple">public</span>

                        <span class="code-blue">
                            $mindset
                        </span>

                        <span class="code-white">
                            =
                        </span>

                        <span class="code-green">
                            "Always Learning";
                        </span>

                    </div>


                    <br>

                    <div>
                        <span class="code-white">}</span>
                    </div>


                    <div class="code-status">

                        <span class="status-dot"></span>

                        <span>
                            Available for new projects
                        </span>

                    </div>

                </div>

            </div>


            {{-- Experience Badge --}}
            <div class="about-experience">

                <div class="experience-icon">
                    <i class="fa-solid fa-code"></i>
                </div>

                <div>

                    <strong>
                        Web Development
                    </strong>

                    <small>
                        Laravel • PHP • WordPress
                    </small>

                </div>

            </div>

        </div>


        {{-- ================================
            RIGHT — CONTENT
        ================================= --}}

        <div class="col-lg-7">

            <div class="about-content">

                <span class="about-eyebrow">
                    WHO I AM
                </span>

                <h3>
                    A Developer Who Turns
                    <span class="gradient-text">
                        Ideas Into Reality
                    </span>
                </h3>


                <p>
                    I'm <strong>Md. Tanvir Rahman</strong>, a web
                    developer focused on building modern,
                    functional and scalable web solutions.
                </p>

                <p>
                    My primary expertise is Laravel and PHP
                    development. I enjoy creating custom web
                    applications, business platforms and
                    eCommerce solutions that are reliable,
                    maintainable and easy to use.
                </p>

                <p>
                    I also work with WordPress and Elementor,
                    helping businesses build professional,
                    responsive and conversion-focused websites.
                </p>


                {{-- Feature Grid --}}
                <div class="about-feature-grid">

                    <div class="about-feature">

                        <div class="feature-icon">
                            <i class="fa-solid fa-code"></i>
                        </div>

                        <div>

                            <h5>
                                Clean Code
                            </h5>

                            <p>
                                Structured and maintainable
                                development.
                            </p>

                        </div>

                    </div>


                    <div class="about-feature">

                        <div class="feature-icon">
                            <i class="fa-solid fa-mobile-screen-button"></i>
                        </div>

                        <div>

                            <h5>
                                Responsive
                            </h5>

                            <p>
                                Perfect across all devices.
                            </p>

                        </div>

                    </div>


                    <div class="about-feature">

                        <div class="feature-icon">
                            <i class="fa-solid fa-gauge-high"></i>
                        </div>

                        <div>

                            <h5>
                                Performance
                            </h5>

                            <p>
                                Fast and optimized solutions.
                            </p>

                        </div>

                    </div>


                    <div class="about-feature">

                        <div class="feature-icon">
                            <i class="fa-solid fa-lightbulb"></i>
                        </div>

                        <div>

                            <h5>
                                Problem Solving
                            </h5>

                            <p>
                                Turning complex ideas into
                                simple solutions.
                            </p>

                        </div>

                    </div>

                </div>


                {{-- CTA --}}
                <div class="about-cta">

                    <a href="#projects"
                       class="btn btn-primary-custom">

                        Explore My Work

                        <i class="fa-solid fa-arrow-right ms-2"></i>

                    </a>

                    <a href="#contact"
                       class="about-text-link">

                        Let's Talk

                        <i class="fa-solid fa-arrow-up-right-from-square ms-1"></i>

                    </a>

                </div>

            </div>

        </div>

    </div>

</div>


</section>
{{-- ================================
SKILLS / TECH STACK SECTION
================================= --}}

<section class="skills-section" id="skills">

<div class="container">

    <div class="section-heading">

        <span class="section-label">
            <span></span>
            TECH STACK
        </span>

        <h2>
            Tools I Use To
            <span class="gradient-text">Build.</span>
        </h2>

        <p>
            A carefully selected stack of technologies I use to
            build modern, scalable and high-performance websites
            and web applications.
        </p>

    </div>


    <div class="row g-4">


        {{-- Laravel --}}
        <div class="col-lg-3 col-md-4 col-6">

            <div class="skill-card">

                <div class="skill-icon laravel-icon">
                    <i class="fa-brands fa-laravel"></i>
                </div>

                <div class="skill-info">

                    <h5>Laravel</h5>

                    <span>PHP Framework</span>

                </div>

                <div class="skill-level">
                    <div style="width: 90%;"></div>
                </div>

                <small>Advanced</small>

            </div>

        </div>


        {{-- PHP --}}
        <div class="col-lg-3 col-md-4 col-6">

            <div class="skill-card">

                <div class="skill-icon php-icon">
                    <i class="fa-brands fa-php"></i>
                </div>

                <div class="skill-info">

                    <h5>PHP</h5>

                    <span>Backend Development</span>

                </div>

                <div class="skill-level">
                    <div style="width: 88%;"></div>
                </div>

                <small>Advanced</small>

            </div>

        </div>


        {{-- WordPress --}}
        <div class="col-lg-3 col-md-4 col-6">

            <div class="skill-card">

                <div class="skill-icon wordpress-icon">
                    <i class="fa-brands fa-wordpress"></i>
                </div>

                <div class="skill-info">

                    <h5>WordPress</h5>

                    <span>CMS Development</span>

                </div>

                <div class="skill-level">
                    <div style="width: 88%;"></div>
                </div>

                <small>Advanced</small>

            </div>

        </div>


        {{-- Elementor --}}
        <div class="col-lg-3 col-md-4 col-6">

            <div class="skill-card">

                <div class="skill-icon elementor-icon">
                    <i class="fa-solid fa-layer-group"></i>
                </div>

                <div class="skill-info">

                    <h5>Elementor</h5>

                    <span>Page Builder</span>

                </div>

                <div class="skill-level">
                    <div style="width: 90%;"></div>
                </div>

                <small>Advanced</small>

            </div>

        </div>


        {{-- MySQL --}}
        <div class="col-lg-3 col-md-4 col-6">

            <div class="skill-card">

                <div class="skill-icon mysql-icon">
                    <i class="fa-solid fa-database"></i>
                </div>

                <div class="skill-info">

                    <h5>MySQL</h5>

                    <span>Database</span>

                </div>

                <div class="skill-level">
                    <div style="width: 82%;"></div>
                </div>

                <small>Advanced</small>

            </div>

        </div>


        {{-- Bootstrap --}}
        <div class="col-lg-3 col-md-4 col-6">

            <div class="skill-card">

                <div class="skill-icon bootstrap-icon">
                    <i class="fa-brands fa-bootstrap"></i>
                </div>

                <div class="skill-info">

                    <h5>Bootstrap</h5>

                    <span>UI Framework</span>

                </div>

                <div class="skill-level">
                    <div style="width: 90%;"></div>
                </div>

                <small>Advanced</small>

            </div>

        </div>


        {{-- JavaScript --}}
        <div class="col-lg-3 col-md-4 col-6">

            <div class="skill-card">

                <div class="skill-icon js-icon">
                    <i class="fa-brands fa-js"></i>
                </div>

                <div class="skill-info">

                    <h5>JavaScript</h5>

                    <span>Frontend Logic</span>

                </div>

                <div class="skill-level">
                    <div style="width: 72%;"></div>
                </div>

                <small>Intermediate</small>

            </div>

        </div>


        {{-- Git --}}
        <div class="col-lg-3 col-md-4 col-6">

            <div class="skill-card">

                <div class="skill-icon git-icon">
                    <i class="fa-brands fa-git-alt"></i>
                </div>

                <div class="skill-info">

                    <h5>Git</h5>

                    <span>Version Control</span>

                </div>

                <div class="skill-level">
                    <div style="width: 78%;"></div>
                </div>

                <small>Intermediate</small>

            </div>

        </div>

    </div>


    {{-- Bottom Highlight --}}
    <div class="skills-highlight">

        <div class="skills-highlight-icon">
            <i class="fa-solid fa-code"></i>
        </div>

        <div>

            <strong>
                Always learning. Always improving.
            </strong>

            <p>
                I continuously explore new technologies and
                development practices to build better solutions.
            </p>

        </div>

    </div>

</div>


</section>

{{-- ================================
SERVICES SECTION
================================= --}}

<section class="services-section" id="services">

<div class="container">

    {{-- Section Heading --}}
    <div class="section-heading">

        <span class="section-label">
            <span></span>
            WHAT I BUILD
        </span>

        <h2>
            Turning Ideas Into
            <span class="gradient-text">Solutions.</span>
        </h2>

        <p>
            From custom web applications to complete online stores,
            I build digital solutions focused on performance,
            usability and business growth.
        </p>

    </div>


    <div class="row g-4">


        {{-- ================================
            SERVICE 01
        ================================= --}}

        <div class="col-lg-4">

            <div class="service-card">

                <div class="service-top">

                    <span class="service-number">
                        01
                    </span>

                    <div class="service-icon">
                        <i class="fa-brands fa-laravel"></i>
                    </div>

                </div>


                <div class="service-content">

                    <span class="service-category">
                        BACKEND & WEB APPLICATION
                    </span>

                    <h3>
                        Laravel & PHP
                        <span>Development</span>
                    </h3>

                    <p>
                        Custom web applications built with clean,
                        scalable and maintainable Laravel and PHP code.
                    </p>


                    <ul class="service-list">

                        <li>
                            <i class="fa-solid fa-check"></i>
                            Custom Web Applications
                        </li>

                        <li>
                            <i class="fa-solid fa-check"></i>
                            Admin Dashboard & Panels
                        </li>

                        <li>
                            <i class="fa-solid fa-check"></i>
                            Database-Driven Systems
                        </li>

                        <li>
                            <i class="fa-solid fa-check"></i>
                            Authentication & User Systems
                        </li>

                    </ul>

                </div>


                <div class="service-footer">

                    <span class="service-tech">
                        Laravel
                        <span>•</span>
                        PHP
                        <span>•</span>
                        MySQL
                    </span>

                    <a href="#contact" class="service-link">
                        Let's Build
                        <i class="fa-solid fa-arrow-right"></i>
                    </a>

                </div>

            </div>

        </div>


        {{-- ================================
            SERVICE 02
        ================================= --}}

        <div class="col-lg-4">

            <div class="service-card">

                <div class="service-top">

                    <span class="service-number">
                        02
                    </span>

                    <div class="service-icon wordpress-service-icon">
                        <i class="fa-brands fa-wordpress"></i>
                    </div>

                </div>


                <div class="service-content">

                    <span class="service-category">
                        WEBSITE DEVELOPMENT
                    </span>

                    <h3>
                        WordPress &
                        <span>Elementor</span>
                    </h3>

                    <p>
                        Professional, responsive and modern websites
                        designed to help businesses establish a strong
                        online presence.
                    </p>


                    <ul class="service-list">

                        <li>
                            <i class="fa-solid fa-check"></i>
                            Business Websites
                        </li>

                        <li>
                            <i class="fa-solid fa-check"></i>
                            Elementor Websites
                        </li>

                        <li>
                            <i class="fa-solid fa-check"></i>
                            Landing Pages
                        </li>

                        <li>
                            <i class="fa-solid fa-check"></i>
                            Responsive Design
                        </li>

                    </ul>

                </div>


                <div class="service-footer">

                    <span class="service-tech">
                        WordPress
                        <span>•</span>
                        Elementor
                        <span>•</span>
                        Responsive
                    </span>

                    <a href="#contact" class="service-link">
                        Let's Build
                        <i class="fa-solid fa-arrow-right"></i>
                    </a>

                </div>

            </div>

        </div>


        {{-- ================================
            SERVICE 03
        ================================= --}}

        <div class="col-lg-4">

            <div class="service-card featured-service">

                <div class="featured-label">
                    MOST REQUESTED
                </div>


                <div class="service-top">

                    <span class="service-number">
                        03
                    </span>

                    <div class="service-icon ecommerce-service-icon">
                        <i class="fa-solid fa-cart-shopping"></i>
                    </div>

                </div>


                <div class="service-content">

                    <span class="service-category">
                        ONLINE BUSINESS
                    </span>

                    <h3>
                        eCommerce
                        <span>Solutions</span>
                    </h3>

                    <p>
                        Complete online stores with powerful
                        product management, shopping cart,
                        checkout and order management features.
                    </p>


                    <ul class="service-list">

                        <li>
                            <i class="fa-solid fa-check"></i>
                            Product & Category Management
                        </li>

                        <li>
                            <i class="fa-solid fa-check"></i>
                            Shopping Cart & Checkout
                        </li>

                        <li>
                            <i class="fa-solid fa-check"></i>
                            Payment Integration
                        </li>

                        <li>
                            <i class="fa-solid fa-check"></i>
                            Order Management
                        </li>

                    </ul>

                </div>


                <div class="service-footer">

                    <span class="service-tech">
                        Laravel
                        <span>•</span>
                        PHP
                        <span>•</span>
                        MySQL
                    </span>

                    <a href="#contact" class="service-link">
                        Let's Build
                        <i class="fa-solid fa-arrow-right"></i>
                    </a>

                </div>

            </div>

        </div>

    </div>


    {{-- Bottom CTA --}}

    <div class="services-bottom">

        <div>

            <span>
                HAVE A PROJECT IN MIND?
            </span>

            <h4>
                Let's turn your idea into something
                <strong>great.</strong>
            </h4>

        </div>


        <a href="#contact"
           class="btn btn-primary-custom">

            Start a Project

            <i class="fa-solid fa-arrow-right ms-2"></i>

        </a>

    </div>

</div>


</section>


{{-- ================================
PROJECTS SECTION
================================= --}}

<section class="projects-section" id="projects">

    <div class="container">

        {{-- Section Heading --}}
        <div class="section-heading">

            <span class="section-label">
                <span></span>
                MY PROJECTS
            </span>

            <h2>
                Things I've
                <span class="gradient-text">Built.</span>
            </h2>

            <p>
                A selection of web applications, eCommerce platforms
                and professional websites I've worked on using modern
                technologies.
            </p>
            {{-- Project Filter --}}

<div class="project-filters">

    <button type="button"
            class="project-filter active"
            data-filter="all">
        All
    </button>

    <button type="button"
            class="project-filter"
            data-filter="laravel">
        Laravel
    </button>

    <button type="button"
            class="project-filter"
            data-filter="wordpress">
        WordPress
    </button>

    <button type="button"
            class="project-filter"
            data-filter="ecommerce">
        eCommerce
    </button>

</div>

        </div>


        {{-- Projects Grid --}}
        <div class="row g-4">


            {{-- ================================
            PROJECT 01
            ================================= --}}

            <div class="col-lg-4 col-md-6">

                <div class="project-card"
     data-category="ecommerce laravel">

                    <div class="project-image">

                        {{-- Project Image --}}
                        <img
                            src="{{ asset('assets/images/r1.png') }}"
                            alt="MyCommerce Laravel eCommerce">

                        <div class="project-overlay">

                            <a href="https://wahzia-commerce.vercel.app/" class="project-view-btn">
                                <i class="fa-solid fa-arrow-up-right-from-square"></i>
                            </a>

                        </div>

                        <span class="project-status">
                            Laravel
                        </span>

                    </div>


                    <div class="project-content">

                        <span class="project-category">
                            ECOMMERCE PLATFORM
                        </span>

                        <h3>
                            MyCommerce
                        </h3>

                        <p>
                            A complete Laravel-based eCommerce platform
                            with product management, cart, checkout,
                            payment and order management.
                        </p>


                        <div class="project-tech">

                            <span>Laravel</span>
                            <span>PHP</span>
                            <span>MySQL</span>
                            <span>Bootstrap</span>

                        </div>


                        <div class="project-footer">

                            <a href="#" class="project-link">
                                View Project
                                <i class="fa-solid fa-arrow-right"></i>
                            </a>

                            <a href="#" class="project-github">
                                <i class="fa-brands fa-github"></i>
                            </a>

                        </div>

                    </div>

                </div>

            </div>



            {{-- ================================
            PROJECT 02
            ================================= --}}

            <div class="col-lg-4 col-md-6">

                <div class="project-card"
     data-category="wordpress">

                    <div class="project-image">

                        <img
                            src="{{ asset('website/assets/images/projects/wordpress.jpg') }}"
                            alt="WordPress Website">

                        <div class="project-overlay">

                            <a href="#" class="project-view-btn">
                                <i class="fa-solid fa-arrow-up-right-from-square"></i>
                            </a>

                        </div>

                        <span class="project-status">
                            WordPress
                        </span>

                    </div>


                    <div class="project-content">

                        <span class="project-category">
                            BUSINESS WEBSITE
                        </span>

                        <h3>
                            Business Website
                        </h3>

                        <p>
                            A modern and responsive business website
                            developed using WordPress and Elementor
                            with a clean professional interface.
                        </p>


                        <div class="project-tech">

                            <span>WordPress</span>
                            <span>Elementor</span>
                            <span>PHP</span>
                            <span>CSS</span>

                        </div>


                        <div class="project-footer">

                            <a href="#" class="project-link">
                                View Project
                                <i class="fa-solid fa-arrow-right"></i>
                            </a>

                            <a href="#" class="project-github">
                                <i class="fa-solid fa-link"></i>
                            </a>

                        </div>

                    </div>

                </div>

            </div>



            {{-- ================================
            PROJECT 03
            ================================= --}}

            <div class="col-lg-4 col-md-6">

                <div class="project-card featured-project"
     data-category="ecommerce laravel">

                    <div class="featured-project-label">
                        FEATURED
                    </div>

                    <div class="project-image">

                        <img
                            src="{{ asset('website/assets/images/projects/ecommerce.jpg') }}"
                            alt="Laravel eCommerce Project">

                        <div class="project-overlay">

                            <a href="#" class="project-view-btn">
                                <i class="fa-solid fa-arrow-up-right-from-square"></i>
                            </a>

                        </div>

                        <span class="project-status">
                            eCommerce
                        </span>

                    </div>


                    <div class="project-content">

                        <span class="project-category">
                            ONLINE STORE
                        </span>

                        <h3>
                            Laravel eCommerce
                        </h3>

                        <p>
                            A powerful online store with product,
                            category, cart, checkout, payment and
                            complete order management system.
                        </p>


                        <div class="project-tech">

                            <span>Laravel</span>
                            <span>PHP</span>
                            <span>MySQL</span>
                            <span>JavaScript</span>

                        </div>


                        <div class="project-footer">

                            <a href="#" class="project-link">
                                View Project
                                <i class="fa-solid fa-arrow-right"></i>
                            </a>

                            <a href="#" class="project-github">
                                <i class="fa-brands fa-github"></i>
                            </a>

                        </div>

                    </div>

                </div>

            </div>



            {{-- ================================
            PROJECT 04
            ================================= --}}

            <div class="col-lg-4 col-md-6">

                <div class="project-card"
     data-category="laravel">

                    <div class="project-image">

                        <img
                            src="{{ asset('assets/images/r2.png') }}"
                            alt="Admin Dashboard">

                        <div class="project-overlay">

                            <a href="#" class="project-view-btn">
                                <i class="fa-solid fa-arrow-up-right-from-square"></i>
                            </a>

                        </div>

                        <span class="project-status">
                            Laravel
                        </span>

                    </div>


                    <div class="project-content">

                        <span class="project-category">
                            ADMIN SYSTEM
                        </span>

                        <h3>
                            Admin Dashboard
                        </h3>

                        <p>
                            A modern admin dashboard for managing
                            products, categories, customers, orders
                            and website content.
                        </p>


                        <div class="project-tech">

                            <span>Laravel</span>
                            <span>PHP</span>
                            <span>MySQL</span>
                            <span>Bootstrap</span>

                        </div>


                        <div class="project-footer">

                            <a href="#" class="project-link">
                                View Project
                                <i class="fa-solid fa-arrow-right"></i>
                            </a>

                            <a href="#" class="project-github">
                                <i class="fa-solid fa-link"></i>
                            </a>

                        </div>

                    </div>

                </div>

            </div>



            {{-- ================================
            PROJECT 05
            ================================= --}}

            <div class="col-lg-4 col-md-6">

                <div class="project-card"
     data-category="laravel">

                    <div class="project-image">

                        <img
                            src="{{ asset('assets/images/portfolio.png') }}"
                            alt="Portfolio Website">

                        <div class="project-overlay">

                            <a href="https://tanvirrahman-portfolio.vercel.app/" class="project-view-btn">
                                <i class="fa-solid fa-arrow-up-right-from-square"></i>
                            </a>

                        </div>

                        <span class="project-status">
                            Portfolio
                        </span>

                    </div>


                    <div class="project-content">

                        <span class="project-category">
                            PERSONAL WEBSITE
                        </span>

                        <h3>
                            Developer Portfolio
                        </h3>

                        <p>
                            A modern developer portfolio website
                            showcasing skills, services, projects
                            and professional experience.
                        </p>


                        <div class="project-tech">

                            <span>Laravel</span>
                            <span>Blade</span>
                            <span>Bootstrap</span>
                            <span>CSS</span>

                        </div>


                        <div class="project-footer">

                            <a href="#" class="project-link">
                                View Project
                                <i class="fa-solid fa-arrow-right"></i>
                            </a>

                            <a href="#" class="project-github">
                                <i class="fa-brands fa-github"></i>
                            </a>

                        </div>

                    </div>

                </div>

            </div>



            {{-- ================================
            PROJECT 06
            ================================= --}}

            <div class="col-lg-4 col-md-6">

                <div class="project-card"
     data-category="laravel">

                    <div class="project-image">

                        <img
                            src="{{ asset('website/assets/images/projects/web-app.jpg') }}"
                            alt="Custom Web Application">

                        <div class="project-overlay">

                            <a href="#" class="project-view-btn">
                                <i class="fa-solid fa-arrow-up-right-from-square"></i>
                            </a>

                        </div>

                        <span class="project-status">
                            Web App
                        </span>

                    </div>


                    <div class="project-content">

                        <span class="project-category">
                            CUSTOM APPLICATION
                        </span>

                        <h3>
                            Custom Web Application
                        </h3>

                        <p>
                            A database-driven web application designed
                            with authentication, admin management and
                            dynamic content features.
                        </p>


                        <div class="project-tech">

                            <span>Laravel</span>
                            <span>PHP</span>
                            <span>MySQL</span>
                            <span>JavaScript</span>

                        </div>


                        <div class="project-footer">

                            <a href="#" class="project-link">
                                View Project
                                <i class="fa-solid fa-arrow-right"></i>
                            </a>

                            <a href="#" class="project-github">
                                <i class="fa-brands fa-github"></i>
                            </a>

                        </div>

                    </div>

                </div>

            </div>

        </div>



    </div>

</section>

{{-- ================================
EXPERIENCE / JOURNEY SECTION
================================= --}}

<section class="experience-section" id="experience">

    <div class="container">

        {{-- Section Heading --}}
        <div class="section-heading">

            <span class="section-label">
                <span></span>
                MY JOURNEY
            </span>

            <h2>
                My Development
                <span class="gradient-text">Journey.</span>
            </h2>

            <p>
                A continuous journey of learning, building and
                improving modern web solutions.
            </p>

        </div>


        {{-- Timeline --}}
        <div class="experience-timeline">

            {{-- 01 --}}
            <div class="timeline-item">

                <div class="timeline-dot">
                    <i class="fa-solid fa-code"></i>
                </div>

                <div class="timeline-content">

                    <span class="timeline-year">
                        2023
                    </span>

                    <h3>
                        Started Web Development
                    </h3>

                    <p>
                        Started building websites and learning
                        modern web development fundamentals,
                        PHP, HTML, CSS and JavaScript.
                    </p>

                </div>

            </div>


            {{-- 02 --}}
            <div class="timeline-item">

                <div class="timeline-dot">
                    <i class="fa-brands fa-php"></i>
                </div>

                <div class="timeline-content">

                    <span class="timeline-year">
                        2024
                    </span>

                    <h3>
                        Laravel & PHP Development
                    </h3>

                    <p>
                        Focused on Laravel and PHP development,
                        database-driven applications,
                        authentication and admin systems.
                    </p>

                </div>

            </div>


            {{-- 03 --}}
            <div class="timeline-item">

                <div class="timeline-dot">
                    <i class="fa-solid fa-cart-shopping"></i>
                </div>

                <div class="timeline-content">

                    <span class="timeline-year">
                        2025
                    </span>

                    <h3>
                        eCommerce & WordPress
                    </h3>

                    <p>
                        Started developing complete eCommerce
                        platforms, WordPress websites and
                        Elementor-based business websites.
                    </p>

                </div>

            </div>


            {{-- 04 --}}
            <div class="timeline-item">

                <div class="timeline-dot">
                    <i class="fa-solid fa-rocket"></i>
                </div>

                <div class="timeline-content">

                    <span class="timeline-year">
                        2026
                    </span>

                    <h3>
                        Building Professional Solutions
                    </h3>

                    <p>
                        Building scalable Laravel applications,
                        eCommerce systems and professional web
                        solutions for businesses and clients.
                    </p>

                </div>

            </div>

        </div>

    </div>

</section>

{{-- ================================
TESTIMONIALS SECTION
================================= --}}

<section class="testimonials-section" id="testimonials">

    <div class="container">

        {{-- Section Heading --}}
        <div class="section-heading">

            <span class="section-label">
                <span></span>
                CLIENT FEEDBACK
            </span>

            <h2>
                What People
                <span class="gradient-text">Say.</span>
            </h2>

            <p>
                Feedback and experiences from people I've worked
                with on different web development projects.
            </p>

        </div>


        <div class="row g-4">


            {{-- Testimonial 01 --}}
            <div class="col-lg-4">

                <div class="testimonial-card">

                    <div class="testimonial-top">

                        <div class="testimonial-stars">
                            <i class="fa-solid fa-star"></i>
                            <i class="fa-solid fa-star"></i>
                            <i class="fa-solid fa-star"></i>
                            <i class="fa-solid fa-star"></i>
                            <i class="fa-solid fa-star"></i>
                        </div>

                        <i class="fa-solid fa-quote-right quote-icon"></i>

                    </div>


                    <p class="testimonial-text">
                        Great communication and clean development work.
                        The website was delivered with a professional
                        design and smooth functionality.
                    </p>


                    <div class="testimonial-author">

                        <div class="testimonial-avatar">
                            <i class="fa-solid fa-user"></i>
                        </div>

                        <div>
                            <h5>Client Name</h5>
                            <span>Business Owner</span>
                        </div>

                    </div>

                </div>

            </div>


            {{-- Testimonial 02 --}}
            <div class="col-lg-4">

                <div class="testimonial-card">

                    <div class="testimonial-top">

                        <div class="testimonial-stars">
                            <i class="fa-solid fa-star"></i>
                            <i class="fa-solid fa-star"></i>
                            <i class="fa-solid fa-star"></i>
                            <i class="fa-solid fa-star"></i>
                            <i class="fa-solid fa-star"></i>
                        </div>

                        <i class="fa-solid fa-quote-right quote-icon"></i>

                    </div>


                    <p class="testimonial-text">
                        Very good experience working together.
                        The Laravel based system was organized,
                        responsive and easy to manage.
                    </p>


                    <div class="testimonial-author">

                        <div class="testimonial-avatar">
                            <i class="fa-solid fa-user"></i>
                        </div>

                        <div>
                            <h5>Client Name</h5>
                            <span>Project Client</span>
                        </div>

                    </div>

                </div>

            </div>


            {{-- Testimonial 03 --}}
            <div class="col-lg-4">

                <div class="testimonial-card">

                    <div class="testimonial-top">

                        <div class="testimonial-stars">
                            <i class="fa-solid fa-star"></i>
                            <i class="fa-solid fa-star"></i>
                            <i class="fa-solid fa-star"></i>
                            <i class="fa-solid fa-star"></i>
                            <i class="fa-solid fa-star"></i>
                        </div>

                        <i class="fa-solid fa-quote-right quote-icon"></i>

                    </div>


                    <p class="testimonial-text">
                        Professional work with attention to detail.
                        The overall website looks modern and performs
                        very well across devices.
                    </p>


                    <div class="testimonial-author">

                        <div class="testimonial-avatar">
                            <i class="fa-solid fa-user"></i>
                        </div>

                        <div>
                            <h5>Client Name</h5>
                            <span>Website Client</span>
                        </div>

                    </div>

                </div>

            </div>


        </div>

    </div>

</section>

{{-- ================================
CONTACT SECTION
================================= --}}

<section class="contact-section" id="contact">

    <div class="container">

        <div class="section-heading">

            <span class="section-label">
                <span></span>
                GET IN TOUCH
            </span>

            <h2>
                Let's Build Something
                <span class="gradient-text">Great.</span>
            </h2>

            <p>
                Have a project, business idea or website requirement?
                Let's discuss your project and turn your idea into reality.
            </p>

        </div>


        <div class="row g-5 align-items-stretch">


            {{-- Contact Information --}}
            <div class="col-lg-5">

                <div class="contact-info-card">

                    <span class="contact-eyebrow">
                        CONTACT ME
                    </span>

                    <h3>
                        Let's talk about
                        <span class="gradient-text">
                            your project.
                        </span>
                    </h3>

                    <p>
                        Whether you need a Laravel application,
                        WordPress website or complete eCommerce
                        solution, feel free to get in touch.
                    </p>


                    {{-- Email --}}
                    <div class="contact-info-item">

                        <div class="contact-info-icon">
                            <i class="fa-regular fa-envelope"></i>
                        </div>

                        <div>
                            <span>Email</span>
                            <a href="mailto:your@email.com">
                                your@email.com
                            </a>
                        </div>

                    </div>


                    {{-- Location --}}
                    <div class="contact-info-item">

                        <div class="contact-info-icon">
                            <i class="fa-solid fa-location-dot"></i>
                        </div>

                        <div>
                            <span>Location</span>
                            <strong>Bangladesh</strong>
                        </div>

                    </div>


                    {{-- Availability --}}
                    <div class="contact-info-item">

                        <div class="contact-info-icon">
                            <i class="fa-solid fa-circle-check"></i>
                        </div>

                        <div>
                            <span>Availability</span>
                            <strong>Available for Freelance Work</strong>
                        </div>

                    </div>


                    {{-- Social --}}
                    <div class="contact-social">

                        <span>Connect with me</span>

                        <div>

                            <a href="https://github.com/rahulltanvir" aria-label="GitHub">
                                <i class="fa-brands fa-github"></i>
                            </a>

                            <a href="https://www.linkedin.com/in/tanvir-rahman-803121271/" aria-label="LinkedIn">
                                <i class="fa-brands fa-linkedin-in"></i>
                            </a>

                            <a href="#" aria-label="Facebook">
                                <i class="fa-brands fa-facebook-f"></i>
                            </a>

                        </div>

                    </div>

                </div>

            </div>



            {{-- Contact Form --}}
            <div class="col-lg-7">

                <div class="contact-form-card">

                    <form action="#" method="POST">

                        @csrf

                        <div class="row g-4">

                            {{-- Name --}}
                            <div class="col-md-6">

                                <label>
                                    Your Name
                                </label>

                                <input
                                    type="text"
                                    name="name"
                                    class="form-control"
                                    placeholder="Enter your name"
                                    required
                                >

                            </div>


                            {{-- Email --}}
                            <div class="col-md-6">

                                <label>
                                    Email Address
                                </label>

                                <input
                                    type="email"
                                    name="email"
                                    class="form-control"
                                    placeholder="Enter your email"
                                    required
                                >

                            </div>


                            {{-- Subject --}}
                            <div class="col-12">

                                <label>
                                    Subject
                                </label>

                                <input
                                    type="text"
                                    name="subject"
                                    class="form-control"
                                    placeholder="What is your project about?"
                                    required
                                >

                            </div>


                            {{-- Message --}}
                            <div class="col-12">

                                <label>
                                    Message
                                </label>

                                <textarea
                                    name="message"
                                    rows="6"
                                    class="form-control"
                                    placeholder="Tell me about your project..."
                                    required
                                ></textarea>

                            </div>


                            {{-- Submit --}}
                            <div class="col-12">

                                <button
                                    type="submit"
                                    class="btn btn-primary-custom contact-submit"
                                >

                                    Send Message

                                    <i class="fa-solid fa-paper-plane ms-2"></i>

                                </button>

                            </div>

                        </div>

                    </form>

                </div>

            </div>


        </div>

    </div>

</section>







@endsection

<script>

document.addEventListener('DOMContentLoaded', function () {

    const filters = document.querySelectorAll('.project-filter');
    const projects = document.querySelectorAll('.project-card');

    filters.forEach(filter => {

        filter.addEventListener('click', function () {

            // Remove active class
            filters.forEach(btn => {
                btn.classList.remove('active');
            });

            // Add active class
            this.classList.add('active');

            const selectedFilter = this.dataset.filter;

            projects.forEach(project => {

                const categories = project.dataset.category || '';

                if (
                    selectedFilter === 'all' ||
                    categories.includes(selectedFilter)
                ) {

                    project.closest('[class*="col-"]')
                        ?.classList.remove('project-hidden');

                } else {

                    project.closest('[class*="col-"]')
                        ?.classList.add('project-hidden');

                }

            });

        });

    });

});

</script>



