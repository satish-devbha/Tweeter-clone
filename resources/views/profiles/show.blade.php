<x-app>
    <header class="mb-6 relative">
        
        <div class="relative">
            <img 
                src="/images/default-profile-banner.jpg" 
                alt="Profile Banner"
                class="mb-2"
            />

            <img src="/images/50.jpg" 
                alt="" 
                class="rounded-full mr-2 absolute bottom-0 transform -translate-x-1/2 translate-y-1/2"
                width="150"
                style="left: 50%; ">
        </div>

        <div class="flex justify-between items-center mb-6">
            <div>
                <h2 class="font-bold text-2xl mb-0">{{ $user->name }}</h2>
                <p class="text-sm">Joined {{ $user->created_at->diffForHumans() }}</p>
            </div>

            <div class="flex">
                @can ('edit', $user)
                    <a href="{{ $user->path('edit') }}" class="rounded-full shadow py-2 px-4 text-black text-xs mr-2">Edit Profile</a>
                @endcan
                    
                <x-follow-button :user="$user"></x-follow-button>
            </div>
        </div>

        <p class="text-sm">
            Lorem ipsum dolor sit amet consectetur adipisicing elit. Asperiores eum alias veniam sint impedit vitae soluta ipsa minus consequuntur nemo eos, dolorem, voluptatibus odio a numquam eius, error labore ipsam.
        </p>
    
    </header>

    @include('_timeline', [
        'tweets' => $user->tweets
    ])

</x-app>