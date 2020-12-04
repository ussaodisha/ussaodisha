<?= $this->extend('layout/app') ?>

<?= $this->section('content') ?>

<section class="Home-page">
    <div id="carouselExampleIndicators" class="carousel slide carousel-fade" data-ride="carousel">
        <ol class="carousel-indicators">
            <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
            <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
            <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
        </ol>
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img class="d-block w-100" height="100%" src="<?= base_url('images/slider/b (2).jpg');?>"
                    alt="First slide">
                <div class="carousel-caption d-none d-md-block" data-aos="fade-up" data-aos-delay="200">
                    <h1 class="display-1">USSA</h1>
                    <p>A Journey Towards SOCIAL TRANSFORMATION</p>
                </div>
            </div>
            <div class="carousel-item">
                <img class="d-block w-100" src="<?= base_url('images/slider/c.jpg');?>" alt="Second slide">
                <div class="carousel-caption d-none d-md-block">
                    <h5>First slide label</h5>
                    <p>Nulla vitae elit libero, a pharetra augue mollis interdum.</p>
                </div>
            </div>
            <div class="carousel-item">
                <img class="d-block w-100" src="<?= base_url('images/slider/a (2).jpg');?>" alt="Third slide">
                <div class="carousel-caption d-none d-md-block">
                    <h5>First slide label</h5>
                    <p>Nulla vitae elit libero, a pharetra augue mollis interdum.</p>
                </div>
            </div>
        </div>
        <!-- <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
            <i class="fas fa-chevron-right fa-fw"></i>
        </a> -->

        <!-- <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
        </a> -->

        <!-- custom navigation buttons -->
        <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
            <div class="control-icon">
                <i class="fa fa-angle-left" aria-hidden="true"></i>
            </div>
        </a>
        <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
            <div class="control-icon">
                <i class="fa fa-angle-right" aria-hidden="true"></i>
            </div>
        </a>

    </div>

    <div class="short-about">
        <div class="row">
            <div class="col-sm-12 col-md-4 col-lg-6 ">
                <div class="short-about-img">
                    <img src="<?= base_url('images/vegan.svg'); ?>" alt="image">
                </div>
            </div>
            <div class="col-sm-12 col-md-8 col-lg-6 ">
                <div class="short-about-content">
                    <h1>USSA</h1>
                    <p>Udra Society for secondary Agriculture</p>
                    <p class="text-justify">In a spirit of openness and sensitivity thresholded its footprint, believing in the ethos that
                        nothing is written in the stone and thus its interventions have extended to the cause of making
                        a more enabled and empowered society through putting the best effort. Through its primary
                        concern are seen as promoting and establishing spaces for secondary agriculture in the tribal
                        pockets of Odisha from its very name but it has widened its outreach, phased out from
                        agriculture to health and education, responding that along with agriculture, the community often
                        needs more than a mere livelihood to enlist them as empowered one.</p>
                </div>
            </div>
        </div>

        <div class="view_more_button">
            <a href="<?= base_url('/About'); ?>" class="button shadow-sm">View More</a>
        </div>
    </div>

    <div class="trust-area-of-intervension-section">
        <div class="trust-area-of-intervension-section-heading">
            <h2>Trust Area of Intervension</h2>
        </div>
        <div class="trust-area-of-intervension-content">
            <div class="row">
                <div class="col-sm-12 col-md-6 col-lg-6 p-0">
                    <div class="tai-content-panel" data-aos="fade-up">
                        <div class="image-area">
                            <img src="<?= base_url('images/slider/b (2).jpg');?>" alt="images">
                        </div>
                        <div class="content-area">
                            <h5>Training and Capacity Building</h5>
                            <div class="content-area-text ">
                                <p>USSA recognizes that cutting edge to development heavily depends upon increased human
                                    potentials and thus regular, specific and need-based training and capacity building
                                    activities are offered to various stakeholders to update them with professional work
                                    approach and to create and strengthen their skills to accelerate development action.
                                    Capacity building in terms of training, orientations, and workshops is imparted
                                    through its specialized and expertise professionals on various subjects like
                                    area-based livelihood options, secondary agriculture, integration of physically and
                                    mentally disabled persons, health and education. USSA has ground its effort in
                                    preparing tools and techniques through coming out with opposite training modules and
                                    materials to equip trainees at different levels.</p>
                            </div>
                            <a class="readmore-btn">Show More</a>
                            <!-- <a data-toggle="collapse" href="#collapseExample" role="button" aria-expanded="false" aria-controls="collapseExample">Show More</a>
                            
                            <div class="collapse" id="collapseExample">
                                <div class="card card-body">
                                  Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident.
                                </div>
                            </div> -->
                        </div>
                    </div>
                </div>

                <div class="col-sm-12 col-md-6 col-lg-6 p-0">
                    <div class="tai-content-panel" data-aos="fade-up">
                        <div class="image-area">
                            <img src="<?= base_url('images/slider/b (2).jpg');?>" alt="images">
                        </div>
                        <div class="content-area">
                            <h5>Health.</h5>
                            <div class="content-area-text">
                                <p> USSA intervenes in health prioritise for the undernourished of the uncovered and
                                    hard tp reach areas where no other option/services are available. It primarily
                                    focuses on reproductive and child health, malaria, anthrax and other prevalent
                                    diseases. Its intervention in health includes </p>
                                <ol>
                                    <li>Organizing health camps.</li>
                                    <li>Referral assistance in complicacies.</li>
                                    <li>IEC/BCC on health.</li>
                                </ol>
                            </div>
                            <a class="readmore-btn">Show More</a>
                        </div>
                    </div>
                </div>

                <div class="col-sm-12 col-md-6 col-lg-6 p-0">
                    <div class="tai-content-panel" data-aos="fade-up">
                        <div class="image-area">
                            <img src="<?= base_url('images/slider/b (2).jpg');?>" alt="images">
                        </div>
                        <div class="content-area">
                            <h5>Education.</h5>
                            <div class="content-area-text">
                                <p>USSA believes that the present educational system falls short as no real inclusion is
                                    desired in the educational approach. Education without inclusion remains isolation
                                    as children and special children are lined separately which contributes to their
                                    discrimination and social segregation. USSA promotes inclusive education (education
                                    under one roof) integration and new based activity and strives to provide basic
                                    education to the children with autism, cerebral palsy, mental retardation with a
                                    common and specific approach, which otherwise introduces social mainstreaming from
                                    their very childhood.</p>
                            </div>
                            <a class="readmore-btn">Show More</a>

                        </div>
                    </div>
                </div>
                <div class="col-sm-12 col-md-6 col-lg-6 p-0">
                    <div class="tai-content-panel" data-aos="fade-up">
                        <div class="image-area">
                            <img src="<?= base_url('images/slider/b (2).jpg');?>" alt="images">
                        </div>
                        <div class="content-area">
                            <h5>Networking and partnership .</h5>
                            <div class="content-area-text">
                                <p>To increase citizens bigaining power and to respond better to injustice and paucity,
                                    USSA emphasizes on networking with other NGOS/CBOS, community oragnisations to come
                                    together to fight against community issues those invite immediate intervensions.</p>
                            </div>
                            <a class="readmore-btn">Show More</a>

                        </div>
                    </div>
                </div>
                <div class="col-sm-12 col-md-6 col-lg-6 p-0">
                    <div class="tai-content-panel" data-aos="fade-up">
                        <div class="image-area">
                            <img src="<?= base_url('images/slider/b (2).jpg');?>" alt="images">
                        </div>
                        <div class="content-area">
                            <h5>Livelihood and Agriculture.</h5>
                            <div class="content-area-text">
                                <p>USSA has a deep and comprehensive understanding in promoting livelihoods with the
                                    rural poor to root out poverty through and approach that focuses on building and
                                    working with existing available local resources which brings together the social
                                    behavioral with the technical and managerial magnitude. Livelihood and agriculture
                                    related intervensions of USSA include:</p>
                                <ol>
                                    <li>Forest based livelihood/NTFP Marketing</li>
                                    <li>Community based management of natural resource</li>
                                    <li>Irrigation and watershed development</li>
                                    <li>Secondary agriculture</li>
                                </ol>
                            </div>
                            <a class="readmore-btn">Show More</a>

                        </div>
                    </div>
                </div>
                <div class="col-sm-12 col-md-6 col-lg-6 p-0">
                    <div class="tai-content-panel" data-aos="fade-up">
                        <div class="image-area">
                            <img src="<?= base_url('images/slider/b (2).jpg');?>" alt="images">
                        </div>
                        <div class="content-area">
                            <h5>Field based learning, exchange and exposure.</h5>
                            <div class="content-area-text">
                                <p>USSA believes that field-based leaming and exposure gives impetus to the workers as
                                    well as planners to work efficiently and meaningfully. Members of USSA have
                                    extensive field experience and exposure visit to the various corner of the country
                                    as well as to abroad.</p>
                            </div>
                            <a class="readmore-btn">Show More</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="testimonial-section" data-aos="fade-up">
        <div class="testimonial-section-heading">
            <h2>testimonial-section</h2>
        </div>
        <div id="testimonial-controls" class="carousel slide " data-ride="carousel">
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <div class="testimonial-item-panel">
                        <div class="testimonial-icon">
                            <img src="<?= base_url('images/icons/testimonial-icon.png'); ?>" alt="icon">
                        </div>
                        <div class="testimonial-content">
                            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Illo, magni omnis repellendus
                                similique obcaecati provident iste, magnam, ducimus eveniet itaque est. Laborum commodi
                                consectetur at?</p>
                            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Quidem voluptatibus aperiam
                                similique unde porro obcaecati repudiandae suscipit ipsum laborum quisquam odio fugiat
                                sequi totam eius dolorum quasi placeat dolor, iusto nostrum exercitationem reiciendis
                                quod temporibus optio! Esse, molestiae. Dolores excepturi reiciendis, odio perferendis
                                aperiam aspernatur laborum illo magnam itaque quam.</p>
                        </div>
                        <div class="testimonial-details">
                            <h5>Lorem, ipsum.</h5>
                            <p>Lorem ipsum dolor sit amet.</p>
                        </div>
                    </div>
                </div>
                <div class="carousel-item">
                    <div class="testimonial-item-panel">
                        <div class="testimonial-icon">
                            <img src="<?= base_url('images/icons/testimonial-icon.png'); ?>" alt="icon">
                        </div>
                        <div class="testimonial-content">
                            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Illo, magni omnis repellendus
                                similique obcaecati provident iste, magnam, ducimus eveniet itaque est. Laborum commodi
                                consectetur at?</p>
                            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Quidem voluptatibus aperiam
                                similique unde porro obcaecati repudiandae suscipit ipsum laborum quisquam odio fugiat
                                sequi totam eius dolorum quasi placeat dolor, iusto nostrum exercitationem reiciendis
                                quod temporibus optio! Esse, molestiae. Dolores excepturi reiciendis, odio perferendis
                                aperiam aspernatur laborum illo magnam itaque quam.</p>
                        </div>
                        <div class="testimonial-details">
                            <h5>Lorem, ipsum.</h5>
                            <p>Lorem ipsum dolor sit amet.</p>
                        </div>
                    </div>
                </div>
                <div class="carousel-item">
                    <div class="testimonial-item-panel">
                        <div class="testimonial-icon">
                            <img src="<?= base_url('images/icons/testimonial-icon.png'); ?>" alt="icon">
                        </div>
                        <div class="testimonial-content">
                            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Illo, magni omnis repellendus
                                similique obcaecati provident iste, magnam, ducimus eveniet itaque est. Laborum commodi
                                consectetur at?</p>
                            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Quidem voluptatibus aperiam
                                similique unde porro obcaecati repudiandae suscipit ipsum laborum quisquam odio fugiat
                                sequi totam eius dolorum quasi placeat dolor, iusto nostrum exercitationem reiciendis
                                quod temporibus optio! Esse, molestiae. Dolores excepturi reiciendis, odio perferendis
                                aperiam aspernatur laborum illo magnam itaque quam.</p>
                        </div>
                        <div class="testimonial-details">
                            <h5>Lorem, ipsum.</h5>
                            <p>Lorem ipsum dolor sit amet.</p>
                        </div>
                    </div>
                </div>
            </div>
            <!-- <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="sr-only">Previous</span>
            </a>
            <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="sr-only">Next</span>
            </a> -->
            <a class="carousel-control-prev" href="#testimonial-controls" role="button" data-slide="prev">
                <div class="control-icon">
                    <img src="<?= base_url('images/icons/left-arrow (1).svg'); ?>" alt="left">
                </div>
            </a>
            <a class="carousel-control-next" href="#testimonial-controls" role="button" data-slide="next">
                <div class="control-icon">
                    <img src="<?= base_url('images/icons/right-arrow (1).svg'); ?>" alt="right">
                </div>
            </a>

        </div>
    </div>
    <div class="more-section">

    </div>

    <div class="bottom-background">
        <div class="join-us-panel">
            <div class="join-us-form">
                <form action="<?= base_url('Home/subscribe_emails')?>" method="POST">
                    <input type="email" name="email" id="email" class="join-us-email" required>
                    <div class="join-btn-box">
                        <input type="submit" value="Join Us" name="joinnow" class="join-us-btn">
                    </div>
                </form>
            </div>
        </div>
        <div class="bottom-background-content">
            <h1>Lorem, ipsum dolor.</h1>
        </div>
        
    </div>
</section>

<?= $this->endSection()?>