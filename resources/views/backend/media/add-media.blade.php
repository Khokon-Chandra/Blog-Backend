<x-backend.app-layout>

    <x-page-title pagename="Add Media file" />

    <x-backend.content-card>

        <form action="{{route('media.store')}}" method="POST" enctype="multipart/form-data" class="p-4 text-center">
            @csrf
            <div class="mb-3 card bg-light">
            <label for="upload" class="text-center p-4 shadow" style="border: dashed">Upload New Files/Photoes</label>
                <input type="file" name="media[]" multiple class="d-none" id="upload">
            </div>
            <div class="m-3">
                <x-button>Upload</x-button>
            </div>
        </form>
    </x-backend.content-card>
</x-backend.app-layout>
