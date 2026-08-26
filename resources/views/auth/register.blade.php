<x-layouts.guest :title="'Sign up'">
    <h1 class="text-xl font-semibold mb-6 text-center">Create an account</h1>

    <form method="POST" action="{{ route('register') }}" class="space-y-4">
        @csrf

        <div>
            <label for="name" class="block text-sm font-medium mb-1">Name</label>
            <input
                id="name"
                type="text"
                name="name"
                value="{{ old('name') }}"
                required
                autofocus
                autocomplete="name"
                class="w-full rounded-md border border-[#e3e3e0] dark:border-[#3E3E3A] bg-transparent px-3 py-2 text-sm focus:outline-none focus:ring-2 focus:ring-[#1b1b18]/20 dark:focus:ring-white/20"
            >
            @error('name')
                <p class="mt-1 text-sm text-red-600">{{ $message }}</p>
            @enderror
        </div>

        <div>
            <label for="email" class="block text-sm font-medium mb-1">Email</label>
            <input
                id="email"
                type="email"
                name="email"
                value="{{ old('email') }}"
                required
                autocomplete="username"
                class="w-full rounded-md border border-[#e3e3e0] dark:border-[#3E3E3A] bg-transparent px-3 py-2 text-sm focus:outline-none focus:ring-2 focus:ring-[#1b1b18]/20 dark:focus:ring-white/20"
            >
            @error('email')
                <p class="mt-1 text-sm text-red-600">{{ $message }}</p>
            @enderror
        </div>

        <div>
            <label for="password" class="block text-sm font-medium mb-1">Password</label>
            <input
                id="password"
                type="password"
                name="password"
                required
                autocomplete="new-password"
                class="w-full rounded-md border border-[#e3e3e0] dark:border-[#3E3E3A] bg-transparent px-3 py-2 text-sm focus:outline-none focus:ring-2 focus:ring-[#1b1b18]/20 dark:focus:ring-white/20"
            >
            @error('password')
                <p class="mt-1 text-sm text-red-600">{{ $message }}</p>
            @enderror
        </div>

        <div>
            <label for="password_confirmation" class="block text-sm font-medium mb-1">Confirm password</label>
            <input
                id="password_confirmation"
                type="password"
                name="password_confirmation"
                required
                autocomplete="new-password"
                class="w-full rounded-md border border-[#e3e3e0] dark:border-[#3E3E3A] bg-transparent px-3 py-2 text-sm focus:outline-none focus:ring-2 focus:ring-[#1b1b18]/20 dark:focus:ring-white/20"
            >
        </div>

        <button
            type="submit"
            class="w-full rounded-md bg-[#1b1b18] dark:bg-[#eeeeec] text-white dark:text-[#1C1C1A] px-4 py-2 text-sm font-medium hover:opacity-90 transition-opacity"
        >
            Sign up
        </button>
    </form>

    <p class="mt-6 text-center text-sm text-[#706f6c] dark:text-[#A1A09A]">
        Already have an account?
        <a href="{{ route('login') }}" class="underline underline-offset-4">Log in</a>
    </p>
</x-layouts.guest>
