@extends('layouts.auth')

@section('main')
    <section class="section register min-vh-100 d-flex flex-column align-items-center justify-content-center py-4">
        <div class="container">
            <div class="row justify-content-center">
            <div class="col-lg-4 col-md-6 d-flex flex-column align-items-center justify-content-center">

                <div class="card mb-3">

                <div class="card-body">

                    <div class="pt-4 pb-2 text-center">
                        <img src="img/rng3.png" alt="" width="40%" class="img-fluid">
                        <p class="text-center small">SI-RN <br> Balai Prasarana Permukiman Wilayah Kalimantan Timur </p>
                    </div>

                    <form class="row g-3 needs-validation" method="POST" action="{{ route('login') }}">
                    @csrf
                    <div class="col-12">
                        <label for="yourUsername" class="form-label">Username</label>
                        <div class="input-group has-validation">
                            <span class="input-group-text" id="inputGroupPrepend">
                                <i class="bi bi-person-circle"></i>
                            </span>
                            <input type="text" name="username" class="form-control @error('username') is-invalid @enderror" id="username" required autofocus value="{{ old('username') }}">
                            @error('username')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>
                    </div>

                    <div class="col-12">
                        <label for="password" class="form-label">Password</label>
                        <div class="input-group has-validation">
                            <span class="input-group-text" id="inputGroupPrepend">
                                <i class="bi bi-key-fill"></i>
                            </span>
                            <input type="password" name="password" class="form-control @error('password') is-invalid @enderror" id="password" required value="{{ old('password') }}">
                            @error('password')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>
                    </div>

                    <div class="col-12">
                        <button class="btn btn-primary w-100" type="submit">Login</button>
                    </div>
                    </form>

                </div>
                </div>

            </div>
            </div>
        </div>

    </section>
@endsection

@push('scripts')
    <!-- JS Libraies -->
    <script>
        function togglePassword() {
            var passwordInput = document.getElementById('password');
            var toggleIcon = document.getElementById('toggle-icon');

            if (passwordInput.type === 'password') {
                passwordInput.type = 'text';
                toggleIcon.src =
                    'data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABkAAAAZCAYAAADE6YVjAAAACXBIWXMAAAsTAAALEwEAmpwYAAABlElEQVR4nO3VO2uUQRTG8Z8aRWtvjXFtzH4C08UyJHYisdBgraidioilCQiClbixNZbxWlpqgigpRRRvhU0QVPQLyIRnC5d3lqypAvk3wzlzznnnXGZeNtmobEUbR3Es60j062IHTuIxfmEFb/A860r0jzAV+4GYxhcs4SwOVOyGcQ6v8Bmn1xJ8L57hLcYHPNh4/J5iT83oED7gDnY27LcxiweYSU962YW7eI9W7+Z+fMWVygHO4E8CXEQncilrE1dT7n1dxVBqf7Pi0E7AIz360eibMircwsvEdzlCbRxnk0ETc7jRuMM2LOJSEb5hQp15XKjsldLd7+M7kfirmSz2yWQmPfifTJa6mQzlI6WG/Xoy2qMv8m8crvjdxotuT2QKyjRcqzhM50OdlGgu8qmK/fVcznLv/qGV+e5k3nsZSWnmszZlUPzu4R0OVg6welOfxGjSYEzGr7x1u9fiUN6gT3iN8023N7QyeeXB/NinfFW24wQe4ie+Yzmv8HLkH1jA8diviy3pwVj+J2ORi36TDchfeq1U7UHX4ukAAAAASUVORK5CYII='; // Open eye icon
            } else {
                passwordInput.type = 'password';
                toggleIcon.src =
                    'data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABkAAAAZCAYAAADE6YVjAAAACXBIWXMAAAsTAAALEwEAmpwYAAACS0lEQVR4nO1VO2hUURBdG1FLQXD13XPmzrxVWMFGQUwj/gq/hKgRvxEVDDEoiCAiLCgWSnpbxUZrO8VKsPSDlagRbET84ydGDSLzdldW2bd5KRabTPPefczMmXPuzLxSadr+p6WIexW83jUAg+xT8Ic/pxQYY1xq5Fmj3FbKMwVf+9PIWwo5XxFZkQEE6Vfwu4oMFM09Q8k+Ix8pON5IeCoCeyLiOiN7/azgTaNMGPjCGRQGsMRSpdw1yjuF1JIkmdvJX4McUXBCRWqFAJTcpeRng1xL03TeZP4p4g5n2mSwCIgGvjJydXsG5Gklf2qQ4zkF9CnkgVHGlHJPGUdaAf7kAY4a5FsKHPoX4IwzSEPckg/AT4Y4rEGXp+AVo/zyhO38I+Jm91dysJlgt3dFDHF9niwZA8ThhkTbmwzK5fKcvJhUZJVRviqwqaSUUSVH8pzrTGXMGURgWxOgAqh3FMlZ+XGukIz6S28mBbmyA5P7BlxuvQOFHDPwSS4ToKqUt95M9STkoIEfDehpFxDJi34HSh7QhVpxgKwLg/S3ZQAsM8pLn6W/qxUZcEaRPNjm0scjOZQkyWyjvHdm/r0tQJCtjTE4mSML1mZDSF4lOb8JUGSSk6wAXjDIBxPZ2dF5cQgLlLyh4Jciu6harc40xMNKeW7kHW+IyQqqMyI3NnbWOT8beSIlhxRY43r7/nJZnbGSbwx86DIVSt4A2JC1bAsD1zdbhuBjXxtKPm0szZqFsKQ0FfNJ9ZVgQfaXumUGueR/tq4BTFupgP0GTJSuIaQkgNUAAAAASUVORK5CYII='; // Closed eye icon
            }
        }
    </script>
    <!-- Page Specific JS File -->
@endpush