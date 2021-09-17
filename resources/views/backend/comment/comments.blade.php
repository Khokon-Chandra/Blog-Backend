<x-backend.app-layout>
    <x-page-title pagename="Comments" />
    <x-alert />
    <x-content-card :title="__('See all comments')" :subTitle="__('card subtitle')">
        <div class="card-body">
            <table class="table table-striped">
                <thead>
                    <tr>              
                        <th style="width:20%">Author</th>
                        <th style="width:30%">Comment</th>
                        <th style="width:10%">In response to</th>
                        <th class="d-none d-md-table-cell" style="width:15%">Date</th>
                        <th style="width:10%;">Actions</th>
                    </tr>
                </thead>
                <tbody>
                    @forelse($comments as $comment)
                    <tr>
                        <td> {{ $comment->author->name}} </td>
                        <td> {{ Str::substr($comment->message, 0, 100) }} </td>
                        <td> {{ $comment->post->title }} </td>
                        <td class="d-none d-md-table-cell"> {{ $comment->created_at->format("j F  Y") }} </td>
                        <td class="table-action">
                            <a href=" {{ route('comments.edit',['comment'=>$comment->id]) }} "><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-edit-2 align-middle"><path d="M17 3a2.828 2.828 0 1 1 4 4L7.5 20.5 2 22l1.5-5.5L17 3z"></path></svg></a>
                            <form   method="POST" class="d-inline" action="{{ route('comments.destroy',['comment'=>$comment->id]) }}">
                                @method('DELETE')
                                @csrf
                                <button type="submit" class="btn px-0 d-inline"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-trash align-middle"><polyline points="3 6 5 6 21 6"></polyline><path d="M19 6v14a2 2 0 0 1-2 2H7a2 2 0 0 1-2-2V6m3 0V4a2 2 0 0 1 2-2h4a2 2 0 0 1 2 2v2"></path></svg></a></button>
                            </form>
                        </td>
                    </tr>
                    @empty
                    <tr><th class="text-center" colspan="6">No post yet</th></tr>
                    @endforelse
                </tbody>
            </table>
             <!-- pagination -->
             <div class="px-3 mt-3">
                {{ $comments->links() }}
                </div>
            </div>
        <!-- card end -->

        
    </x-content-card>
</x-backend.app-layout>