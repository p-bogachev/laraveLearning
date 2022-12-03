<x-card>
    <x-card-body>
        <div class="mb-4">
            <h2 class="h4">
                <a href=" {{ route('blog.show', $post->id) }}">

                    {{ $post->title }}

                </a>
            </h2>

            <div class="medium text-muted">
                {{ now()->format('m.d.Y H:i:s') }}
            </div>
        </div>
    </x-card-body>
</x-card>
