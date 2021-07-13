<x-guest-layout>
    <div class="row justify-content-center">
        <div class="col-md-6 text-center mb-5">
            <h2 class="heading-section">Login Form</h2>
        </div>
    </div>
    <x-auth-session-status class="mb-4" :status="session('status')" />

    <div class="row justify-content-center">
        <div class="col-md-6 col-lg-5">
            <div class="login-wrap p-4 p-md-5">
                <div class="icon d-flex align-items-center justify-content-center">
                    <span class="fa fa-user-o"></span>
                </div>
                <a href="{{ route('register') }}"><h3 class="text-center mb-4">Have an account?</h3></a>
                <form action="{{ route('login') }}" method="POST" class="login-form">
                    @csrf
                    <div class="form-group">
                        <input type="email" name="email" class="form-control rounded-left" placeholder="Email Address" required>
                        <x-invalid-feedback attribute="email" />
                    </div>
                    <div class="form-group">
                        <input type="password" name="password" class="form-control rounded-left" placeholder="Password" >
                        <x-invalid-feedback attribute="password" />
                    </div>
                    <div class="form-group d-md-flex">
                        <div class="w-50">
                            <label class="checkbox-wrap checkbox-primary">Remember Me
                                <input type="checkbox" name="remember">
                                <span class="checkmark"></span>
                            </label>
                        </div>
                        <div class="w-50 text-md-right">
                            <a href="{{ route('password.request') }}">Forgot Password</a>
                        </div>
                    </div>
                    <div class="form-group">
                        <button type="submit" class="btn btn-primary rounded submit p-3 px-5">Log in</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</x-guest-layout>