<div class="relative lg:ml-auto">
    <div class="flex items-center">
        
        <input wire:model.live.debounce.300ms="searchBox" type="text"
        
            placeholder="Search" style="padding-left: 30px; "
            class="block w-30 md:w-30 h-8 md:h-10 shadow-sm border-none rounded-md pl-4 pr-4 py-2 focus:outline-none bg-gray-50 text-sm text-gray-700"
            >
            
    </div>
    <span class="absolute right-50 top-2 text-sm text-pink-500">
        <i class="fas fa-search" style="color: pink; margin-left: 2px;"></i>
    </span>
</div>
