# Moksh Tubes UI Skill & Guidelines

This document outlines the standard UI components, structures, and classes used across the Moksh Tubes & Fittings LLP web project. Use these guidelines to generate consistent Product Pages, Material Pages, and other full project sections.

## 1. Product Page UI Structure
Every product page (e.g., Seamless Pipes, Welded Pipes) should follow this exact section order and HTML structure:

### 1.1 Breadcrumb Area
Used at the top of the page for the title and a short description.
```html
<section class="breadcrumb-area" style="background-image: url('{{ asset('assets/images/product/image.webp') }}');">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-auto text-center">
                <h1 class="page-title">Product Name Manufacturer, Supplier & Exporter</h1>
                <p class="text-center mt-3 px-3 py-2 text-white position-relative" style="background:rgba(0,0,0,0.4); display:inline-block; border-radius:6px; max-width: 900px;">
                    Short product description...
                </p>
            </div>
        </div>
    </div>
</section>
```

### 1.2 Quick Navigation (Sticky Tabs)
Provides quick scrolling to page sections.
```html
<div class="sticky-top bg-white border-bottom material-tabs w-100 shadow-sm">
    <div class="container text-center py-2">
        <a href="#overview">Overview</a> |
        <a href="#specifications">Specifications</a> |
        <a href="#weight-chart">Weight Chart</a> |
        <!-- Add other links as needed -->
    </div>
</div>
```

### 1.3 Standard Section Layout
Use `sec-padd-top` and `sec-padd-bottom` for spacing. Alternate sections with `bg-light` for contrast.
```html
<section id="section-id" class="sec-padd-top sec-padd-bottom bg-light">
    <div class="container">
        <div class="section-title center mb-4">
            <h2 class="fw-bold" style="color: #174268;">SECTION TITLE</h2>
        </div>
        <!-- Content goes here -->
    </div>
</section>
```

### 1.4 Tables (Specifications, Grades, Charts)
Always wrap tables in `.table-responsive` and use Bootstrap classes.
```html
<div class="table-responsive">
    <table class="table table-bordered table-striped align-middle text-center"> <!-- Use text-start for spec details -->
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

### 1.5 Datasheet Download Form
Included after the overview on product/material pages.
```html
<section class="sec-padd-bottom bg-light">
    <div class="datasheet-download px-4 text-center">
        <h3 class="mb-3" style="color:#174268;">Download Datasheet</h3>
        <p class="mb-3">Enter your email below to receive the PDF instantly.</p>
        <form id="leadForm" method="POST" action="{{ route('lead.capture') }}" class="mb-3">
            @csrf
            <input type="hidden" name="page_path" value="{{ Request::path() }}">
            <div class="row justify-content-center">
                <div class="col-md-6 mb-2">
                    <input type="email" name="email" required class="form-control p-3" placeholder="Enter your email address">
                </div>
                <div class="col-md-3 mb-2">
                    <button type="submit" class="btn btn-lg w-100 text-white" style="background-color:#db7227; border-radius:8px;">
                        Get Datasheet
                    </button>
                </div>
            </div>
        </form>
    </div>
</section>
```

### 1.6 Application Cards
Used in the "Applications & Uses" section.
```html
<div class="col-md-6 col-lg-4">
    <div class="application-card">
        <div class="application-icon"><i class="bi bi-droplet-fill"></i></div> <!-- Bootstrap Icons -->
        <h5>Industry Name</h5>
        <ul>
            <li>Application 1</li>
            <li>Application 2</li>
        </ul>
    </div>
</div>
```

## 2. Material Page UI Structure
Material pages (e.g., Stainless Steel 304, Duplex 2205) follow a very similar structure to Product pages, but the content focuses on chemical composition, mechanical properties, and equivalent grades.

### Standard Sections for Material Pages:
1. **Breadcrumb / Hero**: Material Name Manufacturer & Supplier
2. **Sticky Navigation**: Overview, Chemical Composition, Mechanical Properties, Equivalent Grades, Forms Available, Applications
3. **Overview**: Description of the material and its properties.
4. **Chemical Composition Table**: Element vs Percentage
5. **Mechanical Properties Table**: Tensile Strength, Yield Strength, Elongation, Hardness
6. **Equivalent Grades Table**: Standard (ASTM, DIN, UNS, EN) vs Grade
7. **Forms Available**: List of products made from this material (Pipes, Tubes, Flanges, Fittings, etc.)
8. **Applications**: Industries using this material (using the `application-card` UI).

## 3. Full Project UI Guidelines & Color Palette
- **Primary Text/Heading Color**: `#174268` (Deep Blue)
- **Accent/Button Color**: `#db7227` (Orange)
- **Section Spacing**: Always use `.sec-padd-top` and `.sec-padd-bottom`.
- **Alternating Backgrounds**: Use `.bg-light` on alternating sections to create visual separation.
- **Images**: Always include `loading="lazy"` on images and ensure they are responsive (`.img-fluid`). Use `.rounded` and `.shadow-sm` for standard inline images.
- **Icons**: Use Bootstrap Icons (`<i class="bi bi-icon-name"></i>`).

## Summary of Sections for a Complete Page
When tasked with generating a full product or material page, ensure the following sections are included:
1. Breadcrumb Hero
2. Sticky Navigation Tabs
3. Overview (Text + Image)
4. Datasheet Download Form
5. Specifications (Table)
6. Weight Chart / Size Chart (Table)
7. Grades Available (Table)
8. Mechanical Properties (Table)
9. Applications & Uses (Cards)
10. Advantages / Why Choose Us
11. FAQ (Accordion)

Follow these patterns strictly to maintain design consistency across the Moksh Tubes website.
