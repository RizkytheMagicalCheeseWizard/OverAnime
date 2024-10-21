<nav class="bg-black bg-opacity-50 py-4 px-8 fixed top-0 left-0 right-0 z-10">
    <div class="container mx-auto flex justify-between items-center">
      <div class="flex items-center space-x-2">
        <a href=""><img src="{{ asset('images/animelogo.png') }}" class="w-32 h-auto" alt="anime logo"></a>
      </div>
      <div class="hidden md:flex space-x-8 text-white font-semibold">
        <a href="#" class="hover:text-yellow-500">Home</a>
        <a href="#" class="hover:text-yellow-500">Live Action</a>
        <a href="#" class="hover:text-yellow-500">Movies</a>
        <a href="#" class="hover:text-yellow-500">Genres</a>
        <a href="#" class="hover:text-yellow-500">Vip</a>
      </div>
  
      <div class="flex items-center space-x-4">
        <div class="relative">
          <input 
            type="text" 
            placeholder="Look for something?" 
            class="rounded-full px-4 py-2 bg-gray-700 bg-opacity-50 text-white placeholder-gray-400 focus:outline-none focus:ring focus:ring-yellow-500"
          />
          <button class="absolute right-2 top-2 text-gray-400 hover:text-white">
            <img src="{{ asset('images/search.png') }}" alt="" class="w-6 h-6">
          </button>
        </div>
  
        <!-- Auth buttons -->
        <a href="#" class="px-4 py-2 border border-yellow-500 text-yellow-500 rounded hover:bg-yellow-500 hover:text-white transition">Login</a>
        <a href="#" class="px-4 py-2 bg-red-500 text-white rounded hover:bg-red-600 transition">Sign up</a>
      </div>
    </div>
  </nav>
  