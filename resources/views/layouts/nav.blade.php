<nav
class="absolute top-0 left-0 w-full z-10 bg-transparent md:flex-row md:flex-nowrap md:justify-start flex items-center p-4">
<div class="w-full mx-autp items-center flex justify-between md:flex-nowrap flex-wrap md:px-10 px-4">
    <a class="text-white text-sm uppercase hidden lg:inline-block font-semibold"
        href="">Dashboard</a>
   
    <ul class="flex-col md:flex-row list-none items-center hidden md:flex">
        <a class="text-blueGray-500 block" href="#pablo" onclick="openDropdown(event,'user-dropdown')">
            <div class="items-center flex">
                <span
                    class="w-12 h-12 text-sm text-white bg-blueGray-200 inline-flex items-center justify-center rounded-full"><img
                        alt="..." class="w-full rounded-full align-middle border-none shadow-lg"
                        src="../../assets/img/team-3-800x800.jpg" /></span>
            </div>
        </a>
        <div class="hidden bg-white text-base z-50 float-left py-2 list-none text-left rounded shadow-lg min-w-48"
            id="user-dropdown">
          
            <div class="h-0 my-2 border border-solid border-blueGray-100"></div>
            <form method="POST" action="{{ route('logout') }}">
                @csrf

                <x-responsive-nav-link :href="route('logout')"
                        onclick="event.preventDefault();
                                    this.closest('form').submit();">
                    {{ __('Log Out') }}
                </x-responsive-nav-link>
            </form>
        </div>
    </ul>
</div>
</nav>
<!-- Header -->
<script>
function openDropdown(event, dropdownID) {
    let element = event.target;
    while (element.nodeName !== "A") {
        element = element.parentNode;
    }
    Popper.createPopper(element, document.getElementById(dropdownID), {
        placement: "bottom-start"
    });
    document.getElementById(dropdownID).classList.toggle("hidden");
    document.getElementById(dropdownID).classList.toggle("block");
}
</script>
