<x-backend.app-layout>

    <x-page-title pagename="Posts" />
    <a href="{{route('posts.create')}}" class="btn btn-primary text-white mb-3"> Add new</a>
    <div class="card">

        <x-alert />

        <div class="card-body">
            <table id="datatable" class="display table table-striped hover" style="width: 100%">
                <thead>
                    <tr>
                        <th style="width: 10%">Image</th>
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
                        <td><img src="{{ $post->feature_image }}" alt="" style="height: 50px; width:50px"></td>
                        <td> {{ $post->title }} </td>
                        <td> {{ $post->author->name??'  ' }} </td>
                        <td>
                            @forelse ($post->categories as $category)
                            {{ $category->name }},
                            @empty
                            Uncategorized
                            @endforelse
                        </td>
                        <td> {{ $post->comments_count }} </td>
                        <td class="d-none d-md-table-cell"> {{ $post->created_at->format("j F  Y") }} </td>
                        <td class="table-action">
                            <x-backend.edit-action :action="route('posts.edit',$post->id)" />
                             <x-backend.delete-action :action=" route('posts.destroy',$post->id)" />
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
