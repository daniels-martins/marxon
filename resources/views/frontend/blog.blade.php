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
                                    <img src="/{{ $post->img}}" alt="{{ $post->alt}}">
                                </div>
                                <div class="blog-content">
                                    <ul class="blog-meta">
                                        <li><i class="far fa-calendar-alt"></i> <a
                                                href="javascript:void(0)">{{ $post->created_at }}</a>
                                        </li>

                                        <li><i class="far fa-user"></i> <a href="javascript:void(0)">by - Admin</a></li>
                                        <li><i class="far fa-comment-dots"></i> <a href="javascript:void(0)">5 Comments</a></li>
                                    </ul>
                                    <h3><a href="{{ route('blog.show', $post->slug) }}">{{ $post->title }} </a></h3>
                                    <p>{{ substr($post->pg1, 50) . '...' }} </p>
                                    <div class="btn-share">
                                        <a href="{{ route('blog.show', $post->slug) }}" class="theme-btn">Read More</a>
                                        <div class="share-icons">
                                            <b>Share :</b>
                                            <a href="javascript:void(0)"><i class="fab fa-facebook-f"></i></a>
                                            <a href="javascript:void(0)"><i class="fab fa-twitter"></i></a>
                                            <a href="javascript:void(0)"><i class="fab fa-linkedin-in"></i></a>
                                            <a href="javascript:void(0)"><i class="fab fa-google-plus-g"></i></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                        {{-- concise method of displaying blogs --}}
                        {{-- <div class="blog-item blog-bg-image overlay text-white wow fadeInUp delay-0-2s"
                            style="background-image: url(/assets/images/blog/blog4.jpg)">
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
                        </div> --}}
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
                                <li class="page-item"><a class="page-link" href="javascript:void(0)">02</a></li>
                                <li class="page-item"><a class="page-link" href="javascript:void(0)">03</a></li>
                                <li class="page-item dot">.</li>
                                <li class="page-item dot">.</li>
                                <li class="page-item dot">.</li>
                                <li class="page-item"><a class="page-link" href="javascript:void(0)">04</a></li>
                                <li class="page-item"><a class="page-link" href="javascript:void(0)">05</a></li>
                            </ul>
                        </nav>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="blog-sidebar">
                        {{-- <div class="widget search-widget wow fadeInUp delay-0-2s">
                            <form action="blog.html#">
                                <input type="search" placeholder="Search....." required>
                                <button type="submit"><i class="fas fa-search"></i></button>
                            </form>
                        </div> --}}
                        {{-- <div class="widget category-widget wow fadeInUp delay-0-4s">
                            <h4 class="widget-title">Category</h4>
                            <ul>
                                <li><a href="blog.html">Web Development</a> <span>05</span></li>
                                <li><a href="blog.html">UI-UX Designing</a> <span>07</span></li>
                                <li><a href="blog.html">Cyber Security</a> <span>03</span></li>
                                <li><a href="blog.html">Software development</a> <span>09</span></li>
                                <li><a href="blog.html">Digital Marketing</a> <span>05</span></li>
                            </ul>
                        </div> --}}
                        <div class="widget blog-widget wow fadeInUp delay-0-2s">
                            <h4 class="widget-title">Recent Post</h4>
                            <div class="widgets-posts">
                                @foreach ($blogPosts as $post)
                                    <div class="blog-widget-item">
                                        <div class="image">
                                            <img src="/{{ $post->img }}" alt="{{ $post->alt }}">
                                        </div>
                                        <div class="blog-widget-content">
                                            <ul class="blog-meta">
                                                <li><i class="far fa-calendar-alt"></i> <a href="blog.html#">18 March,
                                                        2022</a>
                                                </li>
                                                <li>
                                                    <i class="far fa-calendar-alt"></i> <a
                                                        href="blog.html#">{{ $post->created_at }} </a>
                                                </li>
                                            </ul>
                                            <h5><a href="blog-details.html">{{ $post->title }}</a></h5>
                                        </div>
                                    </div>
                                @endforeach
                                <div class="more-btn pt-10 w-100 text-center">
                                    {{-- <a href="blog.html" class="view-more">View More</a> --}}
                                </div>
                            </div>
                        </div>
                        <div class="widget tag-widget wow fadeInUp delay-0-2s">
                            <h4 class="widget-title">Tags</h4>
                            <div class="tag-cloud">
                                <a href="javascript:void(0)">Agency</a>
                                <a href="javascript:void(0)">Designing</a>
                                <a href="javascript:void(0)">apps</a>
                                <a href="javascript:void(0)">Development</a>
                                <a href="javascript:void(0)">Graphics</a>
                                <a href="javascript:void(0)">Cyber Security</a>
                                <a href="javascript:void(0)">Cloud</a>
                            </div>
                        </div>
                        <div class="widget gallery-widget wow fadeInUp delay-0-2s">
                            <h4 class="widget-title">Gallery</h4>
                            <div class="gallery-items">
                                <div class="gallery-widget-item">
                                    <img src="/assets/images/widgets/gallery1.jpg" alt="Gallery">
                                    <a href="/assets/images/widgets/gallery1.jpg"><i class="fas fa-plus"></i></a>
                                </div>
                                <div class="gallery-widget-item">
                                    <img src="/assets/images/widgets/gallery2.jpg" alt="Gallery">
                                    <a href="/assets/images/widgets/gallery2.jpg"><i class="fas fa-plus"></i></a>
                                </div>
                                <div class="gallery-widget-item">
                                    <img src="/assets/images/widgets/gallery3.jpg" alt="Gallery">
                                    <a href="/assets/images/widgets/gallery3.jpg"><i class="fas fa-plus"></i></a>
                                </div>
                                <div class="gallery-widget-item">
                                    <img src="/assets/images/widgets/gallery4.jpg" alt="Gallery">
                                    <a href="/assets/images/widgets/gallery4.jpg"><i class="fas fa-plus"></i></a>
                                </div>
                                <div class="gallery-widget-item">
                                    <img src="/assets/images/widgets/gallery5.jpg" alt="Gallery">
                                    <a href="/assets/images/widgets/gallery5.jpg"><i class="fas fa-plus"></i></a>
                                </div>
                                <div class="gallery-widget-item">
                                    <img src="/assets/images/widgets/gallery6.jpg" alt="Gallery">
                                    <a href="/assets/images/widgets/gallery6.jpg"><i class="fas fa-plus"></i></a>
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
