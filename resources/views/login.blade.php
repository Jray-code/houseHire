<x-layout>
    <div class="container-fluid mx-auto mt-5 p-4 ">
        <div class="row justify-content-center">
            <div class="col-md-6 col-lg-4">
                <div class="card shadow-lg border-0 rounded-5 mx-auto mt-5 p-4 ">
                    <h1 class="text-center">Log In</h1>
                    <div class="card-body">
    
                        <form class="mt-3" action="login-user" method="post">
                            @csrf
                            <div class="mb-3">
                                <x-label for="Username">Username</x-label>
                                <x-input type='email' name='email' id="email" placeholder='email@email.com' />
                                <x-error name='email' />
                            </div>
                            <div class="mb-3">
                                <label for="password" class="form-label">Password</label>
                                <x-input type='password' name='password' id="password" />
                                <x-error name='email' />
                                <x-error name='alert' />
                            </div>
                            <x-button type='submit'>Submit</x-button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    
</x-layout>