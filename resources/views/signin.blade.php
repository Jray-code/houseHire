<x-layout>
    <div class="container-fluid mx-auto mt-5 p-4 ">
        <div class="row justify-content-center">
            <div class="col-md-6 col-lg-4">
                <div class="card shadow-lg border-0 rounded-5 mx-auto mt-5 p-4 ">
                    <h1 class="text-center">Register</h1>
                    <div class="card-body">
                        <form class="mt-3" action="create-user" method='post'>
                            @csrf
                            <div class="mb-3">
                                <x-label for='name'>Username</x-label>
                                <x-input type="text" name='name' placeholder='Eric John' />
                                <x-error name='name' />
                            </div>

                            <div class="mb-3">
                                <x-label for='email'>Email</x-label>
                                <x-input type="email" name='email' placeholder='eric@email.com' />
                                <x-error name='email' />
                            </div>
                            <div class="mb-3">
                                <x-label for='password'>Password</x-label>
                                <x-input type="password" name='password' />
                                <x-error name='password' />
                            </div>
                            <div class="mb-3">
                                <x-label for='password_confirmation'>Confirm Password</x-label>
                                <x-input type="password" name='password_confirmation' />
                            </div>
                            <div class="mb-3">
                                <x-button type='submit'>Submit</x-button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-layout>