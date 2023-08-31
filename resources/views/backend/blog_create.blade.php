@include('backend.partials.head')
@include('backend.partials.side_menu')

<!-- ============================================================== -->
<!-- Start Page Content here -->
<!-- ============================================================== -->

<div class="content-page">
    <div class="content">

        <!-- Start container-fluid -->
        <div class="container-fluid">

            <!-- start  -->
            <div class="row">
                <div class="col-12">
                    <div>
                        <h4 class="header-title mb-3">Create Blog</h4>
                    </div>
                </div>
            </div>
            <!-- end row -->
            <div class="row">
                @if (session('success'))
                    <div class="alert alert-success">{{ session('success') }}</div>
                @endif
            </div>
            <div class="row">
                <div class="col-lg-6">
                    <div class="mt-5">
                        <h4 class="header-title mb-3">Fill form below </h4>

                        <form method="post" action="{{ route('blog.store') }}" enctype="multipart/form-data"> @csrf
                            <div class="form-group">
                                <label for="title">Blog Title</label>
                                <input type="text" class="form-control" id="title" name="title"
                                    placeholder="Blog Title">
                            </div>

                            <div class="form-group">
                                <label for="slug">Slug</label>
                                <input readonly type="text" class="form-control input-disabled disabled"
                                    id="slug" name="slug" placeholder="Blog slug">
                            </div>

                            {{-- post image --}}
                            <div class="form-group">
                                <label for="img"> Post Image </label> <br>
                                <input type="file" name="img" id="img"> <br><br>
                                <input type="text" name="alt" id="alt" placeholder="Alt text for image">
                            </div>
                            <div class="form-group">
                                <h3 class="mt-5">Blog Content</h3>
                                <br>
                                <p>
                                    <label for="pg1">Paragraph1</label> <br>
                                    <textarea name="pg1" id="pg1" cols="50" rows="3"></textarea>
                                </p>

                                <p>
                                    <label for="pg2">Paragraph2</label> <br>
                                    <textarea name="pg2" id="pg2" cols="50" rows="3"></textarea>
                                </p>

                                <p>
                                    <label for="pg3">Paragraph3</label> <br>
                                    <textarea name="pg3" id="pg3" cols="50" rows="3"></textarea>
                                </p>

                                <p>
                                    <label for="pg4">Paragraph4</label> <br>
                                    <textarea name="pg4" id="pg4" cols="50" rows="3"></textarea>
                                </p>

                                <p>
                                    <label for="pg5">Paragraph5</label> <br>
                                    <textarea name="pg5" id="pg5" cols="50" rows="3"></textarea>
                                </p>

                                <p>
                                    <label for="pg6">Paragraph6</label> <br>
                                    <textarea name="pg6" id="pg6" cols="50" rows="3"></textarea>
                                </p>

                                <p>
                                    <label for="pg7">Paragraph7</label> <br>
                                    <textarea name="pg7" id="pg7" cols="50" rows="3"></textarea>
                                </p>
                            </div>

                            <button type="submit" class="btn btn-primary">Submit</button>
                        </form>
                    </div>
                </div>

            </div>
            <!-- end row -->
        </div>
        <!-- end container-fluid -->

        @include('backend.partials.footer')
    </div>
    <!-- end content -->

</div>
<!-- END content-page -->

@include('backend.partials.bottom_js2')

{{-- page script --}}
<script defer>
    let title = document.querySelector('#title')
    let slug = document.querySelector('#slug')

    title.onchange = updateSlug;

    function updateSlug() {
        slug.value = title.value.toLowerCase().replaceAll(' ', '-')
    }
</script>
