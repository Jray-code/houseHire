<x-layout>
    <div class="container mx-auto mt-5" style="width: 400px;">
        <h1>Sign in</h1>
        <form action="">
            <div class="mb-3">
                <x-label for="Username">Username</x-label>
                <x-input type='email' name='username' id="username" placeholder='email@email.com'/>
            </div>
            <div class="mb-3">
                <label for="password" class="form-label">Password</label>
                <x-input type='password' name='password' id="password" placeholder=''/>
            </div>
            <button type="submit" class="btn btn-primary">Signin</button>
        </form>
    </div>

</x-layout>
