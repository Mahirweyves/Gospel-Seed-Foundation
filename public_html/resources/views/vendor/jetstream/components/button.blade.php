<button {{ $attributes->merge(['type' => 'submit', 'class' => 'inline-flex items-center px-4 py-2 bg-gray-800 border 
    border-transparent rounded-md font-semibold text-xs text-white uppercase tracking-widest hover:bg-gray-700 
    active:bg-gray-900 focus:outline-none focus:border-gray-900 focus:ring focus:ring-gray-300 
    disabled:opacity-25 transition']) }}>
    {{ $slot }}
</button>

<!-- <button {{ $attributes->merge(['type' => 'submit', 'class' => 'inline-flex justify-center py-1 px-1 border border-transparent shadow-sm
          text-sm font-medium rounded-md text-white focus:outline-none focus:ring-2
          focus:ring-offset-2 focus:ring-indigo-500 bg-indigo-600 hover:bg-indigo-700']) }}>
    {{ $slot }}
</button> -->