<x-backend.app-layout>
    <x-page-title pagename="Add Permission" />
    <x-alert />
    <x-backend.content-card>

        <div class="col-md-6 offset-md-3 p-3">
            <form id="createPermission" action="{{ route('permissions.store') }}" method="POST">
                @csrf
                <div class="mb-3">
                    <label for="permission">Permission</label>
                    <input type="text" id="permission" name="name" class="form-control">
                    <x-backend.invalid-feedback attribute="name" />
                </div>
                <div class="mb-3 text-right">
                    <input type="submit" value="Save Permission" class="btn btn-primary">
                </div>
            </form>
        </div>

    </x-backend.content-card>
    @push('scripts')
    <script>
        $('#createPermission').submit(function(event){
            event.preventDefault();
            let url = this.action
            let data = {name:$(this).find('input:text').val()}
            axios.post(url,data).then((response)=>{
                $(this).find('input:text').removeClass('is-invalid');
                toastr.success('Successfully a new permission created')
            }).catch((error)=>{
                $(this).find('input:text').addClass('form-control is-invalid');
                toastr.error(error.response.data.name[0])
            })
        });
    </script>
    @endpush
</x-backend.app-layout>
