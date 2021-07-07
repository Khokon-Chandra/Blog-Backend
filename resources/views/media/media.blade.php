<x-app-layout>
    <x-page-title pagename="Edit Post" />
        <x-content-card :title="__('Card Title')" :subTitle="__('card subtitle')">

            <div class="row no-gutters"> 
                    @forelse($media as $medium)
                    <div class="col-lg-2 col-md-3 col-sm-3 col-xs-12">
                        <img src="{{$medium->link}}" class="img-fluid">
                    </div>    
                    @empty
                    <p class="textcen">Media not found</p>
                    @endforelse
            </div>
    </x-content-card>
</x-app-layout>