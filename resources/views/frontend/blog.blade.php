@extends('layout.website')

@section('content')
    <!-- Blog Page Start -->
    <section class="services-area py-140 rpy-100">
        <div class="container">
            <div class="row blog-row">
                <div class="col-lg-8">
                    <div class="blog-standard-wrap rmb-75">
                        @foreach ($blogPosts as $post)
                            <div class="blog-item wow fadeInUp delay-0-2s">
                                <div class="image">
                                    <img src="assets/images/blog/blog1.jpg" alt="Blog">
                                </div>
                                <div class="blog-content">
                                    <ul class="blog-meta">
                                        <li><i class="far fa-calendar-alt"></i> <a
                                                href="#">{{ $post->created_at }}</a>
                                        </li>
                                        <li><i class="far fa-user"></i> <a href="#">by - Admin</a></li>
                                        <li><i class="far fa-comment-dots"></i> <a href="#">5 Comments</a></li>
                                    </ul>
                                    <h3><a href="{{ route('blog-details', $post->slug) }}">{{ $post->title }} </a></h3>
                                    <p>{{substr($post->pg1, 50) . '...'}} </p>
                                    <div class="btn-share">
                                        <a href="{{ route('blog-details', 'how-to-code') }}" class="theme-btn">Read More</a>
                                        <div class="share-icons">
                                            <b>Share :</b>
                                            <a href="#"><i class="fab fa-facebook-f"></i></a>
                                            <a href="#"><i class="fab fa-twitter"></i></a>
                                            <a href="#"><i class="fab fa-linkedin-in"></i></a>
                                            <a href="#"><i class="fab fa-google-plus-g"></i></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                        <div class="blog-item wow fadeInUp delay-0-2s">
                            <div class="image">
                                <img src="assets/images/blog/blog2.jpg" alt="Blog">
                                <a href="https://www.youtube.com/watch?v=9Y7ma241N8k" class="mfp-iframe video-play"><i
                                        class="fas fa-play"></i></a>
                            </div>
                            <div class="blog-content">
                                <ul class="blog-meta">
                                    <li><i class="far fa-calendar-alt"></i> <a href="blog.html#">18 March, 2022</a>
                                    </li>
                                    <li><i class="far fa-user"></i> <a href="blog.html#">by - Admin</a></li>
                                    <li><i class="far fa-comment-dots"></i> <a href="blog.html#">5 Comments</a></li>
                                </ul>
                                <h3><a href="blog-details.html">Always gives you digital graphic designing </a></h3>
                                <p>Aliquam lectus dui, tempus vitae scelerisque sit amet, efficitur a quam. Fusce
                                    pretium eleifend pulvinar. Morbi sit amet augue non felis vulputate fermentum.
                                    Nunc vitae quam sed ex porta placerat. Vestibulum sodales </p>
                                <div class="btn-share">
                                    <a href="blog-details.html" class="theme-btn">Read More</a>
                                    <div class="share-icons">
                                        <b>Share :</b>
                                        <a href="blog.html#"><i class="fab fa-facebook-f"></i></a>
                                        <a href="blog.html#"><i class="fab fa-twitter"></i></a>
                                        <a href="blog.html#"><i class="fab fa-linkedin-in"></i></a>
                                        <a href="blog.html#"><i class="fab fa-google-plus-g"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="blog-item wow fadeInUp delay-0-2s">
                            <div class="image blog-slider">
                                <img src="assets/images/blog/blog3.jpg" alt="Blog">
                                <img src="assets/images/blog/blog2.jpg" alt="Blog">
                                <img src="assets/images/blog/blog1.jpg" alt="Blog">
                            </div>
                            <div class="blog-content">
                                <ul class="blog-meta">
                                    <li><i class="far fa-calendar-alt"></i> <a href="blog.html#">18 March, 2022</a>
                                    </li>
                                    <li><i class="far fa-user"></i> <a href="blog.html#">by - Admin</a></li>
                                    <li><i class="far fa-comment-dots"></i> <a href="blog.html#">5 Comments</a></li>
                                </ul>
                                <h3><a href="blog-details.html">Always gives you digital graphic designing </a></h3>
                                <p>Aliquam lectus dui, tempus vitae scelerisque sit amet, efficitur a quam. Fusce
                                    pretium eleifend pulvinar. Morbi sit amet augue non felis vulputate fermentum.
                                    Nunc vitae quam sed ex porta placerat. Vestibulum sodales </p>
                                <div class="btn-share">
                                    <a href="blog-details.html" class="theme-btn">Read More</a>
                                    <div class="share-icons">
                                        <b>Share :</b>
                                        <a href="blog.html#"><i class="fab fa-facebook-f"></i></a>
                                        <a href="blog.html#"><i class="fab fa-twitter"></i></a>
                                        <a href="blog.html#"><i class="fab fa-linkedin-in"></i></a>
                                        <a href="blog.html#"><i class="fab fa-google-plus-g"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="blog-item blog-bg-image overlay text-white wow fadeInUp delay-0-2s"
                            style="background-image: url(assets/images/blog/blog4.jpg)">
                            <div class="blog-content">
                                <ul class="blog-meta">
                                    <li><i class="far fa-calendar-alt"></i> <a href="blog.html#">18 March, 2022</a>
                                    </li>
                                    <li><i class="far fa-user"></i> <a href="blog.html#">by - Admin</a></li>
                                    <li><i class="far fa-comment-dots"></i> <a href="blog.html#">5 Comments</a></li>
                                </ul>
                                <h3><a href="blog-details.html">Working together, to create something younique</a>
                                </h3>
                                <p>Aliquam lectus dui, tempus vitae scelerisque sit amet, efficitur a quam. Fusce
                                    pretium eleifend pulvinar. Morbi sit amet augue non</p>
                                <div class="btn-share">
                                    <a href="blog-details.html" class="theme-btn">Read More</a>
                                    <div class="share-icons">
                                        <b>Share :</b>
                                        <a href="blog.html#"><i class="fab fa-facebook-f"></i></a>
                                        <a href="blog.html#"><i class="fab fa-twitter"></i></a>
                                        <a href="blog.html#"><i class="fab fa-linkedin-in"></i></a>
                                        <a href="blog.html#"><i class="fab fa-google-plus-g"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="blog-item blockquote bg-lighter wow fadeInUp delay-0-2s">
                            <div class="blog-content">
                                <h3><a href="blog-details.html">We are a full solutions Strategy-led Media, Creative
                                        & Tech company, that employs senior strategic minds that not only think but
                                        do.</a></h3>
                                <h5 class="name">michele morrone</h5>
                            </div>
                        </div>
                        <nav aria-label="...">
                            <ul class="pagination flex-wrap pt-10">
                                <li class="page-item active">
                                    <span class="page-link">
                                        01
                                        <span class="sr-only">(current)</span>
                                    </span>
                                </li>
                                <li class="page-item"><a class="page-link" href="blog.html#">02</a></li>
                                <li class="page-item"><a class="page-link" href="blog.html#">03</a></li>
                                <li class="page-item dot">.</li>
                                <li class="page-item dot">.</li>
                                <li class="page-item dot">.</li>
                                <li class="page-item"><a class="page-link" href="blog.html#">04</a></li>
                                <li class="page-item"><a class="page-link" href="blog.html#">05</a></li>
                            </ul>
                        </nav>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="blog-sidebar">
                        <div class="widget search-widget wow fadeInUp delay-0-2s">
                            <form action="blog.html#">
                                <input type="search" placeholder="Search....." required>
                                <button type="submit"><i class="fas fa-search"></i></button>
                            </form>
                        </div>
                        <div class="widget category-widget wow fadeInUp delay-0-4s">
                            <h4 class="widget-title">Category</h4>
                            <ul>
                                <li><a href="blog.html">Web Development</a> <span>05</span></li>
                                <li><a href="blog.html">UI-UX Designing</a> <span>07</span></li>
                                <li><a href="blog.html">Cyber Security</a> <span>03</span></li>
                                <li><a href="blog.html">Software development</a> <span>09</span></li>
                                <li><a href="blog.html">Digital Marketing</a> <span>05</span></li>
                            </ul>
                        </div>
                        <div class="widget blog-widget wow fadeInUp delay-0-2s">
                            <h4 class="widget-title">Recent Post</h4>
                            <div class="widgets-posts">
                                <div class="blog-widget-item">
                                    <div class="image">
                                        <img src="assets/images/widgets/blog1.jpg" alt="Blog">
                                    </div>
                                    <div class="blog-widget-content">
                                        <ul class="blog-meta">
                                            <li><i class="far fa-calendar-alt"></i> <a href="blog.html#">18 March,
                                                    2022</a></li>
                                        </ul>
                                        <h5><a href="blog-details.html">Providing brilliant ideas for your
                                                business</a></h5>
                                    </div>
                                </div>
                                <div class="blog-widget-item">
                                    <div class="image">
                                        <img src="assets/images/widgets/blog2.jpg" alt="Blog">
                                    </div>
                                    <div class="blog-widget-content">
                                        <ul class="blog-meta">
                                            <li><i class="far fa-calendar-alt"></i> <a href="blog.html#">18 March,
                                                    2022</a></li>
                                        </ul>
                                        <h5><a href="blog-details.html">Providing brilliant ideas for your
                                                business</a></h5>
                                    </div>
                                </div>
                                <div class="blog-widget-item">
                                    <div class="image">
                                        <img src="assets/images/widgets/blog3.jpg" alt="Blog">
                                    </div>
                                    <div class="blog-widget-content">
                                        <ul class="blog-meta">
                                            <li><i class="far fa-calendar-alt"></i> <a href="blog.html#">18 March,
                                                    2022</a></li>
                                        </ul>
                                        <h5><a href="blog-details.html">Providing brilliant ideas for your
                                                business</a></h5>
                                    </div>
                                </div>
                                <div class="more-btn pt-10 w-100 text-center">
                                    <a href="blog.html" class="view-more">View More</a>
                                </div>
                            </div>
                        </div>
                        <div class="widget tag-widget wow fadeInUp delay-0-2s">
                            <h4 class="widget-title">Tags</h4>
                            <div class="tag-cloud">
                                <a href="blog.html">Agency</a>
                                <a href="blog.html">Designing</a>
                                <a href="blog.html">apps</a>
                                <a href="blog.html">Development</a>
                                <a href="blog.html">Graphics</a>
                                <a href="blog.html">Cyber Security</a>
                                <a href="blog.html">Cloud</a>
                            </div>
                        </div>
                        <div class="widget gallery-widget wow fadeInUp delay-0-2s">
                            <h4 class="widget-title">Gallery</h4>
                            <div class="gallery-items">
                                <div class="gallery-widget-item">
                                    <img src="assets/images/widgets/gallery1.jpg" alt="Gallery">
                                    <a href="assets/images/widgets/gallery1.jpg"><i class="fas fa-plus"></i></a>
                                </div>
                                <div class="gallery-widget-item">
                                    <img src="assets/images/widgets/gallery2.jpg" alt="Gallery">
                                    <a href="assets/images/widgets/gallery2.jpg"><i class="fas fa-plus"></i></a>
                                </div>
                                <div class="gallery-widget-item">
                                    <img src="assets/images/widgets/gallery3.jpg" alt="Gallery">
                                    <a href="assets/images/widgets/gallery3.jpg"><i class="fas fa-plus"></i></a>
                                </div>
                                <div class="gallery-widget-item">
                                    <img src="assets/images/widgets/gallery4.jpg" alt="Gallery">
                                    <a href="assets/images/widgets/gallery4.jpg"><i class="fas fa-plus"></i></a>
                                </div>
                                <div class="gallery-widget-item">
                                    <img src="assets/images/widgets/gallery5.jpg" alt="Gallery">
                                    <a href="assets/images/widgets/gallery5.jpg"><i class="fas fa-plus"></i></a>
                                </div>
                                <div class="gallery-widget-item">
                                    <img src="assets/images/widgets/gallery6.jpg" alt="Gallery">
                                    <a href="assets/images/widgets/gallery6.jpg"><i class="fas fa-plus"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Blog Page End -->
@endsection
