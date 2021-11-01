<x-backend.collaps-card :header="__('Feature Image')" id="featureCollaps" class="show">
    <div class="border-top p-3 mb-3">
        <p>Feature Image</p>
        <a id="featureImagePlaceholder" type="button" data-toggle="modal" data-target="#defaultModalSuccess">
           @if (!empty($post->feature_image))
               <img src="{{  $post->feature_image }}" alt="" width="100%">
           @else
           <button class="btn btn-primary"> Set Feature Image</button>
           @endif
        </a>
        <input type="hidden" name="feature_image" id="featureImage" value="{{ $post->feature_image??old('feature_image') }}">
    </div>
    @include('backend.post.add-post.__media_modal')

    <script>

        document.querySelectorAll('.galleryImage').forEach(function(item){
           item.addEventListener('click',function(event){
            document.querySelector('#featureImagePlaceholder').innerHTML = this.outerHTML;
            document.querySelector('#featureImage').value = this.src;
           })
        });


    </script>
</x-backend.collaps-card>
