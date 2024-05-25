<x-guest-layout>
    <x-authentication-card>
        <!-- <x-slot name="logo">
            <x-authentication-card-logo />
        </x-slot> -->

        <div class="mb-4 text-sm text-gray-600">
            {{ __('Sebelum melanjutkan, bisakah Anda memverifikasi alamat email Anda dengan mengklik link yang baru saja kami kirimkan melalui email kepada Anda?') }}
        </div>

        @if (session('status') == 'verification-link-sent')
            <div class="mb-4 font-medium text-sm text-green-600">
                {{ __('Harap cek email untuk link verifikasi.') }}
            </div>
        @endif

        <div class="mt-4 flex items-center justify-between">
            <form id="verification-form" method="POST" action="{{ route('verification.send') }}">
                @csrf

                <div>
                    <x-button type="submit">
                        {{ __('Kirim Verifikasi Email') }}
                    </x-button>
                </div>
            </form>

            <div>
                <form method="POST" action="{{ route('logout') }}" class="inline">
                    @csrf

                    <button type="submit" class="underline text-sm text-gray-600 hover:text-gray-900 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500 ms-2">
                        {{ __('Log Out') }}
                    </button>
                </form>
            </div>
        </div>
    </x-authentication-card>
</x-guest-layout>