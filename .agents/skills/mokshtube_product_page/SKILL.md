---
name: Moksh Tubes Product Page UI Style
description: Provides the standard UI style, HTML layout, and components for building Moksh Tubes product pages based on socket-head-cap-screws layout.
---

# Moksh Tubes UI Components Guide

When creating or updating product pages for Moksh Tubes (e.g. fasteners, flanges, pipes), strictly adhere to the following HTML structures and UI components extracted from the master reference `socket-head-cap-screws.blade.php`. 

## 1. Page Sections & Spacing
All main content sections should use the standard spacing classes:
```html
<section id="section-id" class="sec-padd-top sec-padd-bottom">
    <div class="container">
        <!-- Content -->
    </div>
</section>
```
Use `bg-light` class on the `<section>` for alternating background colors.

## 2. Section Titles
Titles must be centered and wrapped properly:
```html
<div class="section-title center mb-4">
    <h2 class="fw-bold" style="color: #174268;">Section Heading</h2>
    <p class="text-center">Optional description text.</p>
</div>
```

## 3. Data Tables
Tables for specifications, chemical composition, and mechanical properties should be responsive and styled with Bootstrap:
```html
<div class="table-responsive">
    <table class="table table-bordered table-striped align-middle text-center">
        <thead class="table-dark">
            <tr class="t-row">
                <th>Header 1</th>
                <th>Header 2</th>
            </tr>
        </thead>
        <tbody>
            <tr class="t-row">
                <td>Data 1</td>
                <td>Data 2</td>
            </tr>
        </tbody>
    </table>
</div>
```

## 4. Advantage / Feature Cards
Use these for short highlights (e.g. Features, Applications, Testing):
```html
<div class="row g-4 mt-4">
    <div class="col-sm-6 col-lg-4">
        <div class="advantage-card">
            <div class="advantage-icon"><i class="bi bi-shield-check"></i></div>
            <h4>High-strength design</h4>
        </div>
    </div>
</div>
```

## 5. Image Gallery / Materials Grid
Use this for linking to related products or material grades (3 columns):
```html
<div class="row">
    <div class="col-md-4 col-sm-6 col-12 mb-4">
        <div class="single-our-service border bg-white">
            <figure class="img-box mb-0">
                <a class="w-100" href="{{ route('target.route') }}">
                    <img class="w-100" src="{{ asset('path/to/image.webp') }}" alt="Alt Text" loading="lazy">
                </a>
            </figure>
            <div class="p-2 text-center">
                <h6 class="mt-0 mb-0"><a href="{{ route('target.route') }}" style="color: inherit; text-decoration: none;">Title Text</a></h6>
            </div>
        </div>
    </div>
</div>
```

## 6. FAQ Accordion
Always use the custom `accordion-box` instead of standard Bootstrap accordions:
```html
<!--Start faq content area-->
<section id="faq" class="faq-content-area sec-padd2">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <div class="accordion-box">
                    <div class="section-title center">
                        <h2>Frequently Asked Questions (FAQ)</h2>
                    </div>
                    
                    <div class="accordion accordion-block">
                        <div class="accord-btn">
                            <h4>Question Text?</h4>
                        </div>
                        <div class="accord-content">
                            <p>Answer text goes here.</p>
                        </div>
                    </div>
                    
                </div>
            </div>
        </div>
    </div>
</section>
```

## 7. Request a Quote (Contact CTA)
This section should be placed near the bottom, before the footer:
```html
<section class="sec-padd-top sec-padd-bottom bg-light">
    <div class="container">
        <div class="contact-cta-box">
            <h2>Request a Quote</h2>
            <p>
                Looking for a trusted <strong>Product Name</strong> manufacturer and supplier? Contact <strong>Moksh Tubes & Fittings LLP</strong> for premium-quality industrial fasteners, competitive pricing, ready stock, technical support, and fast worldwide delivery. Request your free quotation today.
            </p>
            <a href="{{ route('contact-us') }}" class="contact-cta-btn">
                Get in Touch
            </a>
        </div>
    </div>
</section>
```

## Important Notes:
- Prioritize using Bootstrap Icons (`<i class="bi bi-icon-name"></i>`) for all decorative graphics.
- Always include `loading="lazy"` on images unless they are in the hero section.
- Ensure all links have appropriate routing.
