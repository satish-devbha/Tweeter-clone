<div class="border border-blue-400 rounded-lg px-8 py-6 mb-8">
    <form action="/tweets" method="POST">
        @csrf

        <textarea 
            name="body"
            class="w-full"
            placeholder="What's up doc?"
            
        ></textarea>

        <hr class="my-4">

        <footer class="flex justify-between items-center">
            <img src="{{ currentUser()->avatar }}" 
                alt="Your Photo" 
                class="rounded-full mr-2" width="40" height="40">

            <button type="submit" class="bg-blue-500 rounded-lg shadow py-2 px-2 text-white">Tweet-a-boo</button>
        </footer>    
    </form>

    @error('body')
        <p class="text-red-500 text-sm mt-2">{{ $message }}</p>
    @enderror
</div>