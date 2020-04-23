<div class="bg-blue-100 rounded-lg p-4">

    <h1 class="font-bold text-xl mb-4">Following</h1>

    <ul>
        @forelse (currentUser()->follows as $user)
            <li class="mb-4">
                <div>
                    <a href="{{ route('profile', $user->name) }}" class="flex items-center text-sm">
                        <img src="/images/40.jpg" alt="" class="rounded-full mr-2">
                        
                        {{ $user->name }}
                    </a>
                </div>
            </li>  
        @empty
            <li>No Friends yet!</li>      
        @endforelse
    </ul>

</div>