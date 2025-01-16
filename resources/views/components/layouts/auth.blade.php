@props(['title' => ''])

<main>
    <div class="container-small page-login">
        <div class="flex" style="gap: 5rem">
            <div class="auth-page-form">
                <div class="text-center">
                    <a href="/">
                        <img src="/img/logoipsum-265.svg" alt=""/>
                    </a>
                </div>
                <h1 class="auth-page-title">{{ $title }}</h1>

                <form action="" method="post">
                    {{ $inputs }}

                    <button class="btn btn-primary btn-login w-full">{{ $title }}</button>

                    <div class="grid grid-cols-2 gap-1 social-auth-buttons">
                        <button
                            class="btn btn-default flex justify-center items-center gap-1"
                        >
                            <img src="/img/google.png" alt="" style="width: 20px"/>
                            Google
                        </button>
                        <button
                            class="btn btn-default flex justify-center items-center gap-1"
                        >
                            <img src="/img/facebook.png" alt="" style="width: 20px"/>
                            Facebook
                        </button>
                    </div>
                    @if($title == 'Register')
                        <div class="login-text-dont-have-account">
                            Already have an account? -
                            <a href="/login"> Click here to login </a>
                        </div>
                    @elseif($title == 'Login')
                        <div class="login-text-dont-have-account">
                            Don't have an account? -
                            <a href="/register"> Click here to create one</a>
                        </div>
                    @endif
                </form>
            </div>
            <div class="auth-page-image">
                <img src="/img/car-png-39071.png" alt="" class="img-responsive"/>
            </div>
        </div>
    </div>
</main>
