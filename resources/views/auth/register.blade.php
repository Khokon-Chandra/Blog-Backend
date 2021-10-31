<x-guest-layout>
    <div class="row justify-content-center">
        <div class="col-md-6 text-center mb-5">
            <h2 class="heading-section">Register Account~</h2>
        </div>
    </div>
    <x-auth-session-status class="mb-4" :status="session('status')" />

    <div class="row justify-content-center">
        <div class="col-md-6 col-lg-5">
            <div class="login-wrap p-4 p-md-5">
                <div class="icon d-flex align-items-center justify-content-center">
                    <span class="fa fa-user-o"></span>
                </div>
                <span class="text-center mb-4 d-block">
                <h3 class="d-inline">Already registered? </h3><a href="{{ route('login') }}"> Log in</a>
                </span>
                <form action="{{ route('register') }}" method="POST" class="login-form">
                    @csrf
                    <div class="form-group">
                        <input type="text" name="name" class="form-control rounded-left" placeholder="Name" required>
                        <x-backend.invalid-feedback attribute="name" />
                    </div>
                    <div class="form-group">
                        <input type="email" name="email" class="form-control rounded-left" placeholder="Email Address" required>
                        <x-backend.invalid-feedback attribute="email" />
                    </div>
                    <div class="form-group">
                        <input type="password" name="password" class="form-control rounded-left" placeholder="Password">
                        <x-backend.invalid-feedback attribute="password" />
                    </div>

                    <div class="form-group">
                        <input type="password" name="password_confirmation" class="form-control rounded-left" placeholder="Confirm Password">
                    </div>

                    <div class="form-group">
                        <button type="submit" class="btn btn-primary rounded submit p-3 px-5">Register Now</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</x-guest-layout>
