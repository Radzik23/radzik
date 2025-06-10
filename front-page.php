<?php
/**Strona Główna */

get_header();
?>

<main class="site-main">
    <section class="hero" id="home" style="background-image: url('<?php echo get_template_directory_uri(); ?>/images/couple.png');">
        <div class="hero-overlay">
            <h1 class="hero-title">California Wedding <br> Photography</h1>
            <p class="hero-subtitle">Transform your wedding moments into <br> lasting memories amidst California's <br> majestic landscapes.</p>
            <a href="#contact" class="hero-btn">Get a Quote →</a>
        </div>
    </section>

    <section class="stats">
        <div class="stats-header">
            <h2>Capture your love story with an experienced,<br>client centered photographer</h2>
        </div>
        <div class="stats-grid">
            <div class="stats-item">
                <h3>20</h3>
                <p>Years Experience</p>
            </div>
            <div class="stats-item">
                <h3>20K</h3>
                <p>Photos Delivered</p>
            </div>
            <div class="stats-item">
                <h3>310</h3>
                <p>Events Captured</p>
            </div>
            <div class="stats-item">
                <h3>22</h3>
                <p>Locations</p>
            </div>
        </div>
    </section>

    <section class="portfolio" id="portfolio">
        <h2 class="portfolio-heading">
            The moments you'll want to relive in a timeless,<br>
            romantic, and artistic style.
        </h2>

        <div class="portfolio-grid">
            <div class="portfolio-main">
                <img src="<?php echo get_template_directory_uri(); ?>/images/images-hero/portfolio-1.jpg" alt="Portfolio Image 1">
                <h3>AT THE LAKE</h3>
                <p>Transform your wedding moments into lasting memories amidst California's majestic mountains.</p>
                <a href="#">VIEW MORE →</a>
            </div>
            
            <div class="portfolio-secondary">
                <div class="portfolio-items">
                    <img src="<?php echo get_template_directory_uri(); ?>/images/images-hero/portfolio-2.png" alt="Portfolio Image 2">
                    <div class="portfolio-text">
                        <h4>GOLDEN HOUR EMBRACE</h4>
                        <p>Bask in the warm glow of love, captured in nature’s most magical light.</p>
                        <a href="#">VIEW MORE →</a>
                    </div>
                </div>

                <div class="portfolio-items">
                    <img src="<?php echo get_template_directory_uri(); ?>/images/images-hero/portfolio-3.png" alt="Portfolio Image 3">
                    <div class="portfolio-text">
                        <h4>A WINDOW TO FOREVER</h4>
                        <p>Let the grandeur of the moment echo through timeless elegance and scenery.</p>
                        <a href="#">VIEW MORE →</a>
                    </div>
                </div>
            </div>
        </div>

        <div class="portfolio-button">
            <a href="#">VIEW ALL PORTFOLIOS</a>
        </div>
    </section>

    <section class="testimonials">
        <h2 class="section-title">Testimonials from my clients</h2>

        <div class="testimonials-grid">
            <div class="testimonials-block">
                <img src="<?php echo get_template_directory_uri(); ?>/images/testimonials/testimonials1.png" alt="JOSÉ & MELANIE">
                <div class="testimonial-text">
                    <div class="quote-decor">
                        <span class="quote-icon">"</span>
                        <span class="quote-line"></span>
                    </div>
                    <h3>JOSÉ & MELANIE</h3>
                    <p>Jenna has a way of making us feel like the only people in the room. The photos she delivered were beyond our expectations, capturing the joy, love, and beauty of our special day in a way that we will treasure forever.</p>
                </div>
            </div>

            <div class="testimonials-block" >
                <img src="<?php echo get_template_directory_uri(); ?>/images/testimonials/testimonials2.png" alt="HANNAH & MARCO">
                <div class="testimonial-text">
                    <div class="quote-decor">
                        <span class="quote-icon">"</span>
                        <span class="quote-line"></span>
                    </div>
                    <h3>HANNAH & MARCO</h3>
                    <p>Hiring Jenna was one of the best decisions we made for our wedding. Not only was their work incredibly professional and artistic, but they also made us feel so comfortable and at ease throughout the entire process.</p>
                </div>
            </div>

            <div class="testimonials-block">
                <img src="<?php echo get_template_directory_uri(); ?>/images/testimonials/testimonials3.png" alt="BRIAN & KEVIN">
                <div class="testimonial-text">
                    <div class="quote-decor">
                        <span class="quote-icon">"</span>
                        <span class="quote-line"></span>
                    </div>
                    <h3>BRIAN & KEVIN</h3>
                    <p>Jenna was always available to answer our questions, offer recommendations, and ensure that everything ran smoothly. Her dedication to capturing our love story was evident in every shot, and we are grateful for her beautiful work.</p>
                </div>
            </div>

        </div>
    </section>

    <section class="packages" id="pricing">
        <h2>Photography Packages</h2>
        <div class="packages-grid">

            <div class="package">
                <img src="<?php echo get_template_directory_uri(); ?>/images/photography-packages/photo1.png" alt="Elopement">
                <div class="packages-content">
                    <h3>Elopement</h3>
                    <ul>
                        <li>200+ Professionally Edited Photos</li>
                        <li>Private Online Gallery</li>
                        <li>*Additional Charge Based On Travel Distance</li>
                        <li>*Additional Charge For Videography</li>
                    </ul>
                    <p class="price">$1999+</p>
                </div>
            </div>

            <div class="highlighte">
                <img src="<?php echo get_template_directory_uri(); ?>/images/photography-packages/photo2.png" alt="Wedding">
                <div class="packages-content highlighted-bg">
                    <h3>Wedding</h3>
                    <ul>
                        <li>300+ Professionally Edited Photos</li>
                        <li>Private Online Gallery</li>
                        <li>All-Day Photography Coverage</li>
                        <li>*Additional Charge For Videography</li>
                    </ul>
                    <p class="price">$2999+</p>
                </div>
            </div>

            <div class="package">
                <img src="<?php echo get_template_directory_uri(); ?>/images/photography-packages/photo3.png" alt="Engagement">
                <div class="packages-content">
                    <h3>Engagement</h3>
                    <ul>
                        <li>100+ Professionally Edited Photos</li>
                        <li>Private Online Gallery</li>
                        <li>*Additional Charge Based On Travel Distance</li>
                    </ul>
                    <p class="price">$799+</p>
                </div>
            </div>

        </div>

        <div class="package-button">
            <a href="#contact" class="btn">Get a quote</a>
        </div>
    </section>

    <section class="photographer-section">
        <div class="container">
            <div class="photographer-text">
                <h4>Meet your photographer</h4>
                <h2>Jenna Marie</h2>
                <div class="photographer-bio">
                    <p>I specialize in capturing the unique beauty and joy of your special day. With a <br> 
                    passion for storytelling and a keen eye for detail, I strive to create timeless <br>
                    images that reflect your love and personality. Whether it's a beachfront <br>
                    ceremony, a vineyard reception, or a city hall elopement, I am dedicated to <br>
                    providing you with exceptional photography.</p>
                    <p class="signature">- Jenna</p>
                </div>
            </div>
            <div class="photographer-image">
                <img src="<?php echo get_template_directory_uri(); ?>/images/photographer.png" alt="Photographer Jenna">
            </div>
        </div>
    </section>

    <section class="availability-section">
        <div class="availability-container">
            <h2>Check Availability</h2>
            <p>Select a date to check if the photographer is available.<br>Unavailable dates are grayed out.</p>

            <input type="text" id="availability-calendar" placeholder="Select a date">
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