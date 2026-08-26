<x-layouts.guest :title="'Log in'">
    <h1 class="text-xl font-semibold mb-6 text-center">Log in</h1>

    @if (session('status'))
        <div class="mb-4 text-sm font-medium text-green-600">
            {{ session('status') }}
        </div>
    @endif

    <form method="POST" action="{{ route('login') }}" class="space-y-4">
        @csrf

        <div>
            <label for="email" class="block text-sm font-medium mb-1">Email</label>
            <input
                id="email"
                type="email"
                name="email"
                value="{{ old('email') }}"
                required
                autofocus
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
                autocomplete="current-password"
                class="w-full rounded-md border border-[#e3e3e0] dark:border-[#3E3E3A] bg-transparent px-3 py-2 text-sm focus:outline-none focus:ring-2 focus:ring-[#1b1b18]/20 dark:focus:ring-white/20"
            >
            @error('password')
                <p class="mt-1 text-sm text-red-600">{{ $message }}</p>
            @enderror
        </div>

        <div class="flex items-center justify-between">
            <label class="flex items-center gap-2 text-sm">
                <input type="checkbox" name="remember" class="rounded border-[#e3e3e0] dark:border-[#3E3E3A]">
                Remember me
            </label>
        </div>

        <button
            type="submit"
            class="w-full rounded-md bg-[#1b1b18] dark:bg-[#eeeeec] text-white dark:text-[#1C1C1A] px-4 py-2 text-sm font-medium hover:opacity-90 transition-opacity"
        >
            Log in
        </button>
    </form>

    <p class="mt-6 text-center text-sm text-[#706f6c] dark:text-[#A1A09A]">
        Don't have an account?
        <a href="{{ route('register') }}" class="underline underline-offset-4">Sign up</a>
    </p>
</x-layouts.guest>
