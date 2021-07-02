<x-app-layout>
    <div class="container-fluid p-0">

    <x-page-title pagename="Posts" />
        <a href="{{route('post.add-new')}}" class="btn text-white mb-3" style="background:#222e3c;"> Add new</a>
        <div class="card">
            <div class="card-header">
                <h5 class="card-title">Basic Table</h5>
                <h6 class="card-subtitle text-muted">Using the most basic table markup, here’s how .table-based tables look in Bootstrap.</h6>
            </div>


           @if(session()->has('success'))
            <div class="alert alert-success p-3">{{session()->get('success') }}</div>
            @endif

            <table class="table table-striped">
                <thead>
                    <tr>
                        <th style="width:35%;">Title</th>
                        <th style="width:15%">Author</th>
                        <th style="width:15%">Category</th>
                        <th style="width:10%">Comments</th>
                        <th class="d-none d-md-table-cell" style="width:15%">Date</th>
                        <th style="width:10%;">Actions</th>
                    </tr>
                </thead>
                <tbody>

                    @forelse($posts as $post)
                    <tr>
                        <td> {{ $post->title }} </td>
                        <td> {{ $post->author->name }} </td>
                        <td> {{ $post->category->name }} </td>
                        <td> {{ $post->comments }} </td>
                        <td class="d-none d-md-table-cell"> {{ $post->created_at }} </td>
                        <td class="table-action">
                            <a href=" {{ route('post.update',['post'=>$post->slug]) }} "><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-edit-2 align-middle"><path d="M17 3a2.828 2.828 0 1 1 4 4L7.5 20.5 2 22l1.5-5.5L17 3z"></path></svg></a>
            
                            <form   method="POST" class="d-inline" action="{{ route('post.delete',['post'=>$post->slug]) }}">
                                @csrf
                                <button type="submit" class="btn px-0 d-inline"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-trash align-middle"><polyline points="3 6 5 6 21 6"></polyline><path d="M19 6v14a2 2 0 0 1-2 2H7a2 2 0 0 1-2-2V6m3 0V4a2 2 0 0 1 2-2h4a2 2 0 0 1 2 2v2"></path></svg></a></button>
                            </form>
                        </td>
                    </tr>
                    @empty
                    <tr><th>No post yet</th></tr>
                    @endforelse
                </tbody>
            </table>
                <!-- tab;e end -->
        </div>
        <!-- card end -->
    </div>
    <!-- container-fluid end -->
</x-app-layout>



