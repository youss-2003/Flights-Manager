<nav id="navbar" class="fixed top-0 left-0 w-full bg-gray-900  z-50 transition-transform duration-500">
  <div class="max-w-screen-xl flex flex-wrap items-center justify-between mx-auto p-4">
    <a href="{{route('home')}}" class="flex items-center space-x-3 rtl:space-x-reverse">
        <img src="https://seeklogo.com/images/H/hong-kong-airlines-logo-B5E8D635C9-seeklogo.com.png" class="h-8" alt="Flowbite Logo" />
        <span class="self-center text-2xl font-semibold whitespace-nowrap text-white">XAIRLINES</span>
    </a>
    <button data-collapse-toggle="navbar-dropdown" type="button" class="inline-flex items-center p-2 w-10 h-10 justify-center text-sm rounded-lg md:hidden focus:outline-none focus:ring-2 text-gray-400 hover:bg-gray-700 focus:ring-gray-600" aria-controls="navbar-dropdown" aria-expanded="false">
        <span class="sr-only">Open main menu</span>
        <svg class="w-5 h-5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 17 14">
            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M1 1h15M1 7h15M1 13h15"/>
        </svg>
    </button>
    <div class="hidden w-full md:block md:w-auto" id="navbar-dropdown">
      <ul class="flex flex-col font-medium p-4 md:p-0 mt-4 border rounded-lg md:space-x-8 rtl:space-x-reverse md:flex-row md:mt-0 md:border-0">
        <li>
          <a href="{{route('home')}}" class="block py-2 px-3 md:border-0 text-white md:hover:text-[#FC0000] hover:bg-gray-700  md:hover:bg-transparent">Home</a>
        </li>
        <li>
          <a href="{{route('flight')}}" class="block py-2 px-3 md:border-0 text-white md:hover:text-[#FC0000] hover:bg-gray-700  md:hover:bg-transparent">Flights</a>
        </li>
        <li>
          <a href="/special-offers" class="block py-2 px-3 md:border-0 text-white md:hover:text-[#FC0000] hover:bg-gray-700  md:hover:bg-transparent">Special offers</a>
        </li>
        <li>
          <a href="/support" class="block py-2 px-3 md:border-0 text-white md:hover:text-[#FC0000] hover:bg-gray-700  md:hover:bg-transparent">Support</a>
        </li>
      </ul>
    </div>
  </div>
</nav>
<script>
    document.addEventListener("DOMContentLoaded", function () {
  const navbar = document.getElementById("navbar");
  let lastScrollY = window.scrollY;

  window.addEventListener("scroll", () => {
    if (window.scrollY > lastScrollY) {
      // Hide navbar on scroll down
      navbar.style.transform = "translateY(-100%)";
    } else {
      // Show navbar on scroll up
      navbar.style.transform = "translateY(0)";
    }
    lastScrollY = window.scrollY;
  });
});

</script>
