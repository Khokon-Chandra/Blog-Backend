<x-backend.app-layout>

    <x-page-title pagename="Posts" />
    <a href="{{route('article.posts.create')}}" class="btn text-white mb-3" style="background:#222e3c;"> Add new</a>
    <div class="card">
        <x-alert />

        <div class="card-body">
            <table id="datatable" class="display table table-striped hover" style="width: 100%">
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
                        <td> {{ $post->author->name??'  ' }} </td>
                        <td>
                            @forelse ($post->categories as $category)
                            {{ $category->name }},
                            @empty
                            Uncategorized
                            @endforelse
                        </td>
                        <td> {{ $post->comments()->count() }} </td>
                        <td class="d-none d-md-table-cell"> {{ $post->created_at->format("j F  Y") }} </td>
                        <td class="table-action">
                            <a href=" {{ route('article.posts.edit',['post'=>$post->slug]) }} "><svg
                                    xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                    fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                    stroke-linejoin="round" class="feather feather-edit-2 align-middle">
                                    <path d="M17 3a2.828 2.828 0 1 1 4 4L7.5 20.5 2 22l1.5-5.5L17 3z"></path>
                                </svg></a>

                            <form method="POST" class="d-inline"
                                action="{{ route('article.posts.destroy',['post'=>$post->slug]) }}">
                                @method('DELETE')
                                @csrf
                                <button type="submit" class="btn px-0 d-inline"><svg xmlns="http://www.w3.org/2000/svg"
                                        width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                        stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                                        class="feather feather-trash align-middle">
                                        <polyline points="3 6 5 6 21 6"></polyline>
                                        <path
                                            d="M19 6v14a2 2 0 0 1-2 2H7a2 2 0 0 1-2-2V6m3 0V4a2 2 0 0 1 2-2h4a2 2 0 0 1 2 2v2">
                                        </path>
                                    </svg></a></button>
                            </form>
                        </td>
                    </tr>
                    @empty
                    <tr>
                        <th class="text-center" colspan="6">No post yet</th>
                    </tr>
                    @endforelse
                </tbody>
            </table>
        </div>
        <!-- tab;e end -->

    </div>
    <!-- card end -->

</x-backend.app-layout>
