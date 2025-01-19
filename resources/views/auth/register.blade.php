<x-base-layout title="Register" bodyCssClass="page-signup">
    <x-layouts.auth title="Register">
        <x-slot:inputs>
            <div class="form-group">
                <input type="email" placeholder="Your Email"/>
            </div>
            <div class="form-group">
                <input type="password" placeholder="Your Password"/>
            </div>
            <div class="form-group">
                <input type="password" placeholder="Repeat Password"/>
            </div>
            <hr/>
            <div class="form-group">
                <input type="text" placeholder="First Name"/>
            </div>
            <div class="form-group">
                <input type="text" placeholder="Last Name"/>
            </div>
            <div class="form-group">
                <input type="text" placeholder="Phone"/>
            </div>
        </x-slot:inputs>
    </x-layouts.auth>
</x-base-layout>
