<div class="tab-pane fade show active" id="privacy" role="tabpanel">
    <div class="card">
        <div class="card-body">
            <h5 class="card-title">Assign User Roles</h5>

            <table class="table">
                <thead>
                    <tr>
                        <th width="30%">Roles</th>
                        <th>permissions</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($roles as $role)
                        <tr>
                            <td>
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="checkbox" id="{{ $role->name }}"

                                    @forelse ($user->roles as $userRole)
                                        @if($role->name === $userRole->name)
                                            checked
                                            @break
                                        @endif
                                    @empty

                                    @endforelse
                                     >
                                    <label class="form-check-label" for="{{ $role->name }}">{{ $role->name }}</label>
                                </div>
                            </td>
                            <td>
                                @foreach ($role->permissions as $permission)
                                    <span
                                        class="shadow border bg-light rounded d-inline">{{ $permission->name }}</span>
                                @endforeach
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>

@push('scripts')
<script>


    $('.form-check-input').change(function(){
        let username = "{{ $user->username }}"
        let role = $(this).attr('id')
        let url = "{{ route('users.update',$user->username) }}"
        let data = {assignRole:true, username:username, role:role, assign:false}
        if($(this).is(':checked')){
            data.assign = true
        }

        axios.put(url,data).then((response)=>{
            toastr.success(response.data);
        }).catch((error)=>{
            toastr.error('Something went wrong!! try again')
        })


    })
</script>

@endpush
