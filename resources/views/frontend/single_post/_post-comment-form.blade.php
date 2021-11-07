
<x-alert />
<div class="leave-comments-area">
    <h4 class="title-bg">Leave Comments</h4>
    <form method="POST" action="{{ route('comments.store') }}">
        @csrf
        @method('POST')
        <fieldset>
            <input type="hidden" name="post_slug" value="{{ $post->slug }}">
            <div class="form-group">
                <label>Your comment here...</label>
                <textarea name="message" cols="40" rows="10" class="textarea form-control"></textarea>
                @error('message')
                    <div class="invalid-feedback text-danger">{{ $message }}</div>
                @enderror
            </div>
            <div class="form-group">
                <button class="btn-send" type="submit">Post Comment</button>
            </div>
        </fieldset>
    </form>
</div>
