<?php
    // Template Name:Infringment
    get_header();
    
?>
<style>
    .mt-3{
        margin-top: 3rem;
    }
    .top{
        display: flex;
        align-items: center;
    }
    .top-padding{
        padding: 8rem;
    }
    .lower-body{
        padding: 0 8rem;
    }
    h3{
        font-weight: bold;
    }
</style>
<div class="bg-primary top-padding">
    <div class="row top">
        <div class="col-md-6 col-sm-6 col-lg-6">
            <h1>
                Safeguarding your works, websites, and online businesses has never been easier
            </h1>
            <p>
                Copyright your creative works, protect and monitor your websites, prevent theft and plagiarism. Share your ideas safely while protecting your intellectual property. Free registration and instant protection for your work and websites.
            </p>
            <a class="btn btn-success" href="/apply">Get Started</a>
        </div>
        <div class="col-lg-6 col-md-6 col-lg-12">
            <img src="<?= get_template_directory_uri()."/img/top.jpeg"?>" width="100%">
        </div>
    </div>
</div>
<div class="container-fluid mt-3 lower-body">
    <div class="row top">
        <div class="col-lg-5 col-md-5 col-sm-12">
            <img src="<?= get_template_directory_uri()."/img/2nd.jpeg"?>" width="100%">
        </div>
        <div class="col-lg-7 col-md-7 col-sm-12">
            <h1>
                Welcome to our Copyright Infringement Protection Service
            </h1>
            <p>
                As a creator or owner of original content, protecting your intellectual property rights is essential. With the rise of digital media and the widespread availability of content online, copyright infringement has become a significant issue for many individuals and businesses.
            </p>
            <p>
                At our Copyright Infringement Protection Service, we offer a comprehensive suite of services designed to help you protect your copyrighted material from unauthorized use, distribution, or reproduction. Our experienced team of professionals can help you navigate the complex legal landscape of copyright law and ensure that your rights are upheld.
            </p>
        </div>
    </div>
    <div class="row">
        <div class="col-md-12 col-sm-12 col-lg-12">
            <h1 class="text-center">
                Our services include
            </h1>
        </div>
    </div>
    <div class="row">
        <div class="col-md-6 col-lg-6 col-sm-12">
            <h3>
                Copyright registration:
            </h3>
            <p>
                We can assist you with registering your copyrighted material with the relevant authorities to establish a legal basis for protection.
            </p>
        </div>
        <div class="col-md-6 col-lg-6 col-sm-12">
            <h3>
                Copyright monitoring:
            </h3>
            <p>
                We use advanced technology to scan online marketplaces, social media networks, and other online channels for potential infringements of your copyrighted material.
            </p>
        </div>
        <div class="col-md-6 col-lg-6 col-sm-12">
            <h3>
                Copyright enforcement:
            </h3>
            <p>
                When we identify potential infringements, we take swift and effective action to remove the offending content, including sending takedown requests, issuing cease and desist letters, or taking legal action when necessary.
            </p>
        </div>
        <div class="col-md-6 col-lg-6 col-sm-12">
            <h3>
                Copyright counseling:
            </h3>
            <p>
                Our team of legal professionals can provide expert advice and guidance on copyright law, including issues related to licensing, fair use, and copyright infringement.
            </p>
            <p>
                With our Copyright Infringement Protection Service, you can rest assured that your intellectual property rights are being protected by a team of dedicated professionals. Contact us today to learn more about our services and how we can help you pct your copyrighted material.
            </p>
        </div>
    </div>
</div>

<?php
    get_footer();
?>