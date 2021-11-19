<x-backend.app-layout>
    <h1 class="h3 mb-3">Profile</h1>
    <div class="card mb-3">
        <div class="card-header">
            <h5 class="card-title mb-0">Profile Details</h5>
        </div>
        <div class="card-body text-center">
            <img src="{{ $user->avatar }}" alt="Christina Mason" class="img-fluid rounded-circle mb-2" width="128"
                height="128" />
            <h5 class="card-title mb-0">{{ $user->name }}</h5>
            <div class="text-muted mb-2">Lead Developer</div>

            <div>
                <a class="btn btn-primary btn-sm" href="#">Edit Profile</a>
                <a class="btn btn-primary btn-sm" href="#"><span data-feather="message-square"></span>Message</a>
            </div>
        </div>
        <hr class="my-0" />
        <div class="card-body">
            <h5 class="h6 card-title">Skills</h5>
            <a href="#" class="badge badge-primary mr-1 my-1">HTML</a>
            <a href="#" class="badge badge-primary mr-1 my-1">JavaScript</a>
            <a href="#" class="badge badge-primary mr-1 my-1">Sass</a>
            <a href="#" class="badge badge-primary mr-1 my-1">Angular</a>
            <a href="#" class="badge badge-primary mr-1 my-1">Vue</a>
            <a href="#" class="badge badge-primary mr-1 my-1">React</a>
            <a href="#" class="badge badge-primary mr-1 my-1">Redux</a>
            <a href="#" class="badge badge-primary mr-1 my-1">UI</a>
            <a href="#" class="badge badge-primary mr-1 my-1">UX</a>
        </div>
        <hr class="my-0" />
        <div class="card-body">
            <h5 class="h6 card-title">About</h5>
            <ul class="list-unstyled mb-0">
                <li class="mb-1"><span data-feather="home" class="feather-sm mr-1"></span> Lives in <a
                        href="#">San Francisco, SA</a></li>

                <li class="mb-1"><span data-feather="briefcase" class="feather-sm mr-1"></span> Works
                    at <a href="#">GitHub</a></li>
                <li class="mb-1"><span data-feather="map-pin" class="feather-sm mr-1"></span> From <a
                        href="#">Boston</a></li>
            </ul>
        </div>
        <hr class="my-0" />
        <div class="card-body">
            <h5 class="h6 card-title">Elsewhere</h5>
            <ul class="list-unstyled mb-0">
                <li class="mb-1"><span class="fas fa-globe fa-fw mr-1"></span> <a href="#">staciehall.co</a>
                </li>
                <li class="mb-1"><span class="fab fa-twitter fa-fw mr-1"></span> <a href="#">Twitter</a>
                </li>
                <li class="mb-1"><span class="fab fa-facebook fa-fw mr-1"></span> <a href="#">Facebook</a>
                </li>
                <li class="mb-1"><span class="fab fa-instagram fa-fw mr-1"></span> <a href="#">Instagram</a>
                </li>
                <li class="mb-1"><span class="fab fa-linkedin fa-fw mr-1"></span> <a href="#">LinkedIn</a>
                </li>
            </ul>
        </div>
    </div>

</x-backend.app-layout>
