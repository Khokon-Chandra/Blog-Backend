<x-app-layout>

    <x-page-title pagename="Add Media file" />

    <x-content-card :title="__('Card Title')" :subTitle="__('card subtitle')">

        <form action="{{route('media.store')}}" method="POST" class="p-4 text-center">
            @csrf
            <div class="mb-3 card bg-light">
            <label for="upload" class="text-center p-4">Upload New Files/Photoes</label>
            <input type="file" name="media[]" multiple class="d-none" id="upload">
            </div>
            <div class="m-3">
                <x-button>Upload</x-button>
            </div>
        </form>
    </x-content-card>
</x-app-layout>