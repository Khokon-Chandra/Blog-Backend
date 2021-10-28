<x-backend.post-collaps :header="__('Post Excerpt')" id="excerptCollaps">
<div class="border-top p-3 mb-3">
    <p>Post Excerpt</p>
    <form action="" method="POST">
        @csrf
        @method('PUT')
        <textarea name="excerpt" rows="3" class="form-control mb-3"></textarea>
        <div class="form-group text-center">
            <input type="submit" class="btn btn-outline-primary form-control" value="Add Image">
        </div>
    </form>
</div>
</x-backend.post-collaps>
