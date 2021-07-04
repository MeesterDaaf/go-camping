@extends('layouts.top-menu')

@section('subcontent')
    <!-- BEGIN: Content -->
    <div class="content">
        <h2 class="intro-y text-lg font-medium mt-10">
            Reizen
        </h2>
        <div class="grid grid-cols-12 gap-6 mt-5">
            <div class="intro-y col-span-12 flex flex-wrap sm:flex-nowrap items-center mt-2">
                <button class="btn btn-primary shadow-md mr-2"><i data-feather="briefcase" class="w-8 h-8 text-white"></i><span class="ml-2"> Voeg reis toe</span></button>
                <div class="hidden md:block mx-auto text-gray-600">Toon 1 t/m 3 van de 3 reizen</div>
                <div class="w-full sm:w-auto mt-3 sm:mt-0 sm:ml-auto md:ml-0">
                    <div class="w-56 relative text-gray-700 dark:text-gray-300">
                        <input type="text" class="form-control w-56 box pr-10 placeholder-theme-8" placeholder="Search...">
                        <i class="w-4 h-4 absolute my-auto inset-y-0 mr-3 right-0" data-feather="search"></i> 
                    </div>
                </div>
            </div>
            <!-- BEGIN: Users Layout -->
            @foreach($active_trips as $trip)
                <div class="intro-y col-span-12 md:col-span-6 lg:col-span-4">
                    <div class="box">
                        <div class="flex items-start px-5 pt-5">
                            <div class="w-full flex flex-col lg:flex-row items-center">
                                <div class="lg:ml-4 text-center lg:text-left mt-3 lg:mt-0">
                                    <a href="" class="font-medium text-xl">{{$trip->title}}</a> 
                                    <div class="text-gray-600 text-lg mt-0.5">{{\Carbon\Carbon::parse($trip->start_date)->format('d-M-y')}} - {{\Carbon\Carbon::parse($trip->end_date)->format('d-M-y')}}</div>
                                </div>
                            </div>
                            <div class="absolute right-0 top-0 mr-5 mt-3 dropdown">
                                <a class="dropdown-toggle w-5 h-5 block" href="javascript:;" aria-expanded="false"> <i data-feather="more-horizontal" class="w-5 h-5 text-gray-600 dark:text-gray-300"></i> </a>
                                <div class="dropdown-menu w-40">
                                    <div class="dropdown-menu__content box dark:bg-dark-1 p-2">
                                        <a href="" class="flex items-center block p-2 transition duration-300 ease-in-out bg-white dark:bg-dark-1 hover:bg-gray-200 dark:hover:bg-dark-2 rounded-md"> <i data-feather="edit-2" class="w-4 h-4 mr-2"></i> Edit </a>
                                        <a href="" class="flex items-center block p-2 transition duration-300 ease-in-out bg-white dark:bg-dark-1 hover:bg-gray-200 dark:hover:bg-dark-2 rounded-md"> <i data-feather="trash" class="w-4 h-4 mr-2"></i> Delete </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="text-center lg:text-right p-5 border-t border-gray-200 dark:border-dark-5">
                            <a href="{{route('trips.edit', $trip)}}" class="btn btn-primary py-1 px-2 mr-2">Bekijk</a>
                        </div>
                    </div>
                </div>
            @endforeach
            <!-- END: Users Layout -->
            <!-- BEGIN: Pagination -->
            {{-- <div class="intro-y col-span-12 flex flex-wrap sm:flex-row sm:flex-nowrap items-center">
                <ul class="pagination">
                    <li>
                        <a class="pagination__link" href=""> <i class="w-4 h-4" data-feather="chevrons-left"></i> </a>
                    </li>
                    <li>
                        <a class="pagination__link" href=""> <i class="w-4 h-4" data-feather="chevron-left"></i> </a>
                    </li>
                    <li> <a class="pagination__link" href="">...</a> </li>
                    <li> <a class="pagination__link" href="">1</a> </li>
                    <li> <a class="pagination__link pagination__link--active" href="">2</a> </li>
                    <li> <a class="pagination__link" href="">3</a> </li>
                    <li> <a class="pagination__link" href="">...</a> </li>
                    <li>
                        <a class="pagination__link" href=""> <i class="w-4 h-4" data-feather="chevron-right"></i> </a>
                    </li>
                    <li>
                        <a class="pagination__link" href=""> <i class="w-4 h-4" data-feather="chevrons-right"></i> </a>
                    </li>
                </ul>
                <select class="w-20 form-select box mt-3 sm:mt-0">
                    <option>10</option>
                    <option>25</option>
                    <option>35</option>
                    <option>50</option>
                </select>
            </div> --}}
            <!-- END: Pagination -->
        </div>
    </div>
    <!-- END: Content -->
      
@endsection