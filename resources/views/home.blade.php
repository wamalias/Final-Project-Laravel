<x-layout>
    <x-slot:title>{{ $title }}</x-slot:title>
    <x-slot:totalIncome>{{ $totalIncome }}</x-slot:totalIncome>
    <x-slot:totalOutcome>{{ $totalOutcome }}</x-slot:totalOutcome>
    <x-slot:diff>{{ $diff}}</x-slot:diff>
    <a href="/income/{{ Auth::user()->username }}?{{ http_build_query(request()->query()) }}" class="hidden sm:inline-flex items-center justify-center text-white bg-primary-700 hover:bg-primary-800 
    focus:ring-4 focus:ring-primary-300 font-medium rounded-lg text-xs px-3 py-1.5 mr-2 dark:bg-primary-600 dark:hover:bg-primary-700 
    focus:outline-none dark:focus:ring-primary-800">
      View Detail Income
    </a>
    <a href="/outcome/{{ Auth::user()->username }}?{{ http_build_query(request()->query()) }}" class="hidden sm:inline-flex items-center justify-center text-white bg-primary-700 hover:bg-primary-800 
    focus:ring-4 focus:ring-primary-300 font-medium rounded-lg text-xs px-3 py-1.5 mr-2 dark:bg-primary-600 dark:hover:bg-primary-700 
    focus:outline-none dark:focus:ring-primary-800">
      View Detail Outcome
    </a>
</x-layout>
