@foreach ($services as $service)
<div class="col-xl-4 col-md-6">
    <div class="service-item wow fadeInUp delay-0-8s">
        <div class="icon">
            <img src="/{{ $service->icon }}" alt="Icon">
        </div>
        <h4>{{ $service->title }} </h4>
        <a href="{{ route('services') }}" class="read-more">Explore <i
                class="fas fa-long-arrow-alt-right"></i></a>
    </div>
</div>
@endforeach
