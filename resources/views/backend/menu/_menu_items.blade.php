
<x-backend.collaps-card :header="__('Category')" id="categoryCollaps" class="show">
    @foreach ($categories as $category)
        <label class="form-check">
            <input name="category" class="form-check-input" type="checkbox" value="{{ $category->id }}">
            <small class="form-check-label">
                {{ $category->name }}
            </small>
        </label>
    @endforeach
        <x-backend.invalid-feedback attribute="categories" />
        <div class="d-flex justify-content-between mb-3">
            <input type="button" class="selectAll btn btn-outline-primary" value="Select All">
            <input type="button" class="addToMenu btn btn-primary" value="Add to menu">
        </div>
</x-backend.collaps-card>
{{--category section end here--}}



<x-backend.collaps-card :header="__('Post')" id="postCollaps">

    @foreach ($posts as $post)
        <label class="form-check">
            <input name="post" class="form-check-input" type="checkbox" value="{{ $post->id }}">
            <small class="form-check-label">
              {{ substr($post->title,0,30) }}
            </small>
        </label>
    @endforeach

        <div class="d-flex justify-content-between mb-3">
            <input type="button" class="selectAll btn btn-outline-primary" value="Select All">
            <input type="button" class="addToMenu btn btn-primary" value="Add to menu">
        </div>

</x-backend.collaps-card>

{{--Post section end --}}



<x-backend.collaps-card :header="__('Custom links')" id="customCollaps" class="p-3 px-4">

    <div class="form-group row">
        <label class="col-form-label col-sm-4 text-sm-left px-0">Url</label>
        <div class="col-sm-8 px-0">
            <input type="text" class="form-control" placeholder="https://">
        </div>
    </div>

    <div class="form-group row">
        <label class="col-form-label col-sm-4 text-sm-left px-0" for="text">Link Text</label>
        <div class="col-sm-8 px-0">
            <input  id="text" type="text" class="form-control" placeholder="Menu Name">
        </div>
    </div>

    <div class="text-right p-0">
        <input type="submit" class="btn btn-primary" value="Add to menu">
    </div>
</x-backend.collaps-card>



{{--Custom links end here --}}
<script>

    $( document ).ready(function (){
        $('.selectAll').click(function (){
            $(this).parents('.collapse').find('input').each(function (){
                let input = $(this)
                if(input.prop('checked')){
                    input.prop('checked',false)
                }else{
                    input.prop('checked',true)
                }
            })

        });



        $('.addToMenu').click(function (event){

            if($.isNumeric("{{request('menu')}}")){
                var ids = [];
                var type = '';
                $(this).parents('.collapse').find('input').each(function (index){
                    let input = $(this)
                    if(input.prop('checked')&& input.attr('type') == 'checkbox'){
                        ids[index] = input.val()
                        type = input.attr('name');
                    }
                });
                var url = "{{ route('menus.store').'?menu='.request('menu') }}"
                var data = {menu:'{{request('menu')}}',type:type,data:ids,}
                axios.post(url,data)
                    .then(function (response){
                        if(response.status == 200){
                            console.log(response.data);
                            location.reload();
                        }
                    })
                    .catch(function (error){
                        console.log(error)
                    })
            }else {
                alert('Select a Menu on the top selection')
            }

        })
    })



</script>

