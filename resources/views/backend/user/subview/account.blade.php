<div class="tab-pane fade show active" id="account" role="tabpanel">

    <div class="card">
        <div class="card-header">

            <h5 class="card-title mb-0">Public info</h5>
        </div>
        <div class="card-body">
            <form action="" method="POST" enctype="multipart/form-data">
                <div class="row">
                    <div class="col-md-8">
                        <div class="form-group">
                            <label for="inputUsername">Display Name</label>
                            <input type="text" name="name" class="form-control" id="inputUsername" placeholder="Username" value="{{ old('name',$user->name)}} ">
                        </div>
                        <div class="form-group">
                            <label for="inputUsername">Biography</label>
                            <textarea rows="2" class="form-control" id="inputBio" placeholder="Tell something about yourself">{{ old('name',$user->bio)}}</textarea>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="text-center">
                            <img alt="Charles Hall" src="{{ $user->avatar }}" class="rounded-circle img-responsive mt-2" width="128" height="128" />
                            <div class="mt-2">
                                <label for="avatar" class="btn btn-primary"><i class="fas fa-upload"></i> Upload</label>
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
            <form>
                <div class="form-row">
                    <div class="form-group col-md-6">
                        <label for="inputFirstName">First name</label>
                        <input type="text" class="form-control" id="inputFirstName" placeholder="First name">
                    </div>
                    <div class="form-group col-md-6">
                        <label for="inputLastName">Last name</label>
                        <input type="text" class="form-control" id="inputLastName" placeholder="Last name">
                    </div>
                </div>
                <div class="form-group">
                    <label for="inputEmail4">Email</label>
                    <input type="email" class="form-control" id="inputEmail4" placeholder="Email">
                </div>
                <div class="form-group">
                    <label for="inputAddress">Address</label>
                    <input type="text" class="form-control" id="inputAddress" placeholder="1234 Main St">
                </div>
                <div class="form-group">
                    <label for="inputAddress2">Address 2</label>
                    <input type="text" class="form-control" id="inputAddress2" placeholder="Apartment, studio, or floor">
                </div>
                <div class="form-row">
                    <div class="form-group col-md-6">
                        <label for="inputCity">City</label>
                        <input type="text" class="form-control" id="inputCity">
                    </div>
                    <div class="form-group col-md-4">
                        <label for="inputState">State</label>
                        <select id="inputState" class="form-control">
                            <option selected>Choose...</option>
                            <option>...</option>
                        </select>
                    </div>
                    <div class="form-group col-md-2">
                        <label for="inputZip">Zip</label>
                        <input type="text" class="form-control" id="inputZip">
                    </div>
                </div>
                <button type="submit" class="btn btn-primary">Save changes</button>
            </form>

        </div>
    </div>

</div>
