
<x-alert />
<div class="leave-comments-area">
    <h4 class="title-bg">Leave Comments</h4>
    <form id="commentForm" method="POST" action="{{ route('comments.store') }}">
        @csrf
        @method('POST')
        <fieldset>
            <input id="post" type="hidden" name="post_slug" value="{{ $post->slug }}">
            <div class="form-group">
                <label>Your comment here...</label>
                <textarea id="commentBox" name="message" cols="40" rows="10" class="textarea form-control"></textarea>
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
@push('scripts')
<script>
    $('#commentForm').submit(function(event){
        event.preventDefault();
        let post = $('#post').val()
        let comment = $('#commentBox').val()
        let url = this.action
        if(comment === ''){
            alert('Please insert your comment');
        }else{
            axios.post(url,{post_slug:post, message:comment}).then((response)=>{
                alert('comment inserted')
                location.reload();
            }).catch((error)=>{
                console.log(error.response)
            })
        }
    });

</script>
@endpush
