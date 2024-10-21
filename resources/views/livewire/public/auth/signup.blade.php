<div class="flex flex-1 flex-col justify-center items-center h-[85vh] bg-slate-100">
    <div class="flex  ">
        <h2 class=" text-3xl font-semibold mb-3">Create an Account 100% Free</h2>
    </div>
    <div class="w-4/12 border p-5 rounded-lg shadow-lg bg-white">
        <div class=" p-5 rounded-lg">
            <form wire:submit="store">
                <div class="mb-3">
                    <label for="">FullName</label>
                    <input type="text" wire:model="name" class=" border w-full px-3 py-2 rounded">
                    @error('name')
                    <p class="text-red-500">{{$message}}</p>
                    @enderror

                </div>
                <div class="mb-3">
                    <label for="">Email</label>
                    <input type="email" wire:model="email" class=" border w-full px-3 py-2 rounded">
                    @error('email')
                    <p class="text-red-500">{{$message}}</p>
                    @enderror

                </div>
                <div class="mb-3">
                    <label for="">Password</label>
                    <input type="text" wire:model="password" class=" border w-full px-3 py-2 rounded">
                    @error('password')
                    <p class="text-red-500">{{$message}}</p>
                    @enderror

                </div>
                <div class=" mb-3 flex justify-end">
                    <input type="submit" class=" bg-teal-600 text-white px-3 py-2 rounded-lg self-end" value=" Create an Account">

                </div>
            </form>

        </div>
    </div>

</div>