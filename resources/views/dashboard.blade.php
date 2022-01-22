    <style>
        .form-control-lg{
            position: flex;
            justify-content: right;
            align-items: right;
          }
          </style>
<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
            <input style="position:relative;left:90%;" name="book" id="book" class="form-control-lg" placeholder="Enter Book Name..." />
                <a href="/showbook">
                <button type="submit"
                class="w-full select-none font-bold whitespace-no-wrap p-10 align-items-center justify-content-center; rounded-lg text-base leading-normal no-underline text-gray-100 bg-blue-500 hover:bg-blue-700 sm:py-2">
                    {{ __('Search...') }}
                </button>
        </h2>
    </x-slot>
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                <main class="sm:container sm:mx-auto sm:max-w-lg sm:mt-10">
                <h1 class="text-center text-primary">Enter The Book Name</h1>
            <br />
    <style>
        .flex-wrap{
            justify-content: center;
            align-items: center;
          }
          </style>

<div class="flex flex-wrap">
    <a href="/typeahead_autocomplete">
    <button type="submit"
    class="w-full select-none font-bold whitespace-no-wrap p-40 align-items-center justify-content-center; rounded-lg text-base leading-normal no-underline text-gray-100 bg-blue-500 hover:bg-blue-700 sm:py-9">
        {{ __('Search a Book') }}
    </button>
</div>
<br>
<div class="flex flex-wrap">
    <a href="/view">
    <button type="submit"
    class="w-full select-none font-bold whitespace-no-wrap p-40 align-items-center justify-content-center; rounded-lg text-base leading-normal no-underline text-gray-100 bg-blue-500 hover:bg-blue-700 sm:py-9">
        {{ __('Search all books') }}
    </button>
</div>
<br>
<div class="flex flex-wrap">
    <a href="/insertbook">
    <button type="submit"
    class="w-full select-none font-bold whitespace-no-wrap p-40 align-items-center justify-content-center; rounded-lg text-base leading-normal no-underline text-gray-100 bg-blue-500 hover:bg-blue-700 sm:py-9">
        {{ __('Add a book') }}
    </button>
</div>
    <br>
<div class="flex flex-wrap">
    <a href="/updateBook">
    <button type="submit"
    class="w-full select-none font-bold whitespace-no-wrap p-40 align-items-center justify-content-center; rounded-lg text-base leading-normal no-underline text-gray-100 bg-blue-500 hover:bg-blue-700 sm:py-9">
        {{ __('Update a book') }}
    </button>
</div> 
    <br>
    <div class="flex flex-wrap">
        <a href="/updateBook">
        <button type="submit"
        class="w-full select-none font-bold whitespace-no-wrap p-40 align-items-center justify-content-center; rounded-lg text-base leading-normal no-underline text-gray-100 bg-blue-500 hover:bg-blue-700 sm:py-9">
            {{ __('Delete a book') }}
        </button>
</div>
</main>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
