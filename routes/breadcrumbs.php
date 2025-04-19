<?php

use App\Models\vacancy;
use Diglactic\Breadcrumbs\Breadcrumbs;

    use Diglactic\Breadcrumbs\Generator as BreadcrumbTrail;

    Breadcrumbs::for('home', function (BreadcrumbTrail $trail){
        $trail->push('Home', route('home'));
    });

    Breadcrumbs::for('about', function (BreadcrumbTrail $trail){
        $trail->parent('home');
        $trail->push('About Us', route('about-us'));
    });

    Breadcrumbs::for('board', function (BreadcrumbTrail $trail){
        $trail->parent('home');
        $trail->push('Board of Directors', route('board of directors'));
    });

    Breadcrumbs::for('management', function (BreadcrumbTrail $trail){
        $trail->parent('home');
        $trail->push('Management', route('management'));
    });

    Breadcrumbs::for('directorates', function (BreadcrumbTrail $trail){
        $trail->parent('home');
        $trail->push('Directorate', route('directories and departments'));
    });

    Breadcrumbs::for('contact', function (BreadcrumbTrail $trail){
        $trail->parent('home');
        $trail->push('Contact Us', route('contact us'));
    });

    Breadcrumbs::for('services', function (BreadcrumbTrail $trail){
        $trail->parent('home');
        $trail->push('Services', route('services'));
    });

    Breadcrumbs::for('supplier-registration', function (BreadcrumbTrail $trail){
        $trail->parent('home');
        $trail->push('Supplier Registration', route('supplier-registration'));
    });

    Breadcrumbs::for('msme-order', function(BreadcrumbTrail $trail){
        $trail->parent('home');
        $trail->push('MSME Participation Order', route('msme-order'));
    });

    Breadcrumbs::for('egp', function(BreadcrumbTrail $trail){
        $trail->parent('home');
        $trail->push('E-Government Procurement System', route('eGP'));
    });

    Breadcrumbs::for('egm', function(BreadcrumbTrail $trail){
        $trail->parent('home');
        $trail->push('E-Government Marketplace System', route('eGM'));
    });

    Breadcrumbs::for('open-data-portal', function(BreadcrumbTrail $trail){
        $trail->parent('home');
        $trail->push('Open Contracting', route('open-data-portal'));
    });

    Breadcrumbs::for('eServices', function(BreadcrumbTrail $trail){
        $trail->parent('home');
        $trail->push('E-services', route('eServices'));
    });

    Breadcrumbs::for('tender', function(BreadcrumbTrail $trail){
        $trail->parent('home');
        $trail->push('Tenders', route('tenders'));
    });

    Breadcrumbs::for('intentions', function(BreadcrumbTrail $trail){
        $trail->parent('home');
        $trail->push('Intention to Award Notices', route('tenders'));
    });

    Breadcrumbs::for('awards', function(BreadcrumbTrail $trail){
        $trail->parent('home');
        $trail->push('Award Notices', route('awards'));
    });

    Breadcrumbs::for('news', function(BreadcrumbTrail $trail){
        $trail->parent('home');
        $trail->push('News & Events', route('news'));
    });

    Breadcrumbs::for('newsitem', function(BreadcrumbTrail $trail, \App\Models\News $newsdetail){
        $trail->parent('news');
        $trail->push($newsdetail->title, route('NewsDetail', $newsdetail));
    });

    Breadcrumbs::for('circulars', function(BreadcrumbTrail $trail){
        $trail->parent('home');
        $trail->push('Circulars', route('circulars'));
    });

    Breadcrumbs::for('reports', function(BreadcrumbTrail $trail){
        $trail->parent('home');
        $trail->push('Reports', route('reports'));
    });

    Breadcrumbs::for('research', function(BreadcrumbTrail $trail){
        $trail->parent('home');
        $trail->push('Research', route('research'));
    });

    Breadcrumbs::for('resources', function(BreadcrumbTrail $trail){
        $trail->parent('home');
        $trail->push('General Resources', route('resources'));
    });

    Breadcrumbs::for('vacancies', function(BreadcrumbTrail $trail){
        $trail->parent('home');
        $trail->push('Vacancies', route('vacancies'));
    });

    Breadcrumbs::for('vacancyitem', function (BreadcrumbTrail $trail, vacancy $vacancy){
        $trail->parent('vacancies');
        $trail->push($vacancy->title, route('vacancyDetails', $vacancy));
    });

    Breadcrumbs::for('debarments', function(BreadcrumbTrail $trail){
        $trail->parent('home');
        $trail->push('Debarments', route('debarments'));
    });

    Breadcrumbs::for('adminreviews', function(BreadcrumbTrail $trail){
        $trail->parent('home');
        $trail->push('Administrative Reviews', route('adminreview'));
    });

    ?>
