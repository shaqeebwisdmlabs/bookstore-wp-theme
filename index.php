<?php get_header(); ?>

<body>
    <header class="bg-neutral-200">
        <div class="header--container | container">
            <a href="#" class="logo | flex">
                <img src="<?php echo bloginfo('template_directory') . "/assets/images" ?>/logo.svg"
                    alt="company-logo" />
                <span class="text-neutral-900 fs-title fw-black">Book Store</span>
            </a>
            <button class="nav-toggle" aria-expanded="false">
                <span class="visually-hidden">menu</span>
                <span class="bar"></span>
                <span class="cross"></span>
            </button>
            <nav class="primary-navigation">
                <ul class="nav-list">
                    <li><a href="#" class="nav-links">Home</a></li>
                    <li><a href="#" class="nav-links">About Us</a></li>
                    <li><a href="#" class="nav-links">Courses</a></li>
                    <li><a href="#" class="nav-links">Our service</a></li>
                    <li><a href="#" class="nav-links">Contact Us</a></li>
                </ul>
                <button class="btn | btn--primary">Sign In</button>
            </nav>
        </div>
    </header>
    <section class="hero | bg-neutral-200 padding-block-700">
        <div class="hero--container | container">
            <div class="hero__body | gap-lg">
                <h1 class="fs-title-lg fw-black" style="max-width: 14ch">
                    The <span class="text-secondary-400">Smart</span> Choice For
                    <span class="text-secondary-400">Future</span>
                </h1>
                <p class="text-neutral-700">
                    Elearn is a global training provider based across the UK that
                    specialises in accredited and bespoke training courses. We crush the
                    online e-learning platform.
                </p>
                <div class="search-location">
                    <div class="search-input">
                        <img src="<?php echo bloginfo('template_directory') . "/assets/images" ?>/magnifying-glass.svg"
                            alt="magnifying-glass" class="icon" />
                        <input type="text" name="location" id="location-search"
                            placeholder="Search for a location..." />
                    </div>
                    <button class="btn | btn--primary">Continue</button>
                </div>
            </div>
            <div class="hero__illustration">
                <img src="<?php echo bloginfo('template_directory') . "/assets/images" ?>/hero-illustration.png"
                    alt="group of people working together illustration" />
            </div>
        </div>
        <section class="features | container bg-primary-400 text-neutral-100">
            <div class="feature">
                <div class="feature__icon">
                    <img src="<?php echo bloginfo('template_directory') . "/assets/images" ?>/skills.png"
                        alt="online-learning" />
                </div>
                <div class="gap-sm">
                    <p class="fw-bold fs-body-lg">Learn The Latest Skills</p>
                    <p class="fs-body-sm" style="color: hsl(0, 0%, 100%, 0.75)">
                        Contrary to popular belief, Lorem Ipsum is not simply random text.
                        It has roots in a BC, making it over 2000 years old.
                    </p>
                </div>
            </div>
            <div class="feature">
                <div class="feature__icon">
                    <img src="<?php echo bloginfo('template_directory') . "/assets/images" ?>/career.png"
                        alt="online-learning" />
                </div>
                <div class="gap-sm">
                    <p class="fw-bold fs-body-lg">Get Ready For a Career</p>
                    <p class="fs-body-sm" style="color: hsl(0, 0%, 100%, 0.75)">
                        Contrary to popular belief, Lorem Ipsum is not simply random text.
                        It has roots in a BC, making it over 2000 years old.
                    </p>
                </div>
            </div>
            <div class="feature">
                <div class="feature__icon">
                    <img src="<?php echo bloginfo('template_directory') . "/assets/images" ?>/certificate.png"
                        alt="online-learning" />
                </div>
                <div class="gap-sm">
                    <p class="fw-bold fs-body-lg">Earn a Certificate</p>
                    <p class="fs-body-sm" style="color: hsl(0, 0%, 100%, 0.75)">
                        Contrary to popular belief, Lorem Ipsum is not simply random text.
                        It has roots in a BC, making it over 2000 years old.
                    </p>
                </div>
            </div>
        </section>
    </section>
    <section class="our-courses | container">
        <div class="courses__header | gap-sm">
            <h2 class="fw-bold fs-title">Our Courses</h2>
            <p class="text-neutral-700">
                We have courses that will help you to excel in your career
            </p>
        </div>
        <div class="courses">
            <div class="course | box-shadow">
                <div class="course__info">
                    <div class="course__thumbnail">
                        <img src="<?php echo bloginfo('template_directory') . "/assets/images" ?>/course-thumbnail-1.png"
                            alt="little-girl-learning-online" />
                    </div>
                    <div class="course__category">
                        <span class="fs-body-x-sm text-neutral-700">UI/UX Design</span>
                        <img src="<?php echo bloginfo('template_directory') . "/assets/images" ?>/ratings.png"
                            alt="ratings" />
                    </div>
                    <p class="fs-body-lg fw-bold">UI/UX Design for Beginners</p>
                    <p class="fs-body-lg fw-bold text-secondary-400">$98</p>
                    <div class="course__metrics">
                        <div>
                            <img src="<?php echo bloginfo('template_directory') . "/assets/images" ?>/clock.svg"
                                alt="clock" class="icon" />
                            <span>22hr 30min</span>
                        </div>
                        <div>
                            <img src="<?php echo bloginfo('template_directory') . "/assets/images" ?>/video.svg"
                                alt="video" class="icon" />
                            <span>Lessons</span>
                        </div>
                        <div>
                            <img src="<?php echo bloginfo('template_directory') . "/assets/images" ?>/download.svg"
                                alt="download" class="icon" />
                            <span>Saves</span>
                        </div>
                    </div>
                </div>
                <button class="btn | btn--secondary">Join Course</button>
            </div>
            <div class="course | box-shadow">
                <div class="course__info">
                    <div class="course__thumbnail">
                        <img src="<?php echo bloginfo('template_directory') . "/assets/images" ?>/course-thumbnail-2.png"
                            alt="girl-learning-online" />
                    </div>
                    <div class="course__category">
                        <span class="fs-body-x-sm text-neutral-700">UI/UX Design</span>
                        <img src="<?php echo bloginfo('template_directory') . "/assets/images" ?>/ratings.png"
                            alt="ratings" />
                    </div>
                    <p class="fs-body-lg fw-bold">UI/UX Design for Beginners</p>
                    <p class="fs-body-lg fw-bold text-secondary-400">$98</p>
                    <div class="course__metrics">
                        <div>
                            <img src="<?php echo bloginfo('template_directory') . "/assets/images" ?>/clock.svg"
                                alt="clock" class="icon" />
                            <span>22hr 30min</span>
                        </div>
                        <div>
                            <img src="<?php echo bloginfo('template_directory') . "/assets/images" ?>/video.svg"
                                alt="video" class="icon" />
                            <span>Lessons</span>
                        </div>
                        <div>
                            <img src="<?php echo bloginfo('template_directory') . "/assets/images" ?>/download.svg"
                                alt="download" class="icon" />
                            <span>Saves</span>
                        </div>
                    </div>
                </div>
                <button class="btn | btn--secondary">Join Course</button>
            </div>
            <div class="course | box-shadow">
                <div class="course__info">
                    <div class="course__thumbnail">
                        <img src="<?php echo bloginfo('template_directory') . "/assets/images" ?>/course-thumbnail-3.png"
                            alt="girl-learning-online" />
                    </div>
                    <div class="course__category">
                        <span class="fs-body-x-sm text-neutral-700">UI/UX Design</span>
                        <img src="<?php echo bloginfo('template_directory') . "/assets/images" ?>/ratings.png"
                            alt="ratings" />
                    </div>
                    <p class="fs-body-lg fw-bold">UI/UX Design for Beginners</p>
                    <p class="fs-body-lg fw-bold text-secondary-400">$98</p>
                    <div class="course__metrics">
                        <div>
                            <img src="<?php echo bloginfo('template_directory') . "/assets/images" ?>/clock.svg"
                                alt="clock" class="icon" />
                            <span>22hr 30min</span>
                        </div>
                        <div>
                            <img src="<?php echo bloginfo('template_directory') . "/assets/images" ?>/video.svg"
                                alt="video" class="icon" />
                            <span>Lessons</span>
                        </div>
                        <div>
                            <img src="<?php echo bloginfo('template_directory') . "/assets/images" ?>/download.svg"
                                alt="download" class="icon" />
                            <span>Saves</span>
                        </div>
                    </div>
                    <button class="btn | btn--secondary">Join Course</button>
                </div>
            </div>
        </div>
    </section>
    <section class="premium-learning | bg-neutral-200 padding-block-700">
        <div class="premium-learning--container | container">
            <div class="premium-learning__illustration">
                <img src="<?php echo bloginfo('template_directory') . "/assets/images" ?>/learning-experience-illustration.png"
                    alt="a girl working on a laptop" />
            </div>
            <div class="premium-learning__info">
                <h3 class="fs-title-lg fw-black">
                    Premium <span class="text-secondary-400">Learning</span> Experience
                </h3>
                <div class="premium-learning__features">
                    <div class="premium-learning--feature">
                        <div class="feature__icon">
                            <img src="<?php echo bloginfo('template_directory') . "/assets/images" ?>/hearts.png"
                                alt="heart illustration" />
                        </div>
                        <div class="feature__info">
                            <p class="fw-bold">Easily Accessible</p>
                            <p class="text-neutral-700 fs-body-sm">
                                Learning will fell very comffortable with courslab.
                            </p>
                        </div>
                    </div>
                    <div class="premium-learning--feature">
                        <div class="feature__icon">
                            <img src="<?php echo bloginfo('template_directory') . "/assets/images" ?>/jigsaw.png"
                                alt="jigsaw puzzle illustration" />
                        </div>
                        <div class="feature__info">
                            <p class="fw-bold">Fun Learning Experience</p>
                            <p class="text-neutral-700 fs-body-sm">
                                Learning will fell very comffortable with courslab.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="testimonial | container padding-block-700">
        <div class="testimonial__header | gap">
            <h2 class="fw-bold fs-title">What Student's Say</h2>
            <p class="text-neutral-700">
                Hear what our students are saying after buying courses
            </p>
        </div>
        <div class="carousel">
            <div class="carousel__track-container">
                <div class="carousel__track">
                    <div class="carousel__slide current-slide">
                        <div class="student-review | box-shadow gap-lg">
                            <p class="text-neutral-700 fs-body-lg">
                                “Teachings of the great explore of truth, the master-builder
                                of human happiness. no one rejects,dislikes, or avoids
                                pleasure itself, pleasure itself”
                            </p>
                            <div class="review-by">
                                <div class="student-avatar">
                                    <img src="<?php echo bloginfo('template_directory') . "/assets/images" ?>/finlay.png"
                                        alt="finlay" />
                                </div>
                                <div class="student-info">
                                    <p class="fw-medium">Finlay Kirk</p>
                                    <p class="text-neutral-700 fs-body-sm">Web Developper</p>
                                </div>
                            </div>
                        </div>
                        <div class="student-review | box-shadow gap-lg">
                            <p class="text-neutral-700 fs-body-lg">
                                “Complete account of the system and expound the actual
                                Contrary to popular belief, Lorem Ipsum is not simply random
                                text. It has roots”
                            </p>
                            <div class="review-by">
                                <div class="student-avatar">
                                    <img src="<?php echo bloginfo('template_directory') . "/assets/images" ?>/dannette.png"
                                        alt="dannette" />
                                </div>
                                <div class="student-info">
                                    <p class="fw-medium">Dannette P. Cervantes</p>
                                    <p class="text-neutral-700 fs-body-sm">Web Design</p>
                                </div>
                            </div>
                        </div>
                        <div class="student-review | box-shadow gap-lg">
                            <p class="text-neutral-700 fs-body-lg">
                                “There are many variations of passages of Lorem Ipsum
                                available, but the majority have suffered alteration in some
                                form, by injected humour”
                            </p>
                            <div class="review-by">
                                <div class="student-avatar">
                                    <img src="<?php echo bloginfo('template_directory') . "/assets/images" ?>/clara.png"
                                        alt="clara" />
                                </div>
                                <div class="student-info">
                                    <p class="fw-medium">Clara R. Altman</p>
                                    <p class="text-neutral-700 fs-body-sm">UI&UX Design</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="carousel__slide">
                        <div class="student-review | box-shadow gap-lg">
                            <p class="text-neutral-700 fs-body-lg">
                                “Teachings of the great explore of truth, the master-builder
                                of human happiness. no one rejects,dislikes, or avoids
                                pleasure itself, pleasure itself”
                            </p>
                            <div class="review-by">
                                <div class="student-avatar">
                                    <img src="<?php echo bloginfo('template_directory') . "/assets/images" ?>/finlay.png"
                                        alt="finlay" />
                                </div>
                                <div class="student-info">
                                    <p class="fw-medium">Finlay Kirk 2</p>
                                    <p class="text-neutral-700 fs-body-sm">Web Developper</p>
                                </div>
                            </div>
                        </div>
                        <div class="student-review | box-shadow gap-lg">
                            <p class="text-neutral-700 fs-body-lg">
                                “Complete account of the system and expound the actual
                                Contrary to popular belief, Lorem Ipsum is not simply random
                                text. It has roots”
                            </p>
                            <div class="review-by">
                                <div class="student-avatar">
                                    <img src="<?php echo bloginfo('template_directory') . "/assets/images" ?>/dannette.png"
                                        alt="dannette" />
                                </div>
                                <div class="student-info">
                                    <p class="fw-medium">Dannette P. Cervantes 2</p>
                                    <p class="text-neutral-700 fs-body-sm">Web Design</p>
                                </div>
                            </div>
                        </div>
                        <div class="student-review | box-shadow gap-lg">
                            <p class="text-neutral-700 fs-body-lg">
                                “There are many variations of passages of Lorem Ipsum
                                available, but the majority have suffered alteration in some
                                form, by injected humour”
                            </p>
                            <div class="review-by">
                                <div class="student-avatar">
                                    <img src="<?php echo bloginfo('template_directory') . "/assets/images" ?>/clara.png"
                                        alt="clara" />
                                </div>
                                <div class="student-info">
                                    <p class="fw-medium">Clara R. Altman 2</p>
                                    <p class="text-neutral-700 fs-body-sm">UI&UX Design</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="carousel__slide">
                        <div class="student-review | box-shadow gap-lg">
                            <p class="text-neutral-700 fs-body-lg">
                                “Teachings of the great explore of truth, the master-builder
                                of human happiness. no one rejects,dislikes, or avoids
                                pleasure itself, pleasure itself”
                            </p>
                            <div class="review-by">
                                <div class="student-avatar">
                                    <img src="<?php echo bloginfo('template_directory') . "/assets/images" ?>/finlay.png"
                                        alt="finlay" />
                                </div>
                                <div class="student-info">
                                    <p class="fw-medium">Finlay Kirk 3</p>
                                    <p class="text-neutral-700 fs-body-sm">Web Developper</p>
                                </div>
                            </div>
                        </div>
                        <div class="student-review | box-shadow gap-lg">
                            <p class="text-neutral-700 fs-body-lg">
                                “Complete account of the system and expound the actual
                                Contrary to popular belief, Lorem Ipsum is not simply random
                                text. It has roots”
                            </p>
                            <div class="review-by">
                                <div class="student-avatar">
                                    <img src="<?php echo bloginfo('template_directory') . "/assets/images" ?>/dannette.png"
                                        alt="dannette" />
                                </div>
                                <div class="student-info">
                                    <p class="fw-medium">Dannette P. Cervantes 3</p>
                                    <p class="text-neutral-700 fs-body-sm">Web Design</p>
                                </div>
                            </div>
                        </div>
                        <div class="student-review | box-shadow gap-lg">
                            <p class="text-neutral-700 fs-body-lg">
                                “There are many variations of passages of Lorem Ipsum
                                available, but the majority have suffered alteration in some
                                form, by injected humour”
                            </p>
                            <div class="review-by">
                                <div class="student-avatar">
                                    <img src="<?php echo bloginfo('template_directory') . "/assets/images" ?>/clara.png"
                                        alt="clara" />
                                </div>
                                <div class="student-info">
                                    <p class="fw-medium">Clara R. Altman 3</p>
                                    <p class="text-neutral-700 fs-body-sm">UI&UX Design</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="carousel__slide">
                        <div class="student-review | box-shadow gap-lg">
                            <p class="text-neutral-700 fs-body-lg">
                                “Teachings of the great explore of truth, the master-builder
                                of human happiness. no one rejects,dislikes, or avoids
                                pleasure itself, pleasure itself”
                            </p>
                            <div class="review-by">
                                <div class="student-avatar">
                                    <img src="<?php echo bloginfo('template_directory') . "/assets/images" ?>/finlay.png"
                                        alt="finlay" />
                                </div>
                                <div class="student-info">
                                    <p class="fw-medium">Finlay Kirk 4</p>
                                    <p class="text-neutral-700 fs-body-sm">Web Developper</p>
                                </div>
                            </div>
                        </div>
                        <div class="student-review | box-shadow gap-lg">
                            <p class="text-neutral-700 fs-body-lg">
                                “Complete account of the system and expound the actual
                                Contrary to popular belief, Lorem Ipsum is not simply random
                                text. It has roots”
                            </p>
                            <div class="review-by">
                                <div class="student-avatar">
                                    <img src="<?php echo bloginfo('template_directory') . "/assets/images" ?>/dannette.png"
                                        alt="dannette" />
                                </div>
                                <div class="student-info">
                                    <p class="fw-medium">Dannette P. Cervantes 4</p>
                                    <p class="text-neutral-700 fs-body-sm">Web Design</p>
                                </div>
                            </div>
                        </div>
                        <div class="student-review | box-shadow gap-lg">
                            <p class="text-neutral-700 fs-body-lg">
                                “There are many variations of passages of Lorem Ipsum
                                available, but the majority have suffered alteration in some
                                form, by injected humour”
                            </p>
                            <div class="review-by">
                                <div class="student-avatar">
                                    <img src="<?php echo bloginfo('template_directory') . "/assets/images" ?>/clara.png"
                                        alt="clara" />
                                </div>
                                <div class="student-info">
                                    <p class="fw-medium">Clara R. Altman 4</p>
                                    <p class="text-neutral-700 fs-body-sm">UI&UX Design</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="carousel__nav">
                <button class="carousel__indicator current-slide" aria-label="nav-indicators"></button>
                <button class="carousel__indicator" aria-label="nav-indicators"></button>
                <button class="carousel__indicator" aria-label="nav-indicators"></button>
                <button class="carousel__indicator" aria-label="nav-indicators"></button>
            </div>
        </div>
    </section>
    <section class="our-teachers | container padding-block-700">
        <div class="our-teacher__header | gap-sm">
            <h2 class="fw-bold fs-title">Our Teachers</h2>
            <p class="text-neutral-700">
                We provide best teachers from around the globe
            </p>
        </div>
        <div class="teachers | flex">
            <div class="teacher | box-shadow gap">
                <div class="teacher__avatar">
                    <img src="<?php echo bloginfo('template_directory') . "/assets/images" ?>/professor-1.png" alt="" />
                </div>
                <div>
                    <p class="fw-bold">Matthew E. McNatt</p>
                    <p class="fw-medium text-neutral-700">
                        Professor @George Brown College
                    </p>
                </div>
                <p class="text-neutral-700">
                    Ut enim ad minim veniam, quis nost exercitation ullamco laboris nisi
                    ut allquip ex commodo.
                </p>
                <div class="teacher__meta-data">
                    <p class="text-secondary-400 fw-medium">Engineering Physics</p>
                    <div class="teacher__socials">
                        <a href="#" aria-label="instagram"><img
                                src="<?php echo bloginfo('template_directory') . "/assets/images" ?>/instagram.svg"
                                alt="instagram" /></a>
                        <a href="#" aria-label="linkedin"><img
                                src="<?php echo bloginfo('template_directory') . "/assets/images" ?>/linkedin.svg"
                                alt="linkedin" /></a>
                    </div>
                </div>
            </div>
            <div class="teacher | box-shadow gap">
                <div class="teacher__avatar">
                    <img src="<?php echo bloginfo('template_directory') . "/assets/images" ?>/professor-2.png" alt="" />
                </div>
                <div>
                    <p class="fw-bold">Tracy D. Wright</p>
                    <p class="fw-medium text-neutral-700">
                        Professor @George Brown College
                    </p>
                </div>
                <p class="text-neutral-700">
                    Ut enim ad minim veniam, quis nost exercitation ullamco laboris nisi
                    ut allquip ex commodo.
                </p>
                <div class="teacher__meta-data">
                    <p class="text-secondary-400 fw-medium">Engineering Physics</p>
                    <div class="teacher__socials">
                        <a href="#" aria-label="instagram"><img
                                src="<?php echo bloginfo('template_directory') . "/assets/images" ?>/instagram.svg"
                                alt="instagram" /></a>
                        <a href="#" aria-label="linkedin"><img
                                src="<?php echo bloginfo('template_directory') . "/assets/images" ?>/linkedin.svg"
                                alt="linkedin" /></a>
                    </div>
                </div>
            </div>
            <div class="teacher | box-shadow gap">
                <div class="teacher__avatar">
                    <img src="<?php echo bloginfo('template_directory') . "/assets/images" ?>/professor-3.png" alt="" />
                </div>
                <div>
                    <p class="fw-bold">Cynthia A. Nelson</p>
                    <p class="fw-medium text-neutral-700">
                        Professor @George Brown College
                    </p>
                </div>
                <p class="text-neutral-700">
                    Ut enim ad minim veniam, quis nost exercitation ullamco laboris nisi
                    ut allquip ex commodo.
                </p>
                <div class="teacher__meta-data">
                    <p class="text-secondary-400 fw-medium">Engineering Physics</p>
                    <div class="teacher__socials">
                        <a href="#" aria-label="instagram"><img
                                src="<?php echo bloginfo('template_directory') . "/assets/images" ?>/instagram.svg"
                                alt="instagram" /></a>
                        <a href="#" aria-label="linkedin"><img
                                src="<?php echo bloginfo('template_directory') . "/assets/images" ?>/linkedin.svg"
                                alt="linkedin" /></a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="newsletter | container bg-primary-400 text-neutral-100 gap-lg">
        <h2 class="fw-black fs-title">Subscribe To Our Newsletter</h2>
        <p style="max-width: 40ch">
            Get latest updates about courses and many more directly into your inbox
        </p>
        <div class="newsletter-email">
            <div class="email-input">
                <input type="email" name="email" id="email" placeholder="Email Address" />
            </div>
            <button class="btn | btn--secondary">Send</button>
        </div>
    </section>
    <?php get_footer(); ?>
</body>

</html>