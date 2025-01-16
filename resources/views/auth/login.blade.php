<x-base-layout title="Login" bodyCssClass="page-login">
    <x-layouts.auth title="Login">
        <x-slot:inputs>
            <div class="form-group">
                <input type="email" placeholder="Your Email"/>
            </div>
            <div class="form-group">
                <input type="password" placeholder="Your Password"/>
            </div>
            <div class="text-right mb-medium">
                <a href="/password-reset.html" class="auth-page-password-reset"
                >Reset Password</a
                >
            </div>
        </x-slot:inputs>
    </x-layouts.auth>
</x-base-layout>
