<?php

// Central content source for all portfolio / case study pages.
// Edit this array to add, remove, or update projects — the whole
// portfolio index and each detail page render from this file.

return [

    'epiic' => [
        'title'      => 'EPIIC',
        'tagline'    => 'SaaS Talent Sourcing & Recruitment Event Platform',
        'summary'    => 'A centralized SaaS platform connecting Corporates, Colleges and Candidates through one recruitment and event ecosystem — covering hiring drives, workshops, hackathons, background verification and subscription monetisation.',
        'industry'   => 'HR Tech / Recruitment',
        'stack'      => ['HTML5', 'CSS3', 'JavaScript', 'Bootstrap', 'PHP / Laravel', 'MySQL', 'Razorpay'],
        'challenges' => [
            'Recruitment activity spread across disconnected systems',
            'Manual, effort-heavy event registration and tracking',
            'No structured way for colleges to run placement drives',
            'Slow, document-heavy candidate verification',
            'Fragmented reporting with no single view of hiring activity',
        ],
        'solution' => 'A multi-role SaaS platform with dedicated Corporate, College, Candidate and Admin portals. Corporates run hiring drives and hackathons with full applicant review; colleges organise placement events and track student participation; candidates build profiles, apply to opportunities and complete Background Verification Checks (BVC); admins manage approvals, credits and subscription plans across the whole ecosystem.',
        'features' => [
            'Corporate hiring dashboard with candidate shortlisting and ATS-style workflow',
            'College placement drive and workshop management',
            'Candidate resume builder, profile tracking and BVC document uploads',
            'Credit-based subscription and event monetisation model',
            'Role-based admin & verification hierarchy (Super Admin down to Executive)',
        ],
        'outcome' => 'Transformed fragmented recruitment activity into one digital ecosystem — giving corporates visibility into sourcing, colleges a structured placement channel, and candidates a transparent path from application to verified hire.',
    ],

    'health-umbrella' => [
        'title'      => 'Health Umbrella',
        'tagline'    => 'On-Demand Healthcare Services Super-App',
        'summary'    => 'A single platform giving users on-demand access to Ambulance Booking, Home Care Nursing, Physiotherapy, Funeral Services, Hospitals, Labs, Pharmacies and Medical Equipment.',
        'industry'   => 'Healthcare',
        'stack'      => ['React JS', 'Firebase Authentication', 'Laravel (PHP)', 'MySQL'],
        'challenges' => [
            'Emergency ambulance requests handled by phone with no live tracking',
            'No centralised way to find and book vetted nurses or physiotherapists',
            'Vendors (drivers, clinics, freelancers) had no unified onboarding process',
            'Funeral and mortuary services were arranged manually with no visibility',
        ],
        'solution' => 'A role-driven marketplace connecting Users, Drivers, Vendors, Physiotherapists, Nurses and Funeral Service providers, with every professional verified and approved by an admin before going live. Bookings run through structured accept/reject/reschedule flows with live tracking, wallet-based payments and refund handling.',
        'features' => [
            'Emergency & scheduled ambulance booking with live driver tracking',
            'Physiotherapist & home-care nurse booking with session packages',
            'Funeral & mortuary service booking, including freezer box plans',
            'Vendor dashboards for drivers, clinics and freelancers with admin approval gates',
            'Centralised admin panel for bookings, payouts, commissions and reporting',
        ],
        'outcome' => 'Replaced scattered, phone-based healthcare logistics with one accountable digital ecosystem — faster ambulance response, verified home-care professionals, and full visibility for administrators across every service line.',
    ],

    'srs' => [
        'title'      => 'Scrap Recycling Service (SRS)',
        'tagline'    => 'Digital Scrap Collection & Recycling Marketplace',
        'summary'    => 'A mobile app and admin panel connecting Users, Dealers and Employees to digitise scrap booking, pickup, negotiation, payment and reward management.',
        'industry'   => 'Recycling / Circular Economy',
        'stack'      => ['Flutter', 'Laravel (PHP)', 'RESTful API', 'MySQL', 'PostgreSQL', 'Razorpay'],
        'challenges' => [
            'Scrap booking and pricing negotiated entirely over phone calls',
            'No centralised warehouse allocation for pickups',
            'Employee pickup assignment done manually with no tracking',
            'No loyalty or reward mechanism to retain regular sellers',
        ],
        'solution' => 'A three-sided platform: users list recyclable materials and negotiate price directly in-app, dealers manage assigned product categories and bulk purchases, and field employees receive, verify and complete pickups. An automated warehouse-allocation engine routes each booking based on pincode, and a wallet system handles rewards and cashback.',
        'features' => [
            'In-app price negotiation chat between user/dealer and admin',
            'Automatic warehouse allocation by service location',
            'Employee app for pickup verification and final weight capture',
            'Wallet, rewards and coupon-driven e-commerce storefront',
            'Full admin control over dealers, transport cost and categories',
        ],
        'outcome' => 'Digitised the full scrap-to-cash journey — cutting manual coordination, giving dealers structured demand, and giving the business its first real-time view of collection volumes and revenue.',
    ],

    'cuspix' => [
        'title'      => 'CUSPIX',
        'tagline'    => 'Digital Dental Service Marketplace',
        'summary'    => 'A marketplace connecting Dentists with Consultants, Dental Laboratories, Scanner Providers and Technicians — covering booking, digital case files, invoicing and payouts in one workflow.',
        'industry'   => 'Dental / HealthTech',
        'stack'      => ['Web / Mobile front-end', 'PHP / Laravel Framework', 'MySQL', 'RBAC'],
        'challenges' => [
            'Dentists coordinated with labs, consultants and technicians across separate calls and messaging apps',
            'Digital impressions and case files (STL, PLY, CAD) managed manually with version confusion',
            'No structured way to compare or book verified service providers',
            'Invoicing and vendor payouts tracked outside any central system',
        ],
        'solution' => 'A unified booking and case-management platform where dentists select a service type, pick a verified provider by specialty and availability, and manage the entire case — from digital file upload through consultation, lab processing, scanning and technician work — inside one thread, with automatic invoicing and wallet-based settlement.',
        'features' => [
            'Multi-provider booking (Consultants, Labs, Scanner Providers, Technicians)',
            'Secure upload and sharing of STL / PLY / CAD / X-ray case files',
            'Stage-based lab case tracking: review → design → manufacture → QA',
            'Automated invoice generation and Razorpay-backed payment collection',
            'Admin wallet, subscription and vendor payout management',
        ],
        'outcome' => 'Turned a fragmented, call-and-email driven dental supply chain into one traceable digital workflow — faster case turnaround, cleaner records, and a subscription-based revenue model for the platform itself.',
    ],

    'atcuae' => [
        'title'      => 'ATCUAE',
        'tagline'    => 'TIR Carnet & Cross-Border Customs Management System',
        'summary'    => 'A compliance-grade platform for the Automobile & Touring Club of UAE, digitising the full TIR Carnet lifecycle across transport companies, customs authorities and international TIR bodies.',
        'industry'   => 'Logistics / Government Compliance',
        'stack'      => ['Flutter Web', 'PHP Laravel Framework', 'MySQL', 'Role-Based Access Control'],
        'challenges' => [
            'TIR Carnet issuance depended on manual, paper-heavy verification',
            'No shared system between Customs, Intelligence, FCA and transport companies',
            'Trailer inspections and approvals tracked separately from carnet status',
            'International coordination with IRU and foreign TIR associations lacked a live source of truth',
        ],
        'solution' => 'A multi-department workflow system spanning Carnet Holder registration, Accounts, Intelligence verification, FCA oversight, Customs Control trailer inspection, Foreign TIR Association coordination and IRU monitoring — each with its own login, responsibilities and approval stage, all tied to one auditable Carnet record.',
        'features' => [
            'End-to-end Carnet Holder registration and multi-stage NOC approval',
            'Trailer registration, inspection and certificate issuance',
            'Accounts module for invoicing, payment verification and financial records',
            'FCA and Intelligence dashboards for compliance oversight and audit trails',
            'International visibility for IRU and Foreign TIR Association partners',
        ],
        'outcome' => 'Replaced a paper-based, multi-department approval chain with one auditable digital system — reducing border-clearance delays and giving every stakeholder, from customs officers to international bodies, a live view of Carnet status.',
    ],

    'trippy' => [
        'title'      => 'Trippy',
        'tagline'    => 'Group Trip Planning & Booking SaaS',
        'summary'    => 'A trip-planning platform connecting travel Vendors with travellers — supporting group bookings, invite-based participation, and both full and instalment (SIP-style) payments.',
        'industry'   => 'Travel & Hospitality',
        'stack'      => ['Mobile app front-end', 'PHP / Laravel', 'MySQL', 'Razorpay'],
        'challenges' => [
            'Group trip organisers had no easy way to collect payment from multiple travellers',
            'Vendors published packages with no structured approval or visibility control',
            'Cancellations and refunds were negotiated manually, trip by trip',
            'No systemised way to track vendor commission and payouts after trip completion',
        ],
        'solution' => 'Vendors publish admin-approved trip packages; any traveller who books becomes a Trip Host and receives a shareable invite link/code so friends and family can join and pay individually or via instalments. Admins verify every booking before assigning a vendor, and commission-based payouts are calculated automatically once a trip completes.',
        'features' => [
            'Trip Host model with shareable invite links for group bookings',
            'Full-payment or SIP-style instalment plans via Razorpay',
            'Admin verification gate before vendor assignment on every booking',
            'Structured host/member/vendor cancellation and refund workflow',
            'Automatic 10% commission calculation and vendor payout tracking',
        ],
        'outcome' => 'Turned informal, chat-thread-organised group trips into a structured, trackable booking product — with transparent group payments, vendor accountability, and a repeatable payout model for the platform.',
    ],

];
