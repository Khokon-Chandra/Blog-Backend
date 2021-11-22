<div class="tab-pane fade show active" id="account" role="tabpanel">

    <div class="card">
        <div class="card-header">

            <h5 class="card-title mb-0">Public info</h5>
        </div>
        <div class="card-body">
            <form id="publicInfo" action="{{ route('users.update', $user->username) }}" method="POST"
                enctype="multipart/form-data">
                <input type="hidden" id="username" value="{{ $user->username }}">
                <div class="row">
                    <div class="col-md-8">
                        <div class="form-group">
                            <label for="displayname">Display Name</label>
                            <input type="text" name="name" class="form-control" id="displayname" placeholder="Username"
                                value="{{ old('name', $user->name) }} ">
                        </div>
                        <div class="form-group">
                            <label for="inputUsername">Biography</label>
                            <textarea rows="2" class="form-control" id="inputBio"
                                placeholder="Tell something about yourself">{{ old('name', $user->bio) }}</textarea>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="text-center">
                            <img id="show-avatar" alt="Charles Hall" src="{{ $user->avatar }}"
                                class="rounded-circle img-responsive mt-2" width="128" height="128" />
                            <div class="mt-2">
                                <label for="avatar" class="btn btn-primary"><i class="fas fa-upload"></i>
                                    Upload</label>
                                <input class="d-none" type="file" name="avatar" id="avatar">
                            </div>
                            <small>For best results, use an image at least 128px by
                                128px in .jpg format</small>
                        </div>
                    </div>
                </div>

                <button type="submit" class="btn btn-primary">Save changes</button>
            </form>

        </div>
    </div>

    <div class="card">
        <div class="card-header">

            <h5 class="card-title mb-0">Private info</h5>
        </div>
        <div class="card-body">
            <form id="privateInfo" method="POST" action="{{ route('users.update', $user->username) }}">
                <div class="form-row">
                    <div class="form-group col-md-6">
                        <label for="inputFirstName">First name</label>
                        <input type="text" class="form-control" id="inputFirstName" placeholder="First name"
                            value="{{ $profile->first_name ?? '' }}">
                    </div>
                    <div class="form-group col-md-6">
                        <label for="inputLastName">Last name</label>
                        <input type="text" class="form-control" id="inputLastName" placeholder="Last name"
                            value="{{ $profile->last_name ?? '' }}">
                    </div>
                </div>

                <div class="form-group">
                    <label for="inputPhone">Phone Number</label>
                    <input type="number" class="form-control" id="inputPhone" value="{{ $profile->mobile ?? '' }}">
                </div>

                <div class="form-group">
                    <label for="inputAddress">Address</label>
                    <input type="text" class="form-control" id="inputAddress" placeholder="1234 Main St"
                        value="{{ $profile->address ?? '' }}">
                </div>

                <button type="submit" class="btn btn-primary">Save changes</button>
            </form>

        </div>
    </div>

</div>
@push('scripts')

    <script>
        $('#avatar').change(function(event) {
            const reader = new FileReader();
            reader.readAsDataURL(this.files[0]);
            let url = "{{ route('media.single.store') }}";
            let inputFile = event.target.files[0];
            let config = {
                headers: {
                    'Content-Type': 'multipart/form-data'
                }
            }
            var formData = new FormData();
            formData.append("file", event.target.files[0]);

            axios.post(url, formData, config)
                .then((response) => {
                    let img = response.data
                    $("#show-avatar").attr('src', img)
                }).catch((error) => {
                    console.log(error);
                })
        })
    </script>
    {{-- update public info --}}
    <script>
        $('#publicInfo').submit(function(event) {
            event.preventDefault();
            let url = this.action;
            let data = {
                publicInfo: true,
                username: $('#username').val(),
                name: $('#displayname').val(),
                bio: $('#inputBio').val(),
                avatar: $("#show-avatar").attr('src')
            }
            axios.put(url, data).then((response) => {
                console.log(response.data);
                toastr.success('Successfully Public Information Updated');
                location.reload();
            }).catch((error) => {
                console.log(error.response)
                toastr.error('Server error Please Try Again !!');

            })
        })
    </script>

    {{-- update private info --}}

    <script>
        $('#privateInfo').submit(function(event) {
            event.preventDefault();
            let url = this.action;
            let data = {
                privateInfo: true,
                username: $('#username').val(),
                first_name: $('#inputFirstName').val(),
                last_name: $('#inputLastName').val(),
                mobile: $('#inputPhone').val(),
                address: $('#inputAddress').val(),
            }

            axios.put(url, data).then((response) => {
                console.log(response.data);
                toastr.success('Successfully Private Information Updated');
            }).catch((error) => {
                toastr.error('Server error Please Try Again !!');
            })
        })
    </script>
@endpush
