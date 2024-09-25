<x-backend.app-layout>
    <x-page-title pagename="Edit Role" />
    <x-alert />
    <div class="mb-3">
        <a href="{{ route('roles.index') }}" class="btn btn-primary">Go to Roles</a>
    </div>
    <div class="row">
        <div class="col-md-4">
            <div class="p-3 bg-white">
                <p>Insert role name</p>
                <form id="updateRole" action="{{ route('roles.update') }}" method="POST">
                    <div class="mb-3">
                        <label for="role">Role *</label>
                        <input type="text" name="role" id="role" class="form-control" value="{{ $role->name }}">
                    </div>
                    <div class="mb-3 text-right">
                        <input type="submit" class="btn btn-primary" value="Save Role">
                    </div>
                </form>
            </div>
        </div>
        {{-- roles form sections --}}
        <div class="col-md-8">
            <div class="p-3 bg-white">
                <p>Permissions</p>
                <ul>
                    @foreach ($permissions as $permission)
                    <li class="border-top">
                        <label class="d-block p-2" for="permission{{ $permission->id }}">
                            <input class="checkbox"
                            @foreach ($role->permissions as $per)
                                @if($permission->id === $per->id)
                                checked
                                @endif
                            @endforeach
                             id="permission{{ $permission->id }}"
                            type="checkbox" value="{{ $permission->id }}">
                            <span>{{ $permission->name }}</span>
                        </label>
                    </li>
                    @endforeach
                </ul>

            </div>
        </div>
    </div>
    @push('scripts')
        <script>
            $(".checkbox").click(function() {
                let role_id = "{{ $role->id }}";
                let permission_id = $(this).val()
                let checked = $(this).is(':checked');
                var data = {
                    role:parseInt(role_id),
                    permission: permission_id,
                    status:checked,
                }
                var url = "{{ route('roles.givePermission') }}"
                axios.post(url,data).then((response)=>{
                    toastr.success(response.data)
                })

            })
        </script>
        <script>
            $('#updateRole').submit(function(event) {
                event.preventDefault();
                let url = this.action
                let data = {
                    id: {{ $role->id }},
                    name: $(this).find('input:text').val()
                }
                axios.put(url, data).then((response) => {
                    $(this).find('input:text').removeClass('is-invalid');
                    toastr.success('Successfully a new permission created')
                }).catch((error) => {
                    $(this).find('input:text').addClass('form-control is-invalid');
                    toastr.error(error.response.data.name[0])
                })
            });
        </script>
    @endpush
</x-backend.app-layout>
