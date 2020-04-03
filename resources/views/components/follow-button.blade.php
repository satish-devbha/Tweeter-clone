@unless (currentUser()->is($user))

    <form action="/profiles/{{ $user->name }}/follow" method="post">
        @csrf
        <button type="submit" class="bg-blue-500 rounded-full shadow py-2 px-4 text-white text-xs">
            {{ currentUser()->following($user) ? 'Unfollow Me' : 'Follow Me' }}
        </button>
    </form>

@endunless