<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    
    <?php
    // Default meta values
    $pageTitle = "Simply Savings - Smart Investment Solutions";
    $pageDescription = "Make Your Savings Work For You. Simply Savings offers guaranteed returns up to 7% per annum with Simple Savings, Simple Growth, and Simple Income investment options.";
    $pageKeywords = "Savings, Investment, Simply Savings, Guaranteed Returns, Simple Savings, Simple Growth, Simple Income, UK Investment, ISA Transfer";

    // Build a dynamic absolute base URL using the current host. Always prefer HTTPS for crawlers/social.
    $host = $_SERVER['HTTP_HOST'] ?? 'localhost';
    $scheme = 'https';
    $baseUrl = $scheme . '://' . $host . '/';

    $pageImage = $baseUrl . 'images/website-preview.png';
    $pageUrl = $baseUrl;
    
    // Page-specific meta overrides
    if (isset($currentPage)) {
        switch ($currentPage) {
            case 'home':
                $pageTitle = "Simply Savings - Smart Investment Solutions | Guaranteed Returns up to 4%";
                $pageDescription = "Make Your Savings Work For You. Simply Savings offers guaranteed returns up to 4% per annum with Simple Savings, Simple Growth, and Simple Income investment options. Expert support and online tools.";
                $pageKeywords = "Savings, Investment, Simply Savings, Guaranteed Returns, Simple Savings, Simple Growth, Simple Income, UK Investment, ISA Transfer, Investment Platform";
                break;
            case 'about-us':
                $pageTitle = "About Simply Savings - Trusted Investment Management | Millions Managed";
                $pageDescription = "Simply Savings has been trusted to handle millions of pounds from UK and global investors. Our experienced trading team helps hundreds achieve their savings goals, outperforming high street banks.";
                $pageKeywords = "About Simply Savings, Investment Management, Trading Team, UK Investment, Financial Services, Trusted Investment";
                break;
            case 'contact-us':
                $pageTitle = "Contact Simply Savings - Expert Investment Support | UK & Dubai";
                $pageDescription = "Contact Simply Savings for expert investment support. Call UK: 0203 807 1460 or email info@simplysaving.com. Offices in UK and Dubai, UAE.";
                $pageKeywords = "Contact Simply Savings, Investment Support, UK Investment, Dubai Office, Financial Advice, Investment Consultation";
                break;
            case 'register':
                $pageTitle = "Register with Simply Savings - Start Your Investment Journey";
                $pageDescription = "Register with Simply Savings to start your investment journey. Create an account and begin earning guaranteed returns up to 4% per annum with our Simple Savings, Growth, and Income options.";
                $pageKeywords = "Register Simply Savings, Investment Account, Start Investing, Guaranteed Returns, Investment Registration";
                break;
            case 'privacy':
            case 'privacy-policy':
                $pageTitle = "Privacy Policy - Simply Savings | Data Protection & Security";
                $pageDescription = "Simply Savings Privacy Policy. Learn how we protect your personal and financial data, ensuring the highest standards of security and confidentiality for all our investors.";
                $pageKeywords = "Privacy Policy, Data Protection, Simply Savings, Financial Security, GDPR Compliance";
                break;
            case 'terms':
            case 'Terms-condition':
                $pageTitle = "Terms & Conditions - Simply Savings | Investment Terms";
                $pageDescription = "Simply Savings Terms & Conditions. Understand our investment terms, account management policies, and the terms governing your investment relationship with us.";
                $pageKeywords = "Terms and Conditions, Investment Terms, Simply Savings, Account Terms, Investment Agreement";
                break;
        }
        
        // Update URL for specific pages
        if ($currentPage !== 'home') {
            $pageUrl = $baseUrl . $currentPage . '.php';
        }
    }
    ?>
    
    <title><?php echo htmlspecialchars($pageTitle); ?></title>
    <meta name="description" content="<?php echo htmlspecialchars($pageDescription); ?>">
    <meta name="keywords" content="<?php echo htmlspecialchars($pageKeywords); ?>">
    <meta name="author" content="Simply Savings">
    <meta name="robots" content="index, follow">
    <meta name="language" content="English">
    <meta name="revisit-after" content="7 days">
    <meta name="distribution" content="global">
    <meta name="rating" content="general">
    
    <!-- Canonical URL -->
    <link rel="canonical" href="<?php echo $pageUrl; ?>">
    
    <!-- Enhanced JSON-LD Schema -->
    <script type="application/ld+json">
    {
        "@context": "https://schema.org",
        "@type": "FinancialService",
        "name": "Simply Savings",
        "url": "<?php echo $baseUrl; ?>",
        "logo": "<?php echo $baseUrl; ?>images/logos/logo.svg",
        "description": "<?php echo addslashes($pageDescription); ?>",
        "address": {
            "@type": "PostalAddress",
            "addressLocality": "Dubai",
            "addressCountry": "UAE",
            "addressRegion": "Dubai"
        },
        "contactPoint": {
            "@type": "ContactPoint",
            "telephone": "+44-203-807-1460",
            "contactType": "customer service",
            "areaServed": "GB",
            "availableLanguage": "English"
        },
        "sameAs": [
            "<?php echo $baseUrl; ?>"
        ],
        "serviceType": "Investment Management",
        "areaServed": ["GB", "EU"],
        "hasOfferCatalog": {
            "@type": "OfferCatalog",
            "name": "Investment Products",
            "itemListElement": [
                {
                    "@type": "Offer",
                    "itemOffered": {
                        "@type": "Service",
                        "name": "Simple Savings",
                        "description": "Guaranteed 2% return per annum"
                    }
                },
                {
                    "@type": "Offer",
                    "itemOffered": {
                        "@type": "Service",
                        "name": "Simple Growth",
                        "description": "2%-4% return per annum depending on investment level"
                    }
                },
                {
                    "@type": "Offer",
                    "itemOffered": {
                        "@type": "Service",
                        "name": "Simple Income",
                        "description": "High returns for large investment portfolios"
                    }
                }
            ]
        }
    }
    </script>

    <!-- Open Graph / Facebook -->
    <meta property="og:title" content="<?php echo htmlspecialchars($pageTitle); ?>">
    <meta property="og:type" content="website">
    <meta property="og:description" content="<?php echo htmlspecialchars($pageDescription); ?>">
    <meta property="og:image" content="<?php echo $pageImage; ?>">
    <meta property="og:image:secure_url" content="<?php echo $pageImage; ?>">
    <meta property="og:image:type" content="image/png">
    <meta property="og:url" content="<?php echo $pageUrl; ?>">
    <meta property="og:site_name" content="Simply Savings">
    <meta property="og:locale" content="en_GB">
    <meta property="og:image:width" content="1200">
    <meta property="og:image:height" content="630">
    <meta property="og:image:alt" content="Simply Savings - Smart Investment Solutions">

    <!-- Twitter -->
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="<?php echo htmlspecialchars($pageTitle); ?>">
    <meta name="twitter:description" content="<?php echo htmlspecialchars($pageDescription); ?>">
    <meta name="twitter:image" content="<?php echo $pageImage; ?>">
    <meta name="twitter:url" content="<?php echo $pageUrl; ?>">
    <meta name="twitter:site" content="@simplysavings">
    <meta name="twitter:creator" content="@simplysavings">

    <!-- Additional Meta Tags -->
    <meta name="theme-color" content="#1a1a1a">
    <meta name="msapplication-TileColor" content="#1a1a1a">
    <meta name="apple-mobile-web-app-capable" content="yes">
    <meta name="apple-mobile-web-app-status-bar-style" content="black-translucent">
    <meta name="apple-mobile-web-app-title" content="Simply Savings">
    
    <!-- Preconnect for Performance -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link rel="preconnect" href="https://cdn.jsdelivr.net">
    <link rel="preconnect" href="https://www.google.com">

    <link rel="icon" href="images/icons/favicon.png" type="image/png">
    <link rel="apple-touch-icon" href="images/icons/favicon.png">
    <link rel="manifest" href="manifest.json">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <link href="css/style.css" rel="stylesheet" />
    <link rel="stylesheet" href="css/animate.css">

    <!--font css-->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=DM+Sans:ital,opsz,wght@0,9..40,100..1000;1,9..40,100..1000&display=swap"
        rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100..900;1,100..900&display=swap"
        rel="stylesheet">


</head>

<body>
    <div id="preloader">
        <img src="images/logos/logo.svg" alt="Logo" class="logo" />
    </div>