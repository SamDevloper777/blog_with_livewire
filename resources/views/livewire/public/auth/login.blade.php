<div>
    <div class="flex flex-1 bg-slate-100 items-center justify-center h-screen flex-col">

        <div class="flex">
            <h2 class="text-2xl font-semibold">Login</h2>
        </div>
        <div class="w-4/12 bg-white shadow-md">
            <div class="border p-5 rounded-lg">
                <a href="{{ url('auth/google') }}" class="flex mb-2 items-center justify-center py-2 text-gray-700 rounded shadow-md bg-slate-50">
                    <img class="w-6 h-6 mr-2" src="https://developers.google.com/identity/images/g-logo.png" alt="Google logo">
                    <span>Sign in with Google</span>
                </a>

                <form wire:submit="login">

                    <div class="mb-3">
                        <label for="">email</label>
                        <input type="text" wire.model="email" name="email" class="border w-full px-3 py-2 rounded">
                        @error('email')
                        <p class="text-red-500">{{$message}}</p>
                        @enderror
                    </div>
                    <div class="mb-3">
                        <label for="">password</label>
                        <input type="password" wire.model="password" name="password" class="border w-full px-3 py-2 rounded">
                        @error('password')
                        <p class="text-red-500">{{$message}}</p>
                        @enderror
                    </div>
                    <div class="mb-3">

                        <input type="submit" class="bg-teal-500 text-white  w-full px-3 py-2 rounded" value="Login Here">

                    </div>
                </form>

            </div>
        </div>

        @session('error')
        <p class="text-red-600 font-semibold text-xl">{{session('error ')}}</p>
        @endsession
    </div>
</div>