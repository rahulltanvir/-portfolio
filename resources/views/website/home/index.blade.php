
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




@endsection

