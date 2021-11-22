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

            <div class="mb-3">
                <a class="btn btn-primary btn-sm" href="{{ route('users.edit',$user->username) }}">Edit Profile</a>
                <a class="btn btn-primary btn-sm" href="#"><span data-feather="message-square"></span>Message</a>
            </div>
            <hr class="my-0" />
            <div class="card-body">
                {{ $profile->bio??'' }}
            </div>
        </div>
        <hr class="my-0" />
        <div class="card-body">
            <h5 class="h6 card-title">Skills</h5>
            @forelse (json_decode($profile->skills??'{}') as $skill)
                <a href="#" class="badge badge-primary mr-1 my-1">{{ $skill }}</a>
            @empty
                <p>No skills available</p>
            @endforelse


        </div>
        <hr class="my-0" />
        <div class="card-body">
            <h5 class="h6 card-title">About</h5>
            <ul class="list-unstyled mb-0">
                <li class="mb-1"><span data-feather="home" class="feather-sm mr-1"></span> Lives in <a
                        href="#">{{ $profile->address??'' }}</a></li>

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
                <li class="mb-1"><span class="fas fa-globe fa-fw mr-1"></span> <a href="{{ $profile->url_website??'' }}">WebSite link</a>
                </li>
                <li class="mb-1"><span class="fab fa-twitter fa-fw mr-1"></span> <a href="{{ $profile->url_twitter??'' }}">Twitter</a>
                </li>
                <li class="mb-1"><span class="fab fa-facebook fa-fw mr-1"></span> <a href="{{ $profile->url_facebook??'' }}">Facebook</a>
                </li>
                <li class="mb-1"><span class="fab fa-instagram fa-fw mr-1"></span> <a href="{{ $profile->url_instagram??'' }}">Instagram</a>
                </li>
                <li class="mb-1"><span class="fab fa-linkedin fa-fw mr-1"></span> <a href="{{ $profile->url_linkedin??'' }}">LinkedIn</a>
                </li>
            </ul>
        </div>

        <hr class="my-0" />
        <div class="card-body">
            <h5 class="h6 card-title">Contact Information</h5>
            <ul class="list-unstyled mb-0">
                <li><span class="px-3 fa fa-envelope"></span>{{ $user->email }}</li>
                <li><span class="px-3 fa fa-phone"></span>{{ $profile->mobile??'' }}</li>
                <li><span class="px-3 fa fa-globe"></span>{{ $profile->address??'' }}</li>
            </ul>
        </div>

        <hr class="my-0" />
        <div class="card-body">
            <h5 class="h6 card-title">Personal Information</h5>
            <ul class="list-unstyled mb-0">
                <li><span class="px-3">Gendar:</span>{{ $profile->gender??'' }}</li>
                <li><span class="px-3">Last IP:</span>{{ $profile->last_ip??'' }}</li>
                <li><span class="px-3">Login Count:</span>{{ $profile->login_count??'' }}</li>
            </ul>
        </div>
    </div>

</x-backend.app-layout>
