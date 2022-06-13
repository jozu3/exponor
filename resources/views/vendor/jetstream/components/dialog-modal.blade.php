@props(['id' => null, 'maxWidth' => null])

<x-jet-modal :id="$id" :maxWidth="$maxWidth" {{ $attributes }} class="mt-20">
    <div class="px-6 py-4 bg-dark">
        <div class="text-lg">
            {{ $title }}
        </div>

        <div class="mt-4">
            {{ $content }}
        </div>
    </div>

    <div class="flex flex-row bg-dark justify-center px-6 py-4 bg-gray-100 text-center ">
        {{ $footer }}
    </div>
</x-jet-modal>
