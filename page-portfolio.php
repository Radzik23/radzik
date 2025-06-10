<?php
/*
Template Name: Portfolio
*/
get_header();
?>

<main class="portfolio-page">
    <section class="portfolio">
        <div class="portfolio-container">
            <h2 class="portfolio-title">The moments you'll want to relive in a timeless, romantic, and artistic style.</h2>
            <div class="portfolio-grid">
                <div class="portfolio-item">
                    <img src="<?php echo get_template_directory_uri(); ?>/images/images-portfolio/couple-1.png" alt="couple-1">
                    <h3 class="portfolio-heading">A mountain escape</h3>
                    <p class="portfolio-description">Transform your wedding moments into lasting memories amidst California's majestic mountains.</p>
                    <a href="#">VIEW MORE →</a>
                </div>

                <div class="portfolio-item">
                    <img src="<?php echo get_template_directory_uri(); ?>/images/images-portfolio/couple-2.png" alt="couple-2">
                    <h3 class="portfolio-heading">A beachside celebration</h3>
                    <p class="portfolio-description">The sandy shores, kissed by gentle waves, provided a serene backdrop for your beach wedding.</p>
                    <a href="#">VIEW MORE →</a>
                </div>

                <div class="portfolio-item">
                    <img src="<?php echo get_template_directory_uri(); ?>/images/images-portfolio/couple-3.png" alt="couple-3">
                    <h3 class="portfolio-heading">A high-class affair</h3>
                    <p class="portfolio-description">Relive the elegance of your venue and the grandeur of your wedding through artistic photography.</p>
                    <a href="#">VIEW MORE →</a>
                </div>
            </div>
        </div>
    </section>

    <section class="testimonial-section">
        <div class="testimonial-inner">
            <blockquote class="testimonial-quote">
                <span class="quote-mark">“</span>Jenna's photography is a work of art and<br> 
                her professionalism is unmatched<span class="quote-mark">“</span>
            </blockquote>
            <p class="testimonial-author">- Vanessa, Bride</p>
        </div>
    </section>


    <section class="contact-section" id="contact">
        <div class="container">
            <div class="contact-info">
                <h2>Lets Talk!</h2>
                <p>Have questions or are you ready to get a quote? <br> 
                I am here to help! Fill out the form and I will get <br>
                back to you in 1-2 business days. Let's capture <br>
                your love story together.</p>

                <img src="<?php echo get_template_directory_uri(); ?>/images/ring.png" alt="Ring">
            </div>

            <form class="contact-form" action="#" method="post">
                <label for="name">Your Name </label>
                <input type="text" id="name" name="name" required>
                
                <label for="email">Contact E-mail </label>
                <input type="email" id="eamil" name="email" required>

                <label for="date">Event Date</label>
                <input type="date" id="date" name="date" required>

                <label for="message">Message </label>
                <textarea id="message" name="message" rows="5" required></textarea>

                <button type="submit">Submit</button>
            </form>
        </div>
    </section>
</main>

<?php
get_footer();