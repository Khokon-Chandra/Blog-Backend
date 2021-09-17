<x-backend.app-layout>
    <x-page-title pagename="Media Gallery" />
        <div class="mb-3">
            <a href="{{ route('media.create') }}" class="btn btn-primary" >Add Media Files</a>
        </div>
        <x-content-card >

            <div class="row no-gutters"> 
                    @forelse($media as $medium)
                    <div class="col-lg-2 col-md-3 col-sm-3 col-xs-12">
                        <img src="{{$medium->link}}" class="img-fluid" width="100%" height="auto">
                    </div>    
                    @empty
                    <p class="textcen">Media not found</p>
                    @endforelse
            </div>
    </x-content-card>
</x-backend.app-layout>