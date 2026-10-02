# My Web Projects Portfolio

I'm Dzmitry Makarski, a WordPress developer with 10+ years of experience, based in Warsaw, Poland. I build custom themes and plugins, work on site performance and Core Web Vitals, integrate third-party APIs, and develop Telegram bots in PHP and Python. Top Rated on Upwork with 116 completed jobs.

[Upwork](https://www.upwork.com/freelancers/~012916600d2f0b1723) · [LinkedIn](https://www.linkedin.com/in/d-makarski/) · [GitHub](https://github.com/makaravich)

## Table of Contents

- [Website for a cybersecurity company](#website-for-a-cybersecurity-company)
- [Makarski Bot Connector for Telegram (WordPress.org plugin)](#makarski-bot-connector-for-telegram-wordpressorg-plugin)
- [Plugin installations research at web scale](#plugin-installations-research-at-web-scale)
- [Website for MyInterview Company](#website-for-myinterview-company)
- [Website for an IT-company](#website-for-an-it-company)
- [GribVerden website](#gribverden-website)
- [E-commerce Website](#e-commerce-website)
- [Real Estate website](#real-estate-website)
- [DeskCamera Project](#deskcamera-project)
- [Legal company website](#legal-company-website)

---
## Website for a cybersecurity company

![Website for a cybersecurity company](/img/cx_com.png)

**Website**: [https://checkmarx.com/](https://checkmarx.com/)

**Duration**: Feb, 2024 – Now

**Description**:

This website was developed for a major company in the cybersecurity industry. The project included several hundred pages built using a variety of custom templates. After launch I stayed on the project and keep developing and supporting it.

One of the most interesting challenges was the client’s request to preserve part of the website from the previous version without any modifications. This unconventional architectural requirement could not be achieved using standard WordPress tools. However, I implemented several unique backend solutions that allowed us to fulfill all of the client's expectations seamlessly.

I worked on this project as a backend WordPress developer. My responsibilities included:

- Planning and estimating development timelines  
- Creating a detailed roadmap for component development, including specifications, deadlines, and functional descriptions  
- Developing custom Gutenberg blocks for various page templates  
- Integrating these Gutenberg blocks with the front-end codebase  
- Connecting the site with multiple third-party APIs  
- Ensuring high standards of performance and security  
- Automating the migration of content from the legacy version of the site  
- Writing technical documentation  
- Providing ongoing technical support to the client

**Performance work (ongoing)**

A large part of my current work on this site is mobile PageSpeed and Core Web Vitals. The live site still runs the previous build and scores about 35–37 on mobile PageSpeed; the rebuilt version scores 69 on staging, and the current goal is a Speed Index under 2 seconds so that LLM crawlers can index the site properly. What has been done so far:

- Reduced the JavaScript and CSS bundle size
- Tuned WP Rocket: deferred and delayed JavaScript, with exclusions for inline scripts that break when delayed
- Kept the LCP image eager and preloaded, lazy-loaded everything below the fold
- Optimized post images and thumbnails
- Made the main menu cheaper to render
- Improved the text-to-HTML ratio on the homepage and top-level pages

This project demonstrated my ability to handle complex architecture and deliver reliable, scalable solutions for enterprise-level WordPress websites.

**Key Skills**: WordPress, PHP, Gutenberg blocks, ACF, API integrations, Performance optimization, Core Web Vitals, WP Rocket, Support

---
## Makarski Bot Connector for Telegram (WordPress.org plugin)

![Makarski Bot Connector for Telegram](/img/tgbot_plugin_banner.png)

**Website**: [https://wordpress.org/plugins/makarski-bot-connector-for-telegram/](https://wordpress.org/plugins/makarski-bot-connector-for-telegram/)

**Duration**: Oct, 2025 – Now

**Description**:

My own open-source plugin, published in the official WordPress.org plugin directory. It connects WordPress to a Telegram bot and handles all the low-level work with the Telegram Bot API, so a bot's logic can be written as ordinary WordPress code with action hooks. I use it as the foundation for my own production Telegram bots.

Main features:

- Webhook mode, or polling via WP-Cron for hosting without a public HTTPS URL
- Command routing and a single normalized hook for every message type (text, photo, voice, video, document, callback query)
- A BotApi class with 30+ methods, including multipart uploads and Telegram Stars payments with refunds
- Mass broadcast from the admin: per-language messages, cron-batched delivery with live progress and history
- A tabbed Analytics page (commands, failed deliveries, acquisition sources from deep links, languages, referrals) that other plugins can extend with their own tabs
- Automatic splitting of messages over Telegram's 4096-character limit, keeping HTML valid in every chunk
- Privacy by default: users created for the bot are hidden from author archives, the sitemap and the public REST API
- Built-in developer documentation in wp-admin, fully translatable

**Key Skills**: WordPress Plugin, PHP, Telegram Bot API, REST API, WP-Cron, Payments, Open source

---
## Plugin installations research at web scale

![Plugin installations research at web scale](/img/plugin_research.png)

**Duration**: Aug, 2026

**Description**:

A data project for a client who needed to know which websites actually use a specific set of SaaS products for WordPress, not the vendors themselves but their customers. Commercial technology-lookup services did not know these plugins at all, so the data had to be collected from scratch.

What I built:

- A candidate universe from the Common Crawl index (118 million domains) instead of blind scanning
- Plugin fingerprints based on REST API namespaces and HTML markers, each one verified against the real plugin code rather than vendor marketing
- A probing pipeline where a single `GET /wp-json/` request checks a site for every product at once, running on a fleet of cloud VMs
- Prioritization by measured density: a 2-million-domain sample predicted the full runs within 5%, which let us process the richest markets first
- Delivery as per-product and merged datasets with the site language, in CSV and Parquet

**Results**: 20 million domains checked with zero duplicates, 4.2 million WordPress sites identified, 12,543 confirmed installations, about twice the yield the client expected. One of the findings was that the site's language predicts installations much better than its domain zone.

**Key Skills**: Python, Data pipeline, Web scraping, Common Crawl, WordPress REST API, Cloud infrastructure, Parquet

---
## Website for MyInterview Company

![Website for MyInterview Company](/img/myinterview_com.png)

**Website**: [https://www.myinterview.com/](https://www.myinterview.com/)

**Duration**: Nov, 2024 – Jan, 2025

**Description**:

The MyInterview website was built using a headless architecture. WordPress serves as the backend, handling content management and user data, while the frontend is entirely powered by Next.js. Communication between the frontend and WordPress is handled via GraphQL, allowing for fast, dynamic, and scalable data exchange.

I was responsible for developing the backend functionality of the project. My tasks included:

- Creating custom Gutenberg blocks for flexible content editing  
- Ensuring proper handling and structure of GraphQL requests from the frontend  
- Maintaining a true WYSIWYG experience within the WordPress admin panel  
- Communicating directly with the client to find optimal technical solutions  
- Refactoring and improving existing code for better maintainability  
- Optimizing backend performance for speed and efficiency

The final result was a modern, high-performance website that meets high standards of security, speed, and user experience.

**Key Skills**: WordPress, Headless CMS, PHP, Gutenberg blocks, ACF, GraphQL, API

---
## Website for an IT-company

![Website for an IT-company](/img/sqream_com.png)

**Website**: [https://sqream.com/](https://sqream.com/)

**Duration**: May, 2022 – Sep, 2022

**Description**:

This website, like many of my projects, was built using the WordPress CMS as the foundation. A custom theme was developed entirely from scratch to meet the client’s specific design and functionality requirements.

To streamline the development process and ensure flexibility in content management, I utilized the Advanced Custom Fields (ACF) plugin. Using ACF, I created a set of modular page templates that were later styled and finalized by front-end developers according to the approved design.

As a backend PHP developer on the project, my responsibilities included:

- Designing the software architecture of the website  
- Writing efficient, scalable backend code and building custom PHP modules  
- Integrating third-party APIs, such as Comeet, to enhance functionality  
- Collaborating closely with front-end developers and other team members to ensure a cohesive and user-friendly product  
- Migrating data from the client’s previous website  
- Finalizing backend features and conducting thorough testing before launch  

The result was a robust, maintainable, and fully customized WordPress site tailored to the client’s business needs.

**Key Skills**: WordPress, PHP, Custom theme development, ACF, API integrations, HTML5

---
## GribVerden website

![GribVerden website](/img/GribVerden_Screenshot.png)

**Website**: [https://gribverden.dk/](https://gribverden.dk/)

**Duration**: Nov, 2021 – Jan, 2022

**Description**:

Website for the Danish Ministry of Education and Research. This client wanted to make a site with easy access to information, strict design, fast, and easy to edit.

I created this site from scratch using WordPress. I used Elementor to create the pages. In addition, I made my own plugin for more convenient navigation through the site content.

**Key Skills**: WordPress, PHP, Custom plugin development, Elementor, HTML5

---
## E-commerce Website

![E-commerce Website](/img/mimisocks_com.png)

**Website**: [https://mimisocks.com/](https://mimisocks.com/)

**Duration**: Jun, 2021 – Oct, 2021

**Description**:

I developed a unique and user-friendly e-commerce website for a custom-printed socks manufacturer. The main feature of the site is an interactive product designer that allows customers to:

- Choose from different sock models  
- Upload their own images  
- Add personalized text  

In addition to the design tool, the website supports secure online payments and offers the ability to purchase digital gift cards.

All of these features were implemented as a custom plugin, extends the WooCommerce plugin functionality, tailored specifically to the client’s requirements. I followed the provided mock-up and specifications closely to ensure a pixel-perfect design. Special attention was paid to responsiveness, cross-browser compatibility, and fast performance across different devices.

As part of the project, I also carried out thorough testing to eliminate bugs and ensure stability. After launch, I continued to provide technical support and ongoing maintenance to keep the site running smoothly.

**Key Skills**: WordPress, PHP, WooCommerce, Custom plugin development

---
## Real Estate website

![Real Estate website](/img/cozyboise_com.png)

**Website**: [https://cozyboise.com/](https://cozyboise.com/)

**Duration**: Jul, 2020 – Aug, 2020

**Description**:

The client requested the development of a one-page website for their real estate agency. I built the site using WordPress, leveraging plugins such as Visual Composer for flexible page layout, Slider Revolution for engaging visual content, and Rover IDX for seamless integration with real estate listings.

To meet specific interactive requirements, I also wrote custom JavaScript scripts that added dynamic features and improved the overall user experience. These enhancements ensured the site was not only visually appealing but also functional and user-friendly.

The final result fully met the client's expectations, and they were very satisfied with both the look and performance of the website.

**Key Skills**: WordPress, JavaScript, WPBakery (Visual Composer), Slider Revolution, IDX integration

---
## DeskCamera Project

![DeskCamera Project](/img/DeskCamera_Screenshot.png)

**Website**: [https://www.deskcamera.com/](https://www.deskcamera.com/)

**Duration**: Apr, 2019 – Now

**Description**:

My client approached me with the goal of developing a modern and functional website for a software company. I was provided with a design mock-up, and based on that, I built the entire site from scratch using the Divi theme as a foundation.

The website includes multilingual support, allowing it to serve users from different regions in their native languages. To keep the audience engaged and informed, I implemented a dynamic news feed that displays company updates and announcements in an easy-to-navigate format.

To streamline content management and enhance flexibility, I developed a set of custom shortcodes tailored to the client’s specific needs. Additionally, I extended the built-in WooCommerce functionality to support unique business requirements, providing a more intuitive and customized e-commerce experience.

**Key Skills**: WordPress, PHP, Divi, WooCommerce, Custom shortcodes, Multilingual, HTML5

---
## Legal company website

![Legal company website](/img/fesenkolaw_com.png)

**Website**: [https://fesenkolaw.com/](https://fesenkolaw.com/)

**Duration**: Jan, 2018 – Now

**Description**:

This project involved developing a complete website from scratch using the Elementor page builder. I was responsible for the entire implementation process — from setting up the initial structure to designing and building the user interface.

In addition to creating the front-end layout with Elementor, I developed several custom backend features to enhance the site’s functionality. These included improvements to the default site search for better accuracy and performance, the creation of custom shortcodes for easier content management, and a custom plugin that displays the most popular posts based on specific criteria.

These enhancements were designed to improve both the user experience and the site’s overall performance, while also giving the client greater control over content presentation.

**Key Skills**: WordPress, PHP, Elementor, Custom plugin development, Custom search, SCSS, HTML5

---
