<x-backend.app-layout>
    <x-page-title pagename="Add New Role" />

    <div class="row">
        <div class="col-md-4">
            <div class="p-3 bg-white">
                <p>Insert role name</p>
                <form id="createRole" action="{{ route('access_control.roles.store') }}" method="POST">
                    <div class="mb-3">
                        <label for="role">Role *</label>
                        <input type="text" name="role" id="role" class="form-control">
                    </div>
                    <div class="mb-3 text-right">
                        <input type="submit" class="btn btn-primary" value="Create">
                    </div>
                </form>
            </div>
        </div>
        {{-- roles form sections --}}
        <div class="col-md-8">
            <div class="p-3 bg-white">
                <p>Permissions</p>
                <table class="table table-striped table-sm">
                    <thead>
                        <tr>
                            <th>Module</th>
                            <th class="text-right">read</th>
                            <th class="text-right">write</th>
                            <th class="text-right">delete</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>Windows</td>
                            <td class="text-right" for="read"><input id="read" type="checkbox" value="read"></td>
                            <td class="text-right" for="read"><input id="write" type="checkbox" value="write"></td>
                            <td class="text-right" for="read"><input id="delete" type="checkbox" value="delete"></td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
    @push('scripts')
    <script>
        $('#createRole').submit(function(event){

            event.preventDefault();
            let url = this.action
            let data = {name:$(this).find('input:text').val()}
            axios.post(url,data).then((response)=>{
                toastr.success('Have fun storming the castle!', 'Miracle Max Says')
            }).catch((response)=>{
                toastr.error('Please Insert valid data', 'Inconceivable!')
            })
        });
    </script>
    @endpush
</x-backend.app-layout>
