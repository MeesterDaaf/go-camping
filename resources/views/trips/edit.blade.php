@extends('layouts.top-menu')

@section('subcontent')
    <!-- BEGIN: Content -->
    <div class="content">
        <h2 class="intro-y text-lg font-medium mt-10">
            Bewerk Reis
        </h2>
        <div class="intro-y box mt-5">
            <div class="flex flex-col sm:flex-row items-center p-5 border-b border-gray-200 dark:border-dark-5">
                <h2 class="font-medium text-base mr-auto">
                    Welke spullen neem je mee?
                </h2>
            </div>
            <div id="catogory-select" class="p-2">
                <div class="contains">
                    <div id="radio" class="p-5">
                        <div class="preview grid">
                            <div class="grid grid-cols-2 gap-4">
                                <div class="existing-cats">
                                    <label>Welke categorieen kies je</label>
                                    <div class="flex flex-col mt-2">
                                        @livewire('list-all-categories', ['categories'=> $categories, 'trip'=> $trip])
                                    </div>
                                </div>
                                <div class="new-cats w-1/2">
                                    @livewire('category-form', ['trip'=> $trip])
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
       
        <div class="intro-y box mt-5">
            <div id="item-select" class="p-2">
                <div class="contains">
                    <div id="radio" class="p-5">
                        <div class="preview">
                            <div class="mt-1">
                                <label>Welke spullen kies je</label>
                                <div class="container overflow-x-hidden">
                                    @livewire('show-items',['trip'=> $trip])
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- END: Content -->
      
@endsection