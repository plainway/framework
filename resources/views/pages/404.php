<?php

use Extro\ViewEngine\View;

/** @var View $this; */
$this->extend('pages/index');
?>

<?php $this->startSection('content'); ?>
<style>
    .error-code {
        font-weight: 700;
        font-size: 5rem;
        letter-spacing: .1em;
        color: var(--error);
    }

    .error-title {
        font-weight: 500;
        font-size: 2rem;
        letter-spacing: .1em;
        margin: 0;
    }

    .error-message {
        margin-bottom: 2rem;
        opacity: 0.9;
    }

    a.home-link:hover {
        background: none;
    }
</style>

<div class="container">
    <div class="error-code">404</div>
    <h1 class="error-title">Page Not Found</h1>
    <div class="links">
        <a href="/" class="home-link">Go to Homepage</a>
    </div>
</div>
<?php $this->endSection(); ?>