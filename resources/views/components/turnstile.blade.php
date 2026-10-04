@props([
    'theme' => 'auto',
    'size' => 'normal',
    'action' => null,
    'cData' => null,
    'fieldName' => 'cf-turnstile-response',
])

@php
    $siteKey = config('services.turnstile.key', '1x00000000000000000000AA');
    $containerId = 'cf-turnstile-' . uniqid();
@endphp

@once
    <script src="https://challenges.cloudflare.com/turnstile/v0/api.js?render=explicit" async defer></script>
@endonce

<div
    wire:ignore
    id="{{ $containerId }}-wrapper"
    x-data="{
        widgetId: null,
        init() {
            this.mount();
            document.addEventListener('livewire:navigated', () => this.mount());
        },
        mount() {
            const container = this.$refs.turnstileContainer || document.getElementById('{{ $containerId }}');
            if (!container) return;

            const renderWidget = () => {
                if (window.turnstile && typeof window.turnstile.render === 'function') {
                    if (this.widgetId !== null) {
                        try {
                            window.turnstile.remove(this.widgetId);
                        } catch (e) {}
                    }
                    this.widgetId = window.turnstile.render(container, {
                        sitekey: '{{ $siteKey }}',
                        theme: '{{ $theme }}',
                        size: '{{ $size }}',
                        @if($action) action: '{{ $action }}', @endif
                        @if($cData) cdata: '{{ $cData }}', @endif
                        'response-field-name': '{{ $fieldName }}',
                    });
                } else {
                    setTimeout(renderWidget, 50);
                }
            };

            renderWidget();
        },
        destroy() {
            if (this.widgetId !== null && window.turnstile) {
                try {
                    window.turnstile.remove(this.widgetId);
                } catch (e) {}
            }
        }
    }"
    {{ $attributes->merge(['class' => 'my-3']) }}
>
    <div id="{{ $containerId }}" x-ref="turnstileContainer"></div>
    <script>
        (function() {
            if (!window.Alpine) {
                function initTurnstileVanilla() {
                    var container = document.getElementById('{{ $containerId }}');
                    if (!container) return;

                    var poll = function() {
                        if (window.turnstile && typeof window.turnstile.render === 'function') {
                            if (!container.dataset.turnstileRendered) {
                                container.dataset.turnstileRendered = 'true';
                                window.turnstile.render(container, {
                                    sitekey: '{{ $siteKey }}',
                                    theme: '{{ $theme }}',
                                    size: '{{ $size }}',
                                    @if($action) action: '{{ $action }}', @endif
                                    @if($cData) cdata: '{{ $cData }}', @endif
                                    'response-field-name': '{{ $fieldName }}'
                                });
                            }
                        } else {
                            setTimeout(poll, 50);
                        }
                    };
                    poll();
                }

                if (document.readyState === 'loading') {
                    document.addEventListener('DOMContentLoaded', initTurnstileVanilla);
                } else {
                    initTurnstileVanilla();
                }

                document.addEventListener('livewire:navigated', initTurnstileVanilla);
            }
        })();
    </script>

    @error($fieldName)
        <p class="text-sm text-red-600 mt-1" style="color: #dc2626; font-size: 0.875rem; margin-top: 0.25rem;">{{ $message }}</p>
    @enderror
</div>
