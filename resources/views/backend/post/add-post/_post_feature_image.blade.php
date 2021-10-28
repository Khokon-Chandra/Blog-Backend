<x-backend.post-collaps :header="__('Feature Image')" id="featureCollaps">

    <div class="border-top p-3 mb-3">
        <p>Feature Image</p>
        <form action="" method="POST" enctype="multipart/form-data">
            @csrf
            @method('PUT')
            <input type="file" name="feature_image" class="form-control mb-2">
            <div class="form-group text-center">
                <input type="submit" class="btn btn-outline-primary form-control" value="Add Image">
            </div>
        </form>
    </div>
</x-backend.post-collaps>
