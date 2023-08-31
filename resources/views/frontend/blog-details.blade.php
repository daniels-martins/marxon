@extends('layout.website')

@section('content')
    <!-- Blog Page Start -->
    <section class="services-area py-140 rpy-100">
        <div class="container">
            <div class="row blog-row">
                <div class="col-lg-8">
                    <div class="blog-details-content rmb-75">
                        <div class="blog-item">
                            <div class="image wow fadeInUp delay-0-2s">
                                <img src="/assets/images/blog/blog1.jpg" alt="Blog">
                            </div>
                            <div class="blog-content wow fadeInUp delay-0-2s">
                                <ul class="blog-meta">
                                    <li><i class="far fa-calendar-alt"></i> <a href="blog-details.html#">18 March,
                                            2022, {{ $post->created_at }}</a></li>
                                    <li><i class="far fa-user"></i> <a href="blog-details.html#">by - Admin</a></li>
                                    <li><i class="far fa-comment-dots"></i> <a href="blog-details.html#">x
                                            Comments</a></li>
                                </ul>
                                <h3>{{ $post->title }}</h3>
                                <p>{{ $post->pg1 }} </p>
                                <p>{{ $post->pg2 }} </p>

                                @if ($post->qoute1)
                                    <blockquote>
                                        {{$post->quote1}}
                                        <h6 class="name">{{$post->quoteAuthor()}}</h6>
                                    </blockquote>
                                @endif

                                @if ($post->pg3)
                                    <p>{{ $post->pg3 }} </p>
                                @endif


                                @if ($post->qoute2)
                                    <blockquote>
                                        {{$post->qoute2}}
                                        <h6 class="name">{{$post->quoteAuthor(2)}}</h6>
                                    </blockquote>
                                @endif

                                <p>{{ $post->pg4 }} </p>

                                @if ($post->pg5)
                                    <p>{{ $post->pg5 }} </p>
                                @endif


                                @if ($post->pg6)
                                    <p>{{ $post->pg6 }} </p>
                                @endif


                                @if ($post->pg7)
                                    <p>{{ $post->pg7 }} </p>
                                @endif


                                <div class="btn-share">
                                    <div class="tag-cloud">
                                        <b><b>Releted Tags :</b></b>
                                        <a href="blog.html">Agency</a>
                                        <a href="blog.html">Designing</a>
                                    </div>
                                    <div class="share-icons mb-20">
                                        <b>Share :</b>
                                        <a href="blog-details.html#"><i class="fab fa-facebook-f"></i></a>
                                        <a href="blog-details.html#"><i class="fab fa-twitter"></i></a>
                                        <a href="blog-details.html#"><i class="fab fa-linkedin-in"></i></a>
                                        <a href="blog-details.html#"><i class="fab fa-google-plus-g"></i></a>
                                    </div>
                                </div>
                                <div class="comment-item admin-comment mt-50 wow fadeInUp delay-0-2s">
                                    <div class="author-image">
                                        <img src="assets/images/blog/admin.jpg" alt="Author">
                                    </div>
                                    <div class="comment-details">
                                        <div class="name-date">
                                            <h5>David Beckham</h5>
                                        </div>
                                        <p>Phasellus nulla diam, pretium sit amet ex vel, feugiat fermentum massa.
                                            Vestibulum blandit</p>
                                        <div class="social-style-two pt-5">
                                            <a href="blog-details.html#"><i class="fab fa-facebook-f"></i></a>
                                            <a href="blog-details.html#"><i class="fab fa-twitter"></i></a>
                                            <a href="blog-details.html#"><i class="fab fa-linkedin-in"></i></a>
                                            <a href="blog-details.html#"><i class="fab fa-google-plus-g"></i></a>
                                        </div>
                                    </div>
                                </div>
                                <div class="comments pt-20 mb-60 wow fadeInUp delay-0-2s">
                                    <h4 class="comment-title mb-30">3 Comments</h4>
                                    <div class="comment-item">
                                        <div class="author-image">
                                            <img src="assets/images/blog/comment-author1.jpg" alt="Author">
                                        </div>
                                        <div class="comment-details">
                                            <div class="name-date">
                                                <h5>David Beckham</h5>
                                                <span class="date">5 days age</span>
                                            </div>
                                            <p>Phasellus nulla diam, pretium sit amet ex vel, feugiat fermentum
                                                massa. Vestibulum blandit faucibus arcu,</p>
                                            <form action="blog-details.html#">
                                                <input type="text" required placeholder="Typing ....">
                                                <button type="submit"><i class="fas fa-paper-plane"></i></button>
                                            </form>
                                        </div>
                                    </div>
                                    <div class="comment-item child-comment">
                                        <div class="author-image">
                                            <img src="assets/images/blog/comment-author2.jpg" alt="Author">
                                        </div>
                                        <div class="comment-details">
                                            <div class="name-date">
                                                <h5>David Beckham</h5>
                                                <span class="date">4 days age</span>
                                            </div>
                                            <p>Phasellus nulla diam, pretium sit amet ex vel, feugiat fermentum
                                                massa.</p>
                                            <form action="blog-details.html#">
                                                <input type="text" required placeholder="Typing ....">
                                                <button type="submit"><i class="fas fa-paper-plane"></i></button>
                                            </form>
                                        </div>
                                    </div>
                                    <div class="comment-item">
                                        <div class="author-image">
                                            <img src="assets/images/blog/comment-author3.jpg" alt="Author">
                                        </div>
                                        <div class="comment-details">
                                            <div class="name-date">
                                                <h5>Michael Keaton</h5>
                                                <span class="date">5 days age</span>
                                            </div>
                                            <p>Phasellus nulla diam, pretium sit amet ex vel, feugiat fermentum
                                                massa. Vestibulum blandit faucibus arcu,</p>
                                            <form action="blog-details.html#">
                                                <input type="text" required placeholder="Typing ....">
                                                <button type="submit"><i class="fas fa-paper-plane"></i></button>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                                <form id="comment-page" class="comment-form wow fadeInUp delay-0-2s">
                                    <h4 class="comment-title mb-30">Add Comment</h4>
                                    <div class="row clearfix">
                                        <div class="col-sm-6">
                                            <div class="form-group">
                                                <input type="text" id="name" name="name" class="form-control"
                                                    placeholder="full name" required="">
                                            </div>
                                        </div>
                                        <div class="col-sm-6">
                                            <div class="form-group">
                                                <input type="email" id="email" name="email" class="form-control"
                                                    placeholder="Email Address" required="">
                                            </div>
                                        </div>
                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <textarea name="message" id="message" rows="5" class="form-control" placeholder="comment" required=""></textarea>
                                            </div>
                                        </div>
                                        <div class="col-md-12">
                                            <div class="form-group mb-10">
                                                <button class="theme-btn" type="submit">post comment</button>
                                            </div>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="blog-sidebar">
                        {{-- <div class="widget search-widget wow fadeInUp delay-0-2s">
                            <form action="blog-details.html#">
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
                                @foreach ($posts as $post)
                                    <div class="blog-widget-item">
                                        <div class="image">
                                            <img src="/{{$post->img}}" alt="post image">
                                        </div>
                                        <div class="blog-widget-content">
                                            <ul class="blog-meta">
                                                <li><i class="far fa-calendar-alt"></i> <a href="blog-details.html#">{{$post->created_at}}</a></li>
                                            </ul>
                                            <h5><a href="blog-details.html">{{$post->title}}</a></h5>
                                        </div>
                                    </div>
                                @endforeach
                                <div class="blog-widget-item">
                                    <div class="image">
                                        <img src="/assets/images/widgets/blog2.jpg" alt="Blog">
                                    </div>
                                    <div class="blog-widget-content">
                                        <ul class="blog-meta">
                                            <li><i class="far fa-calendar-alt"></i> <a href="blog-details.html#">18
                                                    March, 2022</a></li>
                                        </ul>
                                        <h5><a href="blog-details.html">Providing brilliant ideas for your
                                                business</a></h5>
                                    </div>
                                </div>
                                <div class="blog-widget-item">
                                    <div class="image">
                                        <img src="/assets/images/widgets/blog3.jpg" alt="Blog">
                                    </div>
                                    <div class="blog-widget-content">
                                        <ul class="blog-meta">
                                            <li><i class="far fa-calendar-alt"></i> <a href="blog-details.html#">18
                                                    March, 2022</a></li>
                                        </ul>
                                        <h5><a href="blog-details.html">Providing brilliant ideas for your
                                                business</a></h5>
                                    </div>
                                </div>
                                <div class="more-btn w-100 pt-10 text-center">
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
